<?php 
/**
Template Page for NGGallery
Used to render image tags for slideshows
**/
?>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) : ?>
	<?php foreach ( $images as $image ) : ?>
	<?php if ( !$image->hidden ) { ?>
	<img rel='<?php echo $image->alttext; ?>' src='/<?php echo $image->path.'/'.$image->filename; ?>'>
	<?php } ?>
 	<?php endforeach; ?>
<?php endif; ?>
