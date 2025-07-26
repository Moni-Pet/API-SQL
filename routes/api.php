<?php

use App\Http\Controllers\api\Appointment\AppointmentController;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\City\CityController;
use App\Http\Controllers\api\EmailController;
use App\Http\Controllers\api\Pet\BreedController;
use App\Http\Controllers\api\Pet\PetController;
use App\Http\Controllers\api\Pet\PetTypeController;
use App\Http\Controllers\api\Product\CategoryTypeController;
use App\Http\Controllers\api\Service\ServiceController;
use App\Http\Controllers\api\Service\ServiceTypeController;
use App\Http\Controllers\api\State\StateController;
use App\Models\ServiceType;
use App\Http\Controllers\api\UserController;
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
//Auth
Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/email/verify', [EmailController::class, 'activateAccount'])->name('activate.account');
    Route::post('/email/resend-verification', [AuthController::class, 'resendEmailVerification']);
});

// TypesPet
route::get('/types_pet', [PetTypeController::class, 'index']);
route::get('/types_pet/{id}', [PetTypeController::class, 'show']);

// Breeds
route::get('/breeds', [BreedController::class, 'index']);
route::get('/breeds/{id}', [BreedController::class, 'show']);

// Pets
route::get('/pets', [PetController::class, 'index']);
route::get('/pets/{id}', [PetController::class, 'show']);

//TypeServices
Route::get('/type_service', [ServiceTypeController::class, 'index']);
Route::get('/type_service/{id}', [ServiceTypeController::class, 'show']);

//Services
Route::get('/service', [ServiceController::class, 'index']);
Route::get('/service/{id}', [ServiceController::class, 'show']);

//States
Route::get('/states', [StateController::class, 'index']);
Route::get('/states/{id}', [StateController::class, 'show']);

//Cities
Route::get('/cities', [CityController::class, 'index']);
Route::get('/cities/{id}', [CityController::class, 'show']);

//Categories Types
Route::get('/types_products', [CategoryTypeController::class, 'index']);
Route::get('/types_products/{id}', [CategoryTypeController::class, 'show']);

// Rutas protegidas
Route::group(
    [
        'middleware' => ['verifiedaccount']
    ],
    function () {
        // Rutas sin token
        Route::post('/auth/login', [AuthController::class, 'login']);
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
                'middleware' => ['usertype:1,2']
            ], function () {
                //
                Route::get('/user', [UserController::class, 'index']);
                Route::get('/user/{id}', [UserController::class, 'show']);
                Route::post('/user', [UserController::class, 'store']);
                Route::put('/user/{id}', [UserController::class, 'update']);
                Route::delete('/user', [UserController::class, 'destroy']);

                Route::post('/states', [StateController::class, 'store']);
                Route::put('/states/{id}', [StateController::class, 'update']);
                Route::delete('/states/{id}', [StateController::class, 'destroy']);

                Route::post('/cities', [CityController::class, 'store']);
                Route::put('/cities/{id}', [CityController::class, 'update']);
                Route::delete('/cities/{id}', [CityController::class, 'destroy']);

                Route::post('/types_pet', [PetTypeController::class, 'store']);
                Route::put('/types_pet/{id}', [PetTypeController::class, 'update']);
                Route::delete('/types_pet/{id}', [PetTypeController::class, 'destroy']);

                Route::post('/breeds', [BreedController::class, 'store']);
                Route::put('/breeds/{id}', [BreedController::class, 'update']);
                Route::delete('/breeds/{id}', [BreedController::class, 'destroy']);

                Route::post('/pets', [PetController::class, 'store']);
                Route::put('/pets/{id}', [PetController::class, 'update']);
                Route::delete('/pets/{id}', [PetController::class, 'destroy']);

                Route::post('/type_service', [ServiceTypeController::class, 'store']);
                Route::put('/type_service/{id}', [ServiceTypeController::class, 'update']);
                Route::delete('/type_service/{id}', [ServiceTypeController::class, 'destroy']);

                Route::post('/service', [ServiceController::class, 'store']);
                Route::put('/service/{id}', [ServiceController::class, 'update']);
                Route::delete('/service/{id}', [ServiceController::class, 'destroy']);

                Route::post('/types_products', [CategoryTypeController::class, 'store']);
                Route::put('/types_products/{id}', [CategoryTypeController::class, 'update']);
                Route::delete('/types_products/{id}', [CategoryTypeController::class, 'destroy']);
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
            Route::post('/auth/me', [AuthController::class, 'me']);

            //Rutas compartidas por todos los tipos de usuarios (no publicas)
            Route::group(['middleware' => ['usertype:1,2,3,4']], function () {
                Route::get('/pets/adopter/{id}', [PetController::class, 'showUserPets']);

                Route::get('/appointment', [AppointmentController::class, 'index']);
                Route::get('/appointment/{id}', [AppointmentController::class, 'show']);
                Route::post('/appointment', [AppointmentController::class, 'store']);
                Route::put('/appointment/{id}', [AppointmentController::class, 'update']);
                Route::delete('/appointment/{id}', [AppointmentController::class, 'destroy']);
            });
        });
    }
);
