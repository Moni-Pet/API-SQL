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
                'status' => false,
                'msg' => ''
            ]);
        }
    }
}
