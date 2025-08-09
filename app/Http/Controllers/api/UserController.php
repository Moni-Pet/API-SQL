<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Mail\Account_activation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        if (! $data) {
            return response()->json([
                'status' => false,
                'msg' => 'Los recursos solicitados no fueron encontrados',
                'error_code' => 1201,
                'data' => null
            ], 404);
        }
        return response()->json([
            'status' => true,
            'msg' => 'Los usuarios fueron encontrados correctamente.',
            'error_code' => null,
            'data' => $data
        ], 200);
    }
    public function show($id_user)
    {
        $data_user = User::find($id_user);
        if (! $data_user) {
            return response()->json([
                'status' => false,
                'msg' => 'El recurso solicitado no fue encontrado',
                'error_code' => 1202,
                'data' => null
            ], 404);
        }
        return response()->json([
            'status' => true,
            'msg' => 'El usuario fue encontrado correctamente.',
            'error_code' => null,
            'data' => $data_user
        ], 200);
    }
    public function store(CreateUserRequest $request)
    {
        $user = User::create([
            'user_type_id' => $request->user_type_id,
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
            'msg' => "Usuario $request->name creado correctamente",
            'error_code' => null,
            'data' => null
        ], 201);
    }
    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::find($id);
        if (! $user) {
            return response()->json([
                'result' => false,
                'msg' => 'El recurso solicitado no fue encontrado',
                'error_code' => 1202,
                'data' => null
            ], 404);
        }
        $fields =[
            'user_type_id',
            'name',
            'last_name',
            'last_name2',
            'email',
            'gender',
            'birth_date'
        ];

        $data = $request->only($fields);
        if ($request->has('email') && $request->email !== $user->email) {
            $user->account_verification = null;
            $user->save();
            $this->sendActivationEmail($user);
        }

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Log::info('Datos que se van a actualizar:', $data);
        $user->update($data);

        if ($request->filled('password')) {
            $user->save();
        }

        return response()->json([
            'result' => true,
            'msg' => 'Usuario modificado correctamente',
            'error_code' => null,
            'data' => null
        ], 201);
    }
    public function destroy(int $id) 
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró el usuario especificado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $user->delete();

        return response()->json([
            'result' => true,
            'msg' => "Se ha eliminado a " . $user->name . " correctamente.",
            'error_code' => null,
            'data' => null,
        ], 200);

    }
    private function sendActivationEmail(User $user)
    {
        $url = URL::temporarySignedRoute(
            'activate.account',
            now()->addMinutes(30),
            ['email' => $user->email]
        );
        Mail::to($user->email)->send(new Account_activation($url, $user->name));
    }
}
