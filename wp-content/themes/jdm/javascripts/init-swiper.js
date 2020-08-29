jQuery(document).ready(function(){
  jQuery('.news-loop-carousel .swiper-container .post-item').addClass('swiper-slide');
});

jQuery(document).ready(function(){
  var swiper = new Swiper('.swiper-container', {
          slidesPerView: 1.1,
          centeredSlides: true,
          spaceBetween: 10,
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        1024: {
          centeredSlides: false,
          slidesPerView: 3,
          spaceBetween: 30,
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },    
        },
      }
      
    });
});