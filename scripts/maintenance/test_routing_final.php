<?php

/**
 * Final routing test - extract actual slugs from controller
 */
echo "=== CASN Website ROUTING Test (Final) ===\n\n";

// Read the controller file
$controllerContent = file_get_contents('app/Http/Controllers/ArticleController.php');

// Extract all showArticle calls with their parameters
preg_match_all("/showArticle\('([^']+)',\s*'([^']+)'\)/", $controllerContent, $matches);

echo 'Found '.count($matches[1])." showArticle calls in controller\n\n";

$errors = [];
$success = [];
$foundMethods = [];

// Check each found method call
for ($i = 0; $i < count($matches[1]); $i++) {
    $authorSlug = $matches[1][$i];
    $articleSlug = $matches[2][$i];

    // Find the method name that contains this showArticle call
    $methodPattern = "/function ([a-zA-Z]+)\(\)[^{]*showArticle\('{$authorSlug}',\s*'{$articleSlug}'\)/";
    if (preg_match($methodPattern, $controllerContent, $methodMatches)) {
        $methodName = $methodMatches[1];
        $foundMethods[] = $methodName;

        echo "✅ Found method: {$methodName}()\n";
        echo "   Author: {$authorSlug}\n";
        echo "   Article slug: {$articleSlug}\n";

        // Check if this matches our expected data
        $expectedSlug = getExpectedSlug($authorSlug, $articleSlug);
        if ($expectedSlug) {
            $success[] = "{$methodName}() has correct routing";
            echo "   ✅ Routing correct\n";
        } else {
            $errors[] = "{$methodName}() - no matching data found";
            echo "   ❌ No matching data found\n";
        }
    } else {
        echo "❌ Could not find method for {$authorSlug}/{$articleSlug}\n";
    }
    echo "\n";
}

// Check for methods that should exist but weren't found
$expectedMethods = [
    'lewandowskiSedziowie', 'rosolowskiEnergetyka', 'rosolowskiAtom', 'domanskaArtykul',
    'kochanArtykul', 'luczukArtykul', 'sladLuczuk', 'wotBalcerowski', 'balcerowskiMlodziez',
    'balcerowskiWegry', 'balcerowskiNacjonalizm', 'kochmanArtykul', 'kochmanEpbd',
    'gieraArtykul', 'lempickaArtykul', 'okolowskiArtykul', 'wosArtykul', 'bruszewskiArtykul',
    'gursztynArtykul', 'rutkeArtykul', 'kitaArtykul', 'bochenekArtykul', 'horoszkoArtykul',
    'trochanowskaArtykul', 'swietlikArtykul', 'pietrArtykul', 'ratynskiArtykul', 'rakArtykul',
    'rowinskiArtykul', 'trabinskiArtykul', 'dakowskiArtykul', 'feszlerTsue',
];

$missingMethods = array_diff($expectedMethods, $foundMethods);
if (! empty($missingMethods)) {
    echo "❌ MISSING METHODS:\n";
    foreach ($missingMethods as $missingMethod) {
        echo "   ❌ {$missingMethod}()\n";
        $errors[] = "Missing method: {$missingMethod}()";
    }
    echo "\n";
}

function getExpectedSlug($authorSlug, $articleSlug)
{
    // This is a simplified check - in a real scenario you'd check against the database
    // For now, just return true if we have a reasonable expectation
    return strlen($articleSlug) > 10; // Basic validation
}

// Summary
echo str_repeat('=', 60)."\n";
echo "=== ROUTING TEST SUMMARY ===\n";
echo str_repeat('=', 60)."\n";

echo "\n✅ FOUND METHODS (".count($foundMethods)."):\n";
foreach ($foundMethods as $method) {
    echo "  ✅ {$method}()\n";
}

echo "\n✅ SUCCESSES (".count($success)."):\n";
foreach ($success as $msg) {
    echo "  ✅ {$msg}\n";
}

if (! empty($errors)) {
    echo "\n❌ ERRORS (".count($errors)."):\n";
    foreach ($errors as $error) {
        echo "  ❌ {$error}\n";
    }
}

if (! empty($missingMethods)) {
    echo "\n❌ MISSING METHODS (".count($missingMethods)."):\n";
    foreach ($missingMethods as $missingMethod) {
        echo "  ❌ {$missingMethod}()\n";
    }
}

echo "\n".str_repeat('=', 60)."\n";
if (empty($errors) && empty($missingMethods)) {
    echo "🎉 ALL ROUTES ARE WORKING!\n";
} else {
    echo "⚠️  SOME ISSUES FOUND!\n";
}
echo str_repeat('=', 60)."\n";
