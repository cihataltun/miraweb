@extends('frontend.tr.layouts.master')

@section('title', 'Konaklama - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-accommodation') }}"
       aria-expanded="false">TR</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('accommodation') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-accommodation') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-accommodation') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="accommdationHero">
    <h1>PORT NATURE ODALARININ BÜTÜN AVANTAJLARINI HİSSEDİN</h1>
</div>
    <div class="roomSelect">
        <a href="{{ route('tr-family-rooms') }}">Aile</a>
        <a href="{{ route('tr-kingsuit-rooms') }}">King Süit</a>
        <a href="{{ route('tr-standard-rooms') }}">Standart</a>
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
                <div class="swiper-pagination-family swiper-pagination" id="accomFamilyRoomPagination"></div>
                <div class="swiper-button-next">
                    <img style="width: 13px;height: 27px" class="accommdationSvg" src="{{ asset('assets/frontend/images/swiperwhite-right.svg') }}" alt="swiper"/>
                </div>
                <div class="swiper-button-prev">
                    <img style="width: 13px;height: 27px" class="accommdationSvg"
                         src="{{ asset('assets/frontend/images/swiperwhite-left.svg') }}" alt="swiper"/>
                </div>
            </div>
            <div class="moreButton mobileMore">
                <a href="{{ route('tr-family-rooms') }}">More About</a>
            </div>
        </div>
        <div class="roomDescWrapper" id="familyroom">
            <a class="roomlink" href="{{ route('tr-family-rooms') }}">
                <h5>AİLE ODALARI</h5>
                <p>Port Nature aile odaları, aileler için en iyi oda seçeneğidir. Aile odaları içinde bulunan çocuk odası sayesinde çocuklu aileler için en iyi çözümdür.  </p>
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
                        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/view.svg') }}"/>&nbsp;&nbsp;&nbsp; Yandan Deniz Manzaralı
                    </span>
                </div>
                <div class="moreButton DeskMore">
                    <a href="{{ route('tr-family-rooms') }}">Daha Fazlası</a>
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
                <a href="{{ route('tr-kingsuit-rooms') }}">More About</a>
            </div>
        </div>
        <div class="roomDescWrapper ">
            <a class="roomlink" href="{{ route('tr-kingsuit-rooms') }}">
                <h5>KING SÜİT</h5>
                <p>Bütün süitler Akdeniz manzarasına bakar. Süitler cömert alana, 3 yatak odasına, lüks tasarıma, lüks eşyalara ve lüks ayrıcalıklara sahiptir.</p>
                <div class="roomSpecWrapper">
                    <div class="roomSpecs">
                    <span>
                        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/doublebed.svg') }}" alt="doublebed"/> x&nbsp; 1
                    </span>
                        <span><img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/singlebed.svg') }}"/>x&nbsp; 2</span>
                        <span>110 &#13217;</span>
                    </div>
                    <span class="extraSpec"><img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/view.svg') }}"/>&nbsp;&nbsp;&nbsp; Sea View</span>
                </div>
                <div class="moreButton DeskMore">
                    <a href="{{ route('tr-kingsuit-rooms') }}">Daha Fazlası</a>
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
                <a href="{{ route('tr-standard-rooms') }}">Daha Fazlası</a>
            </div>
        </div>
        <div class="roomDescWrapper">
            <a class="roomlink" href="{{ route('tr-standard-rooms') }}">
                <h5>STANDART ODALAR</h5>
                <p>
                    Sakin deniz veya doğa manzaralı Standart Odalar, lüks donanıma ve lüks hizmetlere sahiptir.</p>
                <div class="roomSpecWrapper">
                    <div class="roomSpecs">
                <span>
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/doublebed.svg') }}" alt="doublebed"/> x&nbsp; 1
                </span>
                        <span><img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/singlebed.svg') }}"/> x 1</span>
                        <span>35 &#13217;</span>

                    </div>
                    <span class="extraSpec deskExtraStandard"><img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/view.svg') }}"/>&nbsp;&nbsp; Deniz / Kara / Yandan Manzaralı</span>
                </div>
                <div class="moreButton DeskMore">
                    <a href="{{ route('tr-standard-rooms') }}">Daha Fazlası</a>
                </div>
            </a>
           
        </div>
    </div>
</div>
<!-- Rooms End -->

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
<!-- Contact -->
@include('frontend.tr.layouts.contact')
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