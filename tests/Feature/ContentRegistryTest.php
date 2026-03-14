<?php

namespace Tests\Feature;

use FilesystemIterator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use Tests\TestCase;

class ContentRegistryTest extends TestCase
{
    public function test_author_source_files_match_registry_order_and_slugs(): void
    {
        $orderedSlugs = require base_path('content/authors/index.php');
        $authors = config('content.authors');

        $this->assertSame(array_keys($authors), $orderedSlugs);

        foreach ($orderedSlugs as $slug) {
            $file = base_path("content/authors/{$slug}.php");

            $this->assertFileExists($file);
            $this->assertSame($slug, (require $file)['slug']);
        }
    }

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

    public function test_active_view_directory_contains_only_blade_templates(): void
    {
        foreach ($this->viewFiles() as $file) {
            $this->assertStringEndsWith('.blade.php', $file->getFilename(), sprintf('Unexpected non-Blade file in resources/views: [%s].', $file->getPathname()));
        }
    }

    public function test_active_blade_templates_do_not_contain_debug_helpers(): void
    {
        foreach ($this->viewFiles() as $file) {
            if (! str_ends_with($file->getFilename(), '.blade.php')) {
                continue;
            }

            $contents = file_get_contents($file->getPathname());

            $this->assertIsString($contents);
            $this->assertDoesNotMatchRegularExpression(
                '/\b(?:dd|dump|var_dump)\s*\(/',
                $contents,
                sprintf('Unexpected debug helper found in view [%s].', $file->getPathname())
            );
        }
    }

    public function test_active_blade_templates_do_not_reference_public_prefixed_assets(): void
    {
        foreach ($this->viewFiles() as $file) {
            if (! str_ends_with($file->getFilename(), '.blade.php')) {
                continue;
            }

            $contents = file_get_contents($file->getPathname());

            $this->assertIsString($contents);
            $this->assertStringNotContainsString(
                "asset('public/",
                $contents,
                sprintf('Unexpected public-prefixed asset path found in view [%s].', $file->getPathname())
            );
            $this->assertStringNotContainsString(
                'asset("public/',
                $contents,
                sprintf('Unexpected public-prefixed asset path found in view [%s].', $file->getPathname())
            );
        }
    }

    /**
     * @return iterable<\SplFileInfo>
     */
    private function viewFiles(): iterable
    {
        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator(resource_path('views'), FilesystemIterator::SKIP_DOTS)
        );

        foreach ($iterator as $file) {
            if ($file->isFile()) {
                yield $file;
            }
        }
    }
}
