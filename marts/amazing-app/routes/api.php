<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;

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

Route::get('amazings', [DeviceController::class, 'index']);
Route::post('amazings', [DeviceController::class, 'store']);
Route::get('amazings/{id}', [DeviceController::class, 'show']);
Route::delete('amazings/{id}', [DeviceController::class, 'destroy']);
Route::put('amazings/{id}', [DeviceController::class, 'update']);