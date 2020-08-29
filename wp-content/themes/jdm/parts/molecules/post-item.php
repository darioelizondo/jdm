<div class="post-item post-item--n-<?php echo $count_loop_news; ?>">
	<div class="post-item__image">
		<?php if(has_post_thumbnail()) { 
			$image_id = get_post_thumbnail_id(get_the_ID());
			$alt_news = get_post_meta($image_id, '_wp_attachment_image_alt', true);
		?>
			<a class="post-item__permalink-image" href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>">
				<?php if ($count_loop_news == 1) { ?>
					<img class="post-item__post-image image--fluid" src="<?php echo get_the_post_thumbnail_url(get_the_id(),'image-post-one'); ?>" alt="<?php echo $alt_news; ?>" loading="lazy">
				<?php } elseif ($count_loop_news == 2 || $count_loop_news == 3) { ?>
					<img class="post-item__post-image image--fluid" src="<?php echo get_the_post_thumbnail_url(get_the_id(),'image-post-two'); ?>" alt="<?php echo $alt_news; ?>" loading="lazy">
				<?php } else { ?>
					<img class="post-item__post-image image--fluid" src="<?php echo get_the_post_thumbnail_url(get_the_id(),'image-post-three'); ?>" alt="<?php echo $alt_news; ?>" loading="lazy">
				<?php } ?>
			</a>
		<?php } ?>
	</div>
	<div class="post-item__content">
		<div class="post-item__wrapper-excerpt">
			<h6 class="post-item__excerpt"><?php the_excerpt(); ?></h6>
		</div>
		<div class="post-item__wrapper-title">
			<h4 class="post-item__title">
				<a href="<?php the_permalink(); ?>" class="post-item__permalink"><?php the_title(); ?></a>
			</h4>
		</div>

		<?php
		$category = get_the_category();
		if (!empty($category) && $category[0]->_name !== 'Principal') {
		$get_category_id = get_cat_ID($category[0]->_name);
		?>

		    <div class="post-item__category">
				<a class="post-item__category-permalink" href="<?php echo get_category_link($get_category_id); ?>"><?php echo $category[0]->name; ?></a>
			</div>   
		<?php } ?>

			<!-- <?php  
		//	
		//		$get_category_name = get_the_category();
		//		foreach ($get_category_name as $category) { 
		//			$get_category_id = get_cat_ID($category->cat_name);
		//			if ($category->cat_name !== 'Principal' ) { ?> 
						<div class="post-item__category">
							<a class="post-item__category-permalink" href="<?php // echo get_category_link($get_category_id); ?>"><?php // echo $category->cat_name; ?></a>
						</div>
				<?php // }
		//		}
			?>-->
	</div>
</div>
