
@extends('layouts.app')

@section('title', 'Home - Kevix Template')

@section('content')

<body>
    <!-- HOME START -->
    <section class="bg-home section img-fluid " id="home">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="home-title text-center">
<br><br><br><br><br><br><br><br><br><br><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HOME END -->

    <!-- ABOUT START -->
    <section class="section bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="mo-mb-20">
                        <img src="images/ikonka.webp" class="img-fluid d-block mx-auto">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content">
                        <h2 class="about-title text-dark">Choć niepodległość państwowa i narodowa dziś, w globalizującym się świecie, jest pojęciem znacznie trudniej definiowalnym, nie uważamy, aby nie można było współcześnie zdefiniować jej istoty.</h2>
                        <p class="text-muted" style="text-align: justify;">Pomocnym wydają się tu zwłaszcza badania porównawcze, z państwami i narodami "silnymi". A takim państwem i narodem chcemy być i tak rozumiemy służbę dla Niepodległej. Chcemy na tych łamach podejmować ten trud i zaszczytną służbę, analizując kluczowe obszary współczesnej suwerenności m.in.: suwerenność informacyjną, energetyczną, konstytucyjną, militarną, gospodarczą, edukacyjną i kulturową szeroko rzecz ujmując.</p>
<p class="text-muted">Poniżej znajdziecie Państwo nasze inauguracyjne analizy.</p>
<p class="text-muted">Życzymy miłej lektury i zapraszamy do współpracy!</p>

                        <div class="pt-3">
                            <a href="/zbiory" class="btn btn-custom">Przeczytaj analizy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT END -->



    <!-- OUR WORK START -->
    <section class="section bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="work-content">
                        <h3 class="text-muted">Dążymy do dostarczenia najwyższej jakości analiz i raportów.</h3>
                        <div class="title-border mt-4"></div>

<br>
<p class="text-muted" style="text-align: justify;">Dzięki wykwalifikowanemu i dynamicznemu zespołowi, kontaktom w środowisku rządowym, pozarządowym i akademickim, nie tylko dotrzymujemy kroku dynamicznie zmieniającemu się otoczeniu, ale także z sukcesem wpływamy na kierunki jego rozwoju.</p>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="work-img">
                        <img src="images/images.jpeg" class="img-fluid d-block mx-auto rounded">
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- OUR WORK END -->



    <!-- BLOG START -->
   <!-- <section class="section">
        <div class="container">
            <div class="row justify-content-center" id="analizy">
                <div class="col-lg-6 col-md-10">
                    <div class="title-name text-center mb-4">
                        <h2 class="text-dark mb-3">Our Blog</h2>
                        <p class="text-muted">Cras ultricies mi eu turpis hendrerit fringilla vestibulum ante ipsum primis in faucibus at cubilia Curae.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-box bg-white mt-4">
                        <div class="blog-img">
                            <img src="images/blog/img-1.jpg" class="img-fluid d-block mx-auto rounded">
                        </div>

                        <div class="blog-content p-3">
                            <div class="float-left">
                                <p class="text-muted mb-0"><i class="mdi mdi-calendar"></i> Nov, 01, 2018</p>
                            </div>
                            <div class="text-right">
                                <p class="text-muted">By Javier Tatum</p>
                            </div>

                            <p><a href="" class="text-dark blog-title">Aenean imperdie etiam utricies at augue ultricies nisi nam.</a></p>
                            <p class="text-muted">Quos dolores et quas a molestias excepturi sint occaecati cupiditate non provident similique sunt culpa.</p>
                            <a href="#" class="text-custom mb-1">Read more<i class="mdi mdi-chevron-right ml-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog-box bg-white mt-4">
                        <div class="blog-img">
                            <img src="images/blog/img-2.jpg" class="img-fluid d-block mx-auto rounded">
                        </div>

                        <div class="blog-content p-3">
                            <div class="float-left">
                                <p class="text-muted mb-0"><i class="mdi mdi-calendar"></i> Nov, 02, 2018</p>
                            </div>
                            <div class="text-right">
                                <p class="text-muted">By Robin Flores</p>
                            </div>

                            <p><a href="" class="text-dark blog-title">Enim justo rhoncus imperdiet venenatis vitae justo dictum.</a></p>
                            <p class="text-muted">Cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat us omnis.</p>
                            <a href="#" class="text-custom mb-1">Read more<i class="mdi mdi-chevron-right ml-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog-box bg-white mt-4">
                        <div class="blog-img">
                            <img src="images/blog/img-3.jpg" class="img-fluid d-block mx-auto rounded">
                        </div>

                        <div class="blog-content p-3">
                            <div class="float-left">
                                <p class="text-muted mb-0"><i class="mdi mdi-calendar"></i> Nov, 03, 2018</p>
                            </div>
                            <div class="text-right">
                                <p class="text-muted">By George Smith</p>
                            </div>

                            <p><a href="" class="text-dark blog-title">Et harum quidem rerum facilis expedita distinctio nam libero.</a></p>
                            <p class="text-muted">Itaque earum rerum hic tenetur a sapiente delectus ut aut reiciendisa voluptatibus maiores alias aut.</p>
                            <a href="#" class="text-custom mb-1">Read more<i class="mdi mdi-chevron-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- BLOG END -->




</body>
@endsection

