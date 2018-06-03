<?php
$hero = get_sub_field('hero'); ?>

<div class="hero center-xs middle-xs py-4 px-2 p-sm-0 <?php echo $hero['extra_classes']; ?>" id="<?php echo $idCount; ?>">

  <div class="hero__content row p-xs-2 px-sm-7 py-sm-4 center-xs middle-xs">
    <div class="hero-img col-xs-12 col-sm-5"><?php
      if( $hero['image'] ): ?>
        <img src="<?php echo $hero['image'][ 'url' ]; ?>" alt="<?php echo $hero['image']['alt'];?>" /> <?php
      endif; ?>
    </div>
    <div class="hero__lead col-xs-12 col-sm-7">
      <h1><?php echo $hero['header'];?></h1>
      <?php if( $hero['copy'] ): echo $hero['copy']; endif; ?>
      <?php if( $hero['shortcode_only'] ): echo do_shortcode( $hero['shortcode_only'] ); endif;
      if( $hero['call_to_action_url'] ): ?>
        <div class="mt-3">
          <a href=" <?php echo $hero['call_to_action_url']; ?> " class="btn">
            <?php echo $hero['call_to_action_text']; ?>
          </a>
        </div> <?php
      endif; ?>
    </div>

  </div>
</div>
