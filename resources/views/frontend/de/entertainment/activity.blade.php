@extends('frontend.de.layouts.master')

@section('title', 'Aktivitäten - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-activity') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('activity') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-activity') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-activity') }}">RU</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="activityHero">
    <div class="heroImage">
        <figure>
            <img src="{{ asset('assets/frontend/images/activity/activities.webp') }}" alt="activity"/>
        </figure>
    </div>
    <article>
        <h1>Aktivitäten</h1>
        <div class="heroIconGroup">
            <div class="heroIcons">
                <img class="activitySvg" src="{{ asset('assets/frontend/images/activity/opcocktail.svg') }}" alt="activity"/>
                <span>KOSTENLOSE GETRÄNKE</span>
            </div>
            <div class="heroIcons">
                <img class="activitySvg" src="{{ asset('assets/frontend/images/activity/opmusic.svg') }}" alt="activity"/>
                <span>LIVE MUSIK</span>
            </div>
            <div class="heroIcons">
                <img class="activitySvg" src="{{ asset('assets/frontend/images/activity/opartist.svg') }}" alt="activity"/>
                <span>BELIEBTE KÜNSTLER</span>
            </div>
            <div class="heroIcons">
                <img class="activitySvg" src="{{ asset('assets/frontend/images/activity/opdisco.svg') }}" alt="activity"/>
                <span>DISKO</span>
            </div>
        </div>
    </article>
</div>
<div class="activityHeaderText">
    <p>Spaß und Aktivitäten enden nie im Port Nature Luxury Resort & Spa. Bühnenshows, Lichtshows, Tag- und Nachtpartys, Konzerte, Aquapark, Beachvolleyball, Wassersport und mehr und mehr.</p>
</div>
<div class="line"></div>
<!-- First Slider -->
<div class="activityConcertSlider"><!-- ***** CLASS NAME CHANGED ****** -->
    <div class="swiper activityConcertSwiperSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/activity/concerts.webp') }}" alt="Concerts"/>
                    </figure>
                <h5>KONZERTE</h5>
            </div>
            <div class="swiper-slide">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/activity/daynight.webp') }}" alt="Day&NightParties"/>
                    </figure>
                    <h5>TAG & NACHTPARTEIEN</h5>
            </div>
            <div class="swiper-slide">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/activity/stageshows.webp') }}" alt="StageShows"/>
                    </figure>
                    <h5>BÜHNENSHOWS</h5>
            </div>
            <div class="swiper-slide">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/activity/lightshows.webp') }}" alt="LightShows"/>
                    </figure>
                    <h5>LICHTSHOWS</h5>
            </div>
            <div class="swiper-slide">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/activity/kidsshows.webp') }}" alt="KidsShows"/>
                    </figure>
                    <h5>KINDER-SHOWS</h5>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/activity/festivals.webp') }}" alt="Festivals"/>
                </figure>
                <h5>FESTE</h5>
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
<div class="activitySlider">

            <div class="swiper activitySwiper" dir="rtl">
                <div class="swiper-wrapper second-slider-wrapper">
                    <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/activity/beachvolley.webp') }}" alt="BeachVolley"/>
                            </figure>
                        <h5>BEACH-VOLLEYBALL</h5>
                    </div>
                    <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/activity/aquapark.webp') }}" alt="Aquapark"/>
                            </figure>
                        <h5>Aquapark</h5>
                    </div>
                    <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/activity/poolgames.webp') }}" alt="PoolGames"/>
                            </figure>
                        <h5>POOL-SPIELE</h5>

                    </div>
                    <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/activity/fitness.webp') }}" alt="Fitness"/>
                            </figure>
                        <h5>Fitness</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/activity/wateraerobics.webp') }}" alt="WaterAerobics"/>
                        </figure>
                        <h5>WASSERGYMNASTIK</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/activity/Darts.webp') }}" alt="darts"/>
                        </figure>
                        <h5>Darts</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/activity/Yoga.webp') }}" alt="yoga"/>
                        </figure>
                        <h5>Yoga</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/activity/TennisCourt.webp') }}" alt="tennis"/>
                        </figure>
                        <h5>TENNISPLATZ</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/activity/Tabletennis.webp') }}" alt="tabletennis"/>
                        </figure>
                        <h5>TISCHTENNIS</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/activity/Basketball.webp') }}" alt="Basketball"/>
                        </figure>
                        <h5>Basketball</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/activity/Minigolf.webp') }}" alt="minigolf"/>
                        </figure>
                        <h5>MINIGOLF</h5>
                    </div>
                </div>
                <div class="swiper-pagination-horizontal"></div>
                <div class="swiper-button-prev">
                    <img style="height: 27px;width: 13px" src="{{ asset('assets/frontend/images/swipergray-left.svg') }}" alt="swiper"/>
                </div>
                <div class="swiper-button-next">
                    <img style="height: 27px;width: 13px" src="{{ asset('assets/frontend/images/swipergray-right.svg') }}" alt="swiper"/>
                </div>
            </div>
        </div>

<!-- Second Slider End -->
<div class="aquapark">
    <a class="roomlink" href="{{ route('de-aquapark') }}">
        <figure>
            <img src="{{ asset('assets/frontend/images/kidsConcept/Aquapark.webp') }}" alt="Aquapark"/>
        </figure>
        <article>
            <h3>Aquapark</h3>
            <p>18 Rutsche  ·  Sicherheit für Ihr Kind</p>
            <div class="moreButton">
                <a href="{{ route('de-aquapark') }}">Mehr Uber</a>
            </div>
        </article>
    </a>
</div>
<!-- Aquapark End -->
<!-- Contact -->
@include('frontend.de.layouts.contact')
<!-- Contact End -->
<div class="otherEntertainment">
    <h3>Andere Aktivitäten</h3>
    <div class="entertainment otherEntertainmentSwiper swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
        <div class="entertainmentImg">
            <figure>
                <img src="{{ asset('assets/frontend/images/activity/entertainment.webp') }}" alt="concerts"/>

            </figure> <span>Konzert</span>
        </div></div>
        <div class="swiper-slide">
        <div class="entertainmentImg">
            <figure>
                <img src="{{ asset('assets/frontend/images/activity/entertainment-2.webp') }}" alt="specialguests"/>

            </figure><span>Ehrengast</span>
        </div></div>
        <div class="swiper-slide">
        <div class="entertainmentImg">
            <figure>
                <img src="{{ asset('assets/frontend/images/activity/entertainment-3.webp') }}" alt="show"/>

            </figure><span>Show</span>
        </div></div>
    </div>
    </div>
</div>
<!-- Page Up Button -->
<div style="text-align: center" class="pageUpButton">
    <a href="#">
        <img class="accommdationSvg" src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
    </a>
</div>

@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/activity.js') }}"></script><script src="{{ asset('assets/frontend/libs/js/lc_lightbox.lite.min.js') }}" defer></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/activity.css') }}"/><link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
@endsection