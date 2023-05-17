@extends('frontend.en.layouts.master')

@section('title', 'Bars & Cafes - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('bar-cafe') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('tr-bar-cafe') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-bar-cafe') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-bar-cafe') }}">DE</a></li>
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
    <p>Savor delicious pastries, sandwiches, and baked goods at our cafes, made fresh daily with the highest quality ingredients in fere fresh juice and beverages. Or, explore our bars and discover expertly crafted cocktails, wines, whisky, vodka, and beers from around the world.</p>
</div>

<div class="findAlacarte-wrapper">
    <div class="findAlacarte">
        <div class="findLeftSide">
            <img class="barsSvg" src="{{ asset('assets/frontend/images/barCafes/findicon.svg') }}" alt="findicon"/>
            <h2>Find Bars & Cafes</h2>
        </div>
        <div class="findRightSide">
            <label class="checkboxes">24/7
                <input id="alldayBar" class="checkBox" type="checkbox">
                <span class="checkmark" ></span>
            </label>
            <div class="vh"></div>
            <label class="checkboxes">Kids Friendly
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
                <a class="roomlink" href="{{ route('chivas-lounge') }}">
                    <img class="barCafeImg"  src="{{ asset('assets/frontend/images/barCafes/Script.webp') }}" alt="chivas"/>
                    <div class="restaurantsHeader">
                        <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/chivasicon.svg') }}" alt="chivas"/>
                        <h3>Script Chivas Lounge</h3>
                    </div>
                    <article>
                        <p>Only a real whisky taster can truly appreciate Chivas Regal.</p>
                        <div class="moreButton">
                            <a href="{{ route('chivas-lounge') }}">More About</a>
                        </div>
                    </article>
                </a>
            </div>
        </div>
    </div>
    <div class="item eighteen">
        <div class="bars">
            <a class="roomlink" href="{{ route('hennessy-lounge') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/barCafes/Born9.webp') }}" alt="hennesy"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/hennesyicon.svg') }}" alt="hennesyicon"/>
                    <h3>BORN 9 HENNESSY LOUNGE</h3>
                </div>
                <article>
                    <p>During Port Nature's bar experience, savor the rich and silky aromas of our top cognacs </p>
                    <div class="moreButton">
                        <a href="{{ route('hennessy-lounge') }}">More About</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
    <div class="item eighteen">
        <div class="bars">
            <a class="roomlink" href="{{ route('irish-pub') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/barCafes/Irish%20Pub.webp') }}" alt="irishpub"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/beer.svg') }}" alt="irishpub"/>
                    <h3>Irish Pub</h3>
                </div>
                <article>
                    <p>Experience the authentic feeling of Ireland at our hotel's Irish pub.</p>
                    <div class="moreButton">
                        <a href="{{ route('irish-pub') }}">More About</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
    <div class="item allday friendly">
        <div class="bars">
            <a class="roomlink" href="{{ route('lobby-bar') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/barCafes/Lobby.webp') }}" alt="lobbybar"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/lobbyicon.svg') }}" alt="lobbyicon"/>
                    <h3>Lobby Bar</h3>
                </div>
                <article>
                    <p>Lobby Bar offers a unique drinking experience with its imported alcoholic beverages.</p>
                    <div class="moreButton">
                        <a href="{{ route('lobby-bar') }}">More About</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
    <div class="item friendly">
        <div class="bars">
            <a class="roomlink" href="{{ route('flamingo-bar') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/barCafes/Flamingo.webp') }}" alt="flamingobar"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/flamingoicon.svg') }}" alt="flamingoicon"/>
                    <h3>Flamingo Bar</h3>
                </div>
                <article>
                    <p>Pool and a cold beer or a cool cocktail first thing that come to mind</p>
                    <div class="moreButton">
                        <a href="{{ route('flamingo-bar') }}">More About</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
    <div class="item friendly">
        <div class="bars">
            <a class="roomlink" href="{{ route('davidoff-cafe') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/davidoff/davidoffSlider-1.webp') }}" alt="Davidoff"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/davidofficon.svg') }}" alt="davidofficon"/>
                    <h3>Davidoff Cafe</h3>
                </div>
                <article>
                    <p>Blue ribbon coffee beans turn into unique coffee taste on master hand at Davidoff Cafe</p>
                    <div class="moreButton">
                        <a href="{{ route('davidoff-cafe') }}">More About</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
    <div class="item friendly">
        <div class="bars">
            <a class="roomlink" href="{{ route('kitkat-cafe') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/kitkat/kitkatSlider-3.webp') }}" alt="kitkat"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/kitkaticon.svg') }}" alt="kitkaticon"/>
                    <h3>Kit Kat</h3>
                </div>
                <article>
                    <p>Every bite includes taste, childish, smooth chocolate, and known Kit Kat.</p>
                    <div class="moreButton">
                        <a href="{{ route('kitkat-cafe') }}">More About</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
    <div class="item friendly">
        <div class="bars">
            <a class="roomlink" href="{{ route('nespresso-cafe') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/nespresso/nespressoSlider-2.webp') }}" alt="nespresso"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/nespressoicon.svg') }}" alt="nespresso"/>
                    <h3>Nespresso</h3>
                </div>
                <article>
                    <p>Perfect coffee is expertise. This means as we uncompromisingly push the boundaries.</p>
                    <div class="moreButton">
                        <a href="{{ route('nespresso-cafe') }}">More About</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
</div>
<!-- Contact -->
@include('frontend.en.layouts.contact')
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