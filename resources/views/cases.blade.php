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
                            <h5 class="cases-subtitle mb-2"><a href="/storage/CASN_gotowa_wersja_do_druku_24.01.2023.pdf" class="text-dark">Zeszyt Analiz 2022</a></h5>
                        </div>
                        <div class="learn-more text-center">
                            <a href="/storage/CASN_gotowa_wersja_do_druku_24.01.2023.pdf" class="btn btn-custom btn-block">POBIERZ</a>
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
                            <h5 class="cases-subtitle mb-2"><a href="/storage/Analizy_2023.pdf" class="text-dark">Zeszyt Analiz 2023</a></h5>
                        </div>
                        <div class="learn-more text-center">
                            <a href="/storage/Analizy_2023.pdf" class="btn btn-custom btn-block">POBIERZ</a>
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
                            <h5 class="cases-subtitle mb-2"><a href="/storage/Katalog CASN_online_08_12_24.pdf" class="text-dark">Zeszyt Analiz 2024</a></h5>
                        </div>
                        <div class="learn-more text-center">
                            <a href="/storage/Katalog CASN_online_08_12_24.pdf" class="btn btn-custom btn-block">POBIERZ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CASES END -->
</body>
@endsection
