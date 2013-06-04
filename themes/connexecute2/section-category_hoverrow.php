<?php 
	$cat = 14; 
	$group_id = 'meettheteam';
?>

<?php


	$rootcat_name =  get_cat_name($cat);
	global $wp_query;
	global $post;
			
	$startargs = Array(); //$wp_query->query_vars;

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
	<div class='iwrapper category_hoverrow'>
		<div id="items_meettheteam"></div>
		<div id="descs_meettheteam"  style='float: left; min-height: 300px;'></div>
		<div style='clear: both;'></div>

		<?php if( $the_query->have_posts() ) { while( $the_query->have_posts() ) { $the_query->the_post(); ?>
		<?php		
				$thumb = get_the_post_thumbnail( get_the_ID(), Array(120,120) );
				if(!empty($thumb)) 
				{
					$id = get_the_ID(); 
				
?>
					<script> 
						<?php $name = preg_split("/[\s]+/", get_the_title()); ?>
						category_hoverrow_item('<?php echo $group_id; ?>','<?php echo get_the_ID(); ?>','<?php the_post_thumbnail(Array(120,120)); ?>','<?php echo $name[0].' '.$name[1]; ?>'); 
						category_hoverrow_desc('<?php echo $group_id; ?>','<?php echo get_the_ID(); ?>',"<?php echo str_replace('<br />','<br />\\',nl2br(htmlspecialchars(do_shortcode(get_the_content())))); ?>",'<?php 	the_title(); ?>');
						<?php if($count++==1) { echo 'jQuery("#item'.$id.'").hover();'; } ?>
					</script>
		<?php } ?>
	<?php } } 
	wp_reset_postdata();
?>
<script> jQuery('<div/>', { css: { 'clear': 'both' } }).appendTo('#items_meettheteam'); </script>
<script> jQuery('<div/>', { css: { 'clear': 'both' } }).appendTo('#descs_meettheteam'); </script>

<!-- TEAM MEMBERS -->