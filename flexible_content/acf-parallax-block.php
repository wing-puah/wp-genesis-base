<?php
$parallax = get_sub_field('parallax');
$parallax_image = 'full-width'; ?>

<div
  class="parallax row center-xs middle-xs p-2 px-sm-5 <?php echo $row_class; ?>"
  id="<?php echo $acfId; ?>"
  style="background-image: url(<?php echo $parallax['image']['sizes'][$parallax_image]; ?>)">

  <div class="parallax-content">
    <h2><?php echo $parallax['lead'];?></h2>
    <p><?php echo $parallax['copy'];?></p>
  </div>

</div>
