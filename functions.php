<?php
/***Generic customisation across web
***/
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_action( 'genesis_setup','child_theme_setup', 15 );
//set up child theme
function child_theme_setup() {
	define( 'CHILD_THEME_NAME', 'Genesis child' );
	define( 'CHILD_THEME_URL', 'https://www.thegeekwing.com' );
	define( 'CHILD_THEME_VERSION', '1.0.0' );
	}

// Add theme support
add_theme_support( 'html5');
add_theme_support( 'genesis-responsive-viewport' );
add_theme_support( 'genesis-footer-widgets', 3 );
add_theme_support( 'genesis-structural-wraps', array(
	'site-inner',
	'footer-widgets',
	'footer',
) );

// Custom image size
add_action( 'after_setup_theme', 'custom_theme_setup' );
function custom_theme_setup(){
	add_image_size( 'full-width', 1800, 1200 );
}

// Load custom.css and lib script
add_action( 'wp_enqueue_scripts', 'custom_load_custom_style_sheet' );
function custom_load_custom_style_sheet() {
	wp_enqueue_style( 'custom-stylesheet', CHILD_URL . '/assets/css/main.css', array(), PARENT_THEME_VERSION );
	wp_enqueue_style( 'flexboxgrid', CHILD_URL . '/assets/vendor/flexboxgrid.min.css', array(), PARENT_THEME_VERSION );
	//wp_enqueue_script('base-js', get_stylesheet_directory_uri() . '/assets/js/base.js', array(), '1.0', true );
}

// Activate ACF if there is content
add_action('genesis_entry_content', 'custom_load_acf');
function custom_load_acf(){
	$acf_flexible_content = 'flexible_content';
	if ($acf_flexible_content) {
		include(locate_template('/acf-flexible-content.php'));
	}
}


// Customise footer credits
add_filter('genesis_footer_creds_text', 'aa_footer_creds_filter');
function aa_footer_creds_filter( $editthecredit ) {
  $editthecredit = 'Copyright ©' ;
  return $editthecredit ;
}
