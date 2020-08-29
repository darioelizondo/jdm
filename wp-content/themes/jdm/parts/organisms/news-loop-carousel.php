<div class="news-loop-carousel">
	<div class="container">
		<div class="swiper-container">
		    <!-- Additional required wrapper -->
		    <div class="swiper-wrapper">
		    	<?php 
					$args = array(
						'posts_per_page' => '10',
						'order' => 'DESC',
						'order_by' => 'meta_value_num',
						'category_name' => '',
						'date_query' => array(
				            array(
				                'after'  => '10 days ago'
				            )
						)
					);

					$news_carousel = new WP_Query($args);

				?>

				<?php 
					$count_loop_news = 4;
					if($news_carousel->have_posts()) : while($news_carousel->have_posts()) : $news_carousel->the_post();
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
		    <!-- If we need pagination -->
		    <div class="swiper-pagination"></div>

		    <!-- If we need scrollbar -->
		    <!-- <div class="swiper-scrollbar"></div> -->
		</div>
		<!-- If we need navigation buttons -->
		<div class="news-loop-carousel__controls">
			<div class="swiper-button-prev"></div>
		    <div class="swiper-button-next"></div>
		</div>
	</div>
</div>