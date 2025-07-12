<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\EmailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Sanctum;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('auth')->group(function (){
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/email/verify', [EmailController::class, 'activateAccount'])->name('activate.account');

    Route::post('/login',[AuthController::class, 'login'])->middleware('verifiedAcount');;
    Route::post('/2af/verify', [AuthController::class, 'verify2af'])->middleware('verifiedAcount');
    Route::post('/2af/send', [AuthController::class, 'resendVerificationCode']);

    Route::post('/logout', [AuthController::class, 'logout']);
});
