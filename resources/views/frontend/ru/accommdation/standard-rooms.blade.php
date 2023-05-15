@extends('frontend.ru.layouts.master')

@section('title', 'Номера Стандарт - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-standard-rooms') }}"
       aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('standard-rooms') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-standard-rooms') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('de-standard-rooms') }}">DE</a></li>
    </ul>
</li>

@endsection


@section('content')

<div class="roomDetail">
    <div class="standardRoomDetailHero">
        <h1>Номера Стандарт</h1>
    </div>
</div>
<div class="container">
    <div class="standardRoomSelect">
        <a href="{{ route('ru-sideview-rooms') }}">Боковой вид на море</a>
        <a href="{{ route('ru-seaview-rooms') }}">Вид на море</a>
        <a href="{{ route('ru-landview-rooms') }}">Вид на окрестности</a>
    </div>
</div>
<div class="container">
    <div class="row cornerViewRoom" id="cornerview">
        <div class="col-12 col-md-12 col-lg-6">
            <figure class="lc-side">
                <a href="{{ asset('assets/frontend/images/standardRooms/rooms-standart-side-2.webp') }}">
                    <img src="{{ asset('assets/frontend/images/standardRooms/rooms-standart-side-2.webp') }}" alt="cornerview"/></a>
                <span>2 Взрослых + 2 Ребенка / 3 Взрослых  ·  34 m²  <br>  1 двусп. кровать  ·  1 односп. кровать</span>
            </figure>
        </div>
        <a class="roomlink" href="{{ route('ru-sideview-rooms') }}">
            <div class="col-12 col-md-12 col-lg-6">
                <article>
                    <h5>Боковой вид на море</h5>
                    <p>"Вы не забудете этот вид из вашего номера. 
                        Стандартные номера с боковым видом на море идеально подойдут для вас."</p>
                    <span>
                    Море и природа дополнят отдых
                </span>
                    <div class="moreButton">
                        <a href="{{ route('ru-sideview-rooms') }}">Подробнее</a>
                    </div>
                </article>
            </div>
        </a>
        <img class="standardBird" src="{{ asset('assets/frontend/images/standardRooms/pigeon.svg') }}" alt="pigeon"/>

    </div>
    <div class="row seaView" id="seaview"><a class="roomlink" href="{{ route('ru-seaview-rooms') }}">
        <div class="col-12 col-md-12 col-lg-6">
            <article>
                <h5>Вид на море</h5>
                <p>
                    Просыпайтесь каждое утро с панорамным видом на море в номере Стандарт.
                </p>
                <span>
                    Море и песок поднимут вам настроение
                    </span>
                <div class="moreButton">
                    <a href="{{ route('ru-seaview-rooms') }}">Подробнее</a>
                </div>
            </article>
        </div>
    </a>
        <div class="col-12 col-md-12 col-lg-6">
            <figure class="lc-sea">
                <a href="{{ asset('assets/frontend/images/standardRooms/rooms-standart-sea-2.webp') }}">
                    <img src="{{ asset('assets/frontend/images/standardRooms/rooms-standart-sea-2.webp') }}" alt="seaview"/>
                </a>
                <span>2 Взрослых + 2 Ребенка / 3 Взрослых  ·  34 m²  <br> 1 двусп. кровать  ·  1 односп. кровать</span>
            </figure>
        </div>

    </div>
    <div class="row cornerViewRoom" id="gardenview">
        <div class="col-12 col-md-12 col-lg-6">
            <figure class="lc-land">
                <a href="{{ asset('assets/frontend/images/standardRooms/rooms-standart-land.webp') }}">
                    <img src="{{ asset('assets/frontend/images/standardRooms/rooms-standart-land.webp') }}" alt="cornerview"/></a>
                <span>2 Взрослых + 2 Ребенка / 3 Взрослых  ·  34 m² <br>  1 двусп. кровать  ·  1 односп. кровать</span>
            </figure>
        </div>
        <a class="roomlink" href="{{ route('ru-landview-rooms') }}">
            <div class="col-12 col-md-12 col-lg-6">
                <article>
                    <h5>Вид на окрестности</h5>
                    <p>
                        Вид на райский сад.<br> Свежий воздух и роскошь.
                    </p>
                    <span>
                        Вы чувствуете всю роскошь
                    </span>
                    <div class="moreButton">
                        <a href="{{ route('ru-landview-rooms') }}">Подробнее</a>
                    </div>
                </article>
            </div>
        </a>
        <img class="standardBird" src="{{ asset('assets/frontend/images/standardRooms/pigeon.svg') }}" alt="pigeon"/>

    </div>
</div>
<!-- Contact -->
@include('frontend.ru.layouts.contact')
<!-- Contact End -->
<!-- Other Rooms -->
<div class="otherRoomsWrapper">
    <div class="otherRooms">
        <div class="row">
            <div class="col-12 col-md-12">
                <article>
                    <h3>Другие виды номеров</h3>
                    <span>Ознакомьтесь в другими номерами, которые Port Nature предлагает специально для вас.</span>
                </article>
            </div>
        </div>
        <div class="roomsDetailBg">
            <div class="rooms-detail-wrapper">
                <div class="other-room-wrapper">
                    <div class="otherRoomImage firstRoom">
                        <a class="roomlink" href="{{ route('ru-kingsuit-rooms') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/home/kingSuite.webp') }}" alt="kingSuite"/>
                            </figure>
                            <h4>King Suite</h4>
                            <span>5 Взрослых + 1  ·  110 m²  ·  Вид На Море</span>
                            <p>Роскошные, большие номера с чудесным видом на море.</p>
                            <div class="moreButton">
                                <a href="{{ route('ru-kingsuit-rooms') }}">More About</a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="other-room-wrapper" id="otherRoomSecond">
                    <div class="otherRoomImage">
                        <a class="roomlink" href="{{ route('ru-family-rooms') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/home/familyRoom.webp') }}" alt="familyRoom"/>
                            </figure>
                            <h4>Семейный</h4>
                            <span>4 Взрослых + 1  ·  34 m²  ·  Угловой Вид На Море</span>
                            <p>Две комнаты для личного пространства детей и родителей.</p>
                            <div class="moreButton">
                                <a href="{{ route('ru-family-rooms') }}">Подробнее</a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Other Rooms End -->
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