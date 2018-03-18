<?php
/***Generic customisation across web
***/
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_action( 'genesis_setup','child_theme_setup', 15 );
//set up child theme
function child_theme_setup() {
	define( 'CHILD_THEME_NAME', 'Trove' );
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

//Load custom.css and lib script
add_action( 'wp_enqueue_scripts', 'cstm_load_custom_style_sheet' );
function cstm_load_custom_style_sheet() {
	wp_enqueue_style( 'custom-stylesheet', CHILD_URL . '/assets/css/main.css', array(), PARENT_THEME_VERSION );
	wp_enqueue_style( 'flexboxgrid', CHILD_URL . '/assets/vendor/flexboxgrid.min.css', array(), PARENT_THEME_VERSION );
	//wp_enqueue_script('base-js', get_stylesheet_directory_uri() . '/assets/js/base.js', array(), '1.0', true );
}


//Customise footer credits
add_filter('genesis_footer_creds_text', 'cstm_footer_creds_filter');
function cstm_footer_creds_filter( $editthecredit ) {
  $editthecredit = 'Copyright ©' ;
  return $editthecredit ;
}
