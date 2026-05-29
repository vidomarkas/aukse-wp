<?php get_header(); ?>

<section class="hero" style="padding-bottom: 120px;">
  <div class="container">
    <span class="eyebrow">404</span>
    <h1>Page not <em>found.</em></h1>
    <p class="lede">The page you’re looking for doesn’t exist or may have moved. Head back home, or browse our guides for couples managing money together.</p>
    <div class="hero-actions" style="margin-bottom: 0;">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">Back to home <span class="btn-arrow"></span></a>
      <a href="<?php echo esc_url( home_url( '/guides/' ) ); ?>" class="btn btn-secondary">Browse guides</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
