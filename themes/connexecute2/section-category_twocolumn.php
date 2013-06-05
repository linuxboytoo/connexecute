<?php $cat = 4; ?>

<div class='owrapper'>
	<div class='iwrapper category_twocolumn'>
		<a name="top"></a>
		<h2><?php echo get_cat_name($cat); ?></h2>
	
	
	
	
		<?php		
				global $wp_query;
				global $post;
 
				$acs = new Acs();
				$posts = $acs->get_post_ids('Services');
 
				$args = array(
					'post__in' 		 => $posts,
					'orderby'		 => 'post__in',
				);

 				$wp_query = new WP_Query( $args );
 
			 	if( have_posts() )
 				{
 					while( have_posts())
 					{
 						the_post();
 		?>
 						<div class='item'>
 							<div class='image dropshadow'><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></div>
 							<div class='content'>
 								<h3><a href='<?php echo get_permalink(); ?>'><?php the_title(); ?></a></h3>
 								<?php
									$content = get_the_content();
									$content = apply_filters('the_content', $content);
									$content = str_replace(']]>', ']]&gt;', $content);
									$excerpt = substr($content,0,strpos($content,'</p>'));
									echo $excerpt;
								?>
								<div style='position:absolute; bottom: 31px; right: 23px; background-color: #ffffff;' id='learnmore'>
									&nbsp;. . . 	<a href='<?php echo get_permalink(); ?>'>Learn More</a>
								</div>
 							</div>
 							<div style='clear: both;'></div>
 						</div>
 		<?php
 					}
 				}
 		?>
	 							<div style='clear: both;'></div>

	</div>
</div>