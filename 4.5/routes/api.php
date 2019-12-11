<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('v1/customers', v1\CustomerController::class, [
    'except' => ['create', 'edit']
]);

Route::resource('v1/orders', v1\OrderController::class, [
    'except' => ['create', 'edit']
]);

Route::resource('v1/instruments', v1\InstrumentController::class, [
    'except' => ['create', 'edit']
]);