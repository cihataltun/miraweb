@extends('frontend.en.layouts.master')

@section('title', 'Activity - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('activity') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item" href="{{ route('tr-activity') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-activity') }}">RU</a></li>
        <li><a class="dropdown-item first-item" href="{{ route('de-activity') }}">DE</a></li>
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
        <h1>Activities</h1>
        <div class="heroIconGroup">
            <div class="heroIcons">
                <img class="activitySvg" src="{{ asset('assets/frontend/images/activity/opcocktail.svg') }}" alt="activity"/>
                <span>Free Drinks</span>
            </div>
            <div class="heroIcons">
                <img class="activitySvg" src="{{ asset('assets/frontend/images/activity/opmusic.svg') }}" alt="activity"/>

                <span>Live Music</span>
            </div>
            <div class="heroIcons">
                <img class="activitySvg" src="{{ asset('assets/frontend/images/activity/opartist.svg') }}" alt="activity"/>

                <span>Popular Artists</span>
            </div>
            <div class="heroIcons">
                <img class="activitySvg" src="{{ asset('assets/frontend/images/activity/opdisco.svg') }}" alt="activity"/>
                <span>Disco</span>
            </div>
        </div>
    </article>
</div>
<div class="activityHeaderText">
    <p>Fun and activities never end in Port Nature Luxury Resort & Spa. Stage shows, Light shows, Day & night parties, concerts, aquapark, beach volley, water sports and more and more.</p>
</div>
<div class="line"></div>
<!-- First Slider -->
<div class="activityConcertSlider">
    <div class="swiper activityConcertSwiperSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/activity/concerts.webp') }}" alt="Concerts"/>
                    </figure>
                <h5>Concerts</h5>
            </div>
            <div class="swiper-slide">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/activity/daynight.webp') }}" alt="Day&NightParties"/>
                    </figure>
                    <h5>Day & Night Parties</h5>
            </div>
            <div class="swiper-slide">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/activity/stageshows.webp') }}" alt="StageShows"/>
                    </figure>
                    <h5>Stage Shows</h5>
            </div>
            <div class="swiper-slide">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/activity/lightshows.webp') }}" alt="LightShows"/>
                    </figure>
                    <h5>Light Shows</h5>
            </div>
            <div class="swiper-slide">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/activity/kidsshows.webp') }}" alt="KidsShows"/>
                    </figure>
                    <h5>Kids Shows</h5>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/activity/festivals.webp') }}" alt="Festivals"/>
                </figure>
                <h5>Festivals</h5>
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
                        <h5>Beach Volley</h5>
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
                        <h5>Pool Games</h5>

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
                        <h5>Water Aerobics</h5>
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
                        <h5>Tennis Court</h5>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <img src="{{ asset('assets/frontend/images/activity/Tabletennis.webp') }}" alt="tabletennis"/>
                        </figure>
                        <h5>Table Tennis</h5>
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
                        <h5>Mini Golf</h5>
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
<div class="aquapark">
    <a class="roomlink" href="{{ route('aquapark') }}">
        <figure>
            <img src="{{ asset('assets/frontend/images/kidsConcept/Aquapark.webp') }}" alt="Aquapark"/>
        </figure>
        <article>
            <h3>Aquapark</h3>
            <p>18 slides  ·  Safe for your child</p>
            <div class="moreButton">
                <a href="{{ route('aquapark') }}">More About</a>
            </div>
        </article>
    </a>
</div>
<!-- Aquapark End -->
<!-- Contact -->
@include('frontend.en.layouts.contact')
<!-- Contact End -->
<div class="otherEntertainment">
    <h3>Other Activities</h3>
    <div class="entertainment otherEntertainmentSwiper swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
        <div class="entertainmentImg">
            <figure>
                <img src="{{ asset('assets/frontend/images/activity/entertainment.webp') }}" alt="concerts"/>

            </figure> <span>Concerts</span>
        </div></div>
        <div class="swiper-slide">
        <div class="entertainmentImg">
            <figure>
                <img src="{{ asset('assets/frontend/images/activity/entertainment-2.webp') }}" alt="specialguests"/>

            </figure><span>Special Guests</span>
        </div></div>
        <div class="swiper-slide">
        <div class="entertainmentImg">
            <figure>
                <img src="{{ asset('assets/frontend/images/activity/entertainment-3.webp') }}" alt="show"/>

            </figure><span>Shows</span>
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