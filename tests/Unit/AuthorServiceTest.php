<?php

namespace Tests\Unit;

use App\Services\AuthorService;
use Tests\TestCase;

class AuthorServiceTest extends TestCase
{
    public function test_find_by_slug_returns_expected_author(): void
    {
        $authors = config('content.authors');
        $slug = array_key_first($authors);
        $author = app(AuthorService::class)->findBySlug($slug);

        $this->assertNotNull($author);
        $this->assertSame($slug, $author['slug']);
        $this->assertSame($authors[$slug]['name'], $author['name']);
    }

    public function test_get_all_articles_flattens_registry_with_author_slug(): void
    {
        $service = app(AuthorService::class);
        $authors = config('content.authors');
        $expectedCount = array_sum(array_map(fn (array $author) => count($author['articles']), $authors));
        $articles = $service->getAllArticles();

        $this->assertCount($expectedCount, $articles);

        foreach ($articles as $article) {
            $this->assertArrayHasKey('author_slug', $article);
            $this->assertArrayHasKey($article['author_slug'], $authors);
            $this->assertNotEmpty($article['slug']);
            $this->assertNotEmpty($article['path']);
            $this->assertNotEmpty($article['view']);
        }
    }
}
