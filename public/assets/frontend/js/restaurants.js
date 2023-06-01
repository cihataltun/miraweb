
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



//MAIN SWIPER
var mainSwiper = new Swiper(".swiper-container-main", {
  loop:true,
 autoplay: {
  delay:1500
 },

  pagination: {
    el: ".custom-pagination",
    type: "custom",
    renderCustom: function (swiper, current) {
      return current ; 
  }
    
  },
  breakpoints:{
1:{
slidesPerView:1
},
768:{
slidesPerView:'auto'
}
  },
  navigation: {
      nextEl: "#mainSwiperNext",
      prevEl: "#mainSwiperPrev"
  },
  
  });
  mainSwiper.on('slideChange', function (swiper,current) {
    currentSlide = (mainSwiper.realIndex + 1);





  });

  $(window).on('load resize', function(){

    var ww = $(window).width();

    if (ww > 768){
      var leftSectionHeight = $('.restaurant-left').height();
      $('.swiper-container-main').height(leftSectionHeight)
      mainSwiper.params.centeredSlides = false;
      mainSwiper.update() 

  
    }
    else{
      mainSwiper.params.centeredSlides = true;
      mainSwiper.update() 

    }



    
    })
    
//HERO SWIPER 
var swiperHomeTop = new Swiper('.heroTopSwiper', {
  slidesPerView: 1,
  loop: true,
  autoplay: {
      delay: 3000
  },
  navigation: {
      nextEl: '.heroSwiperNext',
      prevEl: '.heroSwiperPrev',
  },


});

