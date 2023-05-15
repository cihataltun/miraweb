@extends('frontend.en.layouts.master')

@section('title', 'ANTALYA HOTELS - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('antalya-hotels') }}"
        aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('tr-antalya-hotels') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-antalya-hotels') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-antalya-hotels') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<!-- Hero Swiper Section -->

<div class="hero-swiper-wrapper">

    <div class="swiper offers-hero-swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="offers-slide-inner">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-1.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-1.webp') }}" />
                    <div class="offers-hero-text offers-hero-1">
                        <p class="offers-1-top">For Guests</p>
                        <p class="offers-1-big">
                            Free <br> Tokens
                        </p>
                        <p class="offers-1-bottom">For Water Sports</p>
                    </div>
                            <div class="water-sports-addendum-wrapper">            <p class="offers-addendum">Book your vacation through the call center and get 4 tokens as a gift</p>
                    <p class="offers-addendum-right">Our guests can only benefit from one of the campaigns.</div>

                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="offers-slide-inner">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-2.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-2.webp') }}" />
                    <div class="offers-hero-text offers-hero-2">
                        <p class="offers-2-big">
                            SPA Services <br> As a Gift!
                        </p>
                        <p class="offers-2-small">
                            When booking through the call center
                        </p>
                        <p class="offers-2-medium">Free Massage or <br> Foam Wrap</p>
                    </div>
                    <p class="spa-offers-addendum"> Our guests can only benefit from one of the campaigns.</p>


                </div>
            </div>
            <div class="swiper-slide">
                <div class="offers-slide-inner offers-3">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-3.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-3.webp') }}" />
                    <div class="offers-hero-text offers-hero-3">
                        <div class="offers-3-medium">
                            <img class="offers-text-wrap"
                                src="{{ asset('assets/frontend/images/offers/svg/beautiful.svg') }}" />
                            Premium
                        </div>
                        <p class="offers-3-big">
                            Pavillon for serenity
                        </p>
                        <div class="offers-3-small">
                            <img class="offers-icon" src="{{ asset('assets/frontend/images/offers/svg/call.svg') }}" />
                            Free of charge when the King Suite is booked through the call center
                        </div>
                    </div>
                    <p class="offers-addendum-center"> Our guests can only benefit from one of the campaigns.</p>

                </div>
            </div>
            <div class="swiper-slide">
                <div class="offers-slide-inner offers-4">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-4.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-4.webp') }}" />
                    <div class="offers-hero-text offers-hero-4">
                        <p class="offers-4-small">
                            For Guests
                        </p>
                        <p class="offers-4-big">
                            VIP Transfer
                        </p>
                        <div class="offers-4-medium">
                            <img class="offers-text-wrap-1"
                                src="{{ asset('assets/frontend/images/offers/svg/line.svg') }}" />

                            Free Of Charge
                            <img class="offers-text-wrap-2"
                                src="{{ asset('assets/frontend/images/offers/svg/line-two-01.svg') }}" />

                        </div>

                    </div>
                    <div class="transfer-addendum-wrapper"><p class="offers-4-addendum">
                        Guests who book accommodation through the call center can take advantage of the free VIP
                        transfer service</p>
                        <p class="offers-addendum-left"> Our guests can only benefit from one of the campaigns.</p></div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="offers-slide-inner offers-5">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-5.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-5.webp') }}" />
                    <div class="offers-hero-text offers-hero-5">
                        <p class="offers-5-big">Giving Gifts</p>
                        <img src="{{ asset('assets/frontend/images/offers/svg/line-two.svg') }}" />
                        <p class="offers-5-small">For The Little Ones</p>
                  
                    </div>      <p class="children-offers-addendum"> Our guests can only benefit from one of the campaigns.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SHOWCASE SECTION -->

