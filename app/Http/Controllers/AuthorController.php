<?php

namespace App\Http\Controllers;

use App\Services\AuthorService;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function __construct(
        private AuthorService $authorService
    ) {}

    /**
     * Display a listing of authors.
     */
    public function index()
    {
        $authors = $this->authorService->getAllAuthors();

        return view('authors.index', compact('authors'));
    }

    /**
     * Display the specified author.
     */
    public function show(string $slug)
    {
        $author = $this->authorService->findBySlug($slug);

        if (!$author) {
            abort(404);
        }

        return view('authors.show', compact('author'));
    }
}
