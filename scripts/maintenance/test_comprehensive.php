<?php

use App\Services\AuthorService;

/**
 * Comprehensive test script for CASN website
 * Tests ALL authors, ALL articles, ALL routes and content loading
 */
echo "=== CASN Website COMPREHENSIVE Test - ALL DATA ===\n\n";

$errors = [];
$warnings = [];
$success = [];

// Test 1: Check if Laravel is working
echo "1. Testing basic Laravel functionality...\n";
try {
    $authorService = app(AuthorService::class);
    $success[] = 'AuthorService loaded successfully';
    echo "✅ AuthorService loaded successfully\n";
} catch (Exception $e) {
    $errors[] = 'Failed to load AuthorService: '.$e->getMessage();
    echo '❌ Failed to load AuthorService: '.$e->getMessage()."\n";
    exit(1);
}

// Test 2: Test ALL authors loading
echo "\n2. Testing ALL authors loading...\n";
try {
    $authors = $authorService->getAllAuthors();
    $authorCount = count($authors);
    $success[] = "Loaded {$authorCount} authors successfully";
    echo "✅ Loaded {$authorCount} authors successfully\n";

    foreach ($authors as $authorSlug => $author) {
        echo "  - {$author->name} ({$authorSlug})\n";

        // Validate author data
        if (empty($author->name)) {
            $errors[] = "Author {$authorSlug} has no name";
        }
        if (empty($author->bio)) {
            $warnings[] = "Author {$authorSlug} has no bio";
        }
        if (empty($author->photo)) {
            $warnings[] = "Author {$authorSlug} has no photo";
        }
        if (empty($author->articles) || ! is_array($author->articles)) {
            $errors[] = "Author {$authorSlug} has no articles array";
        }
    }
} catch (Exception $e) {
    $errors[] = 'Failed to load authors: '.$e->getMessage();
    echo '❌ Failed to load authors: '.$e->getMessage()."\n";
}

// Test 3: Test EVERY SINGLE ARTICLE for EVERY author
echo "\n3. Testing ALL articles for ALL authors...\n";
try {
    $totalArticles = 0;
    $articlesWithContent = 0;
    $articlesWithExcerpt = 0;
    $articlesWithLinks = 0;

    foreach ($authors as $authorSlug => $author) {
        echo "\n📚 Testing articles for: {$author->name}\n";

        if (empty($author->articles)) {
            $warnings[] = "Author {$authorSlug} has no articles";
            echo "  ⚠️  No articles found\n";

            continue;
        }

        foreach ($author->articles as $articleIndex => $article) {
            $totalArticles++;

            // Validate article fields
            $hasTitle = ! empty($article->title);
            $hasContent = ! empty($article->content) && strlen($article->content) > 50;
            $hasExcerpt = ! empty($article->excerpt) && strlen($article->excerpt) > 20;
            $hasLink = ! empty($article->link) && strlen($article->link) > 5;
            $hasSlug = ! empty($article->slug) && strlen($article->slug) > 5;

            if ($hasTitle) {
                $success[] = "Article {$articleIndex} for {$authorSlug} has title";
            }
            if ($hasContent) {
                $articlesWithContent++;
            }
            if ($hasExcerpt) {
                $articlesWithExcerpt++;
            }
            if ($hasLink) {
                $articlesWithLinks++;
            }

            echo '  Article '.($articleIndex + 1).": {$article->title}\n";
            echo '    ✅ Title: '.($hasTitle ? '✅' : '❌')."\n";
            echo '    ✅ Content: '.($hasContent ? '✅' : '❌')." ({$hasContent})\n";
            echo '    ✅ Excerpt: '.($hasExcerpt ? '✅' : '❌')."\n";
            echo '    ✅ Link: '.($hasLink ? '✅' : '❌')." ({$article->link})\n";
            echo '    ✅ Slug: '.($hasSlug ? '✅' : '❌')."\n";

            // Check for specific issues
            if (! $hasContent && strpos($article->content, 'Treść analizy zostanie wkrótce dodana') !== false) {
                $warnings[] = "Article '{$article->title}' still has placeholder content";
            }
            if (! $hasExcerpt) {
                $warnings[] = "Article '{$article->title}' has no excerpt";
            }
        }
    }

    echo "\n📊 Article Statistics:\n";
    echo "  Total articles: {$totalArticles}\n";
    echo "  With content: {$articlesWithContent}\n";
    echo "  With excerpt: {$articlesWithExcerpt}\n";
    echo "  With links: {$articlesWithLinks}\n";

} catch (Exception $e) {
    $errors[] = 'Failed to test articles: '.$e->getMessage();
    echo '❌ Failed to test articles: '.$e->getMessage()."\n";
}

// Test 4: Test ALL routes
echo "\n4. Testing ALL route registrations...\n";
try {
    $routes = app('router')->getRoutes();
    $articleRoutes = [];
    $authorRoutes = 0;
    $otherRoutes = 0;

    foreach ($routes as $route) {
        $uri = $route->uri();
        $methods = $route->methods()[0];

        if (strpos($uri, '/') === 0 && $uri !== '/' && $uri !== '{author}' &&
            ! in_array($uri, ['kontakt', 'autorzy', 'zbiory', 'blog-list', 'blog-details', 'team-details', 'sitemap.xml'])) {
            $articleRoutes[] = $uri;
            echo "✅ Article route: {$methods} {$uri}\n";
        } elseif ($uri === '{author}') {
            $authorRoutes++;
        } else {
            $otherRoutes++;
        }
    }

    $success[] = 'Found '.count($articleRoutes)." article routes and {$authorRoutes} author route";
    echo '✅ Found '.count($articleRoutes)." article routes and {$authorRoutes} author route\n";

} catch (Exception $e) {
    $errors[] = 'Failed to test routes: '.$e->getMessage();
    echo '❌ Failed to test routes: '.$e->getMessage()."\n";
}

