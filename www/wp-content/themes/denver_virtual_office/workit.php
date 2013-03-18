<?php 
/*
Template Name: work it
*/
get_header("inside"); 

get_sidebar(); ?>
<?php
$content_post = get_post('49');
echo $content_post->post_content;
?>
<?php get_footer(); ?>