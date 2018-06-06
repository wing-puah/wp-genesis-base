<?php
/**
* To use the ACF => include(locate_template('/acf-flexible-content.php'));
**/

// check if the flexible content field has rows of data
if (have_rows($acf_flexible_content)): $idCount = 0;
  while (have_rows($acf_flexible_content)) : the_row(); $acfId = 'fc-row-' . $idCount++;

    if (get_row_layout() == 'blog'):
      include(locate_template('/flexible_content/acf-blog.php'));

    elseif (get_row_layout() == 'columns'):
      include(locate_template('/flexible_content/acf-columns.php'));

    elseif (get_row_layout() == 'hero_block'):
      include(locate_template('/flexible_content/acf-hero-block.php'));

    elseif (get_row_layout() == 'images_in_grid'):
      include(locate_template('/flexible_content/acf-images-in-grid.php'));

    elseif (get_row_layout() == 'img_with_side_block'):
      include(locate_template('/flexible_content/acf-img-with-side-block.php'));

    elseif (get_row_layout() == 'parallax_block'):
      include(locate_template('/flexible_content/acf-parallax-block.php'));

    elseif (get_row_layout() == 'tab_navigation'):
      include(locate_template('/flexible_content/acf-tab-navigation.php'));

    elseif (get_row_layout() == 'text_block'):
      include(locate_template('/flexible_content/acf-text-block.php'));

    endif;

  endwhile;
endif;
