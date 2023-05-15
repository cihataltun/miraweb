@extends('frontend.de.layouts.master')

@section('title', 'Flamingo Bar - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-flamingo-bar') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('flamingo-bar') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-flamingo-bar') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-flamingo-bar') }}">RU</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="barHero">
    <div class="row">
        <div class="col-md-12">
            <h1>Flamingo Bar</h1>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-lg-4">
            <div class="swiper PubVerticalSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide vertical">
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/flamingobar/FlamingoBar2.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/flamingobar/FlamingoBar2.webp') }}" alt="Flamingo Bar"/>
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
                        <a class="lightbox-verticalBar" href="{{ asset('assets/frontend/images/flamingobar/FlamingoBar1.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/flamingobar/FlamingoBar1.webp') }}" alt="Flamingo Bar"/>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
            <div class="barDetailHeroText">
                <div class="hours">
                    <img src="{{ asset('assets/frontend/images/clock.svg') }}" alt="clock" class="barSvg">
                    <span>10:00 - 00:00</span>
                </div>
                <article>
                    <p>Wenn Sie an warmen und feuchten Tagen entspannen möchten, ist die Poolbar Flamingo jedes Mal eine coole Wahl mit vielen importierten Getränken und kalten und heißen Getränken.</p>
                </article>
            </div>
        </div>
    </div>
</div>

<!-- Contact -->
@include('frontend.de.layouts.contact')
<!-- Contact End -->
<!-- Special Offer -->
<div class="barSpecialOffer">
    <h6>Andere Bars & Cafés</h6>
    <div class="swiper barSpecialOfferSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-chivas-lounge') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/scriptsmall.webp') }}" alt="SCRIPT CHIVAS"/>
                    </figure>
                    <h5>Script Chivas Lounge</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-hennessy-lounge') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/born9small.webp') }}" alt="BORN 9 HENNESSY"/>
                    </figure>
                    <h5>BORN 9 HENNESSY LOUNGE</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-irish-pub') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/irishPubSmall.webp') }}" alt="IRISH BAR"/>
                    </figure>
                    <h5>IRISH PUB</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomLink" href="{{ route('de-lobby-bar') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/lobbybarsmall.webp') }}" alt="FLAMINGO BAR"/>
                    </figure>
                    <h5>LOBBY BAR</h5><div class="backgroundLines">
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