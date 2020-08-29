<div class="latest-news">
	<div class="latest-news__socle">
		<picture class="latest-news__picture">
			<source media="(min-width: 640px)" srcset="<?php echo TDU . '/images/home/socle-header.png' ?>">
			<img src="<?php echo TDU . '/images/home/socle-header-mobile.png' ?>" alt="" class="latest-news__image-socle image--fluid" loading="lazy">	
		</picture>
	</div>
	<div class="latest-news__wrapper">
		<?php 
			include TD . '/parts/atoms/title-section-white.php';
			include TD . '/parts/organisms/news-loop-two.php';
	 	?>
	</div>
</div>