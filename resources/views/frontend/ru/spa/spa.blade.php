@extends('frontend.ru.layouts.master')

@section('title', 'Spa & Wellness - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-spa') }}"
       aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('spa') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-spa') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('de-spa') }}">DE</a></li>
    </ul>
</li>

@endsection


@section('content')

<div class="spaHero">
    <div class="heroImage">
        <figure>
            <img src="{{ asset('assets/frontend/images/spa/Spa.webp') }}" alt="spa&wellness"/>
        </figure>
    </div>
    <article>
        <img class="spaSvg" src="{{ asset('assets/frontend/images/spa/spaicon.svg') }}" alt="spa"/>
        <h1>Спа & Велнес</h1>
    </article>
</div>
<div class="spaHeaderText">
    <div class="hours">
        <img class="spaSvg" src="{{ asset('assets/frontend/images/clock.svg') }}" alt="clock"/>
        <span>09:00 - 19:00</span>
    </div>
    <p>Широкий спектр услуг, от массажа и процедур по уходу за лицом до гидротерапии и ароматерапии ждет вас в нашем спа с роскошной и безмятежной атмосферой.</p>
</div>


<!-- First Slider -->
<div class="spaFirstSlider">
    <div class="swiper spaFirstSwiperSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/spa/Turkishbath.webp') }}" alt="TurkishBath"/>
                </figure>
                <h5>Турецкая баня</h5>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/spa/Steamroom.webp') }}" alt="Steamroom"/>
                </figure>
                <h5>Парилка</h5>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/spa/Sauna.webp') }}" alt="Sauna"/>
                </figure>
                <h5>Сауна</h5>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/spa/Saltroom.webp') }}" alt="SaltRoom"/>
                </figure>
                <h5>Соляная комната</h5>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/spa/Aromatherapy.webp') }}" alt="Aromatherapy"/>
                </figure>
                <h5>Ароматерапия</h5>
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
<!-- First Slider End -->
<!-- Second Slider -->
<div class="spaSecondSlider">

            <div class="swiper spaSecondSwiperSlider" dir="rtl">
                <div class="swiper-wrapper second-slider-wrapper">
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/spa/SkinBodycare.webp') }}" alt="skin&bodycare"/>
                        </figure>
                        <h5>Уход за кожей и телом</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/spa/MedicalMassage.webp') }}" alt="MedicalMassage"/>
                        </figure>
                        <h5>Медицинский массаж</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/spa/SwedishMassage.webp') }}" alt="SwedishMassage"/>
                        </figure>
                        <h5>Шведский массаж</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/spa/BalineseMassage.webp') }}" alt="BALINESE MASSAGE"/>
                        </figure>
                        <h5>Балийский массаж</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/spa/MixedMassage.webp') }}" alt="MixedMassage"/>
                        </figure>
                        <h5>Смешанный массаж</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/spa/MedicalMassage.webp') }}" alt="relaxmassage"/>
                        </figure>
                        <h5>Расслабляющий массаж</h5>
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
<!-- Second Slider End -->
<div class="indoorPool">
    <a class="roomlink" href="{{ route('ru-indoor-pool') }}">
        <figure>
            <img src="{{ asset('assets/frontend/images/spa/IndoorPool.webp') }}" alt="IndoorPool"/>
        </figure>
        <article>
            <h3>Крытый бассейн</h3>
            <div class="spaMoreButton">
                <a href="{{ route('ru-indoor-pool') }}">Подробнее</a>
            </div>
        </article>
    </a>
</div>
<!-- IndoorPool End -->
<!-- Contact -->
@include('frontend.ru.layouts.contact')
<!-- Contact End -->

@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/spa.js') }}"></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/spa.css') }}"/>
@endsection