<?php
/**
 * Guides archive — listing at /guides/
 *
 * @package Aukse Theme
 */

get_header();
?>

<section id="guides" class="guides-archive">
	<div class="container">
		<div class="blog-header">
			<div>
				<span class="eyebrow"><?php esc_html_e( 'Guides', 'aukse' ); ?></span>
				<h1><?php esc_html_e( 'Practical guides for couples.', 'aukse' ); ?></h1>
				<p class="lede"><?php esc_html_e( 'Budgeting tips, money conversations, and household finance — written for two people sharing one life.', 'aukse' ); ?></p>
			</div>
		</div>

		<?php if ( have_posts() ) : ?>
			<div class="blog-grid">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/guide', 'card' );
				endwhile;
				?>
			</div>

			<nav class="guides-pagination" aria-label="<?php esc_attr_e( 'Guides pagination', 'aukse' ); ?>">
				<?php
				the_posts_pagination(
					array(
						'mid_size'  => 2,
						'prev_text' => __( '← Previous', 'aukse' ),
						'next_text' => __( 'Next →', 'aukse' ),
					)
				);
				?>
			</nav>
		<?php else : ?>
			<p class="lede"><?php esc_html_e( 'No guides published yet. Check back soon.', 'aukse' ); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php
get_footer();
