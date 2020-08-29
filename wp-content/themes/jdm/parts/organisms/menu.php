<div class="menu">	
	<div class="menu__header">
		<?php 
			include TD . '/parts/atoms/logo-white.php';
			include TD . '/parts/atoms/close-menu.php';
		 ?>
	</div>
	<div class="container">
		<div class="menu__radio">
			<?php 
				include TD . '/parts/atoms/radio.php';
			 ?>
		</div>
		<div class="menu__nav">
			<?php 
				$args = array(
					'menu' => 'main_menu',
					'menu_class' => 'menu__list',
					'container' => '',
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				);
			 ?>
			<?php wp_nav_menu($args); ?>
			<!-- <ul class="menu__list">
				<li class="menu__items">
					<a href="#" class="menu__links">
						Política
					</a>
				</li>
				<li class="menu__items">
					<a href="#" class="menu__links">
						Economía
					</a>
				</li>
				<li class="menu__items">
					<a href="#" class="menu__links">
						Sociedad
					</a>
				</li>
				<li class="menu__items">
					<a href="#" class="menu__links">
						Deportes
					</a>
				</li>
				<li class="menu__items">
					<a href="#" class="menu__links">
						El mundo
					</a>
				</li>
				<li class="menu__items">
					<a href="#" class="menu__links">
						Tecnología
					</a>
				</li>
				<li class="menu__items">
					<a href="#" class="menu__links">
						Espectáculos
					</a>
				</li>
				<li class="menu__items">
					<a href="#" class="menu__links">
						Policiales
					</a>
				</li>
			</ul> -->
		</div>
		<div class="menu__social">
			<?php 
				include  TD . '/parts/atoms/social.php';
			 ?>
		</div>
	</div>
</div>