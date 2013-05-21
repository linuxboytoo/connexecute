<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) : ?>
<div class='image_sidebar'>
        <?php foreach ( $images as $image ) : ?>
        <?php if ( !$image->hidden ) { ?>
	<div class='image_sidebar_item'>
		<img class='dropshadow' src='/<?php echo $image->path.'/'.$image->filename; ?>' width=300>
        	<?php if ( $image->alttext ) { ?>
		<div class='image_sidebar_item_caption'><small><?php echo $image->alttext; ?></small></div>
		<?php } ?>
	</div>
	<?php } ?>
        <?php endforeach; ?>
</div>
<?php endif; ?>	
