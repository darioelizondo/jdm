<div class="featured-news">
	<div class="featured-news__socle">
		<picture class="featured-news__picture">
			<source media="(min-width: 640px)" srcset="<?php echo TDU . '/images/home/socle-header.png' ?>">
			<img src="<?php echo TDU . '/images/home/socle-header-mobile.png' ?>" alt="" class="featured-news__image-socle image--fluid" loading="lazy">	
		</picture>
	</div>
	<div class="featured-news__wrapper">
		<?php include TD . '/parts/atoms/title-section-white.php'; ?>
		<?php include TD . '/parts/organisms/news-loop-one.php'; ?>
		<?php include TD . '/parts/atoms/ad-billboard.php'; ?>
	</div>
</div>