@extends('frontend.tr.layouts.master')

@section('title', 'Antalya Otelleri - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-antalya-hotels') }}"
        aria-expanded="false">TR</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('antalya-hotels') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-antalya-hotels') }}">RU</a></li>
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
                    <img class="offers-banner offers-banner-couple"
                        src="{{ asset('assets/frontend/images/offers/turkish-banner-1.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/turkish-mobile-1.webp') }}" />
                    <div class="offers-hero-text offers-hero-turkish-1">
                        <p class="turkish-1-big">Port Nature'da Sınırsız <br> Eğlenceye Hazır Olun</p>
                        <p class="turkish-1-small">
                            Eğlenceyi Yakalayın
                        </p>
                    </div>
<div class="turkish-1-addendum-wrapper"><p class="turkish-1-addendum">*Bu sayfadaki kampanyalar kısmından koşulları inceleyebilirsiniz</p>
<p class="offers-addendum-left couple-addendum-left"> Dipnot: Misafirlerimiz kampanyaların sadece bir tanesinden faydalanabilir. </p></div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class="offers-slide-inner">
                    <img class="offers-banner"
                        src="{{ asset('assets/frontend/images/offers/turkish-banner-2.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/turkish-mobile-2.webp') }}" />

                    <div class="offers-hero-text offers-hero-turkish-2">
                        <p class="turkish-2-small">Küçük misafirlerimiz için</p>
                        <p class="turkish-2-big">
                            Hediyeler
                        </p>
                        <div class="child-text-div">
                            <img class="offers-kids-free" src="{{ asset('assets/frontend/images/offers/free.svg') }}" />

                            <p class="turkish-2-mid-1 turkish-2-mid">
                                <span class="child-dark"> 1 ÇOCUK</span> <span class="child-light"> 0-14 YAŞ</span>
                            </p>
                            <p class="turkish-2-mid turkish-2-mid-2"> <span class="child-dark"> 2 ÇOCUK</span> <span
                                    class="child-light">0-5 YAŞ</span>
                            </p>
                        </div>
                    </div>
                    <p class="children-offers-addendum-turkish"> Dipnot: Misafirlerimiz kampanyaların sadece bir tanesinden faydalanabilir. </p>

                </div>
            </div>
            <div class="swiper-slide">
                <div class="offers-slide-inner">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-1.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-1.webp') }}" />
                    <div class="offers-hero-text offers-hero-1">
                        <p class="offers-1-top">Misafirlerimiz İçin</p>
                        <p class="offers-1-big">
                            Ücretsiz <br>Su Sporları<br>Jetonları
                        </p>
                    </div>
        <div class="water-sports-addendum-wrapper">            <p class="offers-addendum">Çağrı merkezi aracılığıyla rezervasyon yapın ve hediye olarak 4 jeton
                        kazanın</p>
                        <p class="offers-addendum-right"> Dipnot: Misafirlerimiz kampanyaların sadece bir tanesinden faydalanabilir. </p></div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class="offers-slide-inner">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-2.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-2.webp') }}" />
                    <div class="offers-hero-text offers-hero-2">
                        <p class="offers-2-big">
                            SPA <br>Hizmetleri <br>hediye!
                        </p>
                        <p class="offers-2-small">
                            Sadece çağrı merkezi aracılığıyla yapılan rezervasyonlarda.
                        </p>
                        <p class="offers-2-medium">Masaj ya da köpük<br> banyosu ücretsizdir</p>
                        

                    </div>
                    <p class="spa-offers-addendum"> Dipnot: Misafirlerimiz kampanyaların sadece bir tanesinden faydalanabilir. </p>
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
                            Ücretsiz
                        </div>
                        <p class="offers-3-big offers-3-big-turkish">
                            Premium Pavillon
                        </p>
                        <div class="offers-3-small">
                            <img class="offers-icon" src="{{ asset('assets/frontend/images/offers/svg/call.svg') }}" />
                            Sadece çağrı merkezi aracılığıyla yapılan rezervasyonlarda
                        </div>

                    </div>
                    <p class="offers-addendum-center"> Dipnot: Misafirlerimiz kampanyaların sadece bir tanesinden faydalanabilir. </p>

                </div>
            </div>
            <div class="swiper-slide">
                <div class="offers-slide-inner offers-4">
                    <img class="offers-banner" src="{{ asset('assets/frontend/images/offers/banner-4.webp') }}" />
                    <img class="offers-banner-mobile"
                        src="{{ asset('assets/frontend/images/offers/mobile-4.webp') }}" />
                    <div class="offers-hero-text offers-hero-4">
                        <p class="offers-4-small">
                            Misafirlerimiz İçin
                        </p>
                        <p class="offers-4-big">
                            VIP Transfer
                        </p>
                        <div class="offers-4-medium">
                            <img class="offers-text-wrap-1"
                                src="{{ asset('assets/frontend/images/offers/svg/line.svg') }}" />

                            Ücretsiz
                            <img class="offers-text-wrap-2"
                                src="{{ asset('assets/frontend/images/offers/svg/line-two-01.svg') }}" />

                        </div>

                    </div>
                    <div class="transfer-addendum-wrapper"><p class="offers-4-addendum">
                        Çağrı merkezi aracılığıyla rezervasyon yapan misafirlerimiz, ücretsiz VIP transfer hizmetinden
                        yararlanabilirler</p>
                        <p class="offers-addendum-left"> Dipnot: Misafirlerimiz kampanyaların sadece bir tanesinden faydalanabilir. </p>
