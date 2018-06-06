<?php
/**
* Template Name: ACF pages
* Description: Used as a template for pages using ACF
**/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
add_action( 'genesis_entry_content', 'cstm_acf_loop' );
function cstm_acf_loop() {
	include(locate_template('/acf-flexible-content.php'));
}

genesis();
