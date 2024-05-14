<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('brands', App\Http\Controllers\Api\BrandController::class);
Route::apiResource('car-models', App\Http\Controllers\Api\CarModelController::class);
Route::apiResource('cars', App\Http\Controllers\Api\CarController::class);