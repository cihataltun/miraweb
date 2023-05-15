@extends('frontend.ru.layouts.master')

@section('title', 'Номера - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-accommodation') }}"
       aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('accommodation') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-accommodation') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('de-accommodation') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="accommdationHero">
      <h1>Почувствуйте все преимущества номеров люкс в Port Nature</h1>
  </div>
      <div class="roomSelect">
          <a href="{{ route('ru-family-rooms') }}">Номер Семейный </a>
          <a href="{{ route('ru-kingsuit-rooms') }}">Номер King Suite</a>
          <a href="{{ route('ru-standard-rooms') }}">Номера Стандарт</a>
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
                  <a href="{{ route('ru-family-rooms') }}">Подробнее</a>
              </div>
          </div>
          <div class="roomDescWrapper" id="familyroom">
              <a class="roomlink" href="{{ route('ru-family-rooms') }}">
                  <h5>Семейный </h5>
                  <p>Семейные номера Port Nature - лучший выбор для семейного отдыха. Отдельные две комнаты в номере оптимальна для семьи с детьми.</p>
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
                      <span class="extraSpec"><img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/view.svg') }}"/>&nbsp;&nbsp;&nbsp; Угловой вид на море</span>
                  </div>
                  <div class="moreButton DeskMore">
                      <a href="{{ route('ru-family-rooms') }}">Подробнее</a>
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
                  <a href="{{ route('ru-kingsuit-rooms') }}">Подробнее</a>
              </div>
          </div>
          <div class="roomDescWrapper ">
              <a class="roomlink" href="{{ route('ru-kingsuit-rooms') }}">
                  <h5>King Suite</h5>
                  <p>Номер King Suite имеет просторную планировку, две спальни, панорамный вид на Средиземное море и роскошный дизайн.</p>
                  <div class="roomSpecWrapper">
                      <div class="roomSpecs">
                      <span>
                          <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/doublebed.svg') }}" alt="doublebed"/> x&nbsp; 1
                      </span>
                          <span><img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/singlebed.svg') }}"/>x&nbsp; 2</span>
                          <span>110 &#13217;</span>
                      </div>
                      <span class="extraSpec"><img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/view.svg') }}"/>&nbsp;&nbsp;&nbsp; Вид на море</span>
                  </div>
                  <div class="moreButton DeskMore">
                      <a href="{{ route('ru-kingsuit-rooms') }}">Подробнее</a>
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
                  <a href="{{ route('ru-standard-rooms') }}">Подробнее</a>
              </div>
          </div>
          <div class="roomDescWrapper">
              <a class="roomlink" href="{{ route('ru-standard-rooms') }}">
                  <h5>Стандарт</h5>
                  <p>Многие номера стандарт с тихим видом на море или природу оснащены удобной мебелью и многими преимуществами.</p>
                  <div class="roomSpecWrapper">
                      <div class="roomSpecs">
                  <span>
                      <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/doublebed.svg') }}" alt="doublebed"/> x&nbsp; 1
                  </span>
                          <span><img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/singlebed.svg') }}"/> x 1</span>
                          <span>35 &#13217;</span>
  
                      </div>
                      <span class="extraSpec deskExtraStandard"><img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/view.svg') }}"/>&nbsp;&nbsp; Боковой вид / Море / Окрестности</span>
                  </div>
                  <div class="moreButton DeskMore">
                      <a href="{{ route('ru-standard-rooms') }}">Подробнее</a>
                  </div>
              </a>
              
          </div>
      </div>
  </div>
  <!-- Rooms End -->
  
  <!-- Features -->
  <div class="roomFeatures">
      <div class="roomFeaturesWrapper">
          <h6>Особенности</h6>
          <div class="featureGrid">
              <div class="featureInfo">
                  <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/balcony.svg') }}"/>
                  <p>Балкон / Терраса</p>
              </div>
              <div class="featureInfo">
                  <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/shower.svg') }}"/>
                  <p>
                      Отдельный душ & туалет
                  </p>
              </div>
              <div class="featureInfo">
                  <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/airconditioner.svg') }}"/>
                  <p>
                      Кондиционер сплит-системы
                  </p>
              </div>
              <div class="featureInfo">
                  <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/coffeset.svg') }}"/>
                  <p>
                      Набор для чая и кофе
                  </p>
              </div>
              <div class="featureInfo">
                  <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/digitalsafe.svg') }}"/>
                  <p>
                      Цифровой сейф
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
                      Полотенце
                  </p>
              </div>
              <div class="featureInfo">
                  <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/dialphone.svg') }}"/>
                  <p>
                      Прямая линия
                  </p>
              </div>
          </div>
          <div class="collapseSpecsWrapper collapse" id="collapseRoomSpecs">
            <div class=" featureGrid collapsableFeatureGrid" >
              <div class="featureInfo">
                  <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/broadcast.svg') }}"/>
                  <p>
                      Спутниковое вещание
                  </p>
              </div>
              <div class="featureInfo">
                  <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/minibar.svg') }}"/>
                  <p>
                      Мини-бар
                  </p>
              </div>
              <div class="featureInfo">
                  <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/chair.svg') }}"/>
                  <p>
                      Стол & Стулья
                  </p>
              </div>
              <div class="featureInfo">
                  <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/mirror.svg') }}"/>
                  <p>
                      Зеркало для макияжа
                  </p>
              </div>
              <div class="featureInfo">
                  <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/wifi.svg') }}"/>
                  <p>
                      Бесплатный Wi-fi
                  </p>
              </div>
              <div class="featureInfo">
                  <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/flooring.svg') }}"/>
                  <p>
                      Паркетный пол
                  </p>
              </div>
              <div class="featureInfo">
                  <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/dryer.svg') }}"/>
                  <p>
                      Фен
                  </p>
              </div>
              <div class="featureInfo">
                  <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/slippers.svg') }}"/>
                  <p>
                      Тапочки
                  </p>
              </div>
          </div></div>
     
        
          <a class="moreButton showAllFeature" type="button"  data-bs-toggle="collapse" data-bs-target="#collapseRoomSpecs"> Показать все</a>

      </div>
  </div>
  <!-- Features End -->
  
<!-- Contact -->
@include('frontend.ru.layouts.contact')
<!-- Contact End -->

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