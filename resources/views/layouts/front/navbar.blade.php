<!-- START HEADER SECTION -->
<header class="main-header">

    <!-- START LOGO AREA -->
    <div class="logo-area">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-3 col-12 mx-auto text-lg-left text-center pl-0 mb-lg-0 mb-4">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img class="img-fluid" src="{{ url('logo.png') }}" alt="logo" class="img-fluid"
                                width="100">
                        </a>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-9 col-12">
                    <div class="header-info-box">
                        <h1>SMK POTENSIAL BADRUL HUDA</h1>
                    </div>
                </div>
                <!-- end col -->
            </div>
        </div>
    </div>
    <!-- END LOGO AREA -->

    <!-- START NAVIGATION AREA -->
    <div class="sticky-menu">
        <div class="mainmenu-area">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-9 d-none d-lg-block d-md-none">
                        <nav class="navbar navbar-expand-lg justify-content-left">
                            <ul class="navbar-nav">
                                <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                                <li class="{{ request()->routeIs('galeri') ? 'active' : '' }}"><a href="{{ route('galeri') }}" class="nav-link">Galeri</a></li>
                                <li class="{{ request()->routeIs('blog') ? 'active' : '' }}"><a href="{{ route('blog') }}" class="nav-link">Info</a></li>
                                <li><a href="{{ route('register') }}" class="nav-link">Daftar</a></li>
                                <li><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END NAVIGATION AREA -->
</header>
<!-- END HEADER SECTION -->
