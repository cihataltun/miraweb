@extends('frontend.ru.layouts.master')

@section('title', 'Отели Белек - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-belek-hotels') }}"
        aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('belek-hotels') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-belek-hotels') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('de-belek-hotels') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<!-- Hero Swiper Section -->


<div class="hero-swiper-wrapper">

    <div class="swiper offers-hero-swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="offers-slide-inner">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-1.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-1.webp') }}" />
                    <div class="offers-hero-text offers-hero-1">
                        <p class="offers-1-top">для гостей</p>
                        <p class="offers-1-big">
                            Бесплатные <br> жетоны
                        </p>
                              </div><div class="water-sports-addendum-wrapper">               <p class="offers-addendum">на водные виды спорта</p>
              
                    <p class="offers-addendum-right">Забронируй отдых через колл-центр и получи 4 жетона в подарок</p></div>>


                </div>
            </div>
            <div class="swiper-slide">
                <div class="offers-slide-inner">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-2.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-2.webp') }}" />
                    <div class="offers-hero-text offers-hero-2">
                        <p class="offers-2-big">
                            SPA— <br> процедуры <br> в подарок!
                        </p>
                        <p class="offers-2-small">
                            При бронировании через колл-центр
                        </p>
                        <p class="offers-2-medium">Массаж или пенное <br> обертывание бесплатно</p>

                    </div>
                    <p class="spa-offers-addendum"> Забронируй отдых через колл-центр и получи 4 жетона в подарок</p>

                </div>
            </div>
            <div class="swiper-slide">
                <div class="offers-slide-inner offers-3">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-3.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-3.webp') }}" />
                    <div class="offers-hero-text offers-hero-3">
                        <div class="offers-3-medium">
                            <img class="offers-text-wrap"
                                src="{{ asset('assets/frontend/images/offers/svg/beautiful.svg') }}" />
                            Премиум
                        </div>
                        <p class="offers-3-big">
                            Бунгала для отдыха
                        </p>
                        <div class="offers-3-small">
                            <img class="offers-icon" src="{{ asset('assets/frontend/images/offers/svg/call.svg') }}" />
                            при бронировании King Suit <br> через колл-центр бесплатно
                        </div>

                    </div>
                    <p class="offers-addendum-center"> Забронируй отдых через колл-центр и получи 4 жетона в подарок</p>

                </div>
            </div>
            <div class="swiper-slide">
                <div class="offers-slide-inner offers-4">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-4.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-4.webp') }}" />
                    <div class="offers-hero-text offers-hero-4">
                        <p class="offers-4-small">
                            для гостей
                        </p>
                        <p class="offers-4-big">
                            VIP-трансфер
                        </p>
                        <div class="offers-4-medium">
                            <img class="offers-text-wrap-1"
                                src="{{ asset('assets/frontend/images/offers/svg/line.svg') }}" />

                            Бесплатно
                            <img class="offers-text-wrap-2"
                                src="{{ asset('assets/frontend/images/offers/svg/line-two-01.svg') }}" />

                        </div>

                    </div>
                    <div class="transfer-addendum-wrapper"><p class="offers-4-addendum">
                        Гости, бронирующие проживание через колл-центр, могут воспользоваться бесплатной услугой
                        VIP-трансфера</p>
                        <p class="offers-addendum-left"> Забронируй отдых через колл-центр и получи 4 жетона в подарок</p></div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class="offers-slide-inner offers-5">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-5.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-5.webp') }}" />
                    <div class="offers-hero-text offers-hero-5">
                        <p class="offers-5-big">Дарим <br> подарки</p>
                        <img src="{{ asset('assets/frontend/images/offers/svg/line-two.svg') }}" />
                        <p class="offers-5-small">для самых маленьких</p>
                      

                    </div>
  <p class="children-offers-addendum"> Забронируй отдых через колл-центр и получи 4 жетона в подарок</p>                </div>
            </div>
        </div>
    </div>
</div>


<!-- SHOWCASE SECTION -->

