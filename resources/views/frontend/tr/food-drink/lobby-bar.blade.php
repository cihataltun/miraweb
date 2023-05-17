@extends('frontend.tr.layouts.master')

@section('title', 'Lobby Bar - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-lobby-bar') }}"
       aria-expanded="false">TR</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('lobby-bar') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-lobby-bar') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-lobby-bar') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="barHero">
    <div class="row">
        <div class="col-md-12">
            <h1>Lobby Bar</h1>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-lg-4">
            <div class="swiper PubVerticalSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/lobbybar/LobbyBar2.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/lobbybar/LobbyBar2.webp') }}" alt="IrishPub"/>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="swiper BarHorizontalSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide horizontal">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/lobbybar/LobbyBar1.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/lobbybar/LobbyBar1.webp') }}" alt="Irish Pub"/>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
            <div class="barDetailHeroText"><!-- CLASS CHANGED ***************************** -->
                <div class="hours">
                    <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.6812 22.775C16.028 22.775 20.3624 17.9565 20.3624 12.0125C20.3624 6.06853 16.028 1.25 10.6812 1.25C5.33442 1.25 1 6.06853 1 12.0125C1 17.9565 5.33442 22.775 10.6812 22.775Z"
                              stroke="#233038" stroke-opacity="0.8" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M10.6797 5.55273V12.0102L14.5522 14.1627" stroke="#233038" stroke-opacity="0.8"
                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>7/24</span>
                </div>
                <article>
                    <p>Lobby bar, premium alkol, yerli içkiler ve soğuk-sıcak içecekler ile her zaman yanınızda. Yetişkinler için lüks tasarımı ve modern atmosferi ile 24 saat hizmetinizde.</p>
                </article>
            </div>
        </div>
    </div>
</div>

<!-- Contact -->
@include('frontend.tr.layouts.contact')
<!-- Contact End -->
<!-- Special Offer -->
<div class="barSpecialOffer">
    <h6>Diğer Kafeler & Barlar</h6>
    <div class="swiper barSpecialOfferSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('tr-chivas-lounge') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/scriptsmall.webp') }}" alt="SCRIPT CHIVAS"/>
                    </figure>
                    <h5>Script Chivas Lounge</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('tr-hennessy-lounge') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/born9small.webp') }}" alt="BORN 9 HENNESSY"/>
                    </figure>
                    <h5>BORN 9 HENNESSY LOUNGE</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('tr-irish-pub') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/irishPubSmall.webp') }}" alt="IRISH PUB"/>
                    </figure>
                    <h5>IRISH PUB</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('tr-flamingo-bar') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/flamingobarsmall.webp') }}" alt="FLAMINGO BAR"/>
                    </figure>
                    <h5>FLAMINGO BAR</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
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
<script src="{{ asset('assets/frontend/js/barDetail.js') }}"></script>
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/barDetail.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/><link rel="stylesheet" href="{{ asset('assets/frontend/css/barsSpecialOffer.css') }}"/>
@endsection