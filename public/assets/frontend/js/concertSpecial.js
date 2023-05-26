// Concerts Swiper

var concertsSpecialSwiper = new Swiper('.concertSpecialSwiper', {
    effect: 'coverflow',
    
    slidesPerView: 'auto',
    loop:true,
    centeredSlides:true,

    coverflowEffect: {
        rotate: 0,
        slideShadows: false,
      },

      

})

concertsSpecialSwiper.on('slideChange', function () {
    console.log('on slide change')
    $('.swiper-slide-active img').addClass('glitch');
    PowerGlitch.glitch('.glitch')

  });