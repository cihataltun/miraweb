@extends('frontend.de.layouts.master')

@section('title', 'Script Chivas Lounge - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-chivas-lounge') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('chivas-lounge') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-chivas-lounge') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-chivas-lounge') }}">RU</a></li>
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
                <p>Whisky ist viel mehr als nur ein Getränk.</p>
                <span>Chivas Regal in Port Nature</span>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-chivas" href="{{ asset('assets/frontend/images/chivas/script2.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/chivas/script2.webp') }}" alt="Chivas"/>
                </figure>
            </a>
            <article>
                <p>Whisky ist viel mehr als nur ein Getränk.</p>
                <span>Chivas Regal in Port Nature</span>
            </article>

        </div>
        <div class="swiper-slide">
            <a class="lightbox-chivas" href="{{ asset('assets/frontend/images/chivas/script3.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/chivas/script3.webp') }}" alt="Chivas"/>
                </figure>
            </a>
            <article>
                <p>Whisky ist viel mehr als nur ein Getränk.</p>
                <span>Chivas Regal in Port Nature</span>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-chivas" href="{{ asset('assets/frontend/images/chivas/script4.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/chivas/script4.webp') }}" alt="Chivas"/>
                </figure>
            </a>
            <article>
                <p>Whisky ist viel mehr als nur ein Getränk.</p>
                <span>Chivas Regal in Port Nature</span>
            </article>
        </div>
    </div>
</div>

<div class="chivasHeaderText">
    <figure>
        <img src="{{ asset('assets/frontend/images/chivas/chivasLogo.png') }}" alt="chivas"/>
    </figure>
    <p>Zu den einzigartigen Formeln für die Whiskys von Chivas Regal gehört der berühmte 18-jährige Blend, der aufgrund seines reichen und komplexen Geschmacks, der aus dem sorgfältigen Blending resultiert, weithin als der beste Whiskey in Port Nature gilt.</p>
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
                        Einzigartiger, reicher Geschmack, sehr wertvoller, 18 Jahre gereifter Whisky.
                    </h2>
                    <p>Eine Ikone des Geschmacks. Dieser preisgekrönte Whisky hält begehrte Titel wie „Best Blended Scotch Whisky“ bei der International Wine and Spirits Competition – und es ist nicht schwer zu verstehen, warum. Chivas 18 ist ein sorgfältig hergestellter Whisky, der bei jedem Schluck beeindruckt.
                    </p>
                    <p>Ein 18 Jahre alter Scotch, der seine intensiven Aromen nur in den besten Fässern entwickelt, ein raffinierter und reichhaltiger Whisky mit einem nie endenden Geschmackserlebnis.</p>
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
@include('frontend.de.layouts.contact')
<!-- Contact End -->
<!-- Special Offer -->
<div class="barSpecialOffer">
    <h6>Andere Bars & Cafés</h6>
    <div class="swiper barSpecialOfferSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('de-kitkat-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/KitKatsmall.webp') }}" alt="kitkat"/>
                    </figure>
                    <h5>Kit Kat</h5><div class="backgroundLines">
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
                    <h5>DAVIDOFF KAFE</h5><div class="backgroundLines">
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
<!-- Page Up Button -->
<div style="text-align: center" class="pageUpButton">
    <a href="#">
        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
    </a>
</div>


@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
<script src="{{ asset('assets/frontend/js/chivas.js') }}"></script>
<script src="{{ asset('assets/frontend/js/barDetail.js') }}"></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/chivas.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/css/barsSpecialOffer.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/skins/light.css') }}"/>
@endsection