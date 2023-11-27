<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware(['auth:api'])->group(function (){
    Route::resource('appointments', AppointmentController::class);
    Route::resource('companies', CompanyController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('transactions', TransactionController::class);
    Route::resource('users', UserController::class);
    Route::resource('vehicles', VehicleController::class);
});
