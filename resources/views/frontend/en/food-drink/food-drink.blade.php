@extends('frontend.en.layouts.master')

@section('title', 'Food & Drink - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('food-drink') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('tr-food-drink') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-food-drink') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-food-drink') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="swiper topSlider">
    <article>
        <h1>Food & Drink</h1>
        <p>Premium guests deserve premium <br> food and drinks.</p>
    </article>
    <div class="swiper-wrapper top-swiper-wrapper">
        <div class="swiper-slide">
            <figure>
                <img src="{{ asset('assets/frontend/images/food-drink/foodDrinkSlider-3.webp') }}" alt="food&drink"/>
            </figure>
        </div>
        <div class="swiper-slide">
            <figure>
                <img src="{{ asset('assets/frontend/images/food-drink/foodDrinkSlider-1.webp') }}" alt="food&drink"/>

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
            <a class="roomlink" href="{{ route('bar-cafe') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/food-drink/barHero.webp') }}" alt="bars"/>
                </figure>
                <a href="{{ route('bar-cafe') }}">Bar & Cafes</a>
            </a>
        </div>
        <div class="heroCard">
            <a class="roomlink" href="{{ route('alacarte-restaurants') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/food-drink/alacarteHero.webp') }}" alt="alacarte"/>
                </figure>
                <a href="{{ route('alacarte-restaurants') }}">A'La Carte</a>
            </a>
        </div>

        <div class="heroCard">
            <a class="roomlink" href="{{ route('main-restaurant') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/food-drink/mainRestaurant.webp') }}" alt="mainRestaurant"/>
                </figure>
                <a href="{{ route('main-restaurant') }}">Main Restaurant</a>
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
                <p>Welcoming atmosphere with a cozy our A'la Cartes are the perfect spot to catch up with friends and delicious food.</p>
                <span>Shape perfection to your palatal delight</span>
                <div class="moreButton">
                    <a href="{{ route('alacarte-restaurants') }}">More About</a>
                </div>
            </article>
        </div>
    </div>
</div>

<div class="gastroSection">
    <div class="row reverse">
        <div class="col-12 col-md-12 col-lg-5">
            <article class="rightText">
                <h2>Bars & Cafes</h2>
                <p>Whether you're looking for a morning coffee or a relaxing evening drink, our bars and cafes offer the perfect ambiance to unwind and enjoy some quality time with friends and family.</p>
                <span>Experience the perfect blend of flavors and ambiance</span>
                <div class="moreButton">
                    <a href="{{ route('bar-cafe') }}">More About</a>
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
                <h2>Main Restaurant</h2>
                <p>Indulge in an unforgettable culinary experience at our main restaurant, where our chefs use only the finest, freshest ingredients to create our open buffet. Our main menu has something to satisfy every palate. You never boring this restaurant.</p>
                <span>You deserve the best! We offer the best…</span>
                <div class="moreButton">
                    <a href="{{ route('main-restaurant') }}">More About</a>
                </div>
            </article>
        </div>
    </div>
</div>

<!-- Contact -->
@include('frontend.en.layouts.contact')
<!-- Contact End -->

@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/food-drink.js') }}"></script>
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/food-drink.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
@endsection