<div class="showcase-section-wrapper">
    <div class="plane-svg colorful-image-wrapper"></div>
    <img class="plane-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/plane-1.svg') }}" />
    <p class="plane-before">.. закажите билет прямо сейчас</p>
    <div class="booking-section-wrapper">
        <p class="booking-section-title">Для отпуска вашей мечты </p>
        <p class="booking-section-title-2">В нашем отеле</p>
        <div class="brand-swiper-wrapper">
            <div class="swiper brand-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a
                            href="https://www.tripadvisor.com.tr/Hotel_Review-g4833191-d6427728-Reviews-Port_Nature_Luxury_Resort_Hotel_Spa-Bogazkent_Serik_District_Turkish_Mediterranean_Co.html"><img
                                class="svg-tripadvisor"
                                src="{{ asset('assets/frontend/images/offers/tripadvisor.png') }}" /></a>
                    </div>
                    <div class="swiper-slide">
                        <a
                            href="https://www.booking.com/searchresults.tr.html?ss=Port+Nature&ssne=Side&ssne_untouched=Side&label=bookings-name-lO9ne8CLb_o7ijml9UoG0QS540961834209%3Apl%3Ata%3Ap1%3Ap22.563.000%3Aac%3Aap%3Aneg%3Afi%3Atikwd-65526620%3Alp1012764%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YcX_GyndjDE1ljcv9tcUssY&aid=376386&lang=tr&sb=1&src_elem=sb&src=searchresults&group_adults=2&no_rooms=1&group_children=0&sb_travel_purpose=leisure"><img
                                class="svg-booking"
                                src="{{ asset('assets/frontend/images/offers/booking.png') }}" /></a>
                    </div>
                    <div class="swiper-slide">
                        <a
                            href="https://www.expedia.com/Belek-Hotels-Port-Nature-Luxury-Resort-Spa-All-Inclusive.h8108100.Hotel-Information?chkin=2023-04-11&chkout=2023-04-12&x_pwa=1&rfrr=HSR&pwa_ts=1679996745179&referrerUrl=aHR0cHM6Ly93d3cuZXhwZWRpYS5jb20vSG90ZWwtU2VhcmNo&useRewards=false&rm1=a2&regionId=6034717&destination=Belek%2C+Serik%2C+Antalya+Region%2C+T%C3%BCrkiye&destType=CURRENT_LOCATION&selected=8108100&latLong=36.83444%2C31.162045&sort=RECOMMENDED&userIntent="><img
                                class="svg-expedia"
                                src="{{ asset('assets/frontend/images/offers/expedia.png') }}" /></a>
                    </div>
                </div>
            </div>


        </div>
        <!-- Booking Section -->
        <div class="booking">
            <div class="dropdown room-selection-dropdown">
                <button class="room-selection-dropdown-btn  dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Выбрать номер
                </button>
                <ul class="dropdown-menu room-selection-dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <div class="dropdown-item room-dropdown-link" href="#" data-value="Семейный Номер ">Семейный
                            Номер </div>
                    </li>
                    <li>
                        <div class="dropdown-item room-dropdown-link" href="#" data-value="Номера Стандарт">Номера
                            Стандарт</div>
                    </li>
                    <li>
                        <div class="dropdown-item room-dropdown-link" href="#" data-value="Номер Suite">Номер Suite
                        </div>
                    </li>
                </ul>
            </div>



            <label for="checkin"></label><input id="checkin" data-defaultDate="today" value="Check-in">
            <label for="checkout"></label><input id="checkout" data-defaultDate="today" value="Check-Out">

            <div class="guestDiv guestdiv-adult"><span class="guests guests-adult">
                    <img class="icon-head" src="{{ asset('assets/frontend/images/offers/svg/adult-icon.svg') }}">

                    Взрослые</span>
                <div class="guestMenu guestMenuAdult">
                    <div class="adultCounter dropdown-item">
                        <p>Взрослые</p>
                        <div class="counter-item">
                            <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="adult-decrement"
                                onclick="adultDecrement()" alt="decrement" />
                            <p id="adultCount"></p>
                            <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="adult-increment"
                                onclick="adultIncrement()" alt="increment" />
                        </div>
                    </div>


                </div>

            </div>
            <div class="guestDiv guestdiv-child"><span class="guests guests-child">
                    <img class="icon-head" src="{{ asset('assets/frontend/images/offers/svg/child-icon.svg') }}">
                    Дети</span>
                <div class="guestMenu guestMenuChild">

                    <div class="childCounter dropdown-item">
                        <p>Дети</p>
                        <div class="counter-item">
                            <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                onclick="childDecrement()" alt="decrement" />
                            <p id="childCount"></p>
                            <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                onclick="childIncrement()" alt="increment" />
                        </div>
                    </div>
                    <div class="childAgeCounter1 childAgeCounter dropdown-item">
                        <p>Дети 1 </p>
                        <div class="counter-item">
                            <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                onclick="childAge1Decrement()" alt="decrement" />
                            <p id="childAge1Count">0</p>
                            <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                onclick="childAge1Increment()" alt="increment" />
                        </div>
                    </div>
                    <div class="childAgeCounter2  childAgeCounter dropdown-item">
                        <p>Дети 2 </p>
                        <div class="counter-item">
                            <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                onclick="childAge2Decrement()" alt="decrement" />
                            <p id="childAge2Count">0</p>
                            <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                onclick="childAge2Increment()" alt="increment" />
                        </div>
                    </div>
                    <div class="childAgeCounter3  childAgeCounter dropdown-item">
                        <p>Дети 3 </p>
                        <div class="counter-item">
                            <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                onclick="childAge3Decrement()" alt="decrement" />
                            <p id="childAge3Count">0</p>
                            <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                onclick="childAge3Increment()" alt="increment" />
                        </div>
                    </div>
                </div>

            </div>
            <a href="https://portnature.rezervasyonal.com/?currency=TRY" class="bookNow"><img
                    src="{{ asset('assets/frontend/images/offers/svg/booknow.svg') }}" />Забронировать сейчас</a>
        </div>
        <!-- Booking Section End -->
    </div>

    <div class="offers-rooms-swiper swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide rooms-swiper-slide">
                <img class="room-image-swiper" src="{{ asset('assets/frontend/images/offers/family.webp') }}" />
                <a href="{{ route('ru-family-rooms') }}" class="room-swiper-button"><span>Семейный </span>
                    <img class="btn-chevron"
                        src="{{ asset('assets/frontend/images/offers/svg/button-chevron.svg') }}" />
                </a>
                <div class="room-swiper-details">
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-1.svg') }}" />
                        <p class="room-detail-text">4 Взрослых + 1</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-2.svg') }}" />
                        <p class="room-detail-text">45 m2</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-3.svg') }}" />
                        <p class="room-detail-text">Боковой вид на море
                        </p>

                    </div>
                </div>
            </div>
            <div class="swiper-slide rooms-swiper-slide">
                <img class="room-image-swiper" src="{{ asset('assets/frontend/images/offers/king.webp') }}" />
                <a href="{{ route('ru-kingsuit-rooms') }}" class="room-swiper-button"><span>King Suite</span>
                    <img class="btn-chevron"
                        src="{{ asset('assets/frontend/images/offers/svg/button-chevron.svg') }}" />
                </a>
                <div class="room-swiper-details">
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-1.svg') }}" />
                        <p class="room-detail-text">5 Взрослых + 1</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-2.svg') }}" />
                        <p class="room-detail-text">110 m2</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-3.svg') }}" />
                        <p class="room-detail-text">Вид на море
                        </p>

                    </div>
                </div>
            </div>
            <div class="swiper-slide rooms-swiper-slide">
                <img class="room-image-swiper" src="{{ asset('assets/frontend/images/offers/standard.webp') }}" />
                <a href="{{ route('ru-standard-rooms') }}" class="room-swiper-button"><span>Стандарт</span>
                    <img class="btn-chevron"
                        src="{{ asset('assets/frontend/images/offers/svg/button-chevron.svg') }}" />
                </a>
                <div class="room-swiper-details">
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-1.svg') }}" />
                        <p class="room-detail-text">2 Взрослых + 2</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-2.svg') }}" />
                        <p class="room-detail-text">34 m2</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-3.svg') }}" />
                        <p class="room-detail-text">Боковой вид / Море / Окрестности
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="room-swiper-controls">
            <div class="swiper-prev">
                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 13L1 7L7 1" stroke="#ECD38D" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>

            </div>
            <div class="swiper-next">
                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 13L7 7L1 1" stroke="#ECD38D" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>

            </div>
            <div class="swiper-scrollbar"></div>

        </div>
    </div>