</div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- SHOWCASE SECTION -->

<div class="showcase-section-wrapper">
    <div class="plane-svg colorful-image-wrapper"></div>
    <img class="plane-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/plane-1.svg') }}" />
    <p class="plane-before">... hemen bir bilet alın</p>
    <div class="booking-section-wrapper">
        <p class="booking-section-title">HAYALİNİZDEKİ TATİL İÇİN</p>
        <p class="booking-section-title-2">Odanızı Ayırtın</p>
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
                    Oda Seçenekleri
                </button>
                <ul class="dropdown-menu room-selection-dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <div class="dropdown-item room-dropdown-link" href="#" data-value="Aile Odası">Aile Odası</div>
                    </li>
                    <li>
                        <div class="dropdown-item room-dropdown-link" href="#" data-value="Standart Odalar">Standart Odalar</div>
                    </li>
                    <li>
                        <div class="dropdown-item room-dropdown-link" href="#" data-value="Süit Oda">Süit Oda</div>
                    </li>
                </ul>
            </div>



            <label for="checkin"></label><input id="checkin" data-defaultDate="today" value="Check-in">
            <label for="checkout"></label><input id="checkout" data-defaultDate="today" value="Check-Out">

            <div class="guestDiv guestdiv-adult"><span class="guests guests-adult">
                    <img class="icon-head" src="{{ asset('assets/frontend/images/offers/svg/adult-icon.svg') }}">

                    Yetişkin</span>
                <div class="guestMenu guestMenuAdult">
                    <div class="adultCounter dropdown-item">
                        <p>Yetişkin(ler)</p>
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
                    Çocuk</span>
                <div class="guestMenu guestMenuChild">

                    <div class="childCounter dropdown-item">
                        <p>Çocuk(lar)</p>
                        <div class="counter-item">
                            <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                onclick="childDecrement()" alt="decrement" />
                            <p id="childCount"></p>
                            <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                onclick="childIncrement()" alt="increment" />
                        </div>
                    </div>
                    <div class="childAgeCounter1 childAgeCounter dropdown-item">
                        <p>Çocuk 1 Yaş</p>
                        <div class="counter-item">
                            <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                onclick="childAge1Decrement()" alt="decrement" />
                            <p id="childAge1Count">0</p>
                            <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                onclick="childAge1Increment()" alt="increment" />
                        </div>
                    </div>
                    <div class="childAgeCounter2  childAgeCounter dropdown-item">
                        <p>Çocuk 2 Yaş</p>
                        <div class="counter-item">
                            <img src="{{ asset('assets/frontend/images/decrement.svg') }}" class="child-decrement"
                                onclick="childAge2Decrement()" alt="decrement" />
                            <p id="childAge2Count">0</p>
                            <img src="{{ asset('assets/frontend/images/increment.svg') }}" class="child-increment"
                                onclick="childAge2Increment()" alt="increment" />
                        </div>
                    </div>
                    <div class="childAgeCounter3  childAgeCounter dropdown-item">
                        <p>Çocuk 3 Yaş</p>
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
                    src="{{ asset('assets/frontend/images/offers/svg/booknow.svg') }}" />Rezervasyon Yapın</a>
        </div>
        <!-- Booking Section End -->
    </div>

    <div class="offers-rooms-swiper swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide rooms-swiper-slide">
                <img class="room-image-swiper" src="{{ asset('assets/frontend/images/offers/family.webp') }}" />
                <a href="{{ route('tr-family-rooms') }}" class="room-swiper-button"><span>Aile</span>
                    <img class="btn-chevron"
                        src="{{ asset('assets/frontend/images/offers/svg/button-chevron.svg') }}" />
                </a>
                <div class="room-swiper-details">
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-1.svg') }}" />
                        <p class="room-detail-text">4 Yetişkin +1</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-2.svg') }}" />
                        <p class="room-detail-text">45 m2</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-3.svg') }}" />
                        <p class="room-detail-text">Yandan Deniz Manzaralı
                        </p>

                    </div>
                </div>
            </div>
            <div class="swiper-slide rooms-swiper-slide">
                <img class="room-image-swiper" src="{{ asset('assets/frontend/images/offers/king.webp') }}" />
                <a href="{{ route('tr-kingsuit-rooms') }}" class="room-swiper-button"><span>King Süit</span>
                    <img class="btn-chevron"
                        src="{{ asset('assets/frontend/images/offers/svg/button-chevron.svg') }}" />
                </a>
                <div class="room-swiper-details">
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-1.svg') }}" />
                        <p class="room-detail-text">5 Yetişkin +1</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-2.svg') }}" />
                        <p class="room-detail-text">110 m2</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-3.svg') }}" />
                        <p class="room-detail-text">Deniz Manzaralı
                        </p>

                    </div>
                </div>
            </div>
            <div class="swiper-slide rooms-swiper-slide">
                <img class="room-image-swiper" src="{{ asset('assets/frontend/images/offers/standard.webp') }}" />
                <a href="{{ route('tr-standard-rooms') }}" class="room-swiper-button"><span>Standart</span>
                    <img class="btn-chevron"
                        src="{{ asset('assets/frontend/images/offers/svg/button-chevron.svg') }}" />
                </a>
                <div class="room-swiper-details">
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-1.svg') }}" />
                        <p class="room-detail-text">2 Yetişkin +2</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-2.svg') }}" />
                        <p class="room-detail-text">34 m2</p>

                    </div>
                    <div class="room-detail-item">
                        <img class="room-svg-swiper"
                            src="{{ asset('assets/frontend/images/offers/svg/icon-3.svg') }}" />
                        <p class="room-detail-text">Deniz / Kara / Yandan Deniz Manzaralı
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
        "Web sitemizde, başka sitelere link verilmesi veya başka sitelere referans verilmiş olması sitenin sahibinin, link verilen veya referans verilen diğer sitelerin içeriğinden sorumluluğunu doğurmayacağı gibi ve site sahibi diğer sitelerin içeriğinden kaynaklanan herhangi bir zarar veya ziyandan da sorumlu tutulamayacaktır.
        Diğer sitelere yapılan tüm linkler, website kullanıcılarımızın erişim kolaylığı için websitemizde yer almıştır. Bu düzenleme, Port Nature ya da bağlı şirketlerinin söz konusu diğer sitelerle ya da sahipleriyle ilişkide olduğu anlamına gelmez."

    </p>
    <div class="flight-swiper-div">
        <div class="swiper flight-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
