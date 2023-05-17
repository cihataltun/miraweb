@extends('frontend.de.layouts.master')

@section('title', 'Seaside Ala Carte - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-seaside') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('seaside') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-seaside') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-seaside') }}">RU</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="mainHeader">
    <div class="row">
        <div class="col-lg-6">
            <div class="swiper mainRestSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-seaside" href="{{ asset('assets/frontend/images/seaside/seasideSlider-1.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/seaside/seasideSlider-1.webp') }}" alt="seaside"/>
                            </figure>
                        </a>
                    </div>
                    <div class="swiper-slide leftImage">
                        <a class="lightbox-seaside" href="{{ asset('assets/frontend/images/seaside/seasideSlider-2.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/seaside/seasideSlider-2.webp') }}" alt="seaside"/>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 video">
            <!-- Button trigger modal -->
            <a type="button" class="restPlayButtonDesktop" data-bs-toggle="modal" data-bs-target=".restaurantModalDesktop">
                <img class="playButton" src="{{ asset('assets/frontend/images/playButton.svg') }}" alt="clock"/>
                <img class="videoCover" src="{{ asset('assets/frontend/images/seaside/seasideVideo.webp') }}" alt="youtubeVideo"/>
            </a>
            <!-- Modal -->
            <div class="modal fade restaurantModal restaurantModalDesktop" tabindex="-1" aria-labelledby="restaurantModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" >
                        <iframe width="900" height="600" src=""
                                title="YouTube video player"
                                frameborder="0"
                                id="restaurantIframeDesktop"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="restaurantInfo">
    <div class="hours">
        <div class="time">
            <img class="restSvg" src="{{ asset('assets/frontend/images/clock.svg') }}" alt="clock"/>

            <span>12:30 - 17:00</span>
        </div>
        <div class="time">
            <img class="restSvg" src="{{ asset('assets/frontend/images/clock.svg') }}" alt="clock"/>

            <span>18:00 - 21:00</span>
        </div>
    </div>
    <div class="restaurantText">
        <h1>Seaside A'La Carte</h1>
        <p>Probieren Sie den frischen Fisch in unserem Fischrestaurant am Meer, wo unsere erfahrenen Köche köstliche Meeresfrüchtegerichte mit den besten Zutaten zubereiten. Mit atemberaubendem Meerblick und einem einladenden Ambiente ist unser Restaurant der perfekte Ort für Sie.</p>
    </div>
</div>

<div class="mobilevideo">
    <!-- Button trigger modal -->
    <a type="button" class="restPlayButtonMobile" data-bs-toggle="modal" data-bs-target=".restaurantModalMobile">
        <img class="playButton" src="{{ asset('assets/frontend/images/playButton.svg') }}" alt="clock"/>
        <img class="videoCover" src="{{ asset('assets/frontend/images/seaside/seasideVideo.webp') }}" alt="youtubeVideo"/>
    </a>
    <!-- Modal -->
    <div class="modal fade restaurantModal restaurantModalMobile" tabindex="-1" aria-labelledby="restaurantModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" >
                <iframe width="300" height="600" src=""
                        id="restaurantIframeMobile"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer;clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Contact -->
@include('frontend.de.layouts.contact')
<!-- Contact End -->

<!-- Special Offer -->
<div class="restSpecialOffer">
    <h6>Andere Restaurants</h6>
    <div class="swiper restOtherSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-main-restaurant') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/mainrestsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Hauptresturant</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-fareast') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/fareastsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Far East A'La Carte</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-alldaydinning') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/alldaysmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>All Day Dining A'La Carte</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-mini-club-alacarte') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/miniclubsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Mini Club A'La Carte</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-sushi-bar') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/sushibarsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Sushi Bar A'La Carte</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-italian') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/italiansmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Italian A'La Carte</h5>
                </a>

            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-french') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/frenchsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>French A'La Carte</h5>
                </a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev">
            <img style="height: 27px;width: 13px" src="{{ asset('assets/frontend/images/swipergray-left.svg') }}" alt="swiper"/>
        </div>
        <div class="swiper-button-next">
            <img style="height: 27px;width: 13px" src="{{ asset('assets/frontend/images/swipergray-right.svg') }}" alt="swiper"/>
        </div>
    </div>
</div>
<!-- Special Offer End -->
<!-- Page Up Button -->
<div style="text-align: center" class="pageUpButton">
    <a href="#">
        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
    </a>
</div>

@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/restaurantDetails.js') }}"></script>
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/restaurantsDetail.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
@endsection