<?php
/**
 * Test Balcerowski author and article specifically
 */

echo "=== TESTING BALCEROWSKI AUTHOR AND ARTICLE ===\n\n";

// Read AuthorService
$authorServiceContent = file_get_contents('app/Services/AuthorService.php');

// Check if balcerowski exists
if (strpos($authorServiceContent, "'balcerowski' => [") !== false) {
    echo "✅ Author 'balcerowski' found in AuthorService\n";
} else {
    echo "❌ Author 'balcerowski' NOT found in AuthorService\n";
}

// Check if the article title exists
$articleTitle = 'Wojska Obrony Terytorialnej (WOT) w latach 2016-2022 – geneza, perspektywy i historia kampanii dyskredytacyjnej';
if (strpos($authorServiceContent, $articleTitle) !== false) {
    echo "✅ Article title found in AuthorService\n";
} else {
    echo "❌ Article title NOT found in AuthorService\n";
}

// Check if the link exists
if (strpos($authorServiceContent, '/wot-balcerowski') !== false) {
    echo "✅ Article link '/wot-balcerowski' found in AuthorService\n";
} else {
    echo "❌ Article link '/wot-balcerowski' NOT found in AuthorService\n";
}

// Check current controller
$controllerContent = file_get_contents('app/Http/Controllers/ArticleController.php');
if (strpos($controllerContent, 'wotBalcerowski') !== false) {
    echo "✅ Method 'wotBalcerowski' found in ArticleController\n";
} else {
    echo "❌ Method 'wotBalcerowski' NOT found in ArticleController\n";
}

// Check if the correct slug is in the controller
$correctSlug = 'wojska-obrony-terytorialnej-wot-w-latach-2016-2022-geneza-perspektywy-i-historia-kampanii-dyskredytacyjnej';
if (strpos($controllerContent, $correctSlug) !== false) {
    echo "✅ Correct slug found in ArticleController\n";
} else {
    echo "❌ Correct slug NOT found in ArticleController\n";
    echo "   Looking for: {$correctSlug}\n";
}

// Check routes
$routesContent = file_get_contents('routes/web.php');
if (strpos($routesContent, '/wot-balcerowski') !== false) {
    echo "✅ Route '/wot-balcerowski' found in web.php\n";
} else {
    echo "❌ Route '/wot-balcerowski' NOT found in web.php\n";
}

// Check if image exists
$imagePath = 'images/Balcerowski.png';
if (file_exists($imagePath)) {
    echo "✅ Author image exists: {$imagePath}\n";
} else {
    echo "❌ Author image NOT found: {$imagePath}\n";
}

echo "\n" . str_repeat("=", 60) . "\n";
echo "=== TEST SUMMARY ===\n";
echo str_repeat("=", 60) . "\n";
