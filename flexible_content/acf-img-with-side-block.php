<?php
$side_blk = get_sub_field('img_with_info');
$img_size = 'medium'; ?>

<div class="img-with-content row m-3 m-sm-6 <?php echo $row_class; ?>">
  <div class="col-12 col-sm-7 p-0">
    <img src="<?php echo $side_blk['image']['sizes'][$img_size]; ?>" />
  </div>

  <div class="col-12 col-sm-5 bg--grey p-3 p-sm-5">
    <h3><?php echo $side_blk['lead'];?></h3>
    <p class="text--muted mb-0"><?php echo $side_blk['copy'];?></p>
  </div>
</div>
