@extends('frontend.de.layouts.master')

@section('title', 'PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-homepage') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item" href="{{ route('homepage') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-homepage') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-homepage') }}">RU</a></li>
    </ul>
</li>

@endsection

@section('content')

<!-- Swiper Start -->
<div id="heroSwiperWrapper" >
    <div class="swiper-container heroTopSwiper">
        <div class="heroText">
            <h1>Willkommen Im</h1>
            <img class="heroLogo" src="{{ asset('assets/frontend/images/home/heroLogoBig.png') }}" alt="logo"/>
        </div>
        <div class="heroSocialMediaIcon">
                    <a href="https://www.youtube.com/user/portnaturehotel">
                        <img src="{{ asset('assets/frontend/images/youtubewhite.svg') }}" alt="portnatureyoutube"/>
                    </a>
                    <a href="https://www.facebook.com/portnature">
                        <img src="{{ asset('assets/frontend/images/facebookwhite.svg') }}" alt="facebook"/>
                    </a>
                    <a href="https://www.instagram.com/portnatureluxury/">
                        <img src="{{ asset('assets/frontend/images/instagramwhite.svg') }}" alt="instagram"/>
                    </a>
                    <a href="https://vk.com/publicportnature">
                        <img src="{{ asset('assets/frontend/images/vkwhite.svg') }}" alt="vk"/>
                    </a>
                    <a href="https://www.tripadvisor.com/Hotel_Review-g4833191-d6427728-Reviews-Port_Nature_Luxury_Resort_Hotel_Spa-Bogazkent_Serik_District_Turkish_Mediterranean_Co.html">
                        <img src="{{ asset('assets/frontend/images/tripadvisorwhite.svg') }}" alt="tripadvisor"/>
                    </a>
                </div>

        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('assets/frontend/images/home/carousel-1.webp') }}" class="d-block homeHeroSwiperImg " alt="..."
                srcset="{{ asset('assets/frontend/images/home/carousel-1.webp') }} 4000w,{{ asset('assets/frontend/images/home/carousel-1-3000.webp') }} 3000w,{{ asset('assets/frontend/images/home/carousel-1-1920.webp') }} 1920w,{{ asset('assets/frontend/images/home/carousel-1-834.webp') }} 834w,{{ asset('assets/frontend/images/home/carousel-1-600.webp') }} 600w "
                                sizes="((min-width: 1px) and (max-width:576px)) 600w,((min-width: 576px) and (max-width:834px)) 834w,((min-width: 834px) and (max-width:1920px)) 1920w, ((min-width: 1920px) and (max-width:2600px)) 3000w,(min-width:2600px) 4000w"
                />
                
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/frontend/images/home/carousel-2.webp') }}" class="d-block homeHeroSwiperImg " alt="..."
                srcset="{{ asset('assets/frontend/images/home/carousel-2.webp') }} 4000w,{{ asset('assets/frontend/images/home/carousel-2-3000.webp') }} 3000w,{{ asset('assets/frontend/images/home/carousel-2-1920.webp') }} 1920w,{{ asset('assets/frontend/images/home/carousel-2-834.webp') }} 834w,{{ asset('assets/frontend/images/home/carousel-2-600.webp') }} 600w "
                                sizes="((min-width: 1px) and (max-width:576px)) 600w,((min-width: 576px) and (max-width:834px)) 834w,((min-width: 834px) and (max-width:1920px)) 1920w, ((min-width: 1920px) and (max-width:2600px)) 3000w,(min-width:2600px) 4000w"
                />
                
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/frontend/images/home/carousel-3.webp') }}" class="d-block homeHeroSwiperImg " alt="..."
                srcset="{{ asset('assets/frontend/images/home/carousel-3.webp') }} 4000w,{{ asset('assets/frontend/images/home/carousel-3-3000.webp') }} 3000w,{{ asset('assets/frontend/images/home/carousel-3-1920.webp') }} 1920w,{{ asset('assets/frontend/images/home/carousel-3-834.webp') }} 834w,{{ asset('assets/frontend/images/home/carousel-3-600.webp') }} 600w "
                                sizes="((min-width: 1px) and (max-width:576px)) 600w,((min-width: 576px) and (max-width:834px)) 834w,((min-width: 834px) and (max-width:1920px)) 1920w, ((min-width: 1920px) and (max-width:2600px)) 3000w,(min-width:2600px) 4000w"
              loading="lazy"  />
                
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/frontend/images/home/carousel-4.webp') }}" class="d-block homeHeroSwiperImg " alt="..."
                srcset="{{ asset('assets/frontend/images/home/carousel-4.webp') }} 4000w,{{ asset('assets/frontend/images/home/carousel-4-3000.webp') }} 3000w,{{ asset('assets/frontend/images/home/carousel-4-1920.webp') }} 1920w,{{ asset('assets/frontend/images/home/carousel-4-834.webp') }} 834w,{{ asset('assets/frontend/images/home/carousel-4-600.webp') }} 600w "
                loading="lazy"         sizes="((min-width: 1px) and (max-width:576px)) 600w,((min-width: 576px) and (max-width:834px)) 834w,((min-width: 834px) and (max-width:1920px)) 1920w, ((min-width: 1920px) and (max-width:2600px)) 3000w,(min-width:2600px) 4000w"
                />
                
            </div>
        </div>
        <div class="swiper-button-prev heroSwiperPrev"><img src="{{ asset('assets/frontend/images/swipergray-left.svg') }}" alt="swiperleft"></div>
  <div class="swiper-button-next heroSwiperNext"><img src="{{ asset('assets/frontend/images/swipergray-right.svg') }}" alt="swiperright"></div>


    </div>
    
