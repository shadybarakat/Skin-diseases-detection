@extends('layouts.index')

@section('title')
    Homepage
@endsection

@section('content')
    <div class="page-hero bg-image overlay-dark" style="background-image: url({{ asset('dashboard_files/img/2-min.jpg') }});">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <span class="subhead">Let's make your life happier</span>
                <h1 class="display-4">Skin Scan</h1>
                <a href="{{ route('front.webcam') }}" class="btn btn-primary">Let's Scan</a>
            </div>
        </div>
    </div>


    <div class="bg-light">
        <div class="page-section py-3 mt-md-n5 custom-index">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-secondary text-white">
                                <span class="mai-chatbubbles-outline"></span>
                            </div>
                            <p><span>Scan</span> Your Skin</p>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-primary text-white">
                                <span class="mai-shield-checkmark"></span>
                            </div>
                            <p><span>Upload</span>Disease Image</p>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-accent text-white">
                                <span class="mai-basket"></span>
                            </div>
                            <p><span>Know</span>About disease</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .page-section -->


    </div> <!-- .bg-light -->

    <div class="page-section pb-0">
        <div class="container">
            <h1 class="text-center mb-5 wow fadeInUp">Diseases That We Can Detect</h1>

            <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
                <div class="item">
                    <div class="card-doctor">
                        <div class="header" style="height: 100%;">
                            <img src="{{ asset('dashboard_files/img/diseases/ringworn.jpeg') }}" alt="">
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">Ring Worn</p>
                            <span class="text-sm text-grey">Cardiology</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card-doctor">
                        <div class="header" style="height: 100%;">
                            <img src="{{ asset('dashboard_files/img/diseases/ringworn.jpeg') }}" alt="">
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">Ring Worn</p>
                            <span class="text-sm text-grey">Cardiology</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card-doctor">
                        <div class="header" style="height: 100%;">
                            <img src="{{ asset('dashboard_files/img/diseases/ringworn.jpeg') }}" alt="">
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">Ring Worn</p>
                            <span class="text-sm text-grey">Cardiology</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card-doctor">
                        <div class="header" style="height: 100%;">
                            <img src="{{ asset('dashboard_files/img/diseases/ringworn.jpeg') }}" alt="">
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">Ring Worn</p>
                            <span class="text-sm text-grey">Cardiology</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card-doctor">
                        <div class="header">
                            <img src="{{ asset('dashboard_files/img/diseases/ringworn.jpeg') }}" alt="">
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">Ring Worn</p>
                            <span class="text-sm text-grey">Cardiology</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 mt-5">
                    <h1 class="text-center mb-5 wow fadeInUp">Our Team</h1>
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-4 wow zoomIn">
                            <div class="card-doctor">
                                <div class="header">
                                    <img src="{{ asset('dashboard_files/img/team/team_2.jpg') }}" alt="">
                                    <div class="meta">
                                        <a href="#"><span class="mai-call"></span></a>
                                        <a href="#"><span class="mai-logo-whatsapp"></span></a>
                                    </div>
                                </div>
                                <div class="body">
                                    <p class="text-xl mb-0">Shady Barakat</p>
                                    <span class="text-sm text-grey">Software Enginner</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow zoomIn">
                            <div class="card-doctor">
                                <div class="header">
                                    <img src="{{ asset('dashboard_files/img/team/team_3.jpg') }}" alt="">
                                    <div class="meta">
                                        <a href="#"><span class="mai-call"></span></a>
                                        <a href="#"><span class="mai-logo-whatsapp"></span></a>
                                    </div>
                                </div>
                                <div class="body">
                                    <p class="text-xl mb-0">Mohamed Youssef</p>
                                    <span class="text-sm text-grey">Software Enginner</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow zoomIn">
                            <div class="card-doctor">
                                <div class="header">
                                    <img src="{{ asset('dashboard_files/img/team/team_1.jpg') }}" alt="">
                                    <div class="meta">
                                        <a href="#"><span class="mai-call"></span></a>
                                        <a href="#"><span class="mai-logo-whatsapp"></span></a>
                                    </div>
                                </div>
                                <div class="body">
                                    <p class="text-xl mb-0">Mohamed Nabil</p>
                                    <span class="text-sm text-grey">Software Enginner</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
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
