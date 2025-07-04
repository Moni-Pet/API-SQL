<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function activateAccount(Request $request)
    {
        if (!$request->hasValidSignature()) {
            return view('mails.error', ['message' => 'Puede que el enlace haya caducado o no sea valido.']);
        }

        $email = $request->query('email');
        $user = User::where('email', $email)->first();

        if (!$user) {
            return view('mails.error', ['message' => 'Usuario no encontrado.']);
        }

        if ($user->account_verification !== null) {
            return view('mails.already_activated', ['message' => 'La cuenta ya fue activada anteriormente.']);
        }

        $user->update([
            'account_verification' => Carbon::now(),
            'activation_token_created_at' => null,
        ]);

        return view('mails.success', ['message' => 'Cuenta activada exitosamente.']);
    }

}
