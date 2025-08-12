<?php

use App\Http\Controllers\api\Adoption\AdopterController;
use App\Http\Controllers\api\Adoption\AdoptionController;
use App\Http\Controllers\api\Adoption\AdoptionFollowupController;
use App\Http\Controllers\api\Adoption\ReturnPetController;
use App\Http\Controllers\api\Appointment\AppointmentController;
use App\Http\Controllers\api\Appointment\AppointmentDetailController;
use App\Http\Controllers\api\Appointment\AppointmentPetController;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\City\CityController;
use App\Http\Controllers\api\EmailController;
use App\Http\Controllers\api\Gadgets\Admin\GadgetsController;
use App\Http\Controllers\api\Gadgets\Admin\GadgetTypeController;
use App\Http\Controllers\api\Gadgets\FeederGadgetController;
use App\Http\Controllers\api\Gadgets\GadgetPetController;
use App\Http\Controllers\api\Gadgets\GadgetUserController;
use App\Http\Controllers\api\Gadgets\GpsGadgetController;
use App\Http\Controllers\api\Order\OrderController;
use App\Http\Controllers\api\Order\OrderDetailController;
use App\Http\Controllers\api\PaymentController;
use App\Http\Controllers\api\Pet\BreedController;
use App\Http\Controllers\api\Pet\LostPetController;
use App\Http\Controllers\api\Pet\PetController;
use App\Http\Controllers\api\Pet\PetTypeController;
use App\Http\Controllers\api\Photo\PetPhotoController;
use App\Http\Controllers\api\Photo\ProductPhotoController;
use App\Http\Controllers\api\Product\CategoryController;
use App\Http\Controllers\api\Product\CategoryProductController;
use App\Http\Controllers\api\Product\CategoryTypeController;
use App\Http\Controllers\api\Product\ProductController;
use App\Http\Controllers\api\Service\ServiceController;
use App\Http\Controllers\api\Service\ServiceTypeController;
use App\Http\Controllers\api\State\StateController;
use App\Http\Controllers\api\TypeUserController;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\apiNoSql\ReportsController;
use App\Http\Controllers\NotificationController;
use App\Models\User;
use App\Http\Controllers\api\Worker\WorkerController;
use App\Http\Controllers\apiNoSql\CommentsController;
use App\Http\Controllers\apiNoSql\MedicalHistoryController;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Sanctum;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API Routes for your application. These
| Routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware(['auth:sanctum'])->group(function () {
    Broadcast::Routes();
});

// Rutas sin protección
//Auth
Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/email/verify', [EmailController::class, 'activateAccount'])->name('activate.account');
    Route::post('/email/resend-verification', [AuthController::class, 'resendEmailVerification']);
    Route::post('/recovery-pass', [UserController::class,  'recoveryPass']);
});

// TypesPet
Route::get('/types_pet', [PetTypeController::class, 'index']);
Route::get('/types_pet/{id}', [PetTypeController::class, 'show'])->where('id', '[0-9]+');

// Breeds
Route::get('/breeds', [BreedController::class, 'index']);
Route::get('/breeds/{id}', [BreedController::class, 'show'])->where('id', '[0-9]+');

// Pets
Route::get('/pets', [PetController::class, 'index']);
Route::get('/pets/{id}', [PetController::class, 'show'])->where('id', '[0-9]+');
Route::post('/pets/list', [PetController::class, 'petList']);

//Pet Photos
Route::get('/pet_photos', [PetPhotoController::class, 'index']);
Route::get('/pet_photos/{id}', [PetPhotoController::class, 'show'])->where('id', '[0-9]+');
Route::get('/pet_photos/pet/{id}', [PetPhotoController::class, 'showPetPhotos'])->where('id', '[0-9]+');

//TypeServices
Route::get('/type_service', [ServiceTypeController::class, 'index']);
Route::get('/type_service/{id}', [ServiceTypeController::class, 'show'])->where('id', '[0-9]+');;

//Services
Route::get('/service', [ServiceController::class, 'index']);
Route::get('/service/{id}', [ServiceController::class, 'show'])->where('id', '[0-9]+');
Route::post('/service/list', [ServiceController::class, 'serviceList']);

