@extends('frontend.de.layouts.master')

@section('title', 'Zimmer - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="{{ route('de-accommodation') }}" data-bs-toggle="dropdown"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('accommodation') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-accommodation') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-accommodation') }}">RU</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="accommdationHero">
    <h1>Spüren Sie jeden Schönheit der Räume von Port Nature Luxury </h1>
</div>
    <div class="roomSelect">
        <a href="{{ route('de-family-rooms') }}">Familienzimmer</a>
        <a href="{{ route('de-kingsuit-rooms') }}">King Suite</a>
        <a href="{{ route('de-standard-rooms') }}">Standardzimmer</a>
    </div>

<!-- Rooms Start -->
<div class="accommRoom">
    <div class="flamingoBg">
        <img src="{{ asset('assets/frontend/images/accommdation/flamingo.svg') }}" alt="flamingo"/>
    </div>
    <div class="roomsRows">
        <div class="roomSwiperWrapper">
            <div class="swiper accomFamilyRoom">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a class="lc-family" href="{{ asset('assets/frontend/images/familyroom/rooms-family-room-1.webp') }}">
                            <img src="{{ asset('assets/frontend/images/familyroom/rooms-family-room-1.webp') }}" alt="familyroom"/>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="lc-family" href="{{ asset('assets/frontend/images/familyroom/rooms-family-room-2.webp') }}">
                            <img src="{{ asset('assets/frontend/images/familyroom/rooms-family-room-2.webp') }}" alt="familyroom"/>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="lc-family" href="{{ asset('assets/frontend/images/familyroom/rooms-family-room-3.webp') }}">
                            <img src="{{ asset('assets/frontend/images/familyroom/rooms-family-room-3.webp') }}" alt="familyroom"/>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="lc-family" href="{{ asset('assets/frontend/images/familyroom/rooms-family-room-4.webp') }}">
                            <img src="{{ asset('assets/frontend/images/familyroom/rooms-family-room-4.webp') }}" alt="familyroom"/>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="lc-family" href="{{ asset('assets/frontend/images/familyroom/rooms-family-room-5.webp') }}">
                            <img src="{{ asset('assets/frontend/images/familyroom/rooms-family-room-5.webp') }}" alt="familyroom"/>
                        </a>
                    </div>
                </div>
                <div class="swiper-button-next">
                    <img style="width: 13px;height: 27px" class="accommdationSvg" src="{{ asset('assets/frontend/images/swiperwhite-right.svg') }}" alt="swiper"/>
                </div>
                <div class="swiper-button-prev">
                    <img style="width: 13px;height: 27px" class="accommdationSvg"
                         src="{{ asset('assets/frontend/images/swiperwhite-left.svg') }}" alt="swiper"/>
                </div>
                <div class="swiper-pagination-family swiper-pagination"></div>
            </div>
            <div class="moreButton mobileMore">
                <a href="{{ route('de-family-rooms') }}">Mehr Uber</a>
            </div>
        </div>
        <div class="roomDescWrapper" id="familyroom">
            <a class="roomlink" href="{{ route('de-family-rooms') }}">
                <h5>FAMILIENZIMMER</h5>
                <p>Die Familienzimmer von Port Nature sind die beste Wahl für Familien. Dank des Kinderzimmers in den Familienzimmern ist es die beste Lösung für Familien mit Kindern.</p>
                <div class="roomSpecWrapper">
                    <div class="roomSpecs">
                        <span>
                            <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/doublebed.svg') }}"
                                 alt="doublebed"/> x&nbsp; 2</span>
                        <span>
                            <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/singlebed.svg') }}"/>x&nbsp; 2
                        </span>
                        <span>45 &#13217;</span>
                    </div>
                    <span class="extraSpec">
                        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/view.svg') }}"/>&nbsp;&nbsp;&nbsp; Mit seitlichem Meerblick
                    </span>
                </div>
                <div class="moreButton DeskMore">
                    <a href="{{ route('de-family-rooms') }}">Mehr erfahren</a>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="accommRoom" id="kingsuite">
    <div class="roomsRows reverse">
        <div class="roomSwiperWrapper">
            <div class="swiper accomKingRoom">
                <div class="swiper-wrapper lc-king">
                    <div class="swiper-slide">
                        <a href="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-1.webp') }}">
                            <img src="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-1.webp') }}" alt="kingSuite1"/>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-2.webp') }}">
                            <img src="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-2.webp') }}" alt="kingSuite2"/>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-3.webp') }}">
                            <img src="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-3.webp') }}" alt="kingSuite3"/>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-4.webp') }}">
                            <img src="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-4.webp') }}" alt="kingSuite4"/>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-5.webp') }}">
                            <img src="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-5.webp') }}" alt="kingSuite5"/>
                        </a>
                    </div>
                </div>
                <div class="swiper-button-next">
                    <img style="width: 13px;height: 27px" class="accommdationSvg" src="{{ asset('assets/frontend/images/swiperwhite-right.svg') }}"/>
                </div>
                <div class="swiper-button-prev">
                    <img style="width: 13px;height: 27px" class="accommdationSvg"
                         src="{{ asset('assets/frontend/images/swiperwhite-left.svg') }}" alt="swiper"/>
                </div>
                <div class="swiper-pagination-king swiper-pagination"></div>
            </div>
            <div class="moreButton mobileMore">
                <a href="{{ route('de-kingsuit-rooms') }}">Mehr Uber</a>
            </div>
        </div>
        <div class="roomDescWrapper ">
            <a class="roomlink" href="{{ route('de-kingsuit-rooms') }}">
                <h5>King Suite</h5>
                <p>Jede Suite bietet Blick auf das Mittelmeer. Die Suite verfügt über großzügige Platzverhältnisse, drei Schlafzimmer und ein luxuriöses Design mit luxuriöser Ausstattung.</p>
                <div class="roomSpecWrapper">
                    <div class="roomSpecs">
                    <span>
                        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/doublebed.svg') }}" alt="doublebed"/> x&nbsp; 1
                    </span>
                        <span><img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/singlebed.svg') }}"/>x&nbsp; 2</span>
                        <span>110 &#13217;</span>
                    </div>
                    <span class="extraSpec"><img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/view.svg') }}"/>&nbsp;&nbsp;&nbsp; Mit Meerblick</span>
                </div>
                <div class="moreButton DeskMore">
                    <a href="{{ route('de-kingsuit-rooms') }}">Mehr erfahren</a>
                </div>
            </a>

        </div>
    </div>
