jQuery(document).ready(function(){
	jQuery('.open-menu__button').hover(function(){
		jQuery('.header').toggleClass('active');
	});
});

jQuery(document).ready(function(){
	jQuery('.open-menu__button').click(function(){
		jQuery('.menu').css('left','0');
	});
	jQuery('.close-menu__button').click(function(){
		jQuery('.menu').css('left','100%');
	});
});


jQuery(document).ready(function(){
	jQuery('.menu .menu__nav li').addClass('menu__items');
	jQuery('.menu .menu__nav li a').addClass('menu__links');
	jQuery('.footer .footer__nav li').addClass('footer__items');
	jQuery('.footer .footer__nav li a').addClass('footer__links');
});