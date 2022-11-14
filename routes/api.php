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

Route::prefix('sepa')->group(function () {
    Route::get('new_ics', [\App\Http\Controllers\Api\SepaController::class, 'newIcs']);
    Route::get('accept', [\App\Http\Controllers\Api\SepaController::class, 'accept']);
    Route::post('remb', [\App\Http\Controllers\Api\SepaController::class, 'remb']);
});

Route::prefix('transfer')->group(function () {
    Route::get('/call', [\App\Http\Controllers\Api\TransferController::class, 'call']);
});
