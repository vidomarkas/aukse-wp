# Aukse — WordPress Marketing Site

A custom WordPress theme built from scratch for a marketing website. Demonstrates end-to-end theme development: PHP templating, a Webpack-based asset pipeline, Tailwind CSS, and a custom Guides content type.

## Tech Stack

| Layer | Choice |
|---|---|
| CMS | WordPress |
| Theme | Custom (no page builder) |
| CSS | Tailwind CSS v3 + SCSS |
| JS bundler | Webpack 5 (dev/prod configs) |
| Transpilation | Babel |
| SEO | Rank Math Pro |

## Theme Features

- **Custom theme built from scratch** — no starter theme or page builder dependency
- **Custom post type: Guides** — registered in PHP with archive, single, and card template parts
- **Webpack asset pipeline** — content-hashed CSS/JS bundles, separate dev (watch) and prod (minified) configs
- **Tailwind CSS** — utility-first styling with a custom `tailwind.config.js` and base config layer
- **Self-hosted fonts** — General Sans and Inter served as `.woff2` for performance
- **Template parts** — modular PHP partials (`guide-card.php`, `content-single.php`) for reusable layouts

## Project Structure

```
app/
├── src/
│   ├── main.js          # JS entry point
│   └── scss/            # SCSS source
├── webpack.dev.js
├── webpack.prod.js
├── tailwind.config.js
└── public/wp-content/themes/aukse-theme/
    ├── functions.php
    ├── front-page.php
    ├── single.php
    ├── archive-guide.php
    ├── header.php / footer.php
    ├── inc/
    │   ├── enqueue.php  # Asset enqueuing with manifest hashing
    │   └── guides.php   # CPT + taxonomy registration
    └── template-parts/
        ├── guide-card.php
        └── content-single.php
```

## Local Development

Requires [Local by Flywheel](https://localwp.com/).

```bash
# Install dependencies
npm install

# Start dev server with watch
npm start

# Production build
npm run build
```

## Author

Viktoras Domarkas — [domarkas.co](https://domarkas.co)
