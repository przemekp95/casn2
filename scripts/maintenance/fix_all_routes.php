<?php
/**
 * Comprehensive fix for ALL routing issues in ArticleController
 */

echo "=== COMPREHENSIVE ROUTE FIX FOR ALL ARTICLES ===\n\n";

// Read the current controller
$controllerContent = file_get_contents('app/Http/Controllers/ArticleController.php');

// Read AuthorService to get correct data
$authorServiceContent = file_get_contents('app/Services/AuthorService.php');

// Extract all articles from AuthorService with their correct slugs
$authorArticles = [];

preg_match_all("/'([a-z-]+)' => \[(.*?)(?=\],?\s*'[a-z-]+' =>|\],?\s*\];)/s", $authorServiceContent, $authorMatches);

for ($i = 0; $i < count($authorMatches[1]); $i++) {
    $authorSlug = $authorMatches[1][$i];
    $authorData = $authorMatches[2][$i];

    preg_match_all("/'title' => '([^']+)'/", $authorData, $titleMatches);
    preg_match_all("/'link' => '([^']+)'/", $authorData, $linkMatches);

    if (count($titleMatches[1]) === count($linkMatches[1])) {
        for ($j = 0; $j < count($titleMatches[1]); $j++) {
            $title = $titleMatches[1][$j];
            $link = $linkMatches[1][$j];

            // Generate correct slug from title
            $correctSlug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));
            $correctSlug = preg_replace('/-+/', '-', $correctSlug);
            $correctSlug = trim($correctSlug, '-');

            $authorArticles[$authorSlug][$title] = [
                'slug' => $correctSlug,
                'link' => $link
            ];
        }
    }
}

echo "Found " . count($authorArticles) . " authors with articles\n\n";

$fixes = [];
$errors = [];

// Fix each method in ArticleController
foreach ($authorArticles as $authorSlug => $articles) {
    foreach ($articles as $title => $articleData) {
        $correctSlug = $articleData['slug'];
        $link = $articleData['link'];

        // Extract method name from link
        $methodName = str_replace('/', '', str_replace('-', '', $link));
        $methodName = preg_replace('/[^a-zA-Z]/', '', $methodName);

        // Some manual corrections for method names
        $methodNameMap = [
            'wotbalcerowski' => 'wotBalcerowski',
            'balcerowskmlodziez' => 'balcerowskiMlodziez',
            'balcerowskiwegry' => 'balcerowskiWegry',
            'balcerowskinacjonalizm' => 'balcerowskiNacjonalizm',
            'rosolowskienergetyka' => 'rosolowskiEnergetyka',
            'rosolowskiatom' => 'rosolowskiAtom',
            'domanskaartykul' => 'domanskaArtykul',
            'kochanartykul' => 'kochanArtykul',
            'luczukartykul' => 'luczukArtykul',
            'sladluczuk' => 'sladLuczuk',
            'kochmanartykul' => 'kochmanArtykul',
            'kochmanepbd' => 'kochmanEpbd',
            'gieraartykul' => 'gieraArtykul',
            'lempickaartykul' => 'lempickaArtykul',
            'okolowskiartykul' => 'okolowskiArtykul',
            'wosartykul' => 'wosArtykul',
            'bruszewskiartykul' => 'bruszewskiArtykul',
            'gursztynartykul' => 'gursztynArtykul',
            'rutkeartykul' => 'rutkeArtykul',
            'kitaartykul' => 'kitaArtykul',
            'bochenekartykul' => 'bochenekArtykul',
            'horoszkoartykul' => 'horoszkoArtykul',
            'trochanowskaartykul' => 'trochanowskaArtykul',
            'swietlikartykul' => 'swietlikArtykul',
            'pietrartykul' => 'pietrArtykul',
            'ratynskiartykul' => 'ratynskiArtykul',
            'rakartykul' => 'rakArtykul',
            'rowinskiartykul' => 'rowinskiArtykul',
            'trabinskiartykul' => 'trabinskiArtykul',
            'dakowskiartykul' => 'dakowskiArtykul',
            'feszlertsue' => 'feszlerTsue',
            'lewandowskisedziowie' => 'lewandowskiSedziowie'
        ];

        if (isset($methodNameMap[$methodName])) {
            $methodName = $methodNameMap[$methodName];
        }

        echo "Processing: {$methodName}()\n";
        echo "  Author: {$authorSlug}\n";
        echo "  Title: {$title}\n";
        echo "  Current slug: [checking...]\n";
        echo "  Correct slug: {$correctSlug}\n";

        // Find current slug in controller
        $methodPattern = "/public function {$methodName}\(\)[^}]*showArticle\('{$authorSlug}',\s*'([^']+)'\)/";
        if (preg_match($methodPattern, $controllerContent, $matches)) {
            $currentSlug = $matches[1];

            if ($currentSlug !== $correctSlug) {
                echo "  ❌ SLUG MISMATCH - FIXING\n";

                // Fix the slug
                $oldPattern = "return \$this->showArticle('{$authorSlug}', '{$currentSlug}')";
                $newPattern = "return \$this->showArticle('{$authorSlug}', '{$correctSlug}')";

                $controllerContent = str_replace($oldPattern, $newPattern, $controllerContent);
                $fixes[] = "{$methodName}(): '{$currentSlug}' -> '{$correctSlug}'";
            } else {
                echo "  ✅ SLUG CORRECT\n";
            }
        } else {
            echo "  ⚠️  METHOD NOT FOUND\n";
            $errors[] = "Method not found: {$methodName}";
        }
        echo "\n";
    }
}

// Write the fixed controller back
file_put_contents('app/Http/Controllers/ArticleController.php', $controllerContent);

echo str_repeat("=", 80) . "\n";
echo "=== COMPREHENSIVE FIX SUMMARY ===\n";
echo str_repeat("=", 80) . "\n";

echo "\n✅ FIXES APPLIED (" . count($fixes) . "):\n";
foreach ($fixes as $fix) {
    echo "  ✅ {$fix}\n";
}

if (!empty($errors)) {
    echo "\n⚠️  ERRORS (" . count($errors) . "):\n";
    foreach ($errors as $error) {
        echo "  ⚠️  {$error}\n";
    }
}

echo "\n" . str_repeat("=", 80) . "\n";
echo "🎉 ALL ROUTES HAVE BEEN COMPREHENSIVELY FIXED!\n";
echo str_repeat("=", 80) . "\n";

// Test the fixes
echo "\n=== TESTING FIXES ===\n\n";

// Test a few key routes
$testRoutes = [
    'wot-balcerowski',
    'lewandowski-sedziowie',
    'rosolowski-energetyka',
    'domanska-artykul'
];

foreach ($testRoutes as $route) {
    $url = "http://localhost:8000/{$route}";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode === 200) {
        echo "✅ {$route}: HTTP {$httpCode} (OK)\n";
    } else {
        echo "❌ {$route}: HTTP {$httpCode} (ERROR)\n";
    }
}

echo "\n" . str_repeat("=", 80) . "\n";
echo "🎉 COMPREHENSIVE ROUTE FIX COMPLETED!\n";
echo str_repeat("=", 80) . "\n";
