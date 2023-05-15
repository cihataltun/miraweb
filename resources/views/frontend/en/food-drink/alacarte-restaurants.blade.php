@extends('frontend.en.layouts.master')

@section('title', 'Ala Carte - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('alacarte-restaurants') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('tr-alacarte-restaurants') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-alacarte-restaurants') }}">RU</a></li>
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
            <span>The taste of tradition in every dish!</span>
        </div>
        <div class=" gastroP">
            <p>
                With a convivial and welcoming ambiance, our A'la Cartes
                are the perfect spot to catch up with family, or simply take a break and indulge in some much-needed
                delicious food.
            </p>
            <p>
                World's famous cuisine waiting for you in Port Nature Luxury.
            </p>
        </div>
    </div>
</div>
<div class="foodHeading">
    <div class="findAlacarte">
        <div class="findLeftSide">
            <img class="" src="{{ asset('assets/frontend/images/alacarte/findicon.svg') }}" alt="find"/>
            <h2>Find A'La Carte</h2>
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
                        <p class="card-text">You can't miss a meal. All day fine dining. We provide delicous food everytime.</p>
                        <div class="moreButton">
                            <a href="{{ route('alldaydinning') }}">More About</a>
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
                    <p class="card-text">A unique dining experience that offers a wide variety of sushi rolls, prepared skilled chefs.</p>
                    <div class="moreButton">
                        <a href="{{ route('sushi-bar') }}">More About</a>
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
                    <p class="card-text">Italian cuisine is characterized by its simplicity, fresh ingredients, and bold flavors.</p>
                    <div class="moreButton">
                        <a href="{{ route('italian') }}">More About</a>
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
                    <p class="card-text">Renowned French cuisine is for its sophistication, elegance, and mastership.</p>
                    <div class="moreButton">
                        <a href="{{ route('french') }}">More About</a>
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
                    <p class="card-text">The freshest fish on our chef's skilled hands and sea views on your eyes.</p>
                    <div class="moreButton">
                        <a href="{{ route('seaside') }}">More About</a>
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
                    <p class="card-text">Your child chooses yourself with our child exclusive menu.</p>
                    <div class="moreButton">
                        <a href="{{ route('mini-club-alacarte') }}">More About</a>
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
                    <p class="card-text">A diverse range of flavors, ingredients, and cooking techniques are in the Far East culture.</p>
                    <div class="moreButton">
                        <a href="{{ route('fareast') }}">More About</a>
                    </div>
                </div>

        </div>

</div>
</div>
<div class="fish">
    <img src="{{ asset('assets/frontend/images/alacarte/fish.png') }}" alt="fish"/>
</div>
<!-- Contact -->
@include('frontend.en.layouts.contact')
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