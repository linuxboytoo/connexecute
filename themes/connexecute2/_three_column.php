<?php
/*
Template Name: Three Column with Banner
*/
?>
<?php get_header(); ?>
        <div class='iwrapper' id='banner_container'>
                <div class='iwrapper bg_dark boxshadow slideshow' id='banner'><?php the_post(); the_content(); ?></div>
        </div>
        <div class='iwrapper bg_gradient' id='content'>
                <div class='three_column content'><?php the_block('Column 1'); ?></div>
                <div class='three_column content'><?php the_block('Column 2'); ?></div>
                <div class='three_column content'><?php the_block('Column 3'); ?></div>
                <div style='clear: both;'></div>
        </div>
<?php get_footer(); ?>
