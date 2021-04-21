<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\bannerController;
use App\Http\Controllers\backend\backendController;
use App\Http\Controllers\frontend\frontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('frontend.index');
// })->name('front.index');
// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

// =====FrontEnd Routes=======
Route::get('/', [frontendController::class, 'index'])->name('front.index'); 

// =====Backend Routes =======
Route::get('admin', [backendController::class, 'index'])->name('backend.index'); 
Route::resource('banner', bannerController::class);






