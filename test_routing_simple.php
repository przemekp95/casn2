<?php
/**
 * Simple routing test - manually checking slugs
 */

echo "=== CASN Website ROUTING Test (Manual) ===\n\n";

// Define the correct slugs based on titles from AuthorService
$correctSlugs = [
    'lewandowski' => [
        'analiza-porownawcza-systemu-wyborow-sedziow-w-polsce-i-niemczech' => 'lewandowskiSedziowie'
    ],
    'rosolowski' => [
        'zielona-zmiana-w-polskiej-energetyce-w-swietle-polityki-klimatycznej-ue' => 'rosolowskiEnergetyka',
        'polski-atom-pietnascie-lat-wahan-trzy-lata-dzialan' => 'rosolowskiAtom'
    ],
    'domanska' => [
        'raport-dotyczacy-badania-wplyw-tozsamosci-wspolnotowej-i-wiedzy-ekonomicznej' => 'domanskaArtykul'
    ],
    'kochan' => [
        'obraz-polakow-w-publikacjach-portali-internetowych' => 'kochanArtykul'
    ],
    'luczuk' => [
        'polska-suwerenność-informacyjna-a-social-media-media-a-spolecznosciowe' => 'luczukArtykul',
        'jak-dlugi-cyfrowy-slad-po-sobie-zostawiamy-i-czym-to-grozi' => 'sladLuczuk'
    ],
    'balcerowski' => [
        'wojska-obrony-terytorialnej-wot-w-latach-2016-2022-geneza-perspektywy-i-historia-kampanii-dyskredytacyjnej' => 'wotBalcerowski',
        'autorytety-a-mlodziez-analiza-przypadku-ojozefa-maria-bochenskiego' => 'balcerowskiMlodziez',
        'czy-polacy-potrzebuja-bialo-czerwonego-orbana' => 'balcerowskiWegry',
        'o-pojeciu-nacjonalizm-wprowadzenie-czesc-i' => 'balcerowskiNacjonalizm'
    ],
    'kochman' => [
        'rozwoj-otoczenia-instytucjonalnego-polityki-mlodziezowej-w-polsce-po-2015-roku' => 'kochmanArtykul',
        'wplyw-nowelizacji-dyrektywy-w-sprawie-efektywnosci-energetycznej-epbd' => 'kochmanEpbd'
    ],
    'giera' => [
        'analiza-aktywnosci-mlodziezy-w-ramach-spoleczenstwa-obywatelskiego' => 'gieraArtykul'
    ],
    'lempicka-wyszynska' => [
        'spieszmy-sie-rodzic-ludzi-dlaczego-polacy-wola-byc-childfree' => 'lempickaArtykul'
    ],
    'okolowski' => [
        'dwa-modele-uniwersytetu' => 'okolowskiArtykul'
    ],
    'wos' => [
        'solidarnosc-2023' => 'wosArtykul'
    ],
    'bruszewski' => [
        'rozwoj-sil-zbrojnych-rp-a-miedzynarodowe-geopolityczne-zmiany' => 'bruszewskiArtykul'
    ],
    'gursztyn' => [
        'porazki-polskiej-polityki-wschodniej-lat-2007-2015' => 'gursztynArtykul'
    ],
    'rutke' => [
        'europa-murami-podzielona' => 'rutkeArtykul'
    ],
    'kita' => [
        'francuska-polityka-migracyjna-i-wnioski-dla-polski' => 'kitaArtykul'
    ],
    'bochenek' => [
        'europejskie-realia-prawno-karne' => 'bochenekArtykul'
    ],
    'horoszko' => [
        'szkola-marzen-pokolenia-z-o-problemach-i-potrzebach-polskich-uczniow' => 'horoszkoArtykul'
    ],
    'trochanowska' => [
        'beata-trochanowska-seksualizacja-dzieci' => 'trochanowskaArtykul'
    ],
    'swietlik' => [
        'duch-eisensteina' => 'swietlikArtykul'
    ],
    'pietr' => [
        'specyfika-dzialalnosci-analitycznej-centralnego-biura-antykorupcyjnego' => 'pietrArtykul'
    ],
    'ratynski' => [
        'strategiczne-aspekty-polskiego-bezpieczenstwa-zywnosciowego' => 'ratynskiArtykul'
    ],
    'rak' => [
        'polska-miedzy-rosja-a-niemcami-historia-i-wyzwania' => 'rakArtykul'
    ],
    'rowinski' => [
        'przemija-postac-swiata-o-koncu-epoki-wojtylianskiej' => 'rowinskiArtykul'
    ],
    'trabinski' => [
        'o-potrzebie-zachowania-polskiego-zlotego-przyszlosc-polskiej-waluty' => 'trabinskiArtykul'
    ],
    'dakowski' => [
        'komunikacja-wizualna-wczoraj-i-dzis' => 'dakowskiArtykul'
    ],
    'feszler' => [
        'sprawa-c-819-21' => 'feszlerTsue'
    ]
];

$errors = [];
$success = [];

// Read ArticleController to get current method definitions
$controllerContent = file_get_contents('app/Http/Controllers/ArticleController.php');

// Check each method
foreach ($correctSlugs as $authorSlug => $articles) {
    foreach ($articles as $correctSlug => $routeName) {
        // Find the method in the controller - look for the method name
        $methodPattern = "/function {$routeName}\(\)/";

        if (preg_match($methodPattern, $controllerContent)) {
            // Method exists, now check if it has the correct slug
            $slugPattern = "/function {$routeName}\(\)\s*{\s*return \$this->showArticle\('{$authorSlug}', '([^']+)'\);/";
            if (preg_match($slugPattern, $controllerContent, $matches)) {
                $currentSlug = $matches[1];

                if ($currentSlug === $correctSlug) {
                    $success[] = "✅ {$routeName}() has correct slug";
                    echo "✅ {$routeName}() - OK\n";
                } else {
                    $errors[] = "{$routeName}(): expected '{$correctSlug}', got '{$currentSlug}'";
                    echo "❌ {$routeName}() - WRONG SLUG\n";
                    echo "   Expected: {$correctSlug}\n";
                    echo "   Current:  {$currentSlug}\n";
                }
            } else {
                $errors[] = "Method {$routeName}() found but slug pattern doesn't match";
                echo "❌ {$routeName}() - SLUG PATTERN MISMATCH\n";
            }
        } else {
            $errors[] = "Method {$routeName}() not found";
            echo "❌ {$routeName}() - METHOD NOT FOUND\n";
        }
    }
}

// Summary
echo "\n" . str_repeat("=", 60) . "\n";
echo "=== ROUTING TEST SUMMARY ===\n";
echo str_repeat("=", 60) . "\n";

echo "\n✅ CORRECT METHODS (" . count($success) . "):\n";
foreach ($success as $msg) {
    echo "  {$msg}\n";
}

if (!empty($errors)) {
    echo "\n❌ METHODS NEEDING FIXES (" . count($errors) . "):\n";
    foreach ($errors as $error) {
        echo "  ❌ {$error}\n";
    }
}

echo "\n" . str_repeat("=", 60) . "\n";
if (empty($errors)) {
    echo "🎉 ALL ROUTES ARE CORRECT!\n";
} else {
    echo "⚠️  SOME ROUTES NEED FIXING!\n";
}
echo str_repeat("=", 60) . "\n";
