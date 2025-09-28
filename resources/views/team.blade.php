@extends('layouts.app')

@section('title', 'Home - Kevix Template')

@section('content')

<body>
    <!-- OUR TEAM HOME START -->
    <section class="our-team-home section" id="home">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="home-page-title text-center">
                                <h1 class="text-white mb-2">Nasi autorzy</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center bg-transparent">
                                        <li class="breadcrumb-item text-white"><a href="/" class="text-white">Strona główna</a></li>
                                        <li class="breadcrumb-item  active" aria-current="page"><a href="/autorzy" class="text-custom">Nasi autorzy</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR TEAM HOME END -->

<!-- OUR TEAM START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/Balcerowski.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Dr Piotr Balcerowski</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/balcerowski" style="color: inherit; text-decoration: none;">Dr Piotr Balcerowski</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/Domanska.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Prof. Agnieszka Domańska</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/domanska" style="color: inherit; text-decoration: none;">Prof. Agnieszka Domańska</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/Kochman.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Adw. Oskar Kochman</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/kochman" style="color: inherit; text-decoration: none;">Adw. Oskar Kochman</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/Łuczuk.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Dr Piotr Łuczuk</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/luczuk" style="color: inherit; text-decoration: none;">dr Piotr Łuczuk</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/Ordo.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Adw. dr Bartosz Lewandowski</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/lewandowski" style="color: inherit; text-decoration: none;">Adw. dr Bartosz Lewandowski</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/Trabinski.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Piotr Trąbiński</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/trabinski" style="color: inherit; text-decoration: none;">Piotr Trąbiński</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/Rosołowski.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Marcin Rosołowski</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/rosolowski" style="color: inherit; text-decoration: none;">Marcin Rosołowski</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/Kochan.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Prof. Marek Kochan</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/kochan" style="color: inherit; text-decoration: none;">Prof. Marek Kochan</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/2.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Dr hab. Paweł Okołowski</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/okolowski" style="color: inherit; text-decoration: none;">dr hab. Paweł Okołowski</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/Łempicka.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Dominika Łempicka-Wyszyńska</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/lempicka-wyszynska" style="color: inherit; text-decoration: none;">Dominika Łempicka-Wyszyńska</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/Bruszewski.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Michał Bruszewski</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/bruszewski" style="color: inherit; text-decoration: none;">Michał Bruszewski</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/Giera.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Kamil Giera</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/giera" style="color: inherit; text-decoration: none;">Kamil Giera</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/Wos.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Rafał Woś</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/wos" style="color: inherit; text-decoration: none;">Rafał Woś</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/Gursztyn.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Piotr Gursztyn</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/gursztyn" style="color: inherit; text-decoration: none;">Piotr Gursztyn</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/Kita.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Kacper Kita</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/kita" style="color: inherit; text-decoration: none;">Kacper Kita</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/Swietlik.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Wiktor Świetlik</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/swietlik" style="color: inherit; text-decoration: none;">Wiktor Świetlik</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/Rutke.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Grzegorz Rutke</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/rutke" style="color: inherit; text-decoration: none;">Grzegorz Rutke</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/Bochenek.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Adrian Bochenek</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/bochenek" style="color: inherit; text-decoration: none;">Adrian Bochenek</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/Trochanowska.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Beata Trochanowska</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/trochanowska" style="color: inherit; text-decoration: none;">Beata Trochanowska</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/Horoszko.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Aleksandra Horoszko</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/horoszko" style="color: inherit; text-decoration: none;">Aleksandra Horoszko</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="public/images/Feszler.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Mateusz Feszler</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/feszler" style="color: inherit; text-decoration: none;">Mateusz Feszler</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="public/images/Pietr.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Wojciech Pietr</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/pietr" style="color: inherit; text-decoration: none;">Wojciech Pietr</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="public/images/Rak.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Dr Krzysztof Rak</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/rak" style="color: inherit; text-decoration: none;">Dr Krzysztof Rak</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="public/images/Ratynski.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Dr Mateusz Ratyński</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/ratynski" style="color: inherit; text-decoration: none;">Dr Mateusz Ratyński</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
             <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="public/images/Rowinski.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Tomasz Rowiński</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/rowinski" style="color: inherit; text-decoration: none;">Tomasz Rowiński</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="public/images/Dakowski.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Marek Dakowski</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/dakowski" style="color: inherit; text-decoration: none;">Marek Dakowski</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--<div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/team-details-img.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Dr Krzysztof Rak</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/feszler" style="color: inherit; text-decoration: none;">Mateusz Feszler</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="our-team-box mt-2 mb-4">
                        <div class="team-img">
                            <img src="images/team-details-img.png" alt="" class="img-fluid d-block rounded">
                            <div class="our-team-name text-center">
                                <h6 class="mb-0 text-white">Dr Mateusz Ratyński</h6>
                            </div>
                        </div>
                        <div class="our-team-overlay">
                            <div class="item-content text-white text-center p-2">
                                <div class="item-desc">
                                    <h5 class="text-white mb-0"><a href="/feszler" style="color: inherit; text-decoration: none;">Mateusz Feszler</a></h5>
                                    <div class="our-team-box-border mt-3 mb-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            
            </div> 

        </div>
    </section>
    <!-- OUR TEAM END -->

</body>
@endsection
