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


function register_post_type_home(){
	$singular = 'Topo';
	$plural = 'Topo';
	$labels = array(
		'name' => $plural,
		'singular_name' => $singular,
		'add_new_item' => 'Adicionar novo '.$singular,
		);
	$args = array(
		'labels' => $labels,
		'public' => true,
        'supports' => array('title', 'editor'),
        'menu_position' => 4
		);

	register_post_type('home',$args);
}
add_action(	'init','register_post_type_home');

function register_post_type_secao(){
	$singular = 'Seção';
	$plural = 'Seções';
	$labels = array(
		'name' => $plural,
		'singular_name' => $singular,
		'add_new_item' => 'Adicionar novo '.$singular,
		);
	$args = array(
		'labels' => $labels,
		'public' => true,
        'supports' => array('title', 'editor','thumbnail'),
        'menu_position' => 5
		);

	register_post_type('secao',$args);
}
add_action(	'init','register_post_type_secao');

function wporg_add_custom_box()
{
    add_meta_box(
        'wporg_box_id',           // Unique ID
        'Video',  // Box title
        'wporg_custom_box_html',  // Content callback, must be of type callable
        'home'                   // Post type
    );
}
add_action('add_meta_boxes', 'wporg_add_custom_box');

function wporg_custom_box_html($post)
{
	$url = get_post_meta($post->ID, 'url', true);
    ?>
	    <p>
	    	<label>Link do video: </label>
		    <input style="width: 100%" type="text" name="url" value="<?php echo  esc_html($url) ?>">
	    </p>
    <?php
}

function wporg_save_postdata($post_id)
{
	if (array_key_exists('url', $_POST)) {
        update_post_meta(
            $post_id,
            'url',
            sanitize_text_field($_POST['url'])
        );
    }
}
add_action('save_post', 'wporg_save_postdata');

function get_the_twitter_excerpt(){
	$excerpt = get_the_content();
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$the_str = substr($excerpt, 0, 140)." [...]";
	return $the_str;
}
