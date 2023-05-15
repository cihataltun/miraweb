@extends('frontend.en.layouts.master')

@section('title', 'Hennesy - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('hennessy-lounge') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('tr-hennessy-lounge') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-hennessy-lounge') }}">RU</a></li>
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
                <p>Cognac tradition. Craftmanship. Creativity.  Hennessy Cognac</p>
                <span>BORN 9 HENNESSY LOUNGE</span>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-hennesy" href="{{ asset('assets/frontend/images/hennesy/hennesy-2.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/hennesy/hennesy-2.webp') }}" alt="Hennesy"/>
                </figure>
            </a>
            <article>
                <p>Cognac tradition. Craftmanship. Creativity.  Hennessy Cognac</p>
                <span>BORN 9 HENNESSY LOUNGE</span>
            </article>

        </div>
        <div class="swiper-slide">
            <a class="lightbox-hennesy" href="{{ asset('assets/frontend/images/hennesy/hennesy-3.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/hennesy/hennesy-3.webp') }}" alt="Hennesy"/>
                </figure>
            </a>
            <article>
                <p>Cognac tradition. Craftmanship. Creativity.  Hennessy Cognac</p>
                <span>BORN 9 HENNESSY LOUNGE</span>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-hennesy" href="{{ asset('assets/frontend/images/hennesy/hennesy-4.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/hennesy/hennesy-4.webp') }}" alt="Hennesy"/>
                </figure>
            </a>
            <article>
                <p>Cognac tradition. Craftmanship. Creativity.  Hennessy Cognac</p>
                <span>BORN 9 HENNESSY LOUNGE</span>
            </article>
        </div>
    </div>
</div>

<div class="hennesyHeaderText">
    <figure>
        <img src="{{ asset('assets/frontend/images/hennesy/hennesyLogo.png') }}" alt="hennesy"/>
    </figure>
    <p>A timeless choice with an intensity all its own. Matured in new oak barrels, Hennessy V.S. is bold and fragrant. Its beguiling character is uniquely Hennessy.</p>
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
                        Two centuries of perfection in every sip - Experience the legacy.
                    </h2>
                    <p>Port Nature's Hennessy is a balanced cognac, expressing 200 years of Hennessy's know-how. The fruit of nature’s uncertainties, this unique blend has tamed the elements to craft of cognac. The emotion awakened by the pleasure of tasting it continually reveals new facets of its personality. 
                    </p>
                    <p>A cognac of remarkable consistency and vitality, Hennessy conveys all of the savoir-faire of the Hennessy master blenders who have ensured continued success for 200 years. </p>
                    <div class="hours">
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.5 22C17.299 22 22 17.299 22 11.5C22 5.70101 17.299 1 11.5 1C5.70101 1 1 5.70101 1 11.5C1 17.299 5.70101 22 11.5 22Z"
                                  stroke="#233038" stroke-opacity="0.8" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M11.5 5.19727V11.4973L15.7 13.5973" stroke="#233038" stroke-opacity="0.8"
                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>10:00 - 18:00</span>
                    </div>
                </article>
            </div>
        </div>
        <img class="coffeebg" src="{{ asset('assets/frontend/images/hennesy/hennesyBg.png') }}" alt="bg"/>
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
                <a class="roomlink" href="{{ route('chivas-lounge') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/scriptsmall.webp') }}" alt="chivas"/>
                    </figure>
                    <h5>Script Chivas</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('davidoff-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/Davidoffsmall.webp') }}" alt="davidoff"/>
                    </figure>
                    <h5>Davidoff Cafe</h5><div class="backgroundLines">
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
<script src="{{ asset('assets/frontend/js/hennesy.js') }}"></script>
<script src="{{ asset('assets/frontend/js/barDetail.js') }}"></script>
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/hennesy.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/css/barsSpecialOffer.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
@endsection