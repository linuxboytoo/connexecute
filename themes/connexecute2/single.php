<?php 
	$cat = get_the_category();
	$slug = $cat[0]->slug;


	$file = get_stylesheet_directory().'/single-'.$slug.'.php';
	if(file_exists($file)) { include($file); }
	else
	{
?>









<?php } ?>