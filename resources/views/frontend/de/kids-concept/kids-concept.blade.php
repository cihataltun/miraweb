@extends('frontend.de.layouts.master')

@section('title', 'Kinderkonzept - Portnature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-kids-concepts') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('kids-concepts') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-kids-concepts') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-kids-concepts') }}">RU</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="childrenHero">
    <h1>KINDERKONZEPT</h1>
</div>
<div class="childrenText">
    <div class="container">
        <span>Das Kinderkonzepthotel Port Nature ist eine familienfreundliche Einrichtung speziell für die Bedürfnisse und Interessen von Kindern.<br>
            Wir bieten Spielbereiche, Kindermenüs und organisierte Aktivitäten.</span>
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
            <p>BABYSITTEN</p>
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
            <p>SPEZIELLE KURSE</p>
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
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-1.webp') }}" alt="activities"/><span>18 Rutschen  ·  Wasser und Spaß</span>
                    </figure>
                </a>
                <h5>Aquapark</h5>
                <p>Der Aquapark von Port Nature hat nur Spaß. Es gibt Wassersportarten, riesige Wasserrutschen und 4 Pools.</p>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-2.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-2.webp') }}" alt="activities"/><span>Kinder A'la Carte  · Essen für Kinder</span>
                    </figure>
                    <h5>Mini Club</h5>
                    <p>Ihr Kind wählt das Essen mit unserem Kinder-exklusiven Menü selbst aus.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-3.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-3.webp') }}" alt="activities"/><span>Unterhaltsame Arcade-Spiele · Spiel für alle</span>
                    </figure>
                    <h5>SPIELMASCHINEN</h5>
                    <p>Spielautomaten bieten eine wunderbare Form der Unterhaltung für jedermann.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-4.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-4.webp') }}" alt="activities"/><span>Babysitter  ·  Pflege für Kind</span>
                    </figure>
                    <h5>BABYSITTERSERVICE</h5>
                    <p>Babysitterdienste bieten einen sicheren und kontrollierten Bereich für den inneren Frieden der Eltern.</p>
                </a>
            </div>
            <div class="swiper-slide">
                <a class="lightbox-activity" href="{{ asset('assets/frontend/images/kidsConcept/activitySlider-5.webp') }}">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/kidsConcept/activitySlider-5.webp') }}" alt="activities"/><span>Kinder lieben es.  ·  Sicher und spannend</span>
                    </figure>
                    <h5>SPRUNGBAHN</h5>
                    <p>Alle Materialien sind weich und sicher. Ihr Kind wird durch unsere Bahn nicht beschädigt.</p>
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
                                <span>Zertifizierte Babynahrung</span>
                            </figure>
                        </a>
                        <h5>BABYNAHRUNG</h5>
                        <p>Port Nature präsentiert Babynahrung mit frischen und gesunden Produkten.</p>
                    </div>
                    <div class="swiper-slide">
                        <a class="lightbox-food" href="{{ asset('assets/frontend/images/kidsConcept/foodSlider-2.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/kidsConcept/foodSlider-2.webp') }}" alt="food"/>
                                <span>Coole Idee</span>
                            </figure>
                        </a>
                        <h5>PREMIUM-EISCREME</h5>
                        <p>Eiscreme ist eine coolere Idee, wenn Sie sich am Strand ausruhen und das Wetter heiß ist.</p>
                    </div>
                    <div class="swiper-slide">
                        <a class="lightbox-food" href="{{ asset('assets/frontend/images/kidsConcept/foodSlider-3.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/kidsConcept/foodSlider-3.webp') }}"
                                     alt="food"/><span>Frischestes Essen</span>
                            </figure>
                        </a>
                        <h5>FRISCHE BABYNAHRUNG</h5>
                        <p>Frische und gesunde Produkte.<br>
                            Täglich frisch...</p>
                    </div>
                    <div class="swiper-slide">
                        <a class="lightbox-food" href="{{ asset('assets/frontend/images/kidsConcept/foodSlider-4.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/kidsConcept/foodSlider-4.webp') }}"
                                     alt="food"/><span>Täglich und frisch</span>
                            </figure>
                        </a>
                        <h5>NATÜRLICHE FRUCHTSÄFTE</h5>
                        <p>Natürliche Fruchtsäfte sind eine großartige Quelle für Vitamine, Mineralien und
                            Antioxidantien. Jeden Tag für Sie.</p>
                    </div>
                    <div class="swiper-slide">
                        <a class="lightbox-food" href="{{ asset('assets/frontend/images/kidsConcept/foodSlider-5.webp') }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/kidsConcept/foodSlider-5.webp') }}" alt="food"/><span>Frische Milch und köstliche getrocknete Nüsse.</span>
                            </figure>
                        </a>
                        <h5>BABYMILCHNAHRUNG</h5>
                        <p>Die Köche von Port Nature verwenden immer biologische, frische und gesunde Milchnahrung für Ihr Kind.</p>
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
            <h5>Aquapark</h5>
            <p>18 Rutschen · Sicherheit für Ihr Kind</p>
        </div>
        <div class="carousel-item">
            <a class="lightbox-carousel" href="{{ asset('assets/frontend/images/kidsConcept/minialacarte.webp') }}">
                <figure>
                    <img src='{{ asset('assets/frontend/images/kidsConcept/minialacarte.webp') }}' class="d-block w-100" alt="minialacarte">

                </figure>
            </a>
            <h5>Mini A’La Carte</h5>
            <p>Gesunde Ernährung für Ihr Kind</p>
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
@include('frontend.de.layouts.contact')
<!-- Contact End -->
<!-- Special Courses -->
<div class="kidsSpecialOffer">
    <h6>Spezielle Kurse</h6>
    <div class="swiper specialOfferSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kidsConcept/courses-1.webp') }}" alt="courses"/>
                </figure>
                <article>
                    <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/swimmingicon.svg') }}" alt="course"/>
                    <p>Schwimmkurs</p>
                    <span>Sicheres Schwimmen für Ihr Kind</span>
                </article>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kidsConcept/courses-2.webp') }}" alt="courses"/>
                </figure>
                <article>
                    <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/danceicon.svg') }}" alt="course"/>
                    <p>Tanzunterricht</p>
                    <span>Lassen Sie den Tanz in diesem Sommer aus.</span>
                </article>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kidsConcept/courses-3.webp') }}" alt="courses"/>
                </figure>
                <article>
                    <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/tennisicon.svg') }}" alt="course"/>
                    <p>Tenniskurs</p>
                    <span>Premium-Sport für Ihr Kind</span>
                </article>
            </div>
            <div class="swiper-slide">
                <figure>
                    <img src="{{ asset('assets/frontend/images/kidsConcept/courses-4.webp') }}" alt="courses"/>
                </figure>
                <article>

                    <img class="kidsSvg" src="{{ asset('assets/frontend/images/kidsConcept/swimmingicon.svg') }}" alt="course"/>
                    <p>Fußballkurse</p>
                    <span>Fußball ist immer eine gute Wahl</span>
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