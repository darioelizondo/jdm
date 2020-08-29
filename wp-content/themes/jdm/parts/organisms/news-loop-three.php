<div class="news-loop-three">
	<div class="container">
		<?php 
			$args = array(
				'posts_per_page' => '7',
				'order' => 'DESC',
				'order_by' => 'date',
				'category_name' => '',
			);
			$news_loop_three = New WP_Query($args);
		 ?>

		<?php 
		 	$count_loop_news = 1;
		 	if($news_loop_three->have_posts()) : while($news_loop_three->have_posts()) : $news_loop_three->the_post();
		?>

		<?php
			include TD . '/parts/molecules/post-item.php';
			$count_loop_news++;
		?>

		<?php
			endwhile;
			wp_reset_postdata();
			endif;
		 ?>
	</div>
</div>