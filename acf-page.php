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
	$count = 0;
  // check if the flexible content field has rows of data
  if( have_rows('flexible_content') ):
    while ( have_rows('flexible_content') ) : the_row();
			$size = 'medium';
			$idCount = 'ac-row-' . $count++;

			if( get_row_layout() == 'hero_block' ):
				include(locate_template('/flexible_content/acf-hero-block.php'));

      elseif( get_row_layout() == 'fullwidthbg_block' ):
				include(locate_template('/flexible_content/acf-fullwidthbg.php'));

      elseif( get_row_layout() == 'parallax_block' ):
				include(locate_template('/flexible_content/acf-parallax.php'));

      elseif( get_row_layout() == 'text_block' ):
				include(locate_template('/flexible_content/acf-text-block.php'));

      elseif( get_row_layout() == 'img_with_side_block' ):
				include(locate_template('/flexible_content/acf-img-with-side-block.php'));

      elseif( get_row_layout() == 'columns' ):
				include(locate_template('/flexible_content/acf-columns.php'));

			elseif( get_row_layout() == 'tabbed_navigation' ):
				include(locate_template('/flexible_content/acf-tab-navigation.php'));

      elseif( get_row_layout() == 'images_grid' ):
				include(locate_template('/flexible_content/acf-image-grid.php'));

      endif;

    endwhile;
  endif;
}

genesis();
