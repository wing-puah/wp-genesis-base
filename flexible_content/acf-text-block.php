<?php
$text = get_sub_field('text_area');
$tb_class = get_sub_field('extra_class');  ?>
<div class="center-xs px-3 px-sm-5 <?php if($tb_class): echo $tb_class; endif;?>" id="<?php echo $idCount; ?>">
	<?php echo $text; ?>
</div>
