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




//Opportunities swiper



var opportuintySwiper = new Swiper('.opportunity-swiper', {
    slidesPerView: 3,
    spaceBetween:30,
    
    breakpoints: {  
        1:{

            slidesPerView:1.2,
            spaceBetween:20
        },
        576:{
            slidesPerView:2.2,
            spaceBetween:20
        },
        835:{
            slidesPerView:3,
            spaceBetween:30
        }

    },
    loop: true,
});

// Brand Swiper



var brandSwiper = new Swiper('.brand-swiper', {
    slidesPerView: 3,
    centeredSlides:true,
    breakpoints: {
     1:{
        slidesPerView: 1.5
     },
     576:{
        slidesPerView: 2

     },
     1200:{
        slidesPerView: 2.5

     },
     1500:{
        slidesPerView: 3

     }
    },
    autoplay:{
        delay:1500,
        pauseOnMouseEnter: true,
    },
    loop: true,
});

//Offers rooms swiper



var roomsSwiper = new Swiper('.offers-rooms-swiper', {
    slidesPerView: 'auto',
    spaceBetween:30,
    autoplay:{
        delay:1500,
        pauseOnMouseEnter: true,

    },
    breakpoints:{
        576:{
            spaceBetween:20
        },
        835:{
            spaceBetween:30
        }
    },
    loop: true,
    scrollbar:{
        el:'.swiper-scrollbar',
        draggable:true,
        dragSize:100
        
    },
    navigation:{
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev',
    },
});


//Flight swiper



var flightSwiper = new Swiper('.flight-swiper', {
    slidesPerView: 5,
    spaceBetween:40,
    autoplay:{
        delay:2000,
        pauseOnMouseEnter: true,

        
    },
    breakpoints: {
        1:{
            slidesPerView:1,
            centeredSlides:true,
            spaceBetween:0
        },
        350:{
            slidesPerView:2,
            centeredSlides:false,
            spaceBetween:10
        },
        576:{
            slidesPerView:3,
            spaceBetween:20

        },
        834:{
            spaceBetween:20,
            slidesPerView: 4
        },
        1400:{
            spaceBetween:40
        },
    },
    loop: true,
});



//Rating swiper

var ratingSwiper = new Swiper('.rating-swiper', {
    slidesPerView: 'auto',

    spaceBetween:30,
    breakpoints: {
       1:{
        spaceBetween:20
       },
       576:{
        spaceBetween:30
       }
    },
    scrollbar:{
        el:'.swiper-scrollbar',
        draggable:true,
        dragSize:186
        
    },
    navigation:{
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev',
    },
    loop: true,

});

//Stage swiper

var vw = ($(window).width())/100;
var vw = ($(window).width())/100;
if ($(window).width() >= 1920){
    var stageCount = 3
}
else if (($(window).width() >= 1920) && ($(window).width() <= 1177)){
    var stageContainerWidth = $(window).width();

    var stageCount = (stageContainerWidth / ($('.stage-inner-wrapper').width() )) 
}
else{
    var stageContainerWidth = $(window).width();

    var stageCount = (stageContainerWidth /($('.stage-inner-wrapper').width() ))

}
if (stageCount > 3){
    stageCount = 3
}
if (($('.stage-inner-wrapper').width() ) > $(window).width()){
    $('.stage-inner-wrapper').css('width', '100vw')
    stageCount = 1
}
var stageSwiper = new Swiper('.stage-swiper', {
    slidesPerView: stageCount,
    spaceBetween:6,
    autoplay:{
        delay:2000,
    },
    centeredSlides:true,
    breakpoints: {

    },
    loop: true,
    on: {
    resize:function () {
        var vw = ($(window).width())/100;
        if ($(window).width() >= 1920){
            $('.stage-inner-wrapper').css('width', 'max(390px, 33.125vw)')
            var stageCount = 3
        }
        else if (($(window).width() <= 1920) && ($(window).width() >= 1177)){
            var stageContainerWidth = $(window).width();
            $('.stage-inner-wrapper').css('width', 'max(390px, 33.125vw)')
        
            var stageCount = (stageContainerWidth / ($('.stage-inner-wrapper').width() )) 
        }
        else if (($(window).width() <= 1177) && ($(window).width() >= 576)){
            var stageContainerWidth = $(window).width();
            $('.stage-inner-wrapper').css('width', 'max(390px, 33.125vw)')
        
            var stageCount = (stageContainerWidth / ($('.stage-inner-wrapper').width() )) 
        }
        else{
            var stageContainerWidth = $(window).width();
            $('.stage-inner-wrapper').css('width', '100vw')
        
            var stageCount = 1
        
        }
        if (stageCount > 3){
            stageCount = 3
        }
        if (($('.stage-inner-wrapper').width() ) > $(window).width()){
            $('.stage-inner-wrapper').css('width', '100vw')
            stageCount = 1
        }
        stageSwiper.params.slidesPerView = stageCount;

        stageSwiper.update()

        
    }
}
});

var offersHeroSwiper = new Swiper('.offers-hero-swiper', {
    slidesPerView: 1,

    loop:true,
    autoplay:{
        delay:3000
    }

})



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
console.log(pageLanguage)
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
}}
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
        $('.guestMenuAdult').css('display', 'flex')
        $('.guests-adult').addClass('active')
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

