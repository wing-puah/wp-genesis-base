<?php
$title = get_sub_field('tab_title');
$overall_copy = get_sub_field('tab_copy');
$each_tab = get_sub_field('each_tab_content');
$add_classes = get_sub_field('extra_classes'); ?>

<div class="px-3 py-5 px-sm-5 py-sm-6 center-xs <?php if( $add_classes ): echo $add_classes; endif; ?>" id="<?php echo $idCount; ?>">

  <h2 class="mb-2"> <?php echo $title; ?> </h2> <?php

  if( $overall_copy ): ?>
    <div class="mb-sm-4"> <?php echo $overall_copy; ?> </div> <?php
  endif;

  if( $each_tab ):
    include 'acf-single-tab-content.php';
  endif; ?>

</div>
