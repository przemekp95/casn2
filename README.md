# CASN

Centrum Analiz Służby Niepodległej (CASN) is a Laravel 11 site for publishing static editorial content, author pages, and supporting informational pages. The project does not use a database for core content delivery: Blade views remain the source of truth for article bodies, while author and article metadata live in a central content registry.

## Stack

- PHP 8.3
- Composer
- Node.js 22 and npm
- Laravel 11
- Vite 7

## Local Setup

1. Install dependencies:

```bash
composer install
npm ci
```

2. Create an environment file and application key:

```bash
cp .env.example .env
php artisan key:generate
```

3. Start the application and asset watcher:

```bash
php artisan serve
npm run dev
```

The application is primarily static, so no database setup is required for normal development and testing.

## Content Model

The project uses a single metadata registry entry point in [`config/content.php`](config/content.php), which loads ordered author records from [`content/authors/index.php`](content/authors/index.php) and the per-author files in [`content/authors`](content/authors).

- `authors[slug]` stores `name`, `bio`, `photo`, `slug`, and `articles`
- each article entry stores `slug`, `title`, `path`, and `view`
- Blade templates in `resources/views/*.blade.php` remain the source of truth for article content

This registry drives:

- the `/autorzy` page
- author detail pages under `/{author-slug}`
- article routes
- the sitemap

## Routing Rules

Routes are defined in [`routes/web.php`](routes/web.php).

- static pages are registered from one array
- article routes are generated from the content registry
- author pages are resolved through `AuthorService`
- the wildcard author route is intentionally registered last

All public URLs should be preserved when making content changes.

## How To Add Content

### Add a new article for an existing author

1. Create the Blade view in `resources/views`, for example `resources/views/nowy-artykul.blade.php`.
2. Add the article metadata to the correct author file in [`content/authors`](content/authors).
3. Set:
   - `slug` to the article identifier
   - `title` to the user-facing title
   - `path` to the public URL, for example `/nowy-artykul`
   - `view` to the Blade view name without the `.blade.php` suffix
4. Run the validation commands listed below before pushing.

### Add a new author

1. Add a new author file in [`content/authors`](content/authors) and add its slug to [`content/authors/index.php`](content/authors/index.php) in the position where it should appear on the site.
2. Place the author image in `public/images`.
3. Make sure the `photo` path points to that image, for example `/images/autor.png`.
4. Add at least one article entry or leave `articles` as an empty array if the author page should exist before publication.

## Validation Before Push

Run the same checks locally that CI runs on GitHub Actions:

```bash
vendor/bin/pint --test
php artisan route:list --except-vendor
vendor/bin/phpunit
composer analyse
npm run build
composer audit --locked
npm audit
```

For a single maintainer command, you can also run:

```bash
composer lint
composer qa
```

## CI

GitHub Actions workflow configuration lives in [`.github/workflows/ci.yml`](.github/workflows/ci.yml). It validates pushes and pull requests to `main` without deploying or mutating the repository.

## Maintenance Scripts

One-off maintenance scripts have been moved to [`scripts/maintenance`](scripts/maintenance). They are not part of the runtime application and should be treated as maintainer tooling only. Some of them target the pre-registry routing architecture and are kept as archival references, not as supported developer commands.

Historical prototypes and stray files that used to live in runtime directories are stored in [`scripts/maintenance/archive`](scripts/maintenance/archive) so they do not clutter the active application surface.

## Security

Security policy and reporting guidance live in [`SECURITY.md`](SECURITY.md). Dependency update automation is configured in [`.github/dependabot.yml`](.github/dependabot.yml).
