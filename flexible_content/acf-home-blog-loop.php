<?php
if( $posts ): ?>
  <div class="row"><?

  foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT)
    setup_postdata($p); ?>
    <div class="col-xs-12 col-sm-3 p-3 blog-loop" id="<?php echo $idCount; ?>">
      <a href=" <?php echo get_permalink( $p->ID ); ?> ">
        <?php echo get_the_post_thumbnail( $p->ID ); ?>
        <h3 class="loop-title"><?php echo get_the_title( $p->ID ); ?></h3>
        <p class="text--small"><?php echo wp_trim_words( get_the_excerpt(), 40 ); ?></p>
      </a>
    </div> <?php
  endforeach;

  wp_reset_postdata(); ?>
  </div><?php
endif;
