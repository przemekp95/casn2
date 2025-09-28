
@extends('layouts.app')

@section('title', 'Home - Kevix Template')

@section('content')

<body>

    <!-- CONTACT US HOME START -->
    <section class="contact-us-home section" id="home">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="home-page-title text-center">
                                <h1 class="text-white mb-2">Kontakt</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center bg-transparent">
                                        <li class="breadcrumb-item text-white"><a href="index.html" class="text-white">Strona główna</a></li>
                                        <li class="breadcrumb-item  active" aria-current="page"><a href="contact-us.html" class="text-custom">Kontakt</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT US HOME START -->

    <!-- MAP START -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2445.410006187239!2d21.028329076225656!3d52.19959625990245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecd2f739bf119%3A0x56543545e55df66b!2sKonduktorska%203%2F2%2C%2000-775%20Warszawa!5e0!3m2!1spl!2spl!4v1731029421672!5m2!1spl!2spl" width="100%" height="500" style="border: 0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MAP END -->

    <!-- CONTACT US -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="contact-us-cantent text-center mt-4">
                        <div class="contact-icon mx-auto mb-3">
                            <i class="mdi mdi-email-outline"></i>
                        </div>
                        <p class="text-muted mb-0">p.balcerowski@sluzbaniepodleglej.pl</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-us-cantent text-center mt-4">
                        <div class="contact-icon mx-auto mb-3">
                            <i class="mdi mdi-web"></i>
                        </div>
                        <p class="text-muted mb-0">sluzbaniepodleglej.pl</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT US -->

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="contact-address">
                        <h4 class="txt-dark">Centrum Konferencyjno-Szkoleniowe</h4>
                        <p class="text-muted">ul. Konduktorska 3/2, Warszawa</p>
                    </div>
                </div>
<!--
                <div class="col-md-6 offset-md-1">
                    <div class="custom-form">
                        <div id="message"></div>
                        <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group app-label">
                                        <label for="name">Imię i nazwisko</label>
                                        <input name="name" id="name" type="text" class="form-control" placeholder="Imię i nazwisko">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group app-label">
                                        <label for="email">Email</label>
                                        <input name="email" id="email" type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label for="subject">Temat</label>
                                        <input type="text" class="form-control" id="subject" placeholder="Temat" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group app-label">
                                        <label for="comments">Wiadomość</label>
                                        <textarea name="comments" id="comments" rows="3" class="form-control" placeholder="Wiadomość"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-custom" value="Prześlij">
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> -->
            </div>
        </div>
    </section>


</body>
@endsection
