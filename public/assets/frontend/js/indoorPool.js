const indoorPoolSlider = new Swiper('.indoorPoolSlider', {
    centeredSlides: true,
    loop: true,
    speed: 500,
    slidesPerView: 1,
    spaceBetween: 40,
    autoplay: {
        delay: 3000,
    },
    breakpoints: {

        1250:{
            slidesPerView: 2.5,
            spaceBetween: 370,
        }
    },
});

var ww = $(window).width();
var containerWidth = $('.gallery').width();
if ($(window).width() > 576){
    var   gallerySlidesPerView = (containerWidth / 441) 
}
else {
    var   gallerySlidesPerView = (containerWidth / 356) 
}

var gallerySlider = new Swiper(".gallerySlider", {
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
            slidesPerView: gallerySlidesPerView,
            loop: true,
            allowTouchMove: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        },
        576: {
            slidesPerView: gallerySlidesPerView,
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
                var   gallerySlidesPerView = (containerWidth / 356) 
            }
            else{
                var containerWidth = $('.gallery').width();
                var   gallerySlidesPerView = (containerWidth / 441) 
            
            }
            gallerySlider.params.slidesPerView = gallerySlidesPerView
             gallerySlider.update()

            
        }
    },
});
//Other Spa Services Swiper
if ($(window).width() <= 576){
    var containerWidth = $('.otherActivities').width();
    var   spaOtherSliderCount = (containerWidth / 345) 
}
else{
    var containerWidth = $('.otherActivities').width();
    var   spaOtherSliderCount = (containerWidth / 439) 

}
var otherSpaServices = new Swiper(".otherActivitiesSlider", {
    slidesPerView: spaOtherSliderCount,
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
                var containerWidth = $('.otherActivities').width();
                var   spaOtherSliderCount = (containerWidth / 352) 
            }
            else{
                var containerWidth = $('.otherActivities').width();
                var   spaOtherSliderCount = (containerWidth / 439) 
            
            }
            otherSpaServices.params.slidesPerView = spaOtherSliderCount
            otherSpaServices.update()

            
        }
    },
});



