<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;




    $authors = [
        'balcerowski' => [
            'name' => 'Dr Piotr Balcerowski',
            'bio' => 'Zawodowo związany z trzecim sektorem. Jego zainteresowania badawcze obejmują przede wszystkim bezpieczeństwo publiczne i ekonomiczne. Absolwent Instytutu Nauk Politycznych Uniwersytetu Warszawskiego oraz Kolegium Gospodarki Światowej SGH. Stypendysta na Wydziale Zarządzania Uniwersytetu im. Radbouda w Holandii. Absolwent Executive MBA University of Quebec at Montreal. Wykładowca, społecznik, m.in. wolontariusz Fundacji im. Cichociemnych Spadochroniarzy AK, z którą jest rodzinnie związany.',
            'articles' => [
                ['title' => 'Wojska Obrony Terytorialnej (WOT) w latach 2016-2022 – geneza, perspektywy i historia kampanii dyskredytacyjnej', 'link' => '/wot-balcerowski'],
                ['title' => 'Autorytety a młodzież. Analiza przypadku o.Józefa Maria Bocheńskiego', 'link' => '/balcerowsk-mlodziez'],
                ['title' => 'Czy Polacy potrzebują biało-czerwonego Orbana?', 'link' => '/balcerowski-wegry'],
                ['title' => 'O pojęciu Nacjonalizm. Wprowadzenie. Część I', 'link' => '/balcerowski-nacjonalizm'],
            ],
            'photo' => '/images/Balcerowski.png',
        ],
        'kochman' => [
            'name' => 'Adw. Oskar Kochman',
            'bio' => 'Absolwent Wydziału Prawa i Administracji Uniwersytetu Warszawskiego. Adwokat – członek Izby Adwokackiej w Warszawie. Zawodowo od 5 lat związany z sektorem administracji publicznej. Zdobywał doświadczenie również jako prawnik w podmiotach gospodarczych i kancelariach prawnych. Autor analiz i publikacji prawnych i ekonomicznych. Działacz społeczny realizujący od kilku lat szereg projektów w trzecim sektorze. Główny obszar badawczy: rynek finansowy w wymiarze prawnym i ekonomicznym, analiza skutków regulacji, administracja publiczna, badania i analiza postaw społecznych i politycznych.',
            'articles' => [
                ['title' => 'Rozwój otoczenia instytucjonalnego polityki młodzieżowej w Polsce po 2015 roku', 'link' => '/kochman-artykul'],
                ['title' => 'Wpływ nowelizacji dyrektywy w sprawie efektywności energetycznej (EPBD) na sytuację społeczno-gospodarczą w Polsce', 'link' => '/kochman-epbd'],
            ],
            'photo' => '/images/Kochman.png',
        ],
        'rosolowski' => [
            'name' => 'Marcin Rosołowski',
            'bio' => 'Absolwent Wydziału Prawa i Administracji Uniwersytetu Warszawskiego, w latach 2006-2008 zastępca dyrektora Biura Prasowego Kancelarii Prezydenta RP; współautor Pocztu przedsiębiorców polskich. Wiceprezes Fundacji im. XBW Ignacego Krasickiego, członek Rady Fundacji Instytut Staszica.',
            'articles' => [
                ['title' => 'Zielona zmiana w polskiej energetyce w świetle polityki klimatycznej UE i oczekiwań Polaków', 'link' => '/rosolowski-energetyka'],
                ['title' => 'Polski atom – piętnaście lat wahań, trzy lata działań', 'link' => '/rosolowski-atom'],
            ],
            'photo' => '/images/Rosołowski.png',
        ],
        'luczuk' => [
            'name' => 'Dr Piotr Łuczuk',
            'bio' => 'Medioznawca, publicysta, ekspert ds. cyberbezpieczeństwa. Adiunkt w Katedrze Internetu i Komunikacji Cyfrowej Instytutu Edukacji Medialnej i Dziennikarstwa UKSW. W pracy naukowo-badawczej zajmuje się również kwestią wizerunku i marketingu politycznego oraz zjawiskami dotyczącymi wpływu nowoczesnych technologii na komunikację społeczną. W wydawnictwie Biały Kruk ukazał się debiut książkowy „Cyberwojna. Wojna bez amunicji?”. Obszar zainteresowań: cyberbezpieczeństwo, rozwój rynku medialnego, wojna informacyjna i dezinformacja, wizerunek i marketing polityczny, nowe technologie.',
            'articles' => [
                ['title' => 'Polska suwerenność informacyjna a social media. Media (a)społecznościowe i ich rola w dyskursie publicznym. Jak uniknąć zamknięcia w bańce filtrującej?', 'link' => '/luczuk-artykul'],
                ['title' => 'Jak długi cyfrowy ślad po sobie zostawiamy i czym to grozi? Od kradzieży tożsamości po programowanie wyborcy', 'link' => '/slad-luczuk'],
            ],
            'photo' => '/images/Łuczuk.png',
        ],
        'domanska' => [
            'name' => 'Prof. Agnieszka Domańska',
            'bio' => 'Prezes Instytutu Staszica, adiunkt Instytutu Studiów Międzynarodowych Szkoły Głównej Handlowej w Warszawie, doktor habilitowany nauk ekonomicznych. Zainteresowania badawcze: Makroekonomia gospodarki otwartej, w szczególności zagadnienia polityki gospodarczej – jej skuteczności i uwarunkowań w gospodarkach otwartych, znaczenie międzynarodowych współzależności dla efektywności polityki fiskalnej państwa, polityka gospodarcza a udział kraju w międzynarodowych ugrupowaniach integracyjnych, rozprzestrzenianie się kryzysów regionalnych i globalnych.',
            'articles' => [
                ['title' => 'Raport dotyczący badania: "Wpływ tożsamości wspólnotowej i wiedzy ekonomicznej na wybory konsumenckie studentów"', 'link' => '/domanska-artykul'],
            ],
            'photo' => '/images/Domanska.png',
        ],
        
               'lewandowski' => [
            'name' => 'Adw. dr Bartosz Lewandowski',
            'bio' => 'Adwokat, doktor nauk prawnych, Dyrektor Centrum Interwencji Procesowej Ordo Iuris. Absolwent studiów prawniczych na Wydziale Prawa i Administracji Uniwersytetu Warszawskiego, które ukończył z wyróżnieniem w 2012 r. Autor publikacji z zakresu prawa karnego materialnego i procesowego, historii prawa oraz teorii i filozofii prawa, publikowanych w prestiżowych ogólnopolskich oraz międzynarodowych periodykach naukowych. Od 2013 r. jest zaangażowany w działalność organizacji pozarządowych.',
            'articles' => [
                ['title' => 'Analiza porównawcza systemu wyborów sędziów w Polsce i Niemczech', 'link' => '/lewandowski-sedziowie'],
            ],
            'photo' => '/images/Ordo.png',
        ],
        'kochan' => [
            'name' => 'Prof. Marek Kochan',
            'bio' => 'Językoznawca, medioznawca. Naukowo zajmuje się językiem komunikacji publicznej, wizerunkiem osób i instytucji, komunikacją kryzysową, językiem biznesu, przemocą językową, perswazją, retoryką i erystyką, narracjami, prowadzeniem debat czy postkolonialnymi aspektami dyskursu publicznego. Prowadził badania naukowe szczególnie z zakresu języka biznesu, sloganów i przemocy w języku. Był członkiem projektu badawczego „Komunikowanie publiczne w Polsce – ujęcie inter- i multidyscyplinarne” realizowanego w latach 2013–2017 przez Konsorcjum Naukowe Analiza Dyskursu.',
            'articles' => [
                ['title' => 'Obraz Polaków w publikacjach portali internetowych', 'link' => '/kochan-artykul'],
            ],
            'photo' => '/images/Kochan.png',
        ],
        
               'wos' => [
            'name' => 'Rafał Woś',
            'bio' => 'Dziennikarz i analityk ekonomiczny publikujący m.in. w Salonie24 i Dzienniku Gazeta Prawna. Nominowany do szeregu nagród branżowych m.in. Nagrody im. Eugeniusza Kwiatkowskiego (przyznawanej przez Akademię Ekonomiczną w Krakowie) czy Nagrody NBP im. Władysława Grabskiego. Autor licznych książek m.in. "Dziecięca choroba liberalizmu", "To nie jest kraj dla pracowników" czy "Zimna trzydziestoletnia. Nieautoryzowana biografia polskiego kapitalizmu".',
            'articles' => [
                ['title' => 'Solidarność 2023', 'link' => '/wos-artykul'],
            ],
            'photo' => '/images/Wos.png',
        ],
        'gursztyn' => [
            'name' => 'Piotr Gursztyn',
            'bio' => 'Dziennikarz, publicysta, historyk. Pracował m.in. w Radiu Plus, Telewizji Puls, telewizji Polsat, "Dzienniku. Polska-Europa-Świat", "Rzeczpospolitej", "Uważam Rze", "Do Rzeczy", Polskim Radiu RDC. Obecnie pracuje w TVP, gdzie m.in. kierował TVP Historia i Biurem Koordynacji Programowej. Autor książek "Rzeź Woli. Zbrodnia nierozliczona" i "Ribbentrop-Beck. Czy pakt Polska-Niemcy był możliwy". W 2017 r. odznaczony Srebrnym Krzyżem Zasługi za zasługi na rzecz upamiętniania prawdy o najnowszej historii Polski, a w 2022 r. medalem "Za zasługi dla obronności kraju". Jest żołnierzem Wojsk Obrony Terytorialnej.',
            'articles' => [
                ['title' => 'Porażki polskiej polityki wschodniej lat 2007-2015', 'link' => '/gursztyn-artykul'],
            ],
            'photo' => '/images/Gursztyn.png',
        ],
        'kita' => [
            'name' => 'Kacper Kita',
            'bio' => 'Katolik, mąż, analityk, publicysta. Obserwator polityki międzynarodowej i kultury. Sympatyk Fiodora Dostojewskiego i Richarda Nixona. Autor biografii Giorgii Meloni i Erica Zemmoura.',
            'articles' => [
                ['title' => 'Francuska polityka migracyjna i wnioski dla Polski', 'link' => '/kita-artykul'],
            ],
            'photo' => '/images/Kita.png',
        ],
        'swietlik' => [
            'name' => 'Wiktor Świetlik',
            'bio' => 'Dziennikarz prasowy, radiowy i telewizyjny, nauczyciel akademicki i menadżer. Absolwent Wydziału Dziennikarstwa i Nauk Politycznych Uniwersytetu Warszawskiego. Publikował felietony i teksty publicystyczne w dziennikach „Rzeczpospolita", tygodnikach „Uważam Rze", „Sieci", na portalach „Wirtualna Polska", „Interia.pl", „wPolityce.pl" i w wielu innych tytułach. W latach 2017 - 2019 kierował 3 Programem Polskiego Radia. Obecnie, jako pełnomocnik zarządu Polskiej Agencji Prasowej, kieruje serwisem fact-checkingowym FakeHunter zajmującym się walką z dezinformacją. Jest autorem książek pt. „Bronisław Komorowski, pierwsza niezależna biografia" oraz „Polska Stasiaka".',
            'articles' => [
                ['title' => 'Duch Eisensteina', 'link' => '/swietlik-artykul'],
            ],
            'photo' => '/images/Swietlik.png',
        ],
        'rutke' => [
            'name' => 'Grzegorz Rutke',
            'bio' => 'Redaktor serwisu #FakeHunter Polskiej Agencji Prasowej specjalizujący się w zagadnieniach dezinformacji z obszaru geopolityki i zdrowia w materiałach prasowych oraz mediach społecznościowych. Wcześniej związany z wydawnictwami Edipresse Polska i Egmont Polska. Absolwent Wydziału Dziennikarstwa i Nauk Politycznych Uniwersytetu Warszawskiego.',
            'articles' => [
                ['title' => 'Europa murami podzielona', 'link' => '/rutke-artykul'],
            ],
            'photo' => '/images/Rutke.png',
        ],
        'bochenek' => [
            'name' => 'Adrian Bochenek',
            'bio' => 'Prezes Stowarzyszenia Studenci dla Rzeczypospolitej, student prawa na Uniwersytecie Jagiellońskim. Od 4 lat zaangażowany w społeczeństwo obywatelskie, koordynując m.in. Akademię Skolimowską i Namioty Wyklętych. Prywatne zainteresowania to prawo karne, szachy oraz piłka nożna.',
            'articles' => [
                ['title' => 'Europejskie realia prawno-karne', 'link' => '/bochenek-artykul'],
            ],
            'photo' => '/images/Bochenek.png',
        ],
        'trochanowska' => [
            'name' => 'Beata Trochanowska',
            'bio' => 'Absolwentka stosunków międzynarodowych na Collegium Civitas. Studentka prawa oraz Prezes Koła Naukowego Prawa Konstytucyjnego na Uczelni Łazarskiego. Doświadczenie zawodowe zdobywała w pracy w międzynarodowych firmach oraz poprzez działalność społeczną.',
            'articles' => [
                ['title' => 'Beata Trochanowska – Seksualizacja dzieci', 'link' => '/trochanowska-artykul'],
            ],
            'photo' => '/images/Trochanowska.png',
        ],
    
    'bruszewski' => [
    'name' => 'Michał Bruszewski',
    'bio' => 'Reporter wojenny, ekspert ds. bezpieczeństwa i publicysta. Jako reporter był w Iraku w czasie operacji mosulskiej, w 2018 roku w Donbasie oraz na granicy polsko-białoruskiej. Autor reportaży z ukraińskiej wojny obronnej 2022 roku. Odbył kilka podróży reporterskich po ogarniętej wojną Ukrainie - autor tekstów o zbrodniach rosyjskich w Buczy i Borodiance, a także o sytuacji frontowej pod Charkowem. Autor książki „Kronika Prześladowanych” o męczeństwie chrześcijan w XXI wieku oraz sytuacji Ukrainy. Współpracował m.in. z Tygodnikiem Solidarność, DoRzeczy, Gazetą Polską Codziennie, Rzeczy Wspólne, Katolicką Agencją Informacyjną. Pisze do Defence24.pl. Jest komentatorem spraw międzynarodowych w TVP, Polsat News oraz Polskim Radio. Wykładowca, szkoleniowiec, ekspert ds. mediów. Prywatnie miłośnik sportów walki, uprawia boks.',
    'articles' => [
        ['title' => 'Rozwój Sił Zbrojnych RP, a międzynarodowe geopolityczne zmiany z uwzględnieniem wojny na Ukrainie', 'link' => '/bruszewski-artykul'],
    ],
    'photo' => '/images/Bruszewski.png',
],

        'okolowski' => [
            'name' => 'Dr hab. Paweł Okołowski',
            'bio' => 'Adiunkt w Zakładzie Filozofii Religii Wydziału Filozofii Uniwersytetu Warszawskiego. Uczeń profesorów Bogusława Wolniewicza i Zbigniewa Musiała. Specjalizuje się w antropologii filozoficznej i aksjologii, prezentując w nich własne stanowisko. Autor ponad 120 publikacji, w tym książek: "Materia i wartości. Neolukrecjanizm Stanisława Lema" (2010), "Między Elzenbergiem a Bierdiajewem. Studium aksjologiczno-antropologiczne" (2012), "Filozofia i los. Szkice tychiczne" (2015) oraz "Głos Pana Lema. Szkice z filozofii człowieka, wartości i kosmosu" (2021). Inicjator i redaktor naukowy tomu "Filozofia i wartości. Post factum" (2021). Prezes Fundacji Katedra Bogusława Wolniewicza.',
            'articles' => [
                ['title' => 'Dwa modele uniwersytetu', 'link' => '/okolowski-artykul'],
            ],
            'photo' => '/images/2.png',
        ],
        'lempicka-wyszynska' => [
            'name' => 'Dominika Łempicka-Wyszyńska',
            'bio' => 'Absolwentka studiów na Wydziale Katedry Języków Specjalistycznych Uniwersytetu Warszawskiego (język angielski i niemiecki), Studiów Podyplomowych w zakresie Stosunków Międzynarodowych i Dyplomacji (Collegium Civitas) oraz Studiów Podyplomowych w zakresie E-marketingu na Uczelni Łazarskiego. Poetka, scenarzystka i lingwistka - współzałożycielka i prezes Fundacji Lampa, zajmującej się krzewieniem wartości religijnych i patriotycznych poprzez sztukę. Stypendystka Ministra Kultury i Dziedzictwa Narodowego w zakresie poezji.',
            'articles' => [
                ['title' => '„SPIESZMY SIĘ RODZIĆ LUDZI…” – dlaczego Polacy wolą być childfree?', 'link' => '/lempicka-artykul'],
            ],
            'photo' => '/images/Lempicka.png',
        ],
        'horoszko' => [
            'name' => 'Aleksandra Horoszko',
            'bio' => 'Działaczka społeczna oraz edukatorka. Od 2021 roku Przewodnicząca Rady Dzieci i Młodzieży RP przy Ministerstwie Edukacji i Nauki, Wiceprzewodnicząca Młodzieżowej Rady Miasta Olsztyna, Koordynatorka Rady Młodych Rolników. Wielokrotna stypendystka Ministra Edukacji i Nauki za wybitne osiągnięcia naukowe. Laureatka 10. miejsca w Ogólnopolskiej Olimpiadzie Filozoficznej, autorka publikacji naukowych z zakresu filozofii, języka polskiego oraz historii.',
            'articles' => [
                ['title' => 'Szkoła marzeń pokolenia Z – o problemach i potrzebach polskich uczniów', 'link' => '/horoszko-artykul'],
            ],
            'photo' => '/images/Horoszko.png',
        ],
        'giera' => [
            'name' => 'Kamil Giera',
            'bio' => 'Student V roku prawa na Uniwersytecie Jagiellońskim, pracownik Departamentu Innowacji i Technologii w Ministerstwie Cyfryzacji. Członek zarządu Stowarzyszenia Studenci dla Rzeczypospolitej, zaangażowany od wielu lat w społeczeństwo obywatelskie. Koordynator projektów: Akademia Skolimowska, Namioty Wyklętych. Wyróżniony w konkursie Lider Młodego Pokolenia, w 2019 roku członek Zespołu ds. studenckich przy Ministerstwie Nauki i Szkolnictwa Wyższego.',
            'articles' => [
                ['title' => 'Analiza aktywności młodzieży w ramach społeczeństwa obywatelskiego', 'link' => '/giera-artykul'],
            ],
            'photo' => '/images/Giera.png',
        ],
        'bruszewski' => [
            'name' => 'Michał Bruszewski',
            'bio' => 'Reporter wojenny, ekspert ds. bezpieczeństwa i publicysta. Jako reporter był w Iraku w czasie operacji mosulskiej, w 2018 roku w Donbasie oraz na granicy polsko-białoruskiej. Autor reportaży z ukraińskiej wojny obronnej 2022 roku, w tym tekstów o zbrodniach rosyjskich w Buczy i Borodiance oraz o sytuacji frontowej pod Charkowem. Autor książki „Kronika Prześladowanych” o męczeństwie chrześcijan w XXI wieku oraz sytuacji Ukrainy. Współpracował m.in. z Tygodnikiem Solidarność, DoRzeczy, Gazetą Polską Codziennie, Rzeczy Wspólne, Katolicką Agencją Informacyjną. Pisze dla Defence24.pl. Jest komentatorem spraw międzynarodowych w TVP, Polsat News oraz Polskim Radiu. Wykładowca, szkoleniowiec, ekspert ds. mediów. Prywatnie miłośnik sportów walki, uprawia boks.',
            'articles' => [
                ['title' => 'Rozwój Sił Zbrojnych RP, a międzynarodowe geopolityczne zmiany z uwzględnieniem wojny na Ukrainie', 'link' => '/bruszewski-artykul'],
            ],
            'photo' => '/images/Bruszewski.png',
        ],

        'pietr' => [
            'name' => 'Wojciech Pietr',
            'bio' => 'absolwent studiów prawniczych na Uniwersytecie
Wrocławskim. W latach
2004-2008 funkcjonariusz Policji. W 2008 r. rozpoczął służbę w CBA w pionie
analiz, w latach
2016-2023 dyrektor Departamentu Analiz CBA. Aktualnie prowadzi działalność
gospodarczą,
świadcząc usługi w obszarze analizy, bezpieczeństwa i informatyki.',
            'articles' => [
                ['title' => 'Specyfika działalności analitycznej Centralnego Biura Antykorupcyjnego', 'link' => '/pietr-artykul'],
            ],
            'photo' => '/public/images/Pietr.png',
        ],

        'rak' => [
            'name' => 'Dr Krzysztof Rak',
            'bio' => 'polski historyk, analityk Instytutu Zachodniego, autor
licznych książek m.in. Polska — „Niespełniony sojusznik Hitlera”;
„Piłsudski: między Stalinem a Hitlerem”; „Piekielni sąsiedzi. Jak Rosja i
Niemcy dogadywały się kosztem Polski”.',
            'articles' => [
                ['title' => 'Polska między Rosją a Niemcami. Historia i wyzwania.', 'link' => '/rak-artykul'],
            ],
            'photo' => '/public/images/Rak.png',
        ],

        'dakowski' => [
            'name' => 'Marek Dakowski',
            'bio' => 'absolwent Akademii Sztuk Pięknych w Warszawie i Szkoły
Wajdy. Realizator
filmowy, dokumentalista, producent wideo. Współpracował m.in. z TVP, TV
Republika i Polskim
Radiem.',
            'articles' => [
                ['title' => 'Komunikacja wizualna. Wczoraj i dziś', 'link' => '/dakowski-artykul'],
            ],
            'photo' => '/public/images/Dakowski.png',
        ],

        'rowinski' => [
            'name' => 'Tomasz Rowiński',
            'bio' => 'absolwent studiów w Instytucie Stosowanych Nauk
Społecznych Uniwersytetu
Warszawskiego. Pisarz, publicysta, autor lub współautor wielu cenionych
książek m.in.  *Bękarty Dantego; *
*Królestwo nie z tegoświata. O zasadach Polski katolickiej na podstawie
wydarzeń nowszych i dawniejszych; * Alarm dla Kościoła. Nowa reformacja?; * Non
possumus. Niezgoda, której uczy Kościół; *
*Turbopapiestwo. O dynamice pewnego kryzysu czy Anachroniczna
nowoczesności. Szkiceo cywilizacji przemocy.*',
            'articles' => [
                ['title' => 'Przemija postać świata? O końcu epoki wojtyliańskiej', 'link' => '/rowinski-artykul'],
            ],
            'photo' => '/public/images/Rowinski.png',
        ],

        'feszler' => [
            'name' => 'Mateusz Feszler',
            'bio' => 'Mateusz Feszler jest studentem IV roku Prawa na Wydziale Prawa i Administracji Uniwersytetu Warszawskiego. Od 2019 r. jest związany ze środowiskiem polityki młodzieżowej. Pełnił funkcję m. in.: Przewodniczącego Młodzieżowej Rady Miasta Białegostoku, Rzecznika Prasowego Młodzieżowego Sejmiku Województwa Podlaskiego oraz radnego w ogólnopolskich radach m.in. w V i VI kadencji Rady Dzieci i Młodzieży przy Ministrze Edukacji i Nauki oraz II kadencji Rady Dialogu z Młodym Pokoleniem. Od 2023 r. pełni funkcję przewodniczącego III kadencji Młodzieżowego Sejmiku Województwa Podlaskiego oraz Sekretarza Rady Dialogu z Młodym Pokoleniem. Swoje doświadczenie zdobywał również we współpracy z organizacjami pozarządowymi: Ogólnopolskiej Federacji Młodych, Stowarzyszeniu Koliber i Fundacji Centrum Inicjatyw na Rzecz Społeczeństwa i Instytucie Suwerennej. Pracował w Kancelarii Prezesa Rady Ministrów. Obecnie jest Prezesem zarządu Fundacji Służba Niepodległej oraz Prezesem Interdyscyplinarnego Studenckiego Koła Naukowego Prawa o Sztucznej Inteligencji „AI” działającego na Uniwersytecie Warszawskim.. Na co dzień interesuje się poezją i literaturą.',
            'articles' => [
                ['title' => 'Sprawa C‑819/21', 'link' => '/feszler-tsue'],
            ],
            'photo' => '/public/images/Feszler.png',
        ],
    
        'ratynski' => [
            'name' => 'Dr Mateusz Ratyński',
            'bio' => 'Historyk, doktor nauk humanistycznych, kierownik
Działu Naukowo-Badawczego Muzeum Historii Polskiego Ruchu Ludowego oraz autor książek z zakresu
historii XX wieku m.in.* Stanisław Osiecki (1875-1967). Polityk z pasją; Jan Dębski (1889-1976). Polityk kompromisu*',
            'articles' => [
                ['title' => 'Strategiczne aspekty polskiego bezpieczeństwa żywnościowego', 'link' => '/ratynski-artykul'],
            ],
            'photo' => '/public/images/Ratynski.png',
        ],

        'trabinski' => [
            'name' => 'Piotr Trąbiński',
            'bio' => 'Prawnik oraz Inżynier, absolwent Wydziału Prawa i Administracji Uniwersytetu Warszawskiego oraz School of Engineering and Applied Science w dziedzinie nauk komputerowych i cyberbezpieczeństwa na George Washington University, jak również the Institute of World Politics w Waszyngtonie w dziedzinie studiów nad bezpieczeństwem i stosunkami międzynarodowymi. Autor licznych publikacji oraz książek w dziedzinie nowych technologii, cyberbezpieczeństwa, aktywów cyfrowych pieniądza cyfrowego jak również makroekonomii.',
            'articles' => [
                ['title' => 'O potrzebie zachowania polskiego złotego. Przyszłość polskiej waluty w formie cyfrowej.', 'link' => '/trabinski-artykul'],
            ],
            'photo' => '/images/Trabinski.png',
        ],

        // Kontynuacja dla pozostałych autorów...
    ];










