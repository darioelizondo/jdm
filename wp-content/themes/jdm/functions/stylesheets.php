<?php

function jdm_add_stylesheets() {

	wp_enqueue_style( 'armix-style', get_template_directory_uri() . '/stylesheets/stylesheets.css' );
	// Slider
	wp_enqueue_style( 'swiper.css', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
}

add_action( 'wp_enqueue_scripts', 'jdm_add_stylesheets');