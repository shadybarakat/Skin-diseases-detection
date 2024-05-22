<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class FrontController extends Controller
{
    public function index(){
        return view('front.homepage');
    }

    public function webcam(){
        return view('front.webcam');
    }

    public function uploadImage(){
        return view('front.upload');
    }
}
