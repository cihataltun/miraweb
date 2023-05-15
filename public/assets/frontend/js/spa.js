if ($(window).width() <= 576){
    var firstWidth = $('.spaFirstSlider').width();
                var   firstSlidesPerView = (firstWidth / 352) 
               
}
else{
    var firstWidth = $('.spaFirstSlider').width();
    var   firstSlidesPerView = (firstWidth / 512) 

}
const spaFirstSwiperSlider = new Swiper(".spaFirstSwiperSlider", {
    slidesPerView: firstSlidesPerView,

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
                var firstWidth = $('.spaFirstSlider').width();
                var   firstSlidesPerView = (firstWidth / 352) 
            }
            else{
                var firstWidth = $('.spaFirstSlider').width();
                var   firstSlidesPerView = (firstWidth / 512) 
            
            }
            spaFirstSwiperSlider.params.slidesPerView = firstSlidesPerView
            spaFirstSwiperSlider.update()

            
        }
    },

});
if ($(window).width() <= 576){
    var secondWidth = $('.spaSecondSlider').width();
                var   secondSlidesPerView = (secondWidth / 352) 
               
}
else{
    var firstWidth = $('.spaSecondSlider').width();
    var   secondSlidesPerView = (firstWidth / 512) 

}
const spaSecondSwiperSlider = new Swiper(".spaSecondSwiperSlider", {
    slidesPerView: secondSlidesPerView,
    loop: true,
    autoplay:{
        delay:3000
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
                var secondWidth = $('.spaSecondSlider').width();
                var   secondSlidesPerView = (secondWidth / 352) 
            }
            else{
                var secondWidth = $('.spaSecondSlider').width();
                var   secondSlidesPerView = (secondWidth / 512) 
            
            }
            spaSecondSwiperSlider.params.slidesPerView = secondSlidesPerView
            spaSecondSwiperSlider.update()

            
        }
    },
});

