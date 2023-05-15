@extends('frontend.de.layouts.master')

@section('title', 'Standard Zimmer Landblick - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-landview-rooms') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('landview-rooms') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-landview-rooms') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-landview-rooms') }}">RU</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="roomDetail">
    <div class="gardenViewRoomHero">
        <h1>STANDARD ZIMMER · LANDBLICK</h1>
    </div>

    <div class="roomDetailText">
        <div class="container">
            <span>Für diejenigen, die in die Schönheit und Ruhe der Natur eintauchen wollen. Genießen Sie unsere Zimmer mit Landblick.</span>
        </div>
    </div>
    <div class="container">
        <div class="roomDetailSpecs">
            <div class="roomSpecsInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opadult.svg') }}" alt="adult"/>
                <p>2 ERWACHSENE + 2 KINDER / 3 ERWACHSENE</p>
            </div>
            <div class="roomSpecsInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opsinglebed.svg') }}" alt="singlebed"/>
                <p>1 EINZELBETT</p>
            </div>
            <div class="roomSpecsInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opdoublebed.svg') }}" alt="doublebed"/>
                <p>1 DOPPELBETT</p>
            </div>
            <div class="roomSpecsInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opsquare.svg') }}" alt="meter"/>
                <p>34 m²</p>
            </div>
            <div class="roomSpecsInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opview.svg') }}" alt="view"/>
                <p>LANDANSICHT</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="roomDetailSpecsTablet">
            <div class="detailSpecLine">
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opadult.svg') }}" alt="adult"/>
                    <p>2 ERWACHSENE + 2 KINDER / 3 ERWACHSENE</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opsinglebed.svg') }}" alt="singlebed"/>
                    <p>1 EINZELBETT</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opdoublebed.svg') }}" alt="doublebed"/>
                    <p>1 DOPPELBETT</p>
                </div>
            </div>
            <div class="detailSpecLineSecond">
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opsquare.svg') }}" alt="meter"/>
                    <p>34 m²</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opview.svg') }}" alt="view"/>
                    <p>LANDANSICHT</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="roomPhotos lc-land">
            <div class="row">
                <div class="col-12 col-md-6 p-3">
                    <a href="{{ asset('assets/frontend/images/standardGardenView/rooms-standart-land-1.webp') }}">
                        <img src="{{ asset('assets/frontend/images/standardGardenView/rooms-standart-land-1.webp') }}"
                                alt="landview"/>
                    </a>
                </div>
                <div class="col-12 col-md-6 p-3">
                    <a href="{{ asset('assets/frontend/images/standardGardenView/rooms-standart-land-2.webp') }}">
                        <img src="{{ asset('assets/frontend/images/standardGardenView/rooms-standart-land-2.webp') }}"
                                alt="landview"/>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 p-3">
                    <a href="{{ asset('assets/frontend/images/standardGardenView/rooms-standart-land-3.webp') }}">
                        <img src="{{ asset('assets/frontend/images/standardGardenView/rooms-standart-land-3.webp') }}"
                                alt="landview"/>
                    </a>
                </div>
                <div class="col-12 col-md-6 p-3">
                    <a href="{{ asset('assets/frontend/images/standardGardenView/rooms-standart-land-4.webp') }}">
                        <img src="{{ asset('assets/frontend/images/standardGardenView/rooms-standart-land-4.webp') }}"
                                alt="landview"/>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 p-3">
                    <a href="{{ asset('assets/frontend/images/standardGardenView/rooms-standart-land-5.webp') }}">
                        <img src="{{ asset('assets/frontend/images/standardGardenView/rooms-standart-land-5.webp') }}"
                                alt="landview"/>
                    </a>
                </div>
                <div class="col-12 col-md-6 p-3">
                    <article>
                        <h6>Luxuserlebnis</h6>
                        <p>Luxuriöse Ausstattung, intelligentes Design und jeder erdenkliche Komfort machen diese Zimmer schwer zu verlassen. Nachdenkliche Berührungen sind überall. Im Badezimmer bieten schlichte Marmoroberflächen Platz in Hülle und Fülle.</p>
                        <span>Genießen Sie mit luxuriösen Dienstleistungen</span>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <div class="roomSketch">
        <img class="familyRoomSketch" src="{{ asset('assets/frontend/images/familyroom/familyRoomSketch.png') }}" alt=""/>
        <div class="zoomButtons">
            <span class="zoomIn">
            </span>
            <span class="zoomOut">
            </span>
        </div>
        <p>2 Adults + 2 Children / 3 adults · 1 double bed · 2 single beds<br>34 m² · Corner Sea View</p>
    </div>
