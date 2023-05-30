@extends('frontend.en.layouts.master')

@section('title')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('turkey-hotels') }}"
        aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('tr-turkey-hotels') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-turkey-hotels') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-turkey-hotels') }}">DE</a></li>
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
        <h1>Turkey Hotels</h1>
        <p>
            Antalya is a beautiful coastal city in <b>Turkey</b> known for its stunning beaches, ancient ruins, and luxurious
            <b>hotels</b>. <b>Antalya Turkey hotels</b> is home to a wide range of resort options that offer a truly indulgent
            experience. Many of Belek Turkey hotels are located on or near the beach, offering guests breathtaking views
            of the Mediterranean Sea. Visitors can choose from all inclusive resorts, boutique hotels, or five star
            properties that offer everything a vacationer might need. Don't wait and <a href="tel:+902427310707">call our call center now</a> or make
            <a href="https://portnature.rezervasyonal.com/?_gl=1*1fr4zum*_ga*MTcwODk4ODk0Ny4xNjgyNDk1NTY4*_ga_6EYM72GR61*MTY4MzA5NTM1Mi4xNC4xLjE2ODMwOTU1NzEuMC4wLjA.">online reservation</a> to learn our best offers for your holiday.
        </p>
    </div>
    <a class="split-img" href="https://www.portnature.com.tr/en">
        <img
            src="{{ asset('assets/frontend/images/offers/seo/en/turkey/turkey-hotels-port-nature-premium-resort-hotel.webp') }}" />
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
                <a href="https://www.touropia.com/best-places-to-visit-in-turkey/" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-two.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">Visit The Best Locations In Turkey


                            🥰 💤 🏖 </p>
                        <p>
                            Turkey has stunningly beautiful, lush, and historic cities with a blend of unique culture, vibrant nightlife, sparkling streets, and delicious cuisine. 
                        </p>
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
                <h2 class="split-text-1">Turkey Hotels All Inclusive</h2>
                <p>
                    <b>Antalya Turkey hotels all inclusive</b> offer guests an immersive and hassle-free vacation experience.
                    These hotels typically include all <a href="https://www.portnature.com.tr/food-drinks">foods & drinks</a>, <a href="https://www.portnature.com.tr/bars-cafes">bars & cafes</a>, and access to various amenities and
                    activities on property. All inclusive hotel Belek Turkey is situated along stunning coastlines,
                    offering guests easy access to beaches and <a href="https://portnature.com.tr/activities">water activities</a>. Whether you're looking for relaxation,
                    adventure, or both, there's an all inclusive hotel Antalya to suit your needs. So <a href="tel:+902427310707">call our 7/24
                    operating call center</a> and don't miss out on last-minute holiday package offers.
                </p>
            </div>
        </div>
    </div>
    <div class="split-wrapper second-split">
        <div class="split-1">
            <h3 class="split-text-2">Top 10 Best Hotels in Turkey</h3>
            <p> <b>Top 10 best hotels in Turkey</b> offer their guests a luxurious and unforgettable vacation experience.
                Antalya hotels typically provide a range of amenities and services to ensure that their guests have
                comfortable and enjoyable stay. Some of the most common offerings include spacious and well-appointed
                <a href="https://portnature.com.tr/rooms">rooms</a>, <a href="https://portnature.com.tr/alacarte-restaurants">world-class restaurants</a>, full-service <a href="https://portnature.com.tr/spa-center">spas</a>, fitness centers, and <a href="https://portnature.com.tr/indoor-pool">indoor pool</a>. Additionally, many
                of these hotels offer access to private beaches, water sports, and other <a href="https://portnature.com.tr/activities">outdoor activities</a>. Other
                notable features may include stunning views, top-notch customer service, and convenient locations near
                popular attractions. <a href="tel:+902427310707">Call now</a> to learn all privileges you will get when you book through call center.
            </p>
        </div>
        <a class="split-2" href="https://www.portnature.com.tr/standard-rooms">
            <img class="offers-split-photo"
                src="{{ asset('assets/frontend/images/offers/seo/en/turkey/turkey-hotels-with-aquapark-standard-rooms.webp') }}">


        </a>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper third-split split-with-svg">
            <div class="split-1">
                <div class="split-svg colorful-image-wrapper"></div>

                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/belek.svg') }}">

            </div>
            <div class="split-2">
                <h4 class="split-text-3">Turkey All Inclusive Hotels Booking</h4>
                <p>
                    Booking an <b>all inclusive hotel Antalya Turkey</b> is a great way to enjoy a vacation. These hotels
                    typically offer a wide range of amenities and services, including <a href="https://www.portnature.com.tr/food-drinks">food & drinks</a>, and <a href="https://www.portnature.com.tr/entertainment">entertainment</a>,
                    all included in price. You can dine in <a href="https://www.portnature.com.tr/alacarte-restaurants">7 premium à la carte restaurants</a> like <a href="https://www.portnature.com.tr/french-alacarte-restaurant">French</a>, <a href="https://www.portnature.com.tr/italian-alacarte-restaurant">Italian</a>, <a href="https://www.portnature.com.tr/far-east-alacarte-restaurant">Far
                    East</a>, <a href="https://www.portnature.com.tr/seaside-alacarte-restaurant">Seaside</a>, <a href="https://www.portnature.com.tr/sushi-bar-alacarte-restaurant">Sushi Bar</a>, and <a href="https://www.portnature.com.tr/kit-kat-cafe">KitKat Cafe</a>. When booking best all inclusive hotel in Antalya, it's
                    important to research and compare different options to find best deals. Many of Turkey Antalya
                    hotels offer <a href="https://portnature.rezervasyonal.com/?_gl=1*1fr4zum*_ga*MTcwODk4ODk0Ny4xNjgyNDk1NTY4*_ga_6EYM72GR61*MTY4MzA5NTM1Mi4xNC4xLjE2ODMwOTU1NzEuMC4wLjA.">online booking</a> options, making planning and booking your perfect all-inclusive holiday
                    easy.

                </p>
                <h4 class="third-second-h4 split-text-3">Top Best Family Hotels in Turkey</h4>
                <p>
                    Top best hotels in Belek for families offer their guests a comfortable and worry free vacation. <a href="https://portnature.com.tr/en">Port
                    Nature Luxury Resort Hotel</a> has everything for your little ones. Most of top hotels in Antalya region
                    have an <a href="https://portnature.com.tr/aquapark">aquapark</a>, so everyone in family can enjoy it. Best family hotels in Turkey have 18 slides in
                    Aquapark to fill you with joy and provide a thrilling experience. So <a href="tel:+902427310707">book now</a> to enjoy Belek
                    vacation with your loved ones and have a memorable journey together.
                </p>
            </div>
        </div>
    </div>
    <div class="split-wrapper fourth-split split-with-picture">
        <a class="split-1" href="https://www.portnature.com.tr/born9-hennessy-lounge">
            <img class="offers-split-photo"
                src="{{ asset('assets/frontend/images/offers/seo/en/turkey/turkey-antalya-hotels-born9-hennessy-lounge-bar.webp') }}">


        </a>
        <div class="split-2">
            <h5 class="split-text-4">Best Turkey Kid-Friendly Resorts</h5>
            <p>
                Antalya Resort Turkey is perfect destination for family holidays, and there are plenty of <a href="https://portnature.com.tr/kids-concept">kid friendly</a>
                resorts to choose from. Antalya Resorts offer an array of amenities that cater to children's needs,
                including <a href="https://portnature.com.tr/mini-club-alacarte-restaurant">Mini club</a>, playgrounds, and <a href="https://portnature.com.tr/aquapark">pools with waterslides</a>. Many of the <b>best kid friendly resorts in
                Turkey</b>, such as the <a href="https://portnature.com.tr/en">Port Nature Luxury Resort Hotel</a>, offer all inclusive packages. Additionally, Belek
                resort Turkey offers <a href="https://portnature.com.tr/family-room">family rooms</a> and suites to accommodate larger families.
            </p>
        </div>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper fifth-split">
            <div class="split-1">
                <h3 class="split-text-5">Best All Inclusive Antalya Turkey Hotels</h3>
                <p>
                    Antalya resort Turkey boasts a wide range of all inclusive hotels that cater to different budgets
                    and preferences. Some of the <b>best all inclusive hotel in Antalya Turkey</b> offer luxurious amenities
                    like private beaches <a href="https://portnature.com.tr/spa-center">world-class spas</a> and <a href="https://portnature.com.tr/entertainment">entertainment</a> options. Families with children can opt for
                    hotels that provide numerous kid-friendly facilities like Mini Club. Overall Antalya best all
                    inclusive resorts offer an excellent combination of luxury and convenience making for a memorable
                    vacation. </p>

            </div>
            <div class="split-2">
                <div class="split-svg colorful-image-wrapper"></div>


            </div>
        </div>
    </div>
    <div class="split-wrapper sixth-split split-with-picture">
        <div class="split-1">
            <a href="https://www.portnature.com.tr/activities">
                <img class="offers-split-photo"
                    src="{{ asset('assets/frontend/images/offers/seo/en/turkey/turkey-hotels-5-stars-for-families-concerts.webp') }}">
                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/line.svg') }}">


            </a>
        </div>
        <div class="split-2">
            <h4 class="split-text-6">Hotels Near Antalya Turkey</h4>
            <p>
                <b>Hotels near Antalya Turkey</b> with its spectacular climate offer its guests a unique vacation experience.
                Beach resorts near Antalya have been awarded aquamarine sea with a lot of sea sports activities
                available. The <a href="https://portnature.com.tr/main-restaurant">restaurants</a> of these hotels are dedicated themselves to you to experience the best
                Turkish cuisine. The rates for resorts near Antalya vary depending on factors such as hotel location,
                amenities, and level of luxury. <a href="tel:+902427310707">Call now</a> for the best <a href="https://portnature.com.tr/family-room">family rooms</a>, <a href="https://portnature.com.tr/king-suite-room">King suite</a>, <a href="https://portnature.com.tr/standard-land-view-room">standard land view</a>,
                <a href="https://portnature.com.tr/standard-sea-view-room">standard sea view</a> or <a href="https://portnature.com.tr/standard-side-view-room">standard side sea view</a> rooms. Antalya is the best resort in Turkey for all
                inclusive hotels.
            </p>

        </div>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper seventh-split split-with-svg">

            <div class="split-1">
                <h5 class="split-text-7">Antalya Turkey 5 Star Hotels All Inclusive</h5>
                <p>
                    <b>Antalya Turkey 5 star hotels</b> are offering their guests vacation memories that will last a lifetime.
                    Antalya Turkey all inclusive resorts have many premium services. Antalya Turkey all inclusive
                    resorts have different <a href="https://portnature.com.tr/bars-cafes">bars</a>, including <a href="https://portnature.com.tr/flamingo-bar">Flamingo Bar</a>, <a href="https://portnature.com.tr/irish-pub">Irish Pub</a>, <a href="https://portnature.com.tr/lobby-bar">Lobby Bar</a>, and <a href="https://portnature.com.tr/script-chivas-lounge">Chivas Lounge</a>. For
                    coffee lovers there are also cafes like <a href="https://portnature.com.tr/davidoff-cafe">Davidoff Cafe</a> and <a href="https://portnature.com.tr/nespresso-cafe">Nespresso Cafe</a> for guests to enjoy.
                    Whether you're looking for high-end experience, relaxing poolside drink, traditional pub vibe, <a href="https://portnature.com.tr/en">Port
                    Nature Luxury Resort Hotel</a> has it all. With seven premium <a href="https://portnature.com.tr/alacarte-restaurants">à la carte restaurants</a>, you can take your
                    taste palate to the next level.
                </p>
                <h5 class="split-text-7">Antalya Turkey Resort</h5>
                <p>
                    Antalya, located on stunning beaches, is home to a variety of <b>luxury 5 star hotel Turkey</b> offer all
                    inclusive packages. Antalya Turkey Resort offers guests an unforgettable experience with its
                    exceptional service and breathtaking views of the Mediterranean Sea. If you are looking for a
                    fun-filled family vacation, Antalya 5 star hotels have everything you need. Enjoy gourmet cuisine,
                    indulge in spa treatments, lounge by the pool, or take part in exciting activities.
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
                <h2 class="split-text-8">Belek Turkey Hotels</h2>
                <p>
                    Belek includes best all inclusive 5 star resorts Turkey with flexible deals. If you are looking for
                    luxury travel deals, don’t look any further because best Belek hotels await. You can make
                    reservations easily with a call center 
                    or <a href="https://portnature.rezervasyonal.com/?_gl=1*1kmo0hi*_ga*MzEzMjAzNTQxLjE2Nzc3NTk0NTQ.*_ga_6EYM72GR61*MTY4MjY2MzUwNi40NS4xLjE2ODI2NjYyODAuMC4wLjA.">online 
                        booking</a> at hotels in Belek. Also, <a href="tel:+902427310707">Belek hotels call
                    center</a> service has best and last-minute opportunities. Turkey Belek hotels website and call center
                    service offer the best deals. There are rooms for everyone in Antalya Belek 5 star hotels. When you
                    are looking for <a href="https://www.portnature.com.tr/rooms">accommodation</a> with last-minute deals, Belek Hotels are waiting for you. </p>
            </div>
        </div>
        <div class="three-img-div">
            <div class="split-svg three-img-2 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h3 class="split-text-9">Deluxe Hotel Belek Turkey</h3>
                <p>
                    <b>Deluxe Hotel Belek</b> is a luxury resort located in the Belek region of Antalya Turkey. These 5 star
                    hotels Belek boasts a stunning beachfront location surrounded by lush green gardens and palm trees.
                    Guests can enjoy a variety of dining options including Turkish and international cuisine. Belek
                    hotels 5 star also features an <a href="https://portnature.com.tr/aquapark">outdoor pool</a>, <a href="https://portnature.com.tr/spa-center">spa</a>, fitness center and a big range of activities. With
                    its picturesque setting and luxurious amenities, Deluxe Hotel Belek is the perfect destination for a
                    relaxing getaway.
            </div>
        </div>
        <div class="three-img-div">
            <div class="split-svg three-img-3 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h4 class="split-text-10">Spa Hotel Belek Turkey</h4>
                <p>
                    If you seek fun and complete relaxation in your travel plan Belek spa hotel Belek Turkey may be good
                    choice. You will lose your fatigue in a Belek spa hotel Turkey with a hammam, sauna, and steam bath.
                    Freshen yourself with Far Eastern massages and aroma therapy <a href="https://www.portnature.com.tr/spa-center">spa services</a> at your <b>spa hotel Belek
                    Turkey</b>. If you want to relax in hammam and rejuvenate with massages, consider booking Belek spa
                    hotel Turkey for your travel. These options are most preferred places in both summer and winter
                    vacation spots for people of all ages and tastes.
                </p>
            </div>
        </div>

    </div>
    <div class="grey-wrapper">
        <div class="double-text-wrapper double-reverse ">


            <div class="double-text">
                <h5 class="split-text-11">Luxury Resort Belek Turkey</h5>
                <p>
                    Belek luxury hotel are situated in one of Turkey's vacation paradises, attracting millions of
                    domestic and foreign tourists each year. Belek luxury resort offers numerous vacation options,
                    allowing visitors to enjoy the sea, sand, and sun. Luxurious all inclusive hotel concept is most
                    preferred choice for those seeking comfort, <a href="https://portnature.com.tr/entertainment">entertainment</a>, decency, and luxury in one package. In
                    the comfortable <b>Luxury Resort Belek Turkey</b>, everything is tailored to your preferences, with many
                    alternatives to choose from.
                </p>
            </div>
            <div class="double-text">
                <h5 class="split-text-11">Flights and Hotels to Belek Turkey</h5>
                <p>

                    If you are planning holiday, finding <b>flights and hotel to Belek Turkey</b> has never been easier. The
                    best resort in Turkey has everything planned out for you. Luxury Hotel Belek Turkey is popular
                    holiday destination. Any travel agency offers holiday packages that include flights to Turkey all
                    inclusive, along with <a href="https://www.portnature.com.tr/rooms">accommodation</a> and various activities. These packages typically cater to range
                    of budgets and preferences, with options for families, couples, and solo travelers. With convenient
                    flight options from various locations, <a href="https://portnature.rezervasyonal.com/">booking holiday package</a> to Belek Turkey hotels has never been
                    easier.</p>
            </div>

            <a href="https://www.portnature.com.tr/activities">
                <img class="offers-split-photo"
                    src="{{ asset('assets/frontend/images/offers/seo/en/turkey/turkey-hotels-5-stars-for-families-concerts.webp') }}">
            </a>
        </div>
    </div>

    <div class="grey-wrapper">
        <div class="double-text-wrapper">

            <div class="double-text">
                <h2 class="split-text-11">Best Family Hotels in Turkey</h2>
                <p>

                    Belek beach resort is Turkey's most popular vacation destination, boasting <b>best family hotel Turkey</b>,
                    offering exceptional privileges. Best family hotel Belek attracts tourists from all over Europe to
                    their beautiful Belek locations. Belek is main resort city in southern Turkey where family hotel
                    provide access to stunning beaches for relaxation. Family hotel Belek beaches feature fine yellow
                    sand, smooth, gentle sea entrances and breakwaters making them ideal for families. </p>
            </div>
            <div class="double-text">
                <h3 class="split-text-11">Hotels with water parks Turkey</h3>
                <p>

                    Turkey is home to several hotels with water parks on their premises, offering guests a fun and
                    exciting vacation. Antalya family resorts with water parks typically feature multiple water slides,
                    wave pools, lazy rivers, and other water attractions. One of the most popular water park hotel
                    Antalya Resort Turkey is <a href="https://portnature.com.tr/en">Port Nature Luxury Resort Hotel</a>, with over 18 slides. These hotels are the
                    perfect choice for adventurers with their thrilling <a href="https://portnature.com.tr/aquapark">aquapark</a> facilities and comfortable
                    accommodations. So <a href="tel:+902427310707">call now</a> and don't miss our latest offers.
                </p>
            </div>
        </div>
    </div>
    <div class="grey-wrapper">
        <div class="double-text-wrapper">

            <div class="double-text">
                <h3 class="split-text-11">Concerts in Turkey</h3>
                <p>

                    Belek Turkey is a popular destination for concerts and live performances. Many <b>luxury Belek hotel</b> in
                    the area host regular events featuring local and international artists. These concerts are held in
                    hotel's outdoor amphitheater or concert hall, providing guests with unique and memorable Belek
                    entertainment experience. If you're a music lover or simply looking for a night out, concert at
                    <b>luxury Belek hotel</b> is for you. It is a great way to enjoy live entertainment while on vacation. To
                    ensure that you never miss out on our upcoming events, call the call center now or make online
                    reservation.
                </p>
            </div>
            <div class="double-text">
                <h3 class="split-text-11">Best Place to Stay in Turkey</h3>
                <p>

                    Antalya is best place to stay in Turkey. With <a href="https://portnature.rezervasyonal.com/">online booking</a> or <a href="tel:+902427310707">call center services</a>, it has never
                    been easier to book your luxury Turkey holiday vacation. Luxury resort Belek provides guests with
                    the best Turkish cuisine experience. There is <a href="https://www.portnature.com.tr/alacarte-restaurants">seven à la carte restaurants</a> like <a href="https://www.portnature.com.tr/french-alacarte-restaurant">French</a>, <a href="https://www.portnature.com.tr/italian-alacarte-restaurant">Italian</a>, <a href="https://www.portnature.com.tr/far-east-alacarte-restaurant">Far
                    East</a>, <a href="https://www.portnature.com.tr/seaside-alacarte-restaurant">Seaside</a>, <a href="https://www.portnature.com.tr/sushi-bar-alacarte-restaurant">Sushi Bar</a>, <a href="https://portnature.com.tr/mini-club-alacarte-restaurant">Mini Club</a>, and <a href="https://www.portnature.com.tr/kit-kat-cafe">KitKat Cafe</a>.. <a href="https://portnature.com.tr/en">Port Nature Luxury Resort Hotel</a> also offers
                    <a href="https://portnature.com.tr/born9-hennessy-lounge">Henessy Bar</a>, <a href="https://portnature.com.tr/nespresso-cafe">Nespresso Cafe</a>, and <a href="https://portnature.com.tr/davidoff-cafe">Davidoff Cafe</a>. So don't wait any longer, call now for your luxury
                    Turkey holiday vacation now.
                </p>
            </div>
        </div>
    </div>
   
    <div class="grey-wrapper">
        <div class="double-text-wrapper double-text-single">

            <div class="double-text">
                <h3 class="split-text-11">Best resorts in Turkey</h3>
                <p>

                    Turkey is home to many idyllic resorts, but Antalya resort stands out as the most remarkable
                    destination. It offers a wide range of <a href="https://portnature.com.tr/rooms">accommodation</a> options to suit all budgets and preferences.
                    Overall, Antalya holiday packages are for everyone, whether you're looking for a relaxing beach
                    vacation or an adventure-filled trip. If you are looking for a honeymoon or all inclusive family
                    holiday, <b>Turkey Belek hotels</b> are the right place for you. After a long, stressful year, you and your
                    family can experience an unforgettable experience. </p>
            </div>

        </div>
    </div>



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