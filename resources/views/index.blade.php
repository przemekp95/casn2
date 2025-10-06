
@extends('layouts.app')

@section('title', 'Home - Kevix Template')

@section('content')
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
                        <img src="{{ asset('images/ikonka.webp') }}" class="img-fluid d-block mx-auto" alt="CASN - Centrum Analiz Strategicznych i Niejawnych">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content">
                        <h2 class="about-title text-dark">Choć niepodległość państwowa i narodowa dziś, w globalizującym się świecie, jest pojęciem znacznie trudniej definiowalnym, nie uważamy, aby nie można było współcześnie zdefiniować jej istoty.</h2>
                        <p class="text-muted" style="text-align: justify;">Pomocnym wydają się tu zwłaszcza badania porównawcze, z państwami i narodami "silnymi". A takim państwem i narodem chcemy być i tak rozumiemy służbę dla Niepodległej. Chcemy na tych łamach podejmować ten trud i zaszczytną służbę, analizując kluczowe obszary współczesnej suwerenności m.in.: suwerenność informacyjną, energetyczną, konstytucyjną, militarną, gospodarczą, edukacyjną i kulturową szeroko rzecz ujmując.</p>
<p class="text-muted">Poniżej znajdziecie Państwo nasze inauguracyjne analizy.</p>
<p class="text-muted">Życzymy miłej lektury i zapraszamy do współpracy!</p>

                        <div class="pt-3">
                            <a href="{{ url('/autorzy') }}" class="btn btn-custom">Poznaj autorów</a>
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
                        <img src="{{ asset('images/images.jpeg') }}" class="img-fluid d-block mx-auto rounded" alt="Zespół CASN">
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- OUR WORK END -->

@endsection