<a href="https://www.flypgs.com/sehirler/antalya-ucak-bileti"><img class="pegasus-logo" src="{{ asset('assets/frontend/images/offers/logo-1.png') }}" /></a>                </div>
                <div class="swiper-slide">
<a href="https://www.skyscanner.com.tr/?currency=TRY&locale=tr-TR&market=TR&traveller_context=80b9152e-fef3-4182-b891-7b26102e22dd"><img class="scanner-logo" src="{{ asset('assets/frontend/images/offers/logo-2.png') }}" /></a>                </div>
                <div class="swiper-slide">
<a href="https://www.corendonairlines.com/tr"><img class="corendon-logo" src="{{ asset('assets/frontend/images/offers/logo-3.png') }}" /></a>                </div>
                <div class="swiper-slide">
<a href="https://www.aviasales.ru/?params=IST1&currency=usd"><img class="avia-logo" src="{{ asset('assets/frontend/images/offers/logo-4.png') }}" /></a>                </div>
                <div class="swiper-slide">
<a href="https://www.turkishairlines.com/tr-int/ucak-bileti/rezervasyon/"><img class="turkish-logo" src="{{ asset('assets/frontend/images/offers/logo-5.png') }}" /></a>                </div>
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
        <p class="transfer-title">Transfer için buraya tıklayın</p>
        <p class="transfer-mid">Konforlu bir yolculuk</p>
        <a class="transfer-btn" target="blank" href="https://portnature.rezervasyonal.com/ExtraService">Transfer İçin Yer Ayırtın </a>
    </div>
    </div>
