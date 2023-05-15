
var ww = $(window).width();
var containerWidth = $('.gallery').width();
if ($(window).width() > 576){
    var   aquaparkSlidesPerView = (containerWidth / 441) 
}
else {
    var   aquaparkSlidesPerView = (containerWidth / 356) 
}

var aquaparkSlider = new Swiper(".aquaparkSlider", {
    loop: true,
    autoplay:{
        delay:3000
    },
    pagination: {
        el: '.swiper-pagination',
        renderBullet: function (index, className) {
            return '<span class="' + className + ' "><svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">' +
                '<circle cx="3" cy="3" r="3" fill="#CFCFCF"/>' +
                '</svg></span>';
        },
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        1:{
            slidesPerView: aquaparkSlidesPerView,
            loop: true,
            allowTouchMove: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        },
        576: {
            slidesPerView: aquaparkSlidesPerView,
            loop: true,
            allowTouchMove: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        },
       
    },
    on: {
       
        resize:function () {
            if ($(window).width() <= 576){
                var containerWidth = $('.gallery').width();
                var   aquaparkSlidesPerView = (containerWidth / 356) 
            }
            else{
                var containerWidth = $('.gallery').width();
                var   aquaparkSlidesPerView = (containerWidth / 441) 
            
            }
            aquaparkSlider.params.slidesPerView = aquaparkSlidesPerView
             aquaparkSlider.update()

            
        }
    },
});
if ($(window).width() <= 576){
    var containerWidth = $('.aquaparkSpecialOffer').width();
                var   aquaparkOtherSliderCount = (containerWidth / 352) 
               
}
else{
    var containerWidth = $('.aquaparkSpecialOffer').width();
    var   aquaparkOtherSliderCount = (containerWidth / 439) 

}
var aquaparkSpecialOffer = new Swiper(".aquaparkSpecialOfferSlider", {
    slidesPerView: aquaparkOtherSliderCount,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        renderBullet: function (index, className) {
            return '<span class="' + className + ' "><svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">' +
                '<circle cx="3" cy="3" r="3" fill="#CFCFCF"/>' +
                '</svg></span>';
        },
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },


    on: {
       
        resize:function () {
            if ($(window).width() <= 576){
                var containerWidth = $('.aquaparkSpecialOffer').width();
                var   aquaparkOtherSliderCount = (containerWidth / 352) 
            }
            else{
                var containerWidth = $('.aquaparkSpecialOffer').width();
                var   aquaparkOtherSliderCount = (containerWidth / 439) 
            
            }
             aquaparkSpecialOffer.params.slidesPerView = aquaparkOtherSliderCount
             aquaparkSpecialOffer.update()

            
        }
    },
});



//Lightbox
$(document).ready(function() {
    const $obj = lc_lightbox('.lightbox-aquapark ');
});