<?php
/**
 * site functions and definitions
 *
 * @package site
 */

if ( ! function_exists( 'site_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function site_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on site, use a find and replace
	 * to change 'site' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'site', get_template_directory() . '/languages' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size('home-thumb',780,300,true);
}
endif; // site_setup
add_action( 'after_setup_theme', 'site_setup' );


/**
 * Enqueue scripts and styles.
 */
function site_scripts() {
	wp_enqueue_style( 'site-style-bootstrap', get_template_directory_uri() ."/bootstrap/css/bootstrap.min.css" );
	wp_enqueue_style( 'site-style-animate', get_template_directory_uri() ."/animate.css" );
	wp_enqueue_style( 'site-style', get_stylesheet_uri() );

	wp_enqueue_script( 'site-script-jquery', get_template_directory_uri() .'/js/jquery.min.js');
	wp_enqueue_script( 'site-script-bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js',array(),false,true);
	wp_enqueue_script( 'site-script-tween', get_template_directory_uri() .'/js/TweenMax.min.js',array(),false,true);
	wp_enqueue_script( 'site-script-scrollmagic', get_template_directory_uri() .'/js/ScrollMagic.min.js',array(),false,true);
	wp_enqueue_script( 'site-script-gsap', get_template_directory_uri() .'/js/animation.gsap.min.js',array(),false,true);
	wp_enqueue_script( 'site-script-debug', get_template_directory_uri() .'/js/debug.addIndicators.min.js',array(),false,true);
	wp_enqueue_script( 'site-script-scrollto', get_template_directory_uri() .'/js/ScrollToPlugin.min.js',array(),false,true);
	wp_enqueue_script( 'site-script-wow', get_template_directory_uri() . '/js/wow.min.js',array());
	wp_enqueue_script( 'site-script-site', get_template_directory_uri() . '/js/script.js',array(),false,true);
}
add_action( 'wp_enqueue_scripts', 'site_scripts' );


function get_the_twitter_excerpt(){
	$excerpt = get_the_content();
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$the_str = substr($excerpt, 0, 140)." [...]";
	return $the_str;
}
