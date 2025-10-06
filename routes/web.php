<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Services\AuthorService;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Initialize AuthorService
$authorService = new AuthorService();
$authors = $authorService->getAllAuthors();

// Static pages
Route::get('/', function () {
    return view('index');
});

Route::get('/kontakt', function () {
    return view('contact-us');
});

Route::get('/team-details', function () {
    return view('team-details');
});

Route::get('/autorzy', function () use ($authors) {
    return view('team', ['authors' => $authors]);
});

Route::get('/zbiory', function () {
    return view('cases');
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/blog-list', function () {
    return view('blog-list');
});

// Article routes - simple direct routes
Route::get('/lewandowski-sedziowie', function () {
    return view('lewandowski-sedziowie');
});

Route::get('/rosolowski-energetyka', function () {
    return view('rosolowski-energetyka');
});

Route::get('/domanska-artykul', function () {
    return view('domanska-artykul');
});

Route::get('/kochan-artykul', function () {
    return view('kochan-artykul');
});

Route::get('/luczuk-artykul', function () {
    return view('luczuk-artykul');
});

Route::get('/wot-balcerowski', function () {
    return view('wot-balcerowski');
});

Route::get('/kochman-artykul', function () {
    return view('kochman-artykul');
});

Route::get('/slad-luczuk', function () {
    return view('slad-luczuk');
});

Route::get('/giera-artykul', function () {
    return view('giera-artykul');
});

Route::get('/lempicka-artykul', function () {
    return view('lempicka-artykul');
});

Route::get('/okolowski-artykul', function () {
    return view('okolowski-artykul');
});

Route::get('/wos-artykul', function () {
    return view('wos-artykul');
});

Route::get('/bruszewski-artykul', function () {
    return view('bruszewski-artykul');
});

Route::get('/gursztyn-artykul', function () {
    return view('gursztyn-artykul');
});

Route::get('/rutke-artykul', function () {
    return view('rutke-artykul');
});

Route::get('/kita-artykul', function () {
    return view('kita-artykul');
});

Route::get('/bochenek-artykul', function () {
    return view('bochenek-artykul');
});

Route::get('/horoszko-artykul', function () {
    return view('horoszko-artykul');
});

Route::get('/rosolowski-atom', function () {
    return view('rosolowski-atom');
});

Route::get('/trochanowska-artykul', function () {
    return view('trochanowska-artykul');
});

Route::get('/balcerowsk-mlodziez', function () {
    return view('balcerowsk-mlodziez');
});

Route::get('/kochman-epbd', function () {
    return view('kochman-epbd');
});

Route::get('/feszler-tsue', function () {
    return view('feszler-tsue');
});

Route::get('/balcerowski-wegry', function () {
    return view('balcerowski-wegry');
});

Route::get('/balcerowski-nacjonalizm', function () {
    return view('balcerowski-nacjonalizm');
});

Route::get('/swietlik-artykul', function () {
    return view('swietlik-artykul');
});

Route::get('/pietr-artykul', function () {
    return view('pietr-artykul');
});

Route::get('/ratynski-artykul', function () {
    return view('ratynski-artykul');
});

Route::get('/rak-artykul', function () {
    return view('rak-artykul');
});

Route::get('/rowinski-artykul', function () {
    return view('rowinski-artykul');
});

Route::get('/trabinski-artykul', function () {
    return view('trabinski-artykul');
});

Route::get('/dakowski-artykul', function () {
    return view('dakowski-artykul');
});

// Sitemap
Route::get('/sitemap.xml', function () use ($authors) {
    // Pobieranie tras statycznych, wykluczając trasy admina
    $staticRoutes = collect(Route::getRoutes())
        ->filter(function ($route) {
            return in_array('GET', $route->methods()) && // Tylko trasy GET
                   strpos($route->uri(), 'admin') === false && // Wyklucz trasy z "admin"
                   strpos($route->uri(), '{') === false; // Wyklucz trasy dynamiczne
        })
        ->map(function ($route) {
            return [
                'loc' => url($route->uri()),
                'lastmod' => now()->toAtomString(),
            ];
        })
        ->toArray();

    // Dynamiczne trasy (np. autorzy i artykuły)
    $dynamicRoutes = [];
    foreach ($authors as $surname => $author) {
        // Strona autora
        $dynamicRoutes[] = [
            'loc' => url("/{$surname}"),
            'lastmod' => now()->toAtomString(),
        ];

        // Artykuły autora
        foreach ($author['articles'] as $article) {
            $dynamicRoutes[] = [
                'loc' => url($article['link']),
                'lastmod' => now()->toAtomString(),
            ];
        }
    }

    // Łączenie tras statycznych i dynamicznych
    $urls = array_merge($staticRoutes, $dynamicRoutes);

    // Generowanie XML
    $header = '<?xml version="1.0" encoding="UTF-8"?>';
    $content = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    foreach ($urls as $url) {
        $content .= '<url>';
        $content .= '<loc>' . htmlspecialchars($url['loc']) . '</loc>';
        $content .= '<lastmod>' . htmlspecialchars($url['lastmod']) . '</lastmod>';
        $content .= '</url>';
    }
    $content .= '</urlset>';

    // Zwracanie odpowiedzi XML
    return response($header . $content, 200)->header('Content-Type', 'application/xml');
});

// Authors - must be placed after article routes to avoid conflicts
Route::get('/{surname}', function ($surname) use ($authors) {
    if (!array_key_exists($surname, $authors)) {
        abort(404); // Wyświetl błąd 404, jeśli autor nie istnieje
    }

    return view('author', $authors[$surname]);
});
