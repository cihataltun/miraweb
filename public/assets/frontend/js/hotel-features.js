//FEATURES SWIPER
var swiper = new Swiper('.swiper-features', {
    slidesPerView:4,
    autoplay: {
      delay: 1000,
    },
    scrollbar: {
      el: '.swiper-scrollbar',
      hide: true,
    },
    breakpoints:{
      1: {
        slidesPerView: 3,
      },
      400:{
        slidesPerView: 4,
      },
      678:{
        slidesPerView:4
      },
      863:{
        slidesPerView:8
      }
  
    }
  });
  