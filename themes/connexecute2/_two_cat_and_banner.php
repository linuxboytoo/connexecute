<?php
/*
Template Name: Two Category and Banner
*/
?>
<?php get_header(); ?>

<?php get_template_part('section','banner'); ?>


		<div class='iwrapper'></div>
		
		<div class='owrapper'>
			<div class='iwrapper'>
					<a name="top"></a>
					<?php if( have_posts() ) { while( have_posts() ) { the_post(); ?>
					<div id='main_content' style='border: none; padding-bottom: 30px;'>
						<h2><?php the_title(); ?></h2>
						<div class='content' style='width: 100%;'>
							<?php the_content(); ?>
						</div>
					</div>
					<?php } } ?>
			</div>
		</div>



<!-- FIRST CATEGORY -->
		<div class='iwrapper'>
		<?php $cat="4"; get_template_part('section','category_twocolumn'); ?>
		</div>
<!-- FIRST CATEGORY -->


	
<!-- GET THE FREE EQUIP UPDATE -->
		<div class='owrapper bg_green'>
			<div id="lower_banner" class='iwrapper bg_green'>
				<div class='left'>
					<h1 style='padding-left: 5px;' class='fancyfont'>Get the Free Equip Update</h1>
					<h2 style='padding-left: 100px;'>useful <a href="#">tips</a> to grow your business</h2>
				</div>
				<div class='right'>
					<h2>be inspired. take action.</h2>
					<input type='text' style='width: 140px;' default='first name'>
					<input type='text' style='width: 140px;' default='email address'>
					<div class='buttonround-orange' style='position: absolute; top: 20px; right: 0;'>Get it now!</div>
				</div>
			</div>
		</div>
<!-- GET THE FREE EQUIP UPDATE -->
		


<!-- SECOND CATEGORY -->	
		<div class='iwrapper'>
		<?php $cat="21"; get_template_part('section','category_onerow'); ?>
		</div>
<!-- SECOND CATEGORY -->



<?php get_footer(); ?>
