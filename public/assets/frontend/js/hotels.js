//Top Swiper

const hotelsTopSwiper = new Swiper('.hotel-page-swiper-top', {
   loop: true,                 
   slidesPerView:1,       
   allowTouchMove:true,
   autoplay: {                        
       delay: 2000,  
   },       

   navigation: {                      
       nextEl: ".swiper-button-next",
       prevEl: ".swiper-button-prev",
   },
})

//Bottom Swiper

const hotelsBottomSwiper = new Swiper('.hotel-page-swiper-bottom', {
   loop: true,                      
   slidesPerView:1,    
   allowTouchMove:true,

   autoplay: {                        
       delay: 2000,  
   },       
  
   navigation: {                       
       nextEl: ".swiper-button-next",
       prevEl: ".swiper-button-prev",
   },
})

//Scroll to top button function
function scrollToTop() {

    document.body.scrollTo({top: 0, behavior: 'smooth'});
    
    } 

//Lightbox codes
$(document).ready(function(){
    $('.hotel-page-top-lightbox').magnificPopup({
        type: 'image',
      mainClass: 'my-mfp-slide-bottom', 
      gallery:{
                enabled:true,
                arrowMarkup: '<div class="arrow arrow-%dir%"><div class="arrow-top"></div><div class="arrow-bottom"></div></div>', // markup of an arrow button

            },
    

    
    });
    $('.hotel-page-bottom-lightbox').magnificPopup({
        type: 'image',
      mainClass: 'my-mfp-slide-bottom', 
      gallery:{
                enabled:true,
                arrowMarkup: '<div class="arrow arrow-%dir%"><div class="arrow-top"></div><div class="arrow-bottom"></div></div>', // markup of an arrow button

            },
    

    
    });
    });

    var magnificPopup = $.magnificPopup.instance;

$('body').on('click', '.arrow-next', function() {
    magnificPopup.next();
});

$('body').on('click', '.arrow-prev', function() {
    magnificPopup.prev();
});