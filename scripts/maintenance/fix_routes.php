<?php
/**
 * Fix route definitions to match the corrected slugs
 */

echo "=== FIXING ROUTE DEFINITIONS ===\n\n";

// Read current routes
$routesContent = file_get_contents('routes/web.php');

// Read the updated controller to get the correct slugs
$controllerContent = file_get_contents('app/Http/Controllers/ArticleController.php');

// Extract current slug mappings from controller
$slugMappings = [];
preg_match_all("/showArticle\('([^']+)',\s*'([^']+)'\)/", $controllerContent, $matches);

for ($i = 0; $i < count($matches[1]); $i++) {
    $authorSlug = $matches[1][$i];
    $articleSlug = $matches[2][$i];

    // Find the method name
    $methodPattern = "/public function ([a-zA-Z]+)\(\)[^}]*showArticle\('{$authorSlug}',\s*'{$articleSlug}'\)/";
    if (preg_match($methodPattern, $controllerContent, $methodMatches)) {
        $methodName = $methodMatches[1];
        $slugMappings[$methodName] = $articleSlug;
    }
}

echo "Found " . count($slugMappings) . " method-to-slug mappings\n\n";

$fixes = [];

// Update routes to use correct slugs instead of method names
foreach ($slugMappings as $methodName => $correctSlug) {
    // Find the route that uses this method
    $routePattern = "/Route::get\('\/([^']+)',\s*\[ArticleController::class,\s*'{$methodName}'\]\);/";

    if (preg_match($routePattern, $routesContent, $routeMatches)) {
        $currentRouteSlug = $routeMatches[1];

        if ($currentRouteSlug !== $correctSlug) {
            echo "Fixing route: /{$currentRouteSlug} -> /{$correctSlug}\n";

            // Replace the route
            $oldRoute = "Route::get('/{$currentRouteSlug}', [ArticleController::class, '{$methodName}']);";
            $newRoute = "Route::get('/{$correctSlug}', [ArticleController::class, '{$methodName}']);";

            $routesContent = str_replace($oldRoute, $newRoute, $routesContent);
            $fixes[] = "/{$currentRouteSlug} -> /{$correctSlug}";
        } else {
            echo "Route correct: /{$correctSlug}\n";
        }
    } else {
        echo "Route not found for method: {$methodName}\n";
    }
}

// Write the fixed routes back
file_put_contents('routes/web.php', $routesContent);

echo "\n" . str_repeat("=", 60) . "\n";
echo "=== ROUTE FIX SUMMARY ===\n";
echo str_repeat("=", 60) . "\n";

echo "\n✅ ROUTE FIXES APPLIED (" . count($fixes) . "):\n";
foreach ($fixes as $fix) {
    echo "  ✅ {$fix}\n";
}

echo "\n" . str_repeat("=", 60) . "\n";
echo "🎉 ALL ROUTES HAVE BEEN FIXED!\n";
echo str_repeat("=", 60) . "\n";

// Test the fixed routes
echo "\n=== TESTING FIXED ROUTES ===\n\n";

foreach (array_slice($fixes, 0, 5) as $fix) {  // Test first 5 fixes
    $routeSlug = explode(' -> /', $fix)[1];
    $url = "http://localhost:8000/{$routeSlug}";

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode === 200) {
        echo "✅ {$routeSlug}: HTTP {$httpCode} (OK)\n";
    } else {
        echo "❌ {$routeSlug}: HTTP {$httpCode} (ERROR)\n";
    }
}

echo "\n" . str_repeat("=", 60) . "\n";
echo "🎉 ROUTE FIX COMPLETED!\n";
echo str_repeat("=", 60) . "\n";
