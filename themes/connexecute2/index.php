<?php 
		get_header();
		get_template_part('section','banner');
?>
		<div class='iwrapper'></div>
		
		<div class='owrapper'>
			<div class='iwrapper'>
					<a name="top"></a>
					<?php if( have_posts() ) { while( have_posts() ) { the_post(); ?>
					<div id='main_content'>
						<h2><?php the_title(); ?></h2>
						<div class='content'>
							<?php the_content(); ?>
						</div>
					</div>
					<?php } } ?>
			</div>
		</div>
		
		<div class='iwrapper'>
		<?php get_template_part('section','category_twocolumn'); ?>
		</div>
		<div class='owrapper bg_green'>
			<div id="lower_banner" class='iwrapper bg_green'>
				<h1 style='padding-left: 5px;' class='fancyfont'>Get the Free Equip Update</h1>
				<h2 style='padding-left: 100px;'>useful <a href="#">tips</a> to grow your business</h2>
			</div>
		</div>
		<div class='owrapper'>
			<div class='iwrapper' style='height: 50px;'>
			test
			</div>
		</div>

<?php
		get_footer(); 
?>