</div>
<!-- Swiper Finish -->
<!-- Rezervation Section -->
<!-- Booking Section -->
<div class="booking">
    <label for="checkin"></label><input id="checkin"
                                        data-defaultDate="today"
                                        value="Check-in">
    <label for="checkout"></label><input id="checkout"
                                         data-defaultDate="today"
                                         value="Check Out">
    <div class="guestDiv"><span class="guests">Gäste</span>
    <div class="guestMenu">
        <div class="adultCounter dropdown-item">
            <p>Erwachsene</p>
            <div class="counter-item">
                <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="decrement" onclick="adultDecrement()" alt="decrement"/>
                <p id="adultCount"></p>
                <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="increment" onclick="adultIncrement()" alt="increment"/>
            </div>
        </div>
        <div class="childCounter dropdown-item">
            <p>Kind(er)</p>
            <div class="counter-item">
                <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="decrement" onclick="childDecrement()" alt="decrement"/>
                <p id="childCount"></p>
                <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="increment" onclick="childIncrement()" alt="increment"/>
            </div>
        </div>
        <div class="childAgeCounter1 childAgeCounter dropdown-item">
            <p>Kind 1 Alter</p>
            <div class="counter-item">
                <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="decrement" onclick="childAge1Decrement()" alt="decrement"/>
                <p id="childAge1Count">0</p>
                <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="increment" onclick="childAge1Increment()" alt="increment"/>
            </div>
        </div>
        <div class="childAgeCounter2  childAgeCounter dropdown-item">
            <p>Kind 2 Alter</p>
            <div class="counter-item">
                <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="decrement" onclick="childAge2Decrement()" alt="decrement"/>
                <p id="childAge2Count">0</p>
                <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="increment" onclick="childAge2Increment()" alt="increment"/>
            </div>
        </div>
        <div class="childAgeCounter3  childAgeCounter dropdown-item">
            <p>Kind 3 Alter</p>
            <div class="counter-item">
                <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="decrement" onclick="childAge3Decrement()" alt="decrement"/>
                <p id="childAge3Count">0</p>
                <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="increment" onclick="childAge3Increment()" alt="increment"/>
            </div>
        </div>
    </div></div>
    <a href="https://portnature.rezervasyonal.com/?currency=TRY" class="bookNow">Büchen Sie</a>
</div>
<!-- Booking Section End -->
<!-- Rezervation Section End -->

<!-- Home Icons -->
    <div class="homeIcons">
        <div class="homeIconContainer">
            <div class="homeIconWrapper">
                <div class="iconGroup">
                    <img src="{{ asset('assets/frontend/images/home/homelocation.svg') }}" alt="location">
                    <span>BELEK &#8226; ANTALYA</span>
                </div>
            </div>
            <div class="homeIconWrapper">
                <div class="iconGroup">
                    <img src="{{ asset('assets/frontend/images/home/aquapark.svg') }}" alt="aquapark"/>
                    <span>AQUAPARK</span>
                </div>
            </div>
            <div class="homeIconWrapper">
                <div class="iconGroup">
                    <img src="{{ asset('assets/frontend/images/home/concerts.svg') }}" alt="concerts">
                    <span>KONZERTE</span>
                </div>
            </div>
            <div class="homeIconWrapper">
                <div class="iconGroup">
                    <img src="{{ asset('assets/frontend/images/home/beach.svg') }}" alt="beach">
                    <span>SANDSTRAND</span>
                </div>
            </div>
            <div class="homeIconWrapper">
                <div class="iconGroup">
                    <img src="{{ asset('assets/frontend/images/home/entertainment.svg') }}" alt="entertainment"/>
                    <span>UNTERHALTUNG</span>
                </div>
            </div>

        </div>

    <!-- Home Icons End -->
    <div class="thinLine"></div>
</div>
<!-- Inclusive Area Text -->

