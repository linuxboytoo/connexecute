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
 							<h3><?php the_title(); ?></h3>
 						</div>
 		<?php
 					}
 				}
 		?>
	</div>
</div>