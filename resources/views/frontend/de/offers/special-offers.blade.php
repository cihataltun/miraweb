@extends('frontend.de.layouts.master')

@section('title', 'Angebote - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-special-offers') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('special-offers') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-special-offers') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-special-offers') }}">RU</a></li>
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
                        <p class="offers-1-top">Für Gäste</p>
                        <p class="offers-1-big">
                            Kostenlose <br> Marke
                        </p>
                        <p class="offers-1-bottom">Für Wassersport</p>
                    </div>
                           <div class="water-sports-addendum-wrapper">             <p class="offers-addendum">Buchen Sie Ihren Urlaub über das Callcenter und erhalten Sie 4 Marke als
                        Geschenk</p>
                        <p class="offers-addendum-right">Fußnote: Unsere Gäste können nur von einer der Kampagnen profitieren. </p></div>




                </div>
            </div>
            <div class="swiper-slide">
                <div class="offers-slide-inner">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-2.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-2.webp') }}" />
                    <div class="offers-hero-text offers-hero-2">
                        <p class="offers-2-big">
                            Wellness <br>Geschenk!
                        </p>
                        <p class="offers-2-small">
                            Bei Buchung über das Callcenter
                        </p>
                        <p class="offers-2-medium">Kostenlose Massage<br> oder Schaummbad</p>
                    </div>
                    <p class="spa-offers-addendum">Fußnote: Unsere Gäste können nur von einer der Kampagnen profitieren. </p>

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
                            Kostenlos
                        </div>
                        <p class="offers-3-big">
                            Premium Pavillon
                        </p>
                        <div class="offers-3-small">
                            <img class="offers-icon" src="{{ asset('assets/frontend/images/offers/svg/call.svg') }}" />
                            Bei Buchung einer King Suite über das Call Center
                        </div>

                    </div>
                    <p class="offers-addendum-center">Fußnote: Unsere Gäste können nur von einer der Kampagnen profitieren. </p>

                </div>
            </div>
            <div class="swiper-slide">
                <div class="offers-slide-inner offers-4">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-4.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-4.webp') }}" />
                    <div class="offers-hero-text offers-hero-4">
                        <p class="offers-4-small">
                            Für Gäste
                        </p>
                        <p class="offers-4-big">
                            VIP Transfer
                        </p>
                        <div class="offers-4-medium">
                            <img class="offers-text-wrap-1"
                                src="{{ asset('assets/frontend/images/offers/svg/line.svg') }}" />

                            Kostenlos
                            <img class="offers-text-wrap-2"
                                src="{{ asset('assets/frontend/images/offers/svg/line-two-01.svg') }}" />

                        </div>

                    </div>
                    <div class="transfer-addendum-wrapper"><p class="offers-4-addendum">
                        Gäste, die eine Unterkunft über das Callcenter buchen, können den kostenlosen
                        VIP-Transfer-Service nutzen</p>
                        <p class="offers-addendum-left">Fußnote: Unsere Gäste können nur von einer der Kampagnen profitieren. </p></div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class="offers-slide-inner offers-5">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-5.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-5.webp') }}" />
                    <div class="offers-hero-text offers-hero-5">
                        <p class="offers-5-big">Geschenke</p>
                        <img src="{{ asset('assets/frontend/images/offers/svg/line-two.svg') }}" />
                        <p class="offers-5-small">Für die Kleinen</p>
                       

                    </div> <p class="children-offers-addendum">Fußnote: Unsere Gäste können nur von einer der Kampagnen profitieren. </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SHOWCASE SECTION -->

