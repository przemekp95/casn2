<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContentRegistryTest extends TestCase
{
    public function test_author_slugs_are_keyed_consistently(): void
    {
        $authors = config('content.authors');

        $this->assertNotEmpty($authors);

        foreach ($authors as $slug => $author) {
            $this->assertSame($slug, $author['slug']);
        }
    }

    public function test_article_slugs_and_paths_are_unique(): void
    {
        $articleSlugs = [];
        $articlePaths = [];

        foreach (config('content.authors') as $author) {
            foreach ($author['articles'] as $article) {
                $articleSlugs[] = $article['slug'];
                $articlePaths[] = $article['path'];
            }
        }

        $this->assertCount(count(array_unique($articleSlugs)), $articleSlugs);
        $this->assertCount(count(array_unique($articlePaths)), $articlePaths);
    }

    public function test_every_registered_article_view_exists(): void
    {
        foreach (config('content.authors') as $author) {
            foreach ($author['articles'] as $article) {
                $this->assertTrue(
                    view()->exists($article['view']),
                    sprintf('Missing article view [%s].', $article['view'])
                );
            }
        }
    }

    public function test_every_registered_author_photo_exists(): void
    {
        foreach (config('content.authors') as $author) {
            $this->assertFileExists(public_path(ltrim($author['photo'], '/')));
        }
    }
}
