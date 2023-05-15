@extends('frontend.ru.layouts.master')

@section('title', 'Ala Carte - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-alacarte-restaurants') }}"
       aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('alacarte-restaurants') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-alacarte-restaurants') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('de-alacarte-restaurants') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="alacarteHero">
    <div class="alacarteHeroUpper">
            <div class="gastroHeroText">
                    <img src="{{ asset('assets/frontend/images/alacarte/alacarteHero-1.webp') }}" alt="alacarte"/>
                <h1>A'La Carte</h1>
            </div>
        <div class="mobile">
                <img src="{{ asset('assets/frontend/images/alacarte/alacarteHero-2.webp') }}" alt="alacarte"/>
        </div>
    </div>
    <div class="alacarteHeroLower">
        <div class=" alacarteIcons">
            <div class="gastroIconGroup">
                <img class="alacarteHeroSvg" src="{{ asset('assets/frontend/images/alacarte/opleaf.svg') }}" alt="alacarteicon"/>
                <img class="alacarteHeroSvg" src="{{ asset('assets/frontend/images/alacarte/opfree.svg') }}" alt="alacarteicon"/>
                <img class="alacarteHeroSvg" src="{{ asset('assets/frontend/images/alacarte/opcocktail.svg') }}" alt="alacarteicon"/>
            </div>
            <span>Вкус традиций в каждом блюде
            </span>
        </div>
        <div class=" gastroP">
            <p>
                Благодаря веселой и гостеприимной атмосфере наших ресторанов A'la Carte вы проведете прекрасное время с семьей и побалуете себя вкусной едой разных кухонь.


            </p>
            <p>
                Всемирно известные блюда ждут вас в роскоши Port Nature


            </p>
        </div>
    </div>
</div>
<div class="foodHeading">
    <div class="findAlacarte">
        <div class="findLeftSide">
            <img class="" src="{{ asset('assets/frontend/images/alacarte/findicon.svg') }}" alt="find"/>
            <h2>НАЙТИ A'LA CARTE
                </h2>
        </div>
    </div>
</div>
<div class="alacarteGridWrapper">
<div class="alacarteGrid">
            <div class="restaurant">
                <a class="imglink" href="{{ route('alldaydinning') }}">
                    <img src="{{ asset('assets/frontend/images/alacarte/alldaydining.webp') }}" alt="alldaydining"/></a>
                    <div class="restaurantsHeader">
                        <img class="alacarteSvg" src="{{ asset('assets/frontend/images/alacarte/alldayicon.svg') }}" alt="alacarte"/>
                        <h3>All Day Dining A'La Carte</h3>
                    </div>
                    <div class="card-text-wrapper">
                        <p class="card-text">Вы не пропустите ни одного приема пищи в течение всего дня.</p>
                        <div class="moreButton">
                            <a href="{{ route('alldaydinning') }}">Подробнее</a>
                        </div>
                    </div>
            </div>
        <div class="restaurant">
            <a class="imglink" href="{{ route('sushi-bar') }}">
                <img src="{{ asset('assets/frontend/images/alacarte/sushibar.webp') }}" alt="sushibar"/></a>
                <div class="restaurantsHeader">
                    <img class="alacarteSvg" src="{{ asset('assets/frontend/images/alacarte/sushiicon.svg') }}" alt="alacarte"/>
                    <h3>Sushi Bar</h3>
                </div>
                <div class="card-text-wrapper">
                    <p class="card-text">Широкий выбор свежих и вкуснейших суши-роллов для каждого.</p>
                    <div class="moreButton">
                        <a href="{{ route('sushi-bar') }}">Подробнее</a>
                    </div>
                </div>
        </div>
        <div class="restaurant">
            <a class="imglink" href="{{ route('italian') }}">
                <img src="{{ asset('assets/frontend/images/alacarte/italian.webp') }}" alt="italian"/></a>
                <div class="restaurantsHeader">
                    <img class="alacarteSvg" src="{{ asset('assets/frontend/images/alacarte/italianicon.svg') }}" alt="alacarte"/>
                    <h3>Italian A'la Carte</h3>
                </div>
                <div class="card-text-wrapper">
                    <p class="card-text">Свежие и смелые вкусы в итальянской атмосфере.</p>
                    <div class="moreButton">
                        <a href="{{ route('italian') }}">Подробнее</a>
                    </div>
                </div>
        </div>
        <div class="restaurant">
            <a class="imglink" href="{{ route('french') }}">
                <img src="{{ asset('assets/frontend/images/alacarte/french.webp') }}" alt="french"/></a>
                <div class="restaurantsHeader">
                    <img class="alacarteSvg" src="{{ asset('assets/frontend/images/alacarte/frenchicon.svg') }}" alt="alacarte"/>
                    <h3>French A'La Carte</h3>
                </div>
                <div class="card-text-wrapper">
                    <p class="card-text">Блюда с высококачественными ингредиентами и изысканностью.</p>
                    <div class="moreButton">
                        <a href="{{ route('french') }}">Подробнее</a>
                    </div>
                </div>
        </div>
        <div class="restaurant">
            <a class="imglink" href="{{ route('seaside') }}">
                <img src="{{ asset('assets/frontend/images/alacarte/seaside.webp') }}" alt="seaside"/></a>
                <div class="restaurantsHeader">
                    <img class="alacarteSvg" src="{{ asset('assets/frontend/images/alacarte/seasideicon.svg') }}" alt="alacarte"/>
                    <h3>Seaside A'La Carte</h3>
                </div>
                <div class="card-text-wrapper">
                    <p class="card-text">Свежайшая рыба в умелых руках нашего шеф-повара на берегу моря.</p>
                    <div class="moreButton">
                        <a href="{{ route('seaside') }}">Подробнее</a>
                    </div>
                </div>
        </div>
        <div class="restaurant">
            <a class="imglink" href="{{ route('mini-club-alacarte') }}">
                <img src="{{ asset('assets/frontend/images/alacarte/miniclub.webp') }}" alt="miniclub"/></a>
                <div class="restaurantsHeader">
                    <img class="alacarteSvg" src="{{ asset('assets/frontend/images/alacarte/miniclubicon.svg') }}" alt="alacarte"/>
                    <h3>Mini Club A'La Carte</h3>
                </div>
                <div class="card-text-wrapper">
                    <p class="card-text">Ваш ребенок выбирает сам с помощью нашего детского меню.</p>
                    <div class="moreButton">
                        <a href="{{ route('mini-club-alacarte') }}">Подробнее</a>
                    </div>
                </div>
        </div>
        <div class="restaurant">
            <a class="imglink" href="{{ route('fareast') }}">
                <img src="{{ asset('assets/frontend/images/alacarte/fasteast.webp') }}" alt="fasteat"/></a>
                <div class="restaurantsHeader">
                    <img class="alacarteSvg" src="{{ asset('assets/frontend/images/alacarte/fareasticon.svg') }}" alt="alacarte"/>
                    <h3>Far East A'La Carte</h3>
                </div>
                <div class="card-text-wrapper">
                    <p class="card-text">Разнообразие вкусов присуще культуре Дальнего Востока.</p>
                    <div class="moreButton">
                        <a href="{{ route('fareast') }}">Подробнее</a>
                    </div>
                </div>

        </div>

</div>
</div>
<div class="fish">
    <img src="{{ asset('assets/frontend/images/alacarte/fish.png') }}" alt="fish"/>
</div>
<!-- Contact -->
@include('frontend.ru.layouts.contact')
<!-- Contact End -->

@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/muuri.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/web-animations.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/restaurantDetails.js') }}"></script>

@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/alacarte.css') }}"/>
@endsection