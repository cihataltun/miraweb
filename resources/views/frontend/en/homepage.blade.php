@extends('frontend.en.layouts.master')
@section('title')
@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('en-main-homepage') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item" href="{{ route('de-main-homepage') }}">DE</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-main-homepage') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-main-homepage') }}">RU</a></li>
    </ul>
</li>

@endsection
@section('content')
<!-- HOMEPAGE HERO SECTION START -->
<section class="page-hero-section">
   <div class="homepage-opener">
      <div id="heroSwiperWrapper" >
         <div class="swiper-container heroTopSwiper">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <img src="{{ asset('assets/frontend/images/homepage/homepage-1.webp') }}" class="d-block homeHeroSwiperImg " alt="..."
                     />
               </div>
               <div class="swiper-slide">
                  <img src="{{ asset('assets/frontend/images/homepage/homepage-2.webp') }}" class="d-block homeHeroSwiperImg " alt="..."
                     />
               </div>
               <div class="swiper-slide">
                  <img src="{{ asset('assets/frontend/images/homepage/homepage-3.webp') }}" class="d-block homeHeroSwiperImg " alt="..."
                     loading="lazy"/>
               </div>
               <div class="swiper-slide">
                  <img src="{{ asset('assets/frontend/images/homepage/homepage-4.webp') }}" class="d-block homeHeroSwiperImg " alt="..."
                     loading="lazy"/>
               </div>
               <div class="swiper-slide">
                  <img src="{{ asset('assets/frontend/images/homepage/homepage-5.webp') }}" class="d-block homeHeroSwiperImg " alt="..."
                     loading="lazy"/>
               </div>
               <div class="swiper-slide">
                  <img src="{{ asset('assets/frontend/images/homepage/homepage-6.webp') }}" class="d-block homeHeroSwiperImg " alt="..."
                     loading="lazy"/>
               </div>
            </div>
            <div class="swiper-button-prev heroSwiperPrev"><img src="{{ asset('assets/frontend/images/homepage/hero-swiper-prev.svg') }}" alt="swiperleft"></div>
            <div class="swiper-button-next heroSwiperNext"><img src="{{ asset('assets/frontend/images/homepage/hero-swiper-next.svg') }}" alt="swiperright"></div>
         </div>
      </div>
      <!-- RESERVATION FORM START -->
      <div class="reservation-wrapper">
         <div class="reservation-form  ">
            <div class="dropdown">
               <button class="btn dropdown-toggle" type="button" id="hotelSelectionDropdown"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <img class="dropdown-icons" src="{{ asset('assets/frontend/images/bookingSection/hotel-orange.png') }}">
                  <p class=" p-16 reservation-titles " id="hotelSelectionTitle">Choose Hotel</p>
                  <svg class="drop-icon" width="11" height="7" viewBox="0 0 11 7" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M5.50028 1.59086C5.50028 1.59086 3.20924 -1.27585 0 0.686715C0 0.686715 5.50028 2.68218 5.50028 6.99982C5.50028 2.68218 11.0006 0.686715 11.0006 0.686715C7.79132 -1.27642 5.50028 1.59086 5.50028 1.59086Z"
                        fill="#2D2D25" fill-opacity="0.8" />
                  </svg>
               </button>
               <ul class="dropdown-menu hotel-selection-dropdown-menu "
                  aria-labelledby="hotelSelectionDropdown">
                  <li class="hotel-item">
                     <a class="dropdown-item" href="#">
                        <img class="dropdown-icons" src="{{ asset('assets/frontend/images/bookingSection/dropdown-hotels-1.png') }}">
                        <p class=" p-15 hotel-dropdown-p  ">Miramare Hotels</p>
                     </a>
                  </li>
                  <li class="hotel-item">
                     <a class="dropdown-item" href="#">
                        <img class="dropdown-icons" src="{{ asset('assets/frontend/images/bookingSection/dropdown-hotels-2.png') }}">
                        <p class=" p-15 hotel-dropdown-p ">Miramare Queen Hotel</p>
                     </a>
                  </li>
                  <li class="hotel-item">
                     <a class="dropdown-item" href="#">
                        <img class="dropdown-icons" src="{{ asset('assets/frontend/images/bookingSection/dropdown-hotels-2.png') }}">
                        <p class=" p-15 hotel-dropdown-p ">Miramare Beach Hotel</p>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- DATE SELECTION SECTION -->
            <div class=" dateInputDiv " name="daterange" id="calendarRange">
               <img class="dropdown-icons" src="{{ asset('assets/frontend/images/bookingSection/calendar.png') }}">
               <p class=" p-16 reservation-titles"><span id="check-in-span ">Check In</span> — 
                  <span id="check-out-span "><span class="conditional "> Check  </span> Out</span>
               </p>
               <svg class="drop-icon" width="11" height="7" viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                     d="M5.50028 1.59086C5.50028 1.59086 3.20924 -1.27585 0 0.686715C0 0.686715 5.50028 2.68218 5.50028 6.99982C5.50028 2.68218 11.0006 0.686715 11.0006 0.686715C7.79132 -1.27642 5.50028 1.59086 5.50028 1.59086Z"
                     fill="#2D2D25" fill-opacity="0.8" />
               </svg>
            </div>
            <!-- NIGHT SELECTION SECTION-->
            <div class="dropdown" >
               <button class="btn dropdown-toggle" type="button" id="nightSelectionDropdown"
                  data-bs-toggle="noToggle" aria-expanded="false">
                  <img class="dropdown-icons" src="{{ asset('assets/frontend/images/bookingSection/nights.png') }}">
                  <p class=" p-16 reservation-titles " id="num-of-nights">Nights</p>
                  <svg class="drop-icon" width="11" height="7" viewBox="0 0 11 7" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M5.50028 1.59086C5.50028 1.59086 3.20924 -1.27585 0 0.686715C0 0.686715 5.50028 2.68218 5.50028 6.99982C5.50028 2.68218 11.0006 0.686715 11.0006 0.686715C7.79132 -1.27642 5.50028 1.59086 5.50028 1.59086Z"
                        fill="#2D2D25" fill-opacity="0.8" />
                  </svg>
               </button>
               <ul class="dropdown-menu night-selection-dropdown-menu "
                  aria-labelledby="nightSelectionDropdown">
                  <li class="dropdown-item night-item" id="night-selection-first-li" value="">
                     <p class=" p-15 dropdown-text" id="night-selection-first"> </p>
                  </li>
                  <li class="dropdown-item night-item" id="night-selection-second-li" value="">
                     <p class=" p-15 dropdown-text" id="night-selection-second"></p>
                  </li>
               </ul>
            </div>
            <!-- NUMBER OF PEOPLE SELECTION SECTION -->
            <section class="people-selection">
               <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" id="adultSelectionDropdown"
                     data-bs-toggle="dropdown" aria-expanded="false">
                     <img class="dropdown-icons people" src="{{ asset('assets/frontend/images/bookingSection/adult.png') }}">
                     <p id="adultCount" class="reservation-titles"></p>
                     <svg class="drop-icon" width="11" height="7" viewBox="0 0 11 7" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M5.50028 1.59086C5.50028 1.59086 3.20924 -1.27585 0 0.686715C0 0.686715 5.50028 2.68218 5.50028 6.99982C5.50028 2.68218 11.0006 0.686715 11.0006 0.686715C7.79132 -1.27642 5.50028 1.59086 5.50028 1.59086Z"
                           fill="#2D2D25" fill-opacity="0.8" />
                     </svg>
                  </button>
                  <ul class="dropdown-menu adult-selection-dropdown-menu "
                     aria-labelledby="adultSelectionDropdown">
                     <li class="dropdown-item people-item adult-item" value="1">
                        <p class=" p-15 dropdown-text adult-text">1</p>
                     </li>
                     <li class="dropdown-item people-item adult-item" value="2">
                        <p class=" p-15 dropdown-text adult-text">2</p>
                     </li>
                     <li class="dropdown-item people-item adult-item" value="3">
                        <p class=" p-15 dropdown-text adult-text"> 3</p>
                     </li>
                     <li class="dropdown-item people-item adult-item" value="4">
                        <p class=" p-15 dropdown-text adult-text">4</p>
                     </li>
                     <li class="dropdown-item people-item adult-item" value="5">
                        <p class=" p-15 dropdown-text adult-text"> 5</p>
                     </li>
                     <li class="dropdown-item people-item adult-item" value="6">
                        <p class=" p-15 dropdown-text adult-text">6</p>
                     </li>
                  </ul>
               </div>
               <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" id="childSelectionDropdown"
                     data-bs-toggle="dropdown" aria-expanded="false">
                     <img class="dropdown-icons  dropdown-child" src="{{ asset('assets/frontend/images/bookingSection/children.png') }}">
                     <p id="childCount" class="reservation-titles"></p>
                     <svg class="drop-icon" width="11" height="7" viewBox="0 0 11 7" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M5.50028 1.59086C5.50028 1.59086 3.20924 -1.27585 0 0.686715C0 0.686715 5.50028 2.68218 5.50028 6.99982C5.50028 2.68218 11.0006 0.686715 11.0006 0.686715C7.79132 -1.27642 5.50028 1.59086 5.50028 1.59086Z"
                           fill="#2D2D25" fill-opacity="0.8" />
                     </svg>
                  </button>
                  <ul class="dropdown-menu child-selection-dropdown-menu "
                     aria-labelledby="childSelectionDropdown">
                     <li class="dropdown-item people-item child-item" value="0">
                        <p class=" p-15 dropdown-text child-text">0</p>
                     </li>
                     <li class="dropdown-item people-item child-item" value="1">
                        <p class=" p-15 dropdown-text child-text ">1</p>
                     </li>
                     <li class="dropdown-item people-item child-item" value="2">
                        <p class=" p-15 dropdown-text child-text">2</p>
                     </li>
                     <li class="dropdown-item people-item child-item" value="3">
                        <p class=" p-15 dropdown-text child-text">3</p>
                     </li>
                     <li class="dropdown-item people-item child-item" value="4">
                        <p class=" p-15 dropdown-text child-text">4</p>
                     </li>
                     <li class="dropdown-item people-item child-item" value="5">
                        <p class=" p-15 dropdown-text child-text">5</p>
                     </li>
                  </ul>
               </div>
            </section>
            <button class=" booking-btn" type="button">
               <p class=" p-16 reservation-titles ">Booking</p>
            </button>
         </div>
         <div class="reservation-section-mobile">
            <a class="mobile-call-center hover-fx" href="#">
               <i class="fa-solid fa-question res-icon"></i> 
               <p class="reservation-text "> CALL CENTER</p>
            </a>
            <a class="mobile-call hover-fx" href="#">
               <i class="fa-solid fa-phone res-icon"></i> 
               <p class="reservation-text"> +90 (242) 756 11 43</p>
            </a>
            <a class="booking-nav " href="#">
               <p class="book-btn-txt ">Book Now</p>
            </a>
         </div>
      </div>
      <!-- RESERVATION FORM END -->
   </div>
