<?php get_header(); ?>
<?php the_post(); ?>
<div class='iwrapper bg_dark' style='height: 7px;'></div>
<div class='iwrapper bg_gradient'>
	<div class='content' id='single_column'>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</div>
	<div style='clear: both;'></div>
</div>

<?php get_footer(); ?>
