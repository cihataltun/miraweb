@extends('frontend.ru.layouts.master')

@section('title', 'DAVIDOFF Кафе - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-davidoff-cafe') }}"
       aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('davidoff-cafe') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-davidoff-cafe') }}">TR</a></li>
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
                <p>"Удовольствие от прекрасного -<br> это суть счастливой жизни".</p>
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
                <p>"Удовольствие от прекрасного -<br> это суть счастливой жизни".</p>
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
                <p>"Удовольствие от прекрасного -<br> это суть счастливой жизни".</p>
                <span>ZINO DAVIDOFF</span>
            </article>
        </div>
    </div>
</div>

<div class="daviodffHeaderText">
    <figure>
        <img src="{{ asset('assets/frontend/images/davidoff/davidoffLogo.webp') }}" alt="davidoff"/>
    </figure>
    <p>Ищете роскошное кафе, чтобы расслабиться? Смело заходите в Davidoff. Приходите в гости насладиться идеальным сочетанием комфорта, уюта и изысканности в сочетании с уютным ароматом кофейных зерн. </p>
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
                        Ваша жизнерадостность говорит о сути бренда Davidoff. Это то, что делает DAVIDOFF уникальным.
                    </h2>
                    <p>Уникальное сочетание изысканного мастерства, страстной преданности делу и утонченности является искренним напоминанием о стремлении Davidoff обеспечить неподвластный времени стиль, безупречное качество и чистую элегантность с помощью товаров премиум–класса в нашем отеле Port Nature.</p>
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
@include('frontend.ru.layouts.contact')
<!-- Contact End -->
<!-- Special Offer -->
<div class="barSpecialOffer">
    <h6>Другие бары & кафе</h6>
    <div class="swiper barSpecialOfferSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-kitkat-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/KitKatsmall.webp') }}" alt="kitkat"/>
                    </figure>
                    <h5>Kit Kat</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-hennessy-lounge') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/born9small.webp') }}" alt="BORN 9 HENNESSY"/>
                    </figure>
                    <h5>BORN 9 HENNESSY</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-chivas-lounge') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/scriptsmall.webp') }}" alt="chivas"/>
                    </figure>
                    <h5>Script Chivas</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-nespresso-cafe') }}">
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
<link rel="stylesheet" href="{{ asset('assets/frontend/css/barsSpecialOffer.css') }}"/><link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
@endsection