</div>

<div class="accommRoom" id="standardroom">
    <div class="pigeonBg">
        <img src="{{ asset('assets/frontend/images/accommdation/pigeon.svg') }}" alt="pigeon"/>
    </div>
    <div class="roomsRows">
        <div class="roomSwiperWrapper">
            <div class="swiper accomStandardRoom">
                <div class="swiper-wrapper lc-standard">
                    <div class="swiper-slide">
                        <a href="{{ asset('assets/frontend/images/standardSeaView/rooms-standart-sea-1.webp') }}">
                            <img src="{{ asset('assets/frontend/images/standardSeaView/rooms-standart-sea-1.webp') }}" alt="standardroom"/>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ asset('assets/frontend/images/standardCornerSeaView/rooms-standart-side-3.webp') }}">
                            <img src="{{ asset('assets/frontend/images/standardCornerSeaView/rooms-standart-side-3.webp') }}" alt="standardroom"/>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ asset('assets/frontend/images/standardCornerSeaView/rooms-standart-side-2.webp') }}">
                            <img src="{{ asset('assets/frontend/images/standardCornerSeaView/rooms-standart-side-2.webp') }}" alt="standardroom"/>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ asset('assets/frontend/images/standardGardenView/rooms-standart-land-5.webp') }}">
                            <img src="{{ asset('assets/frontend/images/standardGardenView/rooms-standart-land-5.webp') }}" alt="standardroom"/>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ asset('assets/frontend/images/standardSeaView/rooms-standart-sea-5.webp') }}">
                            <img src="{{ asset('assets/frontend/images/standardSeaView/rooms-standart-sea-5.webp') }}" alt="standardroom"/>
                        </a>
                    </div>
                </div>
                <div class="swiper-button-next">
                    <img style="width: 13px;height: 27px" class="accommdationSvg" src="{{ asset('assets/frontend/images/swiperwhite-right.svg') }}"/>
                </div>
                <div class="swiper-button-prev">
                    <img style="width: 13px;height: 27px" class="accommdationSvg"
                         src="{{ asset('assets/frontend/images/swiperwhite-left.svg') }}" alt="swiper"/>
                </div>
                <div class="swiper-pagination-standard swiper-pagination"></div>
            </div>
            <div class="moreButton mobileMore">
                <a href="{{ route('de-standard-rooms') }}">Mehr Uber</a>
            </div>
        </div>
        <div class="roomDescWrapper">
            <a class="roomlink" href="{{ route('de-standard-rooms') }}">
                <h5>STANDARDZIMMER</h5>
                <p>Mit ruhigem Meer- oder Naturblick, Standardzimmer verfügen über luxuriöse Ausstattung und luxuriösen Service.</p>
                <div class="roomSpecWrapper">
                    <div class="roomSpecs">
                <span>
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/doublebed.svg') }}" alt="doublebed"/> x&nbsp; 1
                </span>
                        <span><img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/singlebed.svg') }}"/> x 1</span>
                        <span>35 &#13217;</span>

                    </div>
                    <span class="extraSpec deskExtraStandard"><img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/view.svg') }}"/>&nbsp;&nbsp; Mit seitlichem Meer- / Meer- / Landblick</span>
                </div>
                <div class="moreButton DeskMore">
                    <a href="{{ route('de-standard-rooms') }}">Mehr erfahren</a>
                </div>
            </a>
           
        </div>
    </div>
