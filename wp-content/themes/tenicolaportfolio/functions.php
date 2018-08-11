<?php
/**
 * TeniCola Portfolio functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage TeniCola Portfolio
 * @since TeniCola Portfolio 1.0
 */

// Theme support for menus
function portfolio_setup() {

    /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

    // Register Menus
    register_nav_menus( array (
        'top-nav' => __( 'Top Nav' ),
        'social-media'  => __( 'Social Media Nav' ),
    ) );
}
add_action( 'after_setup_theme', 'portfolio_setup' );


// Enqueue scripts and styles.
function portfolio_styles() {
	wp_register_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
	wp_register_style( 'normalize', get_stylesheet_directory_uri() . '/css/normalize.css' );

	wp_enqueue_style( 'style' );
	wp_enqueue_style( 'normalize' );
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Nova+Slim|Open+Sans');
}
add_action( 'wp_enqueue_scripts', 'portfolio_styles' );

// Register widget area
function portfolio_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'accelerate' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your blog sidebar.', 'accelerate' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'portfolio_widgets_init' );

// Defines custom markup for post comments
function portfolio_comments($comment, $args, $depth) {
	$comment  = '<li class="comment">';
	$comment .=	'<header class="comment-head">';
	$comment .= '<span class="comment-author">' . get_comment_author() . '</span>';
	$comment .= '<span class="comment-meta">' . get_comment_date('m/d/Y') . '&emsp;|&emsp;' . get_comment_reply_link(array('depth' => $depth, 'max_depth' => 5)) . '</span>';
	$comment .= '</header>';
	$comment .= '<div class="comment-body">';
	$comment .= '<p>' . get_comment_text() . '</p>';
	$comment .= '</div>';
	$comment .= '</li>';

	echo $comment;
}

// Changes excerpt symbol
function custom_excerpt_more($more) {
	return '...<div class="read-more-link"><a  href="'. get_permalink() . '"><span>Read more</span> &rsaquo;</a></div>';
}
add_filter('excerpt_more', 'custom_excerpt_more');


// Register custom post types for page banners and custom galleries
function create_custom_post_types() {
    register_post_type( 'page_banners',
        array(
            'labels' => array(
                'name' => __( 'Page Banners' ),
                'singular_name' => __( 'Page Banner' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'page-banners' ),
        )
	);
	
	register_post_type( 'custom_galleries',
        array(
            'labels' => array(
                'name' => __( 'Custom Galleries' ),
                'singular_name' => __( 'Custom Gallery' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'custom-gallery' ),
        )
    );
}
add_action( 'init', 'create_custom_post_types' );