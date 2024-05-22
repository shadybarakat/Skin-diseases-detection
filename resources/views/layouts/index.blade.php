<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>
        @yield('title','Home')
    </title>

    <link rel="stylesheet" href="{{ asset('dashboard_files/css/maicons.css') }}">

    <link rel="stylesheet" href="{{ asset('dashboard_files/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('dashboard_files/vendor/owl-carousel/css/owl.carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('dashboard_files/vendor/animate/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('dashboard_files/css/theme.css') }}">
</head>

<body>


    @include('layouts.navbar1')

    <!-- header-area-end -->

    <!-- main-area -->

        @yield('content')

    <!-- main-area-end -->

    <!-- footer-area -->


    <footer class="page-footer">
        <div class="container">
            <div class="row px-md-3">
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Company</h5>
                    <ul class="footer-menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Editorial Team</a></li>
                        <li><a href="#">Protection</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>More</h5>
                    <ul class="footer-menu">
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Join as Doctors</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Our partner</h5>
                    <ul class="footer-menu">
                        <li><a href="#">One-Fitness</a></li>
                        <li><a href="#">One-Drugs</a></li>
                        <li><a href="#">One-Live</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Contact</h5>
                    <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
                    <a href="#" class="footer-link">701-573-7582</a>
                    <a href="#" class="footer-link">healthcare@temporary.net</a>

                    <h5 class="mt-3">Social Media</h5>
                    <div class="footer-sosmed mt-3">
                        <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
                    </div>
                </div>
            </div>

            <hr>

            <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All
                right reserved</p>
        </div>
    </footer>

    <script src="{{ asset('dashboard_files/js/jquery-3.5.1.min.js') }}"></script>

    <script src="{{ asset('dashboard_files/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('dashboard_files/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('dashboard_files/vendor/wow/wow.min.js') }}"></script>

    <script src="{{ asset('dashboard_files/js/theme.js') }}"></script>

</body>

</html>
