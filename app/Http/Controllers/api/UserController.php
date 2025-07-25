<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function me(Request $request) {
        $user = $request->user();

        if (! $user) {
            return response()->json([
                'result' => false,
                'msg' => 'No autenticado',
                'error_code' => 401,
                'data' => null,
            ], 401);
        }

        return response()->json([
            'result' => true,
            'msg' => 'Usuario autenticado',
            'error_code' => null,
                'data' => [
                    'name'       => $user->name,
                    'last_name'  => $user->last_name,
                    'last_name2' => $user->last_name2,
                    'email'      => $user->email,
                    'gender'     => $user->gender,
                    'birth_date' => $user->birth_date,
                ],
        ]);
    }
}
