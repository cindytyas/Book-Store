<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('user-template/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('user-template/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('user-template/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('user-template/css/animate.css') }}" />

    {{-- Import CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/test.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header-section">
        <div class="container-fluid">
            <!-- logo -->
            <div class="site-logo">
                <img width="100" height="90" src="{{ asset('user-template/img/logo.png') }}" alt="logo">
            </div>
            <!-- responsive -->
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
            <div class="header-right">
                <a href="#" class="card-bag"><img src="{{ asset('user-template/img/icons/bag.png') }}"
                        alt="">
                        <span>{{ $transaksiCount }}</span>
                </a>
                <a href="#" class="search"><img src="{{ asset('user-template/img/icons/search.png') }}"
                        alt=""></a>
            </div>
            <!-- site menu -->
            <ul class="main-menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">New</a></li>
                <li><a href="#">Best Seller</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </header>
    <!-- Header section end -->

    <div>
        @yield('content')
    </div>

    <!-- Footer section -->
    <footer class="footer-section">
        <div class="container">
            <p class="copyright">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                    aria-hidden="true"></i> by <a href="#" target="_blank">Cindy</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </footer>
    <!-- Footer section end -->

    <!--====== Javascripts & Jquery ======-->
    <script src="{{ asset('user-template/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('user-template/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user-template/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('user-template/js/sly.min.js') }}"></script>
    <script src="{{ asset('user-template/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('user-template/js/main.js') }}"></script>
</body>

</html>
