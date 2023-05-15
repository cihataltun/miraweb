@extends('frontend.de.layouts.master')

@section('title', 'KitKat Kafe - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-kitkat-cafe') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('kitkat-cafe') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-kitkat-cafe') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-kitkat-cafe') }}">RU</a></li>
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
                <p>Knusprige Waffelmitte und <br>glatte Schokoladencreme.</p>
                <span>VERSUCHEN SIE SMOOTH <br>KIT KAT</span>
            </article>

        </div>
        <div class="swiper-slide">
            <a class="lightbox-kitkat" href="{{ asset('assets/frontend/images/kitkat/kitkatSlider-3.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kitkat/kitkatSlider-3.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Knusprige Waffelmitte und <br>glatte Schokoladencreme.</p>
                <span>VERSUCHEN SIE SMOOTH <br>KIT KAT</span>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-kitkat" href="{{ asset('assets/frontend/images/kitkat/kitkatSlider-4.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kitkat/kitkatSlider-4.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Knusprige Waffelmitte und <br>glatte Schokoladencreme.</p>
                <span>VERSUCHEN SIE SMOOTH <br>KIT KAT</span>
            </article>
        </div>
    </div>
</div>

<div class="kitkatHeaderText">
    <figure>
        <img src="{{ asset('assets/frontend/images/kitkat/kitkatLogo.png') }}" alt="davidoff"/>
    </figure>
    <p>Mach eine Pause, nimm einen KitKat
        Um großartige Schokolade herzustellen, braucht man großartigen Kakao.
        Bessere Schokolade, besseres Leben in Port Nature Luxury.</p>
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
                        Die perfekte Balance aus Schokolade und Waffel. Die Kultmarke befindet sich in Port Nature
                    </h2>
                    <p>Von klassischen Fingern bis Chunky, Original bis Erdnussbutter, es gibt für jeden einen KitKat.</p>
                    <p>KitKat ist die erste globale Schokoladenmarke, die 100 % nachhaltig gewonnenen Kakao durch den Nestlé Cocoa Plan und Rainforest Alliance-zertifiziert verwendet. Das heißt, es gibt keinen Grund, nicht zu pausieren und eine Pause zu genießen.</p>
                </article>
            </div>
        </div>
        <img class="coffeebg" src="{{ asset('assets/frontend/images/kitkat/kitkatBg.png') }}" alt="bg"/>
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
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/scriptsmall.webp') }}" alt="chivas"/>
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
                <a class="roomlink" href="{{ route('de-davidoff-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/Davidoffsmall.webp') }}" alt="davidoff"/>
                    </figure>
                    <h5>Davidoff Kafe</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-nespresso-cafe') }}">
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
<link rel="stylesheet" href="{{ asset('assets/frontend/css/barsSpecialOffer.css') }}"/><link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
@endsection