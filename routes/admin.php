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
            Route::delete('/delete/{code}',[Place::class,'delete_action'])->name('delete_action');

            Route::get('/{code}',[Place::class,'show'])->name('show');

            Route::post('/{code}/create',[Place::class,'field_create_action'])->name('field.create_action');
            Route::put('/{code}/update/{id}',[Place::class,'field_update_action'])->name('field.update_action');
            Route::delete('/{code}/delete/{id}',[Place::class,'field_delete_action'])->name('field.delete_action');
            Route::get('/{code}/update/{id}/{type}',[Place::class,'field_total_action'])->name('field.total_action');
        });
        Route::prefix('trx')
         ->name('trx.')
         ->group(function(){
            Route::get('/',[Trx::class,'show']);
            Route::get('/sort-date/{range_one}/{range_two}',[Trx::class,'sort_by_date']);
            Route::get('/sort-place/{code}',[Trx::class,'sort_by_place']);
        });
    });
