<?php
/*
Template Name: Fancy Landing
*/
?>
<?php get_header(); ?>

		<div class='owrapper'>
			<div class='iwrapper'>
					<?php if( have_posts() ) { while( have_posts() ) { the_post(); ?>
					<div id='main_content' style='text-align: center; border: none; padding-bottom: 30px;'>
						<h1 class='fancyfont' style='font-size: 42pt;'><?php the_title(); ?></h1>
						<div class='content' style='text-align: left; width: 75%; margin-left: 12%; '>
							<?php the_content(); ?>
						</div>
					</div>
					<?php } } ?>
			</div>
		</div>
		<div style='clear: both;'></div>



<?php get_footer(); ?>