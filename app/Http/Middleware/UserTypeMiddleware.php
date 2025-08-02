<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class UserTypeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$user_type): Response
    {
        $user = $request->user();
        $allowedTypes = array_map('intval', $user_type);
        $userTypeId = (int) $user->user_type_id;

        //Log::info('User type id:', ['type' => gettype($user->user_type_id), 'value' => $user->user_type_id]);
        //Log::info('Allowed types:', $allowedTypes);

        if (!$user || !in_array($userTypeId, $allowedTypes)) {
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