<div class="inclusiveArea">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Port Nature Luxury Resort Hotel & Spa</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <span>Erleben Sie den Luxus jenseits</span>
            </div>
        </div>

        <div class="inclusiveText">
            <p>148 Sorten Premium-Alkohol sprengen die Grenzen der All-Inclusive-Leistungen. Sie finden fast alle Premium-Alkoholmarken.</p>

            <p>Außerdem können Sie Ihren Davidoff-Kaffee schlürfen, die Konzerte der berühmtesten Künstler ansehen und Zeit mit Ihrer Familie verbringen.</p>
        </div>
    </div>
    <div class="homeTextCard">
        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-md-12 starNumber">
                        5
                        <img src="{{ asset('assets/frontend/images/home/inclusiveStar.svg') }}" alt="star"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <article>
                            <h3>Premium A'la Carte All Inclusive</h3>
                            <p>Unser 5-Sterne-Premium-Luxushotel verfügt über Restaurants vor Ort, die jeweils eine Vielzahl köstlicher Speisen von renommierten Köchen servieren. Familie mit Kind, exklusive Konzepte. Schwimmbäder, Saunen, Gesundheitsclubs und sogar Live-Musikdarbietungen und kulturelle Aktivitäten werden den Gästen eines 5-Sterne-Hotels geboten.</p>
                        </article>

                    </div>
                </div>
            </div>
            <div class="col-lg-8">

                <!-- Slider main container -->
                <div class="swiper inclusiveSlider">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide"><img
                                srcset="{{ asset('assets/frontend/images/home/inclusiveSlider-1-640.webp') }} 640w,{{ asset('assets/frontend/images/home/inclusiveSlider-1-834.webp') }} 834w "
                                sizes="((min-width: 1px) and (max-width:576px)) 640w,((min-width: 577px) and (max-width:834px)) 834w,((min-width: 835px) and (max-width:1919px)) 640w, (min-width:1920px) 640w"
                                src="{{ asset('assets/frontend/images/home/inclusiveSlider-1.webp') }}" alt="" loading="lazy" /></div>
                        <div class="swiper-slide"><img
                                srcset="{{ asset('assets/frontend/images/home/inclusiveSlider-2-640.webp') }} 640w,{{ asset('assets/frontend/images/home/inclusiveSlider-2-834.webp') }} 834w "
                                sizes="((min-width: 1px) and (max-width:576px)) 640w,((min-width: 577px) and (max-width:834px)) 834w,((min-width: 835px) and (max-width:1919px)) 640w, (min-width:1920px) 640w"
                                src="{{ asset('assets/frontend/images/home/inclusiveSlider-2.webp') }}" alt="" loading="lazy" /></div>
                        <div class="swiper-slide"><img
                                srcset="{{ asset('assets/frontend/images/home/inclusiveSlider-3-640.webp') }} 640w,{{ asset('assets/frontend/images/home/inclusiveSlider-3-834.webp') }} 834w "
                                sizes="((min-width: 1px) and (max-width:576px)) 640w,((min-width: 577px) and (max-width:834px)) 834w,((min-width: 835px) and (max-width:1919px)) 640w, (min-width:1920px) 640w"
                                src="{{ asset('assets/frontend/images/home/inclusiveSlider-3.webp') }}" alt="" loading="lazy" /></div>
                        <div class="swiper-slide"><img
                                srcset="{{ asset('assets/frontend/images/home/inclusiveSlider-4-640.webp') }} 640w,{{ asset('assets/frontend/images/home/inclusiveSlider-4-834.webp') }} 834w "
                                sizes="((min-width: 1px) and (max-width:576px)) 640w,((min-width: 577px) and (max-width:834px)) 834w,((min-width: 835px) and (max-width:1919px)) 640w, (min-width:1920px) 640w"
                                src="{{ asset('assets/frontend/images/home/inclusiveSlider-4.webp') }}" alt="" loading="lazy" /></div>
                        <div class="swiper-slide"><img
                                srcset="{{ asset('assets/frontend/images/home/inclusiveSlider-5-640.webp') }} 640w,{{ asset('assets/frontend/images/home/inclusiveSlider-5-834.webp') }} 834w"
                                sizes="((min-width: 1px) and (max-width:576px)) 640w,((min-width: 577px) and (max-width:834px)) 834w,((min-width: 835px) and (max-width:1919px)) 640w, (min-width:1920px) 640w"
                                src="{{ asset('assets/frontend/images/home/inclusiveSlider-5.webp') }}" alt="" loading="lazy" /></div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination-horizontal"></div>
                
                
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Inclusive Area Text End -->
<!-- Concerts -->
<div class="concertsWrapper">
    <h2 class="concertsHeader">KONZERTE</h2>
    <div class="swiper homeConcertSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <figure>
                    <video  width="300" loop autoplay muted controls playsinline>
                        <source src="{{ asset('assets/frontend/video/artik.mp4') }}" type="video/mp4">
                    </video>
                </figure>
            </div>
            <div class="swiper-slide">
                <figure>
                    <video  width="300" loop autoplay muted controls playsinline>
                        <source src="{{ asset('assets/frontend/video/jah.mp4') }}" type="video/mp4">
                    </video>
                </figure>
            </div>
            <div class="swiper-slide">
                <figure>
                    <video  width="300" loop autoplay muted controls playsinline>
                        <source src="{{ asset('assets/frontend/video/jony.mp4') }}" type="video/mp4">
                    </video>
                </figure>
            </div>
            <div class="swiper-slide">
                <figure>
                    <video  width="300" loop autoplay muted controls playsinline>
                        <source src="{{ asset('assets/frontend/video/arthur.mp4') }}" type="video/mp4">
                    </video>
                </figure>
            </div>
            <div class="swiper-slide">
                <figure>
                    <video  width="300" loop autoplay muted controls playsinline>
                        <source src="{{ asset('assets/frontend/video/ani.mp4') }}" type="video/mp4">
                    </video>
                </figure>
            </div>
            <div class="swiper-slide">
                <figure>
                    <video  width="300" loop autoplay muted controls playsinline>
                        <source src="{{ asset('assets/frontend/video/leonid.mp4') }}" type="video/mp4">
                    </video>
                </figure>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev">
            <img class="specialSvg" src="{{ asset('assets/frontend/images/swipergray-left.svg') }}" alt="swiper"/>

        </div>
        <div class="swiper-button-next">
            <img class="specialSvg" src="{{ asset('assets/frontend/images/swipergray-right.svg') }}" alt="swiper"/>

        </div>
    </div>
</div>
<!-- Concerts End -->
<!-- VIDEO SCRIPT PARTS -->

