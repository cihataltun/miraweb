@extends('frontend.en.layouts.master')

@section('title', 'Standard Sea View - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('seaview-rooms') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item" href="{{ route('tr-seaview-rooms') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-seaview-rooms') }}">RU</a></li>
        <li><a class="dropdown-item first-item" href="{{ route('de-seaview-rooms') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="roomDetail">
    <div class="seaViewRoomHero">
        <h1>STANDARD ROOM · SEA VIEW</h1>
    </div>

    <div class="roomDetailText">
        <div class="container">
            <span>"If you crave the beauty and tranquility of nature, our land view rooms are perfect for you.
                </span>
        </div>
    </div>
    <div class="container">
        <div class="roomDetailSpecs">
            <div class="roomSpecsInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opadult.svg') }}" alt="adult"/>
                <p>2 Adults + 2 ChildREN / 3 ADULTS</p>
            </div>
            <div class="roomSpecsInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opsinglebed.svg') }}" alt="singlebed"/>
                <p>1 single beds</p>
            </div>
            <div class="roomSpecsInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opdoublebed.svg') }}" alt="doublebed"/>
                <p>1 double bed</p>
            </div>
            <div class="roomSpecsInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opsquare.svg') }}" alt="meter"/>
                <p>34 m²</p>
            </div>
            <div class="roomSpecsInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opview.svg') }}" alt="view"/>
                <p>Sea View</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="roomDetailSpecsTablet">
            <div class="detailSpecLine">
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opadult.svg') }}" alt="adult"/>
                    <p>2 Adults + 2 ChildREN / 3 ADULTS</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opsinglebed.svg') }}" alt="singlebed"/>
                    <p>1 single beds</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opdoublebed.svg') }}" alt="doublebed"/>
                    <p>1 double bed</p>
                </div>
            </div>
            <div class="detailSpecLineSecond">
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opsquare.svg') }}" alt="meter"/>
                    <p>34 m²</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opview.svg') }}" alt="view"/>
                    <p>Sea View</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="roomPhotos lc-sea">
            <div class="row">
                <div class="col-12 col-md-6 p-3">
                    <a href="{{ asset('assets/frontend/images/standardSeaView/rooms-standart-sea-1.webp') }}">
                        <img src="{{ asset('assets/frontend/images/standardSeaView/rooms-standart-sea-1.webp') }}"
                                alt="cornerseaview"/>
                    </a>
                </div>
                <div class="col-12 col-md-6 p-3">
                    <a href="{{ asset('assets/frontend/images/standardSeaView/rooms-standart-sea-2.webp') }}">
                        <img src="{{ asset('assets/frontend/images/standardSeaView/rooms-standart-sea-2.webp') }}"
                                alt="cornerseaview"/>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 p-3">
                    <a href="{{ asset('assets/frontend/images/standardSeaView/rooms-standart-sea-3.webp') }}">
                        <img src="{{ asset('assets/frontend/images/standardSeaView/rooms-standart-sea-3.webp') }}"
                                alt="cornerseaview"/>
                    </a>
                </div>
                <div class="col-12 col-md-6 p-3">
                    <a href="{{ asset('assets/frontend/images/standardSeaView/rooms-standart-sea-4.webp') }}">
                        <img src="{{ asset('assets/frontend/images/standardSeaView/rooms-standart-sea-4.webp') }}"
                                alt="cornerseaview"/>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 p-3">
                    <a href="{{ asset('assets/frontend/images/standardSeaView/rooms-standart-sea-5.webp') }}">
                        <img src="{{ asset('assets/frontend/images/standardSeaView/rooms-standart-sea-5.webp') }}"
                                alt="cornerseaview"/>
                    </a>
                </div>
                <div class="col-12 col-md-6 p-3">
                    <article>
                        <h6>Services Beyond Luxury..</h6>
                        <p>Many with quiet sea views, rooms have ample natural light and feature generous marble bathrooms with luxury and premium stuff. </p>
                        <span>Live with high quality</span>
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
        <p>3 Adults + 1 Child · 1 double bed · 2 single beds<br>34 m² · Corner Sea View</p>
    </div>
