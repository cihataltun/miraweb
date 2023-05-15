@extends('frontend.ru.layouts.master')

@section('title', 'Born 9 Hennessy Lounge - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-hennessy-lounge') }}"
       aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('hennessy-lounge') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-hennessy-lounge') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('de-hennessy-lounge') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="hennesySlider">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a class="lightbox-hennesy" href="{{ asset('assets/frontend/images/hennesy/hennesy-1.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/hennesy/hennesy-1.webp') }}" alt="Hennesy"/>
                </figure>
            </a>
            <article>
                <p>Коньячная культура.<br> Мастерство.<br> Творчество.</p>
                <span>Коньяк Хеннесси</span>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-hennesy" href="{{ asset('assets/frontend/images/hennesy/hennesy-2.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/hennesy/hennesy-2.webp') }}" alt="Hennesy"/>
                </figure>
            </a>
            <article>
                <p>Коньячная культура.<br> Мастерство.<br> Творчество.</p>
                <span>Коньяк Хеннесси</span>
            </article>

        </div>
        <div class="swiper-slide">
            <a class="lightbox-hennesy" href="{{ asset('assets/frontend/images/hennesy/hennesy-3.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/hennesy/hennesy-3.webp') }}" alt="Hennesy"/>
                </figure>
            </a>
            <article>
                <p>Коньячная культура.<br> Мастерство.<br> Творчество.</p>
                <span>Коньяк Хеннесси</span>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-hennesy" href="{{ asset('assets/frontend/images/hennesy/hennesy-4.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/hennesy/hennesy-4.webp') }}" alt="Hennesy"/>
                </figure>
            </a>
            <article>
                <p>Коньячная культура.<br> Мастерство.<br> Творчество.</p>
                <span>Коньяк Хеннесси</span>
            </article>
        </div>
    </div>
</div>

<div class="hennesyHeaderText">
    <figure>
        <img src="{{ asset('assets/frontend/images/hennesy/hennesyLogo.png') }}" alt="hennesy"/>
    </figure>
    <p>Неподвластный времени выбор, обладающий собственной интенсивностью. Выдержанный в новых дубовых бочках, Hennessy V.S. получается насыщенным и ароматным. Притягательный характер Hennessy присущ исключительно Port Nature.</p>
</div>

<div class="container">
    <div class="hennesyText">
        <div class="row">
            <div class="col-lg-6">
                <div class="swiper hennesyVerticalSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/hennesy/hennesy.webp') }}" alt="hennesy"/>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <article>
                    <h2>
                        Два столетия совершенства в каждом глотке - ощутите наследие.
                    </h2>
                    <p>Коньяк Hennessy, обладающий замечательной консистенцией и жизненной силой, передает все мастерство мастеров-блендеров Hennessy, которые обеспечивают неизменный успех на протяжении 200 лет.</p>
                    <p>Эмоция, пробуждаемая удовольствием от его дегустации, постоянно раскрывает новые грани его индивидуальности. </p>
                    <div class="hours">
                        <img class="hennesySvg" src="{{ asset('assets/frontend/images/clock.svg') }}" alt="clock"/>
                        <span>10:00 - 18:00</span>
                    </div>
                </article>
            </div>
        </div>
        <img class="coffeebg" src="{{ asset('assets/frontend/images/hennesy/hennesyBg.png') }}" alt="bg"/>
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
                <a class="roomlink" href="{{ route('ru-chivas-lounge') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/scriptsmall.webp') }}" alt="chivas"/>
                    </figure>
                    <h5>Script Chivas Lounge</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('ru-davidoff-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/Davidoffsmall.webp') }}" alt="davidoff"/>
                    </figure>
                    <h5>DAVIDOFF Кафе</h5><div class="backgroundLines">
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
<script src="{{ asset('assets/frontend/js/hennesy.js') }}"></script>
<script src="{{ asset('assets/frontend/js/barDetail.js') }}"></script>
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/hennesy.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/css/barsSpecialOffer.css') }}"/><link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
@endsection