<div class="showcase-section-wrapper">
    <div class="plane-svg colorful-image-wrapper"></div>

    <img class="plane-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/plane-1.svg') }}" />
    <p class="plane-before">...and book a ticket right away</p>
    <div class="booking-section-wrapper">
        <p class="booking-section-title">PLAN YOUR TRIP</p>
        <p class="booking-section-title-2">With our hotel</p>
        <div class="brand-swiper-wrapper">
            <div class="swiper brand-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="https://www.tripadvisor.com.tr/Hotel_Review-g4833191-d6427728-Reviews-Port_Nature_Luxury_Resort_Hotel_Spa-Bogazkent_Serik_District_Turkish_Mediterranean_Co.html"><img class="svg-tripadvisor" src="{{ asset('assets/frontend/images/offers/tripadvisor.png') }}" /></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.booking.com/searchresults.tr.html?ss=Port+Nature&ssne=Side&ssne_untouched=Side&label=bookings-name-lO9ne8CLb_o7ijml9UoG0QS540961834209%3Apl%3Ata%3Ap1%3Ap22.563.000%3Aac%3Aap%3Aneg%3Afi%3Atikwd-65526620%3Alp1012764%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YcX_GyndjDE1ljcv9tcUssY&aid=376386&lang=tr&sb=1&src_elem=sb&src=searchresults&group_adults=2&no_rooms=1&group_children=0&sb_travel_purpose=leisure"><img class="svg-booking" src="{{ asset('assets/frontend/images/offers/booking.png') }}" /></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.expedia.com/Belek-Hotels-Port-Nature-Luxury-Resort-Spa-All-Inclusive.h8108100.Hotel-Information?chkin=2023-04-11&chkout=2023-04-12&x_pwa=1&rfrr=HSR&pwa_ts=1679996745179&referrerUrl=aHR0cHM6Ly93d3cuZXhwZWRpYS5jb20vSG90ZWwtU2VhcmNo&useRewards=false&rm1=a2&regionId=6034717&destination=Belek%2C+Serik%2C+Antalya+Region%2C+T%C3%BCrkiye&destType=CURRENT_LOCATION&selected=8108100&latLong=36.83444%2C31.162045&sort=RECOMMENDED&userIntent="><img class="svg-expedia" src="{{ asset('assets/frontend/images/offers/expedia.png') }}" /></a>
                    </div>
                </div>
            </div>


        </div>
        <!-- Booking Section -->
        <div class="booking">
            <div class="dropdown room-selection-dropdown">
                <button class="room-selection-dropdown-btn  dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Select Room
                </button>
                <ul class="dropdown-menu room-selection-dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <div class="dropdown-item room-dropdown-link" href="#" data-value="Family Room">Family</div>
                    </li>
                    <li>
                        <div class="dropdown-item room-dropdown-link" href="#" data-value="Standard Room">Standard</div>
                    </li>
                    <li>
                        <div class="dropdown-item room-dropdown-link" href="#" data-value="King Suite">King Suite</div>
                    </li>
                </ul>
            </div>



            <label for="checkin"></label><input id="checkin" data-defaultDate="today" value="Check-in">
            <label for="checkout"></label><input id="checkout" data-defaultDate="today" value="Check-Out">

            <div class="guestDiv guestdiv-adult"><span class="guests guests-adult">
                    <img class="icon-head" src="{{ asset('assets/frontend/images/offers/svg/adult-icon.svg') }}">

                    Adult</span>
                <div class="guestMenu guestMenuAdult">
                    <div class="adultCounter dropdown-item">
                        <p>Adult(s)</p>
                        <div class="counter-item">
                            <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="adult-decrement"
                                onclick="adultDecrement()" alt="decrement" />
                            <p id="adultCount"></p>
                            <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="adult-increment"
                                onclick="adultIncrement()" alt="increment" />
                        </div>
                    </div>


                </div>

            </div>
            <div class="guestDiv guestdiv-child"><span class="guests guests-child">
                    <img class="icon-head" src="{{ asset('assets/frontend/images/offers/svg/child-icon.svg') }}">
                    Child</span>
                <div class="guestMenu guestMenuChild">

                    <div class="childCounter dropdown-item">
                        <p>Child(ren)</p>
                        <div class="counter-item">
                            <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                onclick="childDecrement()" alt="decrement" />
                            <p id="childCount"></p>
                            <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                onclick="childIncrement()" alt="increment" />
                        </div>
                    </div>
                    <div class="childAgeCounter1 childAgeCounter dropdown-item">
                        <p>Child 1 Age</p>
                        <div class="counter-item">
                            <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                onclick="childAge1Decrement()" alt="decrement" />
                            <p id="childAge1Count">0</p>
                            <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                onclick="childAge1Increment()" alt="increment" />
                        </div>
                    </div>
                    <div class="childAgeCounter2  childAgeCounter dropdown-item">
                        <p>Child 2 Age</p>
                        <div class="counter-item">
                            <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                onclick="childAge2Decrement()" alt="decrement" />
                            <p id="childAge2Count">0</p>
                            <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                onclick="childAge2Increment()" alt="increment" />
                        </div>
                    </div>
                    <div class="childAgeCounter3  childAgeCounter dropdown-item">
                        <p>Child 3 Age</p>
                        <div class="counter-item">
                            <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                onclick="childAge3Decrement()" alt="decrement" />
                            <p id="childAge3Count">0</p>
                            <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                onclick="childAge3Increment()" alt="increment" />
                        </div>
                    </div>
                </div>

            </div>
            <a href="https://portnature.rezervasyonal.com/?currency=TRY" class="bookNow"><img
                    src="{{ asset('assets/frontend/images/offers/svg/booknow.svg') }}" />Book Now</a>
        </div>
        <!-- Booking Section End -->
    </div>

    <div class="offers-rooms-swiper swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide rooms-swiper-slide">
                <img class="room-image-swiper" src="{{ asset('assets/frontend/images/offers/family.webp') }}" />
                <a href="{{ route('family-rooms') }}" class="room-swiper-button"><span>Family</span>
                    <img class="btn-chevron"
                        src="{{ asset('assets/frontend/images/offers/svg/button-chevron.svg') }}" />
                </a>
                <div class="room-swiper-details">
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-1.svg') }}" />
                        <p class="room-detail-text">4 adults + 1</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-2.svg') }}" />
                        <p class="room-detail-text">45 m2</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-3.svg') }}" />
                        <p class="room-detail-text">Side Sea View
                        </p>

                    </div>
                </div>
            </div>
            <div class="swiper-slide rooms-swiper-slide">
                <img class="room-image-swiper" src="{{ asset('assets/frontend/images/offers/king.webp') }}" />
                <a href="{{ route('kingsuit-rooms') }}" class="room-swiper-button"><span>King Suite</span>
                    <img class="btn-chevron"
                        src="{{ asset('assets/frontend/images/offers/svg/button-chevron.svg') }}" />
                </a>
                <div class="room-swiper-details">
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-1.svg') }}" />
                        <p class="room-detail-text">5 adults + 1</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-2.svg') }}" />
                        <p class="room-detail-text">110 m2</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-3.svg') }}" />
                        <p class="room-detail-text">Sea View
                        </p>

                    </div>
                </div>
            </div>
            <div class="swiper-slide rooms-swiper-slide">
                <img class="room-image-swiper" src="{{ asset('assets/frontend/images/offers/standard.webp') }}" />
                <a href="{{ route('standard-rooms') }}" class="room-swiper-button"><span>Standard</span>
                    <img class="btn-chevron"
                        src="{{ asset('assets/frontend/images/offers/svg/button-chevron.svg') }}" />
                </a>
                <div class="room-swiper-details">
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-1.svg') }}" />
                        <p class="room-detail-text">2 adults + 2</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-2.svg') }}" />
                        <p class="room-detail-text">34 m2</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-3.svg') }}" />
                        <p class="room-detail-text">Sea / Side / Land View
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="room-swiper-controls">
            <div class="swiper-prev">
                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 13L1 7L7 1" stroke="#ECD38D" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>

            </div>
            <div class="swiper-next">
                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 13L7 7L1 1" stroke="#ECD38D" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>

            </div>
            <div class="swiper-scrollbar"></div>

        </div>
    </div>