<!-- Accommdation -->
<div class="homeAccommdation">
    <div class="homeAccommodationWrapper">
        <article>
            <h2>ZIMMER</h2>
            <h6>Zimmer in Kontakt mit der Natur sind ein Schlüssel für Entspannung und einen komfortablen Urlaub.<br> Unser Zimmer bereichert Ihr Urlaubserlebnis.</h6>
        </article>
        <div class="swiper Roomswiper">
            <div class="swiper-wrapper" style="padding-bottom: 200px">
                <div class="swiper-slide">
                    <a class="toRoom" href="{{ route('de-family-rooms') }}">
                        <div class="otherImage">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/home/home-page-family-1.webp') }}" alt="familyRoom" loading="lazy"/>
                            </figure>
                            <h3>FAMILIENZIMMER</h3>
                            <span>4 ERWACHSENE + 1 KIND ·  45 m²  ·  Mit seitlichem Meerblick</span>
                            <p>Ihre Kinder finden ihren eigenen Rückzugsort, während Sie sich im Nebenzimmer entspannen.</p>
                            <div class="homeAccommdationmoreButton">
                                <a href="{{ route('de-family-rooms') }}">Mehr Uber</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="toRoom" href="{{ route('de-kingsuit-rooms') }}">
                        <div class="otherImage">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/home/home-page-king-1.webp') }}" alt="kingSuite" loading="lazy"/>
                            </figure>
                            <h3>King Suite</h3>
                            <span>5 ERWACHSENE + 1 KIND  ·  110 m²  ·  Meerblick</span>
                            <p>Wunderbarer Meerblick und luxuriöse, große Zimmer werden Sie faszinieren.</p>
                            <div class="homeAccommdationmoreButton">
                                <a href="{{ route('de-kingsuit-rooms') }}">Mehr Uber</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="toRoom" href="{{ route('de-standard-rooms') }}">
                        <div class="otherImage">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/home/home-page-standart-sea-1.webp') }}" alt="standardRoom" loading="lazy"/>
                            </figure>
                            <h3>STANDARDZIMMER</h3>
                            <span>2 ERWACHSENE + 2 KINDER ·  34 m²  ·  Mit seitlichem Meer-/Meer-/Landblick</span>
                            <p>Viele der luxuriösen Ausstattungsmerkmale sorgen für einen unvergesslichen Urlaub.</p>
                            <div class="homeAccommdationmoreButton">
                                <a href="{{ route('de-standard-rooms') }}">Mehr Uber</a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
  
            <div class="swiper-button-next">
                <img src="{{ asset('assets/frontend/images/swipergray-right.svg') }}" alt="swiper-right"/>
            </div>
        </div>
    </div>
</div>

<!-- Accomdation End -->
<!-- Children Menu -->
<div class="children">
    <div class="childrenContainer">
        <div class="row">
            <div class="col-md-12">
                <h2>KINDER</h2>
            </div>
        </div>

        <div class="subChildren">
            <div class="childrenIcons">
                <img src="{{ asset('assets/frontend/images/home/childrencam.svg') }}" alt="children"/>
                <span class="subChildrenText">Auf dem Fernseher in Ihrem Zimmer können Sie sehen, was Ihr Kind macht</span></div>
            <div class="childrenIcons">
                <img src="{{ asset('assets/frontend/images/home/childrenage.svg') }}" alt="children"/>
                <span class="subChildrenText">Aktivitäten für Kinder jeden Alters</span></div>
            <div class="childrenIcons">
                <img src="{{ asset('assets/frontend/images/home/childrenbabysit.svg') }}" alt="children"/>
                <span class="subChildrenText">Ihr Kind wählt selbst mit unserem Kinder-Exklusiv-Menü</span></div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="childrenSwiper">
                <div class="swiper childrenSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a class="childrenSliderLink" href="{{ asset('assets/frontend/images/home/children-slider-1.webp') }}">
                                <img src="{{ asset('assets/frontend/images/home/children-slider-1.webp') }}"
                                srcset="{{ asset('assets/frontend/images/home/children-slider-1-656.webp') }} 656w"
                                sizes="((min-width: 1px) and (max-width:1920px)) 656w"

                                     alt="childrenslider" loading="lazy"/></a>
                        </div>
                        <div class="swiper-slide lc-children">
                            <a class="childrenSliderLink" href="{{ asset('assets/frontend/images/home/children-slider-2.webp') }}">
                                <img src="{{ asset('assets/frontend/images/home/children-slider-2.webp') }}"
                                                                srcset="{{ asset('assets/frontend/images/home/children-slider-2-656.webp') }} 656w"
                                sizes="((min-width: 1px) and (max-width:1920px)) 656w"

                                     alt="childrenslider" loading="lazy"/></a>
                        </div>
                        <div class="swiper-slide lc-children"><a class="childrenSliderLink"
                                href="{{ asset('assets/frontend/images/home/children-slider-3.webp') }}">
                            <img src="{{ asset('assets/frontend/images/home/children-slider-3.webp') }}"
                                                            srcset="{{ asset('assets/frontend/images/home/children-slider-3-656.webp') }} 656w"
                                sizes="((min-width: 1px) and (max-width:1920px)) 656w"

                                 alt="childrenslider" loading="lazy"/></a>
                        </div>
                        <div class="swiper-slide lc-children"><a class="childrenSliderLink"
                                href="{{ asset('assets/frontend/images/home/children-slider-4.webp') }}">
                            <img src="{{ asset('assets/frontend/images/home/children-slider-4.webp') }}"
                                                            srcset="{{ asset('assets/frontend/images/home/children-slider-4-656.webp') }} 656w"
                                sizes="((min-width: 1px) and (max-width:1920px)) 656w"

                                 alt="childrenslider" loading="lazy"/></a>
                        </div>
                        <div class="swiper-slide lc-children"><a class="childrenSliderLink"
                                href="{{ asset('assets/frontend/images/home/children-slider-5.webp') }}">
                            <img src="{{ asset('assets/frontend/images/home/children-slider-5.webp') }}"
                                                            srcset="{{ asset('assets/frontend/images/home/children-slider-5-656.webp') }} 656w"
                                sizes="((min-width: 1px) and (max-width:1920px)) 656w"

                                 alt="childrenslider" loading="lazy"/></a>
                        </div>
                        <div class="swiper-slide lc-children"><a class="childrenSliderLink"
                                href="{{ asset('assets/frontend/images/home/children-slider-6.webp') }}">
                            <img src="{{ asset('assets/frontend/images/home/children-slider-6.webp') }}"
                                                            srcset="{{ asset('assets/frontend/images/home/children-slider-6-656.webp') }} 656w"
                                sizes="((min-width: 1px) and (max-width:1920px)) 656w"

                                 alt="childrenslider" loading="lazy"/></a>
                        </div>
                        <div class="swiper-slide lc-children"><a class="childrenSliderLink"
                                href="{{ asset('assets/frontend/images/home/children-slider-7.webp') }}">
                            <img src="{{ asset('assets/frontend/images/home/children-slider-7.webp') }}"
                                                            srcset="{{ asset('assets/frontend/images/home/children-slider-7-656.webp') }} 656w"
                                sizes="((min-width: 1px) and (max-width:1920px)) 656w"

                                 alt="childrenslider" loading="lazy"/></a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev inclusive-prev">
                        <img src="{{ asset('assets/frontend/images/swipergray-left.svg') }}" alt="swiperleft"/>
                    </div>
                    <div class="swiper-button-next inclusive-next">
                        <img src="{{ asset('assets/frontend/images/swipergray-right.svg') }}" alt="swiperright"/>
                    </div>
                </div>
            </div>
        </div>
    </div><div class="moreButton">
     <a href="{{ route('de-kids-concepts') }}">Mehr Uber</a>
