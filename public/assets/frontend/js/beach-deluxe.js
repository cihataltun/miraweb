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




//ACCOMMODATION OPTIONS SWIPER
var optionsSwiper = new Swiper('#optionsSwiper', {
  loop:true,
  autoplay:{
    delay:3000
  },

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
    slidesPerView:1.282,
    loop:true,
    autoplay:{
      delay:3000
    },
    followFinger:false,    
   

    pagination: {
      el: ".custom-pagination",
      type: "custom",
      renderCustom: function (swiper, current) {
        return current ; 
    }
      
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    },
    breakpoints: {
      1:{
        slidesPerView:1
      },
      768:{
        slidesPerView:1.282
      }
    }
    
    });
    var swiperRoomSize = ''
    var swiperPeopleCount = ''
    var swiperTitle = ''
    var swiperDescription = ''
    mainSwiper.on('slideChange', function (swiper,current) {
      currentSlide = (mainSwiper.realIndex + 1);
      //CHANGE SLIDER TITLE
      $('.deluxe-swiper-title').children('span').each(function () {
        if ($(this).hasClass('deluxe-title-' + currentSlide)){
          $(this).css('display', 'block');
        }
        else{
          $(this).css('display', 'none');

        }

    });
    //CHANGE ROOM SIZE
    $('.swiper-room-size').children().each(function () {
      if ($(this).hasClass('room-size-' + currentSlide)){
        $(this).css('display', 'block');
      }
      else{
        $(this).css('display', 'none');

      }

  });
  //CHANGE PEOPLE COUNT
  $('.swiper-people-count').children().each(function () {
    if ($(this).hasClass('people-count-' + currentSlide)){
      $(this).css('display', 'block');
    }
    else{
      $(this).css('display', 'none');

    }

});
  //CHANGE DESCRIPTION
  //CHANGE ROOM SIZE
  $('.deluxe-swiper-inner').children('.swiper-room-desc').each(function () {
    if ($(this).hasClass('desc-' + currentSlide)){
      $(this).css('display', 'block');
    }
    else{
      $(this).css('display', 'none');

    }

});


  
    });

//OPEN BOOKING SECTION ON BUTTON CLICK

function bookingOpen(){
  $('.booking-open').css('opacity', '0')
  $('.booking-open').css('z-index', '-1')
  $('.reservation-wrapper').css('opacity', '1');
  $('.reservation-wrapper').css('transform', 'translateY(-3vw)');

}