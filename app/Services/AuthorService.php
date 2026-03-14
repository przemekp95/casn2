<?php

namespace App\Services;

class AuthorService
{
    /**
     * Get all published authors with their articles.
     */
    public function getAllAuthors(): array
    {
        return config('content.authors', []);
    }

    /**
     * Find author by slug.
     */
    public function findBySlug(string $slug): ?array
    {
        return $this->getAllAuthors()[$slug] ?? null;
    }

    /**
     * Get every registered article as a flat list.
     */
    public function getAllArticles(): array
    {
        $articles = [];

        foreach ($this->getAllAuthors() as $author) {
            foreach ($author['articles'] as $article) {
                $articles[] = [
                    'author_slug' => $author['slug'],
                    ...$article,
                ];
            }
        }

        return $articles;
    }
}
