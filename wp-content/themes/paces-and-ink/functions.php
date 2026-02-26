<?php
/**
 * Paces & Ink functions and definitions
 */

if ( ! function_exists( 'paces_and_ink_setup' ) ) :
	function paces_and_ink_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'paces-and-ink' ),
			)
		);

		// Switch default core markup for search form, comment form, and comments to output valid HTML5.
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'paces_and_ink_setup' );

/**
 * Enqueue scripts and styles.
 */
function paces_and_ink_scripts() {
	wp_enqueue_style( 'paces-and-ink-style', get_stylesheet_uri(), array(), '1.0.0' );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Zen+Old+Mincho:wght@400;700&display=swap', array(), null );

	wp_enqueue_script( 'paces-and-ink-script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'paces_and_ink_scripts' );
