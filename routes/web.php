<?php

 use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});



Route::get('/post-create',[PostController::class,'create'])->name('create');
Route::post('/post-store',[PostController::class,'store'])->name('store');
Route::get('/post/index',[PostController::class,'index'])->name('index');
