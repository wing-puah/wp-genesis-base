<?php
$post_ids = get_sub_field('blog_posts', false, false);   // Customise query of post

$posts = get_posts(array(
  'post_type' => 'post',
  'orderby'   => 'post_date',
  'post__in'	=> $post_ids,
));

$count = 0;

if( $posts ):
  foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT)
    setup_postdata($p);
    $class = ( $count%2 == 0 ? '' : 'm-0 first-sm');
    $count++; ?>

    <div class="row <?php echo $row_class; ?>">

      <div class="col-xs-12 col-sm-6 p-0">
        <?php echo get_the_post_thumbnail( $p->ID ); ?>
      </div>

      <div class="col-xs-12 col-sm-6 p-3 px-sm-5 row middle-xs center-xs <?php print $class ?>">
        <div class="col-12">
          <h3><?php echo get_the_title( $p->ID ); ?></h3>
          <p><?php echo wp_trim_words( get_the_excerpt(), 40 ); ?></p>
          <a href=" <?php echo get_permalink( $p->ID ); ?> ">
            <div class="btn d--inline-block">
              Read more
            </div>
          </a>
        </div>
      </div>

    </div> <?php

  endforeach;
  wp_reset_postdata();
endif;
