

if ($(window).width() <= 576){
    var activityContainerWidth = $('.activityConcertSwiperSlider').width();
                var   activitySlidesPerView = (activityContainerWidth / 352) 
               
}
else{
    var activityContainerWidth = $('.activityConcertSwiperSlider').width();
    var   activitySlidesPerView = (activityContainerWidth / 512) 

}

var activityConcertSwiperSlider = new Swiper(".activityConcertSwiperSlider", {
    slidesPerView: activitySlidesPerView,
    loop: true,
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
    autoplay:{
        delay:3000,
        reverseDirection:false
    },
    on: {
       
        resize:function () {
            if ($(window).width() <= 576){
                var activityContainerWidth = $('.activityConcertSwiperSlider').width();
                var   activitySlidesPerView = (activityContainerWidth / 352) 
            }
            else{
                var activityContainerWidth = $('.activityConcertSwiperSlider').width();
                var   activitySlidesPerView = (activityContainerWidth / 512) 
            
            }
            activityConcertSwiperSlider.params.slidesPerView = activitySlidesPerView
            console.log(activitySlidesPerView)
            activityConcertSwiperSlider.update()

            
        }
    },
   
});
if ($(window).width() <= 576){
    var activity2ContainerWidth = $('.activitySwiper').width();
                var   secondSlidesPerView = (activity2ContainerWidth / 352) 
               
}
else{
    var activity2ContainerWidth = $('.activitySwiper').width();
    var   secondSlidesPerView = (activity2ContainerWidth / 512) 

}
var activitySwiper = new Swiper(".activitySwiper", {
    slidesPerView: secondSlidesPerView,
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
                var activity2ContainerWidth = $('.activityConcertSwiperSlider').width();
                var   secondSlidesPerView = (activity2ContainerWidth / 352) 
            }
            else{
                var activity2ContainerWidth = $('.activityConcertSwiperSlider').width();
                var   secondSlidesPerView = (activity2ContainerWidth / 512) 
            
            }
            activitySwiper.params.slidesPerView = secondSlidesPerView
            activitySwiper.update()

            
        }
    },
   
});

//OTHER ACTIVITIES


var ww = $(window).width();
var containerWidth = $('.otherEntertainment').width();
if ($(window).width() > 576){
    var   entertainmentSlidesPerView = (containerWidth / 441) 
}
else {
    var   entertainmentSlidesPerView = (containerWidth / 356) 
}

var otherEntertainmentSlider = new Swiper(".otherEntertainmentSwiper", {
    loop: true,
    slidesPerView:entertainmentSlidesPerView,
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

    on: {
       
        resize:function () {
            if ($(window).width() <= 576){
                var containerWidth = $('.otherEntertainment').width();
                var   entertainmentSlidesPerView = (containerWidth / 356) 
            }
            else{
                var containerWidth = $('.otherEntertainment').width();
                var   entertainmentSlidesPerView = (containerWidth / 441) 
            
            }
            otherEntertainmentSlider.params.slidesPerView = entertainmentSlidesPerView
             otherEntertainmentSlider.update()

            
        }
    },
});