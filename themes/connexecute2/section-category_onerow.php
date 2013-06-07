<?php $cat = 21; ?>

<?php
	$rootcat_name =  get_cat_name($cat);

	global $wp_query;
	global $post;
			
	$startargs = $wp_query->query_vars;

	/* Special case to use plugin "Advanced Custom Sort". ACS Group will be used if title of group matches category title */
	if(class_exists('Acs'))
	{	
 		$acs = new Acs();
		$acsposts = $acs->get_post_ids($rootcat_name);
    
 		if($acsposts[0])
		{ 	
			$newargs = array(
				'post__in' 		 => $acsposts,
				'orderby'		 => 'post__in',
			);
			$args = array_merge($startargs,$newargs);
			$the_query = new WP_Query( $args );
		}
	}
?>


<div class='owrapper'>
	<div class='iwrapper category_onerow'>
		<h2><?php echo $rootcat_name; ?></h2>
		<?php if( $the_query->have_posts() ) { while( $the_query->have_posts() ) { $the_query->the_post(); ?>
	
 		<div class='item'>
 			<div class='image dropshadow'><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></div>
 			<div class='content'>
 				<h4><a href='<?php echo get_permalink(); ?>'><?php the_title(); ?></a></h4>
 			</div>
 			<div style='clear: both;'></div>
 		</div>
 		<?php }	} wp_reset_postdata(); ?>
 		<div style='clear: both;'></div>
	</div>
</div>