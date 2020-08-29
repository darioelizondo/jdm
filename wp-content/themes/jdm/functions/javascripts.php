<?php 

function add_javascripts_jdm() {

	wp_enqueue_script( 'jdm.menu', TDU . '/javascripts/menu.js', array('jquery'), false , true );
	wp_enqueue_script( 'number-post.most.viewed', TDU . '/javascripts/number-post-most-viewed.js', '', false , true );
	// Slider
	wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', '', false , true );
	wp_enqueue_script( 'init-swiper', TDU . '/javascripts/init-swiper.js', '', false , true );


}

add_action( 'wp_enqueue_scripts' , 'add_javascripts_jdm' );