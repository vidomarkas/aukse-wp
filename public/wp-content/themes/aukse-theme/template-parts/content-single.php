<?php
/**
 * Single entry content (post or guide).
 *
 * @package Aukse Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$post_type = get_post_type();
$is_guide  = ( 'guide' === $post_type );

if ( $is_guide ) {
	$back_url   = get_post_type_archive_link( 'guide' );
	$back_label = __( 'All guides', 'aukse' );
	$terms      = get_the_terms( get_the_ID(), 'guide_topic' );
} else {
	$posts_page = (int) get_option( 'page_for_posts' );
	$back_url   = $posts_page ? get_permalink( $posts_page ) : home_url( '/' );
	$back_label = __( 'All posts', 'aukse' );
	$terms      = get_the_category();
}
?>

<article <?php post_class( 'single-entry' ); ?>>
	<div class="container">
		<div class="single-entry__layout">
			<header class="single-entry__header">
				<?php if ( $back_url ) : ?>
					<a class="single-entry__back" href="<?php echo esc_url( $back_url ); ?>">
						<?php echo esc_html( $back_label ); ?>
					</a>
				<?php endif; ?>

				<?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
					<div class="single-entry__meta">
						<span class="post-tag"><?php echo esc_html( $terms[0]->name ); ?></span>
						<span class="single-entry__meta-sep" aria-hidden="true">·</span>
						<span><?php echo esc_html( aukse_post_read_time() ); ?></span>
					</div>
				<?php else : ?>
					<div class="single-entry__meta">
						<span><?php echo esc_html( aukse_post_read_time() ); ?></span>
					</div>
				<?php endif; ?>

				<h1 class="single-entry__title"><?php the_title(); ?></h1>

				<?php if ( has_excerpt() ) : ?>
					<p class="single-entry__deck"><?php echo esc_html( get_the_excerpt() ); ?></p>
				<?php endif; ?>
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<figure class="single-entry__figure">
					<?php
					the_post_thumbnail(
						'large',
						array(
							'class'   => 'single-entry__figure-img',
							'loading' => 'eager',
							'decoding' => 'async',
						)
					);
					?>
				</figure>
			<?php endif; ?>

			<div class="single-entry__content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</article>
