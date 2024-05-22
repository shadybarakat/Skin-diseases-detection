<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ObjectDetectionController extends Controller
{
    public function detectObjects(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Get the path to the uploaded image
        $image = $request->file('image');

        if ($image->isValid()) {
            // Send image to Python script
            $response = Http::attach(
                'image',
                file_get_contents($image->path()),
                $image->getClientOriginalName()
            )->post('http://127.0.0.1:5000/detect-skin-disease'); // Change URL to match your Python script's endpoint

            $detectedImagePath = isset($response['detected_image_url']) ? $response['detected_image_url'] : null;
            $message = $response['message'];
            // dd($detectedImagePath);

            return view('front.upload', ['detectedImagePath' => $detectedImagePath,'message' => $message]);
        } else {
            return view('front.upload')->with('error', 'Invalid image');
        }
    }

}
