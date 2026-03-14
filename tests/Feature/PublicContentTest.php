<?php

namespace Tests\Feature;

use App\Services\AuthorService;
use DOMDocument;
use DOMXPath;
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

        $this->get('/'.$author['slug'])
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
            $response = $this->get($article['path'])->assertOk();
            $xpath = $this->htmlXPath($response->getContent());

            $this->assertSame(url($article['path']), $this->xpathText($xpath, 'string(//link[@rel="canonical"]/@href)'));
            $this->assertStringContainsString(
                $this->normalizeText($article['title']),
                $this->normalizedHtmlText($response->getContent()),
                sprintf('Missing article title text on [%s].', $article['slug'])
            );
        }
    }

    public function test_team_page_renders_all_author_cards_with_links_and_images(): void
    {
        $response = $this->get('/autorzy')->assertOk();
        $xpath = $this->htmlXPath($response->getContent());
        $authors = config('content.authors');

        $this->assertSame(
            count($authors),
            $xpath->query('//div[contains(concat(" ", normalize-space(@class), " "), " our-team-box ")]')->length
        );

        foreach ($authors as $author) {
            $authorUrl = url('/'.$author['slug']);
            $photoPath = ltrim($author['photo'], '/');

            $this->assertGreaterThan(
                0,
                $xpath->query(sprintf('//a[@href="%s"]', $authorUrl))->length,
                sprintf('Missing author link for [%s].', $author['slug'])
            );

            $this->assertGreaterThan(
                0,
                $xpath->query(sprintf('//img[@alt="%s" and contains(@src, "%s")]', $author['name'], $photoPath))->length,
                sprintf('Missing author image for [%s].', $author['slug'])
            );
        }
    }

    public function test_author_pages_render_registered_bio_photo_and_article_links(): void
    {
        foreach (config('content.authors') as $author) {
            $response = $this->get('/'.$author['slug'])->assertOk();
            $xpath = $this->htmlXPath($response->getContent());

            $this->assertSame($this->normalizeText($author['name'].' - CASN'), $this->normalizeText($this->xpathText($xpath, 'string(//title)')));
            $this->assertSame($this->normalizeText($author['name']), $this->normalizeText($this->xpathText($xpath, 'string(//h4[1])')));

            $photoPath = ltrim($author['photo'], '/');
            $this->assertGreaterThan(
                0,
                $xpath->query(sprintf('//img[contains(@src, "%s")]', $photoPath))->length,
                sprintf('Missing author photo on [%s].', $author['slug'])
            );

            $this->assertStringContainsString(
                $this->normalizeText($author['bio']),
                $this->normalizedHtmlText($response->getContent()),
                sprintf('Missing author bio on [%s].', $author['slug'])
            );

            foreach ($author['articles'] as $article) {
                $this->assertGreaterThan(
                    0,
                    $xpath->query(sprintf('//a[@href="%s"]', url($article['path'])))->length,
                    sprintf('Missing article link [%s] on author page [%s].', $article['slug'], $author['slug'])
                );
            }
        }
    }

    public function test_article_pages_render_document_titles_and_main_headings(): void
    {
        foreach (app(AuthorService::class)->getAllArticles() as $article) {
            $response = $this->get($article['path'])->assertOk();
            $xpath = $this->htmlXPath($response->getContent());

            $this->assertSame($this->normalizeText($article['title'].' - CASN'), $this->normalizeText($this->xpathText($xpath, 'string(//title)')));
            $this->assertGreaterThan(
                0,
                $xpath->query('//main')->length,
                sprintf('Missing <main> on article page [%s].', $article['slug'])
            );
            $this->assertGreaterThan(
                0,
                $xpath->query('//h1')->length,
                sprintf('Missing <h1> on article page [%s].', $article['slug'])
            );
            $this->assertSame(url($article['path']), $this->xpathText($xpath, 'string(//link[@rel="canonical"]/@href)'));
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
            $expected[] = url('/'.$author['slug']);

            foreach ($author['articles'] as $article) {
                $expected[] = url($article['path']);
            }
        }

        foreach ($expected as $url) {
            $this->assertContains($url, $locations);
        }
    }

    private function htmlXPath(string $html): DOMXPath
    {
        libxml_use_internal_errors(true);

        $dom = new DOMDocument('1.0', 'UTF-8');
        $dom->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));

        return new DOMXPath($dom);
    }

    private function xpathText(DOMXPath $xpath, string $expression): string
    {
        return trim((string) $xpath->evaluate($expression));
    }

    private function normalizedHtmlText(string $html): string
    {
        return $this->normalizeText(strip_tags(html_entity_decode(html_entity_decode($html, ENT_QUOTES | ENT_HTML5, 'UTF-8'), ENT_QUOTES | ENT_HTML5, 'UTF-8')));
    }

    private function normalizeText(string $text): string
    {
        return (string) preg_replace('/\s+/u', ' ', trim(html_entity_decode(html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8'), ENT_QUOTES | ENT_HTML5, 'UTF-8')));
    }
}
