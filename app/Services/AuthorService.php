<?php

namespace App\Services;

/**
 * @phpstan-type ContentArticle array{
 *     slug: string,
 *     title: string,
 *     path: string,
 *     view: string
 * }
 * @phpstan-type ContentAuthor array{
 *     slug: string,
 *     name: string,
 *     bio: string,
 *     photo: string,
 *     articles: list<ContentArticle>
 * }
 * @phpstan-type PublishedArticle array{
 *     author_slug: string,
 *     slug: string,
 *     title: string,
 *     path: string,
 *     view: string
 * }
 */
class AuthorService
{
    /**
     * Get all published authors with their articles.
     *
     * @return array<string, ContentAuthor>
     */
    public function getAllAuthors(): array
    {
        return config('content.authors', []);
    }

    /**
     * Find author by slug.
     *
     * @return ContentAuthor|null
     */
    public function findBySlug(string $slug): ?array
    {
        return $this->getAllAuthors()[$slug] ?? null;
    }

    /**
     * Get every registered article as a flat list.
     *
     * @return list<PublishedArticle>
     */
    public function getAllArticles(): array
    {
        /** @var list<PublishedArticle> $articles */
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
