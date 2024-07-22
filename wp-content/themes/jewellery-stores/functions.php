<?php
/**
 * jewellery-store functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jewellery-store
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

function jewellery_store_setup() {

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );


	  register_nav_menu('main_menu', __('Main Menu'));

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
	add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'jewellery_store_setup' );


function jewellery_store_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jewellery_store_content_width', 640 );
}
add_action( 'after_setup_theme', 'jewellery_store_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jewellery_store_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'jewellery-store' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'jewellery-store' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'jewellery_store_widgets_init' );

/**
 * Enqueue scripts and styles.
 */




function jewellery_store_styles_enqueue_scripts() {

     wp_enqueue_style('preconnect-google-fonts', false);
    wp_add_inline_style('preconnect-google-fonts', '
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    ');

    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Marcellus&display=swap', array());
    wp_enqueue_style('additional-google-fonts', 'https://fonts.googleapis.com/css2?family=Marcellus&display=swap', array());
 
    wp_enqueue_style("reset-style-sheet",  get_template_directory_uri(). '/assets/css/reset.css', array());
	wp_enqueue_style("child-stylesheet", get_stylesheet_uri());
	wp_enqueue_style("media-style-sheet",  get_template_directory_uri(). '/assets/css/media.css', array());
    
}
add_action( 'wp_enqueue_scripts', 'jewellery_store_styles_enqueue_scripts');

function jewellery_store_scripts() {
    wp_register_script( 'custom-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '', true ); 
    wp_register_script( 'media-js', get_template_directory_uri() . '/assets/js/media.js', array( 'jquery' ), '', true );

    // Enqueue the scripts
    wp_enqueue_script( 'custom-js' );
    wp_enqueue_script( 'media-js' );
}
add_action( 'wp_enqueue_scripts', 'jewellery_store_scripts' );




if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
