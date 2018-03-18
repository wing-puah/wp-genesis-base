<div class="py-5 py-sm-7" id="<?php echo $idCount; ?>">
  <h2 class="center-xs mb-4">Meet our team</h2> <?php

  $works = get_sub_field('team_images');

  if($works): ?>
    <div class="row"> <?php

      foreach($works as $work):
        $img = $work['image']; ?>

        <div class="col-xs-6 col-sm-3 p-0 center-xs each-work">
          <img src=" <?php echo $img[ 'sizes' ][ $size ]; ?>" alt="<?php echo $img['alt']; ?>" />
          <div class="work-overlay row m-0 center-xs middle-xs">
            <h4><?php echo $work['title']; ?></h4>
          </div>
        </div>  <?php

      endforeach;    ?>

    </div> <?php
  endif;  ?>

</div>
