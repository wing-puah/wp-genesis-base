<?php ?>
<div class="start-xs tabs-container center-xs row">
  <div class="col-xs-12 last-xs first-sm bg--grey mb-sm-5"><?php
    $count = 0;
    $i = 0;

    foreach( $each_tab as $tab):
      $copy = $tab['copy']; ?>

      <div class="tab-content <?php
        if( $count==0 ):
          print 'current';
        endif; ?>"
      id="tab-<?php echo $count;?>">

        <?php echo $copy; ?>

      </div> <?php
      $count++;
    endforeach; ?>
  </div>

  <div class="col-xs-12 first-xs last-sm">
    <div class="tabs my-3 center-xs middle-xs"> <?php
    foreach( $each_tab as $tab):
      $icon = $tab['icon'];
      $heading = $tab['heading']; ?>
      <div class="tab-nav circle-sm border--primary<?php
        if( $i==0 ):
          print ' current';
        endif; ?>"
      data-tab="tab-<?php echo $i; ?> ">
        <div class="center-text p-sm-3">
          <div><?php echo $icon; ?></div>
          <div class="text--uppercase"><strong><?php echo $heading ?></strong></div>
        </div>
      </div>  <?php
      $i++;
    endforeach; ?>
    </div>
  </div>
</div>
