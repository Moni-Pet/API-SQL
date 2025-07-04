<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Mail\Account_activation;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class AuthController extends Controller
{
    public function sendActivationEmail(User $user){
        $url = URL::temporarySignedRoute(
            'activate.account',
            now()->addMinutes(30),
            ['email' => $user->email]
        );

        Mail::to($user->email)->send(new Account_activation($url, $user->name));
    }

    public function register(RegisterRequest $request){
        $user_type_id = $request->user_type_id ?? 3;
        
        $user = User::create([
            'user_type_id' => $user_type_id,
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
            'msg' => "Usuario registrado correctamente",
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
    
}