//States
Route::get('/states', [StateController::class, 'index']);
Route::get('/states/{id}', [StateController::class, 'show'])->where('id', '[0-9]+');

//Cities
Route::get('/cities', [CityController::class, 'index']);
Route::get('/cities/{id}', [CityController::class, 'show'])->where('id', '[0-9]+');
Route::get('/cities/state/{id}', [CityController::class, 'showByState'])->where('id', '[0-9]+');

//Categories Types
Route::get('/types_products', [CategoryTypeController::class, 'index']);
Route::get('/types_products/{id}', [CategoryTypeController::class, 'show'])->where('id', '[0-9]+');

//Categories
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show'])->where('id', '[0-9]+');

//Productos con sus categorias
Route::get('/categories_products', [CategoryProductController::class, 'index']);
Route::get('/categories_products/{id}', [CategoryProductController::class, 'show'])->where('id', '[0-9]+');

//Products Photos
Route::get('/products_photos', [ProductPhotoController::class, 'index']);
Route::get('/products_photos/{id}', [ProductPhotoController::class, 'show'])->where('id', '[0-9]+');
Route::get('/products_photos/product/{id}', [ProductPhotoController::class, 'showProductPhotos'])->where('id', '[0-9]+');

//Products
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show'])->where('id', '[0-9]+');
Route::post('/products/list', [ProductController::class, 'productList']);

//Lost
Route::get('/lost', [LostPetController::class, 'index']);

Route::get('/comments/{product_id}', [CommentsController::class, 'index']);

