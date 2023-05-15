@extends('frontend.de.layouts.master')

@section('title', 'King Suite Zimmer - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-kingsuit-rooms') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('kingsuit-rooms') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-kingsuit-rooms') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-kingsuit-rooms') }}">RU</a></li>
    </ul>
</li>

@endsection


@section('content')

<div class="roomDetail">
    <div class="kingSuiteDetailHero">
        <h1>KING-SUITE-ZIMMER</h1>
    </div>

    <div class="roomDetailText">
        <div class="container">
            <span>Wunderbarer Meerblick und luxuriöse, große Zimmer werden Sie faszinieren.<br> Großer Balkon, 3 getrennte Zimmer, modernes und hochwertiges Design.</span>
        </div>
    </div>
    <div class="container">
        <div class="roomDetailSpecs">
            <div class="roomSpecsInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opadult.svg') }}" alt="adult"/>
                <p>5 ERWACHSENE + 1 KIND</p>
            </div>
            <div class="roomSpecsInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opsinglebed.svg') }}" alt="singlebed"/>
                <p>2 EINZELBETTEN</p>
            </div>
            <div class="roomSpecsInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opdoublebed.svg') }}" alt="doublebed"/>
                <p>1 DOPPELBETT</p>
            </div>
            <div class="roomSpecsInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opsquare.svg') }}" alt="meter"/>
                <p>110 m²</p>
            </div>
            <div class="roomSpecsInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opview.svg') }}" alt="view"/>
                <p>MEERBLICK</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="roomDetailSpecsTablet">
            <div class="detailSpecLine">
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opadult.svg') }}" alt="adult"/>
                    <p>5 ERWACHSENE + 1</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opsinglebed.svg') }}" alt="singlebed"/>
                    <p>2 EINZELBETTEN</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opdoublebed.svg') }}" alt="doublebed"/>
                    <p>1 DOPPELBETT</p>
                </div>
            </div>
            <div class="detailSpecLineSecond">
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opsquare.svg') }}" alt="meter"/>
                    <p>110 m²</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opview.svg') }}" alt="view"/>
                    <p>MEERBLICK</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="roomPhotos lc-king">
            <div class="row">
                <div class="col-12 col-md-6 p-4">
                    <a href="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-1.webp') }}">
                        <img src="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-1.webp') }}" alt="kingsuite-1"/>
                    </a>
                </div>
                <div class="col-12 col-md-6 p-4">
                    <a href="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-2.webp') }}">
                        <img src="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-2.webp') }}" alt="kingsuite-2"/>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 p-4">
                    <a href="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-3.webp') }}">
                        <img src="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-3.webp') }}" alt="kingsuite-3"/>
                    </a>
                </div>
                <div class="col-12 col-md-6 p-4">
                    <a href="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-4.webp') }}">
                        <img src="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-4.webp') }}" alt="kingsuite-4"/>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 p-4">
                    <a href="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-5.webp') }}">
                        <img src="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-5.webp') }}" alt="kingsuite-5"/>
                    </a>
                </div>
                <div class="col-12 col-md-6 p-3">
                    <article>
                        <h6>Luxuriös und komfortabel wie ein König</h6>
                        <p>The Port Nature, diese eleganten Suiten mit drei Schlafzimmern gehören zu den geräumigsten Suiten des Hotels. Jede Suite blickt auf das Meer. Es gibt Marmorfoyers und großzügigen Platz, ein separates Wohnzimmer und ein großes Schlafzimmer mit einem großen Balkon</p>
                        <span>Genießen Sie Ihren Urlaub</span>
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
        <p>5 Adults + 1 · 1 double bed · 2 single beds<br>45 m² · Corner Sea View</p>
    </div>
</div>
<!-- Features -->
<div class="roomFeatures">
    <div class="container">
        <h6>Merkmale</h6>
        <div class="featureGrid">
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/kingSuite/terrace.svg') }}"/>
                <p>Terrasse</p>
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
      <img src="{{ asset('assets/frontend/images/kingSuite/kingSuite360Placeholder.webp') }}" alt="360view"/>
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
                        <a class="roomlink" href="{{ route('de-family-rooms') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/home/home-page-family-1.webp') }}" alt="familyroom"/>
                            </figure>
                            <h4>FAMILIENZIMMER</h4>
                            <span>4 ERWACHSENE +1 ·  45 m²  ·  Seitlichem Blick</span>
                            <p>Ihre Kinder finden ihren eigenen Rückzugsort, während Sie sich im Nebenzimmer entspannen."</p>
                            <div class="moreButton">
                                <a href="{{ route('de-family-rooms') }}">Mehr Uber</a>
                            </div></a>
                    </div>
                </div>
                <div class="other-room-wrapper" id="otherRoomSecond">
                    <div class="otherRoomImage">
                        <a class="roomlink" href="{{ route('de-standard-rooms') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/home/home-page-standart-sea-1.webp') }}" alt="standardRoom"/>
                            </figure>
                            <h4>STANDARDZIMMER</h4>
                            <span>2 ERWACHSENE + 2  ·  34 m²  ·  Seitlichem / Meer / Land</span>
                            <p>Viele der luxuriösen Ausstattungsmerkmale sorgen für einen unvergesslichen Urlaub.</p>
                            <div class="moreButton">
                                <a href="{{ route('de-standard-rooms') }}">Mehr Uber</a>
                            </div></a>
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
        const $obj = lc_lightbox('.lc-king a');
      });
  </script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/roomDetail.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/css/accommdation.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/skins/light.css') }}"/>
@endsection