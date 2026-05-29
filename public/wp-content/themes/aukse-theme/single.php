<?php
/**
 * Single post template (posts and guides).
 *
 * @package Aukse Theme
 */

get_header();

while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content', 'single' );
endwhile;

get_footer();
