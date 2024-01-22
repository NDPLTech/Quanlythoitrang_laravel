<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('public/client/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/client/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/client/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/client/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/client/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/client/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/client/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/client/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{!! asset('public/client/css/toastr.min.css') !!}">
    <script src="{{ asset('public/client/js/toastr/jquery.min.js') }}"></script>
    <script src="{{ asset('public/client/js/toastr/toastr.min.js') }}"></script>

    {!! Toastr::message() !!}

    @yield('styles')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                    <div class="tip">2</div>
                </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                    <div class="tip">2</div>
                </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="{{ asset('public/client/images/logo.png') }}" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="#">Login</a>
            <a href="#">Register</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    @include('pages.header')
    <!-- Header Section End -->

    @yield('content')

    <!-- Footer Section Begin -->
    @include('pages.footer')
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="{{ asset('public/client/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('public/client/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/client/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('public/client/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('public/client/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('public/client/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('public/client/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('public/client/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/client/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('public/client/js/main.js') }}"></script>

    @yield('scripts')
</body>

</html>