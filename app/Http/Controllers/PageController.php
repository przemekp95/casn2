<?php

namespace App\Http\Controllers;

use App\Services\AuthorService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PageController extends Controller
{
    public function __construct(
        private AuthorService $authorService
    ) {}

    /**
     * Display the home page.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Display the contact page.
     */
    public function contact()
    {
        return view('contact-us');
    }

    /**
     * Display the authors page.
     */
    public function authors()
    {
        $authors = $this->authorService->getAllAuthors();

        return view('team', compact('authors'));
    }

    /**
     * Display the cases page.
     */
    public function cases()
    {
        return view('cases');
    }

    /**
     * Display the blog list page.
     */
    public function blogList()
    {
        return view('blog-list');
    }

    /**
     * Display the blog details page.
     */
    public function blogDetails()
    {
        return view('blog-details');
    }

    /**
     * Display the team details page.
     */
    public function teamDetails()
    {
        return view('team-details');
    }

    /**
     * Generate sitemap.xml
     */
    public function sitemap()
    {
        $authors = $this->authorService->getAllAuthors();

        // Static routes
        $staticRoutes = collect([
            '/',
            '/kontakt',
            '/autorzy',
            '/zbiory',
            '/blog-list',
            '/team-details',
        ])->map(function ($route) {
            return [
                'loc' => url($route),
                'lastmod' => now()->toAtomString(),
            ];
        });

        // Dynamic routes for authors
        $authorRoutes = collect($authors)->map(function ($author) {
            return [
                'loc' => url('/' . $author->slug),
                'lastmod' => now()->toAtomString(),
            ];
        });

        $urls = $staticRoutes->concat($authorRoutes);

        $content = view('sitemap', compact('urls'));

        return response($content, 200)->header('Content-Type', 'application/xml');
    }
}
