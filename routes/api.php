<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\AuthController;

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

Route::get('token-error', function () {
    return response()->json(['status' => 401, 'message' => 'token錯誤'], 401);
})->name('token-error');

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('customer-register', [AuthController::class, 'customerRegister']);

    //Route::group(['middleware' => ['auth:api', 'CheckJWT']], function () {
        Route::post('logout', [AuthController::class, 'logout']);

        //Common - page
        Route::apiResource('pages', PageController::class);  
    //});

    Route::any('{path}', function () {
        return response()->json(['status' => 404, 'message' => '無此API或method錯誤'], 404);
    })->where('path', '.*');
});
