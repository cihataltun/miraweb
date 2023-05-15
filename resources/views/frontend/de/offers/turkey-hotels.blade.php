@extends('frontend.de.layouts.master')

@section('title', 'Angebote - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-turkey-hotels') }}"
        aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('turkey-hotels') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-turkey-hotels') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-turkey-hotels') }}">RU</a></li>
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
                    Zimmer auswählen
                </button>
                <ul class="dropdown-menu room-selection-dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <div class="dropdown-item room-dropdown-link" href="#" data-value="Familienzimmer">
                            Familienzimmer</div>
                    </li>
                    <li>
                        <div class="dropdown-item room-dropdown-link" href="#" data-value="Standard Zimmer">Standard
                            Zimmer</div>
                    </li>
                    <li>
                        <div class="dropdown-item room-dropdown-link" href="#" data-value="Suite Zimmer">Suite Zimmer
                        </div>
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
        Das Verlinken oder Verweisen auf andere Websites auf unserer Website macht den Website-Inhaber nicht für den
        Inhalt der verlinkten oder verlinkten Websites verantwortlich, und der Website-Inhaber kann nicht für Schäden
        oder Verluste haftbar gemacht werden, die durch den Inhalt anderer Websites entstehen. Alle Links zu anderen
        Websites werden auf unserer Website für die Benutzerfreundlichkeit unserer Website bereitgestellt. Diese
        Vereinbarung impliziert nicht, dass Port Nature oder seine verbundenen Unternehmen in irgendeiner Weise mit
        diesen anderen Websites oder ihren Eigentümern verbunden oder verbunden sind.

    </p>
    <div class="flight-swiper-div">
        <div class="swiper flight-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="https://www.flypgs.com/de/stadte/billigfluge-nach-antalya"><img class="pegasus-logo"
                            src="{{ asset('assets/frontend/images/offers/logo-1.png') }}" /></a>
                </div>
                <div class="swiper-slide">
                    <a
                        href="https://www.skyscanner.de/?currency=EUR&locale=de-DE&market=DE&traveller_context=17bf6fc2-2c6d-462d-8876-65d3e77dfa21"><img
                            class="scanner-logo" src="{{ asset('assets/frontend/images/offers/logo-2.png') }}" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.corendonairlines.com/de"><img class="corendon-logo"
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
        <p class="transfer-title">Klicken Sie hier, um einen Transfer zu buchen</p>
        <p class="transfer-mid">Verbringen Sie die Straße in Komfort</p>
        <a class="transfer-btn" target="blank" href="https://portnature.rezervasyonal.com/ExtraService">Transfer
            buchen</a>
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
        <h1>Hotel Türkei</h1>
        <p>
            <b>Hotel Türkei</b> bietet nicht nur <a
                href="https://portnature.com.tr/zimmer">Übernachtungsmöglichkeiten</a>, sondern auch eine breite Palette
            von
            Dienstleistungen wie <a href="https://portnature.com.tr/speisen-getranke">Essen und Trinken</a>, <a
                href="https://portnature.com.tr/unterhaltung">Unterhaltung</a> und <a
                href="https://portnature.com.tr/spa-zentrum">Spa</a>. Für Touristen, die einen Urlaub in der Türkei
            planen, gibt es viele Optionen von Luxushotel. Hier können die Gäste das Meer, die Sonne und den Sand
            genießen. Die besten Hotels Türkei warten auf Sie mit Pauschalreisen, die Ihre Erwartungen unabhängig von
            Ihren Vorlieben erfüllen können. Die Türkei zieht vor allem mit dem Antalya Hotel 5 Sterne am Meer an der
            Mittelmeerküste die Aufmerksamkeit auf sich. Sie können all diese Möglichkeiten nutzen, indem Sie einen
            Urlaub Türkei buchen.
        </p>
    </div>
    <a class="split-img" href="https://www.portnature.com.tr/de">
        <img
            src="{{ asset('assets/frontend/images/offers/seo/de/turkey/turkei-hotel-port-nature-premium-resort.webp') }}" />
    </a>
