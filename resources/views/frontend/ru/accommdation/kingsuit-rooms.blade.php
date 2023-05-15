@extends('frontend.ru.layouts.master')

@section('title', 'King Suite - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-kingsuit-rooms') }}"
       aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('kingsuit-rooms') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-kingsuit-rooms') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('de-kingsuit-rooms') }}">DE</a></li>
    </ul>
</li>

@endsection


@section('content')

    <div class="roomDetail">
        <div class="kingSuiteDetailHero">
            <h1>Номер King Suite</h1>
        </div>

        <div class="roomDetailText">
            <div class="container">
                <span>Роскошные, большие номера с чудесным видом на море удивят вас.<br> Большой балкон, 3 отдельные комнаты, современный и качественный дизайн.</span>
            </div>
        </div>
        <div class="container">
            <div class="roomDetailSpecs">
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opadult.svg') }}"
                         alt="adult"/>
                    <p>5 Взрослых + 1 Ребенок</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opsinglebed.svg') }}"
                         alt="singlebed"/>
                    <p>2 односп. кровати</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opdoublebed.svg') }}"
                         alt="doublebed"/>
                    <p>1 двусп. кровать</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opsquare.svg') }}"
                         alt="meter"/>
                    <p>110 m²</p>
                </div>
                <div class="roomSpecsInfo">
                    <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opview.svg') }}"
                         alt="view"/>
                    <p>Вид на море</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="roomDetailSpecsTablet">
                <div class="detailSpecLine">
                    <div class="roomSpecsInfo">
                        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opadult.svg') }}"
                             alt="adult"/>
                        <p>5 Взрослых + 1</p>
                    </div>
                    <div class="roomSpecsInfo">
                        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opsinglebed.svg') }}"
                             alt="singlebed"/>
                        <p>2 односп. кровати</p>
                    </div>
                    <div class="roomSpecsInfo">
                        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opdoublebed.svg') }}"
                             alt="doublebed"/>
                        <p>1 двусп. кровать</p>
                    </div>
                </div>
                <div class="detailSpecLineSecond">
                    <div class="roomSpecsInfo">
                        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opsquare.svg') }}"
                             alt="meter"/>
                        <p>110 m²</p>
                    </div>
                    <div class="roomSpecsInfo">
                        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/familyroom/opview.svg') }}"
                             alt="view"/>
                        <p>Вид на море</p>
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
                            <h6>Роскошь и комфорт по-королевски</h6>
                            <p>Благодаря отдельной гостиной и большой спальне с террасой, элегантный номер King Suite с
                                тремя спальнями является одним из самых просторных номеров в отеле.</p>
                            <span>Наслаждайтесь каникулами</span>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="roomSketch">
            <img class="familyRoomSketch" src="{{ asset('assets/frontend/images/familyroom/familyRoomSketch.png') }}"
                 alt=""/>
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

    <!-- 360 View -->
    <div class="room360View">
        <img src="{{ asset('assets/frontend/images/kingSuite/kingSuite360Placeholder.webp') }}" alt="360view"/>
    </div>
    <!-- 360 View End -->
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
                            <a class="roomlink" href="{{ route('ru-family-rooms') }}">
                                <figure>
                                    <img src="{{ asset('assets/frontend/images/home/home-page-family-1.webp') }}"
                                         alt="familyroom"/>
                                </figure>
                                <h4>Семейный</h4>
                                <span>4 Взрослых +1 ·  45 m²  ·  Угловой Вид На Море</span>
                                <p>Две комнаты для личного пространства детей и родителей.</p>
                                <div class="moreButton">
                                    <a href="{{ route('ru-family-rooms') }}">More About</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="other-room-wrapper" id="otherRoomSecond">
                        <div class="otherRoomImage">
                            <a class="roomlink" href="{{ route('ru-standard-rooms') }}">
                                <figure>
                                    <img src="{{ asset('assets/frontend/images/home/home-page-standart-sea-1.webp') }}"
                                         alt="standardRoom"/>
                                </figure>
                                <h4>Стандарт</h4>
                                <span>2 Взрослых + 2 Ребенка  ·  34 m²  ·  Боковой вид / Море / Окрестности</span>
                                <p>Многие роскошные удобства для незабываемого отдыха.</p>
                                <div class="moreButton">
                                    <a href="{{ route('ru-standard-rooms') }}">Подробнее</a>
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