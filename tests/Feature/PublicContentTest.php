<?php

namespace Tests\Feature;

use App\Services\AuthorService;
use Tests\TestCase;

class PublicContentTest extends TestCase
{
    private const STATIC_PAGES = [
        '/',
        '/kontakt',
        '/autorzy',
        '/zbiory',
        '/blog-list',
        '/blog-details',
        '/team-details',
    ];

    public function test_core_public_pages_return_successful_responses(): void
    {
        foreach (self::STATIC_PAGES as $path) {
            $this->get($path)->assertOk();
        }
    }

    public function test_known_author_page_returns_successful_response(): void
    {
        $authors = config('content.authors');
        $author = $authors[array_key_first($authors)];

        $this->get('/' . $author['slug'])
            ->assertOk()
            ->assertSeeText($author['name']);
    }

    public function test_unknown_author_page_returns_not_found(): void
    {
        $this->get('/nie-ma-takiego-autora')->assertNotFound();
    }

    public function test_all_registered_article_routes_return_successful_responses(): void
    {
        foreach (app(AuthorService::class)->getAllArticles() as $article) {
            $this->get($article['path'])
                ->assertOk()
                ->assertSeeText($article['title']);
        }
    }

    public function test_sitemap_contains_all_registered_urls(): void
    {
        $response = $this->get('/sitemap.xml');

        $response->assertOk();
        $this->assertStringContainsString('application/xml', $response->headers->get('Content-Type', ''));

        libxml_use_internal_errors(true);
        $xml = simplexml_load_string($response->getContent());
        $this->assertNotFalse($xml, 'Sitemap response should be valid XML.');

        $locations = array_map(
            'strval',
            $xml->xpath('//*[local-name()="url"]/*[local-name()="loc"]') ?: [],
        );
        $expected = array_map(fn (string $path) => url($path), self::STATIC_PAGES);

        foreach (config('content.authors') as $author) {
            $expected[] = url('/' . $author['slug']);

            foreach ($author['articles'] as $article) {
                $expected[] = url($article['path']);
            }
        }

        foreach ($expected as $url) {
            $this->assertContains($url, $locations);
        }
    }
}
