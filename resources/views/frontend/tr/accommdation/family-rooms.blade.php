@extends('frontend.tr.layouts.master')

@section('title', 'AİLE ODASI - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-family-rooms') }}"
       aria-expanded="false">TR</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('family-rooms') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-family-rooms') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-family-rooms') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="roomDetail">
    <div class="familyRoomDetailHero">
        <h1>AİLE ODASI</h1>
    </div>

    <div class="roomDetailText">
        <div class="container">
            <span>Hayalinizdeki aile tatilinde, lüks otel odanızda dinlenirken çocuğunuzun da kendi özel alanını bulabileceği aile konseptli odalarımızda unutulmaz bir tatil sizi bekliyor.</span>
        </div>
    </div>
    <div class="container">
        <div class="roomDetailSpecs">
            <div class="roomSpecsInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opadult.svg') }}" alt="adult"/>
                <p>4 YETİŞKİN + 1 ÇOCUK</p>
            </div>
            <div class="roomSpecsInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opsinglebed.svg') }}" alt="singlebed"/>
                <p>2 TEKLİ YATAK</p>
            </div>
            <div class="roomSpecsInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opdoublebed.svg') }}" alt="doublebed"/>
                <p>1 ÇİFT KİŞİLİK YATAK</p>
            </div>
            <div class="roomSpecsInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opsquare.svg') }}" alt="meter"/>
                <p>45 m²</p>
            </div>
            <div class="roomSpecsInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opview.svg') }}" alt="view"/>
                <p>YANDAN DENİZ MANZARALI</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="roomDetailSpecsTablet">
            <div class="detailSpecLine">
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opadult.svg') }}" alt="adult"/>
                    <p>4 YETİŞKİN + 1</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opsinglebed.svg') }}" alt="singlebed"/>
                    <p>2 TEKLİ yatak</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opdoublebed.svg') }}" alt="doublebed"/>
                    <p>1 ÇİFT KİŞİLİK YATAK</p>
                </div>
            </div>
            <div class="detailSpecLineSecond">
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opsquare.svg') }}" alt="meter"/>
                    <p>45 m²</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opview.svg') }}" alt="view"/>
                    <p>YANDAN DENİZ MANZARALI</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="roomPhotos" id="lcl_elems_wrapper" title="Family Rooms">
            <div class="row">
                <div class="col-12 col-md-6 p-4">
                    <a href="{{ asset('assets/frontend/images/familyroom/rooms-family-room-1.webp') }}">
                    <img src="{{ asset('assets/frontend/images/familyroom/rooms-family-room-1.webp') }}" alt="familyroom1"/>
                    </a>
                </div>
                <div class="col-12 col-md-6 p-4">
                    <a href="{{ asset('assets/frontend/images/familyroom/rooms-family-room-2.webp') }}">
                        <img src="{{ asset('assets/frontend/images/familyroom/rooms-family-room-2.webp') }}" alt="familyroom2"/>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 p-4">
                    <a href="{{ asset('assets/frontend/images/familyroom/rooms-family-room-3.webp') }}">
                    <img src="{{ asset('assets/frontend/images/familyroom/rooms-family-room-3.webp') }}" alt="familyroom3"/>
                    </a>
                </div>
                <div class="col-12 col-md-6 p-4">
                    <a href="{{ asset('assets/frontend/images/familyroom/rooms-family-room-4.webp') }}">
                        <img src="{{ asset('assets/frontend/images/familyroom/rooms-family-room-4.webp') }}" alt="familyroom4"/>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 p-4">
                    <a href="{{ asset('assets/frontend/images/familyroom/rooms-family-room-5.webp') }}">
                        <img src="{{ asset('assets/frontend/images/familyroom/rooms-family-room-5.webp') }}" alt="familyroom5"/>
                    </a>
                </div>
                <div class="col-12 col-md-6 p-3">
                    <article>
                        <h6>Tüm aileniz için konfor</h6>
                        <p>Çeşitli özelliklere sahip geniş, lüks aile odaları, 21. yüzyıl standartlarında dekore edilmiştir. Lüks ana yatak odasından Akdeniz'in nefes kesen manzaralarını deneyimleyin.</p>
                        <span>Aile tatilinizin tadını çıkarın</span>
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
        <p>4 Adults + 1 · 1 double bed · 2 single beds<br>45 m² · Corner Sea View</p>
    </div>
