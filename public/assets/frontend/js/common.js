//HEADER

const mobileCollapse = document.querySelectorAll('.mainLink');
const arrow = document.querySelectorAll('.arrow')

arrow.forEach(function (element, index) {
    element.addEventListener('click', function (e) {

        if ($(element).hasClass('clicked')) {
            $(element).css('transform', 'rotate(360deg)')
            $(element).removeClass('clicked');
        }
        else {

            $(element).css('transform', 'rotate(180deg)')
            $(element).addClass('clicked');
        }
    })
})

let language = document.documentElement.lang;
mobileCollapse.forEach(function (element, index) {
    element.addEventListener('click', function (e) {
        const toggleName = element.getAttribute('aria-controls')
        if (language == 'EN') {
            if (toggleName === 'accomdation') {
                element.removeAttribute('data-bs-toggle')
                arrow.setAttribute('style', 'transform:rotate(180deg)')
                i++;
                element.href = "accommdation.html";
            } else if (toggleName === 'kidsconcept') {
                element.removeAttribute('data-bs-toggle')
                arrow.setAttribute('style', 'transform:rotate(180deg)')
                i++;
                element.href = "kidsconcept.html";
            } else if (toggleName === 'foodDrink') {
                element.removeAttribute('data-bs-toggle')
                arrow.setAttribute('style', 'transform:rotate(180deg)')
                i++;
                element.href = "foodDrink.html";
            } else if (toggleName === 'entertainment') {
                element.removeAttribute('data-bs-toggle')
                arrow.setAttribute('style', 'transform:rotate(180deg)')
                i++;
                element.href = "entertainment.html";
            } else if (toggleName === 'spa') {
                element.removeAttribute('data-bs-toggle')
                arrow.setAttribute('style', 'transform:rotate(180deg)')
                i++;
                element.href = "spa.html";
            } else if (toggleName === 'meetingCongress') {
                element.removeAttribute('data-bs-toggle')
                arrow.setAttribute('style', 'transform:rotate(180deg)')
                i++;
                element.href = "meeting.html";
            }
        } else if (language == 'TR') {
            /****** RELEVANT CODE ****/
        } else if (language == 'RU') {
            /****** RELEVANT CODE ****/
        } else if (language == 'DE') {
            /****** RELEVANT CODE ****/
        }
    }
    )
});


  $(window).on('load resize scroll', function () {
    var scroll = $(window).scrollTop();
    if (scroll > 200) {
        
        $(".navbar").css("background" , "rgb(35 48 56 / 70%)");
        $(".hamburgerMenu").css("background" , "rgb(35 48 56 / 70%)");

      $(".menuLeft span").css("padding" , "20px 30px 20px 0px");
      $(".hamburgerMenu").css("height" , "70px");
      $(".navbar").css("height" , "70px");
      $(".navbar-brand img").css("transform" , "scale(.8)");
      $(".mobile-header-logo").css("transform" , "scale(.8)");

    }
    else{
        if (!($('.homeAccommdation').length) && !($('.offers-contact-wrapper').length)){
            $(".navbar").css("background" , "rgb(35 48 56 / 100%)");
            $(".hamburgerMenu").css("background" , "rgb(35 48 56 / 100%)");
          
        }
        $(".menuLeft span").css("padding" , "30px 30px 30px 0px");
        $(".hamburgerMenu").css("height" , "90px");
        $(".navbar").css("height" , "90px");

        $(".navbar-brand img").css("transform" , "scale(1)");
        $(".mobile-header-logo").css("transform" , "scale(1)");



    }
  })

//FOOTER

$(window).on('load resize', function () {
    var ww = $(window).width()
    
        if( ww < 1300 && ww > 576){
            $('.footerLocation').appendTo('.footerCenter');
        }
        if( ww < 576){
            $('.footerLocation').prependTo('.footerStart');
        }
        if( ww > 1300){
            $('.footerLocation').prependTo('.footerCol');
        }
   
})