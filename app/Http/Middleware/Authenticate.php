<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if (!$request->expectsJson()) {
            abort(response()->json([
                'status' => false,
                'msg' => 'El token es invalido o ha expirado.',
                'error_code' => 1003,
                'data' => null
            ], 401));
        }
        return null;
    }
}
