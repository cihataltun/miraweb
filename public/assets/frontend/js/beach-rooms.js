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


// ROOMS FIRST SLIDER

var swiperRoomsMain1 = new Swiper('.special-scroll-swiper-1', {
  slidesPerView: 1,
  loop: true,
  allowTouchMove: true,
  autoplay: {
    delay: 3000,
  },
  pagination: {
    el: ".custom-pagination1",
    type: "custom",
    renderCustom: function (swiper, current) {
      return current;
    }

  },
  navigation: {
    nextEl: "#mainSwiperNext1",
    prevEl: "#mainSwiperPrev1"
  },

});

var swiperRoomsMain2 = new Swiper('.special-scroll-swiper-2', {
  slidesPerView: 1,
  loop: true,
  allowTouchMove: true,
  autoplay: {
    delay: 3000,
  },
  pagination: {
    el: ".custom-pagination2",
    type: "custom",
    renderCustom: function (swiper, current) {
      return current;
    }

  },
  navigation: {
    nextEl: "#mainSwiperNext2",
    prevEl: "#mainSwiperPrev2"
  },

});

var swiperRoomsMain3 = new Swiper('.special-scroll-swiper-3', {
  slidesPerView: 1,
  loop: true,
  allowTouchMove: true,
  autoplay: {
    delay: 3000,
  },
  pagination: {
    el: ".custom-pagination3",
    type: "custom",
    renderCustom: function (swiper, current) {
      return current;
    }

  },
  navigation: {
    nextEl: "#mainSwiperNext3",
    prevEl: "#mainSwiperPrev3"
  },

});

var swiperRoomsMain4 = new Swiper('.special-scroll-swiper-4', {
  slidesPerView: 1,
  loop: true,
  allowTouchMove: true,
  autoplay: {
    delay: 3000,
  },
  pagination: {
    el: ".custom-pagination4",
    type: "custom",
    renderCustom: function (swiper, current) {
      return current;
    }

  },
  navigation: {
    nextEl: "#mainSwiperNext4",
    prevEl: "#mainSwiperPrev4"
  },

});
swiperRoomsMain1.on('slideChange', function (swiper, current) {
  currentSlide = (swiperRoomsMain1.realIndex + 1);
});
swiperRoomsMain2.on('slideChange', function (swiper, current) {
  currentSlide = (swiperRoomsMain2.realIndex + 1);
});
swiperRoomsMain3.on('slideChange', function (swiper, current) {
  currentSlide = (swiperRoomsMain3.realIndex + 1);
});
swiperRoomsMain4.on('slideChange', function (swiper, current) {
  currentSlide = (swiperRoomsMain4.realIndex + 1);
});
function containerScrollFunction() {

  var topPosSection1 = $('.scroll-item-1').position().top;
  var topPosSection2 = $('.scroll-item-2').position().top;
  var topPosSection3 = $('.scroll-item-3').position().top;
  var topPosSection4 = $('.scroll-item-4').position().top;
  var halfContainerHeight = parseInt($('.scroll-container-main').css('height'), 10) / 2;
  if (Math.abs(topPosSection1) <= halfContainerHeight) {
    $('.variable-title-1').css('display', 'block')
    $('.variable-title-2').css('display', 'none')
    $('.variable-title-3').css('display', 'none')
    $('.variable-title-4').css('display', 'none')
  }
  if (Math.abs(topPosSection2) <= halfContainerHeight) {
    $('.variable-title-1').css('display', 'none')
    $('.variable-title-2').css('display', 'block')
    $('.variable-title-3').css('display', 'none')
    $('.variable-title-4').css('display', 'none')
  }
  if (Math.abs(topPosSection3) <= halfContainerHeight) {
    $('.variable-title-1').css('display', 'none')
    $('.variable-title-2').css('display', 'none')
    $('.variable-title-3').css('display', 'block')
    $('.variable-title-4').css('display', 'none')
  }
  if (Math.abs(topPosSection4) <= halfContainerHeight) {
    $('.variable-title-1').css('display', 'none')
    $('.variable-title-2').css('display', 'none')
    $('.variable-title-3').css('display', 'none')
    $('.variable-title-4').css('display', 'block')
  }
}



//OPEN BOOKING SECTION ON BUTTON CLICK

function bookingOpen() {
  $('.booking-open').css('opacity', '0')
  $('.booking-open').css('z-index', '-1')
  $('.booking-open').css('height', '0')
  $('.booking-open').css('padding', '0');
  $('.booking-open').css('border', 'none')
  $('.fixed-booking-block').css('gap', '0px')
  $('.title-dynamic::after').css('display', 'none')
  $('.reservation-wrapper').css('opacity', '1');
  $('.reservation-wrapper').css('position', 'relative');
  $('.reservation-wrapper').css('transform', 'translateY(-10px)');

}