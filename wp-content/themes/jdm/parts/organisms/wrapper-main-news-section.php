<div class="wrapper-main-news-section">
	<div class="container">
		
		<?php include TD .'/parts/atoms/title-page.php';?>

		<?php 
			$args = array(
				'posts_per_page' => '1',
				'order' => 'DESC',
				'order_by' => 'date',
				'category_name' => ''
			);

			$main_news_section = New WP_Query($args);
			$count_main_news = 1;
		?>

		<?php if($main_news_section->have_posts()) : while ($main_news_section->have_posts()) : $main_news_section->the_post(); ?>
		
		<?php
			include TD . '/parts/molecules/main-news.php';
		?>
		
		<?php
			endwhile;
			wp_reset_postdata();
			endif;
		?>
	</div>

</div>