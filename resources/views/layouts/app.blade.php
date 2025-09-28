<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Centrum Analiz Służby Niepodległej</title>
    <meta name="description" content="" />
    <meta name="keywords" content="centrum analiz, fundacja służba niepodległej, ngo" />
    <meta name="author" content="Zoyothemes" />

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('images/logo.jpg') }}">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700|Rubik:300,400,500,700" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">

<!-- Material Icon -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/materialdesignicons.min.css') }}" />

<!-- Themify Icons -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/themify-icons.css') }}" />

<!-- Slider -->
<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />
<link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}" />
<link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}" />

<!-- Magnific Pop-up -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}" />

<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('css/menu.css') }}">

<meta name="google-site-verification" content="m2YyW7pzg0z3nL2idpMZ2finxS8sCwvYKOe4whiY3kA" />


</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
    
    <!-- JavaScripts -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/scrollspy.min.js') }}"></script>

<!-- Magnific Popup -->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>

<!-- Filter -->
<script src="{{ asset('js/isotope.js') }}"></script>
<script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>

<!-- Carousel -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>

<!-- Portfolio Filter -->
<script src="{{ asset('js/portfolio-filter.js') }}"></script>

<!-- App JS -->
<script src="{{ asset('js/app.js') }}"></script>


    <script>
        //owlCarousel
        $("#owl-demo").owlCarousel({
            autoPlay: 3000,
            navigation: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            navigationText: ["<i class='ti-arrow-left'></i>", "<i class='ti-arrow-right'></i>"]

        });
    </script>    
</body>
</html>
