@extends('layouts.index')

@section('title')
    Homepage
@endsection

@section('content')
    <div class="page-banner overlay-dark bg-image"
        style="background-image: url({{ asset('dashboard_files/img/2-min.jpg') }});">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Upload Image</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">Upload Image</h1>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div>
    <div class="page-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
                    <h1>SkinScanner</h1>
                    <p class="text-grey mb-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                        accusam et justo duo dolores et ea rebum. Accusantium aperiam earum ipsa eius, inventore nemo labore
                        eaque porro consequatur ex aspernatur. Explicabo, excepturi accusantium! Placeat voluptates esse ut
                        optio facilis!</p>
                    <form action="{{ route('detect.objects') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label class="custom-file-input">
                            <input type="file" name="image">
                            <span class="btn btn-primary ml-lg-3">Choose File</span>
                        </label>
                        <input class="btn btn-primary ml-lg-3" type="file" name="image">
                        <button class="btn btn-primary ml-lg-3" type="submit">Upload Image</button>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                    <div class="img-place custom-img-1" style="max-width: 100%;max-height: 400px;padding-left: 140px;">
                        @if (isset($error))
                            <p>{{ $error }}</p>
                        @elseif (isset($detectedImagePath))
                            <img width="100%" src="{{ $detectedImagePath }}" alt="Detected Image">
                        @else
                            <img src="{{ asset('dashboard_files/img/4211763.png') }}" alt="Detected Image">
                        @endif
                        <div class="shape">
                            <img src="assets/img/images/h5_about_shape.png" alt="" class="ribbonRotate">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="about__shape-wrap-four">
            <img src="{{ asset('dashboard_files/img/images/h4_about_shape01.png') }}" alt="">
            <img src="{{ asset('dashboard_files/img/images/h4_about_shape02.png') }}" alt=""
                data-parallax='{"x" : -80 , "y" : -80 }'>
        </div>
    </div>

    <div class="page-section banner-home bg-image"
        style="background-image: url({{ asset('dashboard_files/img/banner-pattern.svg') }});">
        <div class="container py-5 py-lg-0">
            <div class="row align-items-center">
                <div class="col-lg-4 wow zoomIn">
                    <div class="img-banner d-none d-lg-block">
                        <img src="{{ asset('dashboard_files/img/mobile_app.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-8 wow fadeInRight">
                    <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
                    <a href="#"><img src="{{ asset('dashboard_files/img/google_play.svg') }}" alt=""></a>
                    <a href="#" class="ml-2"><img src="{{ asset('dashboard_files/img/app_store.svg') }}"
                            alt=""></a>
                </div>
            </div>
        </div>
    </div> <!-- .banner-home -->
@endsection
