<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	

<?php 
	endwhile;
	wp_reset_postdata();
	endif;	
 ?>

 	<?php // require TD . '/parts/organisms/wrapper-main-news.php'; ?>
	<?php // require TD . '/parts/organisms/featured-news.php'; ?>
	<?php // require TD . '/parts/organisms/section-one-home.php'; ?>
	<?php // require TD . '/parts/organisms/section-two-home.php'; ?>
	<?php // require TD . '/parts/organisms/most-viewed.php'; ?>
	<?php // require TD . '/parts/organisms/section-three-home.php'; ?>
	<?php // require TD . '/parts/organisms/section-four-home.php'; ?>
	<?php // require TD . '/parts/organisms/section-five-home.php'; ?>

	<!-- Sections -->
	<?php require TD . '/parts/organisms/wrapper-main-news-section.php'; ?>
	<?php require TD . '/parts/organisms/latest-news.php'; ?>

	
 <?php get_footer(); ?>