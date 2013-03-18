<?php 
/*
Template Name: About
*/
get_header("inside"); 

get_sidebar('easy'); ?>
<?php
$content_post = get_post('44');
echo $content_post->post_content;
?>
<?php get_footer(); ?>