// Rutas protegidas
Route::post('/user', [UserController::class, 'store'])->middleware(['auth:sanctum', 'usertype:1,2']);
Route::group(
    ['middleware' => ['verifiedaccount']],
    function () {
        // Rutas sin token
        Route::post('/auth/login', [AuthController::class, 'login']);
        Route::post('/auth/2fa/verify', [AuthController::class, 'verifyTAF'])->middleware('verifiedaccount');
        Route::post('/auth/2fa/send', [AuthController::class, 'resendVerificationCode']);


        //Rutas con token
        Route::group(['middleware' => ['auth:sanctum']], function () {

            Route::get('/lost-find', [LostPetController::class, 'show']);
            Route::delete('/lost/{id}', [LostPetController::class, 'destroy'])->where('id', '[0-9]+');
            Route::put('/lost/{id}', [LostPetController::class, 'update'])->where('id', '[0-9]+');
            Route::post('/lost', [LostPetController::class, 'store']);
            Route::put('/found-pet/{id}', [LostPetController::class, 'foundPet'])->where('id', '[0-9]+');

            // Rutas admin
            Route::group(['middleware' => ['usertype:1']], function () {
                //
            });

            // Rutas Empleado y Admin
            Route::group(['middleware' => ['usertype:1,2']], function () {
                Route::get('/worker', [WorkerController::class, 'index']);

                Route::get('/user', [UserController::class, 'index']);
                Route::get('/user/{id}', [UserController::class, 'show'])->where('id', '[0-9]+');
                Route::delete('/user/{id}', [UserController::class, 'destroy'])->where('id', '[0-9]+');

                Route::post('/states', [StateController::class, 'store']);
                Route::put('/states/{id}', [StateController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/states/{id}', [StateController::class, 'destroy'])->where('id', '[0-9]+');

                Route::post('/cities', [CityController::class, 'store']);
                Route::put('/cities/{id}', [CityController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/cities/{id}', [CityController::class, 'destroy'])->where('id', '[0-9]+');

                Route::post('/types_pet', [PetTypeController::class, 'store']);
                Route::post('/types_pet/{id}', [PetTypeController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/types_pet/{id}', [PetTypeController::class, 'destroy'])->where('id', '[0-9]+');

                Route::post('/breeds', [BreedController::class, 'store']);
                Route::put('/breeds/{id}', [BreedController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/breeds/{id}', [BreedController::class, 'destroy'])->where('id', '[0-9]+');

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

                Route::get('/adoption_followups', [AdoptionFollowupController::class, 'index']);
                Route::get('/adoption_followups/{id}', [AdoptionFollowupController::class, 'show'])->where('id', '[0-9]+');
                Route::get('/adoption_followups/adopter/{id}', [AdoptionFollowupController::class, 'showFollowupsByAdopter'])->where('id', '[0-9]+');
                Route::post('/adoption_followups', [AdoptionFollowupController::class, 'store']);
                Route::put('/adoption_followups/{id}', [AdoptionFollowupController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/adoption_followups/{id}', [AdoptionFollowupController::class, 'destroy'])->where('id', '[0-9]+');

                Route::get('/appointment_details', [AppointmentDetailController::class, 'index']);

                Route::get('/appointment_pets', [AppointmentPetController::class, 'index']);
                Route::get('/appointment_pets/{id}', [AppointmentPetController::class, 'show'])->where('id', '[0-9]+');
                Route::put('/appointment_pets/{id}', [AppointmentPetController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/appointment_pets/{id}', [AppointmentPetController::class, 'destroy'])->where('id', '[0-9]+');

                Route::delete('/pet_photos/{id}', [PetPhotoController::class, 'destroy'])->where('id', '[0-9]+');
                Route::get('/pets/consultar-rfid', [PetController::class, 'consultarPorRFID']);
                
                Route::post('/pets/admin', [PetController::class, 'storeAdmin']);
                Route::delete('/products_photos/{id}', [ProductPhotoController::class, 'destroy'])->where('id', '[0-9]+');

                Route::get('/gadget', [GadgetsController::class, 'index']);
                Route::post('/gadget', [GadgetsController::class, 'store']);
                Route::put('/gadget/{id}', [GadgetsController::class, 'update'])->where('id', '[0-9]+');;
                Route::delete('/gadget/{id}', [GadgetsController::class, 'destroy'])->where('id', '[0-9]+');;

                Route::get('/gadget_type', [GadgetTypeController::class, 'index']);
                Route::post('/gadget_type', [GadgetTypeController::class, 'store']);
                Route::put('/gadget_type/{id}', [GadgetTypeController::class, 'update'])->where('id', '[0-9]+');;
                Route::delete('/gadget_type/{id}', [GadgetTypeController::class, 'destroy'])->where('id', '[0-9]+');;
            });

            // Rutas User
            Route::group(['middleware' => ['usertype:3']], function () {
                //
            });

            // Rutas Adoptante
            Route::group(['middleware' => ['usertype:4']], function () {
                //
            });

            // Rutas Adoptante y User
            Route::group(['middleware' => ['usertype:3, 4']], function () {
                //
                Route::patch('/gps/toggle-tracking/{id}', [GpsGadgetController::class, 'toggleTracking']);
                Route::get('/gps/tracking-status/{id}', [GpsGadgetController::class, 'trackingStatus']);
                Route::get('/gps/ubicacion/{id}', [GpsGadgetController::class, 'ubicacionActual']);
            });


            // Rutas compartidas
            Route::post('/auth/logout', [AuthController::class, 'logout']);
            Route::get('/auth/me', [AuthController::class, 'me']);

            //Rutas compartidas por todos los tipos de usuarios (no publicas)
            Route::group(['middleware' => ['usertype:1,2,3,4']], function () {
                Route::post('/auth/verify_password', [AuthController::class, 'verifyPassword']);
                Route::put('/user/{id}', [UserController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/user/{id}', [UserController::class, 'destroy'])->where('id', '[0-9]+');

                Route::get('/types_user', [TypeUserController::class, 'index']);
                Route::get('/types_user/{id}', [TypeUserController::class, 'show'])->where('id', '[0-9]+');

                Route::get('/notifications', [NotificationController::class, 'index']);
                Route::post('/notifications/{id}/read', [NotificationController::class, 'markAsRead']);

                Route::post('/pets', [PetController::class, 'store']);
                Route::put('/pets/{id}', [PetController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/pets/{id}', [PetController::class, 'destroy'])->where('id', '[0-9]+');
                Route::get('/pets/adopter/{id?}', [PetController::class, 'showUserPets'])->where('id', '[0-9]+');

                Route::get('/appointment', [AppointmentController::class, 'index']);
                Route::get('/appointment/{id}', [AppointmentController::class, 'show'])->where('id', '[0-9]+');
                Route::get('/appointment/user/{id?}', [AppointmentController::class, 'showUserAppointments'])->where('id', '[0-9]+');
                Route::post('/appointment', [AppointmentController::class, 'store']);
                Route::put('/appointment/{id}', [AppointmentController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/appointment/{id}', [AppointmentController::class, 'destroy'])->where('id', '[0-9]+');

                Route::post('/appointment_pets', [AppointmentPetController::class, 'store']);

                Route::get('/gadget_user/user/{id?}', [GadgetUserController::class, 'showGadgetsUser']);
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

                Route::get('/appointment_details/{id}', [AppointmentDetailController::class, 'show'])->where('id', '[0-9]+');
                Route::get('/appointment_details/appointment/{id}', [AppointmentDetailController::class, 'showAppointmentDetails'])->where('id', '[0-9]+');
                Route::post('/appointment_details', [AppointmentDetailController::class, 'store']);
                Route::put('/appointment_details/{id}', [AppointmentDetailController::class, 'update'])->where('id', '[0-9]+');
                Route::delete('/appointment_details/{id}', [AppointmentDetailController::class, 'destroy'])->where('id', '[0-9]+');

                Route::post('/pet_photos', [PetPhotoController::class, 'store']);
                Route::post('/pet_photos/{id}', [PetPhotoController::class, 'update'])->where('id', '[0-9]+');

                Route::post('/products_photos', [ProductPhotoController::class, 'store']);
                Route::post('/products_photos/{id}', [ProductPhotoController::class, 'update'])->where('id', '[0-9]+');

                Route::post('/gadget_pet/{id}', [GadgetPetController::class, 'assignPetGadget']);
                Route::get('/gadget_pet/{id}', [GadgetPetController::class, 'showGadgetsPet']);
                Route::put('/gadget_pet/{id}', [GadgetPetController::class, 'updatePetGadget']);
                Route::delete('/gadget_pet/{id}', [GadgetPetController::class, 'deletePetGadget']);

                Route::patch('/gps/toggle-tracking/{id}', [GpsGadgetController::class, 'toggleTracking']);
                Route::get('/gps/tracking-status/{id}', [GpsGadgetController::class, 'trackingStatus']);
                Route::get('/gps/ubicacion/{id}', [GpsGadgetController::class, 'ubicacionActual']);
                Route::get('/gps/pet', [GpsGadgetController::class, 'showUserPetsWithGps']);

                Route::post('/feeder/{id}', [FeederGadgetController::class, 'store']); // Enviar horarios y cantidad
                Route::get('feeder/{id}', [FeederGadgetController::class, 'show']);



                Route::post('/reports',  [ReportsController::class, 'store']);
                Route::get('/reports/{id?}',   [ReportsController::class, 'index']);
                Route::get('/reports/show/{index}/{id?}',    [ReportsController::class, 'show']);
                Route::delete('/reports/delete/{index}/{id?}', [ReportsController::class, 'destroy']);

                Route::post('/medical-history',  [MedicalHistoryController::class, 'store']);
                Route::get('/medical-history/{id?}',   [MedicalHistoryController::class, 'index']);
                Route::get('/medical-history/show/{pet_id}/{index}',    [MedicalHistoryController::class, 'show']);
                Route::delete('/medical-history/delete/{pet_id}/{index}', [MedicalHistoryController::class, 'destroy']);


                Route::post('/comments', [CommentsController::class, 'store']); 
                Route::delete('/comments/delete/{product_id}/{index}', [CommentsController::class, 'destroy']);
                //Stripe
                Route::post('/stripe/create-payment-intent', [PaymentController::class, 'createPaymentIntent']);
                Route::post('/stripe/confirm-payment', [PaymentController::class, 'confirmPayment']);
            });
        });
    }
);