</div>



<!--- FLIGHT SECTION -->

<div class="flight-wrapper">
    <p class="flight-addendum">
        Ссылки, которые ссылаются из нашего веб-сайта на другие веб-сайты, не возлагают на владельца сайта
        ответственности за содержимое веб-сайтов, на которые даны ссылки, и владелец сайта не может нести
        ответственность за любой ущерб или убытки, возникшие из-за содержимого других веб-сайтов. Все ссылки на другие
        веб-сайты предоставлены на нашем веб-сайте для удобства пользователей нашего веб-сайта. Это соглашение не
        подразумевает, что Port Nature или ее филиалы каким-либо образом связаны с этими другими веб-сайтами или их
        владельцами.

    </p>
    <div class="flight-swiper-div">
        <div class="swiper flight-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="https://www.flypgs.com/ru"><img class="pegasus-logo"
                            src="{{ asset('assets/frontend/images/offers/logo-1.png') }}" /></a>
                </div>
                <div class="swiper-slide">
                    <a
                        href="https://ru.skyscanner.com/?currency=RUB&locale=ru-RU&market=RU&traveller_context=6ad51ea2-8b52-4ebb-a20f-4a40f8737f62"><img
                            class="scanner-logo" src="{{ asset('assets/frontend/images/offers/logo-2.png') }}" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.corendonairlines.com/"><img class="corendon-logo"
                            src="{{ asset('assets/frontend/images/offers/logo-3.png') }}" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.aviasales.ru/?params=IST1&currency=usd"><img class="avia-logo"
                            src="{{ asset('assets/frontend/images/offers/logo-4.png') }}" /></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.turkishairlines.com/ru-int/flights/booking/index.html"><img
                            class="turkish-logo" src="{{ asset('assets/frontend/images/offers/logo-5.png') }}" /></a>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- TRANSFER SECTION -->

<div class="transfer-wrapper">
    <img class="transfer-desktop" src="{{ asset('assets/frontend/images/offers/desktop-car.svg') }}">
    <img class="transfer-tablet" src="{{ asset('assets/frontend/images/offers/tablet-car.svg') }}">
    <img class="transfer-mobile" src="{{ asset('assets/frontend/images/offers/mobile-car.svg') }}">


    <div class="transfer-texts">
        <p class="transfer-title">Нажмите здесь, чтобы заказать трансфер</p>
        <p class="transfer-mid">Комфортное путешествие</p>
        <a class="transfer-btn" target="blank" href="https://portnature.rezervasyonal.com/ExtraService">Заказать
            трансфер</a>
    </div>
</div>

<!--- CONTACT SECTION -->
<div class="offers-contact-wrapper">
    <div class="offers-contact-div">
        <div class="luggage-image-wrapper colorful-image-wrapper"></div>


        <div class="offers-contact-info">
            <p class="offers-contact-title">Позвонить бесплатно в колл-центр или бронировать онлайн</p>
            <a href="tel:+902427310707">
                <img src="{{ asset('assets/frontend/images/offers/svg/phone.svg') }}" />

                +90 (242) 731 07 07
            </a>
            <a href="mailto:info@portnature.com.tr">
                <img src="{{ asset('assets/frontend/images/offers/svg/mail.svg') }}" />
                info@portnature.com.tr
            </a>
            <a href="https://api.whatsapp.com/send?phone=905334141923&text=&source=&data="
                class="offers-contact-whatsapp">
                <img src="{{ asset('assets/frontend/images/offers/svg/whatsapp.svg') }}" />
                WhatsApp
            </a>
        </div>
    </div>
</div>

<!--- FIRST SPLIT SECTION -->
<div class="offers-first-split">
    <div class="first-split-clouds colorful-image-wrapper">
    </div>
    <div class="split-text">
        <h1>Отели Белек</h1>
        <p><b>Отели Анталии Белек 5 звезд</b> - это курорты на южном побережье Турции, известными своими прекрасными пляжами.
            На карте Белека вы можете легко найти все отели, в том числе и Лакшери Белек (luxury belek), представляющий
            из себя настоящий рай для любителей роскоши. Турция Белек отели 5 звезд порадуют своих гостей шикарными
            номерами, великолепными бассейнами и ресторанами класса люкс. Если вы хотите <a href="https://portnature.rezervasyonal.com/?_gl=1*1oybvfm*_ga*MTA5NTU5NDM2My4xNjc5NDcwMDY0*_ga_6EYM72GR61*MTY4MjQxODk2NS42NC4xLjE2ODI0MTg5NjguMC4wLjA.">забронировать отель в Турции
            Белек</a>, то вам предоставляется множество вариантов отелей с различным выбором номеров, ресторанов, кафе и
            баров.</p>
    </div>
    <a class="split-img" href="https://www.portnature.com.tr/ru">
        <img
            src="{{ asset('assets/frontend/images/offers/seo/ru/belek/oteli-belek-port-nature-premium-hotel-resort.webp') }}" />
    </a>
