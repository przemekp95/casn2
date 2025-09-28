    <!-- Navigation Bar-->
    <header id="topnav" class="defaultscroll scroll-active">
        <div class="tagline">
            <div class="container">   
                <div class="float-right">
                    <ul class="topbar-list list-unstyled d-flex" style="margin: 11px 0px;">
                        <li class="list-inline-item">
                            <a href="mailto:p.balcerowski@sluzbaniepodleglej.pl">
                                <i class="mdi mdi-email mr-1 text-custom"></i>Email : p.balcerowski@sluzbaniepodleglej.pl
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="container">
            <!-- Logo container
            <div>
                <a href="{{ url('/') }}" class="logo">
                    Kevix
                </a>
            </div>
            End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
            <div id="navigation">

                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="active">
                        <a href="{{ url('/') }}">Strona główna</a>
                    </li>

                    <li class="active">
                        <a href="{{ url('/autorzy') }}">Autorzy</a>
                    </li>

                    <li class="has-submenu">
                        <a href="#">Analizy</a>
                        <span class="menu-arrow"></span>
                        <ul class="submenu">
                        <!--<li>
                                <a href="{{ url('/blog-list') }}">Wszystkie analizy</a>
                            </li>
                            <li>
                                <a href="{{ url('/blog-details') }}">Poszczególna analiza</a>
                            </li> -->
                            <li class="has-submenu">
                                <a href="#">2022</a>
                                <span class="menu-arrow"></span>
                                <ul class="submenu" style="max-height: calc(100vh - 100px); overflow-y: auto;">
                                    <li><a href="/wot-balcerowski">Wojska Obrony Terytorialnej (WOT) w latach 2016-2022 – geneza, perspektywy i historia kampanii dyskredytacyjnej</a></li>
                                    <li><a href="/kochman-artykul">Rozwój otoczenia instytucjonalnego polityki młodzieżowej w Polsce po 2015 roku</a></li>
                                    <li><a href="/rosolowski-energetyka">Zielona zmiana w polskiej energetyce w świetle polityki klimatycznej UE i oczekiwań Polaków</a></li>
                                    <li><a href="/luczuk-artykul">Polska suwerenność informacyjna a social media. Media (a)społecznościowe i ich rola w dyskursie publicznym. Jak uniknąć zamknięcia w bańce filtrującej?</a></li>
                                    <li><a href="/domanska-artykul">Raport dotyczący badania: "Wpływ tożsamości wspólnotowej i wiedzy ekonomicznej na wybory konsumenckie studentów"</a></li>
                                    <li><a href="/lewandowski-sedziowie">Analiza porównawcza systemu wyborów sędziów w Polsce i Niemczech</a></li>
                                    <li><a href="/kochan-artykul">Obraz Polaków w publikacjach portali internetowych</a></li>
                                    <li><a href="/trabinski-artykul">O potrzebie zachowania polskiego złotego. Przyszłość polskiej waluty w formie cyfrowej</a></li>
                                </ul>
                            </li>


                            <li class="has-submenu">
                                <a href="#">2023</a>
                                <span class="menu-arrow"></span>
                                <ul class="submenu" style="max-height: calc(100vh - 100px); overflow-y: auto;">
                                    <li><a href="/wos-artykul">Solidarność 2023</a></li>
                                    <li><a href="/gursztyn-artykul">Porażki polskiej polityki wschodniej lat 2007-2015</a></li>
                                    <li><a href="/kita-artykul">Francuska polityka migracyjna i wnioski dla Polski</a></li>
                                    <li><a href="/swietlik-artykul">Duch Eisensteina</a></li>
                                    <li><a href="/balcerowsk-mlodziez">Autorytety a młodzież. Analiza przypadku o.Józefa Maria Bocheńskiego</a></li>
                                    <li><a href="/kochman-epbd">Wpływ nowelizacji dyrektywy w sprawie efektywności energetycznej (EPBD) na sytuację społeczno-gospodarczą w Polsce</a></li>
                                    <li><a href="/luczuk-artykul">Polska suwerenność informacyjna a social media. Media (a)społecznościowe i ich rola w dyskursie publicznym. Jak uniknąć zamknięcia w bańce filtrującej?</a></li>
                                    <li><a href="/rosolowski-energetyka">Zielona zmiana w polskiej energetyce w świetle polityki klimatycznej UE i oczekiwań Polaków</a></li>
                                    <li><a href="/rutke-artykul">Europa murami podzielona</a></li>
                                    <li><a href="/bochenek-artykul">Europejskie realia prawno-karne</a></li>
                                    <li><a href="/trochanowska-artykul">Seksualizacja dzieci</a></li>
                                    <li><a href="/horoszko-artykul">Szkoła marzeń pokolenia Z – o problemach i potrzebach polskich uczniów</a></li>
                                    <li><a href="/lempicka-artykul">„SPIESZMY SIĘ RODZIĆ LUDZI…” – dlaczego Polacy wolą być childfree?</a></li>
                                    <li><a href="/okolowski-artykul">Dwa modele uniwersytetu</a></li>
                                    <li><a href="/bruszewski-artykul">Rozwój Sił Zbrojnych RP, a międzynarodowe geopolityczne zmiany z uwzględnieniem wojny na Ukrainie</a></li>
                                    <li><a href="/giera-artykul">Analiza aktywności młodzieży w ramach społeczeństwa obywatelskiego</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">2024</a>
                                <span class="menu-arrow"></span>
                                <ul class="submenu" style="max-height: calc(100vh - 100px); overflow-y: auto;">
                                    <li><a href="/balcerowski-wegry">Czy Polacy potrzebują biało-czerwonego Orbana?</a></li>
                                    <li><a href="/balcerowski-nacjonalizm">O pojęciu Nacjonalizm. Wprowadzenie. Część I</a></li>
                                    <li><a href="/feszler-tsue">Sprawa C‑819/21</a></li>
                                    <li><a href="/rosolowski-atom">Polski atom – piętnaście lat wahań, trzy lata działań</a></li>
                                    <li><a href="/rak-artykul">Polska między Rosją a Niemcami. Historia i wyzwania.</a></li>
                                    <li><a href="/slad-luczuk">Jak długi cyfrowy ślad po sobie zostawiamy i czym to grozi? Od kradzieży tożsamości po programowanie wyborcy</a></li>
                                    <li><a href="/pietr-artykul">Specyfika działalności analitycznej Centralnego Biura Antykorupcyjnego</a></li>
                                    <li><a href="/ratynski-artykul">Strategiczne aspekty polskiego bezpieczeństwa żywnościowego</a></li>
                                    <li><a href="/rowinski-artykul">Przemija postać świata? O końcu epoki wojtyliańskiej</a></li>
                                    <li><a href="/dakowski-artykul">Komunikacja wizualna. Wczoraj i dziś</a></li>
                                </ul>
                            </li>


                        </ul>
                    </li>

                    <li class="active">
                        <a href="{{ url('/zbiory') }}">Zbiory analiz</a>
                    </li>

                    <li class="">
                        <a href="{{ url('/kontakt') }}">Kontakt</a>
                    </li>
                </ul>
                <!-- End navigation menu-->
            </div>
        </div>
    </header>
    <!-- End Navigation Bar-->
