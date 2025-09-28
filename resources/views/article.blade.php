@extends('layouts.app')

@section('title', 'Home - Kevix Template')

@section('content')

<body>

    <!-- BLOG DETAILS HOME START -->
    <section class="blog-details-home section" id="home">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="home-page-title text-center">
                                <h1 class="text-white mb-2">{{ $article['title'] }}</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center bg-transparent">
                                        <li class="breadcrumb-item text-white"><a href="/" class="text-white">Strona główna</a></li>
                                        <li class="breadcrumb-item  active" aria-current="page"><a href="{{ url('/blog-details') }}" class="text-custom">{{ $article['title'] }}</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BLOG DETAILS HOME END -->

    <!-- BLOG DETAILS START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="blog-details-img">
                        <img src="images/blog-dateils-img.jpg" class="img-fluid d-block mx-auto">
                    </div>

                    <div class="blog-info p-3">
                        <h2 class="text-dark mb-3">{{ $article['title'] }}</h2>

          <h2 class="text-dark mb-3">Autor: {{ $author['name'] }}</h2>
                        <div class="blog-info-desc">
                        @php
    dd($viewName);
@endphp

                                  @include($viewName) {{-- Załaduj widok artykułu --}} 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BLOG DETAILS END -->

</body>
@endsection