Route::get('/', function () {
    return view('index');
});

Route::get('/kontakt', function () {
    return view('contact-us');
});

Route::get('/team-details', function () {
    return view('team-details');
});


Route::get('/autorzy', function () {
    return view('team');
});







Route::get('/zbiory', function () {
    return view('cases');
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/blog-list', function () {
    return view('blog-list');
});

Route::get('/lewandowski-sedziowie', function () {
    return view('lewandowski-sedziowie');
});

Route::get('/rosolowski-energetyka', function () {
    return view('rosolowski-energetyka');
});

Route::get('/domanska-artykul', function () {
    return view('domanska-artykul');
});

Route::get('/kochan-artykul', function () {
    return view('kochan-artykul');
});

Route::get('/luczuk-artykul', function () {
    return view('luczuk-artykul');
});

Route::get('/wot-balcerowski', function () {
    return view('wot-balcerowski');
});

Route::get('/domanska-artykul', function () {
    return view('domanska-artykul');
});
Route::get('/kochman-artykul', function () {
    return view('kochman-artykul');
});

Route::get('/slad-luczuk', function () {
    return view('slad-luczuk');
});

Route::get('/giera-artykul', function () {
    return view('giera-artykul');
});

Route::get('/lempicka-artykul', function () {
    return view('lempicka-artykul');
});

