@extends('layouts.app')

@section('title', 'Home - Kevix Template')

@section('content')

<body>

    <!-- CASES HOME START -->
    <section class="cases-home section" id="home">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="home-page-title text-center">
                                <h1 class="text-white mb-2">Roczniki analiz</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center bg-transparent">
                                        <li class="breadcrumb-item text-white"><a href="/" class="text-white">Strona główna</a></li>
                                        <li class="breadcrumb-item  active" aria-current="page"><a href="{{ url('/zbiory') }}" class="text-custom">Roczniki analiz</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CASES HOME END -->


    <!-- CASES START -->
    <section class="section">
        <div class="container">
        
            <!-- Gallary -->
            <div class="row projects-wrapper">
                <div class="col-lg-4 col-md-6 management international">
                    <div class="blog-list-item bg-white rounded mt-4">
                        <div class="blog-list-img">
                            <img src="/images/logo.jpg" class="img-fluid d-block mx-auto rounded">
                            <div class="blog-list-overlay">
                            </div>
                        </div>

                        <div class="cases-desc text-center p-3">
                            <h5 class="cases-subtitle mb-2"><a href="{{ Storage::url('app/public/CASN_gotowa_wersja_do_druku_24.01.2023.pdf') }}" class="text-dark">Zeszyt Analiz 2022</a></h5>
                        </div>
                        <div class="learn-more text-center">
                            <a href="{{ Storage::url('app/public/CASN_gotowa_wersja_do_druku_24.01.2023.pdf') }}" class="btn btn-custom btn-block">POBIERZ</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 management international">
                    <div class="blog-list-item bg-white rounded mt-4">
                        <div class="blog-list-img">
                            <img src="/images/logo.jpg" class="img-fluid d-block mx-auto rounded">
                            <div class="blog-list-overlay">
                            </div>
                        </div>

                        <div class="cases-desc text-center p-3">
                            <h5 class="cases-subtitle mb-2"><a href="{{ Storage::url('app/public/Analizy_2023.pdf') }}" class="text-dark">Zeszyt Analiz 2023</a></h5>
                        </div>
                        <div class="learn-more text-center">
                            <a href="{{ Storage::url('app/public/Analizy_2023.pdf') }}" class="btn btn-custom btn-block">POBIERZ</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 management international">
                    <div class="blog-list-item bg-white rounded mt-4">
                        <div class="blog-list-img">
                            <img src="/images/logo.jpg" class="img-fluid d-block mx-auto rounded">
                            <div class="blog-list-overlay">
                            </div>
                        </div>

                        <div class="cases-desc text-center p-3">
                            <h5 class="cases-subtitle mb-2"><a href="/storage/app/public/Katalog CASN_online_08_12_24.pdf" class="text-dark">Zeszyt Analiz 2024</a></h5>
                        </div>
                        <div class="learn-more text-center">
                            <a href="/storage/app/public/Katalog CASN_online_08_12_24.pdf" class="btn btn-custom btn-block">POBIERZ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CASES END -->
</body>
@endsection
