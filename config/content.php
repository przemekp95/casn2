<?php

$rootPath = dirname(__DIR__);
$orderedSlugs = require $rootPath . '/content/authors/index.php';
$authors = [];

foreach ($orderedSlugs as $slug) {
    $author = require $rootPath . "/content/authors/{$slug}.php";

    if (($author['slug'] ?? null) !== $slug) {
        throw new RuntimeException("Content author file [{$slug}] has mismatched slug metadata.");
    }

    $authors[$slug] = $author;
}

return [
    'authors' => $authors,
];
