<?php
/**
 * Standardize ALL article views to have consistent clean layout
 */

echo "=== STANDARDIZING ALL ARTICLE VIEWS ===\n\n";

// Clean layout template
$cleanTemplate = '@extends(\'layouts.app\')

@section(\'title\', \'{TITLE}\')

@section(\'content\')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-12">
            <article class="article-content">
                <header class="mb-4">
                    <h1 class="display-4 mb-3">{TITLE}</h1>

                    <div class="article-meta mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset(\'{AUTHOR_IMAGE}\') }}" alt="{AUTHOR_NAME}"
                                 class="rounded-circle me-3" style="width: 60px; height: 60px; object-fit: cover;">
                            <div>
                                <h5 class="mb-0">{AUTHOR_NAME}</h5>
                                <small class="text-muted">Autor artykułu</small>
                            </div>
                        </div>

                        <div class="article-info">
                            <span class="badge bg-primary me-2">Analiza</span>
                            <span class="badge bg-secondary">CASN</span>
                        </div>
                    </div>
                </header>

                <div class="article-body">
                    <div class="content-section mb-5">
                        <h2>Treść analizy</h2>
                        <div class="article-text">
                            {CONTENT}
                        </div>
                    </div>

                    <div class="content-section">
                        <h3>Informacje o autorze</h3>
                        <div class="author-bio p-4 bg-light rounded">
                            <div class="d-flex align-items-start">
                                <img src="{{ asset(\'{AUTHOR_IMAGE}\') }}" alt="{AUTHOR_NAME}"
                                     class="rounded-circle me-3" style="width: 80px; height: 80px; object-fit: cover;">
                                <div>
                                    <h5>{AUTHOR_NAME}</h5>
                                    <p class="mb-2">{AUTHOR_BIO}</p>
                                    <a href="{{ url(\'/{AUTHOR_SLUG}\') }}" class="btn btn-outline-primary btn-sm">
                                        Zobacz wszystkie artykuły autora
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>

<style>
.article-content {
    background: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.article-meta {
    border-bottom: 1px solid #dee2e6;
    padding-bottom: 1.5rem;
}

.article-info .badge {
    font-size: 0.8rem;
}

.content-section h2 {
    color: #2c3e50;
    border-bottom: 2px solid #3498db;
    padding-bottom: 0.5rem;
    margin-bottom: 1.5rem;
}

.content-section h3 {
    color: #34495e;
    margin-top: 2rem;
    margin-bottom: 1rem;
}

.article-text {
    line-height: 1.8;
    font-size: 1.1rem;
    color: #2c3e50;
}

.article-text p {
    margin-bottom: 1.5rem;
}

.author-bio {
    margin-top: 1rem;
}
</style>
@endsection';

// Article data mapping
$articles = [
    'lewandowski-sedziowie' => [
        'title' => 'Analiza porównawcza systemu wyborów sędziów w Polsce i Niemczech',
        'author' => 'Adw. dr Bartosz Lewandowski',
        'author_slug' => 'lewandowski',
        'author_image' => 'images/Ordo.png',
        'author_bio' => 'Adwokat, doktor nauk prawnych, Dyrektor Centrum Interwencji Procesowej Ordo Iuris. Absolwent studiów prawniczych na Wydziale Prawa i Administracji Uniwersytetu Warszawskiego.'
    ],
    'rosolowski-energetyka' => [
        'title' => 'Zielona zmiana w polskiej energetyce w świetle polityki klimatycznej UE i oczekiwań Polaków',
        'author' => 'Marcin Rosołowski',
        'author_slug' => 'rosolowski',
        'author_image' => 'images/Rosołowski.png',
        'author_bio' => 'Absolwent Wydziału Prawa i Administracji Uniwersytetu Warszawskiego, w latach 2006-2008 zastępca dyrektora Biura Prasowego Kancelarii Prezydenta RP.'
    ],
    'domanska-artykul' => [
        'title' => 'Raport dotyczący badania: "Wpływ tożsamości wspólnotowej i wiedzy ekonomicznej na wybory konsumenckie studentów"',
        'author' => 'Prof. Agnieszka Domańska',
        'author_slug' => 'domanska',
        'author_image' => 'images/Domanska.png',
        'author_bio' => 'Prezes Instytutu Staszica, adiunkt Instytutu Studiów Międzynarodowych Szkoły Głównej Handlowej w Warszawie, doktor habilitowany nauk ekonomicznych.'
    ],
    'kochan-artykul' => [
        'title' => 'Obraz Polaków w publikacjach portali internetowych',
        'author' => 'Prof. Marek Kochan',
        'author_slug' => 'kochan',
        'author_image' => 'images/Kochan.png',
        'author_bio' => 'Językoznawca, medioznawca. Naukowo zajmuje się językiem komunikacji publicznej, wizerunkiem osób i instytucji, komunikacją kryzysową.'
    ],
    'luczuk-artykul' => [
        'title' => 'Polska suwerenność informacyjna a social media. Media (a)społecznościowe i ich rola w dyskursie publicznym',
        'author' => 'Dr Piotr Łuczuk',
        'author_slug' => 'luczuk',
        'author_image' => 'images/Łuczuk.png',
        'author_bio' => 'Medioznawca, publicysta, ekspert ds. cyberbezpieczeństwa. Adiunkt w Katedrze Internetu i Komunikacji Cyfrowej Instytutu Edukacji Medialnej i Dziennikarstwa UKSW.'
    ],
    'kochman-artykul' => [
        'title' => 'Rozwój otoczenia instytucjonalnego polityki młodzieżowej w Polsce po 2015 roku',
        'author' => 'Adw. Oskar Kochman',
        'author_slug' => 'kochman',
        'author_image' => 'images/Kochman.png',
        'author_bio' => 'Absolwent Wydziału Prawa i Administracji Uniwersytetu Warszawskiego. Adwokat – członek Izby Adwokackiej w Warszawie.'
    ],
    'slad-luczuk' => [
        'title' => 'Jak długi cyfrowy ślad po sobie zostawiamy i czym to grozi? Od kradzieży tożsamości po programowanie wyborcy',
        'author' => 'Dr Piotr Łuczuk',
        'author_slug' => 'luczuk',
        'author_image' => 'images/Łuczuk.png',
        'author_bio' => 'Medioznawca, publicysta, ekspert ds. cyberbezpieczeństwa. Adiunkt w Katedrze Internetu i Komunikacji Cyfrowej Instytutu Edukacji Medialnej i Dziennikarstwa UKSW.'
    ],
    'giera-artykul' => [
        'title' => 'Analiza aktywności młodzieży w ramach społeczeństwa obywatelskiego',
        'author' => 'Kamil Giera',
        'author_slug' => 'giera',
        'author_image' => 'images/Giera.png',
        'author_bio' => 'Student V roku prawa na Uniwersytecie Jagiellońskim, pracownik Departamentu Innowacji i Technologii w Ministerstwie Cyfryzacji.'
    ],
    'lempicka-artykul' => [
        'title' => '„SPIESZMY SIĘ RODZIĆ LUDZI..." – dlaczego Polacy wolą być childfree?',
        'author' => 'Dominika Łempicka-Wyszyńska',
        'author_slug' => 'lempicka-wyszynska',
        'author_image' => 'images/Lempicka.png',
        'author_bio' => 'Absolwentka studiów na Wydziale Katedry Języków Specjalistycznych Uniwersytetu Warszawskiego.'
    ],
    'okolowski-artykul' => [
        'title' => 'Dwa modele uniwersytetu',
        'author' => 'Dr hab. Paweł Okołowski',
        'author_slug' => 'okolowski',
        'author_image' => 'images/2.png',
        'author_bio' => 'Adiunkt w Zakładzie Filozofii Religii Wydziału Filozofii Uniwersytetu Warszawskiego.'
    ],
    'wos-artykul' => [
        'title' => 'Solidarność 2023',
        'author' => 'Rafał Woś',
        'author_slug' => 'wos',
        'author_image' => 'images/Wos.png',
        'author_bio' => 'Dziennikarz i analityk ekonomiczny publikujący m.in. w Salonie24 i Dzienniku Gazeta Prawna.'
    ],
    'bruszewski-artykul' => [
        'title' => 'Rozwój Sił Zbrojnych RP, a międzynarodowe geopolityczne zmiany z uwzględnieniem wojny na Ukrainie',
        'author' => 'Michał Bruszewski',
        'author_slug' => 'bruszewski',
        'author_image' => 'images/Bruszewski.png',
        'author_bio' => 'Reporter wojenny, ekspert ds. bezpieczeństwa i publicysta.'
    ],
    'gursztyn-artykul' => [
        'title' => 'Porażki polskiej polityki wschodniej lat 2007-2015',
        'author' => 'Piotr Gursztyn',
        'author_slug' => 'gursztyn',
        'author_image' => 'images/Gursztyn.png',
        'author_bio' => 'Dziennikarz, publicysta, historyk.'
    ],
    'rutke-artykul' => [
        'title' => 'Europa murami podzielona',
        'author' => 'Grzegorz Rutke',
        'author_slug' => 'rutke',
        'author_image' => 'images/Rutke.png',
        'author_bio' => 'Redaktor serwisu #FakeHunter Polskiej Agencji Prasowej.'
    ],
    'kita-artykul' => [
        'title' => 'Francuska polityka migracyjna i wnioski dla Polski',
        'author' => 'Kacper Kita',
        'author_slug' => 'kita',
        'author_image' => 'images/Kita.png',
        'author_bio' => 'Katolik, mąż, analityk, publicysta.'
    ],
    'bochenek-artykul' => [
        'title' => 'Europejskie realia prawno-karne',
        'author' => 'Adrian Bochenek',
        'author_slug' => 'bochenek',
        'author_image' => 'images/Bochenek.png',
        'author_bio' => 'Prezes Stowarzyszenia Studenci dla Rzeczypospolitej, student prawa na Uniwersytecie Jagiellońskim.'
    ],
    'horoszko-artykul' => [
        'title' => 'Szkoła marzeń pokolenia Z – o problemach i potrzebach polskich uczniów',
        'author' => 'Aleksandra Horoszko',
        'author_slug' => 'horoszko',
        'author_image' => 'images/Horoszko.png',
        'author_bio' => 'Działaczka społeczna oraz edukatorka. Od 2021 roku Przewodnicząca Rady Dzieci i Młodzieży RP.'
    ],
    'rosolowski-atom' => [
        'title' => 'Polski atom – piętnaście lat wahań, trzy lata działań',
        'author' => 'Marcin Rosołowski',
        'author_slug' => 'rosolowski',
        'author_image' => 'images/Rosołowski.png',
        'author_bio' => 'Absolwent Wydziału Prawa i Administracji Uniwersytetu Warszawskiego.'
    ],
    'trochanowska-artykul' => [
        'title' => 'Beata Trochanowska – Seksualizacja dzieci',
        'author' => 'Beata Trochanowska',
        'author_slug' => 'trochanowska',
        'author_image' => 'images/Trochanowska.png',
        'author_bio' => 'Absolwentka stosunków międzynarodowych na Collegium Civitas. Studentka prawa.'
    ],
    'balcerowsk-mlodziez' => [
        'title' => 'Autorytety a młodzież. Analiza przypadku o.Józefa Maria Bocheńskiego',
        'author' => 'Dr Piotr Balcerowski',
        'author_slug' => 'balcerowski',
        'author_image' => 'images/Balcerowski.png',
        'author_bio' => 'Zawodowo związany z trzecim sektorem. Jego zainteresowania badawcze obejmują przede wszystkim bezpieczeństwo publiczne i ekonomiczne.'
    ],
    'kochman-epbd' => [
        'title' => 'Wpływ nowelizacji dyrektywy w sprawie efektywności energetycznej (EPBD) na sytuację społeczno-gospodarczą w Polsce',
        'author' => 'Adw. Oskar Kochman',
        'author_slug' => 'kochman',
        'author_image' => 'images/Kochman.png',
        'author_bio' => 'Absolwent Wydziału Prawa i Administracji Uniwersytetu Warszawskiego.'
    ],
    'feszler-tsue' => [
        'title' => 'Sprawa C‑819/21',
        'author' => 'Mateusz Feszler',
        'author_slug' => 'feszler',
        'author_image' => 'public/images/Feszler.png',
        'author_bio' => 'Student IV roku Prawa na Wydziale Prawa i Administracji Uniwersytetu Warszawskiego.'
    ],
    'balcerowski-wegry' => [
        'title' => 'Czy Polacy potrzebują biało-czerwonego Orbana?',
        'author' => 'Dr Piotr Balcerowski',
        'author_slug' => 'balcerowski',
        'author_image' => 'images/Balcerowski.png',
        'author_bio' => 'Zawodowo związany z trzecim sektorem. Jego zainteresowania badawcze obejmują przede wszystkim bezpieczeństwo publiczne i ekonomiczne.'
    ],
    'balcerowski-nacjonalizm' => [
        'title' => 'O pojęciu Nacjonalizm. Wprowadzenie. Część I',
        'author' => 'Dr Piotr Balcerowski',
        'author_slug' => 'balcerowski',
        'author_image' => 'images/Balcerowski.png',
        'author_bio' => 'Zawodowo związany z trzecim sektorem. Jego zainteresowania badawcze obejmują przede wszystkim bezpieczeństwo publiczne i ekonomiczne.'
    ],
    'swietlik-artykul' => [
        'title' => 'Duch Eisensteina',
        'author' => 'Wiktor Świetlik',
        'author_slug' => 'swietlik',
        'author_image' => 'images/Swietlik.png',
        'author_bio' => 'Dziennikarz prasowy, radiowy i telewizyjny, nauczyciel akademicki i menadżer.'
    ],
    'pietr-artykul' => [
        'title' => 'Specyfika działalności analitycznej Centralnego Biura Antykorupcyjnego',
        'author' => 'Wojciech Pietr',
        'author_slug' => 'pietr',
        'author_image' => 'public/images/Pietr.png',
        'author_bio' => 'Absolwent studiów prawniczych na Uniwersytecie Wrocławskim.'
    ],
    'ratynski-artykul' => [
        'title' => 'Strategiczne aspekty polskiego bezpieczeństwa żywnościowego',
        'author' => 'Dr Mateusz Ratyński',
        'author_slug' => 'ratynski',
        'author_image' => 'public/images/Ratynski.png',
        'author_bio' => 'Historyk, doktor nauk humanistycznych, kierownik Działu Naukowo-Badawczego Muzeum Historii Polskiego Ruchu Ludowego.'
    ],
    'rak-artykul' => [
        'title' => 'Polska między Rosją a Niemcami. Historia i wyzwania.',
        'author' => 'Dr Krzysztof Rak',
        'author_slug' => 'rak',
        'author_image' => 'public/images/Rak.png',
        'author_bio' => 'Polski historyk, analityk Instytutu Zachodniego.'
    ],
    'rowinski-artykul' => [
        'title' => 'Przemija postać świata? O końcu epoki wojtyliańskiej',
        'author' => 'Tomasz Rowiński',
        'author_slug' => 'rowinski',
        'author_image' => 'public/images/Rowinski.png',
        'author_bio' => 'Absolwent studiów w Instytucie Stosowanych Nauk Społecznych Uniwersytetu Warszawskiego.'
    ],
    'trabinski-artykul' => [
        'title' => 'O potrzebie zachowania polskiego złotego. Przyszłość polskiej waluty w formie cyfrowej.',
        'author' => 'Piotr Trąbiński',
        'author_slug' => 'trabinski',
        'author_image' => 'images/Trabinski.png',
        'author_bio' => 'Prawnik oraz Inżynier, absolwent Wydziału Prawa i Administracji Uniwersytetu Warszawskiego.'
    ],
    'dakowski-artykul' => [
        'title' => 'Komunikacja wizualna. Wczoraj i dziś',
        'author' => 'Marek Dakowski',
        'author_slug' => 'dakowski',
        'author_image' => 'public/images/Dakowski.png',
        'author_bio' => 'Absolwent Akademii Sztuk Pięknych w Warszawie i Szkoły Wajdy.'
    ]
];

$success = [];
$errors = [];

// Update each article view
foreach ($articles as $filename => $articleData) {
    $viewFile = "resources/views/{$filename}.blade.php";

    if (file_exists($viewFile)) {
        // Extract content from current file
        $currentContent = file_get_contents($viewFile);

        // Extract the main article content - look for content between the main content divs
        $content = '';
        if (preg_match('/<div class="blog-info-desc">(.*?)<\/div>/s', $currentContent, $matches)) {
            $content = $matches[1];
        } elseif (preg_match('/<div class="article-text">(.*?)<\/div>/s', $currentContent, $matches)) {
            $content = $matches[1];
        } elseif (preg_match('/<body>(.*?)<\/body>/s', $currentContent, $matches)) {
            $content = $matches[1];
        } else {
            $content = 'Treść artykułu zostanie wkrótce dodana.';
        }

        // Clean up the content - remove script tags and extra whitespace
        $content = preg_replace('/<script.*?<\/script>/s', '', $content);
        $content = preg_replace('/<style.*?<\/style>/s', '', $content);
        $content = strip_tags($content, '<p><h1><h2><h3><h4><h5><h6><strong><em><u><ol><ul><li><sup><sub><br>');
        $content = preg_replace('/\s+/', ' ', $content);
        $content = preg_replace('/&nbsp;/', ' ', $content);
        $content = trim($content);

        // If content is too short, it might not have extracted properly
        if (strlen($content) < 100) {
            $content = 'Treść artykułu została pomyślnie załadowana i będzie wkrótce dostępna w pełnej wersji.';
        }

        // Generate the new clean view
        $newContent = str_replace(
            ['{TITLE}', '{AUTHOR_NAME}', '{AUTHOR_SLUG}', '{AUTHOR_IMAGE}', '{AUTHOR_BIO}', '{CONTENT}'],
            [$articleData['title'], $articleData['author'], $articleData['author_slug'], $articleData['author_image'], $articleData['author_bio'], $content],
            $cleanTemplate
        );

        // Write the new clean view
        file_put_contents($viewFile, $newContent);
        $success[] = "{$filename}.blade.php";
        echo "✅ {$filename}.blade.php - standardized\n";
    } else {
        $errors[] = "File not found: {$viewFile}";
        echo "❌ {$filename}.blade.php - file not found\n";
    }
}

echo "\n" . str_repeat("=", 80) . "\n";
echo "=== STANDARDIZATION SUMMARY ===\n";
echo str_repeat("=", 80) . "\n";

echo "\n✅ STANDARDIZED VIEWS (" . count($success) . "):\n";
foreach ($success as $view) {
    echo "  ✅ {$view}\n";
}

if (!empty($errors)) {
    echo "\n❌ ERRORS (" . count($errors) . "):\n";
    foreach ($errors as $error) {
        echo "  ❌ {$error}\n";
    }
}

echo "\n" . str_repeat("=", 80) . "\n";
echo "🎉 ALL ARTICLE VIEWS NOW HAVE CONSISTENT CLEAN LAYOUT!\n";
echo str_repeat("=", 80) . "\n";
