<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Place\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[Controller::class,'landingPage'])->name('landingPage');

Route::middleware('auth')
 ->group(function () {

    Route::get('/category/{type}',[UserController::class,'order'])->name('order');

    Route::get('/order/confirm/{type}/{field_id}',[UserController::class,'confirm'])->name('confirm');
    Route::post('/order/confirm/{type}/{field_id}',[UserController::class,'trx_create'])->name('trx_create');

    Route::get('/order/trx',[UserController::class,'trx'])->name('trx');
    Route::get('/order/trx/{trx_code}',[UserController::class,'trx_show'])->name('show');
    Route::get('/order/trx/{trx_code}/payment',[UserController::class,'payment'])->name('payment');
    Route::post('/order/trx/{trx_code}/payment',[UserController::class,'payment_action'])->name('payment_action');


    

});