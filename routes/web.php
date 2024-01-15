<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\BookClassController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\WinsController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/',[PageController::class,'index'])->name('home');
Route::prefix('/jajji')->group(function(){
    Route::get('/class',[PageController::class,'class'])->name('class');
    Route::get('/gallery',[PageController::class,'gallery'])->name('gallery');
    Route::get('/blogs',[PageController::class,'blogs'])->name('blogs');
    Route::get('/teachers',[PageController::class,'teachers'])->name('teachers');
    Route::get('/wins',[PageController::class,'wins'])->name('wins');
});




Route::prefix('/admin')->group(function(){

    Route::get('/dashboard',function(){return view('admin.layouts.main');})->name('adminMain');


    Route::prefix('wins')->group(function(){

    Route::get('/index',[WinsController::class,'index'])->name('index');
    Route::get('/create',[WinsController::class,'create'])->name('create');
    Route::post('/store',[WinsController::class,'store'])->name('store');
    Route::get('/show/{id}',[WinsController::class,'show'])->name('show');
    Route::get('/edit/{id}',[WinsController::class,'edit'])->name('edit');
    Route::put('/update/{id}',[WinsController::class,'update'])->name('update');
    Route::delete('/delete/{id}',[WinsController::class,'destroy'])->name('destroy');
    });



    Route::prefix('groups')->group(function(){

        Route::get('/index',[GroupController::class,'index'])->name('Gindex');
        Route::get('/create',[GroupController::class,'create'])->name('Gcreate');
        Route::post('/store',[GroupController::class,'store'])->name('Gstore');
        Route::get('/show/{id}',[GroupController::class,'show'])->name('Gshow');
        Route::get('/edit/{id}',[GroupController::class,'edit'])->name('Gedit');
        Route::put('/update/{id}',[GroupController::class,'update'])->name('Gupdate');
        Route::delete('/delete/{id}',[GroupController::class,'destroy'])->name('Gdestroy');
        });

        Route::prefix('teachers')->group(function(){

            Route::get('/index',[TeacherController::class,'index'])->name('Tindex');
            Route::get('/create',[TeacherController::class,'create'])->name('Tcreate');
            Route::post('/store',[TeacherController::class,'store'])->name('Tstore');
            Route::get('/show/{id}',[TeacherController::class,'show'])->name('Tshow');
            Route::get('/edit/{id}',[TeacherController::class,'edit'])->name('Tedit');
            Route::put('/update/{id}',[TeacherController::class,'update'])->name('Tupdate');
            Route::delete('/delete/{id}',[TeacherController::class,'destroy'])->name('Tdestroy');
            });

            Route::prefix('articles')->group(function(){

                Route::get('/index',[ArticleController::class,'index'])->name('Aindex');
                Route::get('/create',[ArticleController::class,'create'])->name('Acreate');
                Route::post('/store',[ArticleController::class,'store'])->name('Astore');
                Route::get('/show/{id}',[ArticleController::class,'show'])->name('Ashow');
                Route::get('/edit/{id}',[ArticleController::class,'edit'])->name('Aedit');
                Route::put('/update/{id}',[ArticleController::class,'update'])->name('Aupdate');
                Route::delete('/delete/{id}',[ArticleController::class,'destroy'])->name('Adestroy');

                });

                Route::prefix('class')->group(function(){

                    Route::get('/index',[BookClassController::class,'index'])->name('Cindex');
                    Route::post('/store',[BookClassController::class,'store'])->name('Cstore');
                    Route::get('/show/{id}',[BookClassController::class,'show'])->name('Cshow');
                    Route::delete('/delete/{id}',[BookClassController::class,'destroy'])->name('Cdestroy');

                    });


});

