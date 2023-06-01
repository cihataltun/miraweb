

// OPTIONS SWIPER
var optionsSwiper = new Swiper('#optionsSwiper', {
    loop:true,
  
    breakpoints:{
      1:{
        slidesPerView: 'auto',
        initialSlide: 1,
        centeredSlides:true
  
      },
      480:{
        slidesPerView:2,
        centeredSlides:true,
        effect:'coverflow',
        spaceBetween:0
  
      },
      768:{
        slidesPerView: 3,
        spaceBetween:30
      }
    }
  });
     