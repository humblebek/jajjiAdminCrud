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


Route::prefix('/admin')->name('admin.')->group(function(){

Route::get('/dashboard',function(){return view('admin.layouts.main');})->name('dashboard');

Route::resource('wins',WinsController::class);
Route::resource('groups',GroupController::class);
Route::resource('teachers',TeacherController::class);
Route::resource('articles',ArticleController::class);
Route::resource('class',BookClassController::class)->only('index','show','destroy','store');




});

