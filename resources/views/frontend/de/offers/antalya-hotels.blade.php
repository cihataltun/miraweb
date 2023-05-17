@extends('frontend.de.layouts.master')

@section('title', 'Antalya Hotel - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-antalya-hotels') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('antalya-hotels') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-antalya-hotels') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-antalya-hotels') }}">RU</a></li>
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
<!--- FIRST SPLIT SECTION -->
<div class="offers-first-split">
    <div class="first-split-clouds colorful-image-wrapper">
        </div>
        <div class="split-text">
            <h1>Antalya Hotel</h1>
            <p>Antalya umfasst die besten All-Inclusive-5-Sterne-Hotel mit flexiblen Angeboten. 
                Wenn Sie auf der Suche nach Luxusreiseangeboten sind, suchen Sie nicht nach weiteren 
                Hotels in Antalya. Sie können ganz einfach eine <a href="tel:+902427310707">Reservierung über das Callcenter</a> oder 
                durch <a href="https://portnature.rezervasyonal.com/">Online-Buchung</a> für Antalya Hotels vornehmen. Außerdem bietet der Callcenter-Service
                 des Antalya Ferien Hotel den besten Preis und Letzte-Minute-Möglichkeiten. Die Webseite 
                 der Hotel in Antalya und der Callcenter-Service bieten das beste Angebotspaket. Lassen Sie 
                 sich diese Chance nicht entgehen und rufen Sie jetzt an. Im Antalya Hotel gibt es <a href="tel:+902427310707">Zimmer</a> für 
                 alle. Wenn Sie nach einer Unterkunft mit Letzte-Minute-Angeboten suchen, wartet das Antalya Hotel auf Sie.  </p>
        </div>
        <a class="split-img" href="https://www.portnature.com.tr/de">
            <img src="{{ asset('assets/frontend/images/offers/seo/de/antalya/antalya-hotel-port-nature-premium-hotel-resort.webp') }}" />
        </a>
    </div>
<!--- RATING SECTION -->

<!--- BOOKING OPPORTUNITIES SECTION -->

<div class="opportunity-wrapper">
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