</div>
</div>
<!-- Children Menu End -->
<!-- Banner -->
<div class="homeBanner">
    <img loading="lazy" src="{{ asset('assets/frontend/images/home/homeBanner.webp') }}"/>
    <h3>Wir haben ein unglaubliches Stranderlebnis mit Beleks<br> einzigartiger natürlicher Schönheit für Erwachsene und Kinder geschaffen.</h3>
    <div class="moreButton">
        <a href="{{ route('de-activity') }}">Mehr Uber</a>
    </div>
</div>
<!-- Banner End -->
<!-- Contact -->
@include('frontend.de.layouts.contact')
<!-- Contact End -->
<!-- Gastronomy Start -->
<div class="homeGastronomy">
    <div class="homeGastronomyWrapper">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>
                    <img src="{{ asset('assets/frontend/images/home/7.svg') }}" alt="seven">
                    unserer Premium À-la-carte-Restaurants
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h6>Die besten Küchen verschiedener Länder!</h6>
            </div>
        </div>
   <div class="gastroIconsWrapper">
                <!-- Slides -->
                    <div class="gastroIcons">
                        <img style="width: unset" src="{{ asset('assets/frontend/images/home/quality.svg') }}" alt="quality">
                        <div class="gastroText">
                            <span>Top Qualität</span>
                            <p class="gastroP">Sorgfältig ausgewählte Zutaten für besondere Speisen</p>
                        </div>
                </div>
                    <div class="gastroIcons">
                        <img style="width: unset" src="{{ asset('assets/frontend/images/home/drink.svg') }}" alt="drinks">
                        <div class="gastroText">
                            <span>Unbegrenzt</span>
                            <p class="gastroP">Sie werden den Luxus mit 148 verschiedenen Blue-Ribbon-Getränke spüren.
                            </p>
                        </div>
                </div>
                    <div class="gastroIcons">
                        <img style="width: unset" src="{{ asset('assets/frontend/images/home/free.svg') }}" alt="free">
                        <div class="gastroText">
                            <span>Innerhalb der Arbeitszeit</span>
                            <p class="gastroP">Eintritt ohne Reservierung zu allen Geschäftszeiten</p>
                        </div>

        </div></div>
    </div>
    <div class="gastroSlideBg">
        <img src="{{ asset('assets/frontend/images/home/gastroSlider-bg.webp') }}" alt="gastrobg"/>
    </div>

    <div class="gastronomySlider">
        <div class="swiper gastronomySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="gastroSlide">
                        <figure>
                            <img loading="lazy"  class="gastroImg" src="{{ asset('assets/frontend/images/home/gastroSlider-1.webp') }}" alt="FAR EAST A'LA CARTE"/>
                        </figure>
                        <article>
                            <span>FAR EAST A'LA CARTE</span>
                            <div class="gastroTextSec">
                                <p>
                                    <img class="gastroIconSmall gastroIcon1" src="{{ asset('assets/frontend/images/home/clock.svg') }}" alt="clock"/>
                                    Zu jeder Arbeitszeit
                                </p>
                                <p>
                                    <img class="gastroIconSmall gastroIcon2" src="{{ asset('assets/frontend/images/home/booking.svg') }}" alt="bookingresturant">
                                    Ohne Buchung
                                </p>
                            </div>
                            <div class="homeGastroMoreButton">
                                <a href="{{ route('de-fareast') }}">Mehr Uber</a>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gastroSlide">
                        <figure>
                            <img loading="lazy"  class="gastroImg" src="{{ asset('assets/frontend/images/home/gastroSlider-2.webp') }}" alt="alldaydiningrestaurant"/>
                        </figure>

                        <article>
                            <span>ALL DAY DINING A'LA CARTE</span>
                            <div class="gastroTextSec">
                                <p>
                                    <img class="gastroIconSmall gastroIcon1" src="{{ asset('assets/frontend/images/home/clock.svg') }}" alt="clock"/>
                                    Zu jeder Arbeitszeit
                                </p>
                                <p>
                                    <img class="gastroIconSmall gastroIcon2" src="{{ asset('assets/frontend/images/home/booking.svg') }}" alt="bookingresturant">
                                    Ohne Buchung
                                </p>
                            </div>
                            <div class="homeGastroMoreButton">
                                <a href="{{ route('de-alldaydinning') }}">Mehr Uber</a>
                            </div>
                        </article>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gastroSlide">
                        <figure>
                            <img loading="lazy"  class="gastroImg" src="{{ asset('assets/frontend/images/home/gastroSlider-4.webp') }}" alt="frenchrest"/>
                        </figure>

                        <article>
                            <span>FRENCH A'LA CARTE</span>
                            <div class="gastroTextSec">
                                <p>
                                    <img class="gastroIconSmall gastroIcon1" src="{{ asset('assets/frontend/images/home/clock.svg') }}" alt="clock"/>
                                    Zu jeder Arbeitszeit
                                </p>
                                <p>
                                    <img class="gastroIconSmall gastroIcon2" src="{{ asset('assets/frontend/images/home/booking.svg') }}" alt="bookingresturant">
                                    Ohne Buchung
                                </p>
                            </div>
                            <div class="homeGastroMoreButton">
                                <a href="{{ route('de-french') }}">Mehr Uber</a>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gastroSlide">
                        <figure>
                            <img loading="lazy"  class="gastroImg" src="{{ asset('assets/frontend/images/home/gastroSlider-5.webp') }}" alt="seasiderestaurant"/>
                        </figure>

                        <article>
                            <span>SEASIDE A'LA CARTE</span>
                            <div class="gastroTextSec">
                                <p>
                                    <img class="gastroIconSmall gastroIcon1" src="{{ asset('assets/frontend/images/home/clock.svg') }}" alt="clock"/>
                                    Zu jeder Arbeitszeit
                                </p>
                                <p>
                                    <img class="gastroIconSmall gastroIcon2" src="{{ asset('assets/frontend/images/home/booking.svg') }}" alt="bookingresturant">
                                    Ohne Buchung
                                </p>
                            </div>
                            <div class="homeGastroMoreButton">
                                <a href="{{ route('de-seaside') }}">Mehr Uber</a>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gastroSlide">
                        <figure>
                            <img loading="lazy"  class="gastroImg" src="{{ asset('assets/frontend/images/home/gastroSlider-6.webp') }}" alt="italianrest"/>
                        </figure>
                        <article>
                            <span>ITALIAN A'LA CARTE</span>
                            <div class="gastroTextSec">
                                <p>
                                    <img class="gastroIconSmall gastroIcon1" src="{{ asset('assets/frontend/images/home/clock.svg') }}" alt="clock"/>
                                    Zu jeder Arbeitszeit
                                </p>
                                <p>
                                    <img class="gastroIconSmall gastroIcon2" src="{{ asset('assets/frontend/images/home/booking.svg') }}" alt="bookingresturant">
                                    Ohne Buchung
                                </p>
                            </div>
                            <div class="homeGastroMoreButton">
                                <a href="{{ route('de-italian') }}">Mehr Uber</a>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gastroSlide">
                        <figure>
                            <img loading="lazy"  class="gastroImg" src="{{ asset('assets/frontend/images/home/gastroSlider-8.webp') }}" alt="miniclubrest"/>
                        </figure>
                        <article>
                            <span>MINI CLUB A'LA CARTE</span>
                            <div class="gastroTextSec">
                                <p>
                                    <img class="gastroIconSmall gastroIcon1" src="{{ asset('assets/frontend/images/home/clock.svg') }}" alt="clock"/>
                                    Zu jeder Arbeitszeit
                                </p>
                                <p>
                                    <img class="gastroIconSmall gastroIcon2" src="{{ asset('assets/frontend/images/home/booking.svg') }}" alt="bookingresturant">
                                    Ohne Buchung
                                </p>
                            </div>
                            <div class="homeGastroMoreButton">
                                <a href="{{ route('de-mini-club-alacarte') }}">Mehr Uber</a>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gastroSlide">
                        <figure>
                            <img loading="lazy"  class="gastroImg" src="{{ asset('assets/frontend/images/home/gastroSlider-9.webp') }}" alt="sushibar"/>
                        </figure>
                        <article>
                            <span>SUSHI BAR A'LA CARTE</span>
                            <div class="gastroTextSec">
                                <p>
                                    <img class="gastroIconSmall gastroIcon1" src="{{ asset('assets/frontend/images/home/clock.svg') }}" alt="clock"/>
                                    Zu jeder Arbeitszeit
                                </p>
                                <p>
                                    <img class="gastroIconSmall gastroIcon2" src="{{ asset('assets/frontend/images/home/booking.svg') }}" alt="bookingresturant">
                                    Ohne Buchung
                                </p>
                            </div>
                            <div class="homeGastroMoreButton">
                                <a href="{{ route('de-sushi-bar') }}">Mehr Uber</a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev">
                <svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 26L1 13.5L14 1" stroke="#FFFFFF" stroke-opacity="0.8" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

            </div>
            <div class="swiper-button-next">
                <svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 26L14 13.5L1 1" stroke="#FFFFFF" stroke-opacity="0.8" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

            </div>
        </div>
    </div>
