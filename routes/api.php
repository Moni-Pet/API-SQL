<?php

use App\Http\Controllers\api\Adoption\AdopterController;
use App\Http\Controllers\api\Adoption\AdoptionController;
use App\Http\Controllers\api\Adoption\ReturnPetController;
use App\Http\Controllers\api\Appointment\AppointmentController;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\City\CityController;
use App\Http\Controllers\api\EmailController;
use App\Http\Controllers\api\Order\OrderController;
use App\Http\Controllers\api\Order\OrderDetailController;
use App\Http\Controllers\api\Pet\BreedController;
use App\Http\Controllers\api\Pet\PetController;
use App\Http\Controllers\api\Pet\PetTypeController;
use App\Http\Controllers\api\Product\CategoryController;
use App\Http\Controllers\api\Product\CategoryProductController;
use App\Http\Controllers\api\Product\CategoryTypeController;
use App\Http\Controllers\api\Product\GadgetUserController;
use App\Http\Controllers\api\Product\ProductController;
use App\Http\Controllers\api\Service\ServiceController;
use App\Http\Controllers\api\Service\ServiceTypeController;
use App\Http\Controllers\api\State\StateController;
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
route::get('/types_pet/{id}', [PetTypeController::class, 'show'])->where('id', '[0-9]+');

// Breeds
route::get('/breeds', [BreedController::class, 'index']);
route::get('/breeds/{id}', [BreedController::class, 'show'])->where('id', '[0-9]+');

// Pets
route::get('/pets', [PetController::class, 'index']);
Route::get('/pets/{id}', [PetController::class, 'show'])->where('id', '[0-9]+');

//TypeServices
Route::get('/type_service', [ServiceTypeController::class, 'index']);
Route::get('/type_service/{id}', [ServiceTypeController::class, 'show'])->where('id', '[0-9]+');;

//Services
Route::get('/service', [ServiceController::class, 'index']);
Route::get('/service/{id}', [ServiceController::class, 'show'])->where('id', '[0-9]+');

//States
Route::get('/states', [StateController::class, 'index']);
Route::get('/states/{id}', [StateController::class, 'show'])->where('id', '[0-9]+');

//Cities
Route::get('/cities', [CityController::class, 'index']);
Route::get('/cities/{id}', [CityController::class, 'show'])->where('id', '[0-9]+');

//Categories Types
Route::get('/types_products', [CategoryTypeController::class, 'index']);
Route::get('/types_products/{id}', [CategoryTypeController::class, 'show'])->where('id', '[0-9]+');

//Categories
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show'])->where('id', '[0-9]+');

//Productos con sus categorias
Route::get('/categories_products', [CategoryProductController::class, 'index']);
Route::get('/categories_products/{id}', [CategoryProductController::class, 'show'])->where('id', '[0-9]+');

//Products
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show'])->where('id', '[0-9]+');


