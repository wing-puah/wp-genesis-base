<?php
$add_classes = get_sub_field('extra_classes');
$header = get_sub_field('container_header');
$description = get_sub_field('container_description');
$unique_class = get_sub_field('optional_item_class');
$columns = get_sub_field('column');
$image_size = 'medium';

// Container field ?>
<div class="center-xs p-3 px-sm-5 py-sm-6 <?php echo $row_class; ?> <?php echo $add_classes; ?>"> <?php

  if( $header ): ?><h2><?php echo $header; ?></h2><?php
  endif;

  if( $description ): ?><p class="mb-sm-6"><?php echo $description; ?></p><?php
  endif;

  // Start columns loop
  $col_length = count($columns);   // Check for total number of elements in ACF column field created dynamically

  if ($col_length >= 6):  // more than 5 elements in row
    foreach( array_chunk( $columns, 4, true ) as $col_item ):  ?>
    <div class="row center-xs <?php if($unique_class): echo $unique_class; endif;?>"> <?php

      foreach( $col_item as $item ):?>
        <div class="column col-xs-12 col-sm-3 p-3"> <?php
          if( $item['image'] ): ?>
            <img src=" <?php echo $item['image']['sizes'][$image_size];?>" alt="<?php echo $item['image']['alt'];?>" /> <?php
          endif; ?>
          <h4><?php echo $item['title'];?></h4>
          <p class="text--small text-align-xs--left "><?php echo $item['copy'];?></p>
        </div>  <?php
      endforeach; ?>

    </div> <?php
    endforeach;


  else:  // equal or less than 5 elements in row ?>
    <div class="row <?php if( $unique_class ): echo $unique_class; endif; ?>"><?php

      foreach( $columns as $column ):?>
        <div class="column col-xs-12 p-3 col-sm"> <?php
          if( $column['image'] ): ?>
            <img src=" <?php echo $column['image']['sizes'][$image_size];?>" alt="<?php echo $column['image']['alt'];?>" /> <?php
          endif;?>
          <h4><?php echo $column['title'];?></h4>
          <p class="text--small text-align-xs--left "><?php echo $column['copy'];?></p>
        </div> <?php
      endforeach; ?>

    </div> <?php
  endif;  // end number of columns condition ?>

</div>
