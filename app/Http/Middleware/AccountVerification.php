<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AccountVerification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $email = $request->email;
        $user = null;

        if(! $email){
            $user = $request->user();
        }else{
            $user = User::where('email', $email)->first();
        }

        if(! $user || ! $user->account_verification){
            return response()->json([
                'result' => false,
                'msg' => 'La cuenta no esta verificadas.',
                'error_code' => 1006,
                'data'=> null
            ], 403);
        }
        
        return $next($request);
    }
}
