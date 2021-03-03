<?php

use App\Http\Controllers\OrderController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/order/create/{product}', [OrderController::class, 'createOrder'])
    ->name('order.create');

Route::get('/order/all/', [OrderController::class, 'getAllOrders'])
    ->name('order.all');

Route::get('/order/discount/', [OrderController::class, 'getAllOrdersWithDiscount'])
    ->name('order.discount');
