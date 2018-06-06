<?php
$title = get_sub_field('container_title');
$items = get_sub_field('image_item'); ?>

<div
  class="py-5 py-sm-7 <?php echo $row_class; ?>"
  id="<?php echo $acfId; ?>" >

  <?php
  if ($title): ?><h2 class="center-xs mb-4"><?php echo $title ?></h2> <?php
  endif;  ?>

  <div class="row"> <?php
    $image_size = 'medium';

    foreach($items as $item):  ?>
      <div class="col-xs-6 col-sm-3 p-0 center-xs each-work">
        <a href="<?php echo $item['url']; ?>" target="_blank" >
          <img src=" <?php echo $item['image']['sizes'][$image_size]; ?>" alt="<?php echo $item['image']['alt']; ?>" />
          <div class="work-overlay row m-0 center-xs middle-xs">
            <h3><?php echo $item['title']; ?></h3>
          </div>
        </a>
      </div>  <?php
    endforeach;    ?>

  </div>
</div> <?php
