@extends('frontend.de.layouts.master')

@section('title', 'Bars & Cafés - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-bar-cafe') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('bar-cafe') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-bar-cafe') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-bar-cafe') }}">RU</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="barsHero">
    <figure>
        <img src="{{ asset('assets/frontend/images/barCafes/BarsCafesHero.webp') }}" alt="bars&cafes"/>
    </figure>
    <h1>BARS & CAFÉS</h1>
</div>
<div class="barCafesHeroText">
    <p>Genießen Sie köstliches Gebäck, Sandwiches und Backwaren in unseren Cafés, die täglich frisch mit den hochwertigsten Zutaten in frischen Säften und Getränken zubereitet werden. Oder erkunden Sie unsere Bars und entdecken Sie fachmännisch zubereitete Cocktails, Weine, Whisky, Wodka und Biere aus der ganzen Welt.</p>
</div>

<div class="findAlacarte-wrapper">
    <div class="findAlacarte">
        <div class="findLeftSide">
            <img class="barsSvg" src="{{ asset('assets/frontend/images/barCafes/findicon.svg') }}" alt="findicon"/>
            <h2>BARS & CAFÉS FINDEN</h2>
        </div>
        <div class="findRightSide">
            <label class="checkboxes">24/7
                <input id="alldayBar" class="checkBox" type="checkbox">
                <span class="checkmark" ></span>
            </label>
            <div class="vh"></div>
            <label class="checkboxes">Kinderfreundlich
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
            <div class="bars">
                <a class="roomlink" href="{{ route('de-chivas-lounge') }}">
                    <img class="barCafeImg"  src="{{ asset('assets/frontend/images/barCafes/Script.webp') }}" alt="chivas"/>
                    <div class="restaurantsHeader">
                        <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/chivasicon.svg') }}" alt="chivas"/>
                        <h3>Script Chivas Lounge</h3>
                    </div>
                    <article>
                        <p>Für echte Whisky-Liebhaber ist nur Chivas Regal genug. Der 18-jährige Chivas ist einer der exklusivsten Whiskys.</p>
                        <div class="moreButton">
                            <a href="{{ route('de-chivas-lounge') }}">Mehr erfahren</a>
                        </div>
                    </article>
                </a>
            </div>
        </div>
    </div>
    <div class="item eighteen">
        <div class="bars">
            <a class="roomlink" href="{{ route('de-hennessy-lounge') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/barCafes/Born9.webp') }}" alt="hennesy"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/hennesyicon.svg') }}" alt="hennesyicon"/>
                    <h3>BORN 9 HENNESSY LOUNGE</h3>
                </div>
                <article>
                    <p>Genießen Sie während des Barerlebnisses von Port Nature die reichhaltigen und seidigen Aromen unserer besten Cognacs</p>
                    <div class="moreButton">
                        <a href="{{ route('de-hennessy-lounge') }}">Mehr erfahren</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
    <div class="item eighteen">
        <div class="bars">
            <a class="roomlink" href="{{ route('de-irish-pub') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/barCafes/Irish%20Pub.webp') }}" alt="irishpub"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/beer.svg') }}" alt="irishpub"/>
                    <h3>Irish Pub</h3>
                </div>
                <article>
                    <p>In unserem Irish Pub erwarten Sie eine Vielzahl von Bieren, eine freundliche Atmosphäre und einzigartige alkoholische Getränke.</p>
                    <div class="moreButton">
                        <a href="{{ route('de-irish-pub') }}">Mehr erfahren</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
    <div class="item allday friendly">
        <div class="bars">
            <a class="roomlink" href="{{ route('de-lobby-bar') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/barCafes/Lobby.webp') }}" alt="lobbybar"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/lobbyicon.svg') }}" alt="lobbyicon"/>
                    <h3>Lobby Bar</h3>
                </div>
                <article>
                    <p>Die Lobby Bar bietet mit ihren importierten alkoholischen Getränken ein einzigartiges Trinkerlebnis.</p>
                    <div class="moreButton">
                        <a href="{{ route('de-lobby-bar') }}">Mehr erfahren</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
    <div class="item friendly">
        <div class="bars">
            <a class="roomlink" href="{{ route('de-flamingo-bar') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/barCafes/Flamingo.webp') }}" alt="flamingobar"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/flamingoicon.svg') }}" alt="flamingoicon"/>
                    <h3>Flamingo Bar</h3>
                </div>
                <article>
                    <p>Ein kühles Bier oder ein kühler Cocktail am Pool ist die erste Idee, die einem in den Sinn kommt.</p>
                    <div class="moreButton">
                        <a href="{{ route('de-flamingo-bar') }}">Mehr erfahren</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
    <div class="item friendly">
        <div class="bars">
            <a class="roomlink" href="{{ route('de-davidoff-cafe') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/davidoff/davidoffSlider-1.webp') }}" alt="Davidoff"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/davidofficon.svg') }}" alt="davidofficon"/>
                    <h3>Davidoff Kafe</h3>
                </div>
                <article>
                    <p>Blue-Ribbon-Kaffeebohnen verwandeln sich im Davidoff Cafe aus Meisterhand in einzigartigen Kaffeegeschmack</p>
                    <div class="moreButton">
                        <a href="{{ route('de-davidoff-cafe') }}">Mehr erfahren</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
    <div class="item friendly">
        <div class="bars">
            <a class="roomlink" href="{{ route('de-kitkat-cafe') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/kitkat/kitkatSlider-3.webp') }}" alt="kitkat"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/kitkaticon.svg') }}" alt="kitkaticon"/>
                    <h3>Kit Kat</h3>
                </div>
                <article>
                    <p>Jeder Bissen beinhaltet Geschmack, Kindheit, zartschmelzende Schokolade und das bekannte Kit Kat.</p>
                    <div class="moreButton">
                        <a href="{{ route('de-kitkat-cafe') }}">Mehr erfahren</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
    <div class="item friendly">
        <div class="bars">
            <a class="roomlink" href="{{ route('de-nespresso-cafe') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/nespresso/nespressoSlider-2.webp') }}" alt="nespresso"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/nespressoicon.svg') }}" alt="nespresso"/>
                    <h3>Nespresso</h3>
                </div>
                <article>
                    <p>Perfekter Kaffee ist Kompetenz. Das bedeutet, dass wir kompromisslos Grenzen verschieben.</p>
                    <div class="moreButton">
                        <a href="{{ route('de-nespresso-cafe') }}">Mehr erfahren</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
</div>
<!-- Contact -->
@include('frontend.de.layouts.contact')
<!-- Contact End -->
<div class="pageUpButton">
    <a href="#">
        <img style="width: unset;height: unset;" class="accommdationSvg" src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
    </a>
</div>
@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/muuri.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/web-animations.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/barCafes.js') }}"></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/barCafes.css') }}"/>
@endsection