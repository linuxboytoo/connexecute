<div class='owrapper'>
	<div class='iwrapper'>
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
 						<h1><?php the_title(); ?></h1>
 		<?php
 					}
 				}
 		?>
	</div>
</div>