

// SPECIAL OFFERS SLIDER
if ($(window).width() <= 576){
    var containerWidth = $('.otherActivities').width();
    var   otherActivitiesSliderCount = (containerWidth / 352) 
}
else{
    var containerWidth = $('.otherActivities').width();
    var   otherActivitiesSliderCount = (containerWidth / 439) 

}
var otherActivitiesSlider = new Swiper(".otherActivitiesSlider", {
    slidesPerView: otherActivitiesSliderCount,
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
                var   otherActivitiesSliderCount = (containerWidth / 352) 
            }
            else{
                var containerWidth = $('.otherActivities').width();
                var   otherActivitiesSliderCount = (containerWidth / 439) 
            
            }
            otherActivitiesSlider.params.slidesPerView = otherActivitiesSliderCount
             otherActivitiesSlider.update()

            
        }
    },
});


    var concertsSlider = new Swiper('.concertsSlider', {
        slidesPerView: 1.87,
        centeredSlides:true,
        loop:true,
        autoplay: {
            delay:2000
        },

    });
    var swiperContWidth=0;
    var slidesWidth=0;
    var slidesToShow = 0;


    $(window).on("resize load", function () {
        var ww = $(window).width()
        var swiperContWidth=parseInt($('.concertsSlider').css('width'), 10);
        var slidesWidth=parseInt($('.concertsSliderImg').css('width'), 10);
        var slidesToShow = (swiperContWidth / slidesWidth) - 0.05;
        if (ww > 1) concertsSlider.params.slidesPerView = slidesToShow;

        concertsSlider.update()
    }).resize();

//CONCERT SPECIAL GUESTS SWIPER
var ww = $(window).width();

if ($(window).width() > 576){
    var containerWidth1 = $('.concertGallerySlider').width();
    var   concertGuestSlidesPerView = (containerWidth1 / 441) 
}
else {
    var containerWidth1 = $('.concertGallerySlider').width();
    var   concertGuestSlidesPerView = (containerWidth1 / 356) 
}

var guestsConcertSwiper = new Swiper(".concertSwiperSlider", {
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
            slidesPerView: concertGuestSlidesPerView,
            loop: true,
            allowTouchMove: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        },
        576: {
            slidesPerView: concertGuestSlidesPerView,
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
                var containerWidth1 = $('.concertGallerySlider').width();
                var   concertGuestSlidesPerView = (containerWidth1 / 356) 
            }
            else{
                var containerWidth1 = $('.concertGallerySlider').width();
                var   concertGuestSlidesPerView = (containerWidth1 / 441) 
            
            }
            guestsConcertSwiper.params.slidesPerView = concertGuestSlidesPerView
            guestsConcertSwiper.update()

            
        }
    },
});

//FLATPICKR CONCERTS

const checkin = document.querySelector('#concertsDate')
if (checkin) {
    let calendar = flatpickr('#concertsDate', {
        minDate: "today",
        dateFormat: "d-m",
        altFormat: "DD-MM",
        inline:true
    });
}


