<!-- Header -->
<header>
    <nav class="navbar navbar-expand-sm" id="navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="{{ route('tr-homepage') }}"><img src="{{ asset('assets/frontend/images/logo-port-small.svg') }}" alt="logo"/> </a>
                <div class="menubar ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('tr-accommodation') }}"
                           aria-expanded="false">Konaklama</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('tr-family-rooms') }}">Aile Odaları</a></li>
                            <li><a class="dropdown-item" href="{{ route('tr-kingsuit-rooms') }}">King Süit</a></li>
                            <li><a class="dropdown-item" href="{{ route('tr-standard-rooms') }}">Standart Odalar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('tr-kids-concepts') }}"
                           aria-expanded="false">Çocuk Konsepti</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('tr-mini-club-alacarte') }}">Mini Club</a></li>
                            <li><a class="dropdown-item" href="{{ route('tr-aquapark') }}">Su Parkı</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('tr-special-offers') }}" aria-expanded="false">2023 Fırsatları</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('tr-food-drink') }}"
                           aria-expanded="false">Yeme & İçme</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('tr-alacarte-restaurants') }}">A'La Carte</a></li>
                            <li><a class="dropdown-item" href="{{ route('tr-bar-cafe') }}">Barlar & Kafeler</a></li>
                            <li><a class="dropdown-item" href="{{ route('tr-main-restaurant') }}">Ana Restoran</a></li>
                            <li><a class="dropdown-item" href="{{ route('tr-davidoff-cafe') }}">Davidoff Kafe</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle extraMenu" href="{{ route('tr-entertainment') }}"
                           aria-expanded="false">Eğlenceler</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('tr-concert') }}">Konserler</a></li>
                            <li><a class="dropdown-item" href="{{ route('tr-activity') }}">Aktiviteler</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('tr-contacts') }}" aria-expanded="false">İletişim</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('tr-spa') }}"
                           aria-expanded="false">SPA</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('tr-spa') }}">Spa Merkezi</a></li>
                            <li><a class="dropdown-item" href="{{ route('tr-indoor-pool') }}">Kapalı Havuz</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle extraMenu" href="{{ route('tr-meeting-congress') }}"
                           aria-expanded="false">Toplantı & Kongre</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('tr-meeting-congress') }}#thermessos">Thermessos</a></li>
                            <li><a class="dropdown-item" href="{{ route('tr-meeting-congress') }}#aspendos">Aspendos</a></li>
                            <li><a class="dropdown-item" href="{{ route('tr-meeting-congress') }}#perge">Perge</a></li>
                            <li><a class="dropdown-item" href="{{ route('tr-meeting-congress') }}#olympos">Olympos</a></li>
                        </ul>
                    </li>
                    
                    {{-- Language parts --}}
                    @yield('header-lang')


                    <li class="nav-item">
                        <a class="nav-link bookNowBtn" href="https://portnature.rezervasyonal.com/">Şimdi Rezervasyon Yap</a>
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
                    <img class="headerSvg" src="{{ asset('assets/frontend/images/hamburger.svg') }}"/>
                </span>
                <a class="roomlink" href="{{ route('tr-homepage') }}">
                    <img  src="{{ asset('assets/frontend/images/logo-port-small.svg') }}" alt="mobileLogo"/>
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
                    <img class="offcanvasClose" src="{{ asset('assets/frontend/images/offcanvasclose.svg') }}" alt="closebutton"/>
                </span>
                    <a class="roomlink" href="{{ route('tr-homepage') }}">
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
                        <a class="mainLink" data-bs-toggle="collapse" href="{{ route('tr-accommodation') }}" role="button"
                           aria-expanded="false" aria-controls="accomdation">
                            Konaklama
                        </a>
                        <img class="arrow" data-bs-toggle="collapse" href="#accomdation" role="button"
                             aria-expanded="false" aria-controls="accomdation" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"
                             alt="grayArrow"/>
                        <div class="collapse" id="accomdation">
                            <div class="card card-body">
                                <a class="subLink" href="{{ route('tr-family-rooms') }}">Aile Odaları</a>
                                <a class="subLink" href="{{ route('tr-kingsuit-rooms') }}">King Süit</a>
                                <a class="subLink" href="{{ route('tr-standard-rooms') }}">Standart Odalar</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" data-bs-toggle="collapse" href="{{ route('tr-kids-concepts') }}" role="button"
                           aria-expanded="false" aria-controls="kidsconcept">
                            Çocuk Konsepti
                        </a>
                        <img class="arrow" data-bs-toggle="collapse" href="#kidsconcept" role="button"
                             aria-expanded="false" aria-controls="kidsconcept" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"
                             alt="grayArrow"/>
                        <div class="collapse" id="kidsconcept">
                            <div class="card card-body">
                                <a class="subLink" href="{{ route('tr-mini-club-alacarte') }}">Mini Club</a>
                                <a class="subLink" href="{{ route('tr-aquapark') }}">Su Parkı</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" href="{{ route('tr-special-offers') }}">
                            2023 Fırsatları
                        </a>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" data-bs-toggle="collapse" href="{{ route('tr-food-drink') }}" role="button"
                           aria-expanded="false" aria-controls="foodDrink">
                            Yeme & İçme
                        </a>
                        <img class="arrow" data-bs-toggle="collapse" href="#foodDrink" role="button"
                             aria-expanded="false" aria-controls="foodDrink" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"
                             alt="grayArrow"/>
                        <div class="collapse" id="foodDrink">
                            <div class="card card-body">
                                <a class="subLink" href="{{ route('tr-alacarte-restaurants') }}">A'La Carte</a>
                                <a class="subLink" href="{{ route('tr-bar-cafe') }}">Barlar & Kafeler</a>
                                <a class="subLink" href="{{ route('tr-main-restaurant') }}">Ana Restoran</a>
                                <a class="subLink" href="{{ route('tr-davidoff-cafe') }}">Davidoff Kafe</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" data-bs-toggle="collapse" href="{{ route('tr-entertainment') }}" role="button"
                           aria-expanded="false" aria-controls="entertainment">
                            Eğlenceler
                        </a>
                        <img class="arrow" data-bs-toggle="collapse" href="#entertainment" role="button"
                             aria-expanded="false" aria-controls="entertainment" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"
                             alt="grayArrow"/>
                        <div class="collapse" id="entertainment">
                            <div class="card card-body">
                                <a class="subLink" href="{{ route('tr-concert') }}">Konserler</a>
                                <a class="subLink" href="{{ route('tr-activity') }}">Aktiviteler</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" href="{{ route('tr-contacts') }}">
                            İletişim
                        </a>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" data-bs-toggle="collapse" href="{{ route('tr-spa') }}" role="button" aria-expanded="false"
                           aria-controls="spa">
                            SPA
                        </a>
                        <img class="arrow" data-bs-toggle="collapse" href="#spa" role="button"
                             aria-expanded="false" aria-controls="spa" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"
                             alt="grayArrow"/>
                        <div class="collapse" id="spa">
                            <div class="card card-body">
                                <a class="subLink" href="{{ route('tr-spa') }}">Spa Merkezi</a>
                                <a class="subLink" href="{{ route('tr-indoor-pool') }}">Kapalı Havuz</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" data-bs-toggle="collapse" href="{{ route('tr-meeting-congress') }}" role="button"
                           aria-expanded="false" aria-controls="meetingCongress">
                            Toplantı & Kongre
                        </a>
                        <img class="arrow" data-bs-toggle="collapse" href="#meetingCongress" role="button"
                             aria-expanded="false" aria-controls="meetingCongress" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"
                             alt="grayArrow"/>
                        <div class="collapse" id="meetingCongress">
                            <div class="card card-body">
                                <a class="subLink" href="{{ route('tr-meeting-congress') }}#thermessos">Thermessos</a>
                                <a class="subLink" href="{{ route('tr-meeting-congress') }}#aspendos">Aspendos</a>
                                <a class="subLink" href="{{ route('tr-meeting-congress') }}#perge">Perge</a>
                                <a class="subLink" href="{{ route('tr-meeting-congress') }}#olympos">Olympos</a>
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