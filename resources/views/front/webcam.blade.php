@extends('layouts.index')

@section('title')
    WebCam
@endsection

@section('content')
    <div class="page-banner overlay-dark bg-image"
        style="background-image: url({{ asset('dashboard_files/img/2-min.jpg') }});">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Live Camera</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">Live Camera</h1>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div>
    <div class="page-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
                    <h1>Skin Scanner</h1>
                    <p class="text-grey mb-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                        accusam et justo duo dolores et ea rebum. Accusantium aperiam earum ipsa eius, inventore nemo labore
                        eaque porro consequatur ex aspernatur. Explicabo, excepturi accusantium! Placeat voluptates esse ut
                        optio facilis!</p>
                    <a target="_blank" id="findNearby" class="btn btn-primary" style="color: white;">Near dermatologist</a>

                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                    <div class="img-place custom-img-1" style="max-width: 100%">
                        <img width="100%" src="http://127.0.0.1:5000/webapp" alt="">
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

    <script>
        // Function to generate Google Maps URL with nearby dermatologists query and open in a new tab
        function findNearbyDermatologists() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    // Google Maps URL with query parameters for nearby dermatologists
                    var mapsUrl = 'https://www.google.com/maps/search/dermatologists/@' + pos.lat + ',' + pos.lng +
                        ',15z';

                    // Open Google Maps in a new tab
                    window.open(mapsUrl, '_blank');
                }, function() {
                    alert('Error: The Geolocation service failed.');
                });
            } else {
                alert('Error: Your browser doesn\'t support geolocation.');
            }
        }

        // Attach click event listener to the button
        document.getElementById('findNearby').addEventListener('click', findNearbyDermatologists);
    </script>
@endsection
