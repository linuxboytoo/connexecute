<?php

function get_post_by_tag($tag)
{
	$first_tag = $tag;
	$args=array(
		'tag' => $first_tag,
		'showposts'=>1
	); 
	$my_query = new WP_Query($args);
	if( $my_query->have_posts() ) {
		$my_query->the_post(); 
		$post = Array('title'=>get_the_title(), 'content'=>get_the_content());
	}
	wp_reset_query();

	return $post;
}


if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'Header Contact',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
));
}




// ADD MENUS
add_theme_support( 'menus' );
function register_my_menus()
{
        register_nav_menus(array(
                                        'header-menu' => __( 'Header Menu' )
                                ));
}
add_action( 'init', 'register_my_menus' );


// ADD THUMBNAILS
add_theme_support( 'post-thumbnails' );


// Custom Image Sizes
if ( function_exists( 'add_image_size' ) ) { 

	// Banner Size
	add_image_size( 'banner', 1000, 377, true );

}
