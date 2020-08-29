<div class="footer">
	<div class="footer__logo">
		<?php 
			include TD . '/parts/atoms/logo-white.php';
		 ?>
	</div>
	<div class="footer__menu">
		<div class="container">
			<div class="footer__nav">
				<?php 
					$args = array(
						'menu' => 'footer_menu',
						'menu_class' => 'menu__list',
						'container' => '',
						'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					);
				 ?>
				 <?php wp_nav_menu($args); ?>
			</div>
		</div>
	</div>
	<div class="footer__bottom">
		<div class="container">
			<p class="footer__copyright">© Copyright JDM 2020. Todos los derechos reservados</p>
		</div>
	</div>
</div>