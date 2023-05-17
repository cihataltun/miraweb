@extends('frontend.tr.layouts.master')

@section('title', 'KitKat Kafe - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-kitkat-cafe') }}"
       aria-expanded="false">TR</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('kitkat-cafe') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-kitkat-cafe') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-kitkat-cafe') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="kitkatSlider">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a class="lightbox-kitkat" href="{{ asset('assets/frontend/images/kitkat/kitkatSlider-2.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kitkat/kitkatSlider-2.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Çıtır gofret yapraklarını çevreleyen<br> gerçek çikolata</p>
                <span>BENZERSİZ KIT KAT'I DENE</span>
            </article>

        </div>
        <div class="swiper-slide">
            <a class="lightbox-kitkat" href="{{ asset('assets/frontend/images/kitkat/kitkatSlider-3.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kitkat/kitkatSlider-3.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Çıtır gofret yapraklarını çevreleyen<br> gerçek çikolata</p>
                <span>BENZERSİZ KIT KAT'I DENE</span>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-kitkat" href="{{ asset('assets/frontend/images/kitkat/kitkatSlider-4.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kitkat/kitkatSlider-4.webp') }}" alt="coffee"/>
                </figure>
            </a>
            <article>
                <p>Çıtır gofret yapraklarını çevreleyen<br> gerçek çikolata</p>
                <span>BENZERSİZ KIT KAT'I DENE</span>
            </article>
        </div>
    </div>
</div>

<div class="kitkatHeaderText">
    <figure>
        <img src="{{ asset('assets/frontend/images/kitkat/kitkatLogo.png') }}" alt="davidoff"/>
    </figure>
    <p>Bir ara ver, bir kit Kat al

        Harika çikolata yapmak için harika kakaoya ihtiyacınız var.

        Port Nature Luxury'de daha iyi çikolata, daha iyi yaşamlar.</p>
</div>

<div class="container">
    <div class="kitkatText">
        <div class="row">
            <div class="col-lg-6">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kitkat/kitkat.webp') }}" alt="kitkat"/>
                </figure>
            </div>
            <div class="col-lg-6">
                <article>
                    <h2>
                        Çikolata ve gofretin mükemmel dengesi. İkonik marka Port Nature'da
                    </h2>
                    <p>Klasik KitKat’tan kare KitKat’a, kareden orijinal yer fıstığı ezmeliye herkes için bir KitKat var. </p>
                    <p>KitKat, Nestlé Kakao tasarımı ve Rainforest Alliance sertifikasıyla %100 sürdürülebilir kaynaklı kakao kullanan ilk küresel çikolata markasıdır. Yani duraklamamak ve bir molanın tadını çıkarmamak için hiçbir sebep yok.</p>
                </article>
            </div>
        </div>
        <img class="coffeebg" src="{{ asset('assets/frontend/images/kitkat/kitkatBg.png') }}" alt="bg"/>
    </div>
</div>

<!-- Contact -->
@include('frontend.tr.layouts.contact')
<!-- Contact End -->
<!-- Special Offer -->
<div class="barSpecialOffer">
    <h6>Diğer Kafeler & Barlar</h6>
    <div class="swiper barSpecialOfferSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('tr-chivas-lounge') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/scriptsmall.webp') }}" alt="chivas"/>
                    </figure>
                    <h5>Script Chivas Lounge</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('tr-hennessy-lounge') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/born9small.webp') }}" alt="BORN 9 HENNESSY"/>
                    </figure>
                    <h5>BORN 9 HENNESSY LOUNGE</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('tr-davidoff-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/Davidoffsmall.webp') }}" alt="davidoff"/>
                    </figure>
                    <h5>Davidoff Kafe</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('tr-nespresso-cafe') }}">
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
<!-- Page Up -->
<div style="text-align: center;" class="pageUpButton">
    <a href="#">
        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
    </a>
</div>

@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/kitkat.js') }}"></script>
<script src="{{ asset('assets/frontend/js/barDetail.js') }}"></script>
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/kitkat.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/css/barsSpecialOffer.css') }}"/><link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
@endsection