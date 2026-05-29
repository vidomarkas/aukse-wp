<?php
/**
 * Guide card for archive and listing grids.
 *
 * @package Aukse Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$topics = get_the_terms( get_the_ID(), 'guide_topic' );
?>
<article <?php post_class( 'post-card' ); ?> data-tilt>
	<a href="<?php the_permalink(); ?>" class="post-card-link">
		<div class="post-meta">
			<?php if ( $topics && ! is_wp_error( $topics ) ) : ?>
				<span class="post-tag"><?php echo esc_html( $topics[0]->name ); ?></span>
			<?php endif; ?>
			<span>· <?php echo esc_html( aukse_post_read_time() ); ?></span>
		</div>
		<h3><?php the_title(); ?></h3>
		<?php if ( has_excerpt() ) : ?>
			<p><?php echo esc_html( get_the_excerpt() ); ?></p>
		<?php endif; ?>
		<span class="read"><?php esc_html_e( 'Read guide →', 'aukse' ); ?></span>
	</a>
</article>
