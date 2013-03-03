<?php
/**
 * Paulo Neves functions and definitions
 *
 * @package Paulo Neves
 * @since Paulo Neves 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Paulo Neves 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

/*
 * Load Jetpack compatibility file.
 */
require( get_template_directory() . '/inc/jetpack.php' );

if ( ! function_exists( 'pauloneves_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since Paulo Neves 1.0
 */
function pauloneves_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/extras.php' );

	/**
	 * Customizer additions
	 */
	require( get_template_directory() . '/inc/customizer.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Paulo Neves, use a find and replace
	 * to change 'pauloneves' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'pauloneves', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'pauloneves' ),
		) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
}
endif; // pauloneves_setup
add_action( 'after_setup_theme', 'pauloneves_setup' );

/**
 * Setup the WordPress core custom background feature.
 *
 * Use add_theme_support to register support for WordPress 3.4+
 * as well as provide backward compatibility for WordPress 3.3
 * using feature detection of wp_get_theme() which was introduced
 * in WordPress 3.4.
 *
 * @todo Remove the 3.3 support when WordPress 3.6 is released.
 *
 * Hooks into the after_setup_theme action.
 */
function pauloneves_register_custom_background() {
	$args = array(
		'default-color' => 'ffffff',
		'default-image' => '',
		);

	$args = apply_filters( 'pauloneves_custom_background_args', $args );

	if ( function_exists( 'wp_get_theme' ) ) {
		add_theme_support( 'custom-background', $args );
	} else {
		define( 'BACKGROUND_COLOR', $args['default-color'] );
		if ( ! empty( $args['default-image'] ) )
			define( 'BACKGROUND_IMAGE', $args['default-image'] );
		add_custom_background();
	}
}
add_action( 'after_setup_theme', 'pauloneves_register_custom_background' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since Paulo Neves 1.0
 */
function pauloneves_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'pauloneves' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
		) );
}
add_action( 'widgets_init', 'pauloneves_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function pauloneves_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', null, '20120206', true );

	wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array( ), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'pauloneves_scripts' );

/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );


/**
 * Get the envents
 * @param  integer $limit the max quantity to show
 * @return string         a html code with links and imgs.
 */
function get_events($limit = 3)
{
	$result = '';
	$query = new WP_Query(array('post_type'=>'mural-de-eventos','orderby'=>'menu_order', 'order'=>'ASC', 'posts_per_page' =>$limit));

	$result .= "<ul>";
	while ($query->have_posts()) 
	{
		$query->the_post();            
		$result .= '<li>';
			$result .= '<a href="'. get_permalink() .'">';
				$result .=  get_the_post_thumbnail(); 
			$result .= '</a>';
		$result .= '</li>';

		wp_reset_postdata(); 
	}
	$result .= "</ul>";
	
	return $result;
}
