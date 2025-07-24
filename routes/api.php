<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\EmailController;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteRegistrar;
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

// Rutas sin protección
Route::prefix('auth')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/email/verify', [EmailController::class, 'activateAccount'])->name('activate.account');
});


// Rutas protegidas
Route::group(
    [
        'middleware' => ['verifiedaccount']
    ],
    function () {
        // Rutas sin token
        Route::post('/auth/2af/verify', [AuthController::class, 'verifyTAF'])->middleware('verifiedaccount');
        Route::post('/auth/2af/send', [AuthController::class, 'resendVerificationCode']);


        //Rutas con token
        Route::group([
            'middleware' => ['auth:sanctum']
        ], function () {
            
            // Rutas admin
            Route::group([
                'middleware' => ['usertype:1']
            ], function () {
                //
            });

            // Rutas Empleado y Admin
            Route::group([
                'middleware' => ['usertype:2']
            ], function () {
                //
            });

            // Rutas User
            Route::group([
                'middleware' => ['usertype:3']
            ], function () {
                //
            });

            // Rutas Adoptante
            Route::group([
                'middleware' => ['usertype:4']
            ], function () {
                //
            });
            // Rutas compartidas
            Route::post('/auth/logout', [AuthController::class, 'logout']);
        });
    }
);
