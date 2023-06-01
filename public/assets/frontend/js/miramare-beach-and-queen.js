//Scroll to top button function
function scrollToTop() {

  document.body.scrollTo({top: 0, behavior: 'smooth'});
  
  }


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

//SWIPER CODE
var panoramaSwiper = new Swiper(".panoramaSwiper", {
slidesPerView:'auto',
autoplay:{
  delay: 3000,
  pauseOnMouseEnter:true
},
loop:true,


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

});
var swiperContWidth=0;
var slidesWidth=0;
var slidesToShow = 0;

$(window).on('load resize', function(){
var ww = $(window).width()
if (ww <= 480 && ww > 1) panoramaSwiper.params.slidesPerView = 1;
if (ww <= 1201 && ww > 480) panoramaSwiper.params.slidesPerView = 'auto';
if (ww > 1201) panoramaSwiper.params.slidesPerView = 'auto';

panoramaSwiper.update() 
})


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

//CUSTOM CURSOR FOR SWIPER


var cursor = document.querySelector('.cursor');

var swiperSection = document.getElementById("swiperSectionId")
var cursorImage = document.getElementById("cursor-img")
swiperSection.addEventListener('pointermove', function(e){
var x = e.clientX;
var y = e.clientY;
cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`;
cursor.classList.add('show-cursor');


});


swiperSection.addEventListener('pointerdown', function(e){
cursor.classList.add('cursor-clicked');
cursorImage.style.width  = `84.6px`
cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`;

});

swiperSection.addEventListener('pointerup', function(){
cursor.classList.remove('cursor-clicked');
cursorImage.classList.remove('cursor-smaller');
cursorImage.style.width  = `127px`
cursorImage.style.height  = `auto`
});

swiperSection.addEventListener('mouseleave', function(){
cursor.classList.remove('show-cursor')
})

//WRAP TEXT TO SAME WIDTH

function adjust() {
  $(".swiper-room-desc").not(".swiper-title").each(function() {
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


//Detect touchscreen

$(window).on('load', function(){
  if(window.matchMedia("(pointer: coarse)").matches) {
    $('.cursor').css('display',  'none')
  }
  else{
    $('.cursor').css('display',  'block')
  
  }
})
