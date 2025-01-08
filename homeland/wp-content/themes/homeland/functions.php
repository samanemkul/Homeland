<?php

/**
 * Homeland functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Homeland
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function homeland_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Homeland, use a find and replace
		* to change 'homeland' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('homeland', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'homeland'),
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

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'homeland_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
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
}
add_action('after_setup_theme', 'homeland_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function homeland_content_width()
{
	$GLOBALS['content_width'] = apply_filters('homeland_content_width', 640);
}
add_action('after_setup_theme', 'homeland_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function homeland_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'homeland'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'homeland'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'homeland_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function homeland_enqueue_scripts()
{
	wp_enqueue_script('aos', get_template_directory_uri() . '/js/aos.js', array('jquery'), null, true);
	wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true);
	wp_enqueue_script('bootstrap-datepicker', get_template_directory_uri() . '/js/bootstrap-datepicker.min.js', array('jquery'), null, true);
	wp_enqueue_script('circleaudioplayer', get_template_directory_uri() . '/js/circleaudioplayer.js', array('jquery'), null, true);
	wp_enqueue_script('jquery-3.3.1', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), null, true);
	wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/js/jquery-ui.js', array('jquery'), null, true);
	wp_enqueue_script('jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate-3.0.1.min.js', array('jquery'), null, true);
	wp_enqueue_script('jquery-countdown', get_template_directory_uri() . '/js/jquery.countdown.min.js', array('jquery'), null, true);
	wp_enqueue_script('jquery-magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), null, true);
	wp_enqueue_script('jquery-stellar', get_template_directory_uri() . '/js/jquery.stellar.min.js', array('jquery'), null, true);
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
	wp_enqueue_script('mediaelement-player', get_template_directory_uri() . '/js/mediaelement-and-player.min.js', array('jquery'), null, true);
	wp_enqueue_script('navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), null, true);
	wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), null, true);
	wp_enqueue_script('player', get_template_directory_uri() . '/js/player.js', array('jquery'), null, true);
	wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), null, true);
	wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'homeland_enqueue_scripts');
function homeland_scripts()
{
	wp_enqueue_style('homeland-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('homeland-style', 'rtl', 'replace');

	wp_enqueue_script('homeland-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'homeland_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

function homeland_enqueue_styles()
{


	// Other stylesheets
	wp_enqueue_style('homeland-icomoon', get_template_directory_uri() . '/assets/fonts/icomoon/style.css');
	wp_enqueue_style('homeland-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('homeland-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
	wp_enqueue_style('homeland-jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css');
	wp_enqueue_style('homeland-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
	wp_enqueue_style('homeland-carousel-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
	wp_enqueue_style('homeland-datepicker', get_template_directory_uri() . '/assets/css/bootstrap-datepicker.css');
	wp_enqueue_style('homeland-mediaelement', get_template_directory_uri() . '/assets/css/mediaelementplayer.css');
	wp_enqueue_style('homeland-animate', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style('homeland-flaticon', get_template_directory_uri() . '/assets/fonts/flaticon/font/flaticon.css');
	wp_enqueue_style('homeland-bigmug', get_template_directory_uri() . '/assets/css/fl-bigmug-line.css');
	wp_enqueue_style('homeland-aos', get_template_directory_uri() . '/assets/css/aos.css');
	wp_enqueue_style('homeland-main-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'homeland_enqueue_styles');
function enqueue_bootstrap_scripts()
{
	wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
	wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_scripts');


if (function_exists('acf_add_options_page')) {
	acf_add_options_page(
		array(
			'page_title' 	=> 'Theme Options',
			'menu_title' 	=> 'Theme Options',
			'menu_slug' 	=> 'theme-options',
			'capability' 	=> 'edit_posts',
			'redirect'		=> false,
		)
	);
}
function theme_register_sidebar()
{
	register_sidebar(array(
		'name'          => __('Contact Sidebar', 'homeland'),
		'id'            => 'contact-sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'theme_register_sidebar');
