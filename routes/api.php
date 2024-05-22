<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// routes/api.php


Route::post('/detect-skin-disease', function (Request $request) {
    $image = $request->file('image');

    // Check if image is valid
    if ($image->isValid()) {
        // Send image to Python script
        $response = Http::attach(
            'image',
            file_get_contents($image->path()),
            $image->getClientOriginalName()
        )->post('http://127.0.0.1:5000/detect-skin-disease'); // Change URL to match your Python script's endpoint

        // Return detection results
        return $response->json();
    } else {
        return response()->json(['error' => 'Invalid image'], 400);
    }
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