</section>
<!-- HOMEPAGE HERO SECTION END START -->
<section class="hotels-display-section fade-in-section bounce-up">
   <div class="hotels-display-wrapper fadeSection">
      <p class="hotels-display-heading ">Hotels</p>
      <p class="hotels-display-text ">The Miramare hotel chain is one of the best chains on the 
         Mediterranean coast, which offers ‘Ultra All Inclusive’ services
      </p>
   </div>
   <div class="hotels-display">
      <div class=" hotel-display-item col">
         <p class="hotels-display-item-title ">Miramare Beach</p>
         <p class="hotels-display-item-text ">Side / Antalya</p>
         <div class="hotel-div  ">
            <img src="{{ asset('assets/frontend/images/homepage/hotels-display-1.webp') }}">
            <a href="" class="visit-btn visit-btn-beach">
               <p class="visit-btn-txt beach-btn-txt btn-txt ">Visit Page</p>
            </a>
         </div>
      </div>
      <div class=" hotel-display-item col">
         <p class="hotels-display-item-title ">Miramare Queen</p>
         <p class="hotels-display-item-text ">Side / Antalya</p>
         <div class="hotel-div  ">
            <img src="{{ asset('assets/frontend/images/homepage/hotels-display-2.webp') }}">
            <a href="" class="visit-btn visit-btn-queen">
               <p class="visit-btn-txt btn-txt queen-btn-txt ">Visit Page</p>
            </a>
         </div>
      </div>
   </div>
