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

Route::redirect('/false','/greeting',301);


// routes/web.php
Route::post('/detect-objects', [ObjectDetectionController::class, 'detectObjects'])->name('detect.objects');
Route::get('/home', [FrontController::class, 'index'])->name('front.home');
Route::get('/webcam', [FrontController::class, 'webcam'])->name('front.webcam');
Route::get('/upload-image', [FrontController::class, 'uploadImage'])->name('front.upload');
Route::view('/homepage', 'home');
