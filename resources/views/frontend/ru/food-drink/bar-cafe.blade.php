@extends('frontend.ru.layouts.master')

@section('title', 'Бары & Кафе - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-bar-cafe') }}"
       aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('bar-cafe') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-bar-cafe') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('de-bar-cafe') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="barsHero">
    <figure>
        <img src="{{ asset('assets/frontend/images/barCafes/BarsCafesHero.webp') }}" alt="bars&cafes"/>
    </figure>
    <h1>Бары & Кафе</h1>
</div>
<div class="barCafesHeroText">
    <p>Отведайте вкусную выпечку, бутерброды и сладости из свежих ингредиентов высочайшего качества с свежевыжатым соком и другими напитками в наших кафе. Или посетите наши бары и откройте для себя искусно приготовленные коктейли и импортные алкогольные напитки со всего мира.</p>
</div>

<div class="findAlacarte-wrapper">
    <div class="findAlacarte">
        <div class="findLeftSide">
            <img class="barsSvg" src="{{ asset('assets/frontend/images/barCafes/findicon.svg') }}" alt="findicon"/>
            <h2>Найти бары & кафе</h2>
        </div>
        <div class="findRightSide">
            <label class="checkboxes">24/7
                <input id="alldayBar" class="checkBox" type="checkbox">
                <span class="checkmark" ></span>
            </label>
            <div class="vh"></div>
            <label class="checkboxes">С детьми
                <input id="friendlyBar" class="checkBox" type="checkbox">
                <span class="checkmark" ></span>
            </label>
            <div class="vh"></div>
            <label class="checkboxes">18 +
                <input id="eighteenBar" class="checkBox" type="checkbox">
                <span class="checkmark" ></span>
            </label>
        </div>
    </div>
</div>
<div class="grid">
    <div class="item eighteen">
        <div class="item-content">
            <div class="bars"><!--********* bars class name all CHANGES START HERE ************-->
                <a class="roomlink" href="{{ route('ru-chivas-lounge') }}">
                    <img class="barCafeImg"  src="{{ asset('assets/frontend/images/barCafes/Script.webp') }}" alt="chivas"/>
                    <div class="restaurantsHeader">
                        <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/chivasicon.svg') }}" alt="chivas"/>
                        <h3>SCRIPT CHIVAS LOUNGE</h3>
                    </div>
                    <article>
                        <p>Chivas Regal - предназначен только для настоящих любителей виски.</p>
                        <div class="moreButton">
                            <a href="{{ route('ru-chivas-lounge') }}">Подробнее</a>
                        </div>
                    </article>
                </a>
            </div>
        </div>
    </div>
    <div class="item eighteen">
        <div class="bars">
            <a class="roomlink" href="{{ route('ru-hennessy-lounge') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/barCafes/Born9.webp') }}" alt="hennesy"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/hennesyicon.svg') }}" alt="hennesyicon"/>
                    <h3>BORN 9 HENNESSY LOUNGE</h3>
                </div>
                <article>
                    <p>Насыщенные и шелковистые ароматы лучших коньяков в нашем баре Hennessy.</p>
                    <div class="moreButton">
                        <a href="{{ route('ru-hennessy-lounge') }}">Подробнее</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
    <div class="item eighteen">
        <div class="bars">
            <a class="roomlink" href="{{ route('ru-irish-pub') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/barCafes/Irish%20Pub.webp') }}" alt="irishpub"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/beer.svg') }}" alt="irishpub"/>
                    <h3>Irish Pub</h3>
                </div>
                <article>
                    <p>Почуствуйте атмосферу ирландского паба с расслабляющим алкоголем.</p>
                    <div class="moreButton">
                        <a href="{{ route('ru-irish-pub') }}">Подробнее</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
    <div class="item allday friendly">
        <div class="bars">
            <a class="roomlink" href="{{ route('ru-lobby-bar') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/barCafes/Lobby.webp') }}" alt="lobbybar"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/lobbyicon.svg') }}" alt="lobbyicon"/>
                    <h3>Lobby Bar</h3>
                </div>
                <article>
                    <p>Популярное место для вас, с алкогольными напитками премиум-класса.</p>
                    <div class="moreButton">
                        <a href="{{ route('ru-lobby-bar') }}">Подробнее</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
    <div class="item friendly">
        <div class="bars">
            <a class="roomlink" href="{{ route('ru-flamingo-bar') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/barCafes/Flamingo.webp') }}" alt="flamingobar"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/flamingoicon.svg') }}" alt="flamingoicon"/>
                    <h3>Flamingo Bar</h3>
                </div>
                <article>
                    <p>Холодное пиво или коктейль - первое, что приходит на ум, находясь в бассейне.</p>
                    <div class="moreButton">
                        <a href="{{ route('ru-flamingo-bar') }}">Подробнее</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
    <div class="item friendly">
        <div class="bars">
            <a class="roomlink" href="{{ route('ru-davidoff-cafe') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/davidoff/davidoffSlider-1.webp') }}" alt="Davidoff"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/davidofficon.svg') }}" alt="davidofficon"/>
                    <h3>DAVIDOFF Кафе</h3>
                </div>
                <article>
                    <p>Там, где кофейные зерна Davidoff превращаются в неповторимые вкусы.</p>
                    <div class="moreButton">
                        <a href="{{ route('ru-davidoff-cafe') }}">Подробнее</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
    <div class="item friendly">
        <div class="bars">
            <a class="roomlink" href="{{ route('ru-kitkat-cafe') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/kitkat/kitkatSlider-3.webp') }}" alt="kitkat"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/kitkaticon.svg') }}" alt="kitkaticon"/>
                    <h3>Kit Kat</h3>
                </div>
                <article>
                    <p>Каждый кусочек нескромного шоколада Kit Kat вернет вам ностальгию.</p>
                    <div class="moreButton">
                        <a href="{{ route('ru-kitkat-cafe') }}">Подробнее</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
    <div class="item friendly">
        <div class="bars">
            <a class="roomlink" href="{{ route('ru-nespresso-cafe') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/nespresso/nespressoSlider-2.webp') }}" alt="nespresso"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/nespressoicon.svg') }}" alt="nespresso"/>
                    <h3>Nespresso</h3>
                </div>
                <article>
                    <p>Port Nature бескомпромиссно раздвигает границы возможного с кофе Nespresso.</p>
                    <div class="moreButton">
                        <a href="{{ route('ru-nespresso-cafe') }}">Подробнее</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
</div>
<!-- Contact -->
@include('frontend.ru.layouts.contact')
<!-- Contact End -->

@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/muuri.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/web-animations.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/barCafes.js') }}"></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/barCafes.css') }}"/>
@endsection