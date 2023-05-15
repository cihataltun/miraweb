
//HOME CONCERT SWIPER

$(document).ready(function () {
    var videoElements = $('.homeConcertSlider').find('video');
    videoElements.each(function () {
        $(this).addClass('videoElement')
    })
    var muted = true;


    $('.videoElement').hover(function () {
        var video = $(this);
        if (muted) {

            $(this).prop('muted', false)
            muted = false

        }
        else {

            $(this).prop('muted', true)
            muted = true

        }





    });

})

//HEADER

$(window).on('scroll load resize', function () {
    var widthOfWindow = $(window).width();
    var currentPosition = $('.hamburgerMenu').css('position');
    var neededScroll = $(window).height()
    var currentScroll = $(window).scrollTop();
    if (widthOfWindow <= 1200) {

       
        if ((currentPosition === 'absolute')) {
            if (currentScroll >= neededScroll) {
                $('#navbar2').css('background', 'rgb(35 48 56 / 70%)');
                $('#navbar2').css('position', 'fixed')
            }
            else{
                $('#navbar2').css('background', 'transparent');

            }


        }
        if ((currentPosition === 'fixed') && (currentScroll < neededScroll)) {
            $('#navbar2').css('background', 'transparent!important');
            $('#navbar2').css('position', 'absolute')
        }

    }
    if ((widthOfWindow > 1200) &&  (currentScroll < neededScroll)){
        $('.navbar').css('background', 'rgb(35 48 56 / 100%)');

    }
})




const concerts = document.querySelector('.homeConcertSlider')
if (concerts) {
    var homeConcertSlider = new Swiper('.homeConcertSlider',
        {
            loop: true,
            centeredSlides: false,

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                renderBullet: function (index, className) {
                    return '<span class="' + className + ' "><svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">' +
                        '<circle cx="3" cy="3" r="3" fill="#CFCFCF"/>' +
                        '</svg></span>';
                },
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: true,

            },
            breakpoints: {
                1: {
                    centeredSlides: true,
                    slidesPerView: 1.2,
                    loop: true,
                    navigation: false,
                },
                576: {
                    spaceBetween: 20,
                    slidesPerView: 2,
                    loop: true,
                    centeredSlides: false,

                    navigation: false,
                },
                835: {
                    spaceBetween: 20,
                    slidesPerView: 3,
                    loop: true,
                    centeredSlides: false,

                    navigation: false,
                },


                1200: {
                    spaceBetween: 20,
                    slidesPerView: 6,
                    loop: true,
                    centeredSlides: true,

                }

            }
        });
}
//HOME HERO SWIPER

var swiperHomeTop = new Swiper('.heroTopSwiper', {
    slidesPerView: 1,
    loop: true,
    autoplay: {
        delay: 3000
    },
    navigation: {
        nextEl: '.heroSwiperNext',
        prevEl: '.heroSwiperPrev',
    },
    breakpoints: {

        576: {
            autoplay: {
                delay: 20000
            },
        }
    }

});
// HOME FIRST (INCLUSIVE) SWIPER

const inclusiveSlider = document.querySelector('.inclusiveSlider');
var inclusiveSliderName = new Swiper(inclusiveSlider, {
    loop: true,
    autoplay: {
        delay: 3000
    },
    pagination: {
        clickable: 'true',
        el: '.swiper-pagination-horizontal',
        renderBullet: function (index, className) {
            return '<span class="' + className + ' "><svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">' +
                '<circle cx="3" cy="3" r="3" fill="#CFCFCF"/>' +
                '</svg></span>';
        },
    },
    breakpoints: {
        1: {
            slidesPerView: 1,
            spaceBetween: 0
        },
        835: {
            slidesPerView: 1.5,
            spaceBetween: 20
        }
    },
    navigation: {
        nextEl: '.inclusive-next',
        prevEl: '.inclusive-prev',
    },

});



//HOME CHILDREN SWIPER

const childrenSwiper = document.querySelector('.childrenSlider')
var childrenSwiperName = new Swiper(childrenSwiper, {
    loopedSlides: 7,
    autoplay: {
        delay: 3000
    },
    initialSlide: 4,

    breakpoints: {
        1: {
            slidesPerView: 1,
            spaceBetween: 0,
            centeredSlides: false
        },
        576: {
            slidesPerView: 1.5,
            centeredSlides: true,
            spaceBetween: 30
        },
        1200: {
            slidesPerView: 1.75,
            centeredSlides: true,
            spaceBetween: 30
        }
    },
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
        nextEl: '#children-next',
        prevEl: '#children-prev',
    },

});