</div>

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
                    <div class="opportunity-text">
                        <p class="opportunity-title">Bevorstehende Konzerte im Hotel 💓💥</p>
                        <p>Erleben Sie Weltklasse-Musik im Komfort des Port Nature Luxury Resort Hotel mit unserer
                            exklusiven
                            Konzertreihe mit Spitzenkünstlern aus aller Welt.</p>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="https://travellersworldwide.com/best-places-to-visit-in-turkey/" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-two.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">"Besuchen Sie die besten Orte in Türkei


                            🥰 💤 🏖 </p>
                        <p>
                            Die Türkei bietet atemberaubend schöne historische Städte mit einer einzigartigen Kultur, einem pulsierenden Nachtleben, glitzernden Straßen und einer köstlichen Küche.
                        </p>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ route('de-spa') }}" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-three.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">Erleben Sie ultimative Entspannung 🥰 💎</p>
                        <p>Entspannen und verjüngen Sie Körper, Geist und Seele mit unseren luxuriösen Spa-Behandlungen,
                            die Sie von Kopf bis Fuß entspannen und erfrischen. </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
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

<!-- Split to right 1 -->
<div class="splits-mother-wrapper">
    <div class="grey-wrapper">
        <div class="split-wrapper first-split">
            <div class="split-1">
                <div class="split-svg colorful-image-wrapper"></div>
                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/plane-2.svg') }}">

            </div>
            <div class="split-2">
                <h2 class="split-text-1">Türkei Urlaub Hotel</h2>
                <p>
                    Die Türkei ist ein beliebtes Urlaubsziel für Touristen aus der ganzen Welt und bietet zahlreiche
                    Hoteloptionen. <b>Türkei Urlaub Hotel</b> unterhaltet ihre Gäste mit Live-Musik, Tanz und anderen
                    <a href="https://portnature.com.tr/aktiviaten">Aktivitäten</a> während des Abendessens. Urlaub
                    Türkei All Inclusive ist ein Paradies für Feinschmecker,
                    die lokale Köstlichkeiten entdecken und die Weltküche erleben wollen. Besonders die Hotels an der
                    Mittelmeerküste locken das ganze Jahr über einheimische und ausländische Touristen in das Belek
                    Beach Resort. Wenn Sie Pläne der Türkei Reisen haben, erwartet Sie Luxushotel Antalya mit der Küste
                    des Mittelmeers und der wärmenden Sonne.
                </p>
            </div>
        </div>
    </div>
    <div class="split-wrapper second-split">
        <div class="split-1">
            <h3 class="split-text-2">Türkei Urlaub All Inclusive Hotel</h3>
            <p>
                Die Türkei ist eines der Länder, das hervorragende Urlaubsmöglichkeiten bieten. Vor allem die Optionen
                für <b>Türkei Urlaub All Inclusive Hotel</b> ermöglichen es den Urlaubern, einen komfortablen Urlaub zu
                verbringen. Dabei müssen die Gäste sich keine Gedanken machen. Die <a
                    href="https://portnature.com.tr/zimmer">Hotelzimmer</a> in der Türkei bieten
                einen ruhigen Aufenthalt mit modernem und luxuriösem Design. Darüber hinaus verfügen die Türkei All
                Inclusive Hotels über zahlreiche <a href="https://portnature.com.tr/spa-zentrum">Spa-Angebote</a> wie <a
                    href="https://portnature.com.tr/innenpool">Innenpool</a>, türkische Bäder, Sauna und
                Massageangebote.
                All-Inclusive Pauschalreise Türkei schonen nicht nur das Budget der Urlauber, sondern erleichtern auch
                die Urlaubsplanung. Wenn Sie einen Türkei Urlaub 2023 buchen möchten, können Sie dies <a
                    href="tel:+902427310707">jetzt über das
                    Callcenter tun.</a> </p>
        </div>
        <a class="split-2" href="https://www.portnature.com.tr/standard-zimmer">
            <img class="offers-split-photo"
                src="{{ asset('assets/frontend/images/offers/seo/de/turkey/turkei-hotel-aquapark-standard-zimmer.webp') }}">


        </a>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper third-split split-with-svg">
            <div class="split-1">
                <div class="split-svg colorful-image-wrapper"></div>
                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/belek.svg') }}">

            </div>
            <div class="split-2">
                <h4 class="split-text-3">Türkei All Inclusive Beste Luxushotel</h4>
                <p>
                    <b>Türkei All Inclusive Beste Luxushotel</b> bietet nicht nur <a
                        href="https://portnature.com.tr/zimmer">Unterkunft</a>, sondern auch eine breite Palette
                    von <a href="https://portnature.com.tr/aktiviaten">Aktivitäten</a> für ihre Gäste. Dazu gehören
                    Yoga-Kurse, Tanzaktivitäten, Kinderclubs und
                    <a href="https://portnature.com.tr/unterhaltung">Unterhaltungsangebote</a> für Erwachsene. Türkei
                    All Inclusive Beste Luxushotel bietet viele
                    Einrichtungen wie preisgekrönte <a
                        href="https://portnature.com.tr/restaurants-alacarte">A-la-carte-Restaurants</a>, <a
                        href="https://portnature.com.tr/alacarte-restaurant-mini-club">Mini-Club-A-la-carte-Restaurants</a>
                    für Kinder
                    und große Wasserrutschen. Beste Hotels Türkei peppen Ihren Urlaub außerdem mit speziellen
                    Themenabenden, <a href="https://portnature.com.tr/konzert">Konzertveranstaltungen</a> und
                    Tanzaufführungen auf.
                </p>
                <h5 class="third-second-h4 split-text-3">Luxushotel Pauschalreisen Türkei</h5>
                <p>
                    <b>Luxushotel Pauschalreisen Türkei</b> beschränkt sich nicht nur auf die Unterbringung. Sie bieten
                    den
                    Gästen auch viele verschiedene Aktivitätsmöglichkeiten wie private Touren, Städtereisen,
                    kulinarische Erlebnisse und Sportveranstaltungen. Die besonderen kulinarischen Erlebnisse, die das
                    Luxushotel bietet, sind ebenfalls ein wichtiger Faktor, damit Sie Ihren Urlaub genießen können.
                    Türkei Hotels bieten ihren Gästen ein unvergessliches Urlaubserlebnis mit Privatstränden,
                    <a href="https://portnature.com.tr/spa-zentrum">Spazentren</a>, <a
                        href="https://portnature.com.tr/restaurants-alacarte">A-la-carte-Restaurants</a>, <a
                        href="https://portnature.com.tr/cafes-bars">Bars und Cafés</a>. Wählen Sie aus den Paketen der
                    Luxushotel
                    Pauschalreisen Türkei und genießen Sie die Privilegien mit Ihren Liebsten. Außerdem können Sie Ihre
                    Türkei Reisen mit vorteilhaften Frühbucherangeboten planen.
                </p>
            </div>
        </div>
    </div>
    <div class="split-wrapper fourth-split split-with-picture">
        <a class="split-1" href="https://www.portnature.com.tr/lounge-born9-hennessy">
            <img class="offers-split-photo"
                src="{{ asset('assets/frontend/images/offers/seo/de/turkey/turkei-antalya-hotel-born9-hennessy-loungebar.webp') }}">


        </a>
        <div class="split-2">
            <h3 class="split-text-4">Hotel Türkei Urlaub Buchen</h3>
            <p>
                Die verschiedenen Hotelkonzepte sind so konzipiert, dass sie alle
                Arten von Bedürfnissen für einen Urlaub in der Türkei erfüllen. Antalya Belek
                Beach Resort kann als die beliebteste Option für Türkei Urlaub Buchen gezeigt
                werden. Sie können Online-Plattformen und beste Türkei Hotel Website über Internet

                besuchen, um das <a href="https://portnature.rezervasyonal.com/?_gl=1*1arhzl8*_ga*MTY1Mjk1MDk1OS4xNjgyNjgzMzQ0*_ga_6EYM72GR61*MTY4MzA5NTkyMC4zLjEuMTY4MzEwMjA0MS4wLjAuMA..">beste Hotel Türkei Urlaub buchen</a> zu können. Die meist bevorzugte
                Türkei All Inclusive Hotels bieten Ihnen geeignete Möglichkeiten mit frühzeitiger
                Buchung vor der Ferienzeit. Mit unzähligen Unterkunftsmöglichkeiten und unbegrenzten
                Dienstleistungen wird der Türkei urlaub Ihre Erwartungen in jeder Hinsicht erfüllen.
            </p>

        </div>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper fifth-split">
            <div class="split-1">
                <h4 class="split-text-5">Hotel Türkei Urlaub Preise</h4>
                <p>
                    Hotel Türkei Urlaub Preise variieren je nach Unterkunftsart und anderen angebotenen Einrichtungen.
                    Zu preisbestimmenden Faktoren gehören die Verpflegung, die <a href="https://portnature.com.tr/spa-zentrum">SPA-Angebote, die <a href="https://portnature.com.tr/kinderkonzept">Kinderclubs</a> und andere
                    Aktivitäten, die von Türkei Hotels angeboten werden. Ob Türkei 5 Sterne Hotel direkt am Strand oder
                    in der Nähe Stadtzentrums liegt, wirkt sich unmittelbar auf Preise aus. Trotzdem gehört Türkei
                    Strandurlaub zu den beliebtesten Optionen. Obwohl die <b>Türkei Urlaub Preise</b> variieren, bieten die
                    Hotels in der Türkei attraktive Optionen für jedes.
                </p>

            </div>
            <div class="split-2">
                <div class="split-svg colorful-image-wrapper"></div>


            </div>
        </div>
    </div>
    <div class="split-wrapper sixth-split split-with-picture">
        <div class="split-1">
            <a href="https://www.portnature.com.tr/aktiviaten">
                <img class="offers-split-photo"
                    src="{{ asset('assets/frontend/images/offers/seo/de/turkey/turkei-hotel-5-sterne-fur-familien-konzerte.webp') }}">
                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/line.svg') }}">

            </a>

        </div>
        <div class="split-2">
            <h5 class="split-text-6">Türkei Urlaub All Inclusive Mit Flug und Hotel</h5>
            <p>
                <b>Türkei Urlaub All Inclusive mit Flug und Hotel</b> bietet viele verschiedene Alternativen, je nach Geschmack
                und Vorlieben der Urlauber. Mit dem All-Inclusive-Konzept können Urlauber alle Annehmlichkeiten
                genießen, ohne zusätzliches Geld ausgeben zu müssen, um ihren Urlaub zu genießen. Diese Türkei
                Pauschalreise beinhalten in der Regel <a href="https://portnature.com.tr/zimmer">Unterkunft</a>, Flugtickets, <a href="https://portnature.com.tr/speisen-getranke">Essen-Getränke</a> und verschiedene
                <a href="https://portnature.com.tr/unterhaltung">Unterhaltungsangebote</a>. Türkei All Inclusive mit Flug ist auch eine ideale Option für Familien. Türkei
                Familienhotel, <a href="https://portnature.com.tr/aqua-park">Pools</a>, Kinderclubs und große Wasserrutschen bieten die perfekte Urlaubsmöglichkeit für
                Ihre Kinder. Türkei Urlaub All Inclusive Mit Flug und Hotel entlastet das Familienbudget und sorgt
                dafür, dass alle einen angenehmen Urlaub erleben.
            </p>

        </div>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper seventh-split split-with-svg">

            <div class="split-1">
                <h2 class="split-text-7">Familienhotel Türkei</h2>
                <p>
                    <b>Das beste Familienhotel Türkei</b> ist so ausgestattet, dass Sie Ihren Urlaub in einer hochwertigen und
                    komfortablen Unterkunft verbringen können. Türkei Familienhotel bietet viele Einrichtungen wie
                    luxuriöse <a href="https://portnature.com.tr/familienzimmer">Familienzimmer</a>, Kinderclubs, Kinderspielplätze, <a href="https://portnature.com.tr/unterhaltung">Animations- und Unterhaltungsprogramme</a>.
                    Beste Familienhotels Türkei bieten großartige Unterkünfte für Familien mit warmer Atmosphäre,
                    freundlichem Personal und <a href="https://portnature.com.tr/hauptrestaurant">leckerem Essen</a> während Ihres Urlaubs. Türkei All Inclusive Hotels erregen
                    Aufmerksamkeit durch ein reichhaltiges Angebot an Speisen aus der türkischen und internationalen
                    Küche. Familienhotels in vielen touristischen Gebieten der Türkei ermöglichen es Urlaubern, die
                    natürliche Schönheit zu erkunden und lokale Küche zu probieren.
                </p>
                <h3 class="split-text-7">Familienurlaub Türkei</h3>
                <p>
                    Familienurlaub Türkei ist eine großartige Option, da es viele Aktivitäten gibt, die sowohl Kinder
                    als auch Erwachsene interessieren. Ob Sie nun ein Fünf-Sterne Luxushotel oder ein bescheideneres
                    Apart-Hotel bevorzugen, Urlaub in der Türkei ist ideal für Familien. All Inclusive Urlaub Türkei ist
                    eine der beliebtesten Optionen für Familien mit türkischen Hotels. Die beste Familienhotels Türkei
                    bieten <a href="https://portnature.com.tr/alacarte-restaurant-mini-club">Kinderclubs</a>, Spielzimmer, <a href="https://portnature.com.tr/innenpool">Innenpool</a> und kinderfreundliche Aktivitäten. Ein Urlaub in einem
                    der besten Familienhotels in der Türkei wird mit all den angebotenen Einrichtungen definitiv zu
                    einem unvergesslichen Erlebnis.
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
                <h4 class="split-text-8">Beste Kinderhotel Türkei</h4>
                <p>
                    In der Türkei gibt es viele <a href="https://portnature.com.tr/kinderkonzept">kinderfreundliche Hotels</a>. Das beste Kinderhotel Türkei ist jedoch das
                    <a href="https://portnature.com.tr/de">Antalya Port Nature Luxury Resort Hotel</a>. Das Antalya Kinderhotel bietet viele <a href="https://portnature.com.tr/aktiviaten">Aktivitäten</a>, die
                    Familien einen angenehmen Aufenthalt ermöglichen. Für Kinder gibt es einen <a href="https://portnature.com.tr/alacarte-restaurant-mini-club">Miniclub</a>, einen
                    <a href="https://portnature.com.tr/aqua-park">Wasserpark</a>, Spielplätze und Animationsprogramme. Es gibt auch Aktivitäten für Familien wie
                    Fitnesscenter, <a href="https://portnature.com.tr/spa-zentrum">Spa-Center</a>, Türkisches Bad und Beachvolleyball. Die Unterkunftseinheiten des Antalya
                    5 Sterne Hotel Port Nature Luxury Resort Hotel sind geräumig und komfortabel und bieten Familien
                    angenehmen Aufenthalt. Port Nature Luxury Resort Hotel ist eines der besten kinderfreundlichen
                    Hotels in der Türkei und macht den Urlaub für Familien unvergesslich.
                </p>
            </div>
        </div>
        <div class="three-img-div">
            <div class="split-svg three-img-2 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h5 class="split-text-9">Familienhotel Türkei Urlaub Buchen</h5>
                <p>
                    Türkei Hotels sind mit ihren herrlichen Naturschönheiten, den historischen Stätten und der reichen
                    Kultur ein idealer Ort für einen Familienurlaub. Vor allem <b>Familienhotels Türkei</b> sind die perfekte
                    Unterkunft für Familien, die einen Urlaub in der Türkei verbringen möchten. Diese Hotels verfügen
                    über familienfreundliche Einrichtungen und sind auf Familien ausgerichtet, die mit Kindern in die
                    Türkei reisen. Außerdem können Sie ein Familienhotel in der Türkei buchen, indem Sie die Vorteile
                    zahlreicher Türkei Pauschalreise nutzen. <a href="https://portnature.com.tr/familienzimmer">Familienzimmer</a> und <a href="https://www.portnature.com.tr/restaurants-alacarte">Speisemöglichkeiten</a>. Es ist auch
                    möglich, eine <a href="tel:+902427310707">Reservierung über unser Callcenter vorzunehmen</a>. Es ist auch möglich, eine Reservierung
                    über unser <a href="tel:+902427310707">Callcenter</a> oder eine <a href="https://portnature.rezervasyonal.com/?_gl=1*ism94q*_ga*NzI2Nzc2MjAuMTY4MjQ5NTU2Ng..*_ga_6EYM72GR61*MTY4MzIwMzkwMS4xLjEuMTY4MzIwNTE1MS4wLjAuMA..">Online-Reservierung</a> vorzunehmen.
                </p>
            </div>
        </div>
        <div class="three-img-div">
            <div class="split-svg three-img-3 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h5 class="split-text-10">Beste Familienhotels Mit Aquapark Türkei Antalya</h5>
                <p>
                    <b>Beste Familienhotels mit Aquapark Türkei Antalya</b>, bietet einen perfekten Urlaub für Sie und Ihre
                    Kinder. Antalya Familienhotels mit <a href="https://portnature.com.tr/aqua-park">Aquapark</a> sind Einrichtungen, die zu jeder Zeit des Jahres besucht
                    werden können. Beste Familienhotels Türkei mit Aquapark können sich die Kinder im Sommer auf den
                    Wasserrutschen vergnügen. In den Wintermonaten locken in der Regel Hallenbäder und Thermalbereiche
                    die Familien an. Folglich ist das Antalya Hotel 5 Sterne mit Aquapark Einrichtungen, die die
                    Bedürfnisse von Familien nach <a href="https://portnature.com.tr/unterhaltung">Unterhaltung</a> und <a href="https://portnature.com.tr/zimmer">komfortabler Unterkunft</a> mit herrlichem Service
                    erfüllen.
                </p>
            </div>
        </div>

    </div>
    <div class="grey-wrapper">
        <div class="double-text-wrapper  ">


            <div class="double-text">
                <h2 class="split-text-11">Urlaub in der Türkei</h2>
                <p>
                    Ein Urlaub in der Türkei beschränkt sich nicht nur auf Meer, Sand und Sonne. Neben dem <b>Türkei
                    Strandurlaub</b> ziehen auch die Naturschönheiten und das köstliche Essen die Aufmerksamkeit der
                    Touristen auf sich. Vor allem das beste Türkei 5 Sterne Hotel bietet viele andere Möglichkeiten als
                    nur die Unterbringung. Mit <a href="https://portnature.com.tr/alacarte-restaurant-french">französischer à la carte</a>, <a href="https://portnature.com.tr/alacarte-restaurant-italian">italienischer à la carte</a> und können Sie
                    verschiedene Geschmäcker der Weltküche kennen lernen. Sie können Ihren Kaffee im <a href="https://portnature.com.tr/kafedavidoff">Davidoff Café</a>
                    trinken und in der <a href="https://portnature.com.tr/barflamingo">Flamingo Bar</a> verschiedene Cocktails aus Hunderten von Sorten probieren. Viele
                    weitere Einrichtungen erwarten Sie im besten 5 Sterne Hotel Türkei, dem <a href="https://portnature.com.tr/de">Antalya Port Nature Luxury
                    Resort Hotel.</a> </p>
            </div>
            <div class="double-text">
                <h3 class="split-text-11">5 Sterne Hotel Türkei Reisen</h3>
                <p>
                    Für alle, die <b>5 Sterne Hotel Türkei Reisen</b> planen, gibt es viele luxuriöse Möglichkeiten. Die besten
                    Hotels in der Türkei versprechen den Gästen einen Urlaub, der allen Ansprüchen gerecht wird. Das
                    Luxushotel in Antalya bietet Privatstrände, <a href="https://portnature.com.tr/innenpool">Innenpool</a>, <a href="https://portnature.com.tr/aqua-park">Aquaparks</a> und Spazentren. Türkei All
                    Inclusive Hotels bieten hochwertige <a href="https://portnature.com.tr/zimmer">Unterkünfte</a> und <a href="https://portnature.com.tr/speisen-getranke">köstliche Mahlzeiten</a>. Wenn 5 Sterne Hotel Türkei
                    Reisen zu Ihren Sommerurlaubsplänen gehören, sollten Sie unbedingt einen Blick auf die
                    Pauschalreisen Türkei werfen. Sie erhalten das gewünschte Urlaubspaket, indem Sie eine <a href="tel:+902427310707">Reservierung
                    über das Callcenter vornehmen</a>. </p>
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