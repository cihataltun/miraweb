

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