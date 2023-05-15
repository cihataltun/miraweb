const PubVerticalSlider = document.querySelector('.PubVerticalSlider')
if (PubVerticalSlider) {
    new Swiper(PubVerticalSlider, {
        slidesPerView: 1,
        loop: true,
        freeMode: false,
        autoplay: $('.vertical').length > 1,
    });
}

const BarHorizontalSlider = document.querySelector('.BarHorizontalSlider')
if (BarHorizontalSlider) {
    new Swiper(BarHorizontalSlider, {
        slidesPerView: 1,
        loop: true,
        freeMode: false,
        autoplay: $('.horizontal').length > 1,
    });
}
if ($(window).width() <= 576){
    var containerWidth = $('.barSpecialOffer').width();
    var   barOtherSliderCount = (containerWidth / 345) 
}
else{
    var containerWidth = $('.barSpecialOffer').width();
    var   barOtherSliderCount = (containerWidth / 439) 

}
var barSpecialOffer = new Swiper(".barSpecialOfferSlider", {
    slidesPerView: barOtherSliderCount,
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
                var containerWidth = $('.barSpecialOffer').width();
                var   barOtherSliderCount = (containerWidth / 352) 
            }
            else{
                var containerWidth = $('.barSpecialOffer').width();
                var   barOtherSliderCount = (containerWidth / 439) 
            
            }
             barSpecialOffer.params.slidesPerView = barOtherSliderCount
             barSpecialOffer.update()

            
        }
    },
});




    
//Lightbox
$(document).ready(function() {
    const $obj = lc_lightbox('.lightbox-verticalBar ');
});

$(document).ready(function() {
    const $obj = lc_lightbox('.lightbox-kitkat ');
});
$(document).ready(function() {
    const $obj = lc_lightbox('.lightbox-nespresso ');
});
$(document).ready(function() {
    const $obj = lc_lightbox('.lightbox-chivas ');
});
$(document).ready(function() {
    const $obj = lc_lightbox('.lightbox-hennesy ');
});
$(document).ready(function() {
    const $obj = lc_lightbox('.lightbox-davidoff ');
});
