//FLAVOURS HOVER SECTION JS
const allRestaurants = gsap.utils.toArray(".restaurant-item");
const restaurantImageWrap = document.querySelector(".restaurant-img-wrap");
const restaurantImage = document.querySelector(".restaurant-img");

function initRestaurants() {
  allRestaurants.forEach((link) => {
    link.addEventListener("mouseenter", restaurantHover);
    link.addEventListener("mouseleave", restaurantHover);
    link.addEventListener("mousemove", moveRestaurantImage);
  });
}

function moveRestaurantImage(e) {
    let vw = $(window).width()*0.01
    let vwHorizontal = 18*vw;
    let vwVertical = 15*vw;
  let xpos = e.clientX  - (Math.min(vwHorizontal, 346));
  let ypos = e.clientY  - (Math.min(vwVertical, 300));
  const tl = gsap.timeline();
  tl.to(restaurantImageWrap, {
    x: xpos,
    y: ypos
  });
}

function restaurantHover(e) {
  if (e.type === "mouseenter") {
    const targetImage = e.target.dataset.img;

    const t1 = gsap.timeline();
    t1.set(restaurantImage, {
      backgroundImage: `url(${targetImage})`,
    }).to(restaurantImageWrap, {
      duration: .5,
      autoAlpha: 1
    });
  } else if (e.type === "mouseleave") {
    const tl = gsap.timeline();
    tl.to(restaurantImageWrap, {
      duration: 0.5,
      autoAlpha: 0
    });
  }
}

function init() {
  initRestaurants();
}

window.addEventListener("load", function () {
    $('.section-3').css('display', 'block')
    $('.flavours-grid-layout').css('display', 'none')

  init();
});
//LAYOUT SELECTOR BUTTONS
  function lineSelector(){
    if ($(window).width() > 1024){
      $('.section-3').css('display', 'block')
      $('.flavours-grid-layout').css('display', 'none')
      $('#content').css('scroll-snap-type', 'y mandatory')
      $('#gridSelector').removeClass('layout-active')
      $('#lineSelector').addClass('layout-active')
    }
  
    
  }
  function gridSelector(){
    if ($(window).width() > 1024){
    $('.section-3').css('display', 'none')
    $('.flavours-grid-layout').css('display', 'flex')
    $('#content').css('scroll-snap-type', 'none')
    $('#lineSelector').removeClass('layout-active')
    $('#gridSelector').addClass('layout-active')

  }
}

$(window).on("load ",function(e){
  if ($(window).width() > 1024){
    $('#gridSelector').removeClass('layout-active')
    $('#lineSelector').addClass('layout-active')
  
  }
  else{
    $('#lineSelector').removeClass('layout-active')
    $('#gridSelector').addClass('layout-active')
  
  }

})


$(window).on("load resize ",function(e){
  

if ($(window).width() > 1024){
  function lineSelector(){
    $('.section-3').css('display', 'block')
    $('.flavours-grid-layout').css('display', 'none')
    $('#content').css('scroll-snap-type', 'y mandatory')
}
function gridSelector(){
    $('.section-3').css('display', 'none')
    $('.flavours-grid-layout').css('display', 'flex')
    $('#content').css('scroll-snap-type', 'none')
}
}
else if ($(window).width() < 768){
  $('.section-3').css('display', 'none')
  $('.flavours-grid-layout').css('display', 'none')
  $('#content').css('scroll-snap-type', 'none')

}
else{
  $('.section-3').css('display', 'none')
  $('.flavours-grid-layout').css('display', 'flex')
  $('#content').css('scroll-snap-type', 'none')

}
});


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


//MAIN SWIPER
var mainSwiper = new Swiper(".swiper-container-main", {
  slidesPerView:1.282,
  loop:true,
  autoplay:{
    delay:3000
  },
 

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
  var swiperTitle = ''
  var swiperDesc = ''
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

  })
   //CHANGE SLIDER DESC
   $('.deluxe-swiper-desc').children('span').each(function () {
    if ($(this).hasClass('deluxe-desc-' + currentSlide)){
      $(this).css('display', 'block');
    }
    else{
      $(this).css('display', 'none');

    }

})
})