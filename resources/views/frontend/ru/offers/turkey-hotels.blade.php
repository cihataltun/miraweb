@extends('frontend.ru.layouts.master')

@section('title')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-turkey-hotels') }}"
        aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('turkey-hotels') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-turkey-hotels') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('de-turkey-hotels') }}">DE</a></li>
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
        <h1>Отели Турции</h1>
        <p><b><a href="https://www.portnature.com.tr/ru">Отели Турции</a></b> предлагают различные варианты размещения для всех возрастов и бюджетов. Цены в отелях Турции
            могут меняться в зависимости от категории отеля и сезона. Отели Турции бронирование может быть осуществлено
            онлайн или через <a href="tel:+902427310707">колл-центр</a> отеля, где помогут выбрать подходящий вариант размещения. Отели Турции для
            отдыха с детьми - это замечательный способ провести время вдали от шумного города. Многие отели Турция
            предлагают детские бассейны, развлекательные программы и <a href="https://www.portnature.com.tr/alacarte-restoran-mini-club">клубы для детей</a>, чтобы родители могли насладиться
            полноценным отдыхом. Турция отели - отличный выбор для отдыха всей семьей.

        </p>
    </div>
    <a class="split-img" href="https://www.portnature.com.tr/ru">
        <img
            src="{{ asset('assets/frontend/images/offers/seo/ru/turkey/oteli-turcii-port-nature-premium-resort-hotel.webp') }}" />
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
                <a href="https://hotels24.ua/news/luchshie-kurorty-turcii-top-8-11232045.html"
                    class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-two.webp') }}" />
                    </div>
                    <div class="opportunity-text">
                        <p class="opportunity-title">Посетите лучшие места в Турции
                            🥰 💤 🏖 </p>
                        <p>Посетите потрясающе красивые города Турции, которые богаты древней культурой, разнообразной кухней и прекрасной природой.</p>
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
                <h2 class="split-text-1">Отели в Турции Все Включено</h2>
                <p>
                    Отели Турции ультра все включено предлагают люксовый комфорт и разнообразные развлечения. Отдыхающие
                    могут выбрать <b>отель Турции с аквапарком все включено</b>, чтобы насладиться большими бассейнами прямо на
                    территории отеля. Отель Турции 5 звезд все включено - это пятизвездочный сервис, который включает в
                    себя <a href="https://www.portnature.com.tr/semeyniy-nomer">люксовые семейные номера</a>, рестораны с <a href="https://www.portnature.com.tr/alacarte-restoran-italyannskiy">итальянской</a> и <a href="https://www.portnature.com.tr/alacarte-restoran-francuzskiy">французской кухней</a>, а также развлечения для
                    всей семьи. Отели Турции все включено Анталия - это отели, расположенные на южном побережье Турции,
                    где гостей ждут жаркий климат и красивые пляжи. Такой отдых в Турции Анталия оставит незабываемые
                    впечатления и наполнит жизнь новыми эмоциями.
                </p>
            </div>
        </div>
    </div>
    <div class="split-wrapper second-split">
        <div class="split-1">
            <h3 class="split-text-2">Отели Турции с аквапарком</h3>
            <p> <b><a href="https://www.portnature.com.tr/akvapark">Лучшие отели Турции с аквапарком</a></b> предлагают своим гостям не только горки и 
                бассейны на территории отеля, но и высокий уровень сервиса. Отели в Турции с
                 аквапарком на первой линии позволяют наслаждаться не только развлечениями, но 
                 и легко добраться до пляжа. <b>Отель Турции с аквапарком в Кемер</b> - это гостиницы, 
                 расположенные в живописном месте, где можно отдохнуть с компанией близких друзей. 
                 Некоторые отели Турции с большим аквапарком предлагают более 20 горок и несколько бассейнов, 
                 что делает отдых еще более интересным и разнообразным.
            </p>
        </div>
        <a class="split-2" href="https://www.portnature.com.tr/nomera-standart">
            <img class="offers-split-photo"
                src="{{ asset('assets/frontend/images/offers/seo/ru/turkey/oteli-turcii-s-akvaparkom-nomera-standart.webp') }}">


        </a>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper third-split split-with-svg">
            <div class="split-1">
                <div class="split-svg colorful-image-wrapper"></div>
                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/belek.svg') }}">

            </div>
            <div class="split-2">
                <h3 class="split-text-3">Лучшие отели Турции Анталия</h3>
                <p>
                    Турция Анталия славится своими роскошными отелями, с высоким уровнем сервиса. <b>Лучшие отели Турции
                    Анталия</b> (Turkey hotels Antalya) - это 5 звездочные отели, где гостей ждут роскошные номера <a href="https://www.portnature.com.tr/nomera-standart">Стандарт</a>,
                    King Suite и <a href="https://www.portnature.com.tr/nomera">другие номера</a>, <a href="https://www.portnature.com.tr/alacarte-restoran-dalnevostochniy">рестораны с дальневосточной</a> и <a href="https://www.portnature.com.tr/alacarte-restoran-italyannskiy">итальянской кухней</a>, <a href="https://www.portnature.com.tr/spa-centr">SPA-центр</a> и множество
                    других услуг. Отели Анталии Белек 5 звезд - это незабываемый отдых на берегу моря, с возможностью
                    наслаждаться красивыми пляжами и разнообразными развлечениями. Букинг Турция Анталия предлагает
                    широкий выбор отелей, где вы сможете прочитать отзывы предыдущих посетителей.
                </p>
                <h4 class="third-second-h4 split-text-3">Турция Отели 5 звезд все включено Анталия</h4>
                <p>
                    Анталия Турция - это райский уголок на земле, который можно наслаждаться в лучших отелях 5 звезд
                    ультра все включено. Отель Турция Анталия предлагает комфортабельные <a href="https://www.portnature.com.tr/semeyniy-nomer">семейные номера</a>, <a href="https://www.portnature.com.tr/nomera-standart">номера
                    Стандарт</a> и <a href="https://www.portnature.com.tr/nomer-king-suite">King Suite</a>, отличные <a href="https://www.portnature.com.tr/alacarte-restoran-sushi-bar">рестораны <b>Sushi Bar</b></a>, <b><a href="https://www.portnature.com.tr/alacarte-restoran-all-day-dining">All Day Dining</a></b>, <b><a href="https://www.portnature.com.tr/alacarte-restoran-seaside">Seaside A'la carte</a></b>, <b><a href="https://www.portnature.com.tr/bari-kafe">бары и кафе</a></b>
                    <a href="https://www.portnature.com.tr/kafe-kit-kat">KitKat</a>, <b><a href="https://www.portnature.com.tr/kafe-nespresso">Nespresso</a></b>, <b><a href="https://www.portnature.com.tr/kafe-davidoff">Davidoff</a></b>: <b><a href="https://www.portnature.com.tr/script-chivas-launge">Script Chivas</a></b>, <b><a href="https://www.portnature.com.tr/born9-hennessy-launge">Born 9 Hennessy</a></b> и развлекательные программы в мини-клубе
                    для детей. Отели 5 звезд Турция Анталия находятся на первой линии пляжа, где можно наслаждаться
                    кристально чистым морем и прекрасными пейзажами. <b>Анталия Турция отели 5 звезд</b> - это гарантия
                    качества и безопасности, а также отличный выбор для незабываемого отдыха с семьей или друзьями. Если
                    вы хотите испытать незабываемые впечатления и отдохнуть в роскошных условиях, выбирайте лучшие
                    гостиницы 5 звезд все включено в Турции Анталия.
                </p>
            </div>
        </div>
    </div>
    <div class="split-wrapper fourth-split split-with-picture">
        <a class="split-1" href="https://www.portnature.com.tr/born9-hennessy-launge">
            <img class="offers-split-photo"
                src="{{ asset('assets/frontend/images/offers/seo/ru/turkey/turciya-antaliya-otel-bar-born9-hennessy-lounge.webp') }}">


        </a>
        <div class="split-2">
            <h4 class="split-text-4">Турция Анталия Отель</h4>
            <p>
                <b>Отель Анталья</b> - один из самых популярных курортов Турции, привлекающий туристов со всего мира. Если вы
                ищете отель в Турции Анталия (Hotel Antalya Turkey), то вам предлагается огромный выбор, включая отели 5
                звезд Турция Анталия. Они предлагают множество удобств, включая <a href="https://www.portnature.com.tr/kritiy-basseyn">крытый бассейн</a>, <a href="https://www.portnature.com.tr/restorani-alacarte">рестораны a'la carte</a>,
                <a href="https://www.portnature.com.tr/spa-centr">спа-центры</a>, <a href="https://www.portnature.com.tr/bari-kafe">бары и кафе</a>. Среди них можно найти как дорогие, так и более доступные варианты. Однако, если
                вы хотите выбрать самый дорогой отель в Турции Анталия, то стоит учитывать, что цены могут достигать
                очень высоких значений. Тем не менее, отель в Турции 5 звезд Анталия, предложит вам незабываемый отдых в
                теплой атмосфере.
            </p>

        </div>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper fifth-split">
            <div class="split-1">
                <h5 class="split-text-5">Лара Отель Турция</h5>
                <p>
                    Отличающиеся своим уникальным дизайном и высоким уровнем сервиса, <b>отели Лара Турция</b> предлагает
                    гостям широкий спектр развлечений. Вы можете забронировать Лара отель Турция через <a href="https://portnature.rezervasyonal.com/">сайт
                    онлайн-бронирования</a>. Кроме того, для удобства гостей, большинство отелей предлагают <a href="tel:+902427310707">бронирование
                    через колл-центр</a>, где опытные менеджеры помогут вам выбрать наилучший вариант размещения.
                </p>

            </div>
            <div class="split-2">
                <div class="split-svg colorful-image-wrapper"></div>


            </div>
        </div>
    </div>
    <div class="split-wrapper sixth-split split-with-picture">
        <div class="split-1">
            <a href="https://www.portnature.com.tr/meropriyatiya">
                <img class="offers-split-photo"
                    src="{{ asset('assets/frontend/images/offers/seo/ru/turkey/semeyniye-oteli-turcii-5-zvezd-belek-koncerti.webp') }}">
                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/line.svg') }}">


            </a>
        </div>
        <div class="split-2">
            <h2 class="split-text-6">Семейные Отели Турции 5 звезд Белек</h2>
            <p>
                Туристы могут выбрать из большого количества вариантов <b>белек турция отели</b>, включая белек отели 5 звезд
                все включено 1 линия цены. Белек отели 5 звезд цены соответствуют качеству обслуживания и услугам,
                которые предоставляются в отелях. Лучшие семейные отели Турции находятся именно в Белеке, поэтому
                семейные отели Турции 5 звезд Белек являются отличным выбором для семейного отдыха. А если вы
                путешествуете с детьми, то отдых в Турции в Белеке или Анталии станет настоящим удовольствием для всей
                семьи.
            </p>

        </div>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper seventh-split split-with-svg">

            <div class="split-1">
                <h3 class="split-text-7">Отдых в Турции Белек Все включено</h3>
                <p>
                    <b>Отдых в Турции Белек все включено</b> – это отличный выбор для тех, кто хочет получить максимум
                    удовольствия от отпуска. Бронируя отель в Белеке, стоит обратить внимание на отзывы. Отель Белек
                    Турция (Belek Hotel Turkey) – это роскошные 5 звездочные отели в Турции Белек, предлагающие высокий
                    уровень сервиса и разнообразные развлечения для гостей. Также, в Белеке есть множество отелей 5
                    звезд, которые предоставляют все услуги по системе все включено. Отель Белек 5 звезд – это гарантия
                    комфорта, удобства и отличного настроения на протяжении всего отдыха в Турции.
                </p>
                <h4 class="split-text-7">Турция Белек Отели 5 звезд отдых с детьми</h4>
                <p>
                    Отдых в Турции Белек все включено предоставит всем гостям максимальный комфорт по лучшим ценам.
                    <b>Отель Белек Турция</b> предлагает широкий выбор размещения, включая <a href="https://www.portnature.com.tr/semeyniy-nomer">семейные номера</a> с раздельными
                    спальнями для детей. Белек отели 5 звезд цены различаются, но в большинстве отелей можно найти
                    хорошие предложения для всех. <a href="https://www.portnature.com.tr/alacarte-restoran-mini-club">Развлечения для детей</a>, <a href="https://www.portnature.com.tr/akvapark">аквапарки</a>, детские бассейны и клубы - все это
                    гарантирует, что отдых в Белек отели 5 звезд первая линия будет незабываемым.
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
                            <p class="stage-heading">Аквапарк </p>
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
                <h4 class="split-text-8">Отели Белек Турция 5 звезд первая линия</h4>
                <p>
                    В Белек можно найти <b>отели Турции с аквапарком на первой линии</b>, а также множество пятизвездочных
                    комплексов, расположенных на берегу моря. Белек отели 5 звезд первая линия предлагают отличный
                    сервис и уютные номера со всеми удобствами. Большинство отелей предлагают услуги все включено, что
                    позволяет гостям наслаждаться отдыхом, не беспокоясь о дополнительных расходах. <a href="https://portnature.rezervasyonal.com/">Цены на отель Турции
                    5 звезд 1 линия</a> зависят от сезона и самого отеля, но в целом они оправдываются комфортом и качеством
                    услуг.
                </p>
            </div>
        </div>
        <div class="three-img-div">
            <div class="split-svg three-img-2 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h5 class="split-text-9">Забронировать отель в Турции Белек</h5>
                <p>
                    Если вы планируете поездку в Турцию и ищете отель в Белеке, то стоит обратить внимание на
                    пятизвездочные отели. <b>Белек отели 5 звезд цены</b> варьируются в зависимости от сезона и спроса. Для
                    более удобного и быстрого поиска отеля, можно воспользоваться сайтом отеля, где вы можете <a href="https://portnature.rezervasyonal.com/">узнать
                    подробную информацию</a> о номерах и услугах. Также можно <a href="tel:+902427310707">забронировать отель в Белеке через телефон</a>,
                    выбрав наиболее подходящий вариант проживания.
                </p>
            </div>
        </div>
        <div class="three-img-div">
            <div class="split-svg three-img-3 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h2 class="split-text-10">Отели Турции Кемер</h2>
                <p>
                    Отель Кемер Турция предлагает гостям <a href="https://www.portnature.com.tr/nomer-king-suite">проживание в номерах с видом на море</a>, <a href="https://www.portnature.com.tr/spa-centr">услуги SPA</a>, бассейны и
                    <a href="https://www.portnature.com.tr/eda-napitki">рестораны</a>. Отдых в Турции Кемер отели 5 звезд - это возможность насладиться лучшим сервисом и
                    комфортом, который позволит вам полностью расслабиться. Отель Турции с аквапарком Кемер пользуется
                    особой популярностью среди семей с детьми и молодоженов, ведь такой отдых обеспечивает веселые для
                    каждой группы людей.
                </p>
            </div>
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