//HOME SPECIAL OFFERS SLIDER
if ($(window).width() <= 576) {
    var containerWidth = $('.homeSpecialOffer').width();
    var homeOtherSliderCount = (containerWidth / 345)
}
else {
    var containerWidth = $('.homeSpecialOffer').width();
    var homeOtherSliderCount = (containerWidth / 439)

}
const specialOfferSlider = document.querySelector('.specialOfferSlider')

var homeSpecialOffer = new Swiper(specialOfferSlider, {
    slidesPerView: homeOtherSliderCount,
    initialSlide: 1,
    loop: true,

    pagination: {
        el: '.swiper-pagination',
        renderBullet: function (index, className) {
            return '<span class="' + className + ' "><svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">' +
                '<circle cx="3" cy="3" r="3" fill="#CFCFCF"/>' +
                '</svg></span>';
        },
    },
    on: {
        sliderMove: function () {
            $('.radialBgImg').css('visibility', 'hidden')

        },
        slideChange: function () {
            $('.radialBgImg').css('visibility', 'visible')
        }
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    on: {

        resize: function () {
            if ($(window).width() <= 576) {
                var containerWidth = $('.homeSpecialOffer').width();
                var homeOtherSliderCount = (containerWidth / 345)
            }
            else {
                var containerWidth = $('.homeSpecialOffer').width();
                var homeOtherSliderCount = (containerWidth / 439)

            }
            homeSpecialOffer.params.slidesPerView = homeOtherSliderCount
            homeSpecialOffer.update()


        },

    },
});



//HOME GASTRONOMY SWIPER
const gastronomySlider = document.querySelector('.gastronomySwiper')
if (gastronomySlider) {
    new Swiper(gastronomySlider, {
        slidesPerView: 1,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: true
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
    });
}
//HOME SERVICES SWIPER
const homeServiceSlider = document.querySelector('.homeServicesSlider')
if (homeServiceSlider) {
    new Swiper(homeServiceSlider, {
        slidesPerView: 1,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-nextSlide',
            prevEl: '.swiper-button-previous',
        },
    });
}
// HOME ROOM SWIPER

var ww = $(window).width();
var roomContainerWidth = $('.Roomswiper').width();
if ($(window).width() > 576) {
    var roomSlidesPerView = (roomContainerWidth / 441)
}
else {
    var roomSlidesPerView = (roomContainerWidth / 356)
}



var roomSwiper = new Swiper('.Roomswiper', {
    loop: true,
    slidesPerView: roomSlidesPerView,
    initialSlide: 0,
    autoplay: {
        delay: 4000
    },
    breakpoints: {
        1: {
            autoplay: {
                delay: 4000
            }
        },
        1600: {
            autoplay: false
        }
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
        nextEl: '#room-swiper-next',
    },
    on: {

        resize: function () {
            if ($(window).width() <= 576) {
                var roomContainerWidth = $('.Roomswiper').width();
                var roomSlidesPerView = (roomContainerWidth / 356);
            }
            else {
                var roomContainerWidth = $('.Roomswiper').width();
                var roomSlidesPerView = (roomContainerWidth / 441)

            }
            roomSwiper.params.slidesPerView = roomSlidesPerView
            roomSwiper.update()


        }
    },

});


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
// HOME TRAVEL POINTS SWIPER
var travelSliderSpaceBetween;
if (ww > 1) {
    travelSliderSpaceBetween = (ww / 100) * 5.72
}

if (ww > 1920) {
    travelSliderSpaceBetween = 110
}

const travelSlider = document.querySelector('.travelSlider')
if (travelSlider) {
    new Swiper(travelSlider, {
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
            delay: 2000,
        },
        breakpoints: {
            1: {
                slidesPerView: 1,

            },
            576: {
                slidesPerView: 2,

            },
            768: {
                slidesPerView: 3,

            },
            1024: {
                slidesPerView: 3,

            },
            1281: {
                slidesPerView: 4,

            }
        }
    });
}

// FLATPICKR DATE SELECTOR CODE


