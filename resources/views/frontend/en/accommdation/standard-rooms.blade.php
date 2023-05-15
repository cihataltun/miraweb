@extends('frontend.en.layouts.master')

@section('title', 'Standard Rooms - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('standard-rooms') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item" href="{{ route('tr-standard-rooms') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-standard-rooms') }}">RU</a></li>
        <li><a class="dropdown-item first-item" href="{{ route('de-standard-rooms') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="roomDetail">
    <div class="standardRoomDetailHero">
        <h1>Standart Rooms</h1>
    </div>
</div>
<div class="container">
    <div class="standardRoomSelect">
        <a href="{{ route('sideview-rooms') }}">Side Sea View</a>
        <a href="{{ route('seaview-rooms') }}">Sea View</a>
        <a href="{{ route('landview-rooms') }}">Land View</a>
    </div>
</div>
<div class="container">
    <div class="row cornerViewRoom" id="cornerview">
        <div class="col-12 col-md-12 col-lg-6">
            <figure class="lc-side">
                <a href="{{ asset('assets/frontend/images/standardRooms/rooms-standart-side-2.webp') }}">
                    <img src="{{ asset('assets/frontend/images/standardRooms/rooms-standart-side-2.webp') }}" alt="cornerview"/></a>
                <span>2 Adults + 2 Children / 3 Adults  ·  34 m²  ·  1 double bed  ·  1 single bed</span>
            </figure>
        </div>
        <a class="roomlink" href="{{ route('sideview-rooms') }}">
            <div class="col-12 col-md-12 col-lg-6">
                <article>
                    <h5>Side Sea View</h5>
                    <p>Relax in a side sea view room with stunning coastal vistas.</p>
                    <span>
                    Sea and Nature complete a holiday</span>
                    <div class="moreButton">
                        <a href="{{ route('sideview-rooms') }}">More About</a>
                    </div>
                </article>
            </div>
        </a>
        <img class="standardBird" src="{{ asset('assets/frontend/images/standardRooms/pigeon.svg') }}" alt="pigeon"/>

    </div>
    <div class="row seaView" id="seaview"><a class="roomlink" href="{{ route('seaview-rooms') }}">
        <div class="col-12 col-md-12 col-lg-6">
            <article>
                <h5>Sea View</h5>
                <p>
                    Sea and Sand to upgrade your mood
                </p>
                <span>
                    Sea and Sand upgrade your mood
                    </span>
                <div class="moreButton">
                    <a href="{{ route('seaview-rooms') }}">More About</a>
                </div>
            </article>
        </div>
    </a>
        <div class="col-12 col-md-12 col-lg-6">
            <figure class="lc-sea">
                <a href="{{ asset('assets/frontend/images/standardRooms/rooms-standart-sea-2.webp') }}">
                    <img src="{{ asset('assets/frontend/images/standardRooms/rooms-standart-sea-2.webp') }}" alt="seaview"/>
                </a>
                <span>2 Adults + 2 Children / 3 Adults  ·  34 m²  ·  1 double bed  ·  1 single bed</span>
            </figure>
        </div>

    </div>
    <div class="row cornerViewRoom" id="gardenview">
        <div class="col-12 col-md-12 col-lg-6">
            <figure class="lc-land">
                <a href="{{ asset('assets/frontend/images/standardRooms/rooms-standart-land.webp') }}">
                    <img src="{{ asset('assets/frontend/images/standardRooms/rooms-standart-land.webp') }}" alt="cornerview"/></a>
                <span>2 Adults + 2 Children / 3 Adults  ·  34 m²  ·  1 double bed  ·  1 single bed</span>
            </figure>
        </div>
        <a class="roomlink" href="{{ route('landview-rooms') }}">
            <div class="col-12 col-md-12 col-lg-6">
                <article>
                    <h5>Land View</h5>
                    <p>
                        Garden of paradise views. <br>Fresh air and luxury experience.
                    </p>
                    <span>
                        You feel everything luxury
                    </span>
                    <div class="moreButton">
                        <a href="{{ route('landview-rooms') }}">More About</a>
                    </div>
                </article>
            </div>
        </a>
        <img class="standardBird" src="{{ asset('assets/frontend/images/standardRooms/pigeon.svg') }}" alt="pigeon"/>
    </div>
</div>
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
                    <span>A luxurious holiday with your loved ones is waiting for you in Our Rooms, <br>designed in the comfort of your home</span>
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
                                <img src="{{ asset('assets/frontend/images/home/home-page-family-1.webp') }}" alt="familyRoom"/>
                            </figure>
                            <h4>Family Room</h4>
                            <span>4 Adults + 1  · 45 m²  ·  Side View</span>
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