</div>
<!-- Gastronomy End -->
<!-- Drink Brand -->
<div class="homeBrand">
    <div class="swiper homeBrandSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                    <img src="{{ asset('assets/frontend/images/home/hennesy.png') }}" alt="brand"/>
            </div>
            <div class="swiper-slide">
                    <img src="{{ asset('assets/frontend/images/home/davidoff.png') }}" alt="brand"/>
            </div>
            <div class="swiper-slide">
                    <img src="{{ asset('assets/frontend/images/home/nespresso.png') }}" alt="brand"/>
            </div>
            <div class="swiper-slide">
                    <img src="{{ asset('assets/frontend/images/home/chivas.png') }}" alt="brand"/>
            </div>
            <div class="swiper-slide">
                    <img src="{{ asset('assets/frontend/images/home/kitkat.png') }}" alt="brand"/>
            </div>
        </div>
    </div>
</div>
<!-- Drink Brand End -->

<!-- Special Offer -->
<div class="homeSpecialOffer">
    <h6>Sonderangebote</h6>
    <div class="swiper specialOfferSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <figure>
                    <img loading="lazy"  src="{{ asset('assets/frontend/images/home/specialOfferSlider-1.webp') }}" alt="vip"/>
                </figure>
                <div class="backgroundLines">
                    <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                </div>
                <article>
                    <img class="specialSvg" src="{{ asset('assets/frontend/images/home/vip.svg') }}" alt="vip">
                    <p>Werden Sie VIP-Kunde</p>
                    <span>VIP-Privileg in Ihrem Urlaub</span>
                </article>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img loading="lazy"  src="{{ asset('assets/frontend/images/home/specialOfferSlider-2.webp') }}" alt="mixology"/>
                </figure>
                <div class="backgroundLines">
                    <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                </div>
                <article>
                    <img class="specialSvg" src="{{ asset('assets/frontend/images/home/mixology.svg') }}" alt="mixology">
                    <p>Experte für Mixologie</p>
                    <span>Sorgfältig zubereitet für Sie</span>
                </article>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img loading="lazy"  src="{{ asset('assets/frontend/images/home/specialOfferSlider-3.webp') }}" alt="wedding"/>
                </figure>
                <div class="backgroundLines">
                    <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                </div>
                <article>
                    <img class="specialSvg" src="{{ asset('assets/frontend/images/home/wedding.svg') }}" alt="wedding"/>
                    <p>Hochzeitsgeschenk</p>
                    <span>Zeit zusammen verbringen</span>
                </article>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev">
            <img class="specialSvg" src="{{ asset('assets/frontend/images/swipergray-left.svg') }}" alt="swiper"/>
        </div>
        <div class="swiper-button-next">
            <img class="specialSvg" src="{{ asset('assets/frontend/images/swipergray-right.svg') }}" alt="swiper"/>
        </div>
    </div>