// Test 5: Test content quality
echo "\n5. Testing content quality and completeness...\n";
try {
    $contentTests = 0;
    $contentPassed = 0;

    foreach ($authors as $authorSlug => $author) {
        foreach ($author->articles as $articleIndex => $article) {
            $contentTests++;

            // Test content quality
            $isRealContent = ! empty($article->content) &&
                           strlen($article->content) > 100 &&
                           strpos($article->content, 'Treść analizy zostanie wkrótce dodana') === false;

            if ($isRealContent) {
                $contentPassed++;
                echo "✅ Quality content: {$article->title}\n";
            } else {
                $warnings[] = "Poor content quality for: {$article->title}";
                echo "⚠️  Poor content: {$article->title}\n";
            }

            // Test HTML structure
            $hasHtmlStructure = strpos($article->content, '<p>') !== false;
            if ($hasHtmlStructure) {
                echo "   ✅ Has HTML structure\n";
            } else {
                $warnings[] = "No HTML structure for: {$article->title}";
                echo "   ⚠️  No HTML structure\n";
            }
        }
    }

    echo "📊 Content Quality: {$contentPassed}/{$contentTests} articles have good content\n";

} catch (Exception $e) {
    $errors[] = 'Failed to test content quality: '.$e->getMessage();
    echo '❌ Failed to test content quality: '.$e->getMessage()."\n";
}

// Test 6: Test data integrity
echo "\n6. Testing data integrity...\n";
try {
    $integrityTests = 0;
    $integrityPassed = 0;

    foreach ($authors as $authorSlug => $author) {
        $integrityTests++;

        // Test author data integrity
        $authorValid = ! empty($author->name) &&
                      ! empty($author->slug) &&
                      ! empty($author->bio) &&
                      ! empty($author->photo) &&
                      is_array($author->articles);

        if ($authorValid) {
            $integrityPassed++;
            echo "✅ Author integrity: {$author->name}\n";
        } else {
            $errors[] = "Author integrity failed: {$authorSlug}";
            echo "❌ Author integrity: {$author->name}\n";
        }

        // Test each article integrity
        foreach ($author->articles as $articleIndex => $article) {
            $articleValid = ! empty($article->title) &&
                           ! empty($article->link) &&
                           ! empty($article->slug) &&
                           isset($article->content) &&
                           isset($article->excerpt);

            if ($articleValid) {
                echo "   ✅ Article integrity: {$article->title}\n";
            } else {
                $errors[] = "Article integrity failed: {$article->title}";
                echo "   ❌ Article integrity: {$article->title}\n";
            }
        }
    }

    echo "📊 Data Integrity: {$integrityPassed}/{$integrityTests} authors have complete data\n";

} catch (Exception $e) {
    $errors[] = 'Failed to test data integrity: '.$e->getMessage();
    echo '❌ Failed to test data integrity: '.$e->getMessage()."\n";
}

// Test 7: Test cross-references
echo "\n7. Testing cross-references and relationships...\n";
try {
    $crossRefTests = 0;
    $crossRefPassed = 0;

    foreach ($authors as $authorSlug => $author) {
        foreach ($author->articles as $articleIndex => $article) {
            $crossRefTests++;

            // Test if article link matches expected pattern
            $expectedLink = '/'.$authorSlug.'-'.$article->slug;
            $linkMatches = strpos($article->link, $authorSlug) !== false;

            if ($linkMatches) {
                $crossRefPassed++;
                echo "✅ Link consistency: {$article->title}\n";
            } else {
                $warnings[] = "Link inconsistency for: {$article->title}";
                echo "⚠️  Link inconsistency: {$article->title} ({$article->link})\n";
            }
        }
    }

    echo "📊 Cross-references: {$crossRefPassed}/{$crossRefTests} links are consistent\n";

} catch (Exception $e) {
    $errors[] = 'Failed to test cross-references: '.$e->getMessage();
    echo '❌ Failed to test cross-references: '.$e->getMessage()."\n";
}

// Final Summary
echo "\n".str_repeat('=', 60)."\n";
echo "=== COMPREHENSIVE TEST SUMMARY ===\n";
echo str_repeat('=', 60)."\n";

echo "\n✅ SUCCESSES (".count($success)."):\n";
foreach ($success as $msg) {
    echo "  ✅ {$msg}\n";
}

if (! empty($warnings)) {
    echo "\n⚠️  WARNINGS (".count($warnings)."):\n";
    foreach ($warnings as $msg) {
        echo "  ⚠️  {$msg}\n";
    }
}

if (! empty($errors)) {
    echo "\n❌ ERRORS (".count($errors)."):\n";
    foreach ($errors as $msg) {
        echo "  ❌ {$msg}\n";
    }
}

echo "\n".str_repeat('=', 60)."\n";
echo 'FINAL RESULT: ';
if (empty($errors)) {
    echo "🎉 ALL TESTS PASSED! Website is fully functional.\n";
} else {
    echo "⚠️  SOME ISSUES FOUND! Check errors above.\n";
}
echo str_repeat('=', 60)."\n";
