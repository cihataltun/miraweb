
$(window).on("load resize",function(e){
    var ww = ($(window).width())/100;
var hennesySpaceBetween = 20 * ww;
 const hennesySlider = new Swiper('.hennesySlider', {
    centeredSlides: true,
    loop: true,
    
    speed: 500,
    spaceBetween: hennesySpaceBetween,
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

hennesySlider.update()
});

const hennesyVerticalSlider = new Swiper('.hennesyVerticalSlider', {
    centeredSlides: true,
    loop: true,
    slidesPerView: 1,
    autoplay: {
        delay: 3000,
    },
});
//Lightbox
$(document).ready(function() {
    const $obj = lc_lightbox('.lightbox-hennesy ');
});