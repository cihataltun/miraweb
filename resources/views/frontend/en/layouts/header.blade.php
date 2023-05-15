<!-- Header -->
<header>
    <nav class="navbar navbar-expand-sm" id="navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="{{ route('homepage') }}">
                    <img src="{{ asset('assets/frontend/images/logo-port-small.svg') }}" alt="logo"/>
                </a>
                <div class="menubar ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('accommodation') }}"
                           aria-expanded="false">Rooms</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('family-rooms') }}">Family Room</a></li>
                            <li><a class="dropdown-item" href="{{ route('kingsuit-rooms') }}">King Suite</a></li>
                            <li><a class="dropdown-item" href="{{ route('standard-rooms') }}">Standard Room</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('kids-concepts') }}"
                           aria-expanded="false">Kids
                            Concept</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('mini-club-alacarte') }}">Mini Club</a></li>
                            <li><a class="dropdown-item" href="{{ route('aquapark') }}">Aquapark</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('special-offers') }}" aria-expanded="false">Offers 2023</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('food-drink') }}"
                           aria-expanded="false">Food
                            & Drink</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('alacarte-restaurants') }}">A'La Carte</a></li>
                            <li><a class="dropdown-item" href="{{ route('bar-cafe') }}">Bars & Cafes</a></li>
                            <li><a class="dropdown-item" href="{{ route('main-restaurant') }}">Main Restaurant</a></li>
                            <li><a class="dropdown-item" href="{{ route('davidoff-cafe') }}">Davidoff Cafe</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle extraMenu" href="{{ route('entertainment') }}"
                           aria-expanded="false">Entertainment</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('concert') }}">Concerts</a></li>
                            <li><a class="dropdown-item" href="{{ route('activity') }}">Activities</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('contacts') }}" aria-expanded="false">Contacts</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('spa') }}"
                           aria-expanded="false">Spa</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('spa') }}">Spa & Wellness</a></li>
                            <li><a class="dropdown-item" href="{{ route('indoor-pool') }}">Indoor Pool</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle extraMenu" href="{{ route('meeting-congress') }}"
                           aria-expanded="false">Meeting & Congress</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('meeting-congress') }}#thermessos">Thermessos</a></li>
                            <li><a class="dropdown-item" href="{{ route('meeting-congress') }}#aspendos">Aspendos</a></li>
                            <li><a class="dropdown-item" href="{{ route('meeting-congress') }}#perge">Perge</a></li>
                            <li><a class="dropdown-item" href="{{ route('meeting-congress') }}#olympos">Olympos</a></li>
                        </ul>
                    </li>
                    
                    {{-- Language parts --}}
                    @yield('header-lang')

                    <li class="nav-item">
                        <a class="nav-link bookNowBtn" href="https://portnature.rezervasyonal.com/">Book Now</a>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <div class="hamburgerMenu" id="navbar2">
        <div class="mobileHeader">
            <div class="menuLeft">
                <span data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                      aria-controls="offcanvasTop"><!-- 22.03 STYLE ADDED -->
                    <img style="width: 20px!important;height: 20px!important;" class="headerSvg" src="{{ asset('assets/frontend/images/hamburger.svg') }}"/>
                </span>
                <a class="roomlink" href="{{ route('homepage') }}">
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
                        <img class="offcanvasClose" style="height: 20px!important;width: 10px!important" class="offcanvasClose" src="{{ asset('assets/frontend/images/offcanvasclose.svg') }}" alt="closebutton"/>
                    </span>
                    <a class="roomlink" href="{{ route('homepage') }}">
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
                        <a class="mainLink" data-bs-toggle="collapse" href="{{ route('accommodation') }}" role="button"
                           aria-expanded="false" aria-controls="accomdation">
                            Rooms
                        </a>
                        <img class="arrow" data-bs-toggle="collapse" href="#accomdation" role="button"
                             aria-expanded="false" aria-controls="accomdation" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"
                             alt="grayArrow"/>
                        <div class="collapse" id="accomdation">
                            <div class="card card-body">
                                <a class="subLink" href="{{ route('standard-rooms') }}">Standard Rooms</a>
                                <a class="subLink" href="{{ route('family-rooms') }}">Family Room</a>
                                <a class="subLink" href="{{ route('kingsuit-rooms') }}">King Suite Room</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" data-bs-toggle="collapse" href="{{ route('kids-concepts') }}" role="button"
                           aria-expanded="false" aria-controls="kidsconcept">
                            Kids Concept
                        </a>
                        <img class="arrow" data-bs-toggle="collapse" href="#kidsconcept" role="button"
                             aria-expanded="false" aria-controls="kidsconcept" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"
                             alt="grayArrow"/>
                        <div class="collapse" id="kidsconcept">
                            <div class="card card-body">
                                <a class="subLink" href="{{ route('aquapark') }}">Aquapark</a>
                                <a class="subLink" href="{{ route('mini-club-alacarte') }}">Mini Club</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" href="{{ route('special-offers') }}">
                            Offers 2023
                        </a>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" data-bs-toggle="collapse" href="{{ route('food-drink') }}" role="button"
                           aria-expanded="false" aria-controls="foodDrink">
                            Food & Drink
                        </a>
                        <img class="arrow" data-bs-toggle="collapse" href="#foodDrink" role="button"
                             aria-expanded="false" aria-controls="foodDrink" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"
                             alt="grayArrow"/>
                        <div class="collapse" id="foodDrink">
                            <div class="card card-body">
                                <a class="subLink" href="{{ route('alacarte-restaurants') }}">A'La Carte</a>
                                <a class="subLink" href="{{ route('bar-cafe') }}">Bars & Cafes</a>
                                <a class="subLink" href="{{ route('main-restaurant') }}">Main Restaurant</a>
                                <a class="subLink" href="{{ route('davidoff-cafe') }}">Davidoff Cafe</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" data-bs-toggle="collapse" href="{{ route('entertainment') }}" role="button"
                           aria-expanded="false" aria-controls="entertainment">
                            Entertainment
                        </a>
                        <img class="arrow" data-bs-toggle="collapse" href="#entertainment" role="button"
                             aria-expanded="false" aria-controls="entertainment" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"
                             alt="grayArrow"/>
                        <div class="collapse" id="entertainment">
                            <div class="card card-body">
                                <a class="subLink" href="{{ route('concert') }}">Concerts</a>
                                <a class="subLink" href="{{ route('activity') }}">Activities</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" href="{{ route('contacts') }}">
                            Contacts
                        </a>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" data-bs-toggle="collapse" href="{{ route('spa') }}" role="button" aria-expanded="false"
                           aria-controls="spa">
                            Spa
                        </a>
                        <img class="arrow" data-bs-toggle="collapse" href="#spa" role="button"
                             aria-expanded="false" aria-controls="spa" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"
                             alt="grayArrow"/>
                        <div class="collapse" id="spa">
                            <div class="card card-body">
                                <a class="subLink" href="{{ route('spa') }}">Spa & Wellness</a>
                                <a class="subLink" href="{{ route('indoor-pool') }}">Indoor Pool</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" data-bs-toggle="collapse" href="{{ route('meeting-congress') }}" role="button"
                           aria-expanded="false" aria-controls="meetingCongress">
                            Meeting And Congress
                        </a>
                        <img class="arrow" data-bs-toggle="collapse" href="#meetingCongress" role="button"
                             aria-expanded="false" aria-controls="meetingCongress" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"
                             alt="grayArrow"/>
                        <div class="collapse" id="meetingCongress">
                            <div class="card card-body">
                                <a class="subLink" href="{{ route('meeting-congress') }}#thermessos">Thermessos</a>
                                <a class="subLink" href="{{ route('meeting-congress') }}#aspendos">Aspendos</a>
                                <a class="subLink" href="{{ route('meeting-congress') }}#perge">Perge</a>
                                <a class="subLink" href="{{ route('meeting-congress') }}#olympos">Olympos</a>
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