<div class="showcase-section-wrapper">
    <div class="plane-svg colorful-image-wrapper"></div>
    <img class="plane-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/plane-1.svg') }}" />
    <p class="plane-before">... buchen Sie jetzt ein Ticket</p>
    <div class="booking-section-wrapper">
        <p class="booking-section-title">PLANEN SIE IHRE REISE</p>
        <p class="booking-section-title-2">Mit unserem Hotel</p>
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
                    Zimmer auswählen
                </button>
                <ul class="dropdown-menu room-selection-dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <div class="dropdown-item room-dropdown-link" href="#" data-value="Familienzimmer">Familienzimmer</div>
                    </li>
                    <li>
                        <div class="dropdown-item room-dropdown-link" href="#" data-value="Standard Zimmer">Standard Zimmer</div>
                    </li>
                    <li>
                        <div class="dropdown-item room-dropdown-link" href="#" data-value="Suite Zimmer">Suite Zimmer</div>
                    </li>
                </ul>
            </div>



            <label for="checkin"></label><input id="checkin" data-defaultDate="today" value="Check-in">
            <label for="checkout"></label><input id="checkout" data-defaultDate="today" value="Check-Out">

            <div class="guestDiv guestdiv-adult"><span class="guests guests-adult">
                    <img class="icon-head" src="{{ asset('assets/frontend/images/offers/svg/adult-icon.svg') }}">

                    Erwachsene</span>
                <div class="guestMenu guestMenuAdult">
                    <div class="adultCounter dropdown-item">
                        <p>Erwachsene</p>
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
                    Kinder</span>
                <div class="guestMenu guestMenuChild">

                    <div class="childCounter dropdown-item">
                        <p>Kind(er)</p>
                        <div class="counter-item">
                            <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                onclick="childDecrement()" alt="decrement" />
                            <p id="childCount"></p>
                            <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                onclick="childIncrement()" alt="increment" />
                        </div>
                    </div>
                    <div class="childAgeCounter1 childAgeCounter dropdown-item">
                        <p>Kind 1</p>
                        <div class="counter-item">
                            <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                onclick="childAge1Decrement()" alt="decrement" />
                            <p id="childAge1Count">0</p>
                            <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                onclick="childAge1Increment()" alt="increment" />
                        </div>
                    </div>
                    <div class="childAgeCounter2  childAgeCounter dropdown-item">
                        <p>Kind 2 </p>
                        <div class="counter-item">
                            <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                onclick="childAge2Decrement()" alt="decrement" />
                            <p id="childAge2Count">0</p>
                            <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                onclick="childAge2Increment()" alt="increment" />
                        </div>
                    </div>
                    <div class="childAgeCounter3  childAgeCounter dropdown-item">
                        <p>Kind 3 </p>
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
                    src="{{ asset('assets/frontend/images/offers/svg/booknow.svg') }}" />Jetzt buchen</a>
        </div>
        <!-- Booking Section End -->
    </div>

    <div class="offers-rooms-swiper swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide rooms-swiper-slide">
                <img class="room-image-swiper" src="{{ asset('assets/frontend/images/offers/family.webp') }}" />
                <a href="{{ route('de-family-rooms') }}" class="room-swiper-button"><span>Familie</span>
                    <img class="btn-chevron"
                        src="{{ asset('assets/frontend/images/offers/svg/button-chevron.svg') }}" />
                </a>
                <div class="room-swiper-details">
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-1.svg') }}" />
                        <p class="room-detail-text">4 Erwachsene + 1</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-2.svg') }}" />
                        <p class="room-detail-text">45 m2</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-3.svg') }}" />
                        <p class="room-detail-text">Seitlicher Meerblick
                        </p>

                    </div>
                </div>
            </div>
            <div class="swiper-slide rooms-swiper-slide">
                <img class="room-image-swiper" src="{{ asset('assets/frontend/images/offers/king.webp') }}" />
                <a href="{{ route('de-kingsuit-rooms') }}" class="room-swiper-button"><span>King Suite</span>
                    <img class="btn-chevron"
                        src="{{ asset('assets/frontend/images/offers/svg/button-chevron.svg') }}" />
                </a>
                <div class="room-swiper-details">
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-1.svg') }}" />
                        <p class="room-detail-text">5 Erwachsene + 1</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-2.svg') }}" />
                        <p class="room-detail-text">110 m2</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-3.svg') }}" />
                        <p class="room-detail-text">Meerblick
                        </p>

                    </div>
                </div>
            </div>
            <div class="swiper-slide rooms-swiper-slide">
                <img class="room-image-swiper" src="{{ asset('assets/frontend/images/offers/standard.webp') }}" />
                <a href="{{ route('de-standard-rooms') }}" class="room-swiper-button"><span>Standard</span>
                    <img class="btn-chevron"
                        src="{{ asset('assets/frontend/images/offers/svg/button-chevron.svg') }}" />
                </a>
                <div class="room-swiper-details">
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-1.svg') }}" />
                        <p class="room-detail-text">2 Erwachsene + 2</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-2.svg') }}" />
                        <p class="room-detail-text">34 m2</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-3.svg') }}" />
                        <p class="room-detail-text">Meer-/Seiten-/Landblick
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
        Das Verlinken oder Verweisen auf andere Websites auf unserer Website macht den Website-Inhaber nicht für den Inhalt der verlinkten oder verlinkten Websites verantwortlich, und der Website-Inhaber kann nicht für Schäden oder Verluste haftbar gemacht werden, die durch den Inhalt anderer Websites entstehen. Alle Links zu anderen Websites werden auf unserer Website für die Benutzerfreundlichkeit unserer Website bereitgestellt. Diese Vereinbarung impliziert nicht, dass Port Nature oder seine verbundenen Unternehmen in irgendeiner Weise mit diesen anderen Websites oder ihren Eigentümern verbunden oder verbunden sind.

    </p>
    <div class="flight-swiper-div">
        <div class="swiper flight-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
