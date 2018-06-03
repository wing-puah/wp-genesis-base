<?php
$parallax = get_sub_field('parallax'); ?>
<div class="parallax row center-xs middle-xs px-3 py-5 px-sm-7"
style="background-image: url(<?php echo $parallax['image']['url']; ?>)"
id="<?php echo $idCount; ?>">

  <div class="parallax-content <?php if( $parallax['extra_classes'] ):
    echo $parallax['extra_classes']; endif; ?>">

    <h2><?php echo $parallax['lead'];?></h2>
    <div><?php echo $parallax['copy'];?></div>
    <?php if( $parallax['shortcode_only'] ):
      echo do_shortcode( $parallax['shortcode_only'] );
    endif; ?>

  </div>

</div>