</div>
<!-- Special Offer End -->
<!-- Services -->
<div class="homeServices">
    <div class="row">
        <div class="col-md-12 p-0">
            <div class="swiper homeServicesSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="serviceBackground">
                            <img loading="lazy" src="{{ asset('assets/frontend/images/home/serviceSlider-bg-1.webp') }}" alt="service1"/>
                        </div>
                        <div class="serviceDetail">
                                <div class="serviceDetailItemWrapper">
                                    <div class="serviceDetailImgWrapper">
                                        <img loading="lazy" src="{{ asset('assets/frontend/images/home/serviceSlider-1.webp') }}" alt="service1"/>
                                    </div>
                                    <div class=" serviceText">

                                        <span>Premium Bar & Lounge</span>
                                        <p>Premium-Service fühlt sich erstklassig an.<br>
                                            Für dieses Gefühl ist das Port Nature Luxury Resort immer da.</p>
                                        <div class="homeServicesButton">
                                            <a href="{{ route('de-bar-cafe') }}">Mehr Uber</a>
                                        </div>
                                    </div>
                                </div>
                      
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="serviceBackground">
                            <img loading="lazy" src="{{ asset('assets/frontend/images/home/serviceSlider-bg-2.webp') }}" alt="service2"/>
                        </div>
                        <div class="serviceDetail">
                                <div class="serviceDetailItemWrapper">
                                    <div class="serviceDetailImgWrapper">
                                        <img loading="lazy" src="{{ asset('assets/frontend/images/home/serviceSlider-2.webp') }}" alt="service2"/>
                                    </div>
                                    <div class=" serviceText">

                                        <span>Magic Spa</span>
                                        <p>Gönnen Sie sich in unserem luxuriösen Spa mit erfahrenen Therapeuten eine glückselige Flucht.</p>
                                        <div class="homeServicesButton">
                                            <a href="{{ route('de-spa') }}">Mehr Uber</a>
                                        </div>
                                    </div>
                                </div>
                      
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="serviceBackground">
                            <img loading="lazy" src="{{ asset('assets/frontend/images/home/serviceSlider-bg-3.webp') }}" alt="service3"/>
                        </div>
                        <div class="serviceDetail">
                                <div class="serviceDetailItemWrapper">
                                    <div class="serviceDetailImgWrapper">
                                        <img loading="lazy" src="{{ asset('assets/frontend/images/home/serviceSlider-3.webp') }}" alt="service3"/>
                                    </div>
                                    <div class=" serviceText">

                                        <span>Tagung & Kongress</span>
                                        <p>Bei uns geht es nicht nur um Unterhaltung, sondern sprechen auch den Unternehmer an.</p>
                                        <div class="homeServicesButton">
                                            <a href="{{ route('de-meeting-congress') }}">Mehr Uber</a>
                                        </div>
                                    </div>
                                </div>
                      
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="serviceBackground">
                            <img loading="lazy" src="{{ asset('assets/frontend/images/home/serviceSlider-bg-4.webp') }}" alt="cafe"/>
                        </div>
                        <div class="serviceDetail">
                                <div class="serviceDetailItemWrapper">
                                    <div class="serviceDetailImgWrapper">
                                        <img loading="lazy" src="{{ asset('assets/frontend/images/home/serviceSlider-4.webp') }}" alt="Cafe"/>
                                    </div>
                                    <div class=" serviceText">

                                        <span>Davidoff Kafe</span>
                                        <p>Entdecken Sie kostbare Kaffeesorten,<br> die es wert sind, weiter zu gehen.</p>
                                        <div class="homeServicesButton">
                                            <a href="{{ route('de-davidoff-cafe') }}">Mehr Uber</a>
                                        </div>
                                    </div>
                                </div>
                      
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination services-swiper-pagination"></div>
            <div class="swiper-button-previous">
                <img src="{{ asset('assets/frontend/images/swiperwhite-left.svg') }}" alt="swiper"/>
            </div>
            <div class="swiper-button-nextSlide">
                <img src="{{ asset('assets/frontend/images/swiperwhite-right.svg') }}" alt="swiper"/>
            </div>
        </div>
    </div>

