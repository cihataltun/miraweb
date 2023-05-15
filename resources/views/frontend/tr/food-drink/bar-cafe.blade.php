@extends('frontend.tr.layouts.master')

@section('title', 'Barlar & Kafeler - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-bar-cafe') }}"
       aria-expanded="false">TR</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('bar-cafe') }}">EN</a></li>
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
    <h1>BARLAR & KAFELER</h1>
</div>
<div class="barCafesHeroText">
    <p>Kafelerimizde en kaliteli malzemelerle günlük olarak hazırlanan lezzetli hamur işleri, sandviçler ve unlu mamullerin meşrubatlar eşliğinde tadını çıkarın. Veya barlarımızı keşfedin ve dünyanın dört bir yanından ustalıkla hazırlanmış kokteylleri, şarapları, viskileri, votkaları ve biraları deneyimleyin.</p>
</div>

<div class="findAlacarte-wrapper">
    <div class="findAlacarte">
        <div class="findLeftSide">
            <img class="barsSvg" src="{{ asset('assets/frontend/images/barCafes/findicon.svg') }}" alt="findicon"/>
            <h2>Barları & Kafeleri KEŞFEDİN</h2>
        </div>
        <div class="findRightSide">
            <label class="checkboxes">7/24
                <input id="alldayBar" class="checkBox" type="checkbox">
                <span class="checkmark" ></span>
            </label>
            <div class="vh"></div>
            <label class="checkboxes">Çocuk Dostu
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
                <a class="roomlink" href="{{ route('tr-chivas-lounge') }}">
                    <img class="barCafeImg"  src="{{ asset('assets/frontend/images/barCafes/Script.webp') }}" alt="chivas"/>
                    <div class="restaurantsHeader">
                        <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/chivasicon.svg') }}" alt="chivas"/>
                        <h3>Script Chivas Lounge</h3>
                    </div>
                    <article>
                        <p>Gerçek Chivas Regal sadece gerçek viski severlere. Chivas 18 Year Old en seçkin viskidir.</p>
                        <div class="moreButton">
                            <a href="{{ route('tr-chivas-lounge') }}">Daha Fazlası</a>
                        </div>
                    </article>
                </a>
            </div>
        </div>
    </div>
    <div class="item eighteen">
        <div class="bars">
            <a class="roomlink" href="{{ route('tr-hennessy-lounge') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/barCafes/Born9.webp') }}" alt="hennesy"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/hennesyicon.svg') }}" alt="hennesyicon"/>
                    <h3>BORN 9 HENNESSY LOUNGE</h3>
                </div>
                <article>
                    <p>Port Nature'ın bar deneyimi sırasında en iyi konyaklarımızın zengin ve ipeksi aromalarının tadına varın.</p>
                    <div class="moreButton">
                        <a href="{{ route('tr-hennessy-lounge') }}">Daha Fazlası</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
    <div class="item eighteen">
        <div class="bars">
            <a class="roomlink" href="{{ route('tr-irish-pub') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/barCafes/Irish%20Pub.webp') }}" alt="irishpub"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/beer.svg') }}" alt="irishpub"/>
                    <h3>Irish Pub</h3>
                </div>
                <article>
                    <p>Soğuk  bir günde Irish pub'a girmiş gibi hissedeceksiniz, özel alkollerle.</p>
                    <div class="moreButton">
                        <a href="{{ route('tr-irish-pub') }}">Daha Fazlası</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
    <div class="item allday friendly">
        <div class="bars">
            <a class="roomlink" href="{{ route('tr-lobby-bar') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/barCafes/Lobby.webp') }}" alt="lobbybar"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/lobbyicon.svg') }}" alt="lobbyicon"/>
                    <h3>Lobby Bar</h3>
                </div>
                <article>
                    <p>Lobby Bar ithal ve geleneksel alkolleriyle popüler bir mekandır.</p>
                    <div class="moreButton">
                        <a href="{{ route('tr-lobby-bar') }}">Daha Fazlası</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
    <div class="item friendly">
        <div class="bars">
            <a class="roomlink" href="{{ route('tr-flamingo-bar') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/barCafes/Flamingo.webp') }}" alt="flamingobar"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/flamingoicon.svg') }}" alt="flamingoicon"/>
                    <h3>Flamingo Bar</h3>
                </div>
                <article>
                    <p>Havuz ve soğuk bira ya da soğuk bir kokteyl akla ilk gelen fikirdir.</p>
                    <div class="moreButton">
                        <a href="{{ route('tr-flamingo-bar') }}">Daha Fazlası</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
    <div class="item friendly">
        <div class="bars">
            <a class="roomlink" href="{{ route('tr-davidoff-cafe') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/davidoff/davidoffSlider-1.webp') }}" alt="Davidoff"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/davidofficon.svg') }}" alt="davidofficon"/>
                    <h3>DAVIDOFF KAFE</h3>
                </div>
                <article>
                    <p>Üstün nitelikli kahve çekirdekleri Davidoff kafenin usta ellerinde eşsiz bir tada dönüşür.</p>
                    <div class="moreButton">
                        <a href="{{ route('tr-davidoff-cafe') }}">Daha Fazlası</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
    <div class="item friendly">
        <div class="bars">
            <a class="roomlink" href="{{ route('tr-kitkat-cafe') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/kitkat/kitkatSlider-3.webp') }}" alt="kitkat"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/kitkaticon.svg') }}" alt="kitkaticon"/>
                    <h3>Kit Kat</h3>
                </div>
                <article>
                    <p>Her ısırık; tat, çocukluk, homojen çikolata ve bildiğiniz Kit Kat içerir. </p>
                    <div class="moreButton">
                        <a href="{{ route('tr-kitkat-cafe') }}">Daha Fazlası</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
    <div class="item friendly">
        <div class="bars">
            <a class="roomlink" href="{{ route('tr-nespresso-cafe') }}">
                <img class="barCafeImg"  src="{{ asset('assets/frontend/images/nespresso/nespressoSlider-2.webp') }}" alt="nespresso"/>
                <div class="restaurantsHeader">
                    <img class="barSvg" src="{{ asset('assets/frontend/images/barCafes/nespressoicon.svg') }}" alt="nespresso"/>
                    <h3>Nespresso</h3>
                </div>
                <article>
                    <p>Mükemmel kahve uzmanlıktır. Bu, tavizsiz bir şekilde sınırları zorladığımız anlamına gelir.</p>
                    <div class="moreButton">
                        <a href="{{ route('tr-nespresso-cafe') }}">Daha Fazlası</a>
                    </div>
                </article>
            </a>
        </div>
    </div>
</div>
<!-- Contact -->
@include('frontend.tr.layouts.contact')
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