</div>

<!--- FLIGHT SECTION -->

<div class="flight-wrapper">
    <p class="flight-addendum">
        On our website, linking to other websites or referring to other websites does not hold the site owner
        responsible for the content of the linked or referred websites, and the site owner cannot be held liable for any
        damage or loss arising from the content of other websites. All links to other websites are provided on our
        website for the convenience of our website users. This arrangement does not imply that Port Nature or its
        affiliates are in any way associated with or related to those other websites or their owners.

    </p>
    <div class="flight-swiper-div">
        <div class="swiper flight-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
<a href="https://www.flypgs.com/en/cities/flights-to-antalya"><img class="pegasus-logo" src="{{ asset('assets/frontend/images/offers/logo-1.png') }}" /></a>                </div>
                <div class="swiper-slide">
<a href="https://www.skyscanner.com/"><img class="scanner-logo" src="{{ asset('assets/frontend/images/offers/logo-2.png') }}" /></a>                </div>
                <div class="swiper-slide">
<a href="https://www.corendonairlines.com/"><img class="corendon-logo" src="{{ asset('assets/frontend/images/offers/logo-3.png') }}" /></a>                </div>
                <div class="swiper-slide">
<a href="https://www.aviasales.ru/?params=IST1&currency=usd"><img class="avia-logo" src="{{ asset('assets/frontend/images/offers/logo-4.png') }}" /></a>                </div>
                <div class="swiper-slide">
<a href="https://www.turkishairlines.com/en-int/flights/booking/index.html"><img class="turkish-logo" src="{{ asset('assets/frontend/images/offers/logo-5.png') }}" /></a>                </div>
            </div>
        </div>
    </div>
</div>

<!-- TRANSFER SECTION -->

<div class="transfer-wrapper">
    <img class="transfer-desktop" src="{{ asset('assets/frontend/images/offers/desktop-car.svg') }}">
    <img class="transfer-tablet" src="{{ asset('assets/frontend/images/offers/tablet-car.svg') }}">
    <img class="transfer-mobile" src="{{ asset('assets/frontend/images/offers/mobile-car.svg') }}">


    <div class="transfer-texts">
        <p class="transfer-title">Click here to book a transfer</p>
        <p class="transfer-mid">Spend the road in comfort</p>
        <a class="transfer-btn" target="blank" href="https://portnature.rezervasyonal.com/ExtraService">Book
            Transfer</a>
    </div>
</div>

<!--- CONTACT SECTION -->
<div class="offers-contact-wrapper">
    <div class="offers-contact-div">
        <div class="luggage-image-wrapper colorful-image-wrapper"></div>

        <div class="offers-contact-info">
            <p class="offers-contact-title">Free contact call centre or online booking</p>
            <a href="tel:+902427310707">
                <img src="{{ asset('assets/frontend/images/offers/svg/phone.svg') }}" />

                +90 (242) 731 07 07
            </a>
            <a href="mailto:info@portnature.com.tr">
                <img src="{{ asset('assets/frontend/images/offers/svg/mail.svg') }}" />
                info@portnature.com.tr
            </a>
            <a href="https://api.whatsapp.com/send?phone=905334141923&text=&source=&data="
                class="offers-contact-whatsapp">
                <img src="{{ asset('assets/frontend/images/offers/svg/whatsapp.svg') }}" />
                WhatsApp
            </a>
        </div>
    </div>
</div>

<!--- FIRST SPLIT SECTION -->
<div class="offers-first-split">
    <div class="first-split-clouds colorful-image-wrapper">
    </div>
    <div class="split-text">
        <h1>ANTALYA HOTELS</h1>
        <p>Antalya includes the <a href="https://www.portnature.com.tr/en"> best all inclusive 5 star hotels</a> with flexible deals. If you are looking for luxury
            travel deals, don’t look any further <b>Antalya hotels</b> await you. You can make a reservation easily with the
            call center or <a href="https://portnature.rezervasyonal.com/">online booking</a> at Antalya hotels. Also, the Antalya hotels call center service has the best
            price and last-minute opportunities. Antalya hotels website and <a href="tel:+902427310707"> call center service </a> offer the best deals
            package. Don’t miss this chance and <a href="tel:+902427310707">call now</a>. There are rooms for everyone in the Antalya hotel. When you
            looking for accommodation with last-minute deals Antalya hotel waiting for you.</p>
    </div>
    <a class="split-img" href="https://www.portnature.com.tr/en
    ">
        <img
            src="{{ asset('assets/frontend/images/offers/seo/en/antalya/antalya-hotels-port-nature-premium-resort-hotel.webp') }}" />
    </a>
