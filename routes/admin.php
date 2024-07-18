<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Place\AdminController as Place;
use App\Http\Controllers\Trx\AdminController as Trx;
use Illuminate\Support\Facades\Route;


    Route::prefix('admin')
     ->name('admin.')
     ->middleware('auth')
     ->group(function(){
        Route::prefix('place')
         ->name('place.')
         ->group(function(){
            Route::get('/',[Place::class,'index'])->name('index');
            
            Route::get('/create',[Place::class,'create'])->name('create');
            Route::post('/create',[Place::class,'create_action'])->name('create_action');
            Route::get('/update/{code}',[Place::class,'update'])->name('update');
            Route::put('/update/{code}',[Place::class,'update_action'])->name('update_action');
            Route::get('/delete/{code}',[Place::class,'delete'])->name('delete');

            Route::get('/{code}',[Place::class,'show'])->name('show');

            Route::get('/{code}/create',[Place::class,'field_create'])->name('field.create');
            Route::post('/{code}/create',[Place::class,'field_create_action'])->name('field.create_action');

            Route::get('/{code}/update/{id}',[Place::class,'field_update'])->name('field.update');
            Route::get('/{code}/update/{id}/{type}',[Place::class,'field_total_action'])->name('field.total_action');
            Route::put('/{code}/update/{id}',[Place::class,'field_update_action'])->name('field.update_action');
        });
        Route::prefix('trx')
         ->name('trx.')
         ->group(function(){
            Route::get('/',[Trx::class,'index'])->name('index');
            Route::get('/{code}/detail',[Trx::class,'update'])->name('update');
            Route::put('/{code}/detail',[Trx::class,'update_action'])->name('update_action');
        });
    });
