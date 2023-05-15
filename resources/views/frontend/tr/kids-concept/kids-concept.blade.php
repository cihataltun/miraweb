@extends('frontend.tr.layouts.master')

@section('title', 'Çocuk Konsepti - Portnature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-kids-concepts') }}"
       aria-expanded="false">TR</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('kids-concepts') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-kids-concepts') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-kids-concepts') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="childrenHero">
    <h1>ÇOCUK KONSEPTİ</h1>
</div>
<div class="childrenText">
    <div class="container">
        <span>Port Nature çocuk konseptli otel, özellikle çocukların ihtiyaç ve ilgi alanlarına yönelik aile dostu bir tesistir.<br> Oyun alanları, çocuk menüleri ve aktiviteler organize ediyoruz.</span>
    </div>
</div>
<div class="container">
    <div class="childrenDetailSpecs">
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/opchildrenalacarte.svg') }}" alt="kidsConcept"/>
            <p>Mini A'la Carte</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/opbabysitting.svg') }}" alt="kidsConcept"/>
            <p>BEBEK BAKICISI</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/opaquapark.svg') }}" alt="kidsConcept"/>
            <p>SU PARKI</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/opminidisco.svg') }}" alt="kidsConcept"/>
            <p>MİNİ DİSKO</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/opcourses.svg') }}" alt="kidsConcept"/>
            <p>ÖZEL KURSLAR</p>
        </div>
    </div>
</div>
<!-- First Slider -->
<div class="childrenActivitySlider">
    <div class="swiper activitySlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-1.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-1.webp') }}" alt="activities"/><span>18 Kaydırak  ·  Su ve Eğlence</span>
                    </figure>
                </a>
                <h5>Su Parkı</h5>
                <p>Port Nature aquaparkı su sporları, devasa kaydıraklar ve 4 havuzu ile sadece eğlence içerir. </p>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-2.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-2.webp') }}" alt="activities"/><span>Çocuk A'la Carte  · Çocuk İçin Yemekler</span>
                    </figure>
                    <h5>MINI CLUB</h5>
                    <p>Çocuğunuz, çocuklara özel hazırlanmış menülerden kendi yiyeceklerini seçebilir.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-3.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-3.webp') }}" alt="activities"/><span>Eğlence Makineleri · Herkes İçin Oyun</span>
                    </figure>
                    <h5>OYUN MAKİNELERİ</h5>
                    <p>Oyun makineleri herkes için harika bir eğlence şekli sunuyor.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-4.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-4.webp') }}" alt="activities"/><span>Bebek Bakıcısı  ·  Bebek Bakıcısı</span>
                    </figure>
                    <h5>BEBEK BAKIM HİZMETİ</h5>
                    <p>Bebek bakıcılığı hizmetleri, ebeveynlerin iç huzuru için güvenli ve kontrollü bir alan sağlar.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-5.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-5.webp') }}" alt="activities"/><span>Çocuklar her zaman sever  ·  Güven ve heyecan</span>
                    </figure>
                    <h5>ATLAMA PİSTİ</h5>
                    <p>Tüm malzemeler yumuşak ve güvenlidir. Çocuğunuz parkurumuzda zarar görmez.</p>
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
<!-- First Slider End -->
<!-- Second Slider -->
<div class="foodSliderWrapper">
            <div class="swiper childrenFoodSlider" dir="rtl">

                <div class="swiper-wrapper second-slider-wrapper">
                    <div class="swiper-slide">
                        <a class="lightbox-food" href="{{ asset('assets/frontend/images/kidsConcept/foodSlider-1.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/kidsConcept/foodSlider-1.webp') }}" alt="food"/>
                                <span>Sertifikalı Mamalar</span>
                            </figure>
                        </a>
                        <h5>BEBEK MAMASI</h5>
                        <p>Port Nature, taze ve sağlıklı ürünlerle hazırlanmış bebek mamaları servis eder.</p>
                    </div>
                    <div class="swiper-slide">
                        <a class="lightbox-food" href="{{ asset('assets/frontend/images/kidsConcept/foodSlider-2.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/kidsConcept/foodSlider-2.webp') }}" alt="food"/>
                                <span>Serin Fikir</span>
                            </figure>
                        </a>
                        <h5>PREMIUM DONDURMA</h5>
                        <p>Sahilde dinlenirken ve hava sıcakken dondurma serin bir fikir olur.</p>
                    </div>
                    <div class="swiper-slide">
                        <a class="lightbox-food" href="{{ asset('assets/frontend/images/kidsConcept/foodSlider-3.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/kidsConcept/foodSlider-3.webp') }}"
                                     alt="food"/><span>En Taze Mamalar</span>
                            </figure>
                        </a>
                        <h5>TAZE BEBEK MAMASI</h5>
                        <p>Taze ve sağlıklı ürünler.<br> Günlük ve taze...</p>
                    </div>
                    <div class="swiper-slide">
                        <a class="lightbox-food" href="{{ asset('assets/frontend/images/kidsConcept/foodSlider-4.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/kidsConcept/foodSlider-4.webp') }}"
                                     alt="food"/><span>Günlük ve Taze</span>
                            </figure>
                        </a>
                        <h5>DOĞAL MEYVE SULARI</h5>
                        <p>Doğal meyve suları harika bir vitamin, mineral ve antioksidan kaynağıdır. Sizin için her gün.</p>
                    </div>
                    <div class="swiper-slide">
                        <a class="lightbox-food" href="{{ asset('assets/frontend/images/kidsConcept/foodSlider-5.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/kidsConcept/foodSlider-5.webp') }}" alt="food"/><span>Taze süt ve nefis kuru yemişler.</span>
                            </figure>
                        </a>
                        <h5>SÜTLÜ BEBEK MAMASI</h5>
                        <p>Port Nature'ın şefleri, çocuğunuz için her zaman organik, taze ve sağlıklı süt ürünleri kullanır.</p>
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
    </div>
      