var now = new Date()
var todaysDate = now.toISOString().split('T')[0];
var tomorrowsDate = new Date();
tomorrowsDate.setDate(tomorrowsDate.getDate() + 1);
tomorrowsDate.toISOString().split('T')[0];
var dateStart = todaysDate;
var dateEnd;
var checkin = document.querySelector('#checkin')
var checkout = document.querySelector('#checkout')
var pageLanguage = window.location.href;
pageLanguage = pageLanguage.substr(pageLanguage.length - 2);
var localeText;
if (pageLanguage === 'ru') {
    localeText = {
        firstDayOfWeek: 1,
        weekdays: {
            shorthand: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
            longhand: ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
        },
        months: {
            shorthand: ['Янв', 'Фев', 'Март', 'Апр', 'Май', 'Июнь', 'Июль', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
            longhand: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
        },
    }
}
if (pageLanguage === 'tr') {
    localeText = {
        firstDayOfWeek: 1,
        weekdays: {
            longhand: ['Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi'],
            shorthand: ['Paz', 'Pzt', 'Sal', 'Çar', 'Per', 'Cum', 'Cmt']
        },
        months: {
            longhand: ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'],
            shorthand: ['Oca', 'Şub', 'Mar', 'Nis', 'May', 'Haz', 'Tem', 'Ağu', 'Eyl', 'Eki', 'Kas', 'Ara']
        },
    }
}
if (pageLanguage === 'de') {
    localeText = {
        firstDayOfWeek: 1,
        weekdays: {
            shorthand: ["So", "Mo", "Di", "Mi", "Do", "Fr", "Sa"],
            longhand: [
                "Sonntag",
                "Montag",
                "Dienstag",
                "Mittwoch",
                "Donnerstag",
                "Freitag",
                "Samstag",
            ],
        },

        months: {
            shorthand: [
                "Jan",
                "Feb",
                "Mär",
                "Apr",
                "Mai",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Okt",
                "Nov",
                "Dez",
            ],
            longhand: [
                "Januar",
                "Februar",
                "März",
                "April",
                "Mai",
                "Juni",
                "Juli",
                "August",
                "September",
                "Oktober",
                "November",
                "Dezember",
            ],
        },
    }
}
if (pageLanguage === 'en') {
    localeText = {
        weekdays: {
            shorthand: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            longhand: [
                "Sunday",
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
            ],
        },
        months: {
            shorthand: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            longhand: [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December",
            ],
        },
    }
}
var selectedDateText = ''

//Flatpickr start date picker
var startPicker = flatpickr("#checkin", {

    dateFormat: "Y-m-d",
    minDate: todaysDate,
    altInputClass: 'selectedDateFirst',
    defaultDate: todaysDate,
    locale: localeText,
    onReady: function (selectedDates, dateStr, instance) {
        tomorrowsDate = instance.formatDate(tomorrowsDate, "Y-m-d")

        $('.flatpickr-calendar').addClass("firstCalendar");


    },

    onChange: function (selectedDates, dateStr, instance) {
        var endDateToSet = selectedDates[0]
        endPicker.set('minDate', instance.formatDate(selectedDates[0], "Y-m-d"));
        endPicker.setDate(instance.formatDate(endDateToSet, "Y-m-d"));
        dateStart = instance.formatDate(selectedDates[0], "Y-m-d");
        dateEnd = instance.formatDate(selectedDates[0], "Y-m-d");
        $('.firstCalendar').addClass('active')



    },
    onClose: function (selectedDates, dateStr, instance) {
        dateStart = instance.formatDate(selectedDates[0], "Y-m-d");
        selectedDateText = $('.flatpickr-day.selected').html()
        endPicker.open();
        $('.firstCalendar').removeClass('active')
        $('.bookNow').attr("href", 'https://portnature.rezervasyonal.com/?currency=TRY&language=en&Checkin=' + dateStart + '&Checkout=' + dateEnd + '&Adult=3');

    }


});

//Flatpickr end date picker

var endPicker = flatpickr("#checkout", {
    dateFormat: "Y-m-d",
    defaultDate: tomorrowsDate,
    minDate: todaysDate,
    locale: localeText,
    onReady: function (selectedDates, dateStr, instance) {
        $('.bookNow').attr("href", 'https://portnature.rezervasyonal.com/?currency=TRY&language=en&Checkin=' + todaysDate + '&Checkout=' + tomorrowsDate + '&Adult=3');
        $('.flatpickr-calendar').addClass("secondCalendar");
    },
    onOpen: function (selectedDates, dateStr, instance) {
        $('#checkout').html(dateEnd)
        $('.secondCalendar').addClass('active')
    },
    onClose: function (selectedDates, dateStr, instance) {
        dateEnd = instance.formatDate(selectedDates[0], "Y-m-d");
        $(".flatpickr-day").each(function () {
            if ($(this).html() === selectedDateText) {
                $(this).addClass('firstSelectedDay')
            }
        })
        $('#checkout').html(dateEnd)
        $('.bookNow').attr("href", 'https://portnature.rezervasyonal.com/?currency=TRY&language=en&Checkin=' + dateStart + '&Checkout=' + dateEnd + '&Adult=3')
        $('.guestMenu').css('display', 'flex')
        $('.guests').addClass('active')
        $('.secondCalendar').removeClass('active')

    }
});

const featureMoreButton = document.querySelector('.collapseView');
const showAll = document.querySelector('.showAllFeature')
const featureGrid = document.querySelector('.featureGrid')
const innerWidth = window.innerWidth;
if (showAll) {
    showAll.addEventListener('click', function () {
        featureMoreButton.setAttribute('style', 'display:flex')
        showAll.setAttribute('style', 'display:none')
        if (innerWidth < 576) {
            featureGrid.setAttribute('style', 'margin-bottom:0px')
        } else featureGrid.setAttribute('style', 'margin-bottom:60px')

    })
}

let guest = document.querySelector('.guests')
let guestmenu = document.querySelector('.guestMenu')
let booking = document.querySelector('.booking')
let body = document.querySelector('body')
if (guest) {
    body.addEventListener('click', function (e) {
        if ($(e.target).hasClass('flatpickr-input')) {
            guestmenu.setAttribute('style', 'display:none');
            $('.guests').removeClass('active')
            $('.bookNow').attr("href", 'https://portnature.rezervasyonal.com/?currency=TRY&language=en&Checkin=' + dateStart + '&Checkout=' + dateEnd + '&Adult=' + adult + linkVariablePart)
        }
        else if (($(e.target).hasClass('guests')) || ($(e.target).hasClass('increment')) || ($(e.target).hasClass('decrement'))) {
            guestmenu.setAttribute('style', 'display:flex')
            $('.guests').addClass('active')
        }
        else if (!($(e.target).hasClass('guests')) && (($('.guestMenu').css('display')) == 'flex') && !($(e.target).hasClass('increment')) && !($(e.target).hasClass('decrement'))) {
            guestmenu.setAttribute('style', 'display:none');
            $('.guests').removeClass('active')
            $('.bookNow').attr("href", 'https://portnature.rezervasyonal.com/?currency=TRY&language=en&Checkin=' + dateStart + '&Checkout=' + dateEnd + '&Adult=' + adult + linkVariablePart)



        }


    })
    var adult = 3;
    var adultCount;
    var childCount;
    document.querySelector("#adultCount").innerText = adult;

    function adultIncrement() {
        if (adult < 5)
            adult = adult + 1;
        adultCount = adult
        document.querySelector("#adultCount").innerText = adult;
        bookingLinkChange()

    }

    function adultDecrement() {
        if (adult > 1 && adult < 6) {
            adult = adult - 1;
            adultCount = adult
        }
        document.querySelector("#adultCount").innerText = adult;
        bookingLinkChange()
    }

    var child = 0;
    document.querySelector("#childCount").innerText = child;

    function childIncrement() {
        if (child < 3) {
            child = child + 1;
            document.querySelector("#childCount").innerText = child;
            childCount = child;
            bookingLinkChange()
            if (child === 1) {
                $('.childAgeCounter1').css('display', 'flex')
                $('.childAgeCounter2').css('display', 'none')
                $('.childAgeCounter3').css('display', 'none')
            }
            if (child === 2) {
                $('.childAgeCounter1').css('display', 'flex')
                $('.childAgeCounter2').css('display', 'flex')
                $('.childAgeCounter3').css('display', 'none')
            }
            if (child === 3) {
                $('.childAgeCounter1').css('display', 'flex')
                $('.childAgeCounter2').css('display', 'flex')
                $('.childAgeCounter3').css('display', 'flex')
            }
            if (child === 0) {
                $('.childAgeCounter1').css('display', 'none')
                $('.childAgeCounter2').css('display', 'none')
                $('.childAgeCounter3').css('display', 'none')
                $('.bookNow').attr("href", 'https://portnature.rezervasyonal.com/?currency=TRY&language=en&Checkin=' + dateStart + '&Checkout=' + dateEnd + '&Adult=' + adult)

            }
        }

    }

    function childDecrement() {
        if (child <= 0) {
            child = 0
            if (child === 0) {
                $('.childAgeCounter1').css('display', 'none')
                $('.childAgeCounter2').css('display', 'none')
            }
        } else {
            child = child - 1;
            childCount = child
            if (child === 1) {
                $('.childAgeCounter1').css('display', 'flex')
                $('.childAgeCounter2').css('display', 'none')
            }
            if (child === 2) {
                $('.childAgeCounter1').css('display', 'flex')
                $('.childAgeCounter2').css('display', 'flex')
            }
            if (child === 0) {
                $('.childAgeCounter1').css('display', 'none')
                $('.childAgeCounter2').css('display', 'none')
            }
        }
        bookingLinkChange()
        document.querySelector("#childCount").innerText = child;
    }
}
var linkVariablePart = ''
function bookingLinkChange() {
    linkVariablePart = adult + '&ChildAges=' + child1Age + '+' + child2Age;
    if (child === 0) {
        linkVariablePart = ''
    }
    if (child === 1) {
        linkVariablePart = adult + '&ChildAges=' + child1Age
    }
    if (child === 2) {
        linkVariablePart = adult + '&ChildAges=' + child1Age + '+' + child2Age
    }
    if (child === 3) {
        linkVariablePart = adult + '&ChildAges=' + child1Age + '+' + child2Age + '+' + child3Age
    }

    $('.bookNow').attr("href", 'https://portnature.rezervasyonal.com/?currency=TRY&language=en&Checkin=' + dateStart + '&Checkout=' + dateEnd + '&Adult=' + adultCount + linkVariablePart)

}
var child1Age = 0;
var child2Age = 0;
var child3Age = 0;
function childAge1Increment() {
    if ((child1Age < 14) && (child1Age >= 0)) {
        child1Age = child1Age + 1;
        $('#childAge1Count').html(child1Age);


    }
    bookingLinkChange()

}

function childAge1Decrement() {
    if (child1Age > 0) {
        child1Age = child1Age - 1;
        $('#childAge1Count').html(child1Age)

    }
    bookingLinkChange()
}
function childAge2Increment() {
    if (child2Age < 14 && child2Age >= 0) {
        child2Age = child2Age + 1;
        $('#childAge2Count').html(child2Age)

    }
    bookingLinkChange()

}

function childAge2Decrement() {

    if (child2Age > 0) {
        child2Age = child2Age - 1;
        $('#childAge2Count').html(child2Age)


    }
    bookingLinkChange()
}
function childAge3Increment() {
    if (child3Age < 14 && child3Age >= 0) {
        child3Age = child3Age + 1;
        $('#childAge3Count').html(child3Age)

    }
    bookingLinkChange()

}

function childAge3Decrement() {

    if (child3Age > 0) {
        child3Age = child3Age - 1;
        $('#childAge3Count').html(child3Age)


    }
    bookingLinkChange()
}




//WRAP TEXT TO SAME WIDTH

function adjust() {
    $(" .subChildrenText, .serviceDetail p").not(".swiper-title").each(function () {
        // Create an invisible clone of the element
        var clone = $(this).clone().css({
            visibility: 'hidden',
            width: 'auto'
        }).appendTo($(this).parent());

        // Get the bigger width of the two elements to be our starting point
        var goodWidth = Math.max($(this).width(), $(clone).width());
        var testedWidth = goodWidth;
        var initialHeight = $(clone).height();

        // Make the clone narrower until it wraps again
        while ($(clone).height() == initialHeight && testedWidth > 0) {
            goodWidth = testedWidth;
            testedWidth--;
            $(clone).width(testedWidth);
        }

        // Set original element's width to last one before wrap
        $(this).width(goodWidth);

        // Remove the clone element
        $(clone).remove();
    });
}

$(window).resize(adjust);
$(document).ready(function () {
    adjust();
});

