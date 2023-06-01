@extends('frontend.en.layouts.master')
@section('title')
@section('content')
<main id="content" class="inner cover" role="main">
   <!-- PAGE HERO SECTION START -->
   <section class="page-hero-section">
      <div class="page-opener">
         <div id="heroSwiperWrapper" >
            <div class="swiper-container heroTopSwiper">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <img src="./assets/images/miramareBeach/beach-1.webp" class="d-block homeHeroSwiperImg " alt="..."
                        />
                  </div>
                  <div class="swiper-slide">
                     <img src="./assets/images/miramareBeach/beach-2.webp" class="d-block homeHeroSwiperImg " alt="..."
                        />
                  </div>
                  <div class="swiper-slide">
                     <img src="./assets/images/miramareBeach/beach-3.webp" class="d-block homeHeroSwiperImg " alt="..."
                        loading="lazy"    />
                  </div>
                  <div class="swiper-slide">
                     <img src="./assets/images/miramareBeach/beach-4.webp" class="d-block homeHeroSwiperImg " alt="..."
                        loading="lazy"    />
                  </div>
                  <div class="swiper-slide">
                     <img src="./assets/images/miramareBeach/beach-5.webp" class="d-block homeHeroSwiperImg " alt="..."
                        loading="lazy"    />
                  </div>
               </div>
               <div class="swiper-button-prev heroSwiperPrev"><img src="./assets/images/homepage/hero-swiper-prev.svg" alt="swiperleft"></div>
               <div class="swiper-button-next heroSwiperNext"><img src="./assets/images/homepage/hero-swiper-next.svg" alt="swiperright"></div>
            </div>
         </div>
         <!-- RESERVATION FORM START -->
         <div class="reservation-wrapper">
            <div class="reservation-form  ">
               <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" id="hotelSelectionDropdown"
                     data-bs-toggle="dropdown" aria-expanded="false">
                     <img class="dropdown-icons" src="./assets/images/bookingSection/hotel-orange.png">
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
                           <img class="dropdown-icons" src="./assets/images/bookingSection/dropdown-hotels-1.png">
                           <p class=" p-15 hotel-dropdown-p  ">Miramare Hotels</p>
                        </a>
                     </li>
                     <li class="hotel-item">
                        <a class="dropdown-item" href="#">
                           <img class="dropdown-icons" src="./assets/images/bookingSection/dropdown-hotels-2.png">
                           <p class=" p-15 hotel-dropdown-p ">Miramare Queen Hotel</p>
                        </a>
                     </li>
                     <li class="hotel-item">
                        <a class="dropdown-item" href="#">
                           <img class="dropdown-icons" src="./assets/images/bookingSection/dropdown-hotels-2.png">
                           <p class=" p-15 hotel-dropdown-p ">Miramare Beach Hotel</p>
                        </a>
                     </li>
                  </ul>
               </div>
               <!-- DATE SELECTION SECTION -->
               <div class=" dateInputDiv " name="daterange" id="calendarRange">
                  <img class="dropdown-icons" src="./assets/images/bookingSection/calendar.png">
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
                     <img class="dropdown-icons" src="./assets/images/bookingSection/nights.png">
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
                        <img class="dropdown-icons people" src="./assets/images/bookingSection/adult.png">
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
                        <img class="dropdown-icons  dropdown-child" src="./assets/images/bookingSection/children.png">
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
   <!-- PAGE HERO SECTION END  -->
   <section class="hotel-features">
      <div class="features-wrapper-desktop">
         <!-- Swiper -->
         <div class="features-desktop">
            <a href="#">Rooms</a>
            <a href="#">Flavours</a>
            <a href="#">Beach & Pool</a>
            <a href="#">Offers</a>
            <a href="#">Kids</a>
            <a href="#">Entertainment</a>
            <a href="#">Spa & Wellness</a>
            <a href="#">Comfort Zone</a>
            <a href="#">Honeymoon</a>
            <!-- Add Scrollbar -->
         </div>
      </div>
      <div class="features-div">
         <!-- Swiper -->
         <div class="swiper-features">
            <div class="swiper-wrapper swiper-features-wrapper">
               <div class="swiper-slide features-slide"><a href="#">Rooms</a></div>
               <div class="swiper-slide features-slide"><a href="#">Flavours</a></div>
               <div class="swiper-slide features-slide"><a href="#">Beach & Pool</a></div>
               <div class="swiper-slide features-slide"><a href="#">Offers</a></div>
               <div class="swiper-slide features-slide"><a href="#">Kids</a></div>
               <div class="swiper-slide features-slide"><a href="#">Entertainment</a></div>
               <div class="swiper-slide features-slide"><a href="#">Spa & Wellness</a></div>
               <div class="swiper-slide features-slide"><a href="#">Comfort Zone</a></div>
               <div class="swiper-slide features-slide"><a href="#">Honeymoon</a></div>
            </div>
            <!-- Add Scrollbar -->
            <div class="swiper-scrollbar"></div>
         </div>
      </div>
   </section>
   <!-- PAGE TREE SECTION -->
   <section class="page-tree">
      <div class="page-tree-line">
         <a href="" class="page-tree-item">Home</a>
         <a  class="page-tree-item">></a>
         <a href="" class="page-tree-item">Hotels</a>
         <a  class="page-tree-item">></a>
         <a href="" class="page-tree-item">Miramare Beach</a>
      </div>
   </section>
   <!-- PAGE TREE SECTION END -->
   <!-- HOTEL INTRO START -->
   <section class="hotel-intro">
      <div class="hotel-intro-wrapper">
         <svg width="51" height="43" viewBox="0 0 51 43" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M25.2114 18.5325C25.2114 18.5325 14.7666 5.65605 0.135742 14.4713C0.135742 14.4713 25.2114 23.4344 25.2114 42.828C25.2114 23.4344 50.2871 14.4713 50.2871 14.4713C35.6562 5.6535 25.2114 18.5325 25.2114 18.5325Z" fill="#170000"/>
            <path d="M18.6006 11.0752L25.2116 0L31.82 11.0752L25.2116 15.465L18.6006 11.0752Z" fill="#170000"/>
         </svg>
         <p class="intro-title">Miramare Beach Hotel</p>
         <hr class="hotel-intro-hr">
         <p class="intro-text-1">The Miramare Beach Hotel is one of the best ultra all inclusive hotels on the Mediterranean coast.</p>
         <p class="intro-text-2">Miramare Beach Hotel is located in the heart of the sunny city of Side, Antalya, in an extremely characteristic, and lively area, within walking distance of all the attractions. Miramare Beach Hotel is ready to meet and give you an unforgettable vacation throughout the year.</p>
      </div>
   </section>
   <!-- HOTEL INTRO END -->
   <!-- SWIPER SECTION-->
   <!-- Swiper -->
   <section class="swiper-section">
      <div class="swiper-left">
         <div class="swiper-button-prev panorama-prev" ></div>
         <div class="custom-pagination"></div>
         <div class="swiper-button-next panorama-next"></div>
      </div>
      <!-- Swiper -->
      <div class="swiper-container panoramaSwiper" id="swiperSectionId">
         <div class="cursor">
            <img id="cursor-img" src="./assets/images/miramareBeach/custom-cursor.png">
         </div>
         <div class="swiper-wrapper">
            <div class="swiper-slide main-slide">
               <img  class="swiper-main-image"src="./assets/images/miramareBeach/beach-swiper-1.webp">
               <div class="swiper-inner">
                  <p class="swiper-title">Our Offers</p>
                  <hr class="swiper-hr">
                  <p class="swiper-text">When booking a hotel on our website or with the help of our call center agents, you are offered a discount on early booking and free accommodation for children under 12 years old. In addition, you can choose a concept for newlyweds "Honeymoon", get a discount for a long stay and get access to additional payment methods. And all this in the presence of a package of money-back guarantees in case of cancellation.</p>
                  <a href="" class="visit-btn visit-beach">
                     <p class="visit-btn-txt btn-txt">Discover</p>
                  </a>
               </div>
            </div>
            <div class="swiper-slide main-slide">
               <img  class="swiper-main-image"src="./assets/images/miramareBeach/beach-swiper-2.webp">
               <div class="swiper-inner">
                  <p class="swiper-title">Kids</p>
                  <hr class="swiper-hr">
                  <p class="swiper-text">Miraland Kids Clubs offers fun and educational activities for children from 4 to 16 years old at Miramare Hotels. Children's clubs have special rooms for recreation and educational games. We have provided everything to make the rest of parents and children as comfortable as possible.</p>
                  <p class="swiper-bold">Junior Club 4-11 Years Old</p>
                  <a href="" class="visit-btn visit-beach">
                     <p class="visit-btn-txt btn-txt">Discover</p>
                  </a>
               </div>
            </div>
            <div class="swiper-slide main-slide">
               <img  class="swiper-main-image"src="./assets/images/miramareBeach/beach-swiper-3.webp">
               <div class="swiper-inner">
                  <p class="swiper-title">Flavours</p>
                  <hr class="swiper-hr">
                  <p class="swiper-text">Enjoy the extraordinary culinary experience accented by flavours from Italian, Turkish, traditional, Aegean and Mediterranean cuisines, all served by our chefs whose passion for food goes into every plate served.</p>
                  <p class="swiper-bold">The Most Exquisite Cuisines Of The World</p>
                  <a href="" class="visit-btn visit-beach">
                     <p class="visit-btn-txt btn-txt">Discover</p>
                  </a>
               </div>
            </div>
            <div class="swiper-slide main-slide">
               <img  class="swiper-main-image"src="./assets/images/miramareBeach/beach-swiper-4.webp">
               <div class="swiper-inner">
                  <p class="swiper-title">Entertainment</p>
                  <hr class="swiper-hr">
                  <p class="swiper-text">A variety of sports activities, a fitness center, board and active games, festivals, a show program, water activities, tennis courts and a professional animation team will help you keep up and brighten up your leisure time.</p>
                  <p class="swiper-bold">You Will Find Something To Do According To Your Interests</p>
                  <a href="" class="visit-btn visit-beach">
                     <p class="visit-btn-txt btn-txt">Discover</p>
                  </a>
               </div>
            </div>
            <div class="swiper-slide main-slide">
               <img  class="swiper-main-image"src="./assets/images/miramareBeach/beach-swiper-5.webp">
               <div class="swiper-inner">
                  <p class="swiper-title">Spa & Wellness</p>
                  <hr class="swiper-hr">
                  <p class="swiper-text">Sauna, hammam, and various types of massage, Ayurvedic therapy and cosmetology will immerse you in a state of bliss at Miramare Hotels.</p>
                  <p class="swiper-bold">Everything For The Harmony Of Soul And Body</p>
                  <a href="" class="visit-btn visit-beach">
                     <p class="visit-btn-txt btn-txt">Discover</p>
                  </a>
               </div>
            </div>
            <div class="swiper-slide main-slide">
               <img  class="swiper-main-image"src="./assets/images/miramareBeach/beach-swiper-6.webp">
               <div class="swiper-inner">
                  <p class="swiper-title">Comfort Zone</p>
                  <hr class="swiper-hr">
                  <p class="swiper-text">Enjoy the service of our hotels that offer a continuous ultra all inclusive service.</p>
                  <p class="swiper-bold">Ultra All Inclusive</p>
                  <a href="" class="visit-btn visit-beach">
                     <p class="visit-btn-txt btn-txt">Discover</p>
                  </a>
               </div>
            </div>
            <div class="swiper-slide main-slide">
               <img  class="swiper-main-image"src="./assets/images/miramareBeach/beach-swiper-7.webp">
               <div class="swiper-inner">
                  <p class="swiper-title">Beach & Pool</p>
                  <hr class="swiper-hr">
                  <p class="swiper-text">Enjoy the service of our hotels that offer a continuous ultra all inclusive service.</p>
                  <p class="swiper-bold">Ultra All Inclusive</p>
                  <a href="" class="visit-btn visit-beach">
                     <p class="visit-btn-txt btn-txt">Discover</p>
                  </a>
               </div>
            </div>
            <div class="swiper-slide main-slide">
               <img  class="swiper-main-image"src="./assets/images/miramareBeach/beach-swiper-8.webp">
               <div class="swiper-inner">
                  <p class="swiper-title">Honeymoon</p>
                  <hr class="swiper-hr">
                  <p class="swiper-text">Enjoy the service of our hotels that offer a continuous ultra all inclusive service.</p>
                  <p class="swiper-bold">Ultra All Inclusive</p>
                  <a href="" class="visit-btn visit-beach">
                     <p class="visit-btn-txt btn-txt">Discover</p>
                  </a>
               </div>
            </div>
         </div>
         <!-- Add Pagination -->
         <!-- Add Arrows -->
      </div>
   </section>
   <!-- SWIPER SECTION END -->
   <!-- ROOMS SECTION START -->
   <section class="rooms-section">
      <div class=" rooms-row">
         <p class="rooms-title rooms-title-mobile">Rooms</p>
         <p class="rooms-sub-title rooms-sub-title-mobile">Get Acquainted With the Comfort of Rooms</p>
         <div class="rooms-carousel">
            <div id="roomsCarousel" class="carousel slide" data-bs-ride="carousel">
               <div class="carousel-indicators">
                  <button type="button" data-bs-target="#roomsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#roomsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#roomsCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
               </div>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img class="carouselImage" src="./assets/images/miramareBeach/deluxe.webp" alt="First slide">
                     <div class="carousel-caption ">
                        <button class="carousel-control-prev" type="button" data-bs-target="#roomsCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <p>Deluxe </p>
                        <button class="carousel-control-next" type="button" data-bs-target="#roomsCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <img class="carouselImage" src="./assets/images/miramareBeach/suite.webp" alt="Second slide">
                     <div class="carousel-caption ">
                        <button class="carousel-control-prev" type="button" data-bs-target="#roomsCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <p> Suite</p>
                        <button class="carousel-control-next" type="button" data-bs-target="#roomsCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <img class="carouselImage" src="./assets/images/miramareBeach/superior.webp" alt="Third slide">
                     <div class="carousel-caption ">
                        <button class="carousel-control-prev" type="button" data-bs-target="#roomsCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <p>Superior</p>
                        <button class="carousel-control-next" type="button" data-bs-target="#roomsCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <img class="carouselImage" src="./assets/images/miramareBeach/family-superior.webp" alt="Third slide">
                     <div class="carousel-caption ">
                        <button class="carousel-control-prev" type="button" data-bs-target="#roomsCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <p>Family Superior</p>
                        <button class="carousel-control-next" type="button" data-bs-target="#roomsCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="rooms-block">
            <p class="rooms-title">Rooms</p>
            <p class="rooms-sub-title">Get Acquainted With the Comfort of Rooms</p>
            <p class="rooms-text"> The rooms and suites of the Miramare Beach Hotel have a feeling of homeliness and comfort. Elegant and cozy, they are focused on providing all the amenities to make your stay unforgettable. Miramare Beach Hotel offers 4 types of comfortable accommodation:<br> <span class="darker">Superior , Deluxe, Suite and Standard rooms.</span></p>
            <a class="rooms-discover-btn" href="#">
               <p class="btn-text">Discover</p>
            </a>
         </div>
      </div>
   </section>
   <!-- ROOMS SECTION END-->
   <!-- ONLINE BOOKING SECTION -->
   <section class="online-booking-section">
      <div class="online-booking online-booking-beach">
         <svg class="booking-svg" width="50" height="43" viewBox="0 0 50 43" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M24.7124 18.5324C24.7124 18.5324 14.2676 5.65593 -0.363281 14.4712C-0.363281 14.4712 24.7124 23.4343 24.7124 42.8279C24.7124 23.4343 49.788 14.4712 49.788 14.4712C35.1572 5.65338 24.7124 18.5324 24.7124 18.5324Z" fill="#F5F5F5" opacity="0.5"/>
            <path d="M18.1016 11.0752L24.7126 0L31.321 11.0752L24.7126 15.465L18.1016 11.0752Z" fill="#F5F5F5" opacity="0.5"/>
         </svg>
         <div class="online-booking-info">
            <p class="booking-title">Online Booking</p>
            <p class="booking-text">
               When booking rooms at the Miramare Beach Hotel on our website or with the help of call center operators, you are offered a discount on early booking and free accommodation for children under 12 years old.
            </p>
            <p class="booking-text">In addition, you can choose a concept for newlyweds "Honeymoon", get a discount for a long stay and access to additional payment methods.</p>
            <p class="booking-text">And all this in the presence of a guaranteed refund package when canceling a reservation.</p>
            <a class="online-booking-btn" href="#">
               <p class="raleway online-booking-txt">
                  Book Now
               </p>
            </a>
         </div>
      </div>
   </section>
   <!-- ONLINE BOOKING SECTION END -->
   <!-- CONTACT US SECTION START -->
   <section class="contact-us-section">
      <div class=" contact-row">
         <div class="contact-us-wrapper">
            <div class=" contact-item-1 contact-item">
               <div class="contact-us-inner">
                  <p class="contact-us-title cormorant">Contact Us</p>
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
                     <p class="raleway call-btn-txt">
                        Let Us Call You
                     </p>
                  </a>
               </div>
            </div>
            <div class=" contact-item img-item-1">
               <img class="contact-img-1" src="./assets/images/contactSection/contact-us-1.webp">
            </div>
            <div class=" contact-item img-item-2">
               <img class="contact-img-2" src="./assets/images/contactSection/contact-us-2.webp">
            </div>
         </div>
      </div>
   </section>
   <!-- CONTACT US SECTION END -->
   <a href='#' class="scroll-to-top" onclick=scrollToTop()>
      <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
         <path d="M20 18L10.5 8L1 18" stroke="#233038" stroke-opacity="0.8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
         <path d="M17 8L10.5 1L4 8" stroke="#233038" stroke-opacity="0.8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
   </a>
</main>
</section>
<!-- CONTACT US SECTION END -->
@endsection
@section('javascript-imports')

<script src="{{ asset('assets/frontend/js/homepage.js') }}"></script>
<script src="{{ asset('assets/frontend/libs/js/flatpickr.js') }}"></script>

@endsection
@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/contact-section.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/flatpickr.min.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@300;400;500;600;700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
@endsection