Route::get('/okolowski-artykul', function () {
    return view('okolowski-artykul');
});

Route::get('/wos-artykul', function () {
    return view('wos-artykul');
});

Route::get('/bruszewski-artykul', function () {
    return view('bruszewski-artykul');
});

Route::get('/gursztyn-artykul', function () {
    return view('gursztyn-artykul');
});

Route::get('/rutke-artykul', function () {
    return view('rutke-artykul');
});

Route::get('/kita-artykul', function () {
    return view('kita-artykul');
});

Route::get('/bochenek-artykul', function () {
    return view('bochenek-artykul');
});

Route::get('/horoszko-artykul', function () {
    return view('horoszko-artykul');
});

Route::get('/rosolowski-atom', function () {
    return view('rosolowski-atom');
});

Route::get('/trochanowska-artykul', function () {
    return view('trochanowska-artykul');
});

Route::get('/balcerowsk-mlodziez', function () {
    return view('balcerowsk-mlodziez');
});

Route::get('/kochman-epbd', function () {
    return view('kochman-epbd');
});

Route::get('/feszler-tsue', function () {
    return view('feszler-tsue');
});

Route::get('/balcerowski-wegry', function () {
    return view('balcerowski-wegry');
});

Route::get('/balcerowski-nacjonalizm', function () {
    return view('balcerowski-nacjonalizm');
});

