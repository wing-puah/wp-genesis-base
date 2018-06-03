<?php
$hero = get_sub_field('full_width_bg'); ?>

<div class="hero row center-xs middle-xs py-4 px-2 p-sm-0 <?php echo $hero['extra_classes']; ?>" <?php
  if( $hero['image'] ): ?>
    style="background: url('<?php echo $hero['image'][ 'url' ]; ?>')" <?php
  endif; ?> id="<?php echo $idCount; ?>">

  <div class="col-xs-12 hero__content p-xs-2 px-sm-7 py-sm-4">
    <h2 class="full-width-bg__title"><?php echo $hero['header'];?></h2>
    <?php if( $hero['copy'] ): echo $hero['copy']; endif;
    if( $hero['call_to_action_url'] ): ?>
      <div class="mt-3">
        <a href=" <?php echo $hero['call_to_action_url']; ?> " class="btn">
          <?php echo $hero['call_to_action_text']; ?>
        </a>
      </div> <?php
    endif; ?>
  </div>
  
</div>
