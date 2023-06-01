
//SIDEBAR TOGGLE CODE


$(function() {

    'use strict';
  
    $('.js-menu-toggle').click(function(e) {
  
        var $this = $(this);
  
        
  
        if ( $('body').hasClass('show-sidebar') ) {
            $('body').removeClass('show-sidebar');
            $this.removeClass('active');
        } else {
            $('body').addClass('show-sidebar');	
            $this.addClass('active');
            
        }
  
        e.preventDefault();
  
    });
    $('.js-menu-toggle-sidebar').click(function(e) {
  
        var $this = $(this);
  
        
  
        if ( $('body').hasClass('show-sidebar') ) {
            $('body').removeClass('show-sidebar');
            $this.addClass('active');
        } else {
            $('body').addClass('show-sidebar');	
            $this.removeClass('active');
            
        }
  
        e.preventDefault();
  
    });
  
    // click outisde offcanvas
      $(document).mouseup(function(e) {
      var container = $(".sidebar");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ( $('body').hasClass('show-sidebar') ) {
                  $('body').removeClass('show-sidebar');
                  $('body').find('.js-menu-toggle').removeClass('active');
              }
      }
      }); 
  
      
  
  });

// OPEN CONTACT FORM MODAL ON BUTTON CLICK

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("contact-form-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "flex";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


//CONTACT FORM SUBMIT HANDLER
$(document).ready(function () {
  
$(function() {

	'use strict';

	// Form

	var contactForm = function() {

		if ($('#contactForm').length > 0 ) {
			$( "#contactForm" ).validate( {
				rules: {
					name: "required",
					website: "required",
					email: {
						required: true,
						email: true
					},
					website: {
						required: true,
			
					}
				},
				messages: {
					name: "Please enter your name",
					email: "Please enter your email",
					website: "Please enter your website",
				
				},
				/* submit via ajax */
				submitHandler: function(form) {		
					var $submit = $('.submitting'),
						waitText = 'Submitting...';

					$.ajax({   	
				      type: "POST",
				      url: "php/send-email.php",
				      data: $(form).serialize(),

				      beforeSend: function() { 
				      	$submit.css('display', 'block').text(waitText);
				      },
				      success: function(msg) {
		               if (msg == 'OK') {
		               	$('#form-message-warning').hide();
				            setTimeout(function(){
		               		$('#contactForm').fadeOut();
		               	}, 1000);
				            setTimeout(function(){
								var element = document.getElementById("form-message-success");
 									 element.classList.add("show");
				               $('#form-message-success').fadeIn();   
		               	}, 1400);
			               
			            } else {
			               $('#form-message-warning').html(msg);
				            $('#form-message-warning').fadeIn();
				            $submit.css('display', 'none');
			            }
				      },
				      error: function() {
				      	$('#form-message-warning').html("Something went wrong. Please try again.");
				         $('#form-message-warning').fadeIn();
				         $submit.css('display', 'none');
				      }
			      });    		
		  		}
				
			} );
		}
	};
	contactForm();

});
});

//HEADER
if (screen.width < '1024'){
  $('.nav-lang').appendTo('.navbar-right')
}

// FLATPICKR DATE PICKER -- CHECK IN - CHECK OUT &
// CHANGING 'Nights' TEXT ACCORDING TO NUMBER SELECTED

let daysLengthTotal = '';
let calendar = flatpickr('#calendarRange', {
    "mode": "range",
    minDate: "today",
    dateFormat: "Y-m-d",
    altFormat: "Y-m-d",
  dateFormat: "Y-m-d",
  onClose: function(selectedDates, dateStr, instance) {
    //Change field in input to show start and end days on close
    var dateStart = instance.formatDate(selectedDates[0], "Y-m-d");
    var dateEnd = instance.formatDate(selectedDates[1], "Y-m-d");
    document.getElementById('check-in-span').innerText = dateStart;
    document.getElementById('check-out-span').innerText = dateEnd;
    //Subtract the start date from the end date to get the total number of dates
    let daysInRange = document.getElementsByClassName('inRange');
           daysLengthTotal = daysInRange.length + 1;
          document.getElementById('night-selection-first').innerText = daysLengthTotal;
          $('#night-selection-first-li').val(daysLengthTotal );
          console.log(document.getElementById('night-selection-first-li').value)
          document.getElementById('night-selection-second').innerText = daysLengthTotal + 1;
         
          $('#night-selection-second-li').val(daysLengthTotal + 1);
          console.log(document.getElementById('night-selection-second-li').value)


          if (document.querySelector('.night-item')) {
            console.log(daysLengthTotal)
            if (Number.isInteger(daysLengthTotal) ){
              $(".dateInputDiv").css('box-shadow', 'none')
              nightContainer = document.getElementById('nightSelectionDropdown')
              var toggleValue = parseInt(nightContainer.getAttribute('data-bs-toggle'));
              nightContainer.setAttribute('data-bs-toggle', 'dropdown');
            
               // select all night-items as el
               document.querySelectorAll('.night-item').forEach(function(el) {
            
                // bind click event to each el
                el.addEventListener('click', function (e) {
                
                      //Get the selected night value 
                    var selectedNights = e.target.value;
                    //Change the Nights text in night-item to match the selected value
                    document.getElementById('num-of-nights').innerHTML = selectedNights;
               
                  
                });
                
            
               });
            }
            else{
              return
            }
            
            }


  }
});
// Direct to date input if not done when clicked on 'Nights'
$('#nightSelectionDropdown').on('click', function(){
  console.log('clicked')
  if (Number.isInteger(daysLengthTotal) ){
    $(".dateInputDiv").css('box-shadow', 'none')
  }
  else{
    $(".dateInputDiv").css('box-shadow', '0px 0px 0px 1px red')
  }
})





// CHANGING 'Choose Hotel' TEXT ACCORDING TO NUMBER SELECTED

  if (document.querySelector('.hotel-item')) {

    // select all night-items as el
    document.querySelectorAll('.hotel-item').forEach(function(hotelChoices) {
  
      // bind click event to each el
      hotelChoices.addEventListener('click', function (e) {
      
        // check also if there is at least one child element called dropdown-text
        // e.target is the clicked element, parentNode the parent, from there find child element
       
        if (e.target.parentNode.querySelector('.hotel-dropdown-p')) {
            //Get the selected night value 
          var selectedHotel = e.target.parentNode.querySelector('.hotel-dropdown-p').innerHTML;
          //Change the Nights text in night-item to match the selected value
          document.getElementById('hotelSelectionTitle').innerHTML = selectedHotel;
        }
        
        
      });
  
     });
  
  }

// CHANGING 'Adults Number SVG' ACCORDING TO NUMBER SELECTED

if (document.querySelector('.adult-item')) {

    // select all night-items as el
    document.querySelectorAll('.adult-item').forEach(function(adultNoChoices) {
  
      // bind click event to each el
      adultNoChoices.addEventListener('click', function (e) {
      
        // check also if there is at least one child element called dropdown-text
        // e.target is the clicked element, parentNode the parent, from there find child element
        if (e.target.parentNode.querySelector('.adult-text')) {
            //Get the selected night value 
          var selectedAdultNo = e.target.value;
          //Change the Nights text in night-item to match the selected value
          console.log(selectedAdultNo)
          $("#adultCount").css("display", "block");
          document.getElementById('adultCount').innerHTML = selectedAdultNo;
          $(".adult-svg").css("display", "none");
        }
        
        
      });
  
     });
  
  }

// CHANGING 'Child Number SVG' ACCORDING TO NUMBER SELECTED

if (document.querySelector('.child-item')) {

    // select all night-items as el
    document.querySelectorAll('.child-item').forEach(function(childNoChoices) {
  
      // bind click event to each el
      childNoChoices.addEventListener('click', function (e) {
      
        // check also if there is at least one child element called child-text
        // e.target is the clicked element, parentNode the parent, from there find child element
        if (e.target.parentNode.querySelector('.child-text')) {
            //Get the selected child number value 
          var selectedAdultNo = e.target.value;
          //Change the Nights text in night-item to match the selected value
          $("#childCount").css("display", "block");
          document.getElementById('childCount').innerHTML = selectedAdultNo;
          $(".child-svg").css("display", "none");
        }
        
        
      });
  
     });
  
  }

  //HOMEPAGE VIDEO EMBED

  $('.magnific-popup-parent').magnificPopup({
    type: 'iframe',
    
    
    iframe:{
      patterns:{
        youtube:{
        index: 'youtube.com',
        id: 'v=',
        src: 'https://www.youtube.com/embed/%id%'
      },
    },
    srcAction:'iframe_src',
  },
    callbacks: {
      markupParse: function(template, values, item) {
       values.title = item.el.attr('title');
      }
    }
    
    
  });




//AWARDS SWIPER CODE

var swiper = new Swiper(".awards-swiper", {
  slidesPerView:2.9,
  spaceBetween:20,
  loop:true,
  allowTouchMove:false,
  breakpoints: {
   
    1: {
      slidesPerView: 1.15,
      allowTouchMove:true
    },
  
    769: {
      slidesPerView: 3,
      allowTouchMove:false
    },
   
   
  },
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
    
    
  },
  navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
  },
  
});

