@extends('frontend.ru.layouts.master')

@section('title', 'Отели в Анталии - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-antalya-hotels') }}"
        aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('antalya-hotels') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-antalya-hotels') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('de-antalya-hotels') }}">DE</a></li>
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
                        <a href="https://www.tripadvisor.com.tr/Hotel_Review-g4833191-d6427728-Reviews-Port_Nature_Luxury_Resort_Hotel_Spa-Bogazkent_Serik_District_Turkish_Mediterranean_Co.html"><img class="svg-tripadvisor" src="{{ asset('assets/frontend/images/offers/tripadvisor.png') }}" /></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.booking.com/searchresults.tr.html?ss=Port+Nature&ssne=Side&ssne_untouched=Side&label=bookings-name-lO9ne8CLb_o7ijml9UoG0QS540961834209%3Apl%3Ata%3Ap1%3Ap22.563.000%3Aac%3Aap%3Aneg%3Afi%3Atikwd-65526620%3Alp1012764%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YcX_GyndjDE1ljcv9tcUssY&aid=376386&lang=tr&sb=1&src_elem=sb&src=searchresults&group_adults=2&no_rooms=1&group_children=0&sb_travel_purpose=leisure"><img class="svg-booking" src="{{ asset('assets/frontend/images/offers/booking.png') }}" /></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.expedia.com/Belek-Hotels-Port-Nature-Luxury-Resort-Spa-All-Inclusive.h8108100.Hotel-Information?chkin=2023-04-11&chkout=2023-04-12&x_pwa=1&rfrr=HSR&pwa_ts=1679996745179&referrerUrl=aHR0cHM6Ly93d3cuZXhwZWRpYS5jb20vSG90ZWwtU2VhcmNo&useRewards=false&rm1=a2&regionId=6034717&destination=Belek%2C+Serik%2C+Antalya+Region%2C+T%C3%BCrkiye&destType=CURRENT_LOCATION&selected=8108100&latLong=36.83444%2C31.162045&sort=RECOMMENDED&userIntent="><img class="svg-expedia" src="{{ asset('assets/frontend/images/offers/expedia.png') }}" /></a>
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
                        <div class="dropdown-item room-dropdown-link" href="#" data-value="Семейный Номер ">Семейный Номер </div>
                    </li>
                    <li>
                        <div class="dropdown-item room-dropdown-link" href="#" data-value="Номера Стандарт">Номера Стандарт</div>
                    </li>
                    <li>
                        <div class="dropdown-item room-dropdown-link" href="#" data-value="Номер Suite">Номер Suite</div>
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
                <a href="{{ route('ru-family-rooms') }}" class="room-swiper-button"><span>Семейный  </span>
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
        Ссылки, которые ссылаются из нашего веб-сайта на другие веб-сайты, не возлагают на владельца сайта ответственности за содержимое веб-сайтов, на которые даны ссылки, и владелец сайта не может нести ответственность за любой ущерб или убытки, возникшие из-за содержимого других веб-сайтов. Все ссылки на другие веб-сайты предоставлены на нашем веб-сайте для удобства пользователей нашего веб-сайта. Это соглашение не подразумевает, что Port Nature или ее филиалы каким-либо образом связаны с этими другими веб-сайтами или их владельцами.

    </p>
    <div class="flight-swiper-div">
        <div class="swiper flight-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
<a href="https://www.flypgs.com/ru"><img class="pegasus-logo" src="{{ asset('assets/frontend/images/offers/logo-1.png') }}" /></a>                </div>
                <div class="swiper-slide">
<a href="https://ru.skyscanner.com/?currency=RUB&locale=ru-RU&market=RU&traveller_context=6ad51ea2-8b52-4ebb-a20f-4a40f8737f62"><img class="scanner-logo" src="{{ asset('assets/frontend/images/offers/logo-2.png') }}" /></a>                </div>
                <div class="swiper-slide">
<a href="https://www.corendonairlines.com/"><img class="corendon-logo" src="{{ asset('assets/frontend/images/offers/logo-3.png') }}" /></a>                </div>
                <div class="swiper-slide">
