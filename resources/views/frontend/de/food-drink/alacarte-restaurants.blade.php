@extends('frontend.de.layouts.master')

@section('title', 'Ala Carte - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-alacarte-restaurants') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('alacarte-restaurants') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('de-alacarte-restaurants') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-alacarte-restaurants') }}">RU</a></li>
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
            <span>Der Geschmack der Tradition in jedem Gericht
            </span>
        </div>
        <div class=" gastroP">
            <p>
                Mit einem geselligen und einladenden Ambiente bieten unsere A'la Cartes sind der perfekte Ort, um sich mit der Familie zu treffen oder einfach eine Pause zu machen und sich mit dem dringend benötigten köstlichen Essen zu verwöhnen.


            </p>
            <p>
                Weltberühmte Küche erwartet Sie im Port Nature Luxury.

            </p>
        </div>
    </div>
</div>
<div class="foodHeading">
    <div class="findAlacarte">
        <div class="findLeftSide">
            <img class="" src="{{ asset('assets/frontend/images/alacarte/findicon.svg') }}" alt="find"/>
            <h2>A’LA CARTE FINDEN
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
                        <p class="card-text">Sie können keine Mahlzeit verpassen. Ganztägig gutes Essen. Wir bieten jedes Mal leckeres Essen.</p>
                        <div class="moreButton">
                            <a href="{{ route('alldaydinning') }}">Mehr Uber</a>
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
                    <p class="card-text">Ein einzigartiges kulinarisches Erlebnis, das eine große Auswahl an Sushi-Rollen bietet, die von erfahrenen Köchen zubereitet werden.</p>
                    <div class="moreButton">
                        <a href="{{ route('sushi-bar') }}">Mehr Uber</a>
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
                    <p class="card-text">Die italienische Küche zeichnet sich durch ihre Einfachheit, frische Zutaten und kräftige Aromen aus.</p>
                    <div class="moreButton">
                        <a href="{{ route('italian') }}">Mehr Uber</a>
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
                    <p class="card-text">Die französische Küche ist bekannt für ihre Raffinesse, Eleganz und Meisterschaft.</p>
                    <div class="moreButton">
                        <a href="{{ route('french') }}">Mehr Uber</a>
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
                    <p class="card-text">Der frischeste Fisch in den geschickten Händen unseres Küchenchefs und der Meerblick vor Ihren Augen.</p>
                    <div class="moreButton">
                        <a href="{{ route('seaside') }}">Mehr Uber</a>
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
                    <p class="card-text">Ihr Kind wählt selbst mit unserem Kinder-Exklusiv-Menü.</p>
                    <div class="moreButton">
                        <a href="{{ route('mini-club-alacarte') }}">Mehr Uber</a>
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
                    <p class="card-text">In der fernöstlichen Kultur findet sich eine vielfältige Auswahl an Aromen, Zutaten und Kochtechniken.</p>
                    <div class="moreButton">
                        <a href="{{ route('fareast') }}">Mehr Uber</a>
                    </div>
                </div>

        </div>

</div>
</div>
<div class="fish">
    <img src="{{ asset('assets/frontend/images/alacarte/fish.png') }}" alt="fish"/>
</div>
<!-- Contact -->
@include('frontend.de.layouts.contact')
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