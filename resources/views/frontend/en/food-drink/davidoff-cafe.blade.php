@extends('frontend.en.layouts.master')

@section('title', 'Davidoff Cafe - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('davidoff-cafe') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('tr-davidoff-cafe') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-davidoff-cafe') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-davidoff-cafe') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="davidoffSlider">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a class="lightbox-davidoff" href="{{ asset('assets/frontend/images/davidoff/davidoffSlider-1.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/davidoff/davidoffSlider-1.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>‘Pleasure in a thing of beauty is the<br> essence of a happy life’</p>
                <span>ZINO DAVIDOFF</span>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-davidoff" href="{{ asset('assets/frontend/images/davidoff/davidoffSlider-2.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/davidoff/davidoffSlider-2.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>‘Pleasure in a thing of beauty is the<br> essence of a happy life’</p>
                <span>ZINO DAVIDOFF</span>
            </article>

        </div>
        <div class="swiper-slide">
            <a class="lightbox-davidoff" href="{{ asset('assets/frontend/images/davidoff/davidoffSlider-3.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/davidoff/davidoffSlider-3.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>‘Pleasure in a thing of beauty is the<br> essence of a happy life’</p>
                <span>ZINO DAVIDOFF</span>
            </article>
        </div>
    </div>
</div>

<div class="daviodffHeaderText">
    <figure>
        <img src="{{ asset('assets/frontend/images/davidoff/davidoffLogo.webp') }}" alt="davidoff"/>
    </figure>
    <p>Looking for a luxury cafe to relax and unwind? Look no further than Davidoff. Come visit today and experience the perfect blend of comfort, convenience, and deliciousness. Port Nature's Davidoff cafe is the perfect spot for people who wants refresh.</p>
</div>

<div class="container">
    <div class="davidoffText">
        <div class="row">
            <div class="col-lg-6">
                <figure>
                    <img src="{{ asset('assets/frontend/images/davidoff/coffee.webp') }}" alt="coffe"/>
                </figure>
            </div>
            <div class="col-lg-6">
                <article>
                    <h2>
                        Your zest for life sums up the essence of Davidoff brand. It is what makes DAVIDOFF unique.
                    </h2>
                    <p>The unique blend of exquisite craftsmanship, passionate dedication, and refinement is the sincere reminiscence of Zino Davidoff’s Port Nature ambition – to provide timeless style, impeccable quality, and pure elegance through premium goods.</p>
                    <div class="hours">
                        <img class="davidoffSvg" src="{{ asset('assets/frontend/images/clock.svg') }}" alt="clock"/>
                        <span>10:00 - 22:00</span>
                    </div>
                </article>
            </div>
        </div>
        <img class="coffeebg" src="{{ asset('assets/frontend/images/davidoff/davidoffbg.png') }}" alt="bg"/>
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
                <a class="roomlink" href="{{ route('kitkat-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/KitKatsmall.webp') }}" alt="kitkat"/>
                    </figure>
                    <h5>Kit Kat</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('hennessy-lounge') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/born9small.webp') }}" alt="BORN 9 HENNESSY"/>
                    </figure>
                    <h5>BORN 9 HENNESSY LOUNGE</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>               
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('chivas-lounge') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/scriptsmall.webp') }}" alt="chivas"/>
                    </figure>
                    <h5>Script Chivas Lounge</h5><div class="backgroundLines">
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
<!-- Page Up Button -->
<div style="text-align: center" class="pageUpButton">
    <a href="#">
        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
    </a>
</div>


@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
<script src="{{ asset('assets/frontend/js/barDetail.js') }}"></script>
<script src="{{ asset('assets/frontend/js/davidoff.js') }}"></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/davidoff.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/css/barsSpecialOffer.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
@endsection