
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orbe Corporation</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="{{ asset('themes/webpage/assets/images/favicon.png') }}">
    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="{{ asset('themes/webpage/assets/css/bootstrap.min.css') }}">
    <!-- All min css -->
    <link rel="stylesheet" href="{{ asset('themes/webpage/assets/css/all.min.css') }}">
    <!-- Swiper bundle min css -->
    <link rel="stylesheet" href="{{ asset('themes/webpage/assets/css/swiper-bundle.min.css') }}">
    <!-- Magnigic popup css -->
    <link rel="stylesheet" href="{{ asset('themes/webpage/assets/css/magnific-popup.css') }}">
    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('themes/webpage/assets/css/animate.css') }}">
    <!-- Nice select css -->
    <link rel="stylesheet" href="{{ asset('themes/webpage/assets/css/nice-select.css') }}">
    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('themes/webpage/assets/css/style.css') }}">
    <script src="{{ asset('themes/orbe/carrito.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>


    <!-- Header area start here -->
    <x-header :categories="$categories" :subcategories="$subcategories" />
    <!-- Header area end here -->

    <!-- Preloader area start -->
    {{-- <div class="loading">
        <span class="text-capitalize">L</span>
        <span>o</span>
        <span>a</span>
        <span>d</span>
        <span>i</span>
        <span>n</span>
        <span>g</span>
    </div>

    <div id="preloader">
    </div> --}}
    <!-- Preloader area end -->

    <!-- Mouse cursor area start here -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Mouse cursor area end here -->

    <main>
        @yield('content')
    </main>


    <!-- Back to top area start here -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Back to top area end here -->

    <!-- Jquery 3. 7. 1 Min Js -->
    <script src="{{ asset('themes/webpage/assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap min Js -->
    <script src="{{ asset('themes/webpage/assets/js/bootstrap.min.js') }}"></script>
    <!-- Swiper bundle min Js -->
    <script src="{{ asset('themes/webpage/assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Counterup min Js -->
    <script src="{{asset('themes/webpage/assets/js/jquery.counterup.min.js')}}"></script>
    <!-- Wow min Js -->
    <script src="{{ asset('themes/webpage/assets/js/wow.min.js') }}"></script>
    <!-- Magnific popup min Js -->
    <script src="{{ asset('themes/webpage/assets/js/magnific-popup.min.js') }}"></script>
    <!-- Nice select min Js -->
    <script src="{{ asset('themes/webpage/assets/js/nice-select.min.js') }}"></script>
    <!-- Pace min Js -->
    <script src="{{ asset('themes/webpage/assets/js/pace.min.js') }}"></script>
    <!-- Isotope pkgd min Js -->
    <script src="{{ asset('themes/webpage/assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- Waypoints Js -->
    <script src="{{ asset('themes/webpage/assets/js/jquery.waypoints.js') }}"></script>
    <!-- Script Js -->
    <script src="{{ asset('themes/webpage/assets/js/script.js') }}"></script>
</body>

</html>
