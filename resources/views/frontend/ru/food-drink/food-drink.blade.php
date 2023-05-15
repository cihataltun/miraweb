@extends('frontend.ru.layouts.master')

@section('title', 'Еда & Напитки - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-food-drink') }}"
       aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('food-drink') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-food-drink') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('de-food-drink') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<!-- Top Slider -->
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
                    <h1>Еда & Напитки</h1>
                    <p>Вкусы премиум-класса для гостей премиум-класса.</p>
                </article>
            </figure>
        </div>
        <div class="swiper-slide">
            <figure>
                <img src="{{ asset('assets/frontend/images/food-drink/foodDrinkSlider-4.webp') }}" alt="food&drink"/>
            </figure>
        </div>
        <div class="swiper-slide">
            <figure>
                <img src="{{ asset('assets/frontend/images/food-drink/foodDrinkSlider-2.webp') }}" alt="food&drink"/>
            </figure>
        </div>
    </div>
</div>
<!-- Hero Part -->
<div class="foodDrinkHero">
    <div class="firstRow">
        <div class="heroCard">
            <a class="roomlink" href="{{ route('ru-bar-cafe') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/food-drink/barHero.webp') }}" alt="bars"/>
                </figure>
                <a href="{{ route('ru-bar-cafe') }}">Бары & Кафе</a>
            </a>
        </div>
        <div class="heroCard">
            <a class="roomlink" href="{{ route('ru-alacarte-restaurants') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/food-drink/alacarteHero.webp') }}" alt="alacarte"/>
                </figure>
                <a href="{{ route('ru-alacarte-restaurants') }}">A'La Carte</a>
            </a>
        </div>

        <div class="heroCard">
            <a class="roomlink" href="{{ route('ru-main-restaurant') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/food-drink/mainRestaurant.webp') }}" alt="mainRestaurant"/>
                </figure>
                <a href="{{ route('ru-main-restaurant') }}">Главный ресторан</a>
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
                <p>Гостеприимная атмосфера в уютных ресторанах A'la Carte - идеальные места, чтобы насладиться блюдами в кругу близких.</p>
                <span>Вкусное наслаждение</span>
                <div class="moreButton">
                    <a href="{{ route('ru-alacarte-restaurants') }}">Подробнее</a>
                </div>
            </article>
        </div>
    </div>
</div>

<div class="gastroSection">
    <div class="row reverse">
        <div class="col-12 col-md-12 col-lg-5">
            <article class="rightText">
                <h2>Бары & Кафе</h2>
                <p>Независимо от того, ищете ли вы утренний кофе или расслабляющий вечерний напиток, наши бары и кафе предлагают идеальную атмосферу для того, чтобы приятно провести время с приятной компании.</p>
                <span>Идеальное сочетание вкусов и атмосферы</span>
                <div class="moreButton">
                    <a href="{{ route('ru-bar-cafe') }}">Подробнее</a>
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
                <h2>Главный ресторан</h2>
                <p>Насладитесь незабываемыми впечатлениями в нашем главном ресторане, где наши повара используют только самые лучшие и свежие ингредиенты для приготовления блюд самых разных категорий. В нашем главном ресторане найдется все на любой вкус.</p>
                <span>Вы заслуживаете лучшего. Мы предлагаем лучшее…</span>
                <div class="moreButton">
                    <a href="{{ route('ru-main-restaurant') }}">Подробнее</a>
                </div>
            </article>
        </div>
    </div>
</div>

<!-- Contact -->
@include('frontend.ru.layouts.contact')
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