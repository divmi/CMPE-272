(function ($) {
  "use strict";
  var cardSlider = new Swiper(".card-slider", {
    autoplay: {
      delay: 4000,
      disableOnInteraction: false
    },
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    spaceBetween: 20,
    breakpoints: {
      // when window is <= 992px
      992: {
        slidesPerView: 2
      },
      // when window is <= 768px
      768: {
        slidesPerView: 1
      }
    }
  });
})(jQuery);