// Rutas protegidas
Route::group(['middleware' => ['verifiedaccount']], function () {
        // Rutas sin token
        Route::post('/auth/login', [AuthController::class, 'login']);
        Route::post('/auth/2af/verify', [AuthController::class, 'verifyTAF'])->middleware('verifiedaccount');
        Route::post('/auth/2af/send', [AuthController::class, 'resendVerificationCode']);


        //Rutas con token
        Route::group(['middleware' => ['auth:sanctum']], function () {

            // Rutas admin
            Route::group(['middleware' => ['usertype:1']], function () {
                //
            });

            // Rutas Empleado y Admin
            Route::group(['middleware' => ['usertype:1,2']], function () {
                Route::get('/user', [UserController::class, 'index']);
                Route::get('/user/{id}', [UserController::class, 'show'])->where('id', '[0-9]+');
                Route::post('/user', [UserController::class, 'store']);
                Route::put('/user/{id}', [UserController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/user/{id}', [UserController::class, 'destroy'])->where('id', '[0-9]+');

                Route::post('/states', [StateController::class, 'store']);
                Route::put('/states/{id}', [StateController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/states/{id}', [StateController::class, 'destroy'])->where('id', '[0-9]+');

                Route::post('/cities', [CityController::class, 'store']);
                Route::put('/cities/{id}', [CityController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/cities/{id}', [CityController::class, 'destroy'])->where('id', '[0-9]+');

                Route::post('/types_pet', [PetTypeController::class, 'store']);
                Route::put('/types_pet/{id}', [PetTypeController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/types_pet/{id}', [PetTypeController::class, 'destroy'])->where('id', '[0-9]+');

                Route::post('/breeds', [BreedController::class, 'store']);
                Route::put('/breeds/{id}', [BreedController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/breeds/{id}', [BreedController::class, 'destroy'])->where('id', '[0-9]+');

                Route::post('/pets', [PetController::class, 'store']);
                Route::put('/pets/{id}', [PetController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/pets/{id}', [PetController::class, 'destroy'])->where('id', '[0-9]+');

                Route::post('/type_service', [ServiceTypeController::class, 'store']);
                Route::put('/type_service/{id}', [ServiceTypeController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/type_service/{id}', [ServiceTypeController::class, 'destroy'])->where('id', '[0-9]+');

                Route::post('/service', [ServiceController::class, 'store']);
                Route::put('/service/{id}', [ServiceController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/service/{id}', [ServiceController::class, 'destroy'])->where('id', '[0-9]+');

                Route::post('/types_products', [CategoryTypeController::class, 'store']);
                Route::put('/types_products/{id}', [CategoryTypeController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/types_products/{id}', [CategoryTypeController::class, 'destroy'])->where('id', '[0-9]+');

                Route::post('/categories', [CategoryController::class, 'store']);
                Route::put('/categories/{id}', [CategoryController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->where('id', '[0-9]+');

                Route::post('/categories_products', [CategoryProductController::class, 'store']);
                Route::put('/categories_products/{id}', [CategoryProductController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/categories_products/{id}', [CategoryProductController::class, 'destroy'])->where('id', '[0-9]+');

                Route::post('/products', [ProductController::class, 'store']);
                Route::put('/products/{id}', [ProductController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/products/{id}', [ProductController::class, 'destroy'])->where('id', '[0-9]+');
                
                Route::get('/gadget_user', [GadgetUserController::class, 'index']);
                Route::get('/gadget_user/{id}', [GadgetUserController::class, 'show'])->where('id', '[0-9]+');

                Route::get('/order', [OrderController::class, 'index']);

                Route::get('/details_order', [OrderDetailController::class, 'index']);

                Route::get('adopter', [AdopterController::class, 'index']);
                Route::get('adopter/{id}', [AdopterController::class, 'show'])->where('id', '[0-9]+');
                Route::post('adopter', [AdopterController::class, 'store']);
                Route::put('adopter/{id}', [AdopterController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('adopter/{id}', [AdopterController::class, 'destroy'])->where('id', '[0-9]+');

                Route::get('/adoption', [AdoptionController::class, 'index']);
                Route::get('/adoption/{id}', [AdoptionController::class, 'show'])->where('id', '[0-9]+');
                Route::get('/adoption/adopter/{id}', [AdoptionController::class, 'showAdoptionByAdopter'])->where('id', '[0-9]+');
                Route::post('/adoption', [AdoptionController::class, 'store']);
                Route::put('/adoption/{id}', [AdoptionController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/adoption/{id}', [AdoptionController::class, 'destroy'])->where('id', '[0-9]+');

                Route::get('/return_pet', [ReturnPetController::class, 'index']);
                Route::get('/return_pet/{id}', [ReturnPetController::class, 'show'])->where('id', '[0-9]+');
                Route::post('/return_pet', [ReturnPetController::class, 'store']);
                Route::put('/return_pet/{id}', [ReturnPetController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/return_pet/{id}', [ReturnPetController::class, 'destroy'])->where('id', '[0-9]+');
            });

            // Rutas User
            Route::group(['middleware' => ['usertype:3']], function () {
                //
            });

            // Rutas Adoptante
            Route::group(['middleware' => ['usertype:4']], function () {
                //
            });

            // Rutas compartidas
            Route::post('/auth/logout', [AuthController::class, 'logout']);
            Route::post('/auth/me', [AuthController::class, 'me']);

            //Rutas compartidas por todos los tipos de usuarios (no publicas)
            Route::group(['middleware' => ['usertype:1,2,3,4']], function () {
                Route::get('/pets/adopter/{id?}', [PetController::class, 'showUserPets'])->where('id', '[0-9]+');

                Route::get('/appointment', [AppointmentController::class, 'index']);
                Route::get('/appointment/{id}', [AppointmentController::class, 'show'])->where('id', '[0-9]+');
                Route::post('/appointment', [AppointmentController::class, 'store']);
                Route::put('/appointment/{id}', [AppointmentController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/appointment/{id}', [AppointmentController::class, 'destroy'])->where('id', '[0-9]+');

                Route::get('/gadget_user/{id?}', [GadgetUserController::class, 'showGadgetsUser']);
                Route::post('/gadget_user', [GadgetUserController::class, 'store']);
                Route::put('/gadget_user/{id}', [GadgetUserController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/gadget_user/{id}', [GadgetUserController::class, 'destroy'])->where('id', '[0-9]+');

                Route::get('/order/{id}', [OrderController::class, 'show'])->where('id', '[0-9]+');
                Route::get('/order/user/{id?}', [OrderController::class, 'showUserOrden'])->where('id', '[0-9]+');
                Route::post('/order', [OrderController::class, 'store']);
                Route::put('/order/{id}', [OrderController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/order/{id}', [OrderController::class, 'destroy'])->where('id', '[0-9]+');
                
                Route::get('/details_order/{id}', [OrderDetailController::class, 'show'])->where('id', '[0-9]+');
                Route::get('/details_order/order/{id}', [OrderDetailController::class, 'showOrderDetail'])->where('id', '[0-9]+');
                Route::post('/details_order', [OrderDetailController::class, 'store']);
                Route::put('/details_order/{id}', [OrderDetailController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/details_order/{id}', [OrderDetailController::class, 'destroy'])->where('id', '[0-9]+');
            });
        });
    }
);
