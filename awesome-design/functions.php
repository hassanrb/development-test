<?php

/**
 * Awesome Design basic setup
 *
 * @package Awesome_Design
 * @return void
 */
function awesome_design_setup() {
	// Load text domain
	load_theme_textdomain( 'awesome-design', get_template_directory() . '/languages' );

	// Add title tag support
	add_theme_support( 'title-tag' );

	// Add thumbnail support
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus([
		'main-menu' => esc_html__( 'Main Menu', 'awesome-design' ),
	]);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', [
		'search-form',
	]);

	/**
	 * Add support for core custom logo.
	 */
	add_theme_support( 'custom-logo', [
		'width'       => 244,
		'height'      => 43,
		'flex-width'  => true,
		'flex-height' => true,
	]);
}

add_action( 'after_setup_theme', 'awesome_design_setup' );

/**
 * The content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 * @return void
 */
function awesome_design_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'awesome_design_content_width', 1245 );
}

add_action( 'after_setup_theme', 'awesome_design_content_width', 0 );

/**
 * Enqueue scripts and styles.
 *
 * @return void
 */
function awesome_design_scripts() {
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css' );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css' );	
	wp_enqueue_style( 'awesome-design-style', get_stylesheet_uri() );
	wp_enqueue_style( 'awesome-design-responsive', get_template_directory_uri() . '/assets/css/responsive.css' );

	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.js', ['jquery'], null, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', ['jquery'], null, true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.js', ['jquery'], null, true );
	wp_enqueue_script( 'awesome-design-scripts', get_template_directory_uri() . '/assets/js/script.js', ['jquery'], null, true );
}

add_action( 'wp_enqueue_scripts', 'awesome_design_scripts' );

/**
 * Register Custom Sidebars
 *
 * @return void
 */
function awesome_design_register_sidebars() {
    register_sidebar([
        'name'          => esc_html__( 'Main Menu', 'awesome-design' ),
        'id'            => 'menu_sidebar',
        'description'   => esc_html__( 'Main menu sidebar', 'awesome-design' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ]);
}

add_action( 'widgets_init', 'awesome_design_register_sidebars' );


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
