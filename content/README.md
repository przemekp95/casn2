# Content Registry

This directory stores the source metadata for authors and their articles.

- `authors/index.php` preserves the public display order of author pages
- `authors/<slug>.php` stores one author record, including article metadata

Each author file must return an array with:

- `slug`
- `name`
- `bio`
- `photo`
- `articles`

Each article entry must include:

- `slug`
- `title`
- `path`
- `view`

Blade templates in `resources/views` remain the source of truth for article bodies. The Laravel config entry point in `config/content.php` loads these files into the application.
