@extends('frontend.tr.layouts.master')

@section('title', 'YEME & İÇME - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-food-drink') }}"
       aria-expanded="false">TR</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('food-drink') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-food-drink') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-food-drink') }}">DE</a></li>
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
                    <h1>Yeme & İçme</h1>
                    <p>Premium müşteriler premium<br> yiyecek ve içecekleri hak eder. </p>
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
            <a class="roomlink" href="{{ route('tr-bar-cafe') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/food-drink/barHero.webp') }}" alt="bars"/>
                </figure>
                <a href="{{ route('tr-bar-cafe') }}">Bar & Cafes</a>
            </a>
        </div>
        <div class="heroCard">
            <a class="roomlink" href="{{ route('tr-alacarte-restaurants') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/food-drink/alacarteHero.webp') }}" alt="alacarte"/>
                </figure>
                <a href="{{ route('tr-alacarte-restaurants') }}">A'La Carte</a>
            </a>
        </div>

        <div class="heroCard">
            <a class="roomlink" href="{{ route('tr-main-restaurant') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/food-drink/mainRestaurant.webp') }}" alt="mainRestaurant"/>
                </figure>
                <a href="{{ route('tr-main-restaurant') }}">Main Restaurant</a>
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
                <p>A'la Carte'larımız sıcacık atmosferi ile arkadaşlarla sohbet etmek ve lezzetli yemekler yemek için mükemmel bir mekandır.</p>
                <span>Mükemmelliği damak tadınıza göre şekillendirin.</span>
                <div class="moreButton">
                    <a href="{{ route('tr-alacarte-restaurants') }}">Daha Fazlası</a>
                </div>
            </article>
        </div>
    </div>
</div>

<div class="gastroSection">
    <div class="row reverse">
        <div class="col-12 col-md-12 col-lg-5">
            <article class="rightText">
                <h2>BARLAR & KAFELER</h2>
                <p>İster bir sabah kahvesi ister rahatlatıcı bir akşam içeceği arıyor olun, barlarımız ve kafelerimiz rahatlamak; arkadaşlarınız ve ailenizle kaliteli zaman geçirmek için mükemmel bir ortam sunar.</p>
                <span>Lezzetin ve ambiyansın mükemmel karışımını deneyimleyin.</span>
                <div class="moreButton">
                    <a href="{{ route('tr-bar-cafe') }}">Daha Fazlası</a>
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
                <h2>ANA RESTORAN</h2>
                <p>Şeflerimizin açık büfemizi oluşturmak için sadece en kaliteli ve en taze malzemeleri kullandığı ana restoranımızda unutulmaz bir mutfak deneyimi yaşayın. Ana menümüzde her damak tadına hitap edecek bir şeyler var. Bu restoranda asla sıkılmazsınız.</p>
                <span>En iyisini hak ediyorsunuz, en iyisini teklif ediyoruz.</span>
                <div class="moreButton">
                    <a href="{{ route('tr-main-restaurant') }}">Daha Fazlası</a>
                </div>
            </article>
        </div>
    </div>
</div>
<!-- Contact -->
@include('frontend.tr.layouts.contact')
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