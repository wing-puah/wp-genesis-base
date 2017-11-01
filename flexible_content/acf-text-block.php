<?php
$textarea = get_sub_field('text_area');
$extra_classes = get_sub_field('extra_classes'); ?>

<div class="<?php echo $row_class; ?> <?php if ($extra_classes): echo $extra_classes; endif; ?>">
  <?php echo $textarea; ?>
</div>
