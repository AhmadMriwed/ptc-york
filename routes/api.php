<?php

use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\MailBox\ReplayBoxController;
use App\Http\Controllers\MailBox\RequestBoxController;
use App\Http\Controllers\PlantsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::middleware(['set_user_language'])->group(function () {
    Route::post('register', [UserAuthController::class, 'register']);
    Route::post('login', [UserAuthController::class, 'login']);

    // Route::post('forgot-password', [ForgetPasswordController::class, 'sendOtpCode'] );
    // Route::post('validate-forgot-password-otp',[ForgetPasswordController::class, 'validateOtpCode']);
    // Route::post('reset-password',[ForgetPasswordController::class, 'resetPassword']);


});

Route::middleware(['auth:sanctum'])->group(function () {


    //Auth
        Route::put('updatePassword', [UserAuthController::class, 'updatePassword']);
        Route::get('', [UserAuthController::class, 'getMyProfile']);
        Route::delete('logout', [UserAuthController::class, 'logout']);
        Route::get('resendVerificationEmail', [UserAuthController::class, 'resendVerificationEmail']);
        // Route::put('updateLanguage', [UserAuthController::class, 'updateLanguage']);
        // Route::put('updateFcmToken', [UserAuthController::class, 'updateFcmToken']);
        Route::post('updateProfile', [UserAuthController::class, 'update']);
    
    ///Mail Box
        Route::group(['prefix' => 'mailBox'], function () {//ok
            Route::group(['prefix' => 'request'], function () {//ok
                Route::post('', [RequestBoxController::class, 'store_request_without_files']);
                Route::get('/send', [RequestBoxController::class, 'indexSend']);
                Route::get('/recived', [RequestBoxController::class, 'indexRecived']);
                Route::get('/getInfoMailBox', [RequestBoxController::class, 'getInfoMailBox']);
                Route::get('/{RequestBox}', [RequestBoxController::class, 'show']);
                Route::put('/{RequestBox}', [RequestBoxController::class, 'update']);
                Route::delete('/{RequestBox}', [RequestBoxController::class, 'destroy']);
                Route::post('/uploadFile', [RequestBoxController::class, 'upload_files']);
                Route::post('/storeRequest', [RequestBoxController::class, 'store_request_without_files']);
    
                
    
            });
            Route::group(['prefix' => 'replay'], function () {//ok
                Route::post('', [ReplayBoxController::class, 'store_replay_without_files']);
                Route::get('/', [ReplayBoxController::class, 'index']);
                Route::get('/{ReplayBox}', [ReplayBoxController::class, 'show']);
                Route::put('/{ReplayBox}', [ReplayBoxController::class, 'update']);
                Route::delete('/{ReplayBox}', [ReplayBoxController::class, 'destroy']);
    
                Route::post('/uploadFile', [ReplayBoxController::class, 'upload_files']);
                // Route::post('/storeReplay', [ReplayBoxController::class, 'store_replay_without_files']);
            });
        });
    
    
    
    });

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