</div>
<!-- Services End -->
<div class="homeTravelCompany">
    <div class="travelSliderWrapper">
        <div class="swiper travelSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a class="ratinglink"
                       href="https://www.tripadvisor.com/Hotel_Review-g4833191-d6427728-Reviews-Port_Nature_Luxury_Resort_Hotel_Spa-Bogazkent_Serik_District_Turkish_Mediterranean_Co.html">
                        
                        <img class="tripadvisorlogo-img" src="{{ asset('assets/frontend/images/home/tripadvisor-rating.svg') }}" alt="travel"/>
    
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="ratinglink"
                       href="https://www.google.com/travel/search?q=portnature%20google&g2lb=2502548%2C2503771%2C2503781%2C4258168%2C4270442%2C4284970%2C4291517%2C4306835%2C4308227%2C4429192%2C4515404%2C4597339%2C4731329%2C4757164%2C4778035%2C4814050%2C4861688%2C4864715%2C4874190%2C4886082%2C4886480%2C4893075%2C4902277%2C4906023%2C4920132%2C4924069%2C4926165%2C4926489%2C4936396%2C4949692%2C4949695%2C4953372%2C4958830%2C4961149%2C4965726%2C4965990%2C4966233&hl=tr-TR&gl=tr&cs=1&ssta=1&ts=CAESABpJCikSJzIlMHgxNGMzOTAwNDJkYmZmMmRkOjB4OWE1ZDkwNzU0MWYxZGI3MhIcEhQKBwjnDxADGAgSBwjnDxADGAkYATIECAAQAA&qs=CAEyJ0Noa0k4cmJIajlTTzVLNmFBUm9NTDJjdk1XcHRZM0Z0ZUdKakVBRTgCQgsJctvxQXWQXZoYAUILCXLb8UF1kF2aGAE&ap=ugEIb3ZlcnZpZXc&ictx=1&sa=X">
                        
                        <img class="googlelogo-img" src="{{ asset('assets/frontend/images/home/google-rating.svg') }}" alt="travel"/>
          
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="ratinglink"
                       href="https://www.booking.com/hotel/tr/port-nature-luxury-resort-amp-spa.html">
                        
                        <img class="bookinglogo-img" src="{{ asset('assets/frontend/images/home/booking-rating.svg') }}" alt="travel"/>
                   
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="ratinglink"
                       href="https://www.holidaycheck.de/hi/port-nature-luxury-resort-spa/6a10924b-2286-3a46-b5db-ad9802b8d226">
                       
                        <img class="holidaychecklogo-img" src="{{ asset('assets/frontend/images/home/holidaycheck-rating.svg') }}" alt="travel"/>
    
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact -->
@include('frontend.de.layouts.contact')
<!-- Contact End -->

<!-- Above Footer -->
<div class="homeAboveFooter">
    <div class="aboveImg">
        <img class="mobileV" src="{{ asset('assets/frontend/images/home/instagram-1.webp') }}" alt="aboveFooter1"/>
        <img class="mobileV" src="{{ asset('assets/frontend/images/home/instagram-2.webp') }}" alt="aboveFooter2"/>
        <img src="{{ asset('assets/frontend/images/home/instagram-3.webp') }}" alt="abovefooter3"/>
        <div class="aboveInsta">
            <img src="{{ asset('assets/frontend/images/home/instagram-4.webp') }}" alt="aboveFooter4" style="position:relative;"/>
            <a href="https://www.instagram.com/portnatureluxury/">
                <img class="specialSvg" src="{{ asset('assets/frontend/images/instagramwhite.svg') }}" alt="instagram">
                Willkommen</a>
            <p>Folgen Sie uns</p>
        </div>
        <img src="{{ asset('assets/frontend/images/home/instagram-5.webp') }}" alt="aboveFooter5"/>
        <img class="mobileV" src="{{ asset('assets/frontend/images/home/instagram-6.webp') }}" alt="aboveFooter6"/>
        <img class="mobileV" src="{{ asset('assets/frontend/images/home/instagram-7.webp') }}" alt="aboveFooter7"/>
    </div>

    <div class="phoneImage">
        <img src="{{ asset('assets/frontend/images/home/inst-de.webp') }}" alt="phone"/>
    </div>
</div>
<!-- Above Footer End -->

@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
<script src="{{ asset('assets/frontend/js/main.js') }}" ></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}"/>
@endsection