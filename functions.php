<?php
/**
 * hyped functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hyped
 */

if ( ! function_exists( 'hyped_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hyped_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on hyped, use a find and replace
	 * to change 'hyped' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'hyped', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

}
endif;
add_action( 'after_setup_theme', 'hyped_setup' );



/**
 * Enqueue scripts and styles.
 */
function hyped_scripts() {
	wp_enqueue_style( 'hyped-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'hyped_scripts' );