<a href="https://www.flypgs.com/de/stadte/billigfluge-nach-antalya"><img class="pegasus-logo" src="{{ asset('assets/frontend/images/offers/logo-1.png') }}" /></a>                </div>
                <div class="swiper-slide">
<a href="https://www.skyscanner.de/?currency=EUR&locale=de-DE&market=DE&traveller_context=17bf6fc2-2c6d-462d-8876-65d3e77dfa21"><img class="scanner-logo" src="{{ asset('assets/frontend/images/offers/logo-2.png') }}" /></a>                </div>
                <div class="swiper-slide">
<a href="https://www.corendonairlines.com/de"><img class="corendon-logo" src="{{ asset('assets/frontend/images/offers/logo-3.png') }}" /></a>                </div>
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
        <p class="transfer-title">Klicken Sie hier, um einen Transfer zu buchen</p>
        <p class="transfer-mid">Verbringen Sie die Straße in Komfort</p>
        <a class="transfer-btn" target="blank" href="https://portnature.rezervasyonal.com/ExtraService">Transfer buchen</a>
    </div>
</div>
<!--- CONTACT SECTION -->
<div class="offers-contact-wrapper">
    <div class="offers-contact-div">
               <div class="luggage-image-wrapper colorful-image-wrapper"></div>


        <div class="offers-contact-info">
            <p class="offers-contact-title">Kostenloser Kontakt zum Call Center oder Online-Buchung</p>
            <a href="tel:+902427310707">
                <img src="{{ asset('assets/frontend/images/offers/svg/phone.svg') }}" />

                +90 (242) 731 07 07
            </a>
            <a href="mailto:info@portnature.com.tr">
                <img src="{{ asset('assets/frontend/images/offers/svg/mail.svg') }}" />
                 info@portnature.com.tr
            </a>
            <a href="https://api.whatsapp.com/send?phone=905334141923&text=&source=&data=" class="offers-contact-whatsapp">
                 <img src="{{ asset('assets/frontend/images/offers/svg/whatsapp.svg') }}" />
               WhatsApp
            </a>
        </div>
    </div>
</div>
<!--- BOOKING OPPORTUNITIES SECTION 1 -->

<div class="opportunity-wrapper first-booking-opportunities">
    <p class="h2-title">BUCHUNGSMÖGLICHKEITEN</p>
    <div class="swiper opportunity-swiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <a href="{{ route('de-antalya-hotels') }}" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/general/antalya.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">Antalya Hotel</p>
                        <a class="transfer-btn" target="blank" href="{{ route('de-antalya-hotels') }}">Mehr erfahren</a>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a target="blank" href="{{ route('de-turkey-hotels') }}"
                    class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/general/turkey.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">Hotel Türkei</p>
                            <a class="transfer-btn" target="blank" href="{{ route('de-turkey-hotels') }}">Mehr erfahren</a>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a target="blank" href="{{ route('de-belek-hotels') }}" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/general/belek.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">Hotel Belek</p>
                        <a class="transfer-btn" target="blank" href="{{ route('de-belek-hotels') }}">Mehr erfahren</a>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!--- FIRST SPLIT SECTION -->
