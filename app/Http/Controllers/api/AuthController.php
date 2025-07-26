<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\TwoAfVerificationRequest;
use App\Mail\Account_activation;
use App\Mail\Code2af_verification;
use App\Models\User;
use Illuminate\Http\Client\ResponseSequence;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use PhpParser\Node\Stmt\Return_;

use function PHPUnit\Framework\isNull;

/**
 * Controlador responsable de la autenticación de usuario
 * Metodos que incluye:
 * -
 * 
 */

class AuthController extends Controller
{
    /**
     * Summary of register
     * @param \App\Http\Requests\RegisterRequest $request
     * @return mixed|\Illuminate\Http\JsonResponse
     */
    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'last_name2' => $request->last_name2,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'birth_date' => $request->birth_date
        ]);

        $this->sendActivationEmail($user);

        return response()->json([
            'result' => true,
            'msg' => "Te has registrado correctamente $request->name",
            'error_code' => null,
            'data' => [
                'user_type_id' => $user->user_type_id,
                'name' => $user->name,
                'last_name' => $user->last_name,
                'mother_last_name' => $user->last_name2,
                'email' => $user->email
            ]
        ], 201);
    }

    public function resendEmailVerification(Request $request)
    {
        //
    }

    /**
     * Summary of login
     * @param \App\Http\Requests\LoginRequest $request
     * @return mixed|\Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response()->json([
                'result' => false,
                'msg' => 'Las credenciales proporcionadas son incorrectas.',
                'error_code' => 1001,
                'data' => null
            ], 401);
        }

        $this->sendVerificationCode($user);

        return response()->json([
            'result' => false,
            'msg' => 'Los datos de inicio de sesión son correctas.',
            'error_code' => null,
            'data' => [
                'email' => $request->email
            ]
        ], 201);
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        if (! $user) {
            return response()->json([
                'result' => false,
                'msg' => 'El usuario no fue encontrado',
                'error_code' => 1101,
                'data' => null
            ], 404);
        }

        $user->currentAccessToken()->delete();
        return response()->json([
            'response' => true,
            'msg' => 'Sesion finalizada correctamente',
            'error_code' => null,
            'data' => null
        ], 200);
    }

    /**
     * Summary of verify2af
     * @param \App\Http\Requests\TwoAfVerificationRequest $request
     * @return mixed|\Illuminate\Http\JsonResponse
     */
    public function verifyTAF(TwoAfVerificationRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        if (! $user) {
            return response()->json([
                'result' => false,
                'msg' => 'El usuario no fue encontrado.',
                'error_code' => 1101,
                'data' => null
            ], 404);
        }
        if (! Hash::check($request->code, $user->two_factor_code) || now()->gt($user->two_factor_expires_at)) {
            return response()->json([
                'result' => false,
                'msg' => 'El código de verificación es inválido o ha expirado.',
                'error_code' => 1003,
                'data' => null
            ], 403);
        }

        if ($user->currentAccessToken()) {
            $user->currentAccessToken()->delete();
        }
        $token = $user->createToken('token_default')->plainTextToken;

        $user->two_factor_code = null;
        $user->two_factor_expires_at = null;
        $user->save();

        return response()->json([
            'result' => true,
            'msg' => 'Codigo verificado correctamente.',
            'error_code' => null,
            'data' => [
                'token' => $token,
                'token_type' => 'Bearer'
            ]
        ], 200);
    }

    /**
     * Summary of sendActivationEmail
     * @param \App\Models\User $user
     * @return void
     */
    private function sendActivationEmail(User $user)
    {
        $url = URL::temporarySignedRoute(
            'activate.account',
            now()->addMinutes(30),
            ['email' => $user->email]
        );

        Mail::to($user->email)->send(new Account_activation($url, $user->name));
    }

    /**
     * Summary of sendVerificationCode
     * @param mixed $email
     * @return mixed|\Illuminate\Http\JsonResponse
     */
    private function sendVerificationCode(User $user)
    {
        $twoFactorCode = rand(100000, 999999);
        $user->two_factor_code = Hash::make($twoFactorCode);
        $user->two_factor_expires_at = now()->addMinutes(10);
        $user->save();

        Mail::to($user->email)->send(new Code2af_verification($user->name, $twoFactorCode));
        return null;
    }

    /**
     * Summary of resendVerificationCode
     * @param \Illuminate\Http\Request $request
     * @return mixed|\Illuminate\Http\JsonResponse
     */
    public function resendVerificationCode(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (! $user) {
            return response()->json([
                'result' => 'false',
                'msg' => 'El usuario no fue encontrado.',
                'code' => 1101,
                'data' => null
            ], 404);
        }
        $this->sendVerificationCode($user);
        return response()->json([
            'result' => true,
            'msg' => 'Codigo enviado correctamente.',
            'error_code' => null,
            'data' => null
        ]);
    }

    /**
     * Summary of me
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function me(Request $request)
    {
        $user = $request->user();
        if (! $user) {
            return response()->json([
                'status' => false,
                'msg' => 'El usuario no fue encontrado. ',
                'error_code' => 1101,
                'data' => null
            ], 404);
        }

        return response()->json([
            'status' => true,
            'msg' => 'Informacion del usuario encontrada correctamente. ',
            'error_code' => 1101,
            'data' => $user
        ], 200);
    }
}