<!-- Second Slider End -->


<!-- Banner -->
<div id="childrenCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" >
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a class="lightbox-carousel" href="{{ asset('assets/frontend/images/kidsConcept/Aquapark.webp') }}">
                <figure>
                    <img src='{{ asset('assets/frontend/images/kidsConcept/Aquapark.webp') }}' class="d-block w-100" alt="aquapark">
                </figure>
            </a>
            <h5>Aquapark</h5>
            <p>18 Kaydırak · Çocuklarınız için güvenli</p>
        </div>
        <div class="carousel-item">
            <a class="lightbox-carousel" href="{{ asset('assets/frontend/images/kidsConcept/minialacarte.webp') }}">
                <figure>
                    <img src='{{ asset('assets/frontend/images/kidsConcept/minialacarte.webp') }}' class="d-block w-100" alt="minialacarte">

                </figure>
            </a>
            <h5>Mini A’La Carte</h5>
            <p>Çocuğunuz için sağlıklı beslenme.</p>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#childrenCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#childrenCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Banner End -->
<!-- Contact -->
@include('frontend.tr.layouts.contact')
<!-- Contact End -->
<!-- Special Courses -->
<div class="kidsSpecialOffer">
    <h6>Özel Kurslar</h6>
    <div class="swiper specialOfferSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kidsConcept/courses-1.webp') }}" alt="courses"/>
                </figure>
                <article>
                    <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/swimmingicon.svg') }}" alt="course"/>
                    <p>Yüzme Dersleri</p>
                    <span>Çocuğunuz güvenle yüzecek.</span>
                </article>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kidsConcept/courses-2.webp') }}" alt="courses"/>
                </figure>
                <article>
                    <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/danceicon.svg') }}" alt="course"/>
                    <p>Dans Dersleri</p>
                    <span>Dans işini bu yaz aradan çıkarın.</span>
                </article>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kidsConcept/courses-3.webp') }}" alt="courses"/>
                </figure>
                <article>
                    <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/tennisicon.svg') }}" alt="course"/>
                    <p>Tenis Dersleri</p>
                    <span>Çocuğunuz için premium sporlar.</span>
                </article>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kidsConcept/courses-4.webp') }}" alt="courses"/>
                </figure>
                <article>

                    <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/swimmingicon.svg') }}" alt="course"/>
                    <p>Futbol Dersleri</p>
                    <span>Futbol her zaman iyi bir fikirdir.</span>
                </article>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev">
            <img class="specialSvg" src="{{ asset('assets/frontend/images/swipergray-left.svg') }}" alt="swiper"/>

        </div>
        <div class="swiper-button-next">
            <img class="specialSvg" src="{{ asset('assets/frontend/images/swipergray-right.svg') }}" alt="swiper"/>

        </div>
    </div>
</div>
<!-- Special Courses End -->

<div class="pageUpButton">
    <a href="#">
        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
    </a>
</div>

@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
<script src="{{ asset('assets/frontend/js/kids.js') }}"></script>
<script type='text/javascript'>
    $(document).ready(function () {
        const $obj = lc_lightbox('.lc-children a');
    });
</script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/libs/skins/light.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/frontend/css/kidsconcept.css') }}"/>
@endsection