<div class="offers-first-split">
    <div class="first-split-clouds colorful-image-wrapper">
    </div>
    <div class="split-text">
        <h1>ANGEBOTE</h1>
        <p>Wir stellen Ihnen unsere speziellen Hotelangebote vor! Genießen Sie luxuriöse <a href="https://www.portnature.com.tr/zimmer">Unterkünfte</a>, 
            atemberaubende Ausblicke und außergewöhnlichen Service. Mit unschlagbaren Preisen und exklusiven 
            Annehmlichkeiten gibt es keinen besseren Ort zum Übernachten. <a href="https://portnature.rezervasyonal.com/?_gl=1*9vouam*_ga*NzI2Nzc2MjAuMTY4MjQ5NTU2Ng..*_ga_6EYM72GR61*MTY4MjY4NTM2NS44LjEuMTY4MjY5MTgwMy4wLjAuMA..">Buchen Sie jetzt online</a> und lassen Sie 
            Ihren Traumurlaub Wirklichkeit werden. Wir bieten eine Vielzahl von Paketen für jeden Bedarf. 
            Unser Hotel hat alles, was Sie für einen komfortablen und unvergesslichen Aufenthalt benötigen. 
            Verpassen Sie es nicht, reservieren Sie noch heute Ihr Zimmer! Zusätzlich bietet das <a href="tel:+902427310707">Callcenter</a> 
            des <a href="https://www.portnature.com.tr/de">Port Nature Luxury Resort Hotel</a> spezielle Angebote exklusiv für Sie an. Kontaktieren Sie jetzt das <a href="tel:+902427310707">Callcenter</a>, 
            um von diesen exklusiven Angeboten zu profitieren.</p>
    </div>
    <a class="split-img" href="https://www.portnature.com.tr/de
    ">
        <img
            src="{{ asset('assets/frontend/images/offers/seo/de/antalya/antalya-hotel-port-nature-premium-hotel-resort.webp') }}" />
    </a>
</div>

<!--- RATING SECTION -->

<div class="rating-wrapper">
    <p class="rating-title">Durch die Augen unserer Gäste </p>
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


<!--- BOOKING OPPORTUNITIES SECTION 2 -->

<div class="opportunity-wrapper second-booking-opportunities">
    <p class="h2-title">BUCHUNGSMÖGLICHKEITEN</p>
    <div class="swiper opportunity-swiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <a href="{{ route('de-concert') }}" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-one.webp') }}" />
                    </div>
                    <div  class="opportunity-text">
                        <p class="opportunity-title">Bevorstehende Konzerte im Hotel 💓💥</p>
                        <p>Erleben Sie Weltklasse-Musik im Komfort des Port Nature Luxury Resort Hotel mit unserer exklusiven Konzertreihe mit Spitzenkünstlern aus aller Welt.</p>
                        </div>
                    </a>
            </div>
            <div class="swiper-slide">
                <a href="https://www.tripadvisor.de/Attractions-g297962-Activities-Antalya_Turkish_Mediterranean_Coast.html" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-two.webp') }}" />
                    </div>
                    <div  class="opportunity-text">
                        <p class="opportunity-title">Besuchen Sie die besten Orte in Antalya

                            🥰 💤 🏖 </p>
                        <p>Wer in die reiche Geschichte und Kultur dieser schönen Stadt eintauchen möchte, sollte Antalya unbedingt besuchen und die einzigartige Natur genießen. </p>
                        </div>
                    </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ route('de-spa') }}" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-three.webp') }}" />
                    </div>
                    <div  class="opportunity-text">
                        <p class="opportunity-title">Erleben Sie ultimative Entspannung 🥰 💎</p>
                        <p>Entspannen und verjüngen Sie Körper, Geist und Seele mit unseren luxuriösen Spa-Behandlungen, die Sie von Kopf bis Fuß entspannen und erfrischen. </p>
                        </div>
                    </a>
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