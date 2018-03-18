<?php
$side_blk = get_sub_field('img_with_info'); ?>
<div class="img-with-content row m-sm-6" id="<?php echo $idCount; ?>">

  <div class="col-12 col-sm-7 px-3 py-5 p-sm-5">
    <h2><?php echo $side_blk['header'];?></h2>
    <p class="mb-0"><?php echo $side_blk['copy'];?></p>
  </div>

  <div class="col-12 col-sm-4 p-0" style="background: url('<?php echo $side_blk['image']['url']; ?>') center/cover;">
  </div>

</div> <?php