Route::get('/swietlik-artykul', function () {
    return view('swietlik-artykul');
});

Route::get('/pietr-artykul', function () {
    return view('pietr-artykul');
});

Route::get('/ratynski-artykul', function () {
    return view('ratynski-artykul');
});

Route::get('/rak-artykul', function () {
    return view('rak-artykul');
});

Route::get('/rowinski-artykul', function () {
    return view('rowinski-artykul');
});

Route::get('/trabinski-artykul', function () {
    return view('trabinski-artykul');
});

Route::get('/dakowski-artykul', function () {
    return view('dakowski-artykul');
});






Route::get('/sitemap.xml', function () use ($authors) {
    // Pobieranie tras statycznych, wykluczając trasy admina
    $staticRoutes = collect(Route::getRoutes())
        ->filter(function ($route) {
            return in_array('GET', $route->methods()) && // Tylko trasy GET
                   strpos($route->uri(), 'admin') === false && // Wyklucz trasy z "admin"
                   strpos($route->uri(), '{') === false; // Wyklucz trasy dynamiczne
        })
        ->map(function ($route) {
            return [
                'loc' => url($route->uri()),
                'lastmod' => now()->toAtomString(),
            ];
        })
        ->toArray();

    // Dynamiczne trasy (np. autorzy i artykuły)
    $dynamicRoutes = [];
    foreach ($authors as $surname => $author) {
        // Strona autora
        $dynamicRoutes[] = [
            'loc' => url("/{$surname}"),
            'lastmod' => now()->toAtomString(),
        ];

        // Artykuły autora
        foreach ($author['articles'] as $article) {
            $dynamicRoutes[] = [
                'loc' => url($article['link']),
                'lastmod' => now()->toAtomString(),
            ];
        }
    }

    // Łączenie tras statycznych i dynamicznych
    $urls = array_merge($staticRoutes, $dynamicRoutes);

    // Generowanie XML
    $header = '<?xml version="1.0" encoding="UTF-8"?>';
    $content = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    foreach ($urls as $url) {
        $content .= '<url>';
        $content .= '<loc>' . htmlspecialchars($url['loc']) . '</loc>';
        $content .= '<lastmod>' . htmlspecialchars($url['lastmod']) . '</lastmod>';
        $content .= '</url>';
    }
    $content .= '</urlset>';

    // Zwracanie odpowiedzi XML
    return response($header . $content, 200)->header('Content-Type', 'application/xml');
});




    Route::get('/{surname}', function ($surname) use ($authors) {
        if (!array_key_exists($surname, $authors)) {
            abort(404); // Wyświetl błąd 404, jeśli autor nie istnieje
        }
    
        return view('author', $authors[$surname]);
    });
    