//FOOTER
$(window).on("load resize",function(){
  if(($(window).width())>= '1201'){
    $('.footer-btn-col').prependTo('#footerSecond')
    $('#footerSocials').appendTo('.footer-top-second-col')
  }
  else if( '720' <=($(window).width())< '1201'){

    $('.footer-btn-col').appendTo('.footer-top')
    $('#footerSocials').appendTo('#footerSecond')
  }

  else if ('600' <= $(window).width() < '720'){
    $('#footerSocials').appendTo('.footer-top')
  }
  else if ($(window).width() < '600'){
    $('#footerSocials').appendTo('#footerSecond')
  
  }

})
//SECTION FADE IN AND UP ON SCROLL
var $animation_elements = $('.fade-in-section');
var $window = $(window);

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);

  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);

    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
      (element_top_position <= window_bottom_position)) {
      $element.addClass('in-view');
    } else {
    }
  });
}

$('body').on('scroll resize', check_if_in_view);
$('body').trigger('scroll');


//HERO SWIPER 
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
 

});

//Go to sidebar hotels link on double click

//Detect touch events
jQuery(function($) {
  $('#dropdownMenuButton1').click(function() {
      return false;
  }).dblclick(function() {
    console.log('double clicked')
      window.location = this.href;
      return false;
  });
});

function sidebarDropdown(){
  if(window.matchMedia("(pointer: coarse)").matches) {

    if ($('.sidebar-hotels-dropdown').hasClass('show2')){
      $('.sidebar-hotels-dropdown').removeClass('show2')
      $('.sidebar-hotels-dropdown-list').removeClass('show2');

      $('#dropdownMenuButton1').removeClass('show')


      $('.sidebar-hotels-dropdown-list').css('height', '0px')
      $('.sidebar-hotels-dropdown-list').css('padding-top', '0px!important')
  

    }
    else{
      $('.sidebar-hotels-dropdown').addClass('show2');
      $('.sidebar-hotels-dropdown-list').addClass('show2');

      $('#dropdownMenuButton1').addClass('show2')





      $('.sidebar-hotels-dropdown-list').css('height', '105px')
      $('.sidebar-hotels-dropdown-list').css('padding-top', '35px!important')
      $('.sidebar-hotels-dropdown:hover .sidebar-hotels-dropdown-list li:first-child').css('padding-bottom','20px')

    }
  }

}
