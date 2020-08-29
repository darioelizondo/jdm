<?php 

if (function_exists( 'add_theme_support') ) {
	add_theme_support( 'post-thumbnails' );	
}

function jdm_add_image_sizes()
{
	add_image_size( 'image-post-one', 630, 295, true );
	add_image_size( 'image-post-two', 300, 295, true );
	add_image_size( 'image-post-three', 410, 295, true );
	add_image_size( 'image-main-news-mobile', 640, 700, true );
}
add_action('init', 'jdm_add_image_sizes');

function jdm_mime_types($mimes) 
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'jdm_mime_types');
add_filter( 'big_image_size_threshold', '__return_false' );