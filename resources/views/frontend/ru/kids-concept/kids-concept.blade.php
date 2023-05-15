@extends('frontend.ru.layouts.master')

@section('title', 'Kids Concept - Portnature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-kids-concepts') }}"
       aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('kids-concepts') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-kids-concepts') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('de-kids-concepts') }}">DE</a></li>
    </ul>
</li>

@endsection


@section('content')

<div class="childrenHero">
    <h1>Детский Концепт</h1>
</div>
<div class="childrenText">
    <div class="container">
        <span>Отель Port Nature - это семейное заведение с детской концепцией, созданное специально для удовлетворения потребностей и интересов детей. Мы предоставляем игровые площадки, детское меню и организованные мероприятия.</span>
    </div>
</div>
<div class="container">
    <div class="childrenDetailSpecs">
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/opchildrenalacarte.svg') }}" alt="kidsConcept"/>
            <p>Мини A'la Carte</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/opbabysitting.svg') }}" alt="kidsConcept"/>
            <p>Услуги няни</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/opaquapark.svg') }}" alt="kidsConcept"/>
            <p>Аквапарк</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/opminidisco.svg') }}" alt="kidsConcept"/>
            <p>Мини Дискотека</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/opcourses.svg') }}" alt="kidsConcept"/>
            <p>Спец. Курсы</p>
        </div>
    </div>
</div>
<!-- First Slider -->
<!-- ************TOOK SPAN INTO THE IMG*********** -->
<div class="childrenActivitySlider">
    <div class="swiper activitySlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-1.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-1.webp') }}" alt="activities"/><span>18 горок  ·  Вода и веселье</span>
                    </figure>
                </a>
                <h5>Аквапарк</h5>
                <p>Водные виды спорта, гигантские водные горки и 4 бассейна, полные развлечениями.</p>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-2.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-2.webp') }}" alt="activities"/><span>Детский A'la Carte  · Еда для детей</span>
                    </figure>
                    <h5>Мини клуб</h5>
                    <p>Ваш ребенок выбирает сам с помощью нашего эксклюзивного детского меню.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-3.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-3.webp') }}" alt="activities"/><span>Забавные машины · Игра для всех</span>
                    </figure>
                    <h5>Игровые автоматы</h5>
                    <p>Возможность полностью погрузиться в игровую атмосферу.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-4.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-4.webp') }}" alt="activities"/><span>Няни для детей  ·  Уход за ребенком</span>
                    </figure>
                    <h5>Услуги няни</h5>
                    <p>Надежный и безопасный вариант, пока родители находятся вдали от своих детей.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-5.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-5.webp') }}" alt="activities"/><span>Детям всегда понравится  ·  Безопасность и восторг</span>
                    </figure>
                    <h5>Детская площадка</h5>
                    <p>Все материалы мягкие и безопасные. Наши горки не повредит вашему ребенку.</p>
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
                                <span>Сертифицированные продукты питания</span>
                            </figure>
                        </a>
                        <h5>Детское питание</h5>
                        <p>Port Nature предлагает свежие и полезные блюда для детей.</p>
                    </div>
                    <div class="swiper-slide">
                        <a class="lightbox-food" href="{{ asset('assets/frontend/images/kidsConcept/foodSlider-2.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/kidsConcept/foodSlider-2.webp') }}" alt="food"/>
                                <span>Классная идея</span>
                            </figure>
                        </a>
                        <h5>Мороженое премиум-класса</h5>
                        <p>Мороженое - отличная идея, отдыхая на пляже в жаркой погоде.</p>
                    </div>
                    <div class="swiper-slide">
                        <a class="lightbox-food" href="{{ asset('assets/frontend/images/kidsConcept/foodSlider-3.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/kidsConcept/foodSlider-3.webp') }}"
                                     alt="food"/><span>Самая свежая еда</span>
                            </figure>
                        </a>
                        <h5>Детская свежая пища</h5>
                        <p>Свежие и полезные продукты каждый день специально для детей.</p>
                    </div>
                    <div class="swiper-slide">
                        <a class="lightbox-food" href="{{ asset('assets/frontend/images/kidsConcept/foodSlider-4.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/kidsConcept/foodSlider-4.webp') }}"
                                     alt="food"/><span>Ежедневные и свежие</span>
                            </figure>
                        </a>
                        <h5>Натуральные фруктовые соки</h5>
                        <p>Каждый день для вас с витаминами, минералами и антиоксидантами.</p>
                    </div>
                    <div class="swiper-slide">
                        <a class="lightbox-food" href="{{ asset('assets/frontend/images/kidsConcept/foodSlider-5.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/kidsConcept/foodSlider-5.webp') }}" alt="food"/><span>Свежее молоко и вкусные сушеные орехи</span>
                            </figure>
                        </a>
                        <h5>Детское молочное питание</h5>
                        <p>В Port Nature всегда используют органические, свежие и полезные молочные блюда.</p>
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
<div id="childrenCarousel" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a class="lightbox-carousel" href="{{ asset('assets/frontend/images/kidsConcept/Aquapark.webp') }}">
                <figure>
                    <img src='{{ asset('assets/frontend/images/kidsConcept/Aquapark.webp') }}' class="d-block w-100" alt="aquapark">
                </figure>
            </a>
            <h5>Аквапарк</h5>
            <p>18 водных горок · Безопасность для детей</p>
        </div>
        <div class="carousel-item">
            <a class="lightbox-carousel" href="{{ asset('assets/frontend/images/kidsConcept/minialacarte.webp') }}">
                <figure>
                    <img src='{{ asset('assets/frontend/images/kidsConcept/minialacarte.webp') }}' class="d-block w-100" alt="minialacarte">

                </figure>
            </a>
            <h5>Мини A'la Carte</h5>
            <p>Здоровое питание для детей</p>
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
@include('frontend.ru.layouts.contact')
<!-- Contact End -->
<!-- Special Courses -->
<div class="kidsSpecialOffer">
    <h6>Специальные курсы</h6>
    <div class="swiper specialOfferSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kidsConcept/courses-1.webp') }}" alt="courses"/>
                </figure>
                <article>
                    <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/swimmingicon.svg') }}" alt="course"/>
                    <p>Курсы плавания</p>
                    <span>Безопасное плавание для вашего ребенка</span>
                </article>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kidsConcept/courses-2.webp') }}" alt="courses"/>
                </figure>
                <article>
                    <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/danceicon.svg') }}" alt="course"/>
                    <p>Танцевальные курсы</p>
                    <span>Лучший бокс этим летом</span>
                </article>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kidsConcept/courses-3.webp') }}" alt="courses"/>
                </figure>
                <article>
                    <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/tennisicon.svg') }}" alt="course"/>
                    <p>Курсы по теннису</p>
                    <span>Спорт премиум-класса для вашего ребенка</span>
                </article>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kidsConcept/courses-4.webp') }}" alt="courses"/>
                </figure>
                <article>

                    <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/swimmingicon.svg') }}" alt="course"/>
                    <p>Футбольные курсы</p>
                    <span>Футбол - лучший выбор этим летом</span>
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