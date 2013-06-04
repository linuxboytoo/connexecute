<?php get_header(); ?>
		<?php the_post(); ?>
		<div class=owrapper' style='height: 25px;'></div>
		
		<div class='owrapper'>
			<div class='iwrapper'>
					<a name="top"></a>
					<h1><?php the_title(); ?></h1>
					<div id='main_content'>
						<div class='content'>
							<?php the_content(); ?>
						</div>
						<div style='clear: both;'></div>
					</div>
					<div style='clear: both;'></div>
					<a href='#top' style='padding: 25px; display: block;'>return to top</a>
			</div>
		</div>
<?php get_footer(); ?>
