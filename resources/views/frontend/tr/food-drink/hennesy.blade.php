@extends('frontend.tr.layouts.master')

@section('title', 'Born 9 Hennessy Lounge - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-hennessy-lounge') }}"
       aria-expanded="false">TR</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('hennessy-lounge') }}">EN</a></li>
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
                <p>Konyak geleneği.<br>Yaratıcılık.<br>İşçilik.</p>
                <span>Hennessy Konyak</span>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-hennesy" href="{{ asset('assets/frontend/images/hennesy/hennesy-2.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/hennesy/hennesy-2.webp') }}" alt="Hennesy"/>
                </figure>
            </a>
            <article>
                <p>Konyak geleneği.<br>Yaratıcılık.<br>İşçilik.</p>
                <span>Hennessy Konyak</span>
            </article>

        </div>
        <div class="swiper-slide">
            <a class="lightbox-hennesy" href="{{ asset('assets/frontend/images/hennesy/hennesy-3.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/hennesy/hennesy-3.webp') }}" alt="Hennesy"/>
                </figure>
            </a>
            <article>
                <p>Konyak geleneği.<br>Yaratıcılık.<br>İşçilik.</p>
                <span>Hennessy Konyak</span>
            </article>
        </div>
        <div class="swiper-slide">
            <a class="lightbox-hennesy" href="{{ asset('assets/frontend/images/hennesy/hennesy-4.webp') }}">
                <figure>
                    <img src="{{ asset('assets/frontend/images/hennesy/hennesy-4.webp') }}" alt="Hennesy"/>
                </figure>
            </a>
            <article>
                <p>Konyak geleneği.<br>Yaratıcılık.<br>İşçilik.</p>
                <span>Hennessy Konyak</span>
            </article>
        </div>
    </div>
</div>

<div class="hennesyHeaderText">
    <figure>
        <img src="{{ asset('assets/frontend/images/hennesy/hennesyLogo.png') }}" alt="hennesy"/>
    </figure>
    <p>Kendine özgü bir yoğunluğa sahip zamansız bir seçim. Yeni meşe fıçılarda olgunlaştırılan Hennessy V.S, iddialı, mis kokulu, ve aldatıcı karakteri ile benzersiz bir şekilde Hennessy'dir.</p>
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
                        Her yudumda iki asırlık mükemmellik. Mirası yaşayın.
                    </h2>
                    <p>Port Nature’daki Hennessy, Hennessy'nin 200 yıllık bilgi birikimini ifade eden dengeli bir konyaktır. Doğanın bilinmezliklerinin meyvesi olan bu eşsiz karışım, konyak zanaatının unsurlarını ehlileştirir. Onu tatmanın hazzıyla uyandırılan duygu, sürekli olarak kişiliğinin yeni yönlerini ortaya çıkarır.</p>
                    <p>Olağanüstü tutarlılık ve canlılığa sahip bir konyak olan Hennessy, 200 yıldır devam eden başarıyı sağlayan Hennessy usta harmancılarının tüm hünerlerini aktarıyor.</p>
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
@include('frontend.tr.layouts.contact')
<!-- Contact End -->
<!-- Special Offer -->
<div class="barSpecialOffer">
    <h6>Diğer Kafeler & Barlar</h6>
    <div class="swiper barSpecialOfferSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="roomlink" href="{{ route('tr-kitkat-cafe') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/specialOffersBars/KitKatsmall.webp') }}" alt="kitkat"/>
                    </figure>
                    <h5>Kit Kat</h5><div class="backgroundLines">
                        <img class="radialBgImg" src="{{ asset('assets/frontend/images/radialBg.svg') }}" alt="radialBg">
                    </div>
                </a>
            </div>
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