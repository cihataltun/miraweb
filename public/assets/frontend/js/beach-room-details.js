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
  breakpoints: {

      576: {
          autoplay: {
              delay: 20000
          },
      }
  }

});




//ACCOMMODATION OPTIONS SWIPER
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
        var leftSectionHeight = $('.swiper-special-navigation-wrapper').height();
        $('.swiper-container-main').height(leftSectionHeight)
        mainSwiper.params.centeredSlides = false;
        mainSwiper.update() 

    
      }
      else{
        mainSwiper.params.centeredSlides = true;
        mainSwiper.update() 

      }
  
  

      
      })
      
//SWIPER FEATURES ICONS
var swiperFeaturesIcons = new Swiper(".swiper-features-icons", {
  slidesPerView:2,
  loop:true,
  autoplay: {
    delay:1500
  },
 breakpoints: {
  768.5: {
    slidesPerView:2,

  },
  
  0: {
    slidesPerView:1,
  }
 },


  navigation: {
      nextEl: "#iconSwiperNext",
      prevEl: "#iconSwiperPrev"
  },
  
  });


//WRAP TEXT TO SAME WIDTH

function adjust() {
    $("").each(function() {
      // Create an invisible clone of the element
      var clone = $(this).clone().css({
        visibility: 'hidden',
        width: 'auto'
      }).appendTo($(this).parent());
      
      // Get the bigger width of the two elements to be our starting point
      var goodWidth = Math.max($(this).width(), $(clone).width());
      var testedWidth = goodWidth;
      var initialHeight = $(clone).height();
  
      // Make the clone narrower until it wraps again
      while($(clone).height() == initialHeight && testedWidth > 0) {
        goodWidth = testedWidth;
        testedWidth--;
        $(clone).width(testedWidth);
      }
  
      // Set original element's width to last one before wrap
      $(this).width(goodWidth);
      
      // Remove the clone element
      $(clone).remove();
    });
  }
  
  $(window).resize(adjust);
  $(document).ready(function() {
    adjust();
  });
  