<!-- Split to right 1 -->
<div class="splits-mother-wrapper">
    <div class="grey-wrapper">
        <div class="split-wrapper first-split">
            <div class="split-1">
        <div class="split-svg colorful-image-wrapper"></div>
                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/plane-2.svg') }}">

            </div>
            <div class="split-2">
                <h2 class="split-text-1">Antalya Hotel 5 Sterne All Inclusive</h2>
                <p>
                    Unser 5 Sterne All Inclusive Hotel in Antalya bietet die besten Preise für das Familienresort
                    Antalya mit Wasserpark. 5 Sterne All Inclusive Hotel ist die beste Wahl für Wert und Luxus in
                    Antalya. Ihr 5-Sterne-All-Inclusive Hotel in Antalya bietet wettbewerbsfähige Preise für
                    erstklassige Annehmlichkeiten. Bezüglich der <b>Antalya Reise</b> sind unsere Hotelpreise unübertroffen für
                    ultimative All-Inclusive-5-Sterne-Erlebnis. Unser All-Inclusive-5-Sterne resort in Antalya bietet
                    außergewöhnlichen Service und Annehmlichkeiten zu erschwinglichen Preisen. Als eines der besten
                    All-Inclusive-5-Sterne Hotels in Antalya bietet Ihnen das beste Preis-Leistungs-Verhältnis in einem
                    5-Sterne Hotel in Antalya.
                </p>
            </div>
        </div>
    </div>
    <div class="split-wrapper second-split">
        <div class="split-1">
            <h3 class="split-text-2">Die Besten All Inclusive Hotels in Antalya</h3>
            <p> Erleben Sie einen sorgenfreien Urlaub in einem der besten <b>Resorts Antalya</b>. Diese Antalya Hotels bieten
                ein umfangreiches Angebot an <a href="https://portnature.com.tr/speisen-getranke">Speisen & Getränken</a> und Freizeitaktivitäten, die bereits im Preis
                inbegriffen sind. Genießen Sie die Vielfalt an Buffets und <a href="https://www.portnature.com.tr/restaurants-alacarte">À-la-carte-Restaurants</a>, erfrischenden
                Cocktails an der <a href="https://www.portnature.com.tr/barlobby">Lobby Bar</a> und entspannen Sie an den traumhaften Stränden. Abwechslungsreiche
                Sportangebote, Wellnessbereiche und <a href="https://portnature.com.tr/unterhaltung">Unterhaltungsprogramme</a> für die ganze Familie sorgen für
                unvergessliche Urlaubsmomente im Antalya Urlaub . Wählen Sie Antalya Hotel für ein der
                besten All Inclusive Hotels in für Ihren nächsten Traumurlaub.
            </p>
        </div>
        <a class="split-2" href="https://www.portnature.com.tr/alacarte-restaurant-all-day-dining">
            <img class="offers-split-photo" src="{{ asset('assets/frontend/images/offers/seo/de/antalya/die-besten-all-inclusive-hotels-in-antalya-all-day-dining-ala-carte.webp') }}">


        </a>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper third-split split-with-svg">
            <div class="split-1">
        <div class="split-svg colorful-image-wrapper"></div>
                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/belek.svg') }}">

            </div>
            <div class="split-2">
                <h4 class="split-text-3">Antalya Hotel Ultra All Inclusive</h4>
                <p>
                    Gönnen Sie sich einen luxuriösen Aufenthalt der Neueröffnung Hotel Antalya in einem der
                    erstklassigen Hotels an der türkischen Riviera. In diesen Resorts genießen Sie nicht nur exquisite
                    <b>Speisen und Getränke</b> rund um Uhr, sondern auch eine Vielzahl von <a href="https://www.portnature.com.tr/aktiviaten"> Freizeitaktivitäten</a>. Tauchen Sie in
                    die türkische Gastfreundschaft ein und lassen Sie sich in den entspannenden Spa-Bereichen verwöhnen.
                    Erkunden Sie die malerische Küste und die historischen Sehenswürdigkeiten der Region. Buchen Sie
                    noch heute Ihr Antalya Hotel Ultra All Inclusive für einen unvergesslichen Urlaub.</p>
                <h5 class="third-second-h4 split-text-3">Hotel in Antalya Belek</h5>
                <p>
                    Entdecken Sie die wunderschöne Region Belek in Antalya, die für ihre atemberaubenden Strände von
                    Weltklasse bekannt ist. Hotel in Antalya bieten eine große Auswahl an Unterkünften, von luxuriösen
                    Resorts. Bezaubernde Landschaften, abwechslungsreiche, erstaunliche <a href="https://portnature.com.tr/aktiviaten"> Aktivitäten</a> und einladende
                    türkische Gastfreundschaft erwarten Sie in Belek. Unternehmen Sie Ausflüge zu historischen Stätten
                    wie der antiken Stadt Aspendos oder genießen Sie die Vielfalt an Wassersportarten. Lassen Sie sich
                    von Schönheit Beleks verzaubern und <a href="https://portnature.rezervasyonal.com/">buchen Sie jetzt</a> Ihr<b> Hotel in Antalya Belek </b>für einen
                    unvergesslichen Urlaub. </p>
            </div>
        </div>
    </div>
    <div class="split-wrapper fourth-split split-with-picture">
        <a class="split-1" href="https://www.portnature.com.tr/alacarte-restaurant-mini-club">
            <img class="offers-split-photo" src="{{ asset('assets/frontend/images/offers/seo/de/antalya/beste-antalya-strandhotel-mini-club.webp') }}">


        </a>
        <div class="split-2">
            <h5 class="split-text-4">Beste Antalya Strandhotel</h5>
            <p>
                In den besten Strand hotels in Antalya können Sie einen Traumurlaub erleben. In diesen Hotel Antalya
                genießen Sie einen unmittelbaren Zugang zu den herrlichen Sandstränden und dem kristallklaren Wasser des
                Mittelmeers. Entspannen Sie in komfortablen Liegen, während Sie die Sonne und den Meeresblick genießen,
                oder nehmen Sie an spannenden Wassersportaktivitäten teil. Diese Strand hotels bieten zudem eine
                Vielzahl an Annehmlichkeiten, wie exquisite <a href="https://www.portnature.com.tr/restaurants-alacarte">Restaurants</a>, Wellnessbereiche und <b>Unterhaltungsprogramme</b>.
                Erkunden Sie die Wunder Antalyas und buchen Sie das beste <b>Strand hotels</b> für Ihren perfekten
                Strandurlaub. </p>

        </div>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper fifth-split">
            <div class="split-1">
                <h2 class="split-text-5">Antalya Hotel Urlaub</h2>
                <p>
                    Hotels in Antalya haben alles, was Sie in Ihrem Urlaub brauchen. Ob luxuriöse Resorts, gemütliche
                    Familienhotels oder charmante Boutique-Unterkünfte - in Antalya finden Sie das richtige Hotel für
                    Ihre Bedürfnisse. Erkunden Sie die faszinierende Kultur, die atemberaubende Natur. Buchen Sie Ihren
                    Antalya Hotelurlaub und genießen Sie unvergessliche Urlaubserlebnisse. Premium Hotels in Belek hat
                    auch <a href="https://www.portnature.com.tr/restaurants-alacarte">7 verschiedene À-la-carte-Restaurants</a> wie <a href="https://portnature.com.tr/alacarte-restaurant-all-day-dining"> All Day Dining</a>,
                         <a href="https://portnature.com.tr/alacarte-restaurant-sushi-bar">Sushi-Bar</a>,
                          <a href="https://portnature.com.tr/alacarte-restaurant-italian">Italian</a>,
                           <a href="https://portnature.com.tr/alacarte-restaurant-french">French</a>
                            und <a href="https://portnature.com.tr/alacarte-restaurant-far-east">Far
                    East </a>
                    und vieles mehr.
                </p>

            </div>
            <div class="split-2">
        <div class="split-svg colorful-image-wrapper"></div>


            </div>
        </div>
    </div>
    <div class="split-wrapper sixth-split split-with-picture">
        <div class="split-1">
            <a href="https://www.portnature.com.tr/king-suite-zimmer">
            <img class="offers-split-photo" src="{{ asset('assets/frontend/images/offers/seo/de/antalya/antalya-urlaub-buchen-mit-flug-und-hotel-king-suite-zimmer.webp') }}">
            <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/line.svg') }}">

            </a>

        </div>
        <div class="split-2">
            <h3 class="split-text-6">Antalya Urlaub Buchen mit Flug und Hotel</h3>
            <p>
                <b>Antalya urlaub</b>, ein malerisches Reiseziel in der Türkei, lockt jedes Jahr zahlreiche deutsche Touristen an. 
                Antalya Urlaub Buchen mit Flug und Hotel ist der perfekte Weg, um Ihren Traumurlaub zu erfüllen. Flug Hotel 
                Antalya mit diesem Rundum-sorglos-Paket erhalten Sie ein günstiges Angebot, das sowohl Flug als auch Unterkunft 
                beinhaltet. Entspannen Sie an den wunderschönen Stränden, genießen Sie die lokale Gastronomie und erkunden 
                Sie die beeindruckenden historischen Stätten. <a href="https://portnature.rezervasyonal.com/">Buchen Sie jetzt</a> unvergesslichen Urlaub Antalya mit Flug und lassen
                 Sie sich von der türkischen Gastfreundschaft verzaubern.</p>

        </div>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper seventh-split split-with-svg">

            <div class="split-1">
                <h2 class="split-text-7">Antalya Hotel Angebote</h2>
                <p>
                    Entdecken Sie die bedienten Hotelangebote in Antalya Ferien, dem begehrten Urlaubsziel. Ob luxuriöse
                    Resorts, charmante Boutique-Hotels oder gemütliche Familienunterkünfte – hier findet jeder Urlauber
                    die passende Unterkunft. Nutzen Sie die attraktiven Angebote und sparen Sie Zeit bei Ihrer nächsten
                    Reise nach Antalya. Freuen Sie sich auf entspannende Tage am Strand, kulinarische Köstlichkeiten und
                    faszinierende kulturelle Sehenswürdigkeiten. <b>Buchen Sie jetzt</b> Ihr Traumhotel in Antalya Reise und
                    genießen Sie unvergessliche Urlaubsmomente. <a href="tel:+902427310707">Rufen Sie jetzt</a> an und erfahren Sie Mehr erfahren die besten
                    Angebote für <a href="https://portnature.com.tr/familienzimmer">Familienzimmer</a>, <a href="https://portnature.com.tr/king-suite-zimmer">King suit</a> und <a href="https://portnature.com.tr/standard-zimmer">Standardzimmer</a>.
                </p>
                <h3 class="split-text-7">Antalya Familienhotel</h3>
                <p>
                    Erleben Sie einen unvergesslichen Familienurlaub in einer der besten Familienhotels Antalya. Diese
                    Familienhotels bieten vielfältige Angebote und Einrichtungen, die sowohl Eltern als auch Kindern
                    Spaß und Entspannung garantieren. Freuen Sie sich auf kinderfreundliche <a href="https://www.portnature.com.tr/aqua-park">Pools</a>, Spielplätze und
                    altersgerechte <b>Aktivitäten</b>, während Sie sich in den Wellnessbereichen oder mit einem Cocktail
                    ausruhen. Die Familienhotels in<b> Resorts Antalya</b> legen Wert auf Sicherheit und Komfort, sodass Sie
                    Ihren Urlaub sorgenfrei genießen können. <a href="https://portnature.rezervasyonal.com/"> Buchen Sie jetzt </a> Antalya Familienhotel für
                    unvergessliche gemeinsame Erlebnisse.
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
                    <a href="{{ route('de-activity') }}" class="stage-inner-wrapper">
                        <img class="stage-img" src="{{ asset('assets/frontend/images/offers/activities.webp') }}">
                        <div class="stage-text">
                            <p class="stage-small-text">eine gute Zeit haben</p>
                            <p class="stage-heading">Aktivitäten</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ route('de-concert') }}" class="stage-inner-wrapper">
                        <img class="stage-img" src="{{ asset('assets/frontend/images/offers/concert.webp') }}">
                        <div class="stage-text">
                            <p class="stage-small-text">Ihre Lieblingskünstler</p>
                            <p class="stage-heading">Bühnenshows</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ route('de-aquapark') }}" class="stage-inner-wrapper">
                        <img class="stage-img" src="{{ asset('assets/frontend/images/offers/aquapark.webp') }}">
                        <div class="stage-text">
                            <p class="stage-small-text">Sicherheit für Ihr Kind</p>
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
                <h4 class="split-text-8">Hotel Antalya Familienzimmer</h4>
                <p>
                    Genießen Sie einen komfortablen und erholsamen Familienurlaub in einem der Antalya Hotels mit
                    speziellen <a href="https://portnature.com.tr/familienzimmer">Familienzimmern</a>. Diese geräumigen Unterkünfte bieten genügend Platz und Privatsphäre für
                    die ganze Familie, sodass Sie sich wie zu Hause fühlen können. Ausgestattet mit kinderfreundlichen
                    Annehmlichkeiten und modernem Komfort, garantieren die Familienzimmer einen angenehmen Aufenthalt.
                    In den Hotels erwarten Sie zudem vielfältige Freizeitangebote für Groß und Klein, wie <a href="https://portnature.com.tr/innenpool">Pools</a>,
                    Spielplätze und abwechslungsreiche Aktivitäten. Entdecken Sie die Schönheit Antalyas und verbringen
                    Sie unvergessliche Momente mit Ihren Liebsten in einem Hotel mit Familienzimmer.
                </p>
            </div>
        </div>
        <div class="three-img-div">
        <div class="split-svg three-img-2 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h4 class="split-text-9">Aqua Park Antalya Hotel für Kinder</h4>
                <p>
                    Im Antalya kinderfreundliches Hotels, wir haben alles, wovon Ihr Kind jemals träumen könnte. 
                    Erstaunliche Aquaparks, Minibar, <a href="https://portnature.com.tr/alacarte-restaurant-mini-club">Miniclub</a> und vieles mehr erwartet Sie in Antalya Aquapark Hotels.
                     Antalya Holiday ist der Urlaub, den Sie in Ihrem Leben nie vergessen werden. Hotels in Antalya Belek
                      hat reichhaltige <a href="https://portnature.com.tr/restaurants-alacarte">À-la-carte-restaurants</a>, ein schönes Sandmeer, Antalya Hotel mit Rutschen und eine 
                      bezaubernde Natur rundherum.
                 </p>
            </div>
        </div>
        <div class="three-img-div">
        <div class="split-svg three-img-3 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h4 class="split-text-10">Antalya Resort & Spa De Luxe Hotel</h4>
                <p>
                    Verwöhnen Sie sich mit einem Aufenthalt in einem exklusiven <a href="https://portnature.com.tr/spa-zentrum">Resort & Spa De Luxe Hotels in Antalya</a>.
                    Diese luxuriösen Hotels bieten erstklassige Einrichtungen, exquisite Kulinarik und hervorragenden
                    Service, um Ihnen einen unvergesslichen Urlaub zu garantieren. Entspannen Sie in modernen und
                    eleganten Zimmern, genießen Sie atemberaubenden <a href="https://portnature.com.tr/innenpool">Pool</a> und Strandlandschaften und gönnen Sie sich
                    erstklassige Hotels. Die Resorts bieten zudem abwechslungsreiche <b>Aktivitäten</b> und
                    Unterhaltungsprogramme für alle Altersgruppen. Gönnen Sie sich das ultimative Urlaubserlebnis in
                    einem Antalya Resort & Spa De Luxe Hotels.
            </div>
        </div>

    </div>


</div>
@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/offers.js') }}"></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/offers.css') }}"/>

@endsection