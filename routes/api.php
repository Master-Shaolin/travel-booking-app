<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HotelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Public routes
Route::post('/register',[AuthController::class, 'register']);
Route::post('/login',[AuthController::class, 'login']);

//Public Hotels routes
Route::group(['prefix' => 'hotel'], function() {
    Route::get('/featured', [HotelController::class, 'featured']);
});

//Public Activites routes
Route::group(['prefix' => 'activity'], function() {
    Route::get('/featured', [ActivityController::class, 'featured']);
});

//Protected routes
Route::group(['middleware' => 'auth:sanctum'], function () {
    //Admin group
    Route::group(['middleware' => 'CheckRole:Admin'], function() {
        //Route::get('/', [HotelController::class, 'index']);
    });

    //User group
    Route::group(['middleware' => 'CheckRole:User'], function() {
        //Route::get('/', [HotelController::class, 'index']);
    });

    //Business group
    Route::group(['middleware' => 'CheckRole:Business'], function() {
        Route::get('/hotels', [HotelController::class, 'index']);
    });

    Route::post('/logout', [AuthController::class, 'logout']);
});
