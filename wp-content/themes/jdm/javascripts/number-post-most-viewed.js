jQuery(document).ready(function(){
	var most_viewed_number = 1;
	jQuery('.most-viewed .post-item__image').each(function(){
		var element_number = '<div class="post-item__number-post"><p>'+ most_viewed_number +'</p></div>';
		jQuery(this).append(element_number);
		var number_post = most_viewed_number++;
	});
});