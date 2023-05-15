@extends('frontend.ru.layouts.master')

@section('title', 'Французский ALa Carte - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-french') }}"
       aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('french') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-french') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('de-french') }}">DE</a></li>
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
                        <a class="lightbox-french" href="{{ asset('assets/frontend/images/french/frenchSlider-1.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/french/frenchSlider-1.webp') }}" alt="french"/>
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
                <img class="videoCover" src="{{ asset('assets/frontend/images/alldaydinning/alldaydiningVideo.webp') }}" alt="youtubeVideo"/>
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
            <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000.svg">
                <path d="M10.6812 22.775C16.028 22.775 20.3624 17.9565 20.3624 12.0125C20.3624 6.06853 16.028 1.25 10.6812 1.25C5.33442 1.25 1 6.06853 1 12.0125C1 17.9565 5.33442 22.775 10.6812 22.775Z"
                      stroke="#233038" stroke-opacity="0.8" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round"/>
                <path d="M10.6816 5.55273V12.0102L14.5541 14.1627" stroke="#233038" stroke-opacity="0.8"
                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>07:00 - 11:00</span>
        </div>
        <div class="time">
            <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000.svg">
                <path d="M10.6812 22.775C16.028 22.775 20.3624 17.9565 20.3624 12.0125C20.3624 6.06853 16.028 1.25 10.6812 1.25C5.33442 1.25 1 6.06853 1 12.0125C1 17.9565 5.33442 22.775 10.6812 22.775Z"
                      stroke="#233038" stroke-opacity="0.8" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round"/>
                <path d="M10.6816 5.55273V12.0102L14.5541 14.1627" stroke="#233038" stroke-opacity="0.8"
                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>12:30 - 21:00</span>
        </div>
    </div>
    <div class="restaurantText">
        <h1>Французский A’La Carte</h1>
        <p>Изысканные вкусы в нашем ресторане, где наши повара используют только самые свежие ингредиенты для приготовления французских блюд. Элегантный декор и безупречное обслуживание.</p>
    </div>
</div>

<div class="mobilevideo">
    <!-- Button trigger modal -->
    <a type="button" class="restPlayButtonMobile" data-bs-toggle="modal" data-bs-target=".restaurantModalMobile">
        <img class="playButton" src="{{ asset('assets/frontend/images/playButton.svg') }}" alt="clock"/>
        <img class="videoCover" src="{{ asset('assets/frontend/images/french/frenchVideo.webp') }}"alt="youtubeVideo"/>
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
@include('frontend.ru.layouts.contact')
<!-- Contact End -->

<!-- Special Offer -->
<div class="restSpecialOffer">
    <h6>Другие рестораны</h6>
    <div class="swiper restOtherSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-main-restaurant') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/mainrestsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Главный ресторан</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-fareast') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/fareastsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Дальневосточный A'la Carte</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-alldaydinning') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/alldaysmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>All Day Dining A'la Carte</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-seaside') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/seasidesmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Seaside A'la Carte</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-sushi-bar') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/sushibarsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Sushi Bar A'la Carte</h5>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-italian') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/italiansmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Итальянский A'la Carte</h5>
                </a>

            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-mini-club-alacarte') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/speacialOfferRestaurants/miniclubsmall.webp') }}" alt="restspecialoffer"/>
                    </figure>
                    <h5>Мини Клуб A'la Carte</h5>
                </a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev">
            <svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000.svg">
                <path d="M14 26L1 13.5L14 1" stroke="#233038" stroke-opacity="0.8" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <div class="swiper-button-next">
            <svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000.svg">
                <path d="M1 26L14 13.5L1 1" stroke="#233038" stroke-opacity="0.8" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
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