@extends('frontend.en.layouts.master')

@section('title', 'Kids Concept - Portnature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('kids-concepts') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('tr-kids-concepts') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-kids-concepts') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-kids-concepts') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="childrenHero">
    <h1>KIDS CONCEPT</h1>
</div>
<div class="childrenText">
    <div class="container">
        <span>Port Nature kids' concept hotel is a family-friendly establishment specifically for children's needs and interests.<br>We provide play areas, children's menus, and organized activities.</span>
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
            <p>Babysitting</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/opaquapark.svg') }}" alt="kidsConcept"/>
            <p>Aquapark</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/opminidisco.svg') }}" alt="kidsConcept"/>
            <p>Mini Disco</p>
        </div>
        <div class="childrenSpecsInfo">
            <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/opcourses.svg') }}" alt="kidsConcept"/>
            <p>Special Courses</p>
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
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-1.webp') }}" alt="activities"/>
                        <span>18 slides  ·  Water and Fun</span>
                    </figure>
                </a>
                <h5>Aquapark</h5>
                <p>Port Nature’s aquapark has only fun. There are water sports, giant water slides, and 4 pools.</p>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-2.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-2.webp') }}" alt="activities"/>
                        <span>Child A'la Carte  · Food for Child</span>
                    </figure>
                    <h5>Mini Club</h5>
                    <p>Your children can choose their desired food for themselves with our child-exclusive menu.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-3.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-3.webp') }}" alt="activities"/>
                        <span>Fun arcade machines · Games for Everyone</span>
                    </figure>
                    <h5>Games for Everyone</h5>
                    <p>Game machines offer a wonderful form of entertainment for everyone. </p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-4.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-4.webp') }}" alt="activities"/>
                        <span>Babbysitters  ·  Care for Child</span>
                    </figure>
                    <h5>BabySitting Service</h5>
                    <p>Babysitting services provide a safe and controlled area for parents' inner peace.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-5.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-5.webp') }}" alt="activities"/>
                        <span>Children always like  ·  Safety and excitement</span>
                    </figure>
                    <h5>Jumping Track</h5>
                    <p>All materials are soft and safe. Your child will not be damaged by our track.</p>
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
                                <span>Certificated Food</span>
                            </figure>
                        </a>
                        <h5>BABY FOOD</h5>
                        <p>Port Nature present baby food with fresh and healthy products.</p>
                    </div>
                    <div class="swiper-slide">
                        <a class="lightbox-food" href="{{ asset('assets/frontend/images/kidsConcept/foodSlider-2.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/kidsConcept/foodSlider-2.webp') }}" alt="food"/>
                                <span>Cool Idea</span>
                            </figure>
                        </a>
                        <h5>PREMIUM ICE CREAM</h5>
                        <p>Ice cream is a coolest idea when you are resting on the beach and the weather is hot.</p>
                    </div>
                    <div class="swiper-slide">
                        <a class="lightbox-food" href="{{ asset('assets/frontend/images/kidsConcept/foodSlider-3.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/kidsConcept/foodSlider-3.webp') }}" alt="food"/>
                                <span>Freshest Food</span>
                            </figure>
                        </a>
                        <h5>FRESH BABY FOOD</h5>
                        <p>Fresh and healthy products.<br>
                            Fresh and daily...</p>
                    </div>
                    <div class="swiper-slide">
                        <a class="lightbox-food" href="{{ asset('assets/frontend/images/kidsConcept/foodSlider-4.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/kidsConcept/foodSlider-4.webp') }}" alt="food"/>
                                <span>Daliy and Fresh</span>
                            </figure>
                        </a>
                        <h5>NATURAL FRUIT JUICES</h5>
                        <p>Natural fruit juices are a great source of vitamins, minerals, and
                            antioxidants. Every day for you.</p>
                    </div>
                    <div class="swiper-slide">
                        <a class="lightbox-food" href="{{ asset('assets/frontend/images/kidsConcept/foodSlider-5.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/kidsConcept/foodSlider-5.webp') }}" alt="food"/>
                                <span>Fresh milk and delicous dried nuts.</span>
                            </figure>
                        </a>
                        <h5>BABY MILK FOOD </h5>
                        <p>Port Nature's chefs always use organic, fresh, and healthy milk food for your child.</p>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev">
                    <svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 26L1 13.5L14 1" stroke="#233038" stroke-opacity="0.8" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="swiper-button-next">
                    <svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 26L14 13.5L1 1" stroke="#233038" stroke-opacity="0.8" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
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
            <h5>Aquapark</h5>
            <p>18 slides · Safety for your child</p>
        </div>
        <div class="carousel-item">
            <a class="lightbox-carousel" href="{{ asset('assets/frontend/images/kidsConcept/minialacarte.webp') }}">
                <figure>
                    <img src='{{ asset('assets/frontend/images/kidsConcept/minialacarte.webp') }}' class="d-block w-100" alt="minialacarte">

                </figure>
            </a>
            <h5>Mini A’La Carte</h5>
            <p>Healthy nutrition for your child</p>
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
@include('frontend.en.layouts.contact')
<!-- Contact End -->
<!-- Special Courses -->
<div class="kidsSpecialOffer">
    <h6>Special Courses</h6>
    <div class="swiper specialOfferSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kidsConcept/courses-1.webp') }}" alt="courses"/>
                </figure>
                <article>
                    <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/swimmingicon.svg') }}" alt="courses"/>
                    <p>SWIMMING COURSE</p>
                    <span>Swimming for your child with safety</span>
                </article>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kidsConcept/courses-2.webp') }}" alt="courses"/>
                </figure>
                <article>
                    <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/danceicon.svg') }}" alt="courses"/>
                    <p>Dance Classes</p>
                    <span>You box dance off this summer</span>
                </article>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kidsConcept/courses-3.webp') }}" alt="courses"/>
                </figure>
                <article>
                    <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/tennisicon.svg') }}" alt="courses"/>
                    <p>Tennis Course</p>
                    <span>Premium sport for your child</span>
                </article>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kidsConcept/courses-4.webp') }}" alt="courses"/>
                </figure>
                <article>
                    <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/footballicon.svg') }}" alt="courses"/>
                    <p>Football Club</p>
                    <span>Football is a good choice every time</span>
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