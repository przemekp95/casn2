<?php
/**
 * Simple routing test script to check slug consistency
 * between ArticleController methods and AuthorService data
 */

echo "=== CASN Website ROUTING Test ===\n\n";

require_once 'app/Services/AuthorService.php';

// Initialize AuthorService
$authorService = new \App\Services\AuthorService();
$authors = $authorService->getAllAuthors();

$errors = [];
$warnings = [];
$success = [];

// Get all article methods from ArticleController
$controllerFile = file_get_contents('app/Http/Controllers/ArticleController.php');
preg_match_all('/public function ([a-zA-Z]+)\(\)\s*{\s*return \$this->showArticle\(\'([^\']+)\', \'([^\']+)\'\);/', $controllerFile, $matches);

echo "Found " . count($matches[1]) . " article methods in ArticleController\n\n";

for ($i = 0; $i < count($matches[1]); $i++) {
    $methodName = $matches[1][$i];
    $expectedAuthorSlug = $matches[2][$i];
    $expectedArticleSlug = $matches[3][$i];

    echo "Testing method: {$methodName}()\n";
    echo "  Expected author: {$expectedAuthorSlug}\n";
    echo "  Expected article slug: {$expectedArticleSlug}\n";

    // Find the author
    $author = null;
    foreach ($authors as $authorSlug => $authorData) {
        if ($authorSlug === $expectedAuthorSlug) {
            $author = $authorData;
            break;
        }
    }

    if (!$author) {
        $errors[] = "Author '{$expectedAuthorSlug}' not found for method {$methodName}";
        echo "  ❌ Author not found\n";
        continue;
    }

    // Find the article
    $article = null;
    foreach ($author->articles as $articleData) {
        $actualSlug = $articleData->slug;
        if ($actualSlug === $expectedArticleSlug) {
            $article = $articleData;
            break;
        }
    }

    if (!$article) {
        // Find the article by title to get the correct slug
        $foundArticle = null;
        foreach ($author->articles as $articleData) {
            // Generate slug from title to compare
            $titleSlug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $articleData->title)));
            $titleSlug = preg_replace('/-+/', '-', $titleSlug);
            $titleSlug = trim($titleSlug, '-');

            if ($titleSlug === $expectedArticleSlug) {
                $foundArticle = $articleData;
                break;
            }
        }

        if ($foundArticle) {
            $errors[] = "Slug mismatch for {$methodName}(): expected '{$expectedArticleSlug}', actual '{$foundArticle->slug}'";
            echo "  ❌ Slug mismatch\n";
            echo "    Expected: {$expectedArticleSlug}\n";
            echo "    Actual: {$foundArticle->slug}\n";
        } else {
            $errors[] = "Article not found for method {$methodName}()";
            echo "  ❌ Article not found\n";
        }
    } else {
        $success[] = "Method {$methodName}() has correct routing";
        echo "  ✅ Routing correct\n";
    }

    echo "\n";
}

// Summary
echo str_repeat("=", 60) . "\n";
echo "=== ROUTING TEST SUMMARY ===\n";
echo str_repeat("=", 60) . "\n";

echo "\n✅ SUCCESSES (" . count($success) . "):\n";
foreach ($success as $msg) {
    echo "  ✅ {$msg}\n";
}

if (!empty($warnings)) {
    echo "\n⚠️  WARNINGS (" . count($warnings) . "):\n";
    foreach ($warnings as $msg) {
        echo "  ⚠️  {$msg}\n";
    }
}

if (!empty($errors)) {
    echo "\n❌ ERRORS (" . count($errors) . "):\n";
    foreach ($errors as $msg) {
        echo "  ❌ {$msg}\n";
    }
}

echo "\n" . str_repeat("=", 60) . "\n";
echo "FINAL RESULT: ";
if (empty($errors)) {
    echo "🎉 ALL ROUTES ARE CORRECT!\n";
} else {
    echo "⚠️  SOME ROUTING ISSUES FOUND!\n";
}
echo str_repeat("=", 60) . "\n";
