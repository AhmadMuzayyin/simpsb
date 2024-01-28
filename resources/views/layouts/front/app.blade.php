<!DOCTYPE html>
<html lang="zxx">

<head>
    <!--Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!--Favicons-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('logo.png') }}" />

    <!--Page Title-->
    <title>SIMPSB</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Google Font  -->
    <link
        href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800|Roboto:300,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">
    <!-- Icofont CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/icofont.min.css') }}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/meanmenu.min.css') }}">
    <!--- owl carousel Css-->
    <link rel="stylesheet" href="{{ url('assets/owlcarousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/owlcarousel/css/owl.theme.default.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/animate.css') }}">
    <!-- venobox -->
    <link rel="stylesheet" href="{{ url('assets/venobox/css/venobox.min.css') }}" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <!-- Responsive  CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/responsive.css') }}">
</head>

<body id="main">

    @include('layouts.front.navbar')

    @yield('content')

    <!-- START FOOTER -->
    <footer class="footer-section">
        <div id="bottom-footer" class="bg-gray">
            <div class="auto-container">
                <div class="row mb-lg-0 mb-md-4 mb-4">
                    <div class="col-lg-6 col-md-12 col-12">
                        <p class="copyright-text">Copyright © {{ date('Y') }} <a href="{{ route('home') }}">SMK
                                POTENSIAL BADRUL
                                HUDA</a> | All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <!-- Latest jQuery -->
    <script src="{{ url('assets/js/jquery-2.2.4.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ url('assets/bootstrap/js/popper.min.js') }}"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="{{ url('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Meanmenu Js -->
    <script src="{{ url('assets/js/jquery.meanmenu.js') }}"></script>
    <!-- Sticky JS -->
    <script src="{{ url('assets/js/jquery.sticky.js') }}"></script>
    <!-- owl-carousel min js  -->
    <script src="{{ url('assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
    <!-- isotope js -->
    <script src="{{ url('assets/js/isotope.3.0.6.min.js') }}"></script>
    <!-- venobox js -->
    <script src="{{ url('assets/venobox/js/venobox.min.js') }}"></script>
    <!-- jquery appear js  -->
    <script src="{{ url('assets/js/jquery.appear.js') }}"></script>
    <!-- countTo js -->
    <script src="{{ url('assets/js/jquery.inview.min.js') }}"></script>
    <!-- scrolltopcontrol js -->
    <script src="{{ url('assets/js/scrolltopcontrol.js') }}"></script>
    <!-- WOW - Reveal Animations When You Scroll -->
    <script src="{{ url('assets/js/wow.min.js') }}"></script>
    <!-- scripts js -->
    <script src="{{ url('assets/js/scripts.js') }}"></script>
</body>

</html>
