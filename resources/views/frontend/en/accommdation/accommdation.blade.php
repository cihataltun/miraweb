@extends('frontend.en.layouts.master')

@section('title', 'Rooms - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('accommodation') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item" href="{{ route('tr-accommodation') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-accommodation') }}">RU</a></li>
        <li><a class="dropdown-item first-item" href="{{ route('de-accommodation') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="accommdationHero">
    <h1>Feel every advantage of our Luxury rooms</h1>
</div>
    <div class="roomSelect">
        <a href="{{ route('family-rooms') }}">Family Room</a>
        <a href="{{ route('kingsuit-rooms') }}">King Suite Room</a>
        <a href="{{ route('standard-rooms') }}">Standart Room</a>
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
                    <svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 26L14 13.5L1 1" stroke="white" stroke-opacity="0.8" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="swiper-button-prev">
                    <img style="width: 13px;height: 27px" class="accommdationSvg"
                         src="{{ asset('assets/frontend/images/swiperwhite-left.svg') }}" alt="swiper"/>
                </div>
                <div class="swiper-pagination-family swiper-pagination"></div>
            </div>
            <div class="moreButton mobileMore">
                <a href="{{ route('family-rooms') }}">More About</a>
            </div>
        </div>
        <div class="roomDescWrapper" id="familyroom">
            <a class="roomlink" href="{{ route('family-rooms') }}">
                <h5>Family Room</h5>
                <p>Port Nature family rooms are the best choice for a family holiday. In family rooms, the child room located within is the best solution for families with children.</p>
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
                            <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/view.svg') }}"/>&nbsp;&nbsp;&nbsp; Side Sea View
                        </span>
                    </div>
                <div class="moreButton DeskMore">
                    <a href="{{ route('family-rooms') }}">More About</a>
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
                            <img src="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-1.webp') }}" alt="familyroom"/>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-2.webp') }}">
                            <img src="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-2.webp') }}" alt="familyroom"/>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-3.webp') }}">
                            <img src="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-3.webp') }}" alt="familyroom"/>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-4.webp') }}">
                            <img src="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-4.webp') }}" alt="familyroom"/>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-5.webp') }}">
                            <img src="{{ asset('assets/frontend/images/kingSuite/rooms-king-suite-5.webp') }}" alt="familyroom"/>
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
                <a href="{{ route('kingsuit-rooms') }}">More About</a>
            </div>
        </div>
        <div class="roomDescWrapper ">
            <a class="roomlink" href="{{ route('kingsuit-rooms') }}">
                <h5>King Suite</h5>
                <p>Each suite overlooks the Mediterranean view. The suite has generous space, two bedrooms, and a luxury
                    design with luxury equipment. </p>
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
                    <a href="{{ route('kingsuit-rooms') }}">More About</a>
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
                <a href="{{ route('standard-rooms') }}">More About</a>
            </div>
        </div>
        <div class="roomDescWrapper">
            <a class="roomlink" href="{{ route('standard-rooms') }}">
                <h5>Standard Room</h5>
                <p>Many with quiet sea or nature views, Standard Rooms have luxury equipment and luxury services.</p>
                <div class="roomSpecWrapper">
                  <div class="roomSpecs">
              <span>
                  <img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/doublebed.svg') }}" alt="doublebed"/> x&nbsp; 1
              </span>
                      <span><img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/singlebed.svg') }}"/> x 1</span>
                      <span>35 &#13217;</span>

                  </div>
                    <span class="extraSpec deskExtraStandard"><img class="accommdationSvg" src="{{ asset('assets/frontend/images/accommdation/view.svg') }}"/>&nbsp;&nbsp; Side Sea View / Sea View / Land View</span>
              </div>
                <div class="moreButton DeskMore">
                    <a href="{{ route('standard-rooms') }}">More About</a>
                </div>
            </a>
           
        </div>
    </div>
</div>
<!-- Rooms End -->

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
<!-- Contact -->
@include('frontend.en.layouts.contact')
<!-- Contact End -->
<!-- Page Up Button -->
<div style="text-align: center" class="pageUpButton">
    <a href="#">
        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
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