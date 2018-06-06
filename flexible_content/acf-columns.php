<?php
$add_classes = get_sub_field('extra_classes');
$title = get_sub_field('container_header');
$description = get_sub_field('container_description');
$unique_class = get_sub_field('optional_item_class');
$bg_col = get_sub_field('bg_col');
$columns = get_sub_field('column'); ?>

<div
  class="center-xs px-3 py-5 px-sm-5 py-sm-6 <?php echo $add_classes; ?>"
  id="<?php echo $acfId; ?>" <?php
  if( $bg_col ):  ?>
    style = "background: <?php echo $bg_col; ?>;" <?php
  endif; ?>
> <?php

  // Check for nested fields in columns field
  if( $title ): ?>
    <h2 class="mb-0"> <?php echo $title; ?> </h2> <?php
  endif;  // end $title check

  if( $description ): ?>
    <div class="mb-sm-2"> <?php echo $description; ?> </div> <?php
  endif;  // end $description check

  if( $columns ):

    foreach( array_chunk( $columns, 3, true ) as $col_item ):  ?>
      <div class="row start-xs <?php if($unique_class): echo $unique_class; endif;?>"> <?php

        foreach( $col_item as $item ):
          $icon= $item['fa_icon']; ?>

          <div class="column col-xs-12 col-sm-4 p-3"> <?php

            if( $icon ): ?>
              <div class="col-xs-12 col-sm-2 " style="font-size:30px;"> <?php
                echo $icon; ?>
              </div>
              <div class="col-xs-12 col-sm-10"><?php
            endif; ?>

            <h4 class="mb-0 "><?php echo $item['title'];?></h4>
            <div><?php echo $item['copy'];?></div> <?php
            if( $icon ): ?>
              </div> <?php
            endif; ?>

          </div> <?php
        endforeach; ?>

      </div> <?php
    endforeach;

  endif;  // end $columns check ?>

</div>
