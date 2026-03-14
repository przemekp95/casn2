@php
    $defaultTitle = 'CASN - Centrum Analiz Służby Niepodległej';
    $defaultDescription = 'Centrum Analiz Służby Niepodległej (CASN) publikuje teksty i analizy dotyczące bezpieczeństwa, gospodarki oraz polityki międzynarodowej.';
    $defaultKeywords = 'CASN, analizy, bezpieczeństwo, gospodarka, polityka międzynarodowa, Polska';
    $rawTitle = trim($__env->yieldContent('title', $pageTitle ?? $defaultTitle));
    $resolvedTitle = $rawTitle === ''
        ? $defaultTitle
        : (str_contains($rawTitle, 'CASN') ? $rawTitle : $rawTitle . ' - CASN');
    $resolvedDescription = trim($__env->yieldContent('description', $pageDescription ?? $defaultDescription));
    $resolvedKeywords = trim($__env->yieldContent('keywords', $pageKeywords ?? $defaultKeywords));
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary Meta Tags -->
    <title>{{ $resolvedTitle }}</title>
    <meta name="title" content="{{ $resolvedTitle }}">
    <meta name="description" content="{{ $resolvedDescription }}">
    <meta name="keywords" content="{{ $resolvedKeywords }}">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Polish">
    <meta name="author" content="Centrum Analiz Służby Niepodległej">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $resolvedTitle }}">
    <meta property="og:description" content="{{ $resolvedDescription }}">
    <meta property="og:image" content="{{ asset('images/logo.jpg') }}">
    <meta property="og:site_name" content="CASN">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $resolvedTitle }}">
    <meta property="twitter:description" content="{{ $resolvedDescription }}">
    <meta property="twitter:image" content="{{ asset('images/logo.jpg') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Original Kevix CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        .navbar-brand {
            font-weight: bold;
        }
        .meta {
            font-size: 0.9rem;
            color: #6c757d;
        }
    </style>

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Centrum Analiz Służby Niepodległej (CASN)",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('images/logo.jpg') }}",
        "description": "Centrum Analiz Służby Niepodległej publikuje teksty i analizy dotyczące bezpieczeństwa, gospodarki oraz polityki międzynarodowej.",
        "sameAs": [
            "{{ url('/') }}"
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "customer service",
            "email": "kontakt@casn.pl"
        }
    }
    </script>
</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Original Kevix JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/scrollspy.min.js') }}"></script>
    <script src="{{ asset('js/counter.int.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/portfolio-filter.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