<a href="https://www.aviasales.ru/?params=IST1&currency=usd"><img class="avia-logo" src="{{ asset('assets/frontend/images/offers/logo-4.png') }}" /></a>                </div>
                <div class="swiper-slide">
<a href="https://www.turkishairlines.com/ru-int/flights/booking/index.html"><img class="turkish-logo" src="{{ asset('assets/frontend/images/offers/logo-5.png') }}" /></a>                </div>
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
        <a class="transfer-btn" target="blank" href="https://portnature.rezervasyonal.com/ExtraService">Заказать трансфер</a>
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
            <h1>Отели в Анталии</h1>
            <p><b>Отели в Анталии</b> являются самыми из доступных курортов на Средиземном море. Новые отели ультра все включено в
                Анталии сделают ваш отдых идеальным в регионе Анталия. Отели Анталия цены очень выгодные и популярные отели
                Анталии станут лучшим выбором для всей семьи. Кроме того, Анталия Белек отели включают в себя 5-звездночные
                отели, которые располагаются на берегу моря. Вы можете найти лучший отель Анталия, когда будете отдыхать
                вместе с семьей. Если вы задаетесь вопросом, где отдохнуть в Анталии, несомненно выбирайте <a href="https://www.portnature.com.tr/spa-centr">спа отели
                Анталия</a>.</p>
        </div>
        <a class="split-img" href="https://www.portnature.com.tr/ru">
            <img src="{{ asset('assets/frontend/images/offers/seo/ru/antalya/oteli-v-antalii-port-nature-premium-resort-hotel.webp') }}" />
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
                    <div  class="opportunity-text">
                        <p class="opportunity-title">Предстоящие концерты в отеле 💓💥</p>
                        <p>Насладитесь концертами с участием лучших исполнителей со всего мира, не выходя из роскошного отеля Port Nature Luxury Resort. </p>
                        </div>
                    </a>
            </div>
            <div class="swiper-slide">
                <a href="https://www.tripadvisor.ru/Attractions-g297962-Activities-Antalya_Turkish_Mediterranean_Coast.html" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-two.webp') }}" />
                    </div>
                    <div  class="opportunity-text">
                        <p class="opportunity-title">Посетите лучшие места в Анталии


                            🥰 💤 🏖 </p>
                        <p>Анталия является обязательным местом для посещения с уникальной природой для тех, кто хочет погрузиться в богатую историю и культуру этого прекрасного города. </p>
                        </div>
                    </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ route('ru-spa') }}" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-three.webp') }}" />
                    </div>
                    <div  class="opportunity-text">
                        <p class="opportunity-title">Испытайте абсолютное расслабление 🥰 💎</p>
                        <p>Расслабьтесь и восстановите силы своего ума, тела и души с помощью наших роскошных спа-процедур и различных массажей. </p>
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
                <h2 class="split-text-1">Самые лучшие отели в Анталии</h2>
                <p>
                    <b>Самые лучшие отели в Анталии</b> - известный курорт на Лазурном побережье Турции, предлагающий широкий
                    выбор услуг. Если вы планируете отдых с семьей, то стоит обратить внимание на семейные лучшие отели
                    Анталии 5 звезд, которые предлагают множество <a href="https://www.portnature.com.tr/razvlecheniya">развлечений для детей и взрослых</a>. В то же время, для
                    тех, кто ищет новые отели в Анталии, здесь также имеются отличные варианты, где вы сможете
                    наслаждаться широким спектром услуг и современными номерами. Независимо от того, какой отель вы
                    выберете, Анталия обеспечит вам уютный и комфортный отдых.
                </p>
            </div>
        </div>
    </div>
    <div class="split-wrapper second-split">
        <div class="split-1">
            <h3 class="split-text-2">Отели в Анталии все включено</h3>
            <p> Если вы ищете <a href="https://www.portnature.com.tr/akvapark"><b>отели Анталии 5 звезд все включено с аквапарком</b></a>, то в городе можно найти множество
                вариантов, соответствующих вашим запросам. Такие отели предлагают своим гостям не только водные
                развлечения, но и широкий выбор услуг, включая <a href="https://www.portnature.com.tr/restorani-alacarte">рестораны A'la Carte</a> и спа-центры. Если же вы хотите
                насладиться видом на море прямо из номера, то следует обратить внимание на отели Анталии 5 звезд все
                включено первая линия, которые также предлагают услуги все включено. Независимо от того, какой тип
                отдыха вы выберете, отели в Анталии предлагают вам все для вашего удобства.
            </p>
        </div>
        <a class="split-2" href="https://www.portnature.com.tr/alacarte-restoran-all-day-dining">
            <img class="offers-split-photo" src="{{ asset('assets/frontend/images/offers/seo/ru/antalya/oteli-v-antalii-vse-vklucheno-restoran-ala-carte-all-day-dining.webp') }}">


        </a>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper third-split split-with-svg">
            <div class="split-1">
        <div class="split-svg colorful-image-wrapper"></div>
                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/belek.svg') }}">

            </div>
            <div class="split-2">
                <h4 class="split-text-3">Семейные отели в Анталии 5 звезд</h4>
                <p>
                    <b>Анталия отдых с детьми</b> - идеальная причина провести его в семейных отелях 5 звезд всей семьей.
                    Анталия отели с детьми 5 звезд предлагают <a href="https://www.portnature.com.tr/razvlecheniya">развлечения</a> для детей всех возрастов. Отели в Анталии
                    включают детские бассейны и клубы, а также аниматоры, которые помогут родителям наслаждаться
                    отдыхом, пока дети заняты играми. Отели Анталии на первой линии также пользуются большой
                    популярностью среди семейных туристов, поскольку позволяют наслаждаться прекрасным видом на море и
                    удобным доступом к пляжу. Анталия семейные отели готовы предложить вам все, что нужно для
                    незабываемого отдыха с детьми. </p>
                <h3 class="third-second-h4 split-text-3">Лучшие отели Анталии</h3>
                <p>
                    Анталия - популярный курорт, привлекающий множество туристов со всего мира. Лучшие отели в Анталии
                    предлагают услуги на любой вкус и кошелек. Если вы ищете комфортабельное размещение по лучшей цене,
                    то в Анталии есть отели для любого бюджета. Также здесь представлены <b>Анталия семейные отели</b>, которые
                    идеально подходят для отдыха с детьми. Можно легко узнать цены в отели Анталия и <a href="https://portnature.rezervasyonal.com/">забронировать отель
                    Анталья (Antalya booking hotel)</a> через специализированные сайты. Лучшие отели в Анталии можно
                    забронировать заранее, чтобы не переживать о доступности размещения во время вашего прибытия. </p>
            </div>
        </div>
    </div>
    <div class="split-wrapper fourth-split split-with-picture">
        <a class="split-1" href="https://www.portnature.com.tr/alacarte-restoran-mini-club">
            <img class="offers-split-photo" src="{{ asset('assets/frontend/images/offers/seo/ru/antalya/lucshiye-oteli-antalii-5-zvezd-vse-vklucheno-mini-klub-dla-detey.webp') }}">


        </a>
        <div class="split-2">
            <h4 class="split-text-4">Лучшие отели Анталии 5 звезд все включено</h4>
            <p>
                <b>Лучшие отели в Анталии 5 звезд все включено</b> - мечта любого, кто собирается на отдых. 
                <b>Отели Анталии на первой линии</b> пользуются большой популярностью среди туристов. <b>Отель Анталья забронировать</b> 
                можно через <a href="https://portnature.rezervasyonal.com/">сайт онлайн резервации</a> или <a href="tel:+902427310707">позвонить в колл-центр Port Nature Premium Hotel</a>. Отели ультра все 
                включено Анталия обеспечат незабываемый отдых для всех возрастных груп. Семейные отели в Анталии подойдут 
                для отдыха с детьми и создадут уютную атмосферу. Выбирая лучший отель Анталья, обращайте внимание на удобства 
                и качество обслуживания, чтобы ваш отдых был максимально комфортным и запоминающимся.
             </p>

        </div>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper fifth-split">
            <div class="split-1">
                <h5 class="split-text-5">Лучшие отели Анталии на первой линии</h5>
                <p>
                    <b>Лучшие отели Анталии на первой линии</b> – это популярное турецкое курортное место, куда каждый год
                    приезжают туристы со всего мира. Некоторые из самых лучших отелей Анталии на первой линии предлагают
                    пятизвездочный сервис все включено. Отели Анталии 5 звезд все включено первая линия обычно имеют
                    собственный частный пляж, открытый и <a href="https://www.portnature.com.tr/kritiy-basseyn">крытый бассейны</a>, а также аквапарк. Отель Анталия на первой
                    линии – это прекрасный выбор для тех, кто ищет уединение и комфорт, наслаждаясь красивым видом на
                    море.
                </p>

            </div>
            <div class="split-2">
        <div class="split-svg colorful-image-wrapper"></div>


            </div>
        </div>
    </div>
    <div class="split-wrapper sixth-split split-with-picture">
        <div class="split-1">
            <a href="https://www.portnature.com.tr/nomer-king-suite">
            <img class="offers-split-photo" src="{{ asset('assets/frontend/images/offers/seo/ru/antalya/otdih-v-antalii-tseni-nomer-king-suite.webp') }}">
            <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/line.svg') }}">


            </a>
        </div>
        <div class="split-2">
            <h5 class="split-text-6">Топ 10 Лучших отелей Анталии</h5>
            <p>
                В Анталии можно найти множество отелей разного уровня и комфорта. Но если вы хотите выбрать самые
                лучшие, то вот топ-10 лучших отелей Анталии: Анталия отели 5 звезд все включено, отели в Анталии на
                первой линии, отели ультра все включено Анталия и лучшие семейные отели в Анталии. Среди них можно
                выделить <b>самый лучший отель Анталии</b>, где вас ждут наивысший уровень сервиса и уютные <a href="https://www.portnature.com.tr/nomera">номера</a>. Если вы
                путешествуете с детьми, то лучше выбрать семейные отели в Анталии 5 звезд, где найдется множество
                развлечений для маленьких гостей. <a href="tel:+902427310707">Забронировать отель Анталия</a> можно заранее, чтобы быть уверенным в
                выборе. </p>

        </div>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper seventh-split split-with-svg">

            <div class="split-1">
                <h2 class="split-text-7">Отдых в Анталии Цены</h2>
                <p>
                    Отдых в Анталии - это прекрасная возможность насладиться теплым морем и красивыми видами. Но сколько
                    стоит отдых в Анталии? <a href="https://portnature.rezervasyonal.com/"><b>Цены на отдых в Анталии</b></a> зависят от многих факторов: отеля, сезона, количества
                    дней, услуг и т.д. Чтобы получить лучшую цену, можно <a href="https://portnature.rezervasyonal.com/"><b>забронировать отель Анталии</b>
                    </a> заранее. Компании
                    предлагают различные скидки и специальные предложения, особенно для семей с детьми. Можно получить
                    <a href="tel:+902427310707">скидки через колл-центр отеля</a> или <a href="https://portnature.rezervasyonal.com/">бронирование через сайт</a>. Отели в Анталии имеют разные цены, и вы
                    можете найти отель, который подходит вашему бюджету. Анталия ол инклюзив цена может быть выгоднее,
                    чем покупка путевки все включено цена. Так что, если вы ищете <b>отели Анталия цены</b>, ищите настоящие
                    скидки и забронируйте заранее, чтобы получить наилучшую цену на отдых в Анталии.
                </p>
                <h3 class="split-text-7">В каком районе Анталии лучше отдыхать?</h3>
                <p>
                    Анталия - это прекрасное место для отдыха, но <b>в каком районе Анталии лучше отдыхать</b>? Если вы ищете
                    тихий и спокойный отдых, то лучше обратить внимание на районы <a href="https://ru.wikipedia.org/wiki/%D0%91%D0%B5%D0%BB%D0%B5%D0%BA">Белек</a> и <a href="https://tonkosti.ru/%D0%91%D0%BE%D0%B3%D0%B0%D0%B7%D0%BA%D0%B5%D0%BD%D1%82">Богазкент</a>. Здесь вы найдете
                    красивые пляжи, роскошные отели в Анталии и уединение с природой. Для тех, кто предпочитает активный
                    отдых, можно рассмотреть район Кемер с живой ночной жизнью, множеством кафе, ресторанов и магазинов.
                    Если вы не уверены, как выбрать отель в Анталии, то можно позвонить в колл-центр отелей для
                    подробной информации или забронировать отель через сайт. Также не забывайте о том, что чем раньше вы
                    бронируете отели в Анталии, тем больше шансов получить хорошую скидку и выбрать именно тот номер,
                    который вам нужен. Так что выбирайте лучшие районы Анталии для отдыха и наслаждайтесь своим отдыхом
                    в этом прекрасном месте!
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
                <h4 class="split-text-8">Лучшие отели Анталии для отдыха с детьми</h4>
                <p>
                    <b>Анталия отели с детьми</b> - это замечательная возможность провести время всей семьей. Лучшие отели
                    Анталии для детей предлагают множество развлечений, такие как анимационные программы и <a href="https://www.portnature.com.tr/detskiy-koncept">детский клуб</a>
                    <a href="https://www.portnature.com.tr/alacarte-restoran-mini-club">отель Анталья</a>. Если вы планируете поездку с детьми, выбирайте отели, где есть все для комфортного
                    пребывания. Лучшие семейные отели Анталии предоставляют скидки и предлагают вкусную и здоровую еду
                    для детей. Бронируйте отели через сайт или колл-центр отеля, чтобы получить скидки и лучшие условия.
                    Популярные районы Анталии для отдыха с детьми - это Белек, Кемер и Сиде. Анталия отели все включено
                    с детьми предлагает услуги на уровне ультра все включено, чтобы вы не думали ни о чем!
                </p>
            </div>
        </div>
        <div class="three-img-div">
        <div class="split-svg three-img-2 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h5 class="split-text-9">Лучшие курорты в Анталии</h5>
                <p>
                    Среди лучших курортов Анталии, можно отметить Белек, Кемер и Алания. <b>Курорты Антальи</b> отличаются
                    высоким уровнем сервиса, большим выбором развлечений и уютной атмосферой для отдыха. Многие <b>курорты
                    Анталии</b> предлагают <b>всё включено</b>, что является удобным и экономически выгодным вариантом для
                    туристов. Путешественники могут выбрать курорт Анталии, соответствующий их предпочтениям и бюджету,
                    так как <a href="https://portnature.rezervasyonal.com/">цены на курорты Анталии</a> различаются в зависимости от сезона и категории отеля. </p>
            </div>
        </div>
        <div class="three-img-div">
        <div class="split-svg three-img-3 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h5 class="split-text-10">Путевка Анталия</h5>
                <p>
                    <b>Анталия путевки все включено цены</b> более выгодные, чем в других курортах, что даст вам возможность
                    провести отдых на высшем уровне. Для более выгодного отдыха в Анталии стоит приобрести путевку в
                    Анталию заранее. При этом можно выбрать путевку по выгодной цене и с услугами "все включено".
                    Существует множество вариантов путевок в Анталию, включая путевки с различными дополнительными
                    услугами и разным уровнем комфорта. Не забывайте, что Анталия раннее бронирование отеля предлагает
                    наилучшие цены и условия приобретения путевок.
                </p>
            </div>
        </div>

    </div>
    <div class="grey-wrapper">
        <div class="double-text-wrapper double-reverse">


            <div class="double-text">
                <h2 class="split-text-11">Отель Анталия </h2>
                <p>

                    Отель в Анталии - это идеальное место для комфортного и роскошного отдыха. <b>Популярные отели Анталии</b>
                    расположены в различных районах, таких как Белек, Лара и Кемер. Молодежные отели в Анталии
                    предлагают различные услуги, такие как клубы, <a href="http://portnature.com.tr/alacarte-restoran-all-day-dining">All Day Dining</a>, <a href="http://portnature.com.tr/alacarte-restoran-sushi-bar">Sushi Bar</a>, <a href="https://www.portnature.com.tr/alacarte-restoran-seaside">Seaside</a>, <a href="https://portnature.com.tr/alacarte-restoran-italyannskiy">Итальянский</a> и
                    <a href="https://www.portnature.com.tr/alacarte-restoran-francuzskiy">Французский рестораны</a> мировой кухни. Кроме того <a href="https://portnature.com.tr/ru">отель в Анталии Port Nature Luxury Resort Hotel</a>
                    предлагает импортные алкоголи в барах <a href="https://www.portnature.com.tr/script-chivas-launge">Script Chivas Lounge</a>, <a href="https://www.portnature.com.tr/born9-hennessy-launge">Born 9 Hennessy Lounge</a>, <a href="https://www.portnature.com.tr/pub-irish">Irish Pub</a>,
                    <a href="https://www.portnature.com.tr/flamingobar">Flamingo Bar</a> и <a href="https://www.portnature.com.tr/lobbybar">Lobby Bar</a>. Дополнительно к этому, вы всегда сможете взбодриться с чашечкой кофе и
                    вкусными пирожными в <a href="https://www.portnature.com.tr/kafe-davidoff">Davidoff Cafe</a>, <a href="https://www.portnature.com.tr/kafe-kit-kat">KitKat</a> и <a href="https://www.portnature.com.tr/kafe-nespresso">Nespresso</a>. </p>
            </div>

            <div class="double-text">
                <h3 class="split-text-11">Забронировать отель Анталия</h3>
                <p>

                    Хотите забронировать отель Анталия, но не знаете, какой выбрать? Мы подобрали для вас лучшие
                    варианты! <a href="https://www.portnature.com.tr/akvapark">Отели с подогреваемым бассейном Анталия</a> пользуются большим спросом, особенно весной и
                    осенью. Анталия Белек отели предлагают проживание на побережье с прекрасными видами на море. Не
                    забудьте воспользоваться Анталия раннее бронирование, чтобы сэкономить на проживании. Мы собрали для
                    вас хорошие отели Анталии на сайте <b>Букинг Анталия</b>. Не упустите свой шанс забронировать отели в
                    Анталии и провести незабываемый отдых в этом прекрасном городе!
                </p>
            </div>
            <a href="https://www.portnature.com.tr/nomer-king-suite">
            <img class="offers-split-photo" src="{{ asset('assets/frontend/images/offers/seo/ru/antalya/otdih-v-antalii-tseni-nomer-king-suite.webp') }}">
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
            <h4 class="split-text-12">Отель Анталия номер</h4>
            <p>
                Отель Анталия – идеальное место для отдыха всей семьей! <a href="https://www.portnature.com.tr/akvapark"><b>Анталия отели с аквапарком</b></a> имеют комфортабельные
                <a href="https://www.portnature.com.tr/nomera">номера</a>, как <a href="https://www.portnature.com.tr/nomer-king-suite">King Suite</a>, <a href="https://www.portnature.com.tr/semeyniy-nomer">Семейные номера</a> и <a href="https://www.portnature.com.tr/nomera-standart">номера Стандарт</a>. Анталия раннее бронирование отеля позволит
                Вам сэкономить на проживании. Наши <b>хорошие отели Анталии</b> с чистыми и семейными номерами подходят для
                отдыха всей семьей. Вы можете забронировать номера с видом на море, чтобы наслаждаться красивым пейзажем
                прямо из своего окна. </p>
        </div>
    </div>


    <div class="double-text-wrapper double-text-single">
        <div class="double-text">
            <h4 class="split-text-11">Концерты российских звезд в Анталии</h4>
            <p>

                Анталия известный город, где возможно насладиться концертами российских звезд! Хотите совместить отдых с
                развлечениями? Выбирайте <b>отели все включено в Анталии</b> – они предлагают множество развлечений и удобств
                для гостей. Чтобы не пропустить свой любимый концерт, не забудьте <a href="https://www.portnature.com.tr/concerti">купить билеты на концерт в Анталии</a> 
                заранее или забронировать их онлайн. Мы подобрали лучшие развлечения в отеле Анталии, где вы сможете
                насладиться концертом и провести незабываемый отдых. </p>
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