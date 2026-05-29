<?php
/**
 * aukse Block Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Aukse Theme
 * @author Viktoras Domarkas
 * @author URI https://domarkas.co
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Enqueue scripts and styles
require get_template_directory() . '/inc/enqueue.php';

// Guides custom post type
require get_template_directory() . '/inc/guides.php';

// Featured images (posts, guides, pages).
if ( ! function_exists( 'aukse_theme_setup' ) ) :
	/**
	 * Registers theme supports.
	 *
	 * @return void
	 */
	function aukse_theme_setup() {
		add_theme_support( 'post-thumbnails' );
	}
endif;
add_action( 'after_setup_theme', 'aukse_theme_setup' );

// Adds theme support for post formats.
if ( ! function_exists( 'aukse_post_format_setup' ) ) :
	/**
	 * Adds theme support for post formats.
	 *
	 * @since Twenty Twenty-Five 1.0
	 *
	 * @return void
	 */
	function aukse_post_format_setup() {
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'aukse_post_format_setup' );

// Registers custom block styles.
if ( ! function_exists( 'aukse_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 *
	 * @since Twenty Twenty-Five 1.0
	 *
	 * @return void
	 */
	function aukse_block_styles() {
		// register_block_style(
		// 	'core/list',
		// 	array(
		// 		'name'         => 'checkmark-list',
		// 		'label'        => __( 'Checkmark', 'aukse' ),
		// 		'inline_style' => '
		// 		ul.is-style-checkmark-list {
		// 			list-style-type: "\2713";
		// 		}

		// 		ul.is-style-checkmark-list li {
		// 			padding-inline-start: 1ch;
		// 		}',
		// 	)
		// );
        register_block_style(
            'core/paragraph',
            array(
                'name'  => 'subtext',
                'label' => __('Subtext', 'aukse'),
            )
        );
	}
endif;
add_action( 'init', 'aukse_block_styles' );

// Registers pattern categories.
if ( ! function_exists( 'aukse_pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @since Twenty Twenty-Five 1.0
	 *
	 * @return void
	 */
	function aukse_pattern_categories() {

		register_block_pattern_category(
			'aukse_page',
			array(
				'label'       => __( 'Pages', 'aukse' ),
				'description' => __( 'A collection of full page layouts.', 'aukse' ),
			)
		);

		register_block_pattern_category(
			'aukse_post-format',
			array(
				'label'       => __( 'Post formats', 'aukse' ),
				'description' => __( 'A collection of post format patterns.', 'aukse' ),
			)
		);
	}
endif;
add_action( 'init', 'aukse_pattern_categories' );

// Registers block binding sources.
if ( ! function_exists( 'aukse_register_block_bindings' ) ) :
	/**
	 * Registers the post format block binding source.
	 *
	 * @since Twenty Twenty-Five 1.0
	 *
	 * @return void
	 */
	function aukse_register_block_bindings() {
		register_block_bindings_source(
			'aukse/format',
			array(
				'label'              => _x( 'Post format name', 'Label for the block binding placeholder in the editor', 'aukse' ),
				'get_value_callback' => 'aukse_format_binding',
			)
		);
	}
endif;
add_action( 'init', 'aukse_register_block_bindings' );

// Registers block binding callback function for the post format name.
if ( ! function_exists( 'aukse_format_binding' ) ) :
	/**
	 * Callback function for the post format name block binding source.
	 *
	 * @since Twenty Twenty-Five 1.0
	 *
	 * @return string|void Post format name, or nothing if the format is 'standard'.
	 */
	function aukse_format_binding() {
		$post_format_slug = get_post_format();

		if ( $post_format_slug && 'standard' !== $post_format_slug ) {
			return get_post_format_string( $post_format_slug );
		}
	}
endif;


//? disable comments
        add_action('admin_init', function () {
            // Redirect any user trying to access comments page
            global $pagenow;
            
            if ($pagenow === 'edit-comments.php') {
                wp_safe_redirect(admin_url());
                exit;
            }
        
            // Remove comments metabox from dashboard
            remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
        
            // Disable support for comments and trackbacks in post types
            foreach (get_post_types() as $post_type) {
                if (post_type_supports($post_type, 'comments')) {
                    remove_post_type_support($post_type, 'comments');
                    remove_post_type_support($post_type, 'trackbacks');
                }
            }
        });
        
        // Close comments on the front-end
        add_filter('comments_open', '__return_false', 20, 2);
        add_filter('pings_open', '__return_false', 20, 2);
        
        // Hide existing comments
        add_filter('comments_array', '__return_empty_array', 10, 2);
        
        // Remove comments page in menu
        add_action('admin_menu', function () {
            remove_menu_page('edit-comments.php');
        });
        
        // Remove comments links from admin bar
        // add_action('init', function () {
        //     if (is_admin_bar_showing()) {
        //         remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
        //     }
        // });

        function remove_comments(){
            global $wp_admin_bar;
            $wp_admin_bar->remove_menu('comments');
    }
    add_action( 'wp_before_admin_bar_render', 'remove_comments' );

    //? end disable comments

    // completely remove gravity forms styling
    // add_filter( 'gform_disable_css', '__return_true' );
   

    // Dequeue the full theme CSS, manually enqueue basic
    // add_action( 'gform_enqueue_scripts', function( $form, $is_ajax ) {
    //     wp_dequeue_style( 'gforms_css' );
    //     wp_dequeue_style( 'gforms_reset_css' );
    //     wp_dequeue_style( 'gforms_formsmain_css' );
    //     wp_dequeue_style( 'gforms_ready_class_css' );
    //     wp_dequeue_style( 'gforms_browsers_css' );
        
    //     // Enqueue only basic if needed
    //     // wp_enqueue_style( 'gforms_basic_css' );
    // }, 10, 2 );


   add_filter('render_block', 'render_php_header_template_part', 10, 2);

    function render_php_header_template_part($block_content, $block) {
        // Check if this is a template-part block with slug 'header'
        if ('core/template-part' === $block['blockName'] && 
            isset($block['attrs']['slug']) && 
            'header' === $block['attrs']['slug']) {
            
            // Buffer the output of your PHP template
            ob_start();
            get_template_part('parts/header');
            return ob_get_clean();
        }
        
        return $block_content;
    }

// add_filter('render_block', 'render_php_header_template_part', 10, 2);

// function render_php_header_template_part($block_content, $block) {
//     // Debug: Log what blocks we're seeing
//     error_log('Block name: ' . ($block['blockName'] ?? 'none'));
    
//     if ('core/template-part' === $block['blockName']) {
//         error_log('Template part slug: ' . ($block['attrs']['slug'] ?? 'no slug'));
//         error_log('Block attrs: ' . print_r($block['attrs'], true));
//     }
    
//     // Check if this is a template-part block with slug 'header'
//     if ('core/template-part' === $block['blockName'] && 
//         isset($block['attrs']['slug']) && 
//         'header' === $block['attrs']['slug']) {
        
//         error_log('Attempting to load header.php');
        
//         // Buffer the output of your PHP template
//         ob_start();
//         get_template_part('parts/header');
//         $output = ob_get_clean();
        
//         error_log('Header output length: ' . strlen($output));
        
//         return $output;
//     }
    
//     return $block_content;
// }

// add_action('wp_footer', function() {
//     if (current_user_can('manage_options')) {
//         global $template;
//         echo '<!-- Current Template: ' . basename($template) . ' -->';
//     }
// });




