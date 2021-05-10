<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\aboutController;
use App\Http\Controllers\backend\backendController;
use App\Http\Controllers\bannerController;
use App\Http\Controllers\frontend\frontendController;

Auth::routes();

// =====FrontEnd Routes=======
Route::get('/', [frontendController::class, 'index'])->name('front.index'); 

// =====Backend Routes =======
Route::get('admin', [backendController::class, 'index'])->name('backend.index'); 
Route::resource('banner', bannerController::class);
Route::resource('about', aboutController::class);