</div>

<!-- Features -->
<div class="roomFeatures">
    <div class="roomFeaturesWrapper">
        <h6>Özellikler</h6>
        <div class="featureGrid">
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/balcony.svg') }}"/>
                <p>Balkon / Teras</p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/shower.svg') }}"/>
                <p>
                    Ayrı Duş & WC
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/airconditioner.svg') }}"/>
                <p>
                    Ayrılmış Klima Sistemi
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/coffeset.svg') }}"/>
                <p>
                    Sıcak İçecek Seti<br> (çay & kahve)
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/digitalsafe.svg') }}"/>
                <p>
                    Dijital Kasa
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
                    Havlu
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/dialphone.svg') }}"/>
                <p>
                    Doğrudan Erişimli Telefon
                </p>
            </div>
        </div>
        <div class="collapseSpecsWrapper collapse" id="collapseRoomSpecs">
            <div class=" featureGrid collapsableFeatureGrid" >
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/broadcast.svg') }}"/>
                <p>
                    Uydu Yayını
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
                    Masa & Sandalye
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/mirror.svg') }}"/>
                <p>
                    Makyaj Aynası
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/wifi.svg') }}"/>
                <p>
                    Ücretsiz Wi-Fi
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/flooring.svg') }}"/>
                <p>
                    Parke Zemin
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/dryer.svg') }}"/>
                <p>
                    Saç Kurutma Makinesi
                </p>
            </div>
            <div class="featureInfo">
                <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/slippers.svg') }}"/>
                <p>
                    Terlikler
                </p>
            </div>
        </div></div>
       
        <a class="moreButton showAllFeature" type="button"  data-bs-toggle="collapse" data-bs-target="#collapseRoomSpecs">Hepsini Göster</a>

    </div>
</div>
<!-- Features End -->
<!-- 360 View -->
<div class="room360View">
    <img src="{{ asset('assets/frontend/images/familyroom/familyRoom360Placeholder.webp') }}" alt="360view"/>
</div>
<!-- 360 View End -->
<!-- Contact -->
@include('frontend.tr.layouts.contact')
<!-- Contact End -->
<!-- Other Rooms -->
<div class="otherRoomsWrapper">
    <div class="otherRooms">
        <div class="row">
            <div class="col-12 col-md-12">
                <article>
                    <h3>Diğer Oda Seçenekleri</h3>
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
                            <img src="{{ asset('assets/frontend/images/home/home-page-king-1.webp') }}" alt="kingSuite"/>
                        </figure>
                        <h4>KING SÜİT</h4>
                        <span>5 Yetişkin + 1  ·  110 m²  ·  Deniz Manzaralı</span>
                        <p>Mucize deniz görüntüsü ve lüks sizi büyüleyecek.</p>
                        <div class="moreButton">
                            <a href="{{ route('tr-kingsuit-rooms') }}">Daha Fazlası</a>
                        </div></a>
                    </div>
                </div>
                <div class="other-room-wrapper" id="otherRoomSecond">
                    <div class="otherRoomImage">
                        <a class="roomlink" href="{{ route('tr-standard-rooms') }}">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/home/home-page-standart-sea-1.webp.webp') }}" alt="standardRoom"/>
                        </figure>
                        <h4>STANDART ODA</h4>
                        <span>2 Yetişkin + 2  ·  34 m²  ·  Deniz / Kara / Yandan Manzaralı</span>
                        <p>Çok fazla lüks unsurlar size unutulmaz bir tatil sağlıyor.</p>
                        <div class="moreButton">
                            <a href="{{ route('tr-standard-rooms') }}">Daha Fazlası</a>
                        </div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Other Rooms End -->

<div style="text-align: center" class="pageUpButton">
    <a href="#">
        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
    </a>
</div>


@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
<script type='text/javascript'>
      $(document).ready(function() {
          const $obj = lc_lightbox('#lcl_elems_wrapper a');
      });
</script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/roomDetail.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/css/accommdation.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/skins/light.css') }}"/>
@endsection