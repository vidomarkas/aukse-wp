<?php

 if ( ! defined( 'ABSPATH' ) ) exit; 

// Enqueues style.css on the front.
if ( ! function_exists( 'aukse_enqueue_styles' ) ) :
	function aukse_enqueue_styles() {
		$aukse_css_file_path = glob( get_template_directory() . '/assets/css/main.*.css' );
		$aukse_css_file_URI = get_template_directory_uri() . '/assets/css/' . basename($aukse_css_file_path[0]);

		wp_enqueue_style( 'aukse-style', $aukse_css_file_URI, [], wp_get_theme()->get( 'Version' ), 'all');
	}
endif;
add_action( 'wp_enqueue_scripts', 'aukse_enqueue_styles' );

// Enqueue the same styles for the block editor
if ( ! function_exists( 'aukse_enqueue_editor_styles' ) ) :
	function aukse_enqueue_editor_styles() {
		$aukse_css_file_path = glob( get_template_directory() . '/assets/css/main.*.css' );
		
		if ( ! empty( $aukse_css_file_path ) ) {
			$aukse_css_file_URI = get_template_directory_uri() . '/assets/css/' . basename( $aukse_css_file_path[0] );
			
			wp_enqueue_style( 
				'aukse-editor-style', 
				$aukse_css_file_URI, 
				[], 
				wp_get_theme()->get( 'Version' ), 
				'all'
			);
		}
	}
endif;
add_action( 'enqueue_block_editor_assets', 'aukse_enqueue_editor_styles' );

// Add editor styles for site editor using add_editor_style
if ( ! function_exists( 'aukse_add_editor_styles' ) ) :
	function aukse_add_editor_styles() {
		$aukse_css_file_path = glob( get_template_directory() . '/assets/css/main.*.css' );
		
		if ( ! empty( $aukse_css_file_path ) ) {
			$relative_path = 'assets/css/' . basename( $aukse_css_file_path[0] );
			add_editor_style( $relative_path );
		}
	}
endif;
add_action( 'after_setup_theme', 'aukse_add_editor_styles' );

