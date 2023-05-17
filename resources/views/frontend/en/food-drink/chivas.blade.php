@extends('frontend.en.layouts.master')

@section('title', 'Script Chivas Lounge - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('chivas-lounge') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('tr-chivas-lounge') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-chivas-lounge') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-chivas-lounge') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="chivasSlider">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a class="lightbox-chivas" href="{{ asset('assets/frontend/images/chivas/script1.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/chivas/script1.webp') }}" alt="Chivas"/>
                </figure>
            </a>
            <article>
                <p>Whisky is much more than just a drink.<br> Chivas Regal in Port Nature</p>
                <span>Chivas Regal</span>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-chivas" href="{{ asset('assets/frontend/images/chivas/script2.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/chivas/script2.webp') }}" alt="Chivas"/>
                </figure>
            </a>
            <article>
                <p>Whisky is much more than just a drink.<br> Chivas Regal in Port Nature</p>
                <span>Chivas Regal</span>
            </article>

        </div>
        <div class="swiper-slide">
            <a class="lightbox-chivas" href="{{ asset('assets/frontend/images/chivas/script3.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/chivas/script3.webp') }}" alt="Chivas"/>
                </figure>
            </a>
            <article>
                <p>Whisky is much more than just a drink.<br> Chivas Regal in Port Nature</p>
                <span>Chivas Regal</span>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-chivas" href="{{ asset('assets/frontend/images/chivas/script4.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/chivas/script4.webp') }}" alt="Chivas"/>
                </figure>
            </a>
            <article>
                <p>Whisky is much more than just a drink.<br> Chivas Regal in Port Nature</p>
                <span>Chivas Regal</span>
            </article>
        </div>
    </div>
</div>

<div class="chivasHeaderText">
    <figure>
        <img src="{{ asset('assets/frontend/images/chivas/chivasLogo.png') }}" alt="chivas"/>
    </figure>
    <p>Chivas Regal's unique formulas for their whiskies include their celebrated 18-year-old blend, widely considered the best whiskey in Port Nature due to its rich and complex flavor resulting from the careful blending.</p>
</div>

<div class="container">
    <div class="chivasText">
        <div class="row">
            <div class="col-lg-6">
                <div class="swiper chivasVerticalSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide vertical">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/chivas/script5.webp') }}" alt="chivas"/>
                            </figure>
                        </div>
                        <div class="swiper-slide vertical">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/chivas/script6.webp') }}" alt="chivas"/>
                            </figure>
                        </div>
                        <div class="swiper-slide vertical">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/chivas/script7.webp') }}" alt="chivas"/>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text">
                <article>
                    <h2>
                        Uniquely rich flavour, 18-year-old pearly whisky 
                    </h2>
                    <p>An icon of flavour. This award-winning whisky holds coveted titles such as ‘Best Blended Scotch Whisky’ from the International Wine and Spirits Competition – and it’s not hard to see why. Chivas 18 is a carefully crafted whisky that impresses with every sip. 
                    </p>
                    <p>An 18-year-old Scotch that develops intense flavours within only the finest casks, it’s a refined and rich whisky with a never-ending taste experience.</p>
                    <div class="hours">
                        <img class="chivasSvg" src="{{ asset('assets/frontend/images/clock.svg') }}" alt="clock"/>
                        <span>10:00 - 18:00</span>
                    </div>
                </article>
            </div>
        </div>
        <img class="chivasBg" src="{{ asset('assets/frontend/images/chivas/chivasBg.png') }}" alt="bg"/>
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
                <a class="roomlink" href="{{ route('davidoff-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/Davidoffsmall.webp') }}" alt="davidoff"/>
                    </figure>
                    <h5>DAVIDOFF CAFE</h5><div class="backgroundLines">
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
<script src="{{ asset('assets/frontend/js/chivas.js') }}"></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/chivas.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/css/barsSpecialOffer.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/skins/light.css') }}"/>
@endsection