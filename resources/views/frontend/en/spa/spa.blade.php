@extends('frontend.en.layouts.master')

@section('title', 'Spa & Wellness - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('spa') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('tr-spa') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-spa') }}">RU</a></li>
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
        <h1>Spa & Wellness</h1>
    </article>
</div>
<div class="spaHeaderText">
    <div class="hours">
        <img class="spaSvg" src="{{ asset('assets/frontend/images/clock.svg') }}" alt="clock"/>
        <span>09:00 - 19:00</span>
    </div>
    <p>Wide range of services, from massages and facials to hydrotherapy and aromatherapy, and are designed to create a luxurious and serene atmosphere for guests.</p>
</div>


<!-- First Slider -->
<div class="spaFirstSlider">
    <div class="swiper spaFirstSwiperSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/spa/Turkishbath.webp') }}" alt="TurkishBath"/>
                </figure>
                <h5>Turkish Bath</h5>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/spa/Steamroom.webp') }}" alt="Steamroom"/>
                </figure>
                <h5>Steam Room</h5>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/spa/Sauna.webp') }}" alt="Sauna"/>
                </figure>
                <h5>Sauna</h5>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/spa/Saltroom.webp') }}" alt="SaltRoom"/>
                </figure>
                <h5>Salt Room</h5>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/spa/Aromatherapy.webp') }}" alt="Aromatherapy"/>
                </figure>
                <h5>Aromatherapy</h5>
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
                        <h5>Skin & Body Care</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/spa/MedicalMassage.webp') }}" alt="MedicalMassage"/>
                        </figure>
                        <h5>Medical Massage</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/spa/SwedishMassage.webp') }}" alt="SwedishMassage"/>
                        </figure>
                        <h5>SWEDISH MASSAGE</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/spa/BalineseMassage.webp') }}" alt="BALINESE MASSAGE"/>
                        </figure>
                        <h5>BALINESE MASSAGE</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/spa/MixedMassage.webp') }}" alt="MixedMassage"/>
                        </figure>
                        <h5>Fitness</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/spa/MedicalMassage.webp') }}" alt="relaxmassage"/>
                        </figure>
                        <h5>Relax Massage</h5>
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
    <a class="roomlink" href="{{ route('indoor-pool') }}">
        <figure>
            <img src="{{ asset('assets/frontend/images/spa/IndoorPool.webp') }}" alt="IndoorPool"/>
        </figure>
        <article>
            <h3>Indoor Pool</h3>
            <div class="spaMoreButton">
                <a href="{{ route('indoor-pool') }}">More About</a>
            </div>
        </article>
    </a>
</div>
<!-- IndoorPool End -->
<!-- Contact -->
@include('frontend.en.layouts.contact')
<!-- Contact End -->

@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/spa.js') }}"></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/spa.css') }}"/>
@endsection