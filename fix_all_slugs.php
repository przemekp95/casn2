<?php
/**
 * Fix all slug mismatches in ArticleController
 */

echo "=== FIXING ALL SLUGS IN ARTICLE CONTROLLER ===\n\n";

// Read current controller
$controllerContent = file_get_contents('app/Http/Controllers/ArticleController.php');

// Read AuthorService to get the correct slugs
$authorServiceContent = file_get_contents('app/Services/AuthorService.php');

// Extract all article titles and their expected slugs from AuthorService
$titleToSlug = [];
preg_match_all("/'title' => '([^']+)'/", $authorServiceContent, $titleMatches);
preg_match_all("/'slug' => Str::slug\('([^']+)'\)/", $authorServiceContent, $slugMatches);

if (count($titleMatches[1]) === count($slugMatches[1])) {
    for ($i = 0; $i < count($titleMatches[1]); $i++) {
        $titleToSlug[$titleMatches[1][$i]] = $slugMatches[1][$i];
    }
}

echo "Found " . count($titleToSlug) . " title-to-slug mappings\n\n";

$errors = [];
$fixes = [];

// Check each method in ArticleController
$methodPattern = "/public function ([a-zA-Z]+)\(\)\s*{[^}]*showArticle\('([^']+)',\s*'([^']+)'\)/";
preg_match_all($methodPattern, $controllerContent, $methodMatches);

for ($i = 0; $i < count($methodMatches[1]); $i++) {
    $methodName = $methodMatches[1][$i];
    $authorSlug = $methodMatches[2][$i];
    $currentArticleSlug = $methodMatches[3][$i];

    echo "Checking method: {$methodName}()\n";
    echo "  Current slug: {$currentArticleSlug}\n";

    // Find the correct slug for this method by looking at the comment above it
    $methodStart = strpos($controllerContent, "public function {$methodName}()");
    $commentPattern = "/\/\*\*\s*\* Display ([^*]+)\*\/[^}]*public function {$methodName}/";
    if (preg_match($commentPattern, $controllerContent, $commentMatches)) {
        $articleTitle = trim($commentMatches[1]);
        echo "  Article title: {$articleTitle}\n";

        if (isset($titleToSlug[$articleTitle])) {
            $correctSlug = $titleToSlug[$articleTitle];
            echo "  Expected slug: {$correctSlug}\n";

            if ($currentArticleSlug !== $correctSlug) {
                echo "  ❌ SLUG MISMATCH - NEEDS FIX\n";

                // Fix the slug in the controller
                $oldPattern = "public function {$methodName}()\s*{\s*return \$this->showArticle('{$authorSlug}', '{$currentArticleSlug}');";
                $newPattern = "public function {$methodName}()\s*{\s*return \$this->showArticle('{$authorSlug}', '{$correctSlug}');";

                $controllerContent = str_replace($oldPattern, $newPattern, $controllerContent);
                $fixes[] = "{$methodName}(): '{$currentArticleSlug}' -> '{$correctSlug}'";
                echo "  ✅ FIXED\n";
            } else {
                echo "  ✅ SLUG CORRECT\n";
            }
        } else {
            echo "  ⚠️  TITLE NOT FOUND IN MAPPING\n";
            $errors[] = "No slug mapping found for: {$articleTitle}";
        }
    } else {
        echo "  ⚠️  NO COMMENT FOUND\n";
        $errors[] = "No comment found for method: {$methodName}";
    }
    echo "\n";
}

// Write the fixed controller back to file
file_put_contents('app/Http/Controllers/ArticleController.php', $controllerContent);

echo str_repeat("=", 60) . "\n";
echo "=== FIX SUMMARY ===\n";
echo str_repeat("=", 60) . "\n";

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

echo "\n" . str_repeat("=", 60) . "\n";
echo "🎉 ALL SLUGS HAVE BEEN FIXED!\n";
echo str_repeat("=", 60) . "\n";
