<div class="main-news main-news--n-<?php echo $count_main_news; ?>">
	<div class="main-news__image">
		<?php
			$image_id = get_post_thumbnail_id(get_the_ID());
			$alt_main_news = get_post_meta($image_id, '_wp_attachment_image_alt', true);
		?>
		<?php if (has_post_thumbnail()) { ?>
			<figure class="main-news__figure">
				<a class="main-news__permalink-image" href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>">
					<?php if($count_main_news == 1) { ?>
						<picture class="main-news__picture">
							<source media="(min-width: 640px)" srcset="<?php echo get_the_post_thumbnail_url( get_the_id(), 'full'); ?>">
							<img class="main-news__post-image image--fluid" src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'image-main-news-mobile'); ?>" alt="<?php echo $alt_main_news; ?>" loading="lazy">
						</picture>
					<?php } else { ?>
						<img class="main-news__post-image image--fluid" src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'full'); ?>" alt="<?php echo $alt_main_news; ?>">
					<?php } ?>
				</a>
			</figure>
		<?php } ?>
		<a class="main-news__overlay" href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>"></a>
	</div>
	<div class="main-news__info">
		<div class="main-news__wrapper-excerpt">
			<h6 class="main-news__excerpt"><?php the_excerpt(); ?></h6>
		</div>
		<div class="main-news__wrapper-title">
			<h2 class="main-news__title main-news__title--<?php echo $count_main_news; ?>">
				<a class="main-news__permalink" href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>
		</div>
	</div>
</div>