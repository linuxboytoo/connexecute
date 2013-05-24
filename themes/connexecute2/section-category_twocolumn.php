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
 								<h4><?php the_title(); ?></h4>
 								<?php
									$content = get_the_content();
									$content = apply_filters('the_content', $content);
									$content = str_replace(']]>', ']]&gt;', $content);
									$excerpt = substr($content,0,strpos($content,'</p>'));
									echo $excerpt;
								?>
 							</div>
 							<div style='clear: both;'></div>
 						</div>
 		<?php
 					}
 				}
 		?>
	</div>
</div>