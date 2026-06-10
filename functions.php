<?php
/**
 * Dr Mike Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dr_Mike_Theme
 */

if ( ! function_exists( 'dr_mike_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function dr_mike_theme_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'dr-mike-theme' ),
				'footer' => esc_html__( 'Footer', 'dr-mike-theme' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
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

		/*
		 * Add support for core custom logo.
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for spacing units.
		add_theme_support( 'custom-spacing' );
	}
endif;
add_action( 'after_setup_theme', 'dr_mike_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function dr_mike_theme_scripts() {
	wp_enqueue_style( 'dr-mike-theme-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'dr_mike_theme_scripts' );

/**
 * Register block patterns.
 */
function dr_mike_theme_register_block_patterns() {
	register_block_pattern_category(
		'dr-mike-theme',
		array( 'label' => __( 'Dr Mike Theme', 'dr-mike-theme' ) )
	);
}
add_action( 'init', 'dr_mike_theme_register_block_patterns' );