<!--- CONTACT SECTION -->
<div class="offers-contact-wrapper">
    <div class="offers-contact-div">
        <div class="luggage-image-wrapper colorful-image-wrapper"></div>

        <div class="offers-contact-info">
            <p class="offers-contact-title">Ücretsiz çağrı merkezi veya online rezervasyon</p>
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
                <h1>Antalya Otelleri</h1>
                <p><b>Antalya otelleri</b>, şehrin tarihi dokusuna ve güzelliklerine uygun olarak inşa edilmiştir ve 
                    konuklarına lüks, ve konforlu hizmet sunmaktadır. Türkiye'nin en iyi otellerine sahip olan Antalya, 
                    tatilseverlerin ilgisini çeken birçok tarihi ve doğal güzelliği bünyesinde bulundurmaktadır. Antalya otelleri, 
                    genellikle denize yakın konumlarda bulunmaktadır. Bu Antalya 5 yıldızlı oteller, her yaşta ve tatil konseptinde 
                    olanaklar sunmaktadır. Ayrıca bölgedeki en iyi otel Port Nature Luxury Resort Hotel, erken rezervasyon ile birbirinden
                     cazip Antalya tatil paketi seçenekleri sunar. En iyi Antalya otelleri arasında yer alan <a href="https://portnature.com.tr/tr">Port Nature Luxury Resort Hotel</a> 
                     çağrı merkezimizden indirimli rezervasyon yapabilirsiniz. Hemen şimdi en iyi Antalya otelleri arasında yer alan Port Nature 
                     Luxury Resort Hotel resmi websitesinden <a href="tel:+902427310707">çağrı merkezi ile rezervasyon</a> yapın, suite Antalya otel odanızı ayırtın.
        
                </p>
            </div>
            <a class="split-img" href="https://www.portnature.com.tr/tr">
                <img src="{{ asset('assets/frontend/images/offers/seo/tr/antalya/antalya-otelleri-port-nature premium-hotel-resort.webp') }}" />
            </a>
        </div>
        

<!--- BOOKING OPPORTUNITIES SECTION -->


<div class="opportunity-wrapper">
    <p class="h2-title">REZERVASYON FIRSATLARI</p>
    <div class="swiper opportunity-swiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <a href="{{ route('tr-concert') }}" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-one.webp') }}" />
                    </div>
                    <div  class="opportunity-text">
                        <p class="opportunity-title">Otelde Yaklaşan Konserler 💓💥</p>
                        <p>Dünyanın dört bir yanından en iyi sanatçıların yer aldığı özel konserlerimizle, Port Nature Luxury Resort Hotel konforunda birinci sınıf müziği deneyimleyin. </p>
                        </div>
                    </a>
            </div>
            <div class="swiper-slide">
                <a href="https://listelist.com/antalya-gezilecek-yerler/" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-two.webp') }}" />
                    </div>
                    <div  class="opportunity-text">
                        <p class="opportunity-title">Antalya'da Ziyaret Edilecek Yerler

                            🥰 💤 🏖 </p>
                        <p>Antalya zengin tarihin içine dalmak ve kültürle iç içe olmak isteyenler için eşsiz doğasıyla mutlaka ziyaret edilmesi gereken bir şehirdir. </p>
                        </div>
                    </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ route('tr-spa') }}" class="opportunity-slide">
                    <div class="op-img-wrapper">
                        <img src="{{ asset('assets/frontend/images/offers/opportunities-three.webp') }}" />
                    </div>
                    <div  class="opportunity-text">
                        <p class="opportunity-title">Derin Bir Rahatlama Yaşayın 🥰 💎</p>
                        <p>Zihninizi, bedeninizi ve ruhunuzu stresten kurtarmak ve tazelemek için tasarlanmış olan lüks, kaliteli ve temiz spamızın keyfini ailecek çıkarın.  </p>
                        </div>
                    </a>
            </div>
        </div>
    </div>
