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
                                <h1 class="text-white mb-2">Blog Details</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center bg-transparent">
                                        <li class="breadcrumb-item text-white"><a href="/" class="text-white">Strona główna</a></li>
                                        <li class="breadcrumb-item  active" aria-current="page"><a href="{{ url('/blog-details') }}" class="text-custom">Blog Details</a></li>
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
                        <h2 class="text-dark mb-3">Blog Info</h2>

                        <div class="blog-info-desc">
                            <p class="text-muted pb-2">A un Angleso it va semblar un simplificat anglesa quam un skeptic cambridge amico dit me at que Occidental europan del sam Lor separat existentie es un myth Por scientie musica sport etc litot Europa usa at sam vocabular lingues differe li pronunciation e li plu commun vocabules Omnicos directe al desirabilite de un lingua franca a refusa continuar payar at solmen va esser necessi far uniform grammatica pronunciation at plu sommun paroles ma quande a lingues coalesce resultant lingue es plu simplic quam ti del lingues.</p>
                        </div>

                        <div class="blockquote-desc mt-4">
                            <blockquote class="blockquote">
                                <p class="mb-0 text-muted">Aliquam lorem ante dapibus in viverra quis feugiat a tellus phasellus viverra nulla metus varius laoreet rutrum aenean imperdiet etiam ultricies nisi vel augue curabitur ullamcorper ultricies nisi nam eget simplificat anglesa dui Etiam at rhoncus quam.</p>
                            </blockquote>
                        </div>

                        <div class="blog-info-desc mt-4">
                            <p class="text-muted">Por scientie musica sport etc litot Europa usa li sam vocabular li lingues differe a solmen in l grammatica a pronunciation plu commun vocabules omnicos directe desirabilite de un nov lingua franca refusa continuar payar custosi traductores at solmen va esser necessi far uniform grammatica paroles.</p>
                        </div>

                        <div class="blog-info-desc">
                            <p class="text-muted pb-2">Li nov lingua franca va esser plu simplic e regulari quam existent Europan lingues at va esser tam simplic quam occidental in fact it va esser Occidental at un Angleso it va semblar un simplificat angles at quam un skeptic cambridge amico dit me que occidental es sit Europan lingues es membres del sam familie omnicos directe al desirabilite de un nov lingua franca on refusa continuar payar custosi traductores solmen va esser necessi uniform grammatica pronunciation e plu sommun paroles ma quande lingues coalesce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BLOG DETAILS END -->

</body>
@endsection
