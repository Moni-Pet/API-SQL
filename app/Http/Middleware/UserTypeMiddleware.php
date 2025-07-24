<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserTypeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $user_type): Response
    {
        $user = $request->user();
         $allowedTypes = explode(',', $user_type);
        if(!$user || !in_array($user->user_type_id, $allowedTypes)){
            return response()->json([
                'result' => false,
                'msg' => 'No tienes permiso para realizar esta acción',
                'error_code' => 1104,
                'data' => null
            ], 403);
        }
        return $next($request);
    }
}
