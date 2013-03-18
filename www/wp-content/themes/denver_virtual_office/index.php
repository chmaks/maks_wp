<?php 
/*
Template Name: Home
*/
get_header(); ?>
<?php
$content_post = get_post('4');
echo $content_post->post_content;
?>
<?php get_footer('main'); ?>