let guestAdult = document.querySelector('.guests-adult')
let guestChild = document.querySelector('.guests-child')

let guestmenuAdult = document.querySelector('.guestMenuAdult')
let guestmenuChild = document.querySelector('.guestMenuChild')

let body = document.querySelector('body')
if (guestmenuAdult) {
    body.addEventListener('click', function (e) {
        if ($(e.target).hasClass('flatpickr-input')) {
            guestmenuAdult.setAttribute('style', 'display:none');
            $('.guests-adult').removeClass('active')
            $('.bookNow').attr("href", 'https://portnature.rezervasyonal.com/?currency=TRY&language=en&Checkin=' + dateStart + '&Checkout=' + dateEnd + '&Adult=' + adult + linkVariablePart)
        }
        else if (($(e.target).hasClass('guests-adult')) || ($(e.target).hasClass('adult-increment')) || ($(e.target).hasClass('adult-decrement'))) {
            guestmenuAdult.setAttribute('style', 'display:flex')
            $('.guests-adult').addClass('active')
        }
        else if (!($(e.target).hasClass('guests-adult')) && (($('.guestMenuAdult').css('display')) == 'flex') && !($(e.target).hasClass('adult-increment')) && !($(e.target).hasClass('adult-decrement'))) {
            guestmenuAdult.setAttribute('style', 'display:none');
            $('.guests-adult').removeClass('active')
            $('.bookNow').attr("href", 'https://portnature.rezervasyonal.com/?currency=TRY&language=en&Checkin=' + dateStart + '&Checkout=' + dateEnd + '&Adult=' + adult + linkVariablePart)



        }


    })
    var adult = 3;
    var adultCount;
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

  

  
}
if (guestmenuChild) {
    body.addEventListener('click', function (e) {
        if ($(e.target).hasClass('flatpickr-input')) {
            guestmenuChild.setAttribute('style', 'display:none');
            $('.guests-child').removeClass('active')
            $('.bookNow').attr("href", 'https://portnature.rezervasyonal.com/?currency=TRY&language=en&Checkin=' + dateStart + '&Checkout=' + dateEnd + '&Adult=' + adult + linkVariablePart)
        }
        else if (($(e.target).hasClass('guests-child')) || ($(e.target).hasClass('child-increment')) || ($(e.target).hasClass('child-decrement'))) {
            guestmenuChild.setAttribute('style', 'display:flex')
            $('.guests-child').addClass('active')
        }
        else if (!($(e.target).hasClass('guests-child')) && (($('.guestMenuChild').css('display')) == 'flex') && !($(e.target).hasClass('child-increment')) && !($(e.target).hasClass('child-decrement'))) {
            guestmenuChild.setAttribute('style', 'display:none');
            $('.guests-child').removeClass('active')
            $('.bookNow').attr("href", 'https://portnature.rezervasyonal.com/?currency=TRY&language=en&Checkin=' + dateStart + '&Checkout=' + dateEnd + '&Adult=' + adult + linkVariablePart)



        }


    })
    var childCount;


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
    linkVariablePart =  '&ChildAges=' + child1Age + '+' + child2Age;
    if (child === 0) {
        linkVariablePart = ''
    }
    if (child === 1) {
        linkVariablePart = '&ChildAges=' + child1Age
    }
    if (child === 2) {
        linkVariablePart =  '&ChildAges=' + child1Age + '+' + child2Age
    }
    if (child === 3) {
        linkVariablePart =  '&ChildAges=' + child1Age + '+' + child2Age + '+' + child3Age
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

//Same height ratings
var highestRatingHeight = 0;
$(window).on('load resize', function () {

    $( ".rating-item" ).each(function( ) {
       var currentItemHeight = $(this).height();
       if (currentItemHeight > highestRatingHeight){
        highestRatingHeight = currentItemHeight
       }
      });
      $('.rating-item').css('height', (highestRatingHeight + 40) + 'px')
});

//Room Selection
function roomSelection(item){
}

$(document).ready(function(){
    $(".room-dropdown-link").click(function(){
     var innerText = $(this).attr("data-value");
     $('.room-selection-dropdown-btn').css('font-weight','400')
     $('.room-selection-dropdown-btn').html(innerText)
    });
  });


  //Colorful hover effect
var ww =($(window).width())/100; 
  window.onload = function() {
    let isIn = false;
    $(".colorful-image-wrapper").each(function () {
        $(".colorful-image-wrapper").on('mouseover', function(){
            isIn = true;
        })
        $(".colorful-image-wrapper").on('mouseout', function(){
            isIn = false;
        })
        $(".colorful-image-wrapper").on('mousemove', function(e){
            if (isIn) {
                function getOffset(el) {
                    const rect = el.getBoundingClientRect();
                    return {
                      left: rect.left + window.scrollX,
                      top: rect.top + window.scrollY
                    };
                  }
                 var topOfElement =  getOffset(this).top
                 var leftOfElement = getOffset(this).left
        
                var top = e.pageY - topOfElement;
                var left = e.pageX - leftOfElement;
        
                $(this).css('--x', left -  (1*ww)  + 'px');
               
                $(this).css('--y', top + 'px');
            
              }
        })
   
  
});
  }

