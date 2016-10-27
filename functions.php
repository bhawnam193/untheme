<?php
/**
 * untheme functions and definitions
 *
 * by Tania Rascia
 *
 */

/*
 * Let WordPress manage the document title.
 */
add_theme_support( 'title-tag' );

/*
 * Enable support for Post Thumbnails on posts and pages.
 */
add_theme_support( 'post-thumbnails' );

// Register theme menu(s)
register_nav_menus( array(
	'primary' => __( 'Primary Menu' ),
) );

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support( 'html5', array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption',
) );

/**
 * Enqueues scripts and styles.
 */
function untheme_scripts() {
	// Theme stylesheet.
	wp_enqueue_style( 'untheme-style', get_stylesheet_uri() );

	// Load the Sass output stylesheet
	wp_enqueue_style( 'twentysixteen-ie', get_template_directory_uri() . '/css/main.css', array( 'untheme-style' ), '1' );

}
add_action( 'wp_enqueue_scripts', 'untheme_scripts' );