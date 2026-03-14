<?php

use App\Services\AuthorService;
use Illuminate\Support\Facades\Route;

$authorService = app(AuthorService::class);

$staticPages = [
    '/' => 'index',
    '/kontakt' => 'contact-us',
    '/team-details' => 'team-details',
    '/zbiory' => 'cases',
    '/blog-details' => 'blog-details',
    '/blog-list' => 'blog-list',
];

foreach ($staticPages as $path => $view) {
    Route::view($path, $view);
}

Route::get('/autorzy', function () use ($authorService) {
    return view('team', ['authors' => $authorService->getAllAuthors()]);
});

foreach ($authorService->getAllArticles() as $article) {
    Route::view($article['path'], $article['view']);
}

Route::get('/sitemap.xml', function () use ($authorService, $staticPages) {
    $urls = [];

    foreach (array_keys($staticPages) as $path) {
        $urls[] = [
            'loc' => url($path),
            'lastmod' => now()->toAtomString(),
        ];
    }

    $urls[] = [
        'loc' => url('/autorzy'),
        'lastmod' => now()->toAtomString(),
    ];

    foreach ($authorService->getAllAuthors() as $author) {
        $urls[] = [
            'loc' => url('/' . $author['slug']),
            'lastmod' => now()->toAtomString(),
        ];

        foreach ($author['articles'] as $article) {
            $urls[] = [
                'loc' => url($article['path']),
                'lastmod' => now()->toAtomString(),
            ];
        }
    }

    return response()
        ->view('sitemap', ['urls' => $urls])
        ->header('Content-Type', 'application/xml');
});

Route::get('/{surname}', function (string $surname) use ($authorService) {
    $author = $authorService->findBySlug($surname);

    abort_if($author === null, 404);

    return view('author', $author);
});
