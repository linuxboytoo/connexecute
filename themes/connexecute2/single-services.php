<?php get_header(); the_post(); ?>
		
		<div class=owrapper' style='height: 25px;'></div>
		
		<div class='owrapper'>

<!-- MAIN CONTENT -->			
			<div class='iwrapper'>
					<a name="top"></a>
					<div id='main_content'>

						<div class='content'>
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
						</div>

						<div class='image'>
							<?php 	
								if ( has_post_thumbnail() ) { the_post_thumbnail(Array(120,120)); } 
								else { echo "<img src='/wp-content/themes/connexecute/images/logo.png' width=170 height=170>"; } 
							?>
						</div>
						<div style='clear: both;'></div>

					</div>
					<div style='clear: both;'></div>					
			</div>
			
<!-- VIDEO CONTENT -->
			<div class='iwrapper'>
				<div id='video_content'>
					<div class='video'>
						<iframe src="<?php more_fields('video_url'); ?>" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
					<div class='content'>
						<?php more_fields('video_text'); ?>
					</div>
					<div style='clear: both;'></div>
				</div>			
				<div style='clear: both;'></div>
			</div>

<!-- REVIEWS -->
<?php 
		$meta = get_meta('reviews_category_id'); 
		$number_of_reviews = get_meta('number_of_reviews'); if($number_of_reviews<1) { $number_of_reviews=3; }

		$the_query = new WP_Query( 'cat='.$meta.'&posts_per_page='.$number_of_reviews );

		if(!empty($meta) && $the_query->post_count>0) 
		{
?>
			<div class='iwrapper'>
				<div id='review_content'>
					<h1>reviews</h1>
					<?php while ( $the_query->have_posts() ) { $the_query->the_post(); ?>
					<div class='review'>
						<div class='content'>
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
						</div>

						<div class='image'>
							<?php 	
								if ( has_post_thumbnail() ) { the_post_thumbnail(Array(120,120)); } 
								else { echo "<img src='/wp-content/themes/connexecute/images/logo.png' width=170 height=170>"; } 
							?>
						</div>		
						<div style='clear: both;'></div>
					</div>
					<?php }  ?>
				</div>
				<div style='clear: both;'></div>
			</div>			
<?php
			wp_reset_postdata();
		}
?>
<!-- REVIEWS -->



<!-- BOTTOM CONTENT -->
	<?php $meta = get_meta('pricing_details'); if(!empty($meta)) { 
			$title = get_meta('bottom_content_title');
			if(empty($title)) { $title = "details"; }
	?>
			<div class='iwrapper'>
				<div id='bottom_content'>
					<h1><?php echo $title; ?></h1>
					<div class='content'>
						<?php echo do_shortcode(get_meta('pricing_details')); ?>
					</div>
					<div style='clear: both;'></div>
				</div>
			</div>
	<?php } ?>
<!-- BOTTOM CONTENT -->
		
		
		
			
			</div>
			
		</div>
		
<?php get_footer(); ?>