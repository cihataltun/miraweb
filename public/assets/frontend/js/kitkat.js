
$(window).on("load resize",function(e){
    var ww = ($(window).width())/100;
var kitkatSpaceBetween = 20 * ww;
 const kitkatSlider = new Swiper('.kitkatSlider', {
    centeredSlides: true,
    loop: true,
    
    speed: 500,
    spaceBetween: kitkatSpaceBetween,
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

kitkatSlider.update()
});