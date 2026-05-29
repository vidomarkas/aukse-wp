<?php
/**
 * Guides custom post type and taxonomy.
 *
 * @package Aukse Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register the guide post type.
 */
function aukse_register_guide_post_type() {
	$labels = array(
		'name'                  => __( 'Guides', 'aukse' ),
		'singular_name'         => __( 'Guide', 'aukse' ),
		'menu_name'             => __( 'Guides', 'aukse' ),
		'name_admin_bar'        => __( 'Guide', 'aukse' ),
		'add_new'               => __( 'Add New', 'aukse' ),
		'add_new_item'          => __( 'Add New Guide', 'aukse' ),
		'new_item'              => __( 'New Guide', 'aukse' ),
		'edit_item'             => __( 'Edit Guide', 'aukse' ),
		'view_item'             => __( 'View Guide', 'aukse' ),
		'all_items'             => __( 'All Guides', 'aukse' ),
		'search_items'          => __( 'Search Guides', 'aukse' ),
		'not_found'             => __( 'No guides found.', 'aukse' ),
		'not_found_in_trash'    => __( 'No guides found in Trash.', 'aukse' ),
		'archives'              => __( 'Guides', 'aukse' ),
	);

	register_post_type(
		'guide',
		array(
			'labels'              => $labels,
			'public'              => true,
			'has_archive'         => true,
			'rewrite'             => array(
				'slug'       => 'guides',
				'with_front' => false,
			),
			'menu_icon'           => 'dashicons-book-alt',
			'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
			'show_in_rest'        => true,
			'exclude_from_search' => false,
		)
	);
}

/**
 * Register guide topics taxonomy.
 */
function aukse_register_guide_topic_taxonomy() {
	$labels = array(
		'name'          => __( 'Topics', 'aukse' ),
		'singular_name' => __( 'Topic', 'aukse' ),
		'search_items'  => __( 'Search Topics', 'aukse' ),
		'all_items'     => __( 'All Topics', 'aukse' ),
		'edit_item'     => __( 'Edit Topic', 'aukse' ),
		'update_item'   => __( 'Update Topic', 'aukse' ),
		'add_new_item'  => __( 'Add New Topic', 'aukse' ),
		'new_item_name' => __( 'New Topic Name', 'aukse' ),
		'menu_name'     => __( 'Topics', 'aukse' ),
	);

	register_taxonomy(
		'guide_topic',
		'guide',
		array(
			'labels'            => $labels,
			'hierarchical'      => false,
			'public'            => true,
			'show_admin_column' => true,
			'show_in_rest'      => true,
			'rewrite'           => array(
				'slug' => 'guide-topic',
			),
		)
	);
}

/**
 * Register guide post type and taxonomy.
 */
function aukse_register_guides() {
	aukse_register_guide_post_type();
	aukse_register_guide_topic_taxonomy();
}
add_action( 'init', 'aukse_register_guides' );

/**
 * Flush rewrite rules when the theme is activated.
 */
function aukse_flush_guide_rewrite_rules() {
	aukse_register_guides();
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'aukse_flush_guide_rewrite_rules' );

/**
 * Flush rewrite rules once after guides CPT is introduced.
 */
function aukse_maybe_flush_guide_rewrite_rules() {
	if ( get_option( 'aukse_guides_rewrite_flushed' ) ) {
		return;
	}

	flush_rewrite_rules( false );
	update_option( 'aukse_guides_rewrite_flushed', true );
}
add_action( 'init', 'aukse_maybe_flush_guide_rewrite_rules', 99 );

/**
 * Estimated read time for a guide.
 *
 * @param int|null $post_id Post ID.
 * @return string
 */
function aukse_post_read_time( $post_id = null ) {
	$post_id = $post_id ? (int) $post_id : get_the_ID();
	$content = get_post_field( 'post_content', $post_id );
	$words   = str_word_count( wp_strip_all_tags( (string) $content ) );
	$minutes = max( 1, (int) ceil( $words / 200 ) );

	/* translators: %d: number of minutes */
	return sprintf( _n( '%d min read', '%d min read', $minutes, 'aukse' ), $minutes );
}

/**
 * @deprecated Use aukse_post_read_time().
 */
function aukse_guide_read_time( $post_id = null ) {
	return aukse_post_read_time( $post_id );
}