</div>

<!--- BOOKING OPPORTUNITIES SECTION -->

<div class="opportunity-wrapper">
    <p class="h2-title">BOOKING OPPORTUNITIES</p>
    <div class="swiper opportunity-swiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <a href="{{ route('concert') }}" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-one.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">Upcoming Concerts at the Hotel 💓💥</p>
                        <p>Experience world-class music in the comfort of Port Nature Luxury Resort Hotel with our exclusive
                            concert series featuring top performers from around the globe.</p>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="https://www.planetware.com/tourist-attractions-/antalya-tr-ant-at.html"
                    class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-two.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">Visit The Best Locations In Antalya

                            🥰 💤 🏖 </p>
                        <p>Antalya has a must-visit destination with unique nature for those seeking to immerse themselves in this beautiful city's rich history and culture. </p>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ route('spa') }}" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-three.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">Experience Ultimate Relaxation 🥰 💎</p>
                        <p>Unwind and rejuvenate your mind, body, and soul with our luxurious spa treatments, designed
                            to relax and refresh you from head to toe. </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!--- RATING SECTION -->

<div class="rating-wrapper">
    <p class="rating-title">Through the Eyes of Our Guests </p>
    <div class="rating-swiper-div">
        <p class="rating-addendum">Positive (15)</p>
        <div class="swiper rating-swiper swiper-container">

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="rating-item">
                        <div class="rating-upper">
                            <img class="rating-profile-pic"
                                src="{{ asset('assets/frontend/images/offers/contacts-1.webp') }}">
                            <div class="rating-info">
                                <p class="rating-name">Irina S</p>
                                <div class="rating-stars"></div>
                            </div>
                        </div>
                        <div class="rating-lower">
                            <p class="rating-text">
                                They settled in immediately . Daily cleaning, the rooms are
                                fully equipped with hygiene products. Amazed by the wonderful
                                service in restaurants . Coffee and ice cream with desserts just fly away.
                                Responsive Russian-speaking staff solves any request.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rating-item">
                        <div class="rating-upper">
                            <img class="rating-profile-pic"
                                src="{{ asset('assets/frontend/images/offers/contacts-2.webp') }}">
                            <div class="rating-info">
                                <p class="rating-name">Tatiana R</p>
                                <div class="rating-stars"></div>
                            </div>
                        </div>
                        <div class="rating-lower">
                            <p class="rating-text">
                                A place where you want to return to ❤️
                                We had a family vacation 2vzr and children (4 and 6 years old) in May 2022 and were
                                delighted 😍 Despite the fact that the concerts were canceled, the animation was at the
                                highest level.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rating-item">
                        <div class="rating-upper">
                            <img class="rating-profile-pic"
                                src="{{ asset('assets/frontend/images/offers/contacts-3.webp') }}">
                            <div class="rating-info">
                                <p class="rating-name">Belall423</p>
                                <div class="rating-stars"></div>
                            </div>
                        </div>
                        <div class="rating-lower">
                            <p class="rating-text">
                                An unbiased review of an objective tourist is a good Turkish hotel, strong, good.As a
                                result, I will say that I can recommend the hotel, even despite the end of the season
                                everything was great, at least for us. Mood creates emotions. What you tune in to, you
                                will get)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rating-item">
                        <div class="rating-upper">
                            <img class="rating-profile-pic"
                                src="{{ asset('assets/frontend/images/offers/contacts-4.webp') }}">
                            <div class="rating-info">
                                <p class="rating-name">Lida K</p>
                                <div class="rating-stars"></div>
                            </div>
                        </div>
                        <div class="rating-lower">
                            <p class="rating-text">
                                Thanks to the animators of the hotel for an unforgettable stay! 💕
                                I have been to many hotels in Turkey, but this one will always remain in my heart! There
                                are too many advantages to list them all...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rating-item">
                        <div class="rating-upper">
                            <img class="rating-profile-pic"
                                src="{{ asset('assets/frontend/images/offers/contacts-5.webp') }}">
                            <div class="rating-info">
                                <p class="rating-name">Paradise601</p>
                                <div class="rating-stars"></div>
                            </div>
                        </div>
                        <div class="rating-lower">
                            <p class="rating-text">
                                The best holiday at the beginning of the season!
                                I liked everything very much, the weather let us down for a couple of days, but there
                                are no complaints about the hotel. Top notch service, excellent food. In a word, I love
                                it!!!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rating-item">
                        <div class="rating-upper">
                            <img class="rating-profile-pic"
                                src="{{ asset('assets/frontend/images/offers/contacts-6.webp') }}">
                            <div class="rating-info">
                                <p class="rating-name">Leonid Sh</p>
                                <div class="rating-stars"></div>
                            </div>
                        </div>
                        <div class="rating-lower">
                            <p class="rating-text">
                                Vacation with wife
                                We were received very warmly and joyfully. A pleasant surprise was a one-time free visit
                                to the spa with a choice of any procedure you like. This is really wow! Thank you!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rating-item">
                        <div class="rating-upper">
                            <img class="rating-profile-pic"
                                src="{{ asset('assets/frontend/images/offers/contacts-7.webp') }}">
                            <div class="rating-info">
                                <p class="rating-name">Elina</p>
                                <div class="rating-stars"></div>
                            </div>
                        </div>
                        <div class="rating-lower">
                            <p class="rating-text">
                                Holidays with parents and children
                                This is our second year with the whole family. And for the second year we are leaving
                                with good impressions. Children's animation is on top. Will definitely come back again!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rating-item">
                        <div class="rating-upper">
                            <img class="rating-profile-pic"
                                src="{{ asset('assets/frontend/images/offers/contacts-8.webp') }}">
                            <div class="rating-info">
                                <p class="rating-name">Artem B</p>
                                <div class="rating-stars"></div>
                            </div>
                        </div>
                        <div class="rating-lower">
                            <p class="rating-text">
                                Rest is great
                                I really liked the hotel, delicious cocktails, I like the food in the restaurant. Every
                                evening there is a mini disco for younger children, younger children run with joy every
                                evening.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rating-item">
                        <div class="rating-upper">
                            <img class="rating-profile-pic"
                                src="{{ asset('assets/frontend/images/offers/contacts-9.webp') }}">
                            <div class="rating-info">
                                <p class="rating-name">Lyubov M</p>
                                <div class="rating-stars"></div>
                            </div>
                        </div>
                        <div class="rating-lower">
                            <p class="rating-text">
                                Lovely vacation
                                Oh, we fell in love with this hotel with all our heart, it was a wonderful vacation
                                where everyone liked it.
                                Kids club you are the best!!! Thanks to all the staff of the hotel. We will come again!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rating-item">
                        <div class="rating-upper">
                            <img class="rating-profile-pic"
                                src="{{ asset('assets/frontend/images/offers/contacts-10.webp') }}">
                            <div class="rating-info">
                                <p class="rating-name">Arthur K</p>
                                <div class="rating-stars"></div>
                            </div>
                        </div>
                        <div class="rating-lower">
                            <p class="rating-text">
                                Liked the hotel very much. Vacationing with my son. There are many activities for
                                children, every day there are activities on the street. Animator Nastya spends boccia,
                                football and darts twice. The hotel has nice staff.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="rating-swiper-controls">
                <div class="swiper-prev">
                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 13L1 7L7 1" stroke="#ECD38D" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                </div>
                <div class="swiper-next">
                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 13L7 7L1 1" stroke="#ECD38D" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                </div>
                <div class="swiper-scrollbar"></div>

            </div>
        </div>
    </div>

