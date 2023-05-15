<!-- Header -->
<header>
    <nav class="navbar navbar-expand-sm" id="navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="{{ route('de-homepage') }}"><img src="{{ asset('assets/frontend/images/logo-port-small.svg') }}" alt="logo"/> </a>
                <div class="menubar ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('de-accommodation') }}"
                           aria-expanded="false">ZIMMER</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('de-family-rooms') }}">Familienzimmer</a></li>
                            <li><a class="dropdown-item" href="{{ route('de-kingsuit-rooms') }}">King Suite</a></li>
                            <li><a class="dropdown-item" href="{{ route('de-standard-rooms') }}">Standardzimmer</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('de-kids-concepts') }}"
                           aria-expanded="false">KINDERKONZEPT</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('de-mini-club-alacarte') }}">Mini Club</a></li>
                            <li><a class="dropdown-item" href="{{ route('de-aquapark') }}">Aquapark</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('de-special-offers') }}" aria-expanded="false">ANGEBOTE 2023</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('de-food-drink') }}"
                           aria-expanded="false">SPEISEN & GETRÄNKE</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('de-alacarte-restaurants') }}">A'La Carte</a></li>
                            <li><a class="dropdown-item" href="{{ route('de-bar-cafe') }}">Bars & Cafés</a></li>
                            <li><a class="dropdown-item" href="{{ route('de-main-restaurant') }}">Hauptrestaurant</a></li>
                            <li><a class="dropdown-item" href="{{ route('de-davidoff-cafe') }}">Davidoff Kafe</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle extraMenu" href="{{ route('de-entertainment') }}"
                           aria-expanded="false">UNTERHALTUNG</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('de-concert') }}">Konzerte</a></li>
                            <li><a class="dropdown-item" href="{{ route('de-activity') }}">Aktivitäten</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('de-contacts') }}" aria-expanded="false">KONTAKTE</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('de-spa') }}"
                           aria-expanded="false">SPA</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('de-spa') }}">SPA</a></li>
                            <li><a class="dropdown-item" href="{{ route('de-indoor-pool') }}">Innenpool</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle extraMenu" href="{{ route('de-meeting-congress') }}"
                           aria-expanded="false">TAGUNG & KONGRESS</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('de-meeting-congress') }}#thermessos">Thermessos</a></li>
                            <li><a class="dropdown-item" href="{{ route('de-meeting-congress') }}#aspendos">Aspendos</a></li>
                            <li><a class="dropdown-item" href="{{ route('de-meeting-congress') }}#perge">Perge</a></li>
                            <li><a class="dropdown-item" href="{{ route('de-meeting-congress') }}#olympos">Olympos</a></li>
                        </ul>
                    </li>
                    
                    {{-- Language parts --}}
                    @yield('header-lang')

                    <li class="nav-item">
                        <a class="nav-link bookNowBtn" href="https://portnature.rezervasyonal.com/">Jetzt buchen</a>
                    </li>
                </div>

            </div>
        </div>
    </nav>
    <div class="hamburgerMenu" id="navbar2">
        <div class="mobileHeader">
            <div class="menuLeft">
                <span data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                      aria-controls="offcanvasTop">
                    <img style="width: 20px!important;height: 20px!important;" class="headerSvg" src="{{ asset('assets/frontend/images/hamburger.svg') }}"/>
                </span>
                <a class="roomlink" href="{{ route('de-homepage') }}">
                    <img class="mobile-header-logo"  src="{{ asset('assets/frontend/images/logo-port-small.svg') }}" alt="mobileLogo"/>
                </a>
            </div>
            <div class="menuRight">
                <div class="whatsappLogo">
                    <a href="https://api.whatsapp.com/send?phone=905334141923&text=&source=&data=">
                        <img class="headerSvg" src="{{ asset('assets/frontend/images/whatsappwhite.svg') }}" alt="whatsappLogo"/>
                    </a>
                </div>
                <div class="mobilePhoneLogo">
                    <a href="tel:+902427310707">
                        <img class="headerSvg" src="{{ asset('assets/frontend/images/telephonewhite.svg') }}" alt="telIcon"/>
                    </a>
                </div>
                    
                    {{-- Language parts --}}
                    @yield('header-lang')

                </div>
        </div>

        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header">
                <div class="menuLeft">
                <span data-bs-dismiss="offcanvas" aria-label="Close">
                    <img style="height: 20px!important;width: 20px!important" class="offcanvasClose" src="{{ asset('assets/frontend/images/offcanvasclose.svg') }}" alt="closebutton"/>
                </span>
                    <a class="roomlink" href="{{ route('de-homepage') }}">
                        <img class="offcanvasLogo" src="{{ asset('assets/frontend/images/logoMobileHeader.png') }}" alt="mobileLogo"/>
                    </a>
                </div>
                <div class="menuRight">
                    <div class="whatsappLogo">
                        <a href="https://api.whatsapp.com/send?phone=905334141923&text=&source=&data=">
                            <img class="headerSvg" src="{{ asset('assets/frontend/images/whatsappgray.svg') }}" alt="wpgray"/>
                        </a>
                    </div>
                    <div class="mobilePhoneLogo">
                        <a href="tel:+902427310707">
                            <img class="headerSvg" src="{{ asset('assets/frontend/images/phoneGray.png') }}" alt="phonegray"/>
                        </a>
                    </div>

                    {{-- Language parts --}}
                    @yield('header-lang')

                </div>

            </div>
            <div class="offcanvas-body">
                <article>
                    <div class="mobileDrop">
                        <a class="mainLink" data-bs-toggle="collapse" href="{{ route('de-accommodation') }}" role="button"
                           aria-expanded="false" aria-controls="accomdation">
                            ZIMMER
                        </a>
                        <img class="arrow" data-bs-toggle="collapse" href="#accomdation" role="button"
                             aria-expanded="false" aria-controls="accomdation" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"
                             alt="grayArrow"/>
                        <div class="collapse" id="accomdation">
                            <div class="card card-body">
                                <a class="subLink" href="{{ route('de-family-rooms') }}">Familienzimmer</a>
                                <a class="subLink" href="{{ route('de-kingsuit-rooms') }}">King Suite Room</a>
                                <a class="subLink" href="{{ route('de-standard-rooms') }}">Standardzimmer</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" data-bs-toggle="collapse" href="{{ route('de-kids-concepts') }}" role="button"
                           aria-expanded="false" aria-controls="kidsconcept">
                            KİNDERKONZEPT
                        </a>
                        <img class="arrow" data-bs-toggle="collapse" href="#kidsconcept" role="button"
                             aria-expanded="false" aria-controls="kidsconcept" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"
                             alt="grayArrow"/>
                        <div class="collapse" id="kidsconcept">
                            <div class="card card-body">
                                <a class="subLink" href="{{ route('de-mini-club-alacarte') }}">Mini Club</a>
                                <a class="subLink" href="{{ route('de-aquapark') }}">Aquapark</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" href="{{ route('de-special-offers') }}">
                            ANGEBOTE 2023
                        </a>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" data-bs-toggle="collapse" href="{{ route('de-food-drink') }}" role="button"
                           aria-expanded="false" aria-controls="foodDrink">
                            SPEISEN & GETRÄNKE
                        </a>
                        <img class="arrow" data-bs-toggle="collapse" href="#foodDrink" role="button"
                             aria-expanded="false" aria-controls="foodDrink" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"
                             alt="grayArrow"/>
                        <div class="collapse" id="foodDrink">
                            <div class="card card-body">
                                <a class="subLink" href="{{ route('de-mini-club-alacarte') }}">A'La Carte</a>
                                <a class="subLink" href="{{ route('de-bar-cafe') }}">Bars & Cafés</a>
                                <a class="subLink" href="{{ route('de-main-restaurant') }}">Hauptrestaurant</a>
                                <a class="subLink" href="{{ route('de-davidoff-cafe') }}">Davidoff Kafe</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" data-bs-toggle="collapse" href="{{ route('de-entertainment') }}" role="button"
                           aria-expanded="false" aria-controls="entertainment">
                            UNTERHALTUNG
                        </a>
                        <img class="arrow" data-bs-toggle="collapse" href="#entertainment" role="button"
                             aria-expanded="false" aria-controls="entertainment" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"
                             alt="grayArrow"/>
                        <div class="collapse" id="entertainment">
                            <div class="card card-body">
                                <a class="subLink" href="{{ route('de-concert') }}">Konzerte</a>
                                <a class="subLink" href="{{ route('de-activity') }}">Aktivitäten</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" href="{{ route('de-contacts') }}">
                            KONTAKTE
                        </a>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" data-bs-toggle="collapse" href="{{ route('de-spa') }}" role="button" aria-expanded="false"
                           aria-controls="spa">
                            SPA
                        </a>
                        <img class="arrow" data-bs-toggle="collapse" href="#spa" role="button"
                             aria-expanded="false" aria-controls="spa" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"
                             alt="grayArrow"/>
                        <div class="collapse" id="spa">
                            <div class="card card-body">
                                <a class="subLink" href="{{ route('de-spa') }}">SPA</a>
                                <a class="subLink" href="{{ route('de-indoor-pool') }}">Innenpool</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" data-bs-toggle="collapse" href="{{ route('de-meeting-congress') }}" role="button"
                           aria-expanded="false" aria-controls="meetingCongress">
                            TAGUNG & KONGRESS
                        </a>
                        <img class="arrow" data-bs-toggle="collapse" href="#meetingCongress" role="button"
                             aria-expanded="false" aria-controls="meetingCongress" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"
                             alt="grayArrow"/>
                        <div class="collapse" id="meetingCongress">
                            <div class="card card-body">
                                <a class="subLink" href="{{ route('de-meeting-congress') }}#thermessos">Thermessos</a>
                                <a class="subLink" href="{{ route('de-meeting-congress') }}#aspendos">Aspendos</a>
                                <a class="subLink" href="{{ route('de-meeting-congress') }}#perge">Perge</a>
                                <a class="subLink" href="{{ route('de-meeting-congress') }}#olympos">Olympos</a>
                            </div>
                        </div>
                    </div>
                </article>
                <div class="mobileSocialIcon">
                    <a href="https://www.youtube.com/user/portnaturehotel">
                        <span>
                            <img src="{{ asset('assets/frontend/images/youtubegray.svg') }}" alt="youtubegray"/>
                        </span>
                    </a>
                    <a href="https://www.facebook.com/portnature">
                        <span>
                            <img src="{{ asset('assets/frontend/images/facebookgray.svg') }}" alt="facebook"/>
                        </span>
                    </a>
                    <a href="https://www.instagram.com/portnatureluxury/">
                        <span>
                            <img src="{{ asset('assets/frontend/images/instagramgray.svg') }}" alt="instagram"/>
                        </span>
                    </a>
                    <a href="https://vk.com/publicportnature">
                        <span>
                            <img src="{{ asset('assets/frontend/images/vkgray.svg') }}" alt="vk"/>
                        </span>
                    </a>
                    <a href="https://www.tripadvisor.com/Hotel_Review-g4833191-d6427728-Reviews-Port_Nature_Luxury_Resort_Hotel_Spa-Bogazkent_Serik_District_Turkish_Mediterranean_Co.html">
                        <span>
                            <img src="{{ asset('assets/frontend/images/tripadvisorgray.svg') }}" alt="tripadvisor"/>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->