</div>



    <!--- RATING SECTION -->

<div class="rating-wrapper">
    <p class="rating-title">Misafirlerin Gözünden </p>
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
                <h2 class="split-text-1">En iyi Antalya otelleri</h2>
                <p>
                    En iyi Antalya otellerinin <a href="https://portnature.com.tr/su-parki">su parkı</a> gibi bir çok avantajı bulunmaktadır. Ayrıca <b>en iyi Antalya
                    otelleri</b>, aquaparkların yanı sıra her şey dahil konsept sunmaktadır. Yaz tatili planları yaparken,
                    her şey dahil Antalya tatil otelleri sizin için en iyi seçim olacaktır. Antalya en iyi otel,
                    balayınız için özel anlar içerir. Geniş ve lüks odalar, ferah tasarımlarıyla konukların rahatını ve
                    konforunu sağlamaktadır. Çağrı merkezi veya <a href="https://portnature.rezervasyonal.com/">online rezervasyon</a> ile hemen yerinizi ayırtın, Antalya
                    resort otel ayrıcalıklarını yaşayın.
                </p>
            </div>
        </div>
    </div>
    <div class="split-wrapper second-split">
        <div class="split-1">
            <h3 class="split-text-2">Her Şey Dahil Antalya Otelleri</h3>
            <p> Antalya tatil beldelerinde tatilseverlerin dikkatini çeken birçok her şey dahil Antalya otelleri
                bulunmaktadır. Her şey dahil <a href="https://portnature.com.tr/cocuk-konsepti">Antalya çocuk konsepti</a>, misafirlerin ihtiyaç duydukları tüm yiyecek, içecek
                seçeneklerini sahip olduğu <a href="https://www.portnature.com.tr/italyan-alacarte-restoran">İtalyan</a>, <a href="https://portnature.com.tr/fransiz-alacarte-restoran">Fransız alakartlar</a> ile sunmaktadır. Antalya her şey dahil otel,
                özellikle aileler için idealdir, çünkü çocuklar için birçok eğlence seçeneği sunarlar. Böylece
                ebeveynler için de rahat bir tatil deneyimi sağlarlar. Her şey dahil Antalya aile otelleri, su parkları,
                <a href="https://portnature.com.tr/mini-club-alacarte-restoran">mini kulüpler</a> ve birçok aktivite seçeneği sunmaktadır. Zaman kaybetmeden Antalya her şey dahil otel
                rezervasyonunuzu şimdi tamamlayın.
            </p>
        </div>
        <a class="split-2" href="https://www.portnature.com.tr/all-day-dining-alacarte-restoran">
            <img class="offers-split-photo" src="{{ asset('assets/frontend/images/offers/seo/tr/antalya/her-sey-dahil-antalya-otelleri-all-day-dining-alacarte.webp') }}">


        </a>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper third-split split-with-svg">
            <div class="split-1">
        <div class="split-svg colorful-image-wrapper"></div>
                <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/belek.svg') }}">

            </div>
            <div class="split-2">
                <h4 class="split-text-3">En iyi Antalya 5 Yıldızlı Aile Oteli</h4>
                <p>
                    Antalya, Türkiye'deki en iyi tatil destinasyonlarından biridir ve birçok aile için mükemmel bir
                    tatil yeri olarak bilinir. En iyi Antalya 5 yıldızlı oteller, aile tatilleri için <a href="https://www.portnature.com.tr/aile-odasi">aile odaları</a>, <a href="https://portnature.com.tr/king-suite-oda">king
                    süit</a> ve <a href="https://www.portnature.com.tr/standart-deniz-manzarali-oda">deniz manzaralı standart oda</a> seçeneklerine sahiptir. Eğlence, <a href="https://portnature.com.tr/konserler">konser etkinlikleri</a> ve çocuk
                    kulüpleri ile en iyi çocuk dostu Antalya otelleri unutulmaz bir tatil sunmaktadır. Ailelerin
                    tatilleri için birçok aktivite sunan Antalya resort oteller, yüzme havuzları, su kaydırakları, çocuk
                    oyun alanları ve daha fazlasını içermektedir. Şimdi aile tatiliniz için Antalya çocuk dostu otel
                    erken rezervasyon fırsatlarına zaman kaybetmeden göz atın. Ve Antalya tatil paketi seçeneklerinden
                    birini seçerek <a href="tel:+902427310707">çağrı merkezi ile rezervasyon</a> yapın.</p>

            </div>
        </div>
    </div>
    <div class="split-wrapper fourth-split split-with-picture">
        <a class="split-1" href="https://www.portnature.com.tr/mini-club-alacarte-restoran">
            <img class="offers-split-photo" src="{{ asset('assets/frontend/images/offers/seo/tr/antalya/antalya-sahil-otelleri-cocuklar-icin-mini-club.webp') }}">


        </a>
        <div class="split-2">
            <h2 class="split-text-4">Antalya Sahil Otelleri</h2>
            <p>
                Antalya sahil otelleri, yılın her döneminde ziyaret edilebilecek nezih tesisler arasında yer alır. 
                Aynı zamanda denize sıfır Antalya resort, düğün, balayı ve <a href="https://portnature.com.tr/toplanti-kongre">iş toplantıları</a> gibi özel etkinlikler 
                için her zaman ideal bir seçimdir. Antalya denize sıfır oteller, yıl boyunca düzenlenen çeşitli etkinlik 
                ve festivaller için ideal konumlarda yer alır. Denize sıfır Antalya resort & <a href="https://portnature.com.tr/spa-merkezi">spa otelleri</a>, kış aylarında 
                da <a href="https://portnature.com.tr/kapali-havuz">kapalı havuzları</a>, hamamları ve sauna ile hizmet verirler. Seyahat planlarınız arasında Antalya var ise, 
                tüm bu olanaklardan sadece dakikalarınızı ayırıp Antalya otel rezervasyonu yaparak faydalanın. <a href="https://portnature.com.tr/bar-flamingo">Flamingo bar</a> ’da 
                kokteylinizi yudumlayın ya da harika deniz manzaralı <a href="https://www.portnature.com.tr/seaside-alacarte-restoran">seaside alakart</a> ’da sunulan zengin seçeneklerin keyfini çıkarın.
            </p>

        </div>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper fifth-split">
            <div class="split-1">
                <h3 class="split-text-5">Antalya Denize Sıfır Oteller</h3>
                <p>
                    Antalya denize sıfır oteller, sadece konumlarıyla değil, hizmet kaliteleri ile de tatilcilerin
                    beklentilerini en üst düzeyde karşılamaktadır. Denize sıfır konumda konaklama seçenekleri arasından
                    seçim yapmak için tripadvisor otel Antalya yorumlarını okumak oldukça yardımcı oluyor. Antalya
                    otelleri ile unutulmaz bir konaklama deneyimi yaşamaya hazır olun. Belek sahil oteli Antalya
                    bölgesindeki popüler otelleri arasında yoğun olarak ilgi görmektedir. Antalya 5 yıldızlı oteller
                    lüks ve modern <a href="https://www.portnature.com.tr/aile-odasi">deniz manzaralı aile odası</a> ve <a href="https://www.portnature.com.tr/king-suite-oda">king süit oda</a> tasarımlarıyla öne çıkmaktadır. 5
                    yıldızlı lüks süit Antalya otel odaları genellikle deniz manzaralıdır ve aynı zamanda bu jakuzili
                    oteller Antalya bölgesinde en seçkin tesislerdir.
                </p>

            </div>
            <div class="split-2">
        <div class="split-svg colorful-image-wrapper"></div>


            </div>
        </div>
    </div>
    <div class="split-wrapper sixth-split split-with-picture">
        <div class="split-1">
            <a href="https://www.portnature.com.tr/king-suite-oda">
            <img class="offers-split-photo" src="{{ asset('assets/frontend/images/offers/seo/tr/antalya/antalya-tatil-otelleri-king-suit-oda.webp') }}">
          
            <img class="split-svg-mobile" src="{{ asset('assets/frontend/images/offers/svg/mobile/line.svg') }}">

            </a>

        </div>
        <div class="split-2">
            <h3 class="split-text-6">Antalya Tatil Otelleri</h3>
            <p>
                <b>Antalya tatil otelleri</b>, tatilcilerin her türlü beklentisine cevap verebilen birbirinden alternatif
                Antalya tatil paketi seçenekleri sunmaktadır. Ultra her şey dahil Antalya tatil otelleri, tatilseverlere
                yeme-içme, <a href="https://portnature.com.tr/aktiviteler">aktiviteler</a> ve hizmetler konusunda geniş bir seçenek sunarlar. Antalya'da lüks ve ultra her
                şey dahil oteller, butik oteller, aile otelleri, hepsi ayrıcalıklı fırsatlarla farklı Antalya tatil
                paketi sunmaktadır. Antalya otel trivago yorumları seçeceğiniz Antalya tatil paketi için size yardımcı
                olacaktır. Geç kalmadan yaz tatiliniz için şimdi <a href="https://portnature.rezervasyonal.com/">erken rezervasyon yapın</a> ve birbirinden avantajlı erken
                rezervasyon Antalya fırsatlarını yakalayın. </p>

        </div>
    </div>
    <div class="grey-wrapper">
        <div class="split-wrapper seventh-split split-with-svg">

            <div class="split-1">
                <h4 class="split-text-7">Antalya Tatil Fırsatları</h4>
                <p>
                    Antalya otelleri, her yıl binlerce tatilcinin ziyaret ettiği en popüler tatil destinasyonlarından
                    biridir ve birçok tatil fırsatı sunar. Antalya tatil fırsatlarında, balayı paketleri, aile dostu
                    tatil paketleri, <a href="https://portnature.com.tr/spa-merkezi">spa tatil paketleri</a> gibi birçok seçenek bulunmaktadır. Ayrıca, Antalya'da birçok
                    tur şirketi de bulunmaktadır. En iyi Antalya oteller arasında yer alan premium her şey dahil otel
                    tatil fırsatları ile turistlerin tarihi ve doğal güzellikleri keşfetmelerine olanak sağlar.
                    Antalya'nın doğal güzelliklerini keşfetmek için safari turları, tekne turları, ve rafting turları
                    gibi farklı aktiviteler de sunulur. Bu olanaklar, gezginler için Antalya tatil turları ile unutulmaz
                    anlar yaşamalarını sağlar. </p>
                <h5 class="split-text-7">Antalya Belek Tatil Yerleri ve Fiyatları</h5>
                <p>
                    Antalya Belek tatil yerleri genellikle ultra her şey dahil konseptinde hizmet vermektedir. Bu lüks 5
                    yıldızlı Antalya otelleri, <a href="https://portnature.com.tr/alacarte-restoranlar">yüksek kaliteli alakartlar</a>, yüzlerce içecek çeşidi bulunan <a href="https://portnature.com.tr/irishpub">Irish Pub</a> gibi
                    zengin içerikler sunarlar. Bölgedeki tatil otellerinin fiyatları, kalite, seyahat dönemi ve oda
                    seçeneklerine göre değişiklik göstermektedir. Ayrıca spor ve aktivite tutkunları için lüks tatil
                    otelleri, ideal bir tatil seçeneğidir. Belek tatil otelleri, gastronomi konusunda da ön
                    plandadır.Antalya otel’ de <a href="https://portnature.com.tr/ana-restoran">ana restoran</a>, Türk mutfağından dünya mutfağına kadar muhteşem lezzetleri
                    geniş bir yelpazede sunarlar. Tüm bunlar ve daha fazlası için <a href="https://portnature.rezervasyonal.com/">Belek otel tatil rezervasyonu</a> yapın.
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
                    <a href="{{ route('tr-activity') }}" class="stage-inner-wrapper">
                        <img class="stage-img" src="{{ asset('assets/frontend/images/offers/activities.webp') }}">
                        <div class="stage-text">
                            <p class="stage-small-text">İyi Eğlenceler</p>
                            <p class="stage-heading">Aktiviteler</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ route('tr-concert') }}" class="stage-inner-wrapper">
                        <img class="stage-img" src="{{ asset('assets/frontend/images/offers/concert.webp') }}">
                        <div class="stage-text">
                            <p class="stage-small-text">En Sevdiğiniz Sanatçılar</p>
                            <p class="stage-heading">Sahne Şovları</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="{{ route('tr-aquapark') }}" class="stage-inner-wrapper">
                        <img class="stage-img" src="{{ asset('assets/frontend/images/offers/aquapark.webp') }}">
                        <div class="stage-text">
                            <p class="stage-small-text">Çocuklar İçin Güvenli</p>
                            <p class="stage-heading">Su Parkı</p>
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
                <h2 class="split-text-8">Antalya en Lüks Otelleri</h2>
                <p>
                    Antalya, Türkiye'nin güney sahilinde yer alan turistik bir şehirdir. Antalya'nın yaz turizmi, lüks
                    otelleri, harika plajları ve yıl boyunca sıcak Akdeniz iklimi ile tüm dünyada oldukça ünlüdür.
                    Antalya lüks otellerin hepsi misafirlerine unutulmaz bir tatil deneyimi sunmak için birçok hizmet ve
                    olanak sağlarlar. Spa merkezleri, golf sahaları, <a href="https://portnature.com.tr/su-parki">su parkları</a> gibi birçok aktivite tatilinizi daha
                    keyifli hale getirecek. Ayrıca en lüks Antalya otelleri, canlı müzik performansları, <a href="https://portnature.com.tr/konserler">konserler</a> ve
                    gala yemekleri gibi özel etkinlikler ile tatilinize renk katacak. 
                </p>
            </div>
        </div>
        <div class="three-img-div">
        <div class="split-svg three-img-2 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h3 class="split-text-9">Antalya Otelleri Suit Oda</h3>
                <p>
                    Antalya lüks oteller, plajlara yakın ve doğal güzelliklerle çevrili konumlarıyla ile ön plana çıkmaktadır. 
                    Bu suite Antalya otel odaları, tatilcilerin konforlu bir konaklama yaşamalarını sağlayacak şekilde tasarlanmıştır. 
                    Ayrıca 5 yıldızlı lüks <b>Antalya otelleri</b>, özellikle çiftler için özel tasarlanmış suitler sunmaktadır. Özenle dekore 
                    edilmiş bu balayı suitleri çiftlere romantik bir atmosferde unutulmaz bir tatil deneyimi sunmayı hedefler. Sizde vakit 
                    kaybetmeden suit oda <a href="https://portnature.rezervasyonal.com/">rezervasyonunuzu yapın</a>, özel jakuzinizde rahatlayarak, sunulan olanakların keyfini çıkarın.
                 </p>
            </div>
        </div>
        <div class="three-img-div">
        <div class="split-svg three-img-3 colorful-image-wrapper"></div>
            <div class="three-img-text">
                <h4 class="split-text-10">Antalya Sanatçılı Oteller</h4>
                <p>
                    Sanatçılar ve müzisyenler tarafından sıklıkla ziyaret edilen Antalya'da birçok sanatçılı otel
                    bulunmaktadır. Bu oteller, sanatçıların konaklama ihtiyaçlarını karşılamak ve <a href="https://portnature.com.tr/konserler">konserler</a> için özel
                    olarak tasarlanmıştır. Ayrıca bu oteller birçok kültürel etkinlik için de uygun bir ortam sunarlar.
                    Antalya'da bulabileceğiniz sanatçılı otellerden biri olan <a href="https://portnature.com.tr/tr">Port Nature Luxury Resort Hotel</a>, yaz boyu ünlü
                    sanatçı konserleri ve etkinlikler düzenler.
                </p>
            </div>
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
            <h5 class="split-text-12">Antalya Hotel Resort & Spa </h5>
            <p>
                Antalya hotel resort & spa, konforlu konaklama, kusursuz hizmet, güzel manzaralar ve birçok aktivite
                imkanıyla unutamayacağınız bir tatil deneyimi sunar. Antalya hotel resort & spa ile birçok <a href="https://portnature.com.tr/aktiviteler">aktivite ve
                eğlence</a> imkanı bulunmaktadır. Antalya resort oteller, olmazsa olmaz bir spa merkezi, fitness salonu,
                <a href="https://www.portnature.com.tr/kapali-havuz">yüzme havuzu</a>, sauna, hamam ve masaj hizmetleri kesintisiz sağlamaktadır. Antalya hotel resort & spa,
                aynı zamanda düğünler, törenler ve özel etkinlikler için de popüler bir seçenek olmaktadır. Hatta bazı
                oteller, düğün organizasyonları için geniş bir alan sunar ve düğün paketleri de sunacaktır.</p>
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