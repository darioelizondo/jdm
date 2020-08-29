<div class="wrapper-main-news">
	<?php 
		$args = array(
			'post_per-page' => '3',
			'order' => 'DESC',
			'order_by' => 'date',
			'category_name' => 'principal'
		);

		$main_news = New WP_Query($args);

	?>
	<?php
		$count_main_news = 1;
		 if($main_news->have_posts()) : while ($main_news->have_posts()) : $main_news->the_post();
	?>
	
	<?php
		include TD . '/parts/molecules/main-news.php';
		$count_main_news++;
	?>
	
	<?php
		endwhile;
		endif;
		wp_reset_postdata();
	?>
		
	 
</div>