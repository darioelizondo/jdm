<div class="news-loop-four">
	<div class="container">
		<?php 
			$args = array(
				'posts_per_page' => '3',
				'order' => 'DESC',
				'order_by' => 'meta_value_num',
				'category_name' => '',
				'date_query' => array(
		            array(
		                'after'  => '5 days ago'
		            )
				)
			);

			$dest_news = new WP_Query($args);

		?>
		<?php 
			$count_loop_news = 4;
			if($dest_news->have_posts()) : while($dest_news->have_posts()) : $dest_news->the_post();
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
		 <!-- Ad Section -->
		<?php 
			include TD . '/parts/atoms/ad-inline-rectangle.php';
		 ?>
	</div>
</div>