</div>
<!-- Features -->
<div class="roomFeatures">
    <div class="roomFeaturesWrapper">
        <h6>Features</h6>
        <div class="featureGrid">
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/balcony.svg') }}"/>
                <p>Balcony / Terrace</p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/shower.svg') }}"/>
                <p>
                    Separate Shower & WC
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/airconditioner.svg') }}"/>
                <p>
                    Split-System Air Conditioner
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/coffeset.svg') }}"/>
                <p>
                    Hot Drink Set-Up 
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/digitalsafe.svg') }}"/>
                <p>
                    Digital Safe
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/tv.svg') }}"/>
                <p>
                    Led TV
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/towel.svg') }}"/>
                <p>
                    Towel
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/dialphone.svg') }}"/>
                <p>
                    Direct Dial Phone
                </p>
            </div>
        </div>
        <div class="collapseSpecsWrapper collapse" id="collapseRoomSpecs">
          <div class=" featureGrid collapsableFeatureGrid" >
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/broadcast.svg') }}"/>
                <p>
                    Satellite Broadcasting
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
                    Table and Chair
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/mirror.svg') }}"/>
                <p>
                    Make-up Mirror
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/wifi.svg') }}"/>
                <p>
                    Free Wi-Fi Internet
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/flooring.svg') }}"/>
                <p>
                    Antibacterial Parquet Flooring
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/dryer.svg') }}"/>
                <p>
                    Hair Dryer
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/slippers.svg') }}"/>
                <p>
                    Slippers
                </p>
            </div>
        </div></div>
    
        <a class="moreButton showAllFeature" type="button"  data-bs-toggle="collapse" data-bs-target="#collapseRoomSpecs">Show More</a>

    </div>
</div>
<!-- Features End -->

<!-- 360 View -->
<div class="room360View">
    <img src="{{ asset('assets/frontend/images/standardSeaView/seaView360.webp') }}" alt="360view"/>
</div>
<!-- 360 View End -->
<!-- Contact -->
@include('frontend.en.layouts.contact')
<!-- Contact End -->
<!-- Other Rooms -->
<div class="otherRoomsWrapper">
    <div class="otherRooms">
        <div class="row">
            <div class="col-12 col-md-12">
                <article>
                    <h3>Other Accommdation Options</h3>
                    <span>You can see your Port Nature room choice with our target-specific room option.</span>
                </article>
            </div>
        </div>
        <div class="roomsDetailBg">
            <div class="rooms-detail-wrapper">
                <div class="other-room-wrapper">
                    <div class="otherRoomImage firstRoom">
                        <a class="roomlink" href="{{ route('kingsuit-rooms') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/home/home-page-king-1.webp') }}" alt="kingSuite"/>
                            </figure>
                            <h4>King Suite</h4>
                            <span>5 Adults + 1  ·  110 m²  ·  Sea View</span>
                            <p>Miracle sea view, and luxurious, large rooms will mesmerize you.</p>
                            <div class="moreButton">
                                <a href="{{ route('kingsuit-rooms') }}">More About</a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="other-room-wrapper" id="otherRoomSecond">
                    <div class="otherRoomImage">
                        <a class="roomlink" href="{{ route('family-rooms') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/home/home-page-family-1.webp') }}" alt="standardRoom"/>
                            </figure>
                            <h4>Family Room</h4>
                            <span>4 Adults + 1  ·  45 m²  ·  Side View</span>
                            <p>Your children will find their own private space while you relax in the next room.</p>
                            <div class="moreButton">
                                <a href="{{ route('family-rooms') }}">More About</a>
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
        <img class="pageUp" src="{{ asset('assets/frontend/images/pageUp.svg') }}" alt="pageUp">
    </a>
</div>
@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
<script type='text/javascript'>
    $(document).ready(function() {
        const $obj = lc_lightbox('.lc-sea a');
    });
  </script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/accommdation.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/css/roomDetail.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/skins/light.css') }}"/>
@endsection