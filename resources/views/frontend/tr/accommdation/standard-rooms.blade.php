@extends('frontend.tr.layouts.master')

@section('title', 'Standart Odalar - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-standard-rooms') }}"
       aria-expanded="false">TR</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('standard-rooms') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-standard-rooms') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-standard-rooms') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="roomDetail">
    <div class="standardRoomDetailHero">
        <h1>STANDART ODALAR</h1>
    </div>
</div>
<div class="container">
    <div class="standardRoomSelect">
        <a href="{{ route('tr-sideview-rooms') }}">Yandan Deniz Manzaralı</a>
        <a href="{{ route('tr-seaview-rooms') }}">Deniz Manzaralı</a>
        <a href="{{ route('tr-landview-rooms') }}">Kara Manzaralı</a>
    </div>
</div>
<div class="container">
    <div class="row cornerViewRoom" id="cornerview">
        <div class="col-12 col-md-12 col-lg-6">
            <figure class="lc-side">
                <a href="{{ asset('assets/frontend/images/standardRooms/rooms-standart-side-2.webp') }}">
                    <img src="{{ asset('assets/frontend/images/standardRooms/rooms-standart-side-2.webp') }}" alt="cornerview"/></a>
                <span>2 Yetişkin + 2 Çocuk / 3 Yetişkin  ·  34 m²  <br>  1 Çift kişilik yatak  ·  1 Tekli yatak</span>
            </figure>
        </div>
        <a class="roomlink" href="{{ route('tr-sideview-rooms') }}">
            <div class="col-12 col-md-12 col-lg-6">
                <article>
                    <h5>Yandan Deniz Manzaralı</h5>
                    <p>Doğa manzarasını ve denizi ayrı düşünemiyorsanız yandan manzaralı odalar tam size göre.
                    </p>
                    <span>
                    Deniz ve doğa tatili tamamlar.
                </span>
                    <div class="moreButton">
                        <a href="{{ route('tr-sideview-rooms') }}">Daha Fazlası</a>
                    </div>
                </article>
            </div>
        </a>
        <img class="standardBird" src="{{ asset('assets/frontend/images/standardRooms/pigeon.svg') }}" alt="pigeon"/>

    </div>
    <div class="row seaView" id="seaview"><a class="roomlink" href="{{ route('tr-seaview-rooms') }}">
        <div class="col-12 col-md-12 col-lg-6">
            <article>
                <h5>Deniz Manzaralı</h5>
                <p>
                    Uyandığınızda kendinizi deniz ve kum manzarasının muhteşemliğinde bulmak, adeta bir rüyaya uyanıyormuşsunuz gibi hissettirecek.
                </p>
                <span>
                    Deniz ve kum modunuzu bir üst seviyeye taşıyacak
                    </span>
                <div class="moreButton">
                    <a href="{{ route('tr-seaview-rooms') }}">Daha Fazlası</a>
                </div>
            </article>
        </div>
    </a>
        <div class="col-12 col-md-12 col-lg-6">
            <figure class="lc-sea">
                <a href="{{ asset('assets/frontend/images/standardRooms/rooms-standart-sea-2.webp') }}">
                    <img src="{{ asset('assets/frontend/images/standardRooms/rooms-standart-sea-2.webp') }}" alt="seaview"/>
                </a>
                <span>2 Yetişkin + 2 Çocuk / 3 Yetişkin  ·  34 m²  <br>1 Çift kişilik yatak  ·  1 Tekli yatak</span>
            </figure>
        </div>

    </div>
    <div class="row cornerViewRoom" id="gardenview">
        <div class="col-12 col-md-12 col-lg-6">
            <figure class="lc-land">
                <a href="{{ asset('assets/frontend/images/standardRooms/rooms-standart-land.webp') }}">
                    <img src="{{ asset('assets/frontend/images/standardRooms/rooms-standart-land.webp') }}" alt="cornerview"/></a>
                <span>2 Yetişkin + 2 Çocuk / 3 Yetişkin  ·  34 m²  <br>  1 Çift kişilik yatak  ·  1 Çift kişilik yatak</span>
            </figure>
        </div>
        <a class="roomlink" href="{{ route('tr-landview-rooms') }}">
            <div class="col-12 col-md-12 col-lg-6">
                <article>
                    <h5>Kara Manzaralı</h5>
                    <p>
                        Cennet bahçesi manzarası,<br> Temiz hava ve lüks deneyim...
                    </p>
                    <span>
                        Her şeyi lüks hissedeceksiniz
                    </span>
                    <div class="moreButton">
                        <a href="{{ route('tr-landview-rooms') }}">Daha Fazlası</a>
                    </div>
                </article>
            </div>
        </a>
        <img class="standardBird" src="{{ asset('assets/frontend/images/standardRooms/pigeon.svg') }}" alt="pigeon"/>

    </div>
</div>
<!-- Contact -->
@include('frontend.tr.layouts.contact')
<!-- Contact End -->
<!-- Other Rooms -->
<div class="otherRoomsWrapper">
    <div class="otherRooms">
        <div class="row">
            <div class="col-12 col-md-12">
                <article>
                    <h3>Diğer Oda Seçeneklerimiz</h3>
                    <span>İhtiyaçlarınıza yönelik Port Nature odalarını bulabilirsiniz.</span>
                </article>
            </div>
        </div>
        <div class="roomsDetailBg">
            <div class="rooms-detail-wrapper">
                <div class="other-room-wrapper">
                    <div class="otherRoomImage firstRoom">
                        <a class="roomlink" href="{{ route('tr-kingsuit-rooms') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/home/kingSuite.webp') }}" alt="kingSuite"/>
                            </figure>
                            <h4>King SÜİT</h4>
                            <span>5 Yetişkin + 1  ·  110 m²  ·  Deniz Manzaralı</span>
                            <p>Mucize deniz görüntüsü ve lüks sizi büyüleyecek.</p>
                            <div class="moreButton">
                                <a href="{{ route('tr-kingsuit-rooms') }}">Daha Fazlası</a>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="other-room-wrapper" id="otherRoomSecond">
                    <div class="otherRoomImage">
                        <a class="roomlink" href="{{ route('tr-family-rooms') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/home/familyRoom.webp') }}" alt="familyRoom"/>
                            </figure>
                            <h4>AİLE ODASI</h4>
                            <span>4 Yetişkin + 1  ·  45 m²  ·  Yandan Manzaralı</span>
                            <p>Siz odanızda dinlenirken çocuklarınız kendilerine özel alan bulabilecekler.</p>
                            <div class="moreButton">
                                <a href="{{ route('tr-family-rooms') }}">Daha Fazlası</a>
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