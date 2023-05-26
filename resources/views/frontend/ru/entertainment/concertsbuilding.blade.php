@extends('frontend.ru.layouts.master')

@section('title', 'Концерты - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-concertsbuilding') }}"
       aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('concert') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-concert') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('de-concert') }}">DE</a></li>
    </ul>
</li>

@endsection


@section('content')

<section class="special-intro-concerts-section">

<div class="swiper concertSpecialSwiper">
    <div class="holo"></div>
    <div class="swiper-wrapper concert-special-swiper-wrapper">

        <div class="swiper-slide">
            <img class="concert-special-swiper-image" src="{{ asset('assets/frontend/images/concertsSpecial/star-1.webp') }}">
            <div class="concert-date-wrapper">
                <p class="concert-name" id="concertName">ELKA</p>
                <p class="concert-date">08.05.2023</p>
            </div>
                
            </div>
           
            
        <div class="swiper-slide">
            <img class="concert-special-swiper-image" src="{{ asset('assets/frontend/images/concertsSpecial/star-2.webp') }}">
             <div class="concert-date-wrapper">
                <p class="concert-name" id="concertName">ELKA</p>
                <p class="concert-date">08.05.2023</p>
            </div>
        </div>
        <div class="swiper-slide">
            <img class="concert-special-swiper-image" src="{{ asset('assets/frontend/images/concertsSpecial/star-3.webp') }}">
             <div class="concert-date-wrapper">
                <p class="concert-name" id="concertName">ELKA</p>
                <p class="concert-date">08.05.2023</p>
            </div>
        </div>
        <div class="swiper-slide">
            <img class="concert-special-swiper-image" src="{{ asset('assets/frontend/images/concertsSpecial/star-4.webp') }}">
             <div class="concert-date-wrapper">
                <p class="concert-name" id="concertName">ELKA</p>
                <p class="concert-date">08.05.2023</p>
            </div>
        </div>
        <div class="swiper-slide">
            <img class="concert-special-swiper-image" src="{{ asset('assets/frontend/images/concertsSpecial/star-5.webp') }}">
             <div class="concert-date-wrapper">
                <p class="concert-name" id="concertName">ELKA</p>
                <p class="concert-date">08.05.2023</p>
            </div>
        </div>
        <div class="swiper-slide">
            <img class="concert-special-swiper-image" src="{{ asset('assets/frontend/images/concertsSpecial/star-6.webp') }}">
            
             <div class="concert-date-wrapper">
                <p class="concert-name" id="concertName">ELKA</p>
                <p class="concert-date">08.05.2023</p>
            </div>
        </div>
        <div class="swiper-slide">
            <img class="concert-special-swiper-image" src="{{ asset('assets/frontend/images/concertsSpecial/star-7.webp') }}">
             <div class="concert-date-wrapper">
                <p class="concert-name" id="concertName">ELKA</p>
                <p class="concert-date">08.05.2023</p>
            </div>
        </div>
        <div class="swiper-slide">
            <img class="concert-special-swiper-image" src="{{ asset('assets/frontend/images/concertsSpecial/star-8.webp') }}">
             <div class="concert-date-wrapper">
                <p class="concert-name" id="concertName">ELKA</p>
                <p class="concert-date">08.05.2023</p>
            </div>
        </div>
        <div class="swiper-slide">
            <img class="concert-special-swiper-image" src="{{ asset('assets/frontend/images/concertsSpecial/star-9.webp') }}">
             <div class="concert-date-wrapper">
                <p class="concert-name" id="concertName">ELKA</p>
                <p class="concert-date">08.05.2023</p>
            </div>
        </div>
    </div>
</div>
</section>

<!-- Page Up Button -->
<div style="text-align: center" class="pageUpButton">
    <a href="#">
        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
    </a>
</div>


@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/libs/js/powerglitch.js') }}"></script>
<script src="{{ asset('assets/frontend/js/concertSpecial.js') }}"></script><script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>

@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/concertSpecial.css') }}"/><link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>

@endsection