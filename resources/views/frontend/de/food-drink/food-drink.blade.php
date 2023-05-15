@extends('frontend.de.layouts.master')

@section('title', 'Speisen & Getränke - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-food-drink') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('food-drink') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-food-drink') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-food-drink') }}">RU</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="swiper topSlider">
    <div class="swiper-wrapper top-swiper-wrapper">
        <div class="swiper-slide">
            <figure>
                <img src="{{ asset('assets/frontend/images/food-drink/foodDrinkSlider-3.webp') }}" alt="food&drink"/>
            </figure>
        </div>
        <div class="swiper-slide">
            <figure>
                <img src="{{ asset('assets/frontend/images/food-drink/foodDrinkSlider-1.webp') }}" alt="food&drink"/>
                <article>
                    <h1>Speisen & Getränke</h1>
                    <p>Premium-Gäste verdienen<br> Premium-Speisen und -Getränke.</p>
                </article>
            </figure>
        </div>
        <div class="swiper-slide">
            <figure>
                <img src="{{ asset('assets/frontend/images/food-drink/foodDrinkSlider-2.webp') }}" alt="food&drink"/>
            </figure>
        </div>
        <div class="swiper-slide">
            <figure>
                <img src="{{ asset('assets/frontend/images/food-drink/foodDrinkSlider-4.webp') }}" alt="food&drink"/>
            </figure>
        </div>
    </div>
</div>
<!-- Top Slider End -->
<div class="foodDrinkHero">
    <div class="firstRow">
        <div class="heroCard">
            <a class="roomlink" href="{{ route('de-bar-cafe') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/food-drink/barHero.webp') }}" alt="bars"/>
                </figure>
                <a href="{{ route('de-bar-cafe') }}">Bar & Cafes</a>
            </a>
        </div>
        <div class="heroCard">
            <a class="roomlink" href="{{ route('de-alacarte-restaurants') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/food-drink/alacarteHero.webp') }}" alt="alacarte"/>
                </figure>
                <a href="{{ route('de-alacarte-restaurants') }}">A'La Carte</a>
            </a>
        </div>

        <div class="heroCard">
            <a class="roomlink" href="{{ route('de-main-restaurant') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/food-drink/mainRestaurant.webp') }}" alt="mainRestaurant"/>
                </figure>
                <a href="{{ route('de-main-restaurant') }}">Main Restaurant</a>
            </a>
        </div>
    </div>
</div>
<!-- Hero Part End -->

<div class="gastroSection firstGastro">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-7">
            <a class="lightbox-alacarte" href="{{ asset('assets/frontend/images/food-drink/alacarte.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/food-drink/alacarte.webp') }}" alt="alacarte"/>
                </figure>
            </a>
        </div>
        <div class="col-12 col-md-12 col-lg-5">
            <article class="leftText">
                <h2>A'La Carte</h2>
                <p>Einladende Atmosphäre mit einem gemütlichen A'la Carte sind der perfekte Ort, um sich mit Freunden zu treffen und leckeres Essen zu genießen.</p>
                <span>Formen Sie Perfektion zu Ihrer Gaumenfreude.</span>
                <div class="moreButton">
                    <a href="{{ route('de-alacarte-restaurants') }}">Mehr Uber</a>
                </div>
            </article>
        </div>
    </div>
</div>

<div class="gastroSection">
    <div class="row reverse">
        <div class="col-12 col-md-12 col-lg-5">
            <article class="rightText">
                <h2>Bars & Cafés</h2>
                <p>Egal, ob Sie nach einem Kaffee am Morgen oder einem entspannenden Drink am Abend suchen, unsere Bars und Cafés bieten das perfekte Ambiente, um sich zu entspannen und eine schöne Zeit mit Freunden und der Familie zu genießen.</p>
                <span>Erleben Sie die perfekte Mischung aus Aromen und Ambiente.</span>
                <div class="moreButton">
                    <a href="{{ route('de-bar-cafe') }}">Mehr Uber</a>
                </div>
            </article>
        </div>
        <div class="col-12 col-md-12 col-lg-7">
            <a class="lightbox-bar" href="{{ asset('assets/frontend/images/food-drink/bars-cafes.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/food-drink/bars-cafes.webp') }}" alt="bars"/>
                </figure>
            </a>
        </div>
    </div>
</div>

<!-- Drink Brand -->
<div class="homeBrand">
    <div class="swiper homeBrandSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/home/hennesy.png') }}" alt="brand"/>
                </figure>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/home/davidoff.png') }}" alt="brand"/>
                </figure>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/home/nespresso.png') }}" alt="brand"/>
                </figure>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/home/chivas.png') }}" alt="brand"/>
                </figure>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/home/kitkat.png') }}" alt="brand"/>
                </figure>
            </div>
        </div>
    </div>
</div>
<!-- Drink Brand End -->
<div class="gastroSection">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-7">
            <a class="lightbox-main" href="{{ asset('assets/frontend/images/food-drink/mainRestaurant.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/food-drink/mainRestaurant.webp') }}" alt="main"/>
                </figure>
            </a>
        </div>
        <div class="col-12 col-md-12 col-lg-5">
            <article class="leftText">
                <h2>HAUPTRESTAURANT</h2>
                <p>Gönnen Sie sich ein unvergessliches kulinarisches Erlebnis in unserem Hauptrestaurant, wo unsere Köche nur die besten und frischesten Zutaten für unser offenes Buffet verwenden. Unser Hauptmenü bietet für jeden Geschmack etwas. Hier wird es Ihren Geschmacksnerven nie langweilig.</p>
                <span>Du verdienst das Beste! Wir bieten das Beste…</span>
                <div class="moreButton">
                    <a href="{{ route('de-main-restaurant') }}">Mehr Uber</a>
                </div>
            </article>
        </div>
    </div>
</div>
<!-- Contact -->
@include('frontend.de.layouts.contact')
<!-- Contact End -->
<!-- Page Up Button -->
<div class="pageUpButton">
    <a href="#">
        <img style="width: unset;height: unset" class="accommdationSvg" src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
    </a>
</div>
@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/food-drink.js') }}"></script>
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/food-drink.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
@endsection