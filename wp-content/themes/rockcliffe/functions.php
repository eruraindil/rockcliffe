<?php
/**
 * Rockcliffe functions and definitions
 *
 * @package Rockcliffe
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
    $content_width = 640; /* pixels */
}

if ( ! function_exists( 'rockcliffe_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function rockcliffe_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Rockcliffe, use a find and replace
     * to change 'rockcliffe' to the name of your theme in all the template files
     */
    load_theme_textdomain( 'rockcliffe', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    //add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'rockcliffe' ),
    ) );

    // Enable support for Post Formats.
    add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

    // Setup the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'rockcliffe_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );

    // Enable support for HTML5 markup.
    add_theme_support( 'html5', array(
        'comment-list',
        'search-form',
        'comment-form',
        'gallery',
        'caption',
    ) );
}
endif; // rockcliffe_setup
add_action( 'after_setup_theme', 'rockcliffe_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function rockcliffe_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Page Sidebar', 'rockcliffe' ),
        'id'            => 'sidebar-1',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'rockcliffe' ),
        'id'            => 'sidebar-2',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Post Sidebar', 'rockcliffe' ),
        'id'            => 'sidebar-3',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Prices Sidebar', 'rockcliffe' ),
        'id'            => 'sidebar-4',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
}
add_action( 'widgets_init', 'rockcliffe_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rockcliffe_scripts() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap-3.3.4/css/bootstrap.min.css');

    //wp_enqueue_style( 'rockcliffe-style', get_stylesheet_uri() );
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/custom.css' );

    wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/slick/slick.css' );
    //wp_enqueue_style( 'slick-style-theme', get_template_directory_uri() . '/slick/slick-theme.css' );

    //wp_enqueue_script( 'bootstrap-jquery', get_template_directory_uri() . '/bootstrap-3.3.4/js/jquery-1.11.1.min.js', array(), false, false );
    wp_enqueue_script( 'rockcliffe-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
    wp_enqueue_script( 'rockcliffe-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap-3.3.4/js/bootstrap.min.js', array(), false, true );
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/slick/slick.min.js', array(), false, true );
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/script.js', array(), false, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'rockcliffe_scripts' );

add_action( 'admin_enqueue_scripts', 'wp_enqueue_media'  );

function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active';
     }
     return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
