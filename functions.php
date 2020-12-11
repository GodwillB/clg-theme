<?php
/**
 * clg functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package clg
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'clg_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function clg_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on clg, use a find and replace
		 * to change 'clg' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'clg', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'clg' ),
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
				'clg_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

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
endif;
add_action( 'after_setup_theme', 'clg_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function clg_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'clg_content_width', 640 );
}
add_action( 'after_setup_theme', 'clg_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function clg_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'clg' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'clg' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'clg_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function clg_scripts() {
	
	wp_style_add_data( 'clg-style', 'rtl', 'replace' );
	wp_enqueue_style( 'clg_theme-fontawesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 
	wp_enqueue_style( 'clg_theme-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css'); 
	wp_enqueue_style( 'clg_theme-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css'); 
	wp_enqueue_style( 'clg_theme-defaultcorousel', get_template_directory_uri() . '/css/owl.theme.default.min.css'); 
	wp_enqueue_style( 'clg_theme-animate', get_template_directory_uri() . '/css/animate.css');
	// wp_enqueue_style( 'clg_theme-slick', get_template_directory_uri() . '/css/slick.css');
	// wp_enqueue_style( 'clg_theme-slick-theme', get_template_directory_uri() . '/css/slick-theme.css');
	// wp_enqueue_style( 'clg_theme-mmenu', get_template_directory_uri() . '/css/mmenu.min.css');
	// wp_enqueue_style( 'clg_theme-hover', get_template_directory_uri() . '/css/hover-min.css');
	// wp_enqueue_style( 'clg_theme-main', get_template_directory_uri() . '/main.css');
	// wp_enqueue_style( 'clg_theme-set2', get_template_directory_uri() . '/css/set2.css');

	wp_enqueue_style( 'clg_theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'clg_theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'clg_theme-jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '20151215', true );
	wp_enqueue_script( 'clg_theme-jquery-migrate', 'http://code.jquery.com/jquery-migrate-1.2.1.min.js', array(), '20151215', true );

	wp_enqueue_script( 'clg_theme-popper', get_template_directory_uri() .'/js/popper.min.js' , array(), '20151215', true );
	
	wp_enqueue_script( 'clg_theme-bootstrapjs', get_template_directory_uri() .'/js/bootstrap.min.js' , array(), '20151215', true );

	wp_enqueue_script( 'clg_theme-carosel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true );
	// wp_enqueue_script( 'clg_theme-slick', get_template_directory_uri() . '/js/slick.min.js', array(), '20151215', true );
	// wp_enqueue_script( 'clg_theme-readmore', get_template_directory_uri() . '/js/readmore.min.js', array(), '', true );
	// wp_enqueue_script( 'clg_theme-mmenu', get_template_directory_uri() . '/js/mmenu.js', array(), '', true );
	wp_enqueue_script( 'clg_theme-adaptiveBackground', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.adaptive-backgrounds/1.0.3/jquery.adaptive-backgrounds.min.js', array(), '', true );

	wp_enqueue_script( 'clg_theme-customScript', get_template_directory_uri() . '/js/script.js', array(), '20151215',true); 

	wp_enqueue_script( 'clg-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'clg_scripts' );

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
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}	

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

function get_excerpt(){
$excerpt = get_the_content();
$excerpt = preg_replace(" ([.*?])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, 250);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
// $excerpt = $excerpt.'... <a href="'.get_the_permalink().'">more</a>';
return $excerpt;
}
