<?php
	$temp = get_the_category(); 
	$rootcat_name = $temp[sizeof($temp)-1]->cat_name;

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
			$wp_query = new WP_Query( $args );
		}
	}
?>


<?php get_header(); ?>
		<div class=owrapper' style='height: 25px;'></div>
		
		<div class='owrapper'>
			<div class='iwrapper'>
					<a name="top"></a>
					<h1><?php echo $rootcat_name; ?></h1>
					<?php if( have_posts() ) { while( have_posts() ) { the_post(); $link = get_permalink(); ?>
					<div id='main_content'>
						<div class='image'>
							<?php 	
								if ( has_post_thumbnail() ) { the_post_thumbnail(Array(120,120)); } 
								else { echo "<img src='/wp-content/themes/connexecute/images/logo.png' width=170 height=170>"; } 
							?>
						</div>
						<div class='content'>
							<h2><?php echo (!empty($link)?'<a href="'.$link.'">':'').get_the_title().(!empty($link)?'</a>':''); ?></h2>
							<?php the_content(); ?>
						</div>
											<div style='clear: both;'></div>

					</div>
					<div style='clear: both;'></div>
					<?php } } ?>
					<a href='#top' style='padding: 25px; display: block;'>return to top</a>
			</div>
		</div>

<?php get_footer(); ?>
