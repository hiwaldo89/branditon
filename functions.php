<?php

if (!function_exists('branditon_setup')) {
    function branditon_setup() {
        // Make theme available for translation.
        load_theme_textdomain( 'branditon', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
        
        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
    }
}
add_action( 'after_setup_theme', 'branditon_setup' );

// Enqueue scripts and styles.
function branditon_scripts() {
    wp_enqueue_style( 'branditon-style', get_stylesheet_uri() );
    wp_enqueue_script( 'branditon-scripts', get_template_directory_uri() . '/dist/app.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'branditon_scripts' );

// Custom excerpt size
function branditon_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'branditon_custom_excerpt_length', 999 );
function branditon_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'branditon_excerpt_more' );

// Custom pagination
require get_template_directory() . '/inc/branditon-pagination.php';
