<?php
add_action( 'after_setup_theme', 'twentyeleven_setup' );

if ( ! function_exists( 'twentyeleven_setup' ) ):
function twentyeleven_setup() {

	register_nav_menu();
	add_theme_support( 'post-thumbnails' );
}
endif; // twentyeleven_setup

add_action('init', 'post_type_portfolio');

//--------------------------CASE STUDIES
function post_type() {
	 // Fire this during init
	register_post_type('post-type', array(
		'label' => 'Portfolio',
		'singular_label' => 'New post type',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'rewrite' => true,
		'query_var' => true,
		'supports' => array('title', 'editor','thumbnail','excerpt','custom-fields'),
	));
}
add_action('init', 'post_type');

?>