</div>

<!-- Split to right 1 -->
<div class="splits-mother-wrapper">

    <div class="grey-wrapper">
        <div class="split-wrapper first-split">
            <div class="split-1">
                <div class="split-svg colorful-image-wrapper"></div>
                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/plane-2.svg') }}">

            </div>
            <div class="split-2">
                <h2 class="split-text-1">Antalya Hotels All Inclusive</h2>
                <p>
                    <b>Antalya</b> all inclusive <b>hotels</b> have a lot of advantages such as a water park. 
                    Also, there is the <a href="https://portnature.com.tr/aquapark">Antalya aquapark hotel</a>, besides all inclusive advantage. 
                    It is the best choice for the best beach resorts in Antalya all inclusive hotel. 
                    Antalya all inclusive hotel includes special moments for your honeymoon. Especially, 
                    Belek resort Antalya is the most unique hotel one of the all-inclusive hotels. 
                    <a href="tel:+902427310707">Book now with a call center</a> or <a href="https://portnature.rezervasyonal.com/">online booking</a> and live all inclusive privileges.
                    Best all inclusive resorts Antalya have a room for everyone in Antalya all inclusive hotels.
                </p>
            </div>
        </div>
    </div>
    <div class="split-wrapper second-split">
        <div class="split-1">
            <h3 class="split-text-2">Best Hotels In Antalya</h3>
            <p> <a href="https://www.portnature.com.tr/">Port Nature Luxury Resort & Spa</a> hotel is one of the best hotels in Antalya for its luxurious amenities
                and exceptional service. When it comes to Antalya hotels, yours stands out as one of the best locations.
                Your hotels are known for being one of the <b>best resort in Antalya</b>, thanks to their world-class cuisine.
                As one of the best hotels in Antalya, your establishment deals with unbeatable value and comfort. Your
                hotels prime location and beautiful facilities make it one of the best hotels in Antalya.
            </p>
        </div>
        <a class="split-2" href="https://www.portnature.com.tr/all-day-dining-alacarte-restaurant">
            <img class="offers-split-photo"
                src="{{ asset('assets/frontend/images/offers/seo/en/antalya/best-hotels-in-antalya-all-day-dining-ala-carte-restaurant.webp') }}">


        </a>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper third-split split-with-svg">
            <div class="split-1">
                <div class="split-svg colorful-image-wrapper"></div>

                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/belek.svg') }}">

            </div>
            <div class="split-2">
                <h4 class="split-text-3">Hotel Antalya All Inclusive Booking</h4>
                <p>
                    Antalya hotels all inclusive offers are always here for your dream holiday. Call now, 
                    make reservation in Antalya all inclusive hotel, and come with flights. The best ultra 
                    all inclusive hotels in Antalya waiting for your booking in Antalya. Also, Belek resort 
                    Antalya includes a honeymoon suite, family room, etc. There is a lot of hotel Antalya all
                     inclusive booking. <a href="tel:+902427310707">Call now</a> and book a luxury break in summer with very flexible rates in 
                     <b>Antalya all inclusive hotel</b>. Luxury hotel exclusive deals wait for exclusive guests in Antalya all inclusive hotel for your booking.
                </p>
                <h4 class="third-second-h4 split-text-3">Top Best Family Hotels in Antalya</h4>
                <p>
                    As one of the <b>top best family hotel in Antalya</b>, Belek is ideal for a memorable family resort. For families seeking the best hotel in Antalya, Belek establishment is a top choice. Your holiday exceptional amenities and service make it one of the best family hotel in Antalya. Among the top family resorts in Antalya, your establishment stands out for its unbeatable value. Your hotel prime location and superb facilities make it one of the best family hotel in Antalya.
                 </p>
            </div>
        </div>
    </div>
    <div class="split-wrapper fourth-split split-with-picture">
        <a class="split-1" href="https://www.portnature.com.tr/mini-club-alacarte-restaurant">
            <img class="offers-split-photo"
                src="{{ asset('assets/frontend/images/offers/seo/en/antalya/best-antalya-kid-friendly-resorts-mini-club-for-children.webp') }}">


        </a>
        <div class="split-2">
            <h5 class="split-text-4">Best Antalya Kid-Friendly Resorts</h5>
            <p>
                Check the best Antalya kid friendly resorts for unforgettable family holidays. Among Antalya resorts,
                this is the best choice for families seeking a fun-filled getaway. This hotel is renowned as one of the
                best kid-friendly resorts in Antalya for its exciting activities. For the family Tripadvisor hotels
                Antalya, hotels kid-friendly amenities are unmatched. Resort is the best among Antalya kid-friendly
                hotels for its superb facilities and service. As one of the best kid-friendly resorts in Antalya, your
                hotel promises a memorable stay for families. Best hotels in Antalya are <a href="https://www.portnature.com.tr/mini-club-alacarte-restaurant">kid-friendly resorts for
                families.</a> </p>

        </div>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper fifth-split">
            <div class="split-1">
                <h3 class="split-text-5">Best All Inclusive Resorts Antalya</h3>
                <p>
                    Antalya hotels all inclusive resort advantages include a Belek holiday this summer. 
                    Antalya all inclusive deals are best options for kids, and those looking for the best luxury resort. 
                    Antalya is the best all inclusive resort with great holiday deals for your 5 star hotels and family holiday.
                     You can call us or check online for booking hotel Antalya all inclusive. Call now for the best <a href="https://portnature.com.tr/family-room">family rooms</a>, 
                     <a href="https://portnature.com.tr/kingsuit-room">King suite</a> and <a href="https://portnature.com.tr/standard-rooms">standart rooms</a>. Antalya is the best holiday place for all inclusive resorts.
                </p>

            </div>
            <div class="split-2">
                <div class="split-svg colorful-image-wrapper"></div>


            </div>
        </div>
    </div>
    <div class="split-wrapper sixth-split split-with-picture">
        <div class="split-1">
            <a href="https://www.portnature.com.tr/king-suite-room">
            <img class="offers-split-photo" src="{{ asset('assets/frontend/images/offers/seo/en/antalya/all-inclusive-5-star-antalya-hotel-rates-king-suite-room.webp') }}">
            <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/line.svg') }}">


            </a>
        </div>
        <div class="split-2">
            <h4 class="split-text-6">All Inclusive 5 Star Antalya Hotel Rates</h4>
            <p>
                All-inclusive 5-star hotel in Antalya tenders the best rates for an Antalya family resort with a water
                park. As a 5-star all-inclusive hotel, yours is the best choice for value and luxury in Antalya. Antalya
                5-star all-inclusive hotel submits competitive rates for world-class amenities. For the ultimate
                all-inclusive 5-star experience in Antalya, your hotels rates are unmatched. All-inclusive 5-star hotel
                in Antalya provides exceptional service and amenities at affordable rates. As one of the <b>top
                all-inclusive 5-star hotels in Antalya</b>, yours is the best value for rates in Antalya 5 star hotel. </p>

        </div>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper seventh-split split-with-svg">

            <div class="split-1">
                <h5 class="split-text-7">Best Discount Antalya Hotel Deals</h5>
                <p>
                    Your hotel offers the best deals and discounts in Antalya and the best resort in Antalya for
                    couples. As one of the best hotel provides unbeatable deals and discounts on the beach of Antalya
                    all inclusive. Antalya hotel best rates on hotel rooms make them the best choice for
                    budget-conscious travelers. For the <b>best hotel deals in Antalya</b>, look no further than your
                    establishment. Belek hotel exceptional service and amenities make it the best value for room rates
                    in Antalya. Among the top resorts in Antalya, most of them stand out for their incredible deals and
                    discounts.
                </p>
                <h5 class="split-text-7">Belek Beach Resort Antalya</h5>
                <p>
                    Belek beachfront hotel is the right answer to the “<a href="https://www.trip.com/hot/where-to-stay-in-antalya/">where to stay Antalya</a>” question. 
                    Because Antalya beach has a luxury hotel with a cozy beach.  Call us or <a href="https://portnature.rezervasyonal.com/">online booking</a> now 
                    in <a href="https://www.portnature.com.tr/spa-center">Antalya hotel resort & spa</a> with special offers. Your kids never forget this experience in the 
                    Antalya family resort with water park. Book now, and make a plan to fly to beach resort Antalya 
                    on your dream holiday.
                </p>
            </div>
            <div class="split-2">
                <div class="split-svg colorful-image-wrapper"></div>
                <img class="split-svg-mobile"
                    src="{{ asset('assets/frontend/images/offers/svg/mobile/location-01.svg') }}">

            </div>
        </div>
    </div>




    <!-- Stage Swiper Section -->

    <div class="stage-wrapper">
        <div class="swiper stage-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="{{ route('activity') }}" class="stage-inner-wrapper">
                        <img class="stage-img" src="{{ asset('assets/frontend/images/offers/activities.webp') }}">
                        <div class="stage-text">
                            <p class="stage-small-text">have a good time</p>
                            <p class="stage-heading">Activities</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ route('concert') }}" class="stage-inner-wrapper">
                        <img class="stage-img" src="{{ asset('assets/frontend/images/offers/concert.webp') }}">
                        <div class="stage-text">
                            <p class="stage-small-text">your favorite artists</p>
                            <p class="stage-heading">Stage shows</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ route('aquapark') }}" class="stage-inner-wrapper">
                        <img class="stage-img" src="{{ asset('assets/frontend/images/offers/aquapark.webp') }}">
                        <div class="stage-text">
                            <p class="stage-small-text">safety for your child</p>
                            <p class="stage-heading">Aquapark</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>

    </div>
    <!-- Three Image Section -->
    <div class="three-img-wrapper">
        <div class="three-img-div">
            <div class="split-svg three-img-1 colorful-image-wrapper"></div>

            <div class="three-img-text">
                <h2 class="split-text-8">Great Holiday Deals In Antalya</h2>
                <p>
                    <a href="https://en.wikipedia.org/wiki/Antalya_Province">Antalya</a> is the place you will always have a great time! 
                    The holiday deals in Antalya hotels always have a great price range 
                    which everyone will be satisfied with. The holiday deals will always
                     cater to every desire of everyone including couples and kids. Belek resort 
                     Antalya always offers great services, with its well-equipped staff 7/24 at 
                     your service. Whether you're looking for a romantic getaway or a family vacation
                      Antalya hotels will always offer you great deals.
                </p>
            </div>
        </div>
        <div class="three-img-div">
            <div class="split-svg three-img-2 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h3 class="split-text-9">Antalya Luxury Holiday Packages</h3>
                <p>
                    Luxury Antalya hotels have amazing holiday packages that you and your loved ones will never forget.
                    Antalya luxury hotel holiday packages will welcome you like kings. Even in last minute reservations
                    Antalya, hotels will always be there with their holiday packages. Best all inclusive resorts Antalya
                    has wonderful beaches, delicious <a href="https://portnature.com.tr/alacarte-restaurants">à la carte restaurants</a> such as Italian and French, <a href="https://portnature.com.tr/spa-center"> spa facilities</a>,
                        <a href="https://portnature.com.tr/sushi-bar-alacarte-restaurant"> Sushi Bar</a> and much more. Also, Antalya luxury resorts have packages for families and couples seeking
                    adventure for their honeymoon. If you have kids there is <a href="https://www.portnature.com.tr/aquapark">Antalya family resort with water park</a> that
                    will always keep your little ones entertained.</p>
            </div>
        </div>
        <div class="three-img-div">
            <div class="split-svg three-img-3 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h4 class="split-text-10">Honeymoon Holiday Packages for Couples to Antalya</h4>
                <p>
                    If you are a newlywed, <b>holiday packages for couples Antalya</b> will help you choose the concepts for
                    your honeymoon. You should take a look at the wonderful opportunities that the Antalya honeymoon
                    hotel package offers to couples. There are many luxury honeymoon hotel in Antalya region where you
                    can realize your dream vacation with package offers. <b>Antalya hotel all inclusive</b> honeymoon package
                    is where you can have a pleasant vacation with extraordinary services for you. Luxury hotel Antalya
                    is the right choice with its honeymoon package offers, so book now and don't miss out on offers.
            </div>
        </div>

    </div>
    <div class="grey-wrapper">
        <div class="double-text-wrapper double-reverse">


            <div class="double-text">
                <h5 class="split-text-11">Holiday Packages with Flights</h5>
                <p>
                    The <b>best ultra all inclusive hotels in Antalya</b> always offer <b>holidays with flights</b>. That means when
                    you don't need to worry about booking international and domestic flights alongside your hotel
                    reservation. Booking ultra luxury holiday packages for couples Antalya not only means you will have
                    an amazing time in the hotel. It also comes with a VIP transfer for you from the airport to your
                    hotel. Antalya premium hotel tought everything for your comfort and relaxation. You don't need to
                    worry about anything but enjoying yourselves and your holiday at Antalya holidays with flights. </p>
            </div>

            <div class="double-text">
                <h5 class="split-text-11">Flights and Hotels to Antalya</h5>
                <p>

                    If you are planning a holiday, finding <b>flights and hotel to Antalya</b> has never been easier. The best
                    resort in Antalya for couples has everything planned out for you. Antalya is a popular holiday
                    destination known for its stunning beaches, historic landmarks, and vibrant culture. Any travel
                    agencies offer holiday packages that include flights to Antalya, along with <a href="https://www.portnature.com.tr/rooms">accommodation</a> and
                    various activities. These packages typically cater to a range of budgets and preferences, with
                    options for families, couples, and solo travelers. With convenient flight options from various
                    locations, booking a holiday package to Antalya has never been easier.
                </p>
            </div>
            <a href="https://www.portnature.com.tr/king-suite-room">
                <img class="offers-split-photo"
                    src="{{ asset('assets/frontend/images/offers/seo/en/antalya/all-inclusive-5-star-antalya-hotel-rates-king-suite-room.webp') }}">
            </a>
        </div>
    </div>

    <div class="split-wrapper eighth-split">
        <div class="split-1">
            <div class="split-svg eighth-split-img colorful-image-wrapper"></div>

            <img class="three-img-mobile" src="{{ asset('assets/frontend/images/offers/svg/camera.svg') }}">
            <img class="three-img-mobile img-rotate" src="{{ asset('assets/frontend/images/offers/svg/ticket.svg') }}">
            <img class="three-img-mobile img-rotate" src="{{ asset('assets/frontend/images/offers/svg/glasses.svg') }}">
        </div>
        <div class="split-2">
            <h2 class="split-text-12">Best Ultra All Inclusive Hotels in Antalya</h2>
            <p>
                Turkey is home to some of the best ultra all inclusive hotels in Antalya, offering guests a luxurious
                holiday experience. These hotels typically include all meals, <a href="https://www.portnature.com.tr/bars-cafes">snacks</a>, and <a href="https://www.portnature.com.tr/bars-cafes">drinks</a>, along with a range of
                on-site amenities. Some of the most popular ultra all inclusive hotels in Antalya include VIP transfers
                from airport. Best hotels in Antalya have stunning beachfront locations, top-notch dining options, and
                world class entertainment. Some of the top notch dining options are <a href="https://portnature.com.tr/kit-kat-cafe">KitKat Patisserie</a>, <a href="https://portnature.com.tr/sushi-bar-alacarte-restaurant">Sushi bar</a>,
                <a href="https://portnature.com.tr/italian-alacarte-restaurant">Italian</a>, <a href="https://portnature.com.tr/french-alacarte-restaurant">French</a> and <a href="https://portnature.com.tr/far-east-alacarte-restaurant">Far East</a>  <a href="https://portnature.com.tr/alacarte-restaurants">A' la carte restaurants. </a></p>
        </div>
    </div>


    <div class="grey-wrapper">
        <div class="double-text-wrapper">
            <div class="double-text">
                <h3 class="split-text-11">Family Rooms Rates in Antalya Hotels</h3>
                <p>

                    Antalya is a popular destination for families, with many family hotels offering <a href="https://www.portnature.com.tr/rooms">the best hotel room
                    rates</a>. Family rooms in Antalya hotel are typically designed to accommodate families with children,
                    featuring extra beds or pull out sofas and spacious layouts. The rates for Antalya kid friendly
                    hotels vary depending on factors such as hotel location, amenities, and level of luxury. However,
                    the best Antalya kid friendly resorts offer luxurious special promotions for families to enjoy a
                    comfortable vacation. If you are looking for a luxurious <a href="https://portnature.com.tr/family-room">family room</a> or a <a href="https://portnature.com.tr/king-suite-room">king suite</a>, Antalya has
                    plenty of options to choose from.</p>
            </div>
            <div class="double-text">
                <h3 class="split-text-11">Antalya Water Park Hotel</h3>
                <p>

                    Antalya is home to several hotels with water parks on their premises, offering guests a fun and exciting vacation. Antalya family resort with water park typically feature multiple water slides, wave pools, lazy rivers, and other water attractions. One of the most popular <b>water park hotel in Antalya</b> is Port Nature Luxury Resort Hotel, with over 18 different slides. With their thrilling aquapark facilities and comfortable accommodations, these hotels are the perfect choice for families. 
                </p>
            </div>

        </div>
    </div>



    <div class="double-text-wrapper double-text-final">
        <div class="double-text">
            <h3 class="split-text-11">Hotel Restaurants in Antalya</h3>
            <p>

                Antalya is renowned for its culinary, and many hotels in the area offer range of dining options to suit
                all tastes. From traditional Turkish cuisine to international specialties, guests can enjoy diverse
                array of culinary experiences without having to leave the hotel. Many hotels also offer all inclusive
                packages that include <a href="https://www.portnature.com.tr/food-drinks">food and drinks</a>, for guests to enjoy their favorite foods. You can find the
                World's best cuisines with no extra cost within <a href="https://www.portnature.com.tr/alacarte-restaurants">7 different A' la carte restaurants</a>. Port Nature Luxury
                Resort Hotel with <a href="https://www.portnature.com.tr/french-alacarte-restaurant">French</a>, <a href="https://www.portnature.com.tr/seaside-alacarte-restaurant">Seaside</a>, <a href="https://www.portnature.com.tr/all-day-dining-alacarte-restaurant">All Day Dining restaurant</a>, and many more for you to enjoy. </p>
        </div>
        <div class="double-text">
            <h3 class="split-text-11">Concerts in Antalya Hotels</h3>
            <p>

                Antalya is a popular destination for <a href="https://portnature.com.tr/concerts">concerts and live performances.</a> Many hotels in the area host
                regular events featuring local and international artists. These concerts are often held in the hotels
                outdoor amphitheater or concert hall, providing guests with unique memorable entertainment experience.
                If you're a music lover or simply looking for a night out, <a href="https://www.portnature.com.tr/concerts">concert at Antalya hotel</a> is for you. It is a
                great way to enjoy live entertainment while on vacation.
        </div>

    </div>
</div>
@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/offers.js') }}"></script>

@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/offers.css') }}" />

@endsection