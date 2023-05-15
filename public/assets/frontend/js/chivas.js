
$(window).on("load resize",function(e){
    var ww = ($(window).width())/100;
var chivasSpaceBetween = 20 * ww;
 const chivasSlider = new Swiper('.chivasSlider', {
    centeredSlides: true,
    loop: true,
    
    speed: 500,
    spaceBetween: chivasSpaceBetween,
    slidesPerView: 1,
    autoplay: {
        delay: 3000,
        disableOnInteraction:true
    },
    breakpoints: {
        1:{
            slidesPerView:1,
            spaceBetween:0
        },
        1250:{
            slidesPerView: 2.5,
        }
    },
});

chivasSlider.update()
});



const chivasVerticalSlider = new Swiper('.chivasVerticalSlider', {
    centeredSlides: true,
    loop: true,
    slidesPerView: 1,
    autoplay: $('.vertical').length > 1,
});


//Lightbox codes
$(document).ready(function() {
    const $obj = lc_lightbox('.lightbox-chivas ');
});