</div>
<!-- Rooms End -->

<!-- Features -->
<div class="roomFeatures">
    <div class="roomFeaturesWrapper">
        <h6>Merkmale</h6>
        <div class="featureGrid">
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/balcony.svg') }}"/>
                <p>Balkon / Terrasse</p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/shower.svg') }}"/>
                <p>
                    Separate Dusche & WC
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/airconditioner.svg') }}"/>
                <p>
                    Split-System-Klimaanlage
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/coffeset.svg') }}"/>
                <p>
                    Heißgetränke-Set-Up
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/digitalsafe.svg') }}"/>
                <p>
                    Digitaler Tresor
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/tv.svg') }}"/>
                <p>
                    LED-Fernseher
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/towel.svg') }}"/>
                <p>
                    Handtuch
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/dialphone.svg') }}"/>
                <p>
                    Direktwahltelefon
                </p>
            </div>
            
        </div>
        <div class="collapseSpecsWrapper collapse" id="collapseRoomSpecs">
        <div class=" featureGrid collapsableFeatureGrid" >
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/broadcast.svg') }}"/>
                <p>
                    Satellitenrundfunk
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/minibar.svg') }}"/>
                <p>
                    Minibar
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/chair.svg') }}"/>
                <p>
                    Tisch und Stuhl
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/mirror.svg') }}"/>
                <p>
                    Schminkspiegel
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/wifi.svg') }}"/>
                <p>
                    Kostenloses Wi-Fi-Internet
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/flooring.svg') }}"/>
                <p>
                    Parkettboden
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/dryer.svg') }}"/>
                <p>
                    Haartrockner
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/slippers.svg') }}"/>
                <p>
                    Hausschuhe
                </p>
            </div>
        </div></div>

        <a class="moreButton showAllFeature" type="button"  data-bs-toggle="collapse" data-bs-target="#collapseRoomSpecs">Mehr Uber</a>
            

    
        </div>
    </div>
</div>
<!-- Features End -->
<!-- Contact -->
@include('frontend.de.layouts.contact')
<!-- Contact End -->
<!-- Page Up Button -->
<div class="pageUpButton">
    <a href="#">
        <img style="width: unset;height: unset" class="accommdationSvg" src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
    </a>
</div>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/accommdation.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/css/roomDetail.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/skins/light.css') }}"/>
@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
<script src="{{ asset('assets/frontend/js/rooms.js') }}"></script>
<script type='text/javascript'>
      $(document).ready(function() {
          const $obj = lc_lightbox('.lc-family');
      });
      $(document).ready(function() {
          const $obj = lc_lightbox('.lc-king a');
      });
      $(document).ready(function() {
          const $obj = lc_lightbox('.lc-standard a');
      });
</script>
@endsection