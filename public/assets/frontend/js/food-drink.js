const topSlider = document.querySelector('.topSlider')
if (topSlider) {
    new Swiper(topSlider, {
        spaceBetween: 25,
        autoplay:{
            delay:2000
        },
        slidesPerView: 1.05,
        loop: true,
        initialSlide:1,
        centeredSlides:true,
        breakpoints: {
            576: {
                slidesPerView: 1.5,
                initialSlide: 1,
                spaceBetween:25,
                centeredSlides:true,
            },
            880: {
                spaceBetween: 25,
                slidesPerView: 3.32,
                initialSlide: 0,
                centeredSlides:false,
            }
        },
    });
}
// HOME BRANDS SWIPER
const homeBrands = document.querySelector('.homeBrandSlider')
if (homeBrands) {
    new Swiper(homeBrands, {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            renderBullet: function (index, className) {
                return '<span class="' + className + ' "><svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">' +
                    '<circle cx="3" cy="3" r="3" fill="#CFCFCF"/>' +
                    '</svg></span>';
            },
        },
        autoplay: {
            delay: 8000,
        },
        breakpoints: {
            1: {
                spaceBetween: 30,
                slidesPerView: 2,
                loop: true,
                allowTouchMove: true,
                navigation: false,
            },
            576: {
                spaceBetween: 60,
                slidesPerView: 2,
                loop: true,
                allowTouchMove: true,
                navigation: false,
            },
            990: {
                spaceBetween: 60,
                slidesPerView: 4,
                loop: true,
                allowTouchMove: true,
                autoplay: {
                    delay: 20000
                },
            },

            1200: {
                spaceBetween: 60,
                slidesPerView: 5,
                loop: true,
                allowTouchMove: false,
                autoplay: {
                    delay: 8000
                },
            },

        }
    });
}

//Lightbox
$(document).ready(function() {
    const $obj = lc_lightbox('.lightbox-alacarte ');
});
$(document).ready(function() {
    const $obj = lc_lightbox('.lightbox-bar ');
});
$(document).ready(function() {
    const $obj = lc_lightbox('.lightbox-main ');
});