</div>

<!--- BOOKING OPPORTUNITIES SECTION -->


<div class="opportunity-wrapper">
    <p class="h2-title">Преимущества бронирования</p>
    <div class="swiper opportunity-swiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <a href="{{ route('ru-concert') }}" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-one.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">Предстоящие концерты в отеле 💓💥</p>
                        <p>Насладитесь концертами с участием лучших исполнителей со всего мира, не выходя из роскошного
                            отеля Port Nature Luxury Resort Hotel. </p>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="https://blog.ostrovok.ru/dostoprimechatelnosti-beleka/"
                    class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-two.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">Посетите лучшие места в Белеке



                            🥰 💤 🏖 </p>
                        <p>Белек обладает уникальной атмосферой, где вы сможете насладиться экскурсией на лодке, семейным сафари на багги, посетить античные города и многое другое. </p>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ route('ru-spa') }}" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-three.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">Испытайте абсолютное расслабление 🥰 💎</p>
                        <p>Расслабьтесь и восстановите силы своего ума, тела и души с помощью наших роскошных
                            спа-процедур и различных массажей. </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


<!--- RATING SECTION -->

<div class="rating-wrapper">
    <p class="rating-title">Глазами наших гостей </p>
    <div class="rating-swiper-div">
        <p class="rating-addendum">Positive (15)</p>
        <div class="swiper rating-swiper swiper-container">

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="rating-item">
                        <div class="rating-upper">
                            <img class="rating-profile-pic"
                                src="{{ asset('assets/frontend/images/offers/contacts-1.webp') }}">
                            <div class="rating-info">
                                <p class="rating-name">Irina S</p>
                                <div class="rating-stars"></div>
                            </div>
                        </div>
                        <div class="rating-lower">
                            <p class="rating-text">
                                They settled in immediately . Daily cleaning, the rooms are
                                fully equipped with hygiene products. Amazed by the wonderful
                                service in restaurants . Coffee and ice cream with desserts just fly away.
                                Responsive Russian-speaking staff solves any request.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rating-item">
                        <div class="rating-upper">
                            <img class="rating-profile-pic"
                                src="{{ asset('assets/frontend/images/offers/contacts-2.webp') }}">
                            <div class="rating-info">
                                <p class="rating-name">Tatiana R</p>
                                <div class="rating-stars"></div>
                            </div>
                        </div>
                        <div class="rating-lower">
                            <p class="rating-text">
                                A place where you want to return to ❤️
                                We had a family vacation 2vzr and children (4 and 6 years old) in May 2022 and were
                                delighted 😍 Despite the fact that the concerts were canceled, the animation was at the
                                highest level.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rating-item">
                        <div class="rating-upper">
                            <img class="rating-profile-pic"
                                src="{{ asset('assets/frontend/images/offers/contacts-3.webp') }}">
                            <div class="rating-info">
                                <p class="rating-name">Belall423</p>
                                <div class="rating-stars"></div>
                            </div>
                        </div>
                        <div class="rating-lower">
                            <p class="rating-text">
                                An unbiased review of an objective tourist is a good Turkish hotel, strong, good.As a
                                result, I will say that I can recommend the hotel, even despite the end of the season
                                everything was great, at least for us. Mood creates emotions. What you tune in to, you
                                will get)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rating-item">
                        <div class="rating-upper">
                            <img class="rating-profile-pic"
                                src="{{ asset('assets/frontend/images/offers/contacts-4.webp') }}">
                            <div class="rating-info">
                                <p class="rating-name">Lida K</p>
                                <div class="rating-stars"></div>
                            </div>
                        </div>
                        <div class="rating-lower">
                            <p class="rating-text">
                                Thanks to the animators of the hotel for an unforgettable stay! 💕
                                I have been to many hotels in Turkey, but this one will always remain in my heart! There
                                are too many advantages to list them all...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rating-item">
                        <div class="rating-upper">
                            <img class="rating-profile-pic"
                                src="{{ asset('assets/frontend/images/offers/contacts-5.webp') }}">
                            <div class="rating-info">
                                <p class="rating-name">Paradise601</p>
                                <div class="rating-stars"></div>
                            </div>
                        </div>
                        <div class="rating-lower">
                            <p class="rating-text">
                                The best holiday at the beginning of the season!
                                I liked everything very much, the weather let us down for a couple of days, but there
                                are no complaints about the hotel. Top notch service, excellent food. In a word, I love
                                it!!!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rating-item">
                        <div class="rating-upper">
                            <img class="rating-profile-pic"
                                src="{{ asset('assets/frontend/images/offers/contacts-6.webp') }}">
                            <div class="rating-info">
                                <p class="rating-name">Leonid Sh</p>
                                <div class="rating-stars"></div>
                            </div>
                        </div>
                        <div class="rating-lower">
                            <p class="rating-text">
                                Vacation with wife
                                We were received very warmly and joyfully. A pleasant surprise was a one-time free visit
                                to the spa with a choice of any procedure you like. This is really wow! Thank you!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rating-item">
                        <div class="rating-upper">
                            <img class="rating-profile-pic"
                                src="{{ asset('assets/frontend/images/offers/contacts-7.webp') }}">
                            <div class="rating-info">
                                <p class="rating-name">Elina</p>
                                <div class="rating-stars"></div>
                            </div>
                        </div>
                        <div class="rating-lower">
                            <p class="rating-text">
                                Holidays with parents and children
                                This is our second year with the whole family. And for the second year we are leaving
                                with good impressions. Children's animation is on top. Will definitely come back again!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rating-item">
                        <div class="rating-upper">
                            <img class="rating-profile-pic"
                                src="{{ asset('assets/frontend/images/offers/contacts-8.webp') }}">
                            <div class="rating-info">
                                <p class="rating-name">Artem B</p>
                                <div class="rating-stars"></div>
                            </div>
                        </div>
                        <div class="rating-lower">
                            <p class="rating-text">
                                Rest is great
                                I really liked the hotel, delicious cocktails, I like the food in the restaurant. Every
                                evening there is a mini disco for younger children, younger children run with joy every
                                evening.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rating-item">
                        <div class="rating-upper">
                            <img class="rating-profile-pic"
                                src="{{ asset('assets/frontend/images/offers/contacts-9.webp') }}">
                            <div class="rating-info">
                                <p class="rating-name">Lyubov M</p>
                                <div class="rating-stars"></div>
                            </div>
                        </div>
                        <div class="rating-lower">
                            <p class="rating-text">
                                Lovely vacation
                                Oh, we fell in love with this hotel with all our heart, it was a wonderful vacation
                                where everyone liked it.
                                Kids club you are the best!!! Thanks to all the staff of the hotel. We will come again!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rating-item">
                        <div class="rating-upper">
                            <img class="rating-profile-pic"
                                src="{{ asset('assets/frontend/images/offers/contacts-10.webp') }}">
                            <div class="rating-info">
                                <p class="rating-name">Arthur K</p>
                                <div class="rating-stars"></div>
                            </div>
                        </div>
                        <div class="rating-lower">
                            <p class="rating-text">
                                Liked the hotel very much. Vacationing with my son. There are many activities for
                                children, every day there are activities on the street. Animator Nastya spends boccia,
                                football and darts twice. The hotel has nice staff.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="rating-swiper-controls">
                <div class="swiper-prev">
                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 13L1 7L7 1" stroke="#ECD38D" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                </div>
                <div class="swiper-next">
                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 13L7 7L1 1" stroke="#ECD38D" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                </div>
                <div class="swiper-scrollbar"></div>

            </div>
        </div>
    </div>

