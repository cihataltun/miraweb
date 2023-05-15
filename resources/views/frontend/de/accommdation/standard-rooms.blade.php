@extends('frontend.de.layouts.master')

@section('title', 'Standardzimmer - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-standard-rooms') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('standard-rooms') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-standard-rooms') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-standard-rooms') }}">RU</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="roomDetail">
    <div class="standardRoomDetailHero">
        <h1>STANDARDZIMMER</h1>
    </div>
</div>
<div class="container">
    <div class="standardRoomSelect">
        <a href="{{ route('de-sideview-rooms') }}">Mit seitlichem Meerblick</a>
        <a href="{{ route('de-seaview-rooms') }}">Mit Meerblick</a>
        <a href="{{ route('de-landview-rooms') }}">Mit Landblick</a>
    </div>
</div>
<div class="container">
    <div class="row cornerViewRoom" id="cornerview">
        <div class="col-12 col-md-12 col-lg-6">
            <figure class="lc-side">
                <a href="{{ asset('assets/frontend/images/standardRooms/rooms-standart-side-2.webp') }}">
                    <img src="{{ asset('assets/frontend/images/standardRooms/rooms-standart-side-2.webp') }}" alt="cornerview"/></a>
                <span>2 Erwachsene + 2 Kinder / 3 Erwachsene  ·  34 m²  <br>  1 Doppelbett  ·  1 Einzelbett</span>
            </figure>
        </div>
        <a class="roomlink" href="{{ route('de-sideview-rooms') }}">
            <div class="col-12 col-md-12 col-lg-6">
                <article>
                    <h5>Mit seitlichem Meerblick</h5>
                    <p>Entspannen Sie sich in einem Zimmer mit seitlichem Meerblick und atemberaubender Aussicht auf die Küste.</p>
                    <span>
                        Meer und Natur runden den Urlaub ab.
                    </span>
                    <div class="moreButton">
                        <a href="{{ route('de-sideview-rooms') }}">Mehr erfahren</a>
                    </div>
                </article>
            </div>
        </a>
        <img class="standardBird" src="{{ asset('assets/frontend/images/standardRooms/pigeon.svg') }}" alt="pigeon"/>

    </div>
    <div class="row seaView" id="seaview"><a class="roomlink" href="{{ route('de-seaview-rooms') }}">
        <div class="col-12 col-md-12 col-lg-6">
            <article>
                <h5>Meerblick</h5>
                <p>
                    Wenn Sie aufwachen und den herrlichen Blick auf das Meer und den Sand genießen, wird es Ihnen vorkommen, als würden Sie aus einem Traum erwachen.
                </p>
                <span>
                    Meer und Sand verbessern Ihre Stimmung
                </span>
                <div class="moreButton">
                    <a href="{{ route('de-seaview-rooms') }}">Mehr erfahren</a>
                </div>
            </article>
        </div>
    </a>
        <div class="col-12 col-md-12 col-lg-6">
            <figure class="lc-sea">
                <a href="{{ asset('assets/frontend/images/standardRooms/rooms-standart-sea-2.webp') }}">
                    <img src="{{ asset('assets/frontend/images/standardRooms/rooms-standart-sea-2.webp') }}" alt="seaview"/>
                </a>
                <span>2 Adults + 2 Children / 3 Adults  ·  34 m²  <br>  1 double bed  ·  1 single bed</span>
            </figure>
        </div>

    </div>
    <div class="row cornerViewRoom" id="gardenview">
        <div class="col-12 col-md-12 col-lg-6">
            <figure class="lc-land">
                <a href="{{ asset('assets/frontend/images/standardRooms/rooms-standart-land.webp') }}">
                    <img src="{{ asset('assets/frontend/images/standardRooms/rooms-standart-land.webp') }}" alt="cornerview"/></a>
                <span>2 Erwachsene + 2 Kinder / 3 Erwachsene  ·  34 m²  <br>  1 Doppelbett  ·  1 Einzelbett</span>
            </figure>
        </div>
        <a class="roomlink" href="{{ route('de-landview-rooms') }}">
            <div class="col-12 col-md-12 col-lg-6">
                <article>
                    <h5>Landblick</h5>
                    <p>
                        Blick auf den Garten des Paradieses. Frische Luft und Luxuserlebnis.
                    </p>
                    <span>
                        Alles wird sich luxuriös anfühlen
                    </span>
                    <div class="moreButton">
                        <a href="{{ route('de-landview-rooms') }}">Mehr erfahren</a>
                    </div>
                </article>
            </div>
        </a>
        <img class="standardBird" src="{{ asset('assets/frontend/images/standardRooms/pigeon.svg') }}" alt="pigeon"/>
    </div>
</div>

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
                                <img src="{{ asset('assets/frontend/images/home/kingSuite.webp') }}" alt="kingSuite"/>
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
                                <img src="{{ asset('assets/frontend/images/home/familyRoom.webp') }}" alt="familyRoom"/>
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
<!-- Page Up Button -->
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
        const $obj = lc_lightbox('.lc-side a');
    });
    $(document).ready(function() {
        const $obj = lc_lightbox('.lc-sea a');
    });
    $(document).ready(function() {
        const $obj = lc_lightbox('.lc-land a');
    });
  </script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/roomDetail.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/css/accommdation.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/css/standartRoom.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/skins/light.css') }}"/>
@endsection