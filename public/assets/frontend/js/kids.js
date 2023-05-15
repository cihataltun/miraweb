if ($(window).width() <= 576){
    var activityContainerWidth = $('.childrenActivitySlider').width();
                var   activitySlidesPerView = (activityContainerWidth / 352) 
               
}
else{
    var activityContainerWidth = $('.childrenActivitySlider').width();
    var   activitySlidesPerView = (activityContainerWidth / 512) 

}

var activitySlider1 = new Swiper(".activitySlider", {
    slidesPerView: activitySlidesPerView,
    loop: true,
    autoplay:{
        delay:3000,
        reverseDirection:false
    },
    pagination: {
        clickable: 'true',
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
                var activityContainerWidth = $('.childrenActivitySlider').width();
                var   activitySlidesPerView = (activityContainerWidth / 352) 
            }
            else{
                var activityContainerWidth = $('.childrenActivitySlider').width();
                var   activitySlidesPerView = (activityContainerWidth / 512) 
            
            }
            activitySlider1.params.slidesPerView = activitySlidesPerView
            console.log(activitySlidesPerView)
            activitySlider1.update()

            
        }
    },
   
});
if ($(window).width() <= 576){
    var foodContainerWidth = $('.childrenActivitySlider').width();
                var   foodSlidesPerView = (foodContainerWidth / 352) 
               
}
else{
    var foodContainerWidth = $('.childrenFoodSlider').width();
    var   foodSlidesPerView = (foodContainerWidth / 512) 

}

var childrenFoodSlider1 = new Swiper(".childrenFoodSlider", {
    slidesPerView: foodSlidesPerView,
    loop: true,
    autoplay:{
        delay:3000,
    },
    pagination: {
        clickable: 'true',
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
                var foodContainerWidth = $('.childrenFoodSlider').width();
                var   foodSlidesPerView = (foodContainerWidth / 352) 
            }
            else{
                var foodContainerWidth = $('.childrenFoodSlider').width();
                var   foodSlidesPerView = (foodContainerWidth / 512) 
            
            }
            childrenFoodSlider1.params.slidesPerView = foodSlidesPerView
            childrenFoodSlider1.update()

            
        }
    },
   
});

// SPECIAL OFFERS SLIDER
if ($(window).width() <= 576){
    var containerWidth = $('.kidsSpecialOffer').width();
    var   kidsSpecialSliderCount = (containerWidth / 352) 
}
else{
    var containerWidth = $('.kidsSpecialOffer').width();
    var   kidsSpecialSliderCount = (containerWidth / 439) 

}
var kidsSpecialOfferSlider = new Swiper(".specialOfferSlider", {
    slidesPerView: kidsSpecialSliderCount,
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
                var containerWidth = $('.kidsSpecialOffer').width();
                var   kidsSpecialSliderCount = (containerWidth / 352) 
            }
            else{
                var containerWidth = $('.kidsSpecialOffer').width();
                var   kidsSpecialSliderCount = (containerWidth / 439) 
            
            }
             kidsSpecialOfferSlider.params.slidesPerView = kidsSpecialSliderCount
             kidsSpecialOfferSlider.update()

            
        }
    },
});




//Lightbox
$(document).ready(function() {
    const $obj = lc_lightbox('.lightbox-food ');
});
$(document).ready(function() {
    const $obj = lc_lightbox('.lightbox-activity ');
});
$(document).ready(function() {
    const $obj = lc_lightbox('.lightbox-carousel ');
});
