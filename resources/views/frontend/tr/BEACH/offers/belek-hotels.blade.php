@extends('frontend.en.layouts.master')

@section('title', 'Belek Hotels - Miramare Hotels - Official Website')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('belek-hotels') }}"
        aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('tr-belek-hotels') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-belek-hotels') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-belek-hotels') }}">DE</a></li>
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
                        <a
                            href="https://www.tripadvisor.com.tr/Hotel_Review-g4833191-d6427728-Reviews-Port_Nature_Luxury_Resort_Hotel_Spa-Bogazkent_Serik_District_Turkish_Mediterranean_Co.html"><img
                                class="svg-tripadvisor"
                                src="{{ asset('assets/frontend/images/offers/tripadvisor.png') }}" /></a>
                    </div>
                    <div class="swiper-slide">
                        <a
                            href="https://www.booking.com/searchresults.tr.html?ss=Port+Nature&ssne=Side&ssne_untouched=Side&label=bookings-name-lO9ne8CLb_o7ijml9UoG0QS540961834209%3Apl%3Ata%3Ap1%3Ap22.563.000%3Aac%3Aap%3Aneg%3Afi%3Atikwd-65526620%3Alp1012764%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YcX_GyndjDE1ljcv9tcUssY&aid=376386&lang=tr&sb=1&src_elem=sb&src=searchresults&group_adults=2&no_rooms=1&group_children=0&sb_travel_purpose=leisure"><img
                                class="svg-booking"
                                src="{{ asset('assets/frontend/images/offers/booking.png') }}" /></a>
                    </div>
                    <div class="swiper-slide">
                        <a
                            href="https://www.expedia.com/Belek-Hotels-Port-Nature-Luxury-Resort-Spa-All-Inclusive.h8108100.Hotel-Information?chkin=2023-04-11&chkout=2023-04-12&x_pwa=1&rfrr=HSR&pwa_ts=1679996745179&referrerUrl=aHR0cHM6Ly93d3cuZXhwZWRpYS5jb20vSG90ZWwtU2VhcmNo&useRewards=false&rm1=a2&regionId=6034717&destination=Belek%2C+Serik%2C+Antalya+Region%2C+T%C3%BCrkiye&destType=CURRENT_LOCATION&selected=8108100&latLong=36.83444%2C31.162045&sort=RECOMMENDED&userIntent="><img
                                class="svg-expedia"
                                src="{{ asset('assets/frontend/images/offers/expedia.png') }}" /></a>
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
                    <a href="https://www.flypgs.com/en/cities/flights-to-antalya"><img class="pegasus-logo"
                            src="{{ asset('assets/frontend/images/offers/logo-1.png') }}" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.skyscanner.com/"><img class="scanner-logo"
                            src="{{ asset('assets/frontend/images/offers/logo-2.png') }}" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.corendonairlines.com/"><img class="corendon-logo"
                            src="{{ asset('assets/frontend/images/offers/logo-3.png') }}" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.aviasales.ru/?params=IST1&currency=usd"><img class="avia-logo"
                            src="{{ asset('assets/frontend/images/offers/logo-4.png') }}" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.turkishairlines.com/en-int/flights/booking/index.html"><img
                            class="turkish-logo" src="{{ asset('assets/frontend/images/offers/logo-5.png') }}" /></a>
                </div>
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
        <h1>Belek Hotels</h1>
        <p>
            Belek includes best all inclusive 5 star <b>hotels</b> with flexible deals. If you are looking for luxury travel
            deals, don’t look any further Belek Hotel awaits. You can make reservation easily with <a href="tel:+902427310707">call center</a> or <a href="https://portnature.rezervasyonal.com/">online
            booking</a> at <b>hotels in Belek</b>. Also, Belek hotel call center service has best price and last-minute
            opportunities. Belek hotel website and call center service offer best deals package. There are rooms for
            everyone in <a href="https://www.portnature.com.tr/en">Belek 5 star hotel</a>. When you looking for <a href="https://portnature.com.tr/rooms">accommodation</a> with last-minute deals, Belek hotels are
            waiting for you.
        </p>
    </div>
    <a class="split-img" href="https://www.portnature.com.tr/en">
        <img
            src="{{ asset('assets/frontend/images/offers/seo/en/belek/belek-hotels-port-nature-premium-hotel-resort.webp') }}" />
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
                        <p>Experience world-class music in the comfort of Port Nature Luxury Resort Hotel with our
                            exclusive
                            concert series featuring top performers from around the globe.</p>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="https://en.wikipedia.org/wiki/Belek" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-two.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">Visit The Best Locations At Belek


                            🥰 💤 🏖 </p>
                        <p>Belek has a unique nature and city atmosphere. You should do a half day boat tour and Family
                            Buggy Safari. You should visit Belek Clock Tower and the mosque. </p>
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
                <h2 class="split-text-1">Best Hotels in Belek</h2>
                <p>
                    Between the Mediterranean and Taurus Mountains there are best <b>Belek hotel 5 star</b>, best beach resort and other Belek best resorts. Regardless of your choice, best Belek hotels will provide fine
                    dining, Turkish baths and golden sands. The Belek best hotel area part of Turkish Riviera known as
                    Turquoise Coast, boasts long and stunning beaches. At best luxury hotels in Belek, you will find
                    flavors from global cuisine and Turkish specialties. Best Belek hotels serve classic French dishes,
                    Italian pasta varieties, teppanyaki grills and Mediterranean <a href="https://portnature.com.tr/alacarte-restaurants">à la carte menus</a>. Best Belek hotels
                    typically feature numerous swimming pools and <a href="https://portnature.com.tr/aquapark">water parks</a>.
                </p>
            </div>
        </div>
    </div>
    <div class="split-wrapper second-split">
        <div class="split-1">
            <h3 class="split-text-2">Top 10 Hotels in Belek</h3>
            <p> The most popular vacation destination in Turkey is the Belek coast, are here top 10 <b>Belek luxury hotels</b>.
                Belek top best 10 hotels attract tourists from all over Europe to their lands. Beaches of top 10 <b>Belek
                all inclusive resorts</b> offer the perfect opportunity to relax. By exposing the face to soft sunlight and
                the body to the Mediterranean waters. Small yellow sand, smooth and gentle entrance to the sea are
                characteristics of the top 10 premium Belek hotel beach. The beaches are sandy, but tourists are more
                attracted by the variety of “urban” entertainment that Belek is famous for.
            </p>
        </div>
        <a class="split-2" href="https://www.portnature.com.tr/king-suite-room">
            <img class="offers-split-photo"
                src="{{ asset('assets/frontend/images/offers/seo/en/belek/top-10-hotels-in-belek-king-suite-room.webp') }}">


        </a>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper third-split split-with-svg">
            <div class="split-1">
                <div class="split-svg colorful-image-wrapper"></div>

                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/belek.svg') }}">

            </div>
            <div class="split-2">
                <h4 class="split-text-3">Belek Hotels 5 Star</h4>
                <p>
                    Experience unparalleled luxury and comfort at <b>Belek 5 star hotels</b> a popular destination. These high
                    end hotels offer a wide range of world class amenities, including fine dining, lavish <a href="https://portnature.com.tr/spa-center">spa facilities</a>
                    and state of art fitness centers with <a href="https://portnature.com.tr/indoor-pool">indoor pools</a>. Spend your days lounging by stunning pools. The
                    immaculate sandy beaches and crystal clear waters are perfect for both relaxation and water sports
                    enthusiasts. Indulge in warm Turkish hospitality and create unforgettable memories during your stay
                    at one of Belek 5 star hotels.

                </p>
                <h5 class="third-second-h4 split-text-3">Belek All Inclusive Hotels</h5>
                <p>
                    Belek all inclusive hotels is indispensable for those seeking comfort, <a href="https://portnature.com.tr/entertainment">entertainment</a>, culinary
                    delights, and luxury in Belek. In Belek hotels all inclusive, everything is tailored to your taste
                    with many alternatives available. You can sunbathe by pool or at beach, as both are possible in all
                    inclusive beach hotel in Belek. There are rich options available, including open buffets or à la
                    carte menus, where you can find international cuisine in all inclusive Belek hotel. You can choose
                    best hotels in Belek to enhance your happiness during your honeymoon and experience unforgettable
                    moments in Belek.
                </p>
            </div>
        </div>
    </div>
    <div class="split-wrapper fourth-split split-with-picture">
        <a class="split-1" href="https://www.portnature.com.tr/irish-pub">
            <img class="offers-split-photo"
                src="{{ asset('assets/frontend/images/offers/seo/en/belek/belek-beach-resort-hotel-irish-pub.webp') }}">


        </a>
        <div class="split-2">
            <h2 class="split-text-4">Beach Belek Resort Price</h2>
            <p>
                If you want to have a vacation in Belek but scared of fake advertisements on the internet, we've got you. Belek Resort comments are here to help you determine the best hotel for you and your loved ones. Before booking your holiday in Belek, you can read the detailed comments about the hotel. You can also check their qualifications, services, price and detailed reviews. With Belek Beach Resort comments, you can be sure about the place and book your holiday with peace of mind.            </p>

        </div>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper fifth-split">
            <div class="split-1">
                <h3 class="split-text-5">Beach Belek Resort Reviews</h3>
                <p>
                    When it comes to holiday in seaside hotel, Belek beach hotel reviews will come in handy. Traveling abroad with no experience can be a nightmare if you don't choose your hotel carefully. Comments on beach Belek resort are here to help you choose the best hotel in Belek that fully meets your needs. You can read all the reviews of previous hotel guests in all the details. In addition, beach Belek resort website is another good place where you can find out detailed information about hotels in Belek. Checking the pictures and reading the comments can strongly help you pick the hotel.
                </p>

            </div>
            <div class="split-2">
                <div class="split-svg colorful-image-wrapper"></div>


            </div>
        </div>
    </div>
    <div class="split-wrapper sixth-split split-with-picture">
        <div class="split-1">
            <a href="https://www.portnature.com.tr/concerts">
                <img class="offers-split-photo"
                    src="{{ asset('assets/frontend/images/offers/seo/en/belek/belek-luxury-hotels-concerts.webp') }}">
                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/line.svg') }}">


            </a>
        </div>
        <div class="split-2">
            <h2 class="split-text-6">Belek Luxury Hotels</h2>
            <p>
                Belek luxury hotel is situated in one of Turkey's vacation paradises, attracting millions of
                domestic and foreign tourists each year. Belek luxury hotel offers numerous vacation options,
                allowing visitors to enjoy the sea, sand, and sun. The luxury at Belek hotel all inclusive concept
                is most preferred choice for those seeking comfort, <a href="https://www.portnature.com.tr/entertainment">entertainment</a> decency, and luxury. In the
                comfortable Belek luxury hotel, everything is tailored to your preferences, with many alternatives
                to choose from. Whether you want to sunbathe by the sea or pool, both are possible in Belek luxury
                resort. 
            </p>

        </div>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper seventh-split split-with-svg">

            <div class="split-1">
                <h3 class="split-text-7">Belek Premium Spa Hotel & Resort</h3>
                <p>
                    If you seek both fun and complete relaxation in your travel plan a <a href="https://portnature.com.tr/spa-center">Belek spa hotel</a> can be a good
                    choice for you. You will lose your fatigue in a Belek 5 star spa hotel with a hammam, <a href="https://www.portnature.com.tr/indoor-pool">indoor pool</a>,
                    sauna steam bath. Freshen yourself with far eastern massages and aromatherapies at best hotels in
                    Belek. If you want to relax in hammam sauna and rejuvenate with exotic massages consider booking a
                    Belek spa hotel for your travel plans. Belek spa hotel options are most preferred places in both
                    summer and winter vacation spots for all ages and tastes.
                </p>
                <h3 class="split-text-7">Best Hotels in Belek for Families</h3>
                <p>
                    Best family hotels in Belek have thought of everything for you and your little ones. With services
                    ranging from <a href="https://portnature.com.tr/mini-club-alacarte-restaurant">Mini Club</a> to <a href="https://portnature.com.tr/aquapark">Aquapark</a> for children, your child can find everything that fits their
                    preferences. When your child is having fun that can never be forgotten, you can enjoy the peace as
                    well. When our professional services take care of your child entire day, you and your partner can
                    spend time for yourselves. Wide range of services are waiting for you in the best hotels in Belek.
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
                <h4 class="split-text-8">Family Resort Hotel Belek</h4>
                <p>
                    Belek is home to the best all inclusive and family hotels in Turkey and the world, providing entertainment for visitors of all age groups. Each Belek family hotel enhances every moment of your vacation with rich open buffet breakfasts, snacks, meals, and unlimited beverage service. Belek family hotel offers diverse services throughout the city, catering to every taste and budget. Those who want to combine comfort and fun during their vacation can enjoy a comfortable and delightful stay at a 5 star Belek family hotel.
                </p>
            </div>
        </div>
        <div class="three-img-div">
            <div class="split-svg three-img-2 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h5 class="split-text-9">Luxury Belek Kids Concept</h5>
                <p>
                    If you are a family looking for comfortable vacation at Belek hotel with Luxury Belek <a href="https://portnature.com.tr/kids-concept">Kids concept</a>,
                    look no further. A Belek hotel oriented around kids concepts is the best way to enjoy your vacation
                    stress free. There is <a href="https://portnature.com.tr/mini-club-alacarte-restaurant">Mini Club</a>, Mini Disco, <a href="https://portnature.com.tr/aquapark">Aqua Park</a>, and much more to enjoy for your little ones.
                    The magnificent sea is at your doorstep, and you can enjoy direct service to it all day long. You
                    should book your Belek family hotel before it's too late since Belek hotel reservations are mostly
                    full.
            </div>
        </div>
        <div class="three-img-div">
            <div class="split-svg three-img-3 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h5 class="split-text-10">Hotel Deluxe Belek Rooms</h5>
                <p>
                    If you are looking at <b>Belek all inclusive hotel</b> search results, you are in the right place. There
                    are the best family deluxe hotel <a href="https://portnature.com.tr/rooms">rooms</a> in Belek for 5 star holiday. You can stay at Belek all
                    inclusive resorts in peace. You can check Belek hotel reviews before finding the best hotel in
                    Belek. Deluxe hotel rooms in Belek have everything you might need. We are not only here for trip but
                    also for your Belek honeymoon vacation. <a href="tel:+902427310707">Call us</a> for hotel in Belek or make an <a href="https://portnature.rezervasyonal.com/">online reservation</a> for
                    the best hotel in Belek.
                </p>
            </div>
        </div>

    </div>
    <div class="grey-wrapper">
        <div class="double-text-wrapper double-reverse double-text-single">


            <div class="double-text">
                <h5 class="split-text-11">Best Hotel Restaurants</h5>
                <p>
                    Belek resorts all inclusive has the <a href="https://portnature.com.tr/main-restaurant">best hotel restaurants</a> in Belek. Belek Hotel is the most famous
                restaurant in town. Best restaurants and best hotel for the most elite guests in Belek. Also if you are
                searching for Belek hotels all inclusive is the right place. Belek resort is waiting to serve
                nature with a remarkable atmosphere. <a href="tel:+902427310707">Call us</a> or make an <a href="https://portnature.rezervasyonal.com/">online reservation</a> and stop worrying about
                'where to stay in Belek'. <a href="https://portnature.rezervasyonal.com/">Book now</a> and take advantage of Belek 5 star all inclusive hotel offers. 
                </p>
            </div>

          
            <a href="https://www.portnature.com.tr/concerts">
                <img class="offers-split-photo"
                    src="{{ asset('assets/frontend/images/offers/seo/en/belek/belek-luxury-hotels-concerts.webp') }}">
            </a>
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