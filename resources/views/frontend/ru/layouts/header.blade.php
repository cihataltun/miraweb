<!-- Header RU-->
<header>
    <nav class="navbar navbar-expand-sm" id="navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="{{ route('ru-homepage') }}"><img src="{{ asset('assets/frontend/images/logo-port-small.svg') }}" alt="logo"/> </a>
                <div class="menubar ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('ru-accommodation') }}"
                           aria-expanded="false">Номера</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('ru-family-rooms') }}">Семейный</a></li>
                            <li><a class="dropdown-item" href="{{ route('ru-kingsuit-rooms') }}">King Suite</a></li>
                            <li><a class="dropdown-item" href="{{ route('ru-standard-rooms') }}">Стандарт</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('ru-kids-concepts') }}"
                           aria-expanded="false">Детский Концепт</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('ru-mini-club-alacarte') }}">Мини клуб </a></li>
                            <li><a class="dropdown-item" href="{{ route('ru-aquapark') }}">Аквапарк</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('ru-special-offers') }}" aria-expanded="false">2023 Акции</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('ru-food-drink') }}"
                           aria-expanded="false">Еда & Напитки</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('ru-alacarte-restaurants') }}">Рестораны A'La Carte</a></li>
                            <li><a class="dropdown-item" href="{{ route('ru-bar-cafe') }}">Бары & Кафе</a></li>
                            <li><a class="dropdown-item" href="{{ route('ru-main-restaurant') }}">Главный ресторан</a></li>
                            <li><a class="dropdown-item" href="{{ route('ru-davidoff-cafe') }}">Кафе Davidoff</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle extraMenu" href="{{ route('ru-entertainment') }}"
                           aria-expanded="false">Развлечения</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('ru-concert') }}">Концерты</a></li>
                            <li><a class="dropdown-item" href="{{ route('ru-activity') }}">Мероприятия</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('ru-contacts') }}" aria-expanded="false">Контакты</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('ru-spa') }}"
                           aria-expanded="false">Спа</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('ru-spa') }}">Спа</a></li>
                            <li><a class="dropdown-item" href="{{ route('ru-indoor-pool') }}">Крытый бассейн</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle extraMenu" href="{{ route('ru-meeting-congress') }}"
                           aria-expanded="false">Встречи & Конгресс</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item first-item" href="{{ route('ru-meeting-congress') }}#thermessos">Thermessos</a></li>
                            <li><a class="dropdown-item" href="{{ route('ru-meeting-congress') }}#aspendos">Aspendos</a></li>
                            <li><a class="dropdown-item" href="{{ route('ru-meeting-congress') }}#perge">Perge</a></li>
                            <li><a class="dropdown-item" href="{{ route('ru-meeting-congress') }}#olympos">Olympos</a></li>
                        </ul>
                    </li>

                    {{-- Language parts --}}
                    @yield('header-lang')

                    <li class="nav-item">
                        <a class="nav-link bookNowBtn" href="https://portnature.rezervasyonal.com/">Бронировать сейчас</a>
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
                <a class="roomlink" href="{{ route('ru-homepage') }}">
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
                    <a class="roomlink" href="{{ route('ru-homepage') }}">
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
                        <a class="mainLink" data-bs-toggle="collapse" href="{{ route('ru-accommodation') }}" role="button"
                           aria-expanded="false" aria-controls="accomdation">
                            Номера
                        </a>
                        <img class="arrow" data-bs-toggle="collapse" href="#accomdation" role="button"
                             aria-expanded="false" aria-controls="accomdation" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"
                             alt="grayArrow"/>
                        <div class="collapse" id="accomdation">
                            <div class="card card-body">
                                <a class="subLink" href="{{ route('ru-family-rooms') }}">Семейный</a>
                                <a class="subLink" href="{{ route('ru-kingsuit-rooms') }}">King Suite</a>
                                <a class="subLink" href="{{ route('ru-standard-rooms') }}">Стандарт</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" data-bs-toggle="collapse" href="{{ route('ru-kids-concepts') }}" role="button"
                           aria-expanded="false" aria-controls="kidsconcept">
                            Детский Концепт
                        </a>
                        <img class="arrow" data-bs-toggle="collapse" href="#kidsconcept" role="button"
                             aria-expanded="false" aria-controls="kidsconcept" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"
                             alt="grayArrow"/>
                        <div class="collapse" id="kidsconcept">
                            <div class="card card-body">
                                <a class="subLink" href="{{ route('ru-mini-club-alacarte') }}">Мини клуб</a>
                                <a class="subLink" href="{{ route('ru-aquapark') }}">Аквапарк</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" href="{{ route('ru-special-offers') }}">
                            2023 Акции
                        </a>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" data-bs-toggle="collapse" href="{{ route('ru-food-drink') }}" role="button"
                           aria-expanded="false" aria-controls="foodDrink">
                            Еда & Напитки
                        </a>
                        <img class="arrow" data-bs-toggle="collapse" href="#foodDrink" role="button"
                             aria-expanded="false" aria-controls="foodDrink" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"
                             alt="grayArrow"/>
                        <div class="collapse" id="foodDrink">
                            <div class="card card-body">
                                <a class="subLink" href="{{ route('ru-mini-club-alacarte') }}">Рестораны A'La Carte</a>
                                <a class="subLink" href="{{ route('ru-bar-cafe') }}">Бары & Кафе</a>
                                <a class="subLink" href="{{ route('ru-main-restaurant') }}">Главный ресторан</a>
                                <a class="subLink" href="{{ route('ru-davidoff-cafe') }}">Кафе Davidoff</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" data-bs-toggle="collapse" href="{{ route('ru-entertainment') }}" role="button"
                           aria-expanded="false" aria-controls="entertainment">
                            Развлечения
                        </a>
                        <img class="arrow" data-bs-toggle="collapse" href="#entertainment" role="button"
                             aria-expanded="false" aria-controls="entertainment" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"
                             alt="grayArrow"/>
                        <div class="collapse" id="entertainment">
                            <div class="card card-body">
                                <a class="subLink" href="{{ route('ru-concert') }}">Концерты</a>
                                <a class="subLink" href="{{ route('ru-concert') }}">Мероприятия</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" href="{{ route('ru-contacts') }}">
                            Контакты
                        </a>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" data-bs-toggle="collapse" href="{{ route('ru-spa') }}" role="button" aria-expanded="false"
                           aria-controls="spa">
                            Спа
                        </a>
                        <img class="arrow" data-bs-toggle="collapse" href="#spa" role="button"
                             aria-expanded="false" aria-controls="spa" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"
                             alt="grayArrow"/>
                        <div class="collapse" id="spa">
                            <div class="card card-body">
                                <a class="subLink" href="{{ route('ru-spa') }}">Спа</a>
                                <a class="subLink" href="{{ route('ru-indoor-pool') }}">Крытый бассейн</a>
                            </div>
                        </div>
                    </div>
                    <div class="mobileDrop">
                        <a class="mainLink" data-bs-toggle="collapse" href="{{ route('ru-meeting-congress') }}" role="button"
                           aria-expanded="false" aria-controls="meetingCongress">
                            Встречи & Конгресс
                        </a>
                        <img class="arrow" data-bs-toggle="collapse" href="#meetingCongress" role="button"
                             aria-expanded="false" aria-controls="meetingCongress" src="{{ asset('assets/frontend/images/arrowgray.svg') }}"
                             alt="grayArrow"/>
                        <div class="collapse" id="meetingCongress">
                            <div class="card card-body">
                                <a class="subLink" href="{{ route('ru-meeting-congress') }}#thermessos">Thermessos</a>
                                <a class="subLink" href="{{ route('ru-meeting-congress') }}#aspendos">Aspendos</a>
                                <a class="subLink" href="{{ route('ru-meeting-congress') }}#perge">Perge</a>
                                <a class="subLink" href="{{ route('ru-meeting-congress') }}#olympos">Olympos</a>
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
<!-- Header RU End -->