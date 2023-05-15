@extends('frontend.en.layouts.master')

@section('title', 'KitKat - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('kitkat-cafe') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('tr-kitkat-cafe') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-kitkat-cafe') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-kitkat-cafe') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="kitkatSlider">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a class="lightbox-kitkat" href="{{ asset('assets/frontend/images/kitkat/kitkatSlider-2.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kitkat/kitkatSlider-2.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Crispy wafer center &<br> Smooth chocolate covering.</p>
                <span>TRY SMOOTH KIT KAT</span>
            </article>

        </div>
        <div class="swiper-slide">
            <a class="lightbox-kitkat" href="{{ asset('assets/frontend/images/kitkat/kitkatSlider-3.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kitkat/kitkatSlider-3.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Crispy wafer center &<br> Smooth chocolate covering.</p>
                <span>TRY SMOOTH KIT KAT</span>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-kitkat" href="{{ asset('assets/frontend/images/kitkat/kitkatSlider-4.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kitkat/kitkatSlider-4.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Crispy wafer center &<br> Smooth chocolate covering.</p>
                <span>TRY SMOOTH KIT KAT</span>
            </article>
        </div>
    </div>
</div>

<div class="kitkatHeaderText">
    <figure>
        <img src="{{ asset('assets/frontend/images/kitkat/kitkatLogo.png') }}" alt="davidoff"/>
    </figure>
    <p>Have a break, have a KitKat<br><br>To make great chocolate, you need great cocoa.
        Better chocolate, better lives in Port Nature Luxury.</p>
</div>

<div class="container">
    <div class="kitkatText">
        <div class="row">
            <div class="col-lg-6">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kitkat/kitkat.webp') }}" alt="kitkat"/>
                </figure>
            </div>
            <div class="col-lg-6">
                <article>
                    <h2>
                        The perfect balance of chocolate and wafer. The iconic brand is in Port Nature
                    </h2>
                    <p>From classic fingers to chunky, original to peanut butter, there is a KitKat for everyone.</p>
                    <p>KitKat is the first global chocolate brand to use 100% sustainably sourced cocoa through the Nestlé Cocoa Plan and Rainforest Alliance certified. Meaning there's no reason not to pause, and enjoy a break.</p>
                </article>
            </div>
        </div>
        <img class="coffeebg" src="{{ asset('assets/frontend/images/kitkat/kitkatBg.png') }}" alt="bg"/>
    </div>
</div>

<!-- Contact -->
@include('frontend.en.layouts.contact')
<!-- Contact End -->

<!-- Special Offer -->
<div class="barSpecialOffer">
    <h6>Other Bars & Cafes</h6>
    <div class="swiper barSpecialOfferSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('chivas-lounge') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/scriptsmall.webp') }}" alt="chivas"/>
                    </figure>
                    <h5>Script Chivas</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('hennessy-lounge') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/born9small.webp') }}" alt="BORN 9 HENNESSY"/>
                    </figure>
                    <h5>BORN 9 HENNESSY</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('davidoff-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/Davidoffsmall.webp') }}" alt="davidoff"/>
                    </figure>
                    <h5>Davidoff Cafe</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('nespresso-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/Nespressosmall.webp') }}" alt="nespresso"/>
                    </figure>
                    <h5>Nespresso</h5><div class="backgroundLines">
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
<!-- Page Up -->
<div style="text-align: center;" class="pageUpButton">
    <a href="#">
        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
    </a>
</div>

@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/kitkat.js') }}"></script>
<script src="{{ asset('assets/frontend/js/barDetail.js') }}"></script>
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/kitkat.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/css/barsSpecialOffer.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
@endsection