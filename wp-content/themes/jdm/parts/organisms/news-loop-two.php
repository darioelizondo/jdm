<div class="news-loop-two">
	<div class="container">
		<?php 
			$args = array(
				'posts_per_page' => '7',
				'order' => 'DESC',
				'order_by' => 'date',
				'category_name' => '',
			);

			$news_loop_two = New WP_Query($args);
		 ?>

		 <?php
		 	$count_loop_news = 1;
		 	if($news_loop_two->have_posts()) : while($news_loop_two->have_posts()) : $news_loop_two->the_post();
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