</div>

<!-- Split to right 1 -->
<div class="splits-mother-wrapper">
    <div class="grey-wrapper">
        <div class="split-wrapper first-split">
            <div class="split-1">
                <div class="split-svg colorful-image-wrapper"></div>
                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/plane-2.svg') }}">

            </div>
            <div class="split-2">
                <h2 class="split-text-1">Белек самые лучшие отели</h2>
                <p>
                    <b>Белек лучшие отели</b> - это курорты, привлекающие туристов со всего мира своими красивыми пляжами. Если
                    вы ищете лучшие отели в Белеке, то здесь есть богатый выбор. Лучшие отели Белека 5 звезд с
                    первоклассным сервисом и роскошными номерами, которые находятся на первой линии с прямым выходом к
                    морю. Если хотите выбрать только один <a href="https://www.portnature.com.tr/ru">лучший отель в Белеке</a>, то стоит обратить внимание на отель,
                    который подходит именно вам, учитывая ваши личные предпочтения. Отель Белек лучший? Возможно, но
                    каждый должен выбирать отель, исходя из своих личностных потребностей и желаний.
                </p>
            </div>
        </div>
    </div>
    <div class="split-wrapper second-split">
        <div class="split-1">
            <h3 class="split-text-2">Лучшие семейные отели Белек</h3>
            <p> <b>Отель Белек лучший</b> - пятизвездочный курорт с бассейнами и аквапарками, которые обеспечат <a href="https://www.portnature.com.tr/razvlecheniya">развлечения для
                детей</a>, а также <a href="https://www.portnature.com.tr/spa-centr">спа-центры</a> и <a href="https://www.portnature.com.tr/eda-napitki">рестораны международной кухни</a>. Семейные отели в Белеке (Belek family hotels)
                также предлагают <a href="https://www.portnature.com.tr/detskiy-koncept">детские клубы</a> и бесплатные <a href="https://www.portnature.com.tr/meropriyatiya">мероприятия</a> для детей, чтобы улучшить их отдых. Лучшие отели
                Белека для детей расположены на первой линии и предоставляют все необходимое для комфортного семейного
                отдыха с детьми в семейных номерах. Если вы ищете лучшие семейные отели Белека 5 звезд или семейные
                отели Турции 5 звезд Белек - есть множество вариантов, чтобы сделать ваш отдых незабываемым.
            </p>
        </div>
        <a class="split-2" href="https://www.portnature.com.tr/nomer-king-suite">
            <img class="offers-split-photo"
                src="{{ asset('assets/frontend/images/offers/seo/ru/belek/lucshiye-semeyniye-oteli-belek-nomer-king-suite.webp') }}">


        </a>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper third-split split-with-svg">
            <div class="split-1">
                <div class="split-svg colorful-image-wrapper"></div>
                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/belek.svg') }}">

            </div>
            <div class="split-2">
                <h4 class="split-text-3">Белек лучшие отели для отдыха с детьми</h4>
                <p>
                    Белек отели 5 звезд для детей - прекрасный курорт для семейного отдыха. Если вы планируете отпуск, 
                    обязательно рассмотрите <b>лучшие отели Белека для детей</b>, которые предлагают просторные <a href="https://www.portnature.com.tr/nomera-standart">номера стандарт</a>,
                     <a href="https://www.portnature.com.tr/semeyniy-nomer">семейные номера</a> и <a href="https://www.portnature.com.tr/nomer-king-suite">номер King Suite</a>. Хорошие отели в Белеке для отдыха с детьми предлагают <a href="https://www.portnature.com.tr/detskiy-koncept">детский концепт</a> 
                     в мини клубе для детей и <a href="https://www.portnature.com.tr/akvapark">аквапарк</a>. Вы можете забронировать детские отели в Белеке онлайн, чтобы получить 
                     лучшую цену. Некоторые из отелей Белека с детьми имеют аквапарки, бассейны для детей и множество других 
                     удобств для маленьких гостей.
                 </p>
                <h5 class="third-second-h4 split-text-3">Белек отели с аквапарком</h5>
                <p>
                    Отдых в Белеке станет еще более увлекательным, если вы выберете <b>детские отели в белеке с аквапарком</b>.
                    <a href="https://www.portnature.com.tr/akvapark">Лучшие отели Белека с аквапарком</a> имеют большие бассейны с горками для детей и взрослых. Многие отели
                    Белека с детьми имеют собственные аквапарки и другие удобства для детей любого возраста. Вы можете
                    <a href="https://portnature.rezervasyonal.com/">забронировать через сайт отель Белек</a> с аквапарком или <a href="tel:+902427310707">позвонить в колл-центр</a>, чтобы найти лучшую
                    цену и получить дополнительные скидки и бонусы. </p>
            </div>
        </div>
    </div>
    <div class="split-wrapper fourth-split split-with-picture">
        <a class="split-1" href="https://www.portnature.com.tr/pub-irish">
            <img class="offers-split-photo"
                src="{{ asset('assets/frontend/images/offers/seo/ru/belek/belek-lucshiye-oteli-5-zvezd-irish-pub.webp') }}">


        </a>
        <div class="split-2">
            <h3 class="split-text-4">Белек лучшие отели 5 звезд</h3>
            <p>
                Белек предлагает роскошные  отели 5 звезд, которые обеспечат незабываемый отдых на побережье
                Средиземного моря. <b>Лучшие отели Белека 5 звезд</b> позаботятся о комфорте и удобствах каждого гостя. Они
                предлагают широкий спектр развлечений и услуг, таких как <a href="https://www.portnature.com.tr/spa-centr">спа-центры</a>, <a href="https://www.portnature.com.tr/kritiy-basseyn">крытый бассейн</a>, <a href="https://www.portnature.com.tr/alacarte-restoran-italyannskiy">итальянский</a>,
                <a href="https://www.portnature.com.tr/alacarte-restoran-francuzskiy">французский</a>, <a href="https://www.portnature.com.tr/alacarte-restoran-dalnevostochniy">дальневосточный</a> рестораны, <a href="https://www.portnature.com.tr/kafe-kit-kat">кафе KitKat, <a href="https://www.portnature.com.tr/kafe-davidoff">Davidoff</a>, <a href="https://www.portnature.com.tr/kafe-nespresso">Nespresso</a> и бары <a href="https://www.portnature.com.tr/flamingobar">Flamingo</a>, <a href="https://www.portnature.com.tr/script-chivas-launge">Script Chivas</a>
                и <a href="https://www.portnature.com.tr/pub-irish">Irish Pub</a>. Лучший отель Белека может предложить особенную атмосферу и панорамный вид на море. Лучшие
                отели в Белеке 5 звезд можно <a href="https://portnature.rezervasyonal.com/?_gl=1*ber7o1*_ga*MTA5NTU5NDM2My4xNjc5NDcwMDY0*_ga_6EYM72GR61*MTY4MjQxODk2NS42NC4xLjE2ODI0MjE5ODMuMC4wLjA.">забронировать через сайт резервации</a>, чтобы получить лучшую цену и
                дополнительные бонусы и скидки.</p>

        </div>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper fifth-split">
            <div class="split-1">
                <h4 class="split-text-5">Отели Белек 5 звезд ультра все включено</h4>
                <p>
                    Отели 5 звезд ультра все включено в Белек (hotel Belek ultra all inclusive) - 
                    популярное место отдыха на юге Турции. <b>Белек отели</b> гарантируют беззаботный и комфортный 
                    отдых, включая <a href="https://www.portnature.com.tr/restorani-alacarte">рестораны a'la carte</a>, <a href="https://www.portnature.com.tr/bari-kafe">бары и кафе</a>. Вы можете <a href="https://portnature.rezervasyonal.com/">онлайн забронировать отель в 
                    Белеке</a> с ультра все включено через сайты, чтобы получить лучшую цену и скидки. Турция Белек
                     отели 5 звезд все включено также предлагают <a href="https://www.portnature.com.tr/concerti">концерты</a> для своих гостей, чтобы сделать ваш отдых 
                     еще более запоминающимся. Белек отели люкс (Luxury Belek hotels) могут предложить индивидуальный 
                     сервис для своих гостей.
                </p>

            </div>
            <div class="split-2">
                <div class="split-svg colorful-image-wrapper"></div>


            </div>
        </div>
    </div>
    <div class="split-wrapper sixth-split split-with-picture">
        <div class="split-1">
            <a href="https://www.portnature.com.tr/concerti">
                <img class="offers-split-photo"
                    src="{{ asset('assets/frontend/images/offers/seo/ru/belek/belek-oteli-5-zvezd-pervaya-liniya-koncerti.webp') }}">
                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/line.svg') }}">


            </a>
        </div>
        <div class="split-2">
            <h5 class="split-text-6">Белек отели 5 звезд первая линия</h5>
            <p>
                Белек - это идеальное место для тех, кто ищет отель 5 звезд на первой береговой линии с собственным
                пляжем. Отличным выбором будут отели Белека 5 звезд первая линия, предлагающие услуги ультра все
                включено, чтобы гости могли наслаждаться беззаботным отдыхом. Забронировать <b>Белек отели первая береговая
                линия</b> можно через специализированные сайты и агентства. Некоторые отели Белек 5 звезды первая линия
                предлагают различные <a href="https://www.portnature.com.tr/razvlecheniya">развлечения</a> и дополнительные услуги для более приятного отдыха. </p>

        </div>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper seventh-split split-with-svg">

            <div class="split-1">
                <h3 class="split-text-7">Топ отели Белек</h3>
                <p>
                    Белек - это место, где вы можете найти вип отель лучшего обслуживания. <b>Топ отели Белек</b> предлагают
                    широкий выбор роскошных номеров, такие как <a href="https://www.portnature.com.tr/semeyniy-nomer">семейный номер</a>, <a href="https://www.portnature.com.tr/nomera-standart">стандарт номер</a> и <a href="https://www.portnature.com.tr/nomer-king-suite">номер King Suite</a>. Топ
                    лучших отелей Белека располагаются на берегу моря и имеют приватный пляж, <a href="https://www.portnature.com.tr/alacarte-restoran-all-day-dining">рестораны All Day Dining</a>,
                    <a href="https://www.portnature.com.tr/alacarte-restoran-sushi-bar">Sushi bar</a>, <a href="https://www.portnature.com.tr/alacarte-restoran-seaside">Seaside</a>, <a href="https://www.portnature.com.tr/alacarte-restoran-mini-club">Mini Club</a> с высоким уровнем кулинарии и <a href="https://www.portnature.com.tr/born9-hennessy-launge">бары Born 9 Hennessy</a>, <a href="https://www.portnature.com.tr/pub-irish">Irish Pub</a> и <a href="https://www.portnature.com.tr/lobbybar">Lobby
                    Bar</a>, где можно наслаждаться изысканными коктейлями. Отель Белек <a href="https://www.portnature.com.tr/ru">Port Nature Luxury Resort & Spa</a>
                    предлагает также различные развлечения и концерты популярных звезд.
                </p>
                <h4 class="split-text-7">Белек отели премиум-класса</h4>
                <p>
                    Люкс отели Турции - популярное место для туристов, известное своими 
                    роскошными премиум отелями. Пребывание в премиум отелях Белека, таких как 
                    <b>Премиум Отель Белек</b> или Белек Делюкс Отель, предоставляет гостям непревзойденный 
                    уровень комфорта и роскоши. Премиум отели Белека, доступные для бронирования на сайте 
                    или <a href="tel:+902427310707">бронирования через колл-центр</a>, а также имеют <a href="https://www.portnature.com.tr/kritiy-basseyn">крытый бассейн</a>, <a href="https://www.portnature.com.tr/restorani-alacarte">рестораны</a> и <a href="https://www.portnature.com.tr/spa-centr">спа-центры</a>. 
                    Любители роскоши и комфорта обязательно оценят пребывание в отель белек, где так много прекрасных 
                    отелей премиум-класса.        
                </p>
            </div>
            <div class="split-2">
                <div class="split-svg colorful-image-wrapper"></div>
                <img class="split-svg-mobile"
                    src="{{ asset('assets/frontend/images/offers/svg/mobile/location-01.svg') }}">

            </div>
        </div>
    </div>



    <!-- Stage Swiper Section -->

    <div class="stage-wrapper">
        <div class="swiper stage-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="{{ route('ru-activity') }}" class="stage-inner-wrapper">
                        <img class="stage-img" src="{{ asset('assets/frontend/images/offers/activities.webp') }}">
                        <div class="stage-text">
                            <p class="stage-small-text">приятно проведите время</p>
                            <p class="stage-heading">Мероприятия </p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ route('ru-concert') }}" class="stage-inner-wrapper">
                        <img class="stage-img" src="{{ asset('assets/frontend/images/offers/concert.webp') }}">
                        <div class="stage-text">
                            <p class="stage-small-text">ваши любимые исполнители</p>
                            <p class="stage-heading">Сценические Шоу</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ route('ru-aquapark') }}" class="stage-inner-wrapper">
                        <img class="stage-img" src="{{ asset('assets/frontend/images/offers/aquapark.webp') }}">
                        <div class="stage-text">
                            <p class="stage-small-text">безопасность для вашего ребенка</p>
                            <p class="stage-heading">Аквапарк   </p>
                        </div>
                    </a>
                </div>

            </div>
        </div>

    </div>
    <!-- Three Image Section -->
    <div class="three-img-wrapper">
        <div class="three-img-div">
            <div class="split-svg three-img-1 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h5 class="split-text-8">Новые отели Белек</h5>
                <p>
                    Белек постоянно обновляется и развивается как туристическое направление, и <b>новые отели Белека</b>
                    становятся все более популярными. Новый отель в Белеке, доступный для бронирования на Отель Букинг
                    Белек, предлагают гостям удобные <a href="https://www.portnature.com.tr/semeyniy-nomer">семейные номера</a> и <a href="https://www.portnature.com.tr/nomer-king-suite">номера King Suite</a>, <a href="https://www.portnature.com.tr/alacarte-restoran-seaside">рестораны Seaside</a>, <a href="https://www.portnature.com.tr/alacarte-restoran-sushi-bar">Sushi Bar</a>,
                    спа-центры и множество других удобств. Многие новые отели Белека с аквапарком оснащены большим
                    количнством водных горок, так что гости могут наслаждаться весельем и развлечениями прямо на
                    территории отеля. Новые люкс отели Турции являются идеальным местом для тех, кто ищет комфортное и
                    современное проживание в одном из самых привлекательных городов страны.
                </p>
            </div>
        </div>
        <div class="three-img-div">
            <div class="split-svg three-img-2 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h2 class="split-text-9">Лучший отель Белек</h2>
                <p>
                    Если вы ищете лучшие люкс отели Турции для комфортного отдыха,
                     не пропустите возможность побывать в одном из наилучших отелей <b>Белек резорт спа</b>. 
                     На территории <a href="https://www.portnature.com.tr/spa-centr">Белек Резорт Спа</a> (Belek Resort Hotel) есть множество спа-центров, 
                     позволяющих расслабиться в сауне с помощью разных видов массажа и уходом за кожей.
                      Самые лучшие отели Белека предлагают роскошные номера с видом на море, бассейны и 
                      собственные пляжи. Проведите незабываемый отдых в Белеке и наслаждайтесь всем, что предлагают
                       гостиницы Белека 5 звезд.
                 </p>
            </div>
        </div>
        <div class="three-img-div">
            <div class="split-svg three-img-3 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h3 class="split-text-10">Отель в Белеке 5 звезд</h3>
                <p>
                    <b>Отель в Белеке 5 звезд</b> - это идеальное место для тех, кто хочет отдохнуть в роскошных условиях.
                    Отель Белек 5 звезд предлагает систему "все включено", что позволит вам не беспокоиться о еде и
                    напитках во время отдыха. Некоторые 5 звездочные отели Белека располагаются прямо на пляже и
                    предлагают широкий спектр развлечений, таких как водные виды спорта и <a href="https://www.portnature.com.tr/concerti">концерты</a> зарубежных звезд.
                    Незабываемый отдых в Белеке в отелях 5 звезд - это опыт, который стоит попробовать.
                </p>
            </div>
        </div>

    </div>
    <div class="grey-wrapper">
        <div class="double-text-wrapper double-reverse">


            <div class="double-text">
                <h4 class="split-text-11">Белек Делюкс отель </h4>
                <p>

                    Белек Делюкс отель - расположен на побережье Белека и является одним из лучших люкс отелей Турции.
                    Отель имеет 5 звездочный статус и предлагает гостям высочайший уровень комфорта и сервиса. Белек
                    отели люкс - это именно то место, где можно насладиться отдыхом по полной. <a href="https://portnature.rezervasyonal.com/?_gl=1*ber7o1*_ga*MTA5NTU5NDM2My4xNjc5NDcwMDY0*_ga_6EYM72GR61*MTY4MjQxODk2NS42NC4xLjE2ODI0MjE5ODMuMC4wLjA.">Онлайн бронирование</a>
                    делает процесс резервации номеров в Белек Делюкс отеле еще проще и быстрее. Если вы ищете место,
                    чтобы испытать настоящий отдых, <b>Белек Делюкс отель</b> - это идеальный выбор для вас. </p>
            </div>

            <div class="double-text">
                <h5 class="split-text-11">Забронировать отель в Белеке</h5>
                <p>

                    Если вы хотите <b>забронировать отель в Белеке</b>, можете воспользоваться несколькими вариантами. Вы
                    можете забронировать отель Белек через <a href="tel:+902427310707">колл-центр</a>, связавшись с отелем напрямую по телефону, или
                    <a href="https://portnature.rezervasyonal.com/">забронировать отель Белек онлайн</a>, через специальный сайт бронирования. Наслаждайтесь отдыхом в
                    прекрасном месте и спешите забронировать отель в Белеке уже сегодня!
                </p>
            </div>
            <a href="https://www.portnature.com.tr/concerti">
                <img class="offers-split-photo"
                    src="{{ asset('assets/frontend/images/offers/seo/ru/belek/belek-oteli-5-zvezd-pervaya-liniya-koncerti.webp') }}">
            </a>
        </div>
    </div>

    <div class="split-wrapper eighth-split">
        <div class="split-1">
            <div class="split-svg eighth-split-img colorful-image-wrapper"></div>
            <img class="three-img-mobile" src="{{ asset('assets/frontend/images/offers/svg/camera.svg') }}">
            <img class="three-img-mobile img-rotate" src="{{ asset('assets/frontend/images/offers/svg/ticket.svg') }}">
            <img class="three-img-mobile img-rotate" src="{{ asset('assets/frontend/images/offers/svg/glasses.svg') }}">
        </div>
        <div class="split-2">
            <h2 class="split-text-12">10 лучших отелей Белека</h2>
            <p>
                Если вы ищете лучшие отели в Белек, то вам стоит обратить внимание на топ 10 лучших отелей Белека (Top
                10 Belek hotels), включающие в себя самые лучшие 5-звездочные отели Белека. Большинство из этих отелей
                можно забронировать онлайн, сделав процесс бронирования еще проще и удобнее. Хорошие отели в Турции 5
                звезд - это гарантия высочайшего уровня комфорта. Не упустите возможность побывать в одном из <b>10 лучших
                отелей Белека</b> и насладиться роскошью и уютом!</p>
        </div>
    </div>


    <div class="double-text-wrapper double-text-single">
        <div class="double-text">
            <h3 class="split-text-11">Рейтинг отелей Белека</h3>
            <p>

                <b>Рейтинг отелей Белека 5 звезд</b> давно уже завоевал свою популярность среди туристов со всего мира. Отель
                Белек (Belek Hotel) – один из ярких представителей данной категории, который заслуженно получил
                положительные отзывы своих гостей. Кроме того, отзывы о других отелях Белека 5 звезд свидетельствуют о
                том, что качество обслуживания и уровень сервиса действительно на самом высоком уровне. Независимо от
                выбранного отеля, каждый турист получает незабываемые впечатления от отдыха в Белеке и от изысканных
                блюд международной кухни, которые предлагают отели Белека (Belek Hotels). </p>
        </div>


    </div>


</div>

@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/offers.js') }}"></script>

@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/offers.css') }}" />

@endsection