</section>
<!-- HOMEPAGE HERO SECTION END END -->
<!-- AWARDS SECTION START -->
<section class="awards-section fade-in-section bounce-up">
   <div class="awards-title fadeSection">
      <p class="awards-title-text ">
         Our Awards
      </p>
   </div>
   <div class=" awards-row fadeSection">
      <div class="swiper-container awards-swiper">
         <div class="swiper-wrapper">
            <div class="swiper-slide">
               <div class="awards-col">
                  <img class="awards-background" src="{{ asset('assets/frontend/images/homepage/awards-1.webp') }}">
                  <img class="awards-logo tripadvisor-logo" src="{{ asset('assets/frontend/images/homepage/tripadvisor-logo.png') }}">
                  <img class="awards-smiley" src="{{ asset('assets/frontend/images/homepage/awards-icon-1.png') }}">
                  <a class="awards-arrow" href=""><img src="{{ asset('assets/frontend/images/homepage/arrow.png') }}"></a>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="awards-col">
                  <img class="awards-background" src="{{ asset('assets/frontend/images/homepage/awards-2.webp') }}">
                  <img class="awards-logo holiday-check-logo" src="{{ asset('assets/frontend/images/homepage/holidaycheck-logo.png') }}">
                  <img class="awards-smiley" src="{{ asset('assets/frontend/images/homepage/awards-icon-2.png') }}"></a>
                  <a class="awards-arrow" href=""><img src="{{ asset('assets/frontend/images/homepage/arrow.png') }}"></a>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="awards-col">
                  <img class="awards-background" src="{{ asset('assets/frontend/images/homepage/awards-3.webp') }}">
                  <img class="awards-logo booking-logo" src="{{ asset('assets/frontend/images/homepage/booking-logo.png') }}">
                  <img class="awards-smiley" src="{{ asset('assets/frontend/images/homepage/awards-icon-3.png') }}">
                  <a class="awards-arrow" href=""><img src="{{ asset('assets/frontend/images/homepage/arrow.png') }}"></a>
               </div>
            </div>
         </div>
         <div class="swiper-pagination"></div>
      </div>
   </div>
</section>
<!-- AWARDS SECTION END -->
<!-- VIDEO SECTION START -->
<section class="video-section fade-in-section bounce-up">
   <div class="video-wrapper fadeSection">
      <div class="video-background">
         <img class="video-image" src="{{ asset('assets/frontend/images/homepage/homepage-video-background.webp') }}">
         <div class="video-inner-wrapper">
            <div class="video-empty"></div>
            <a class="magnific-popup-parent " href="file://www.youtube.com/watch?v=ZGElK1N_Xdk">
               <svg version="1.1" id="play" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="100px" width="100px"
                  viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                  <path class="stroke-solid" fill="none" stroke="#ffffff" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                     C97.3,23.7,75.7,2.3,49.9,2.5" />
                  <path class="icon" fill="#ffffff"
                     d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
               </svg>
            </a>
            <div class="video-text">
               <p class=" video-title ">Vacation Video</p>
               <hr class="video-hr">
               <p class="  video-description ">Our hotels are located in the heart of the sunny city
                  of Side, Antalya, in an extremely characteristic, and lively area
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- VIDEO SECTION END -->
<!-- CONTACT US SECTION START -->
<section class="contact-us-section fade-in-section bounce-up">
   <div class=" contact-row fadeSection">
      <div class="contact-us-wrapper">
         <div class=" contact-item-1 contact-item">
            <div class="contact-us-inner">
               <p class="contact-us-title ">Contact Us</p>
               <a class="contact-us-whatsapp" href="#">
                  <i class="fa-brands fa-whatsapp"></i>
                  <p class="contact-us-whatsapp-text lato">
                     WhatsApp
                  </p>
               </a>
               <a class="contact-us-phone" href="#">
                  <i class="fa-solid fa-phone"></i>
                  <p class="contact-us-phone-text lato">
                     +90 (242) 756 11 43
                  </p>
               </a>
               <a class="call-you-btn" href="#">
                  <p class=" call-btn-txt ">
                     Let Us Call You
                  </p>
               </a>
            </div>
         </div>
         <div class=" contact-item img-item-1">
            <img class="contact-img-1" src="{{ asset('assets/frontend/images/contactSection/contact-us-1.webp') }}">
         </div>
         <div class=" contact-item img-item-2">
            <img class="contact-img-2" src="{{ asset('assets/frontend/images/contactSection/contact-us-2.webp') }}">
         </div>
      </div>
   </div>
</section>
<!-- CONTACT US SECTION END -->
@endsection
@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/homepage.js')  }}"></script>
@endsection
@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/homepage.css') }}"/>
@endsection