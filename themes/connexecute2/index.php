<?php 	
		get_header(); 
?>
		<div class=owrapper' style='height: 25px;'></div>
		
		<div class='owrapper'>
			<div class='iwrapper'>
					<a name="top"></a>
					<?php if( have_posts() ) { while( have_posts() ) { the_post(); $link = get_permalink(); ?>
					<div id='main_content'>
						<h2><?php echo (!empty($link)?'<a href="'.$link.'">':'').get_the_title().(!empty($link)?'</a>':''); ?></h2>
						<div class='content'>
							<?php the_content(); ?>
						</div>
					</div>
					<?php } } ?>
			</div>
		</div>

<?php get_footer(); ?>