</div>
<!-- Features -->
<div class="roomFeatures">
    <div class="container">
        <h6>Merkmale</h6>
        <div class="featureGrid">
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/balcony.svg') }}"/>
                <p>Balkon</p>
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
                    Heißgetränke-Set-Up<br> (Tee - und Kaffeesets)
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
        <div class="collapse featureGrid" id="collapseRoomSpecs">
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
        </div>
        <div class="moreButton collapseView">
            <a href="#">Mehr Uber</a>
        </div>
        <div class="moreButton showAllFeature">
            <a class="featureButton" data-bs-toggle="collapse" href="#collapseRoomSpecs" role="button"
               aria-expanded="false" aria-controls="collapseRoomSpecs">
                Hausschuhe
            </a>
        </div>
    </div>
</div>
<!-- Features End -->

<!-- 360 View -->
<div class="room360View">
    <img src="{{ asset('assets/frontend/images/standardSeaView/seaView360.webp') }}" alt="360view"/>
</div>
<!-- 360 View End -->
<!-- Contact -->
@include('frontend.de.layouts.contact')
<!-- Contact End -->
<!-- Other Rooms -->
<div class="otherRoomsWrapper">
    <div class="otherRooms">
        <div class="row">
            <div class="col-12 col-md-12">
                <article>
                    <h3>Andere Zimmeroptionen</h3>
                    <span>In Port Nature finden Sie Zimmer, die Ihren Bedürfnissen entsprechen.</span>
                </article>
            </div>
        </div>
        <div class="roomsDetailBg">
            <div class="rooms-detail-wrapper">
                <div class="other-room-wrapper">
                    <div class="otherRoomImage firstRoom">
                        <a class="roomlink" href="{{ route('de-kingsuit-rooms') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/home/home-page-king-1.webp') }}" alt="kingSuite"/>
                            </figure>
                            <h4>King Suite</h4>
                            <span>5 ERWACHSENE +1 ·  110 m²  ·  Meerblick</span>
                            <p>Wunderbarer Meerblick und luxuriöse, große Zimmer werden Sie faszinieren.</p>
                            <div class="moreButton">
                                <a href="{{ route('de-kingsuit-rooms') }}">Mehr Uber</a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="other-room-wrapper" id="otherRoomSecond">
                    <div class="otherRoomImage">
                        <a class="roomlink" href="{{ route('de-family-rooms') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/home/home-page-standart-sea-1.webp') }}" alt="familyRoom"/>
                            </figure>
                            <h4>FAMILIENZIMMER</h4>
                            <span>4 ERWACHSENE + 1  ·  45 m²  ·  Seitlichem Blick</span>
                            <p>Ihre Kinder finden ihren eigenen Rückzugsort, während Sie sich im Nebenzimmer entspannen.</p>
                            <div class="moreButton">
                                <a href="{{ route('de-family-rooms') }}">Mehr Uber</a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Other Rooms End -->

<div class="pageUpButton">
    <a href="#">
        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
    </a>
</div>

@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
<script type='text/javascript'>
    $(document).ready(function() {
        const $obj = lc_lightbox('.lc-land a');
    });
  </script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/accommdation.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/css/roomDetail.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/skins/light.css') }}"/>
@endsection