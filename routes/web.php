<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObjectDetectionController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting',function(){
    echo 'welcome';
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// routes/web.php
Route::post('/detect-objects', [ObjectDetectionController::class, 'detectObjects'])->name('detect.objects');
Route::get('/home', [FrontController::class, 'index'])->name('front.home');
Route::get('/webcam', [FrontController::class, 'webcam'])->name('front.webcam');
Route::get('/upload-image', [FrontController::class, 'uploadImage'])->name('front.upload');
Route::view('/homepage', 'home');
