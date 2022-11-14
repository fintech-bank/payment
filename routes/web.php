<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('transfer')->group(function () {
    Route::get('/call', [\App\Http\Controllers\Api\TransferController::class, 'call']);
});

Route::prefix('sepa')->group(function () {
    Route::get('accept', [\App\Http\Controllers\Api\SepaController::class, 'accept']);
    Route::post('remb', [\App\Http\Controllers\Api\SepaController::class, 'remb']);
});

Route::prefix('payment')->group(function () {

});

Route::get('/test', \App\Http\Controllers\TestController::class);
