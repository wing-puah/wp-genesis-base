<?php
$hero = get_sub_field('hero');
$hero_image = 'full-width'; ?>

<div class="hero center-xs middle-xs p-2 p-sm-0 row
<?php echo $row_class; ?> <?php echo $hero['extra_classes']; ?>" <?php
if ($hero['image'] ):?> style="background-image: url(<?php echo $hero['image']['sizes'][$hero_image];?>) <?php
endif; ?>">

  <div class="hero__content">
    <div class="hero__lead"><h1><?php echo $hero['header'];?></h1></div>
    <p class="mb-0 text--initial hero__copy"><?php echo $hero['copy'];?></p> <?php

    if ($hero['shortcode_only'] ): echo do_shortcode( $hero['shortcode_only']);
    endif;

    if ($hero['call_to_action_url']): ?>
      <div class="mt-3">
        <a href=" <?php echo $hero['call_to_action_url']; ?> " class="btn">
          <?php echo $hero['call_to_action_text']; ?>
        </a>
      </div> <?php
    endif; ?>

  </div>
</div>
