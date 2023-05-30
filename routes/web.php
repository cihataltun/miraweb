<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\OfferController as AdminOfferController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SliderController;

use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\AccommodationController;
use App\Http\Controllers\Frontend\KidsConceptController;
use App\Http\Controllers\Frontend\OfferController;
use App\Http\Controllers\Frontend\FoodDrinkController;
use App\Http\Controllers\Frontend\EntertainmentController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\SpaController;
use App\Http\Controllers\Frontend\MeetingController;


# ==================================================== FRONTEND ====================================================================================


# =========================== ENGLISH ===================================================================

Route::get('/', [HomePageController::class, 'index'])->name('homepage');
Route::get('en', [HomePageController::class, 'index'])->name('homepage');
// BLOG PAGES
Route::get('blog-page', [BlogController::class, 'index'])->name('blog');
// Route::get('belek-hotel', [BlogController::class, 'belekHotel'])->name('belek-hotel');
// Route::get('belek-resort', [BlogController::class, 'belekResort'])->name('belek-resort');
// Route::get('belek-deluxe', [BlogController::class, 'belekDeluxe'])->name('belek-deluxe');
// Route::get('belek-holiday', [BlogController::class, 'belekHoliday'])->name('belek-holiday');

// Route::get('bogazkent-hotel', [BlogController::class, 'bogazkentHotel'])->name('bogazkent-hotel');
// Route::get('bogazkent-resort', [BlogController::class, 'bogazkentResort'])->name('bogazkent-resort');
// Route::get('bogazkent-deluxe', [BlogController::class, 'bogazkentDeluxe'])->name('bogazkent-deluxe');
// Route::get('bogazkent-holiday', [BlogController::class, 'bogazkentHoliday'])->name('bogazkent-holiday');

// Route::get('kadriye-hotel', [BlogController::class, 'kadriyeHotel'])->name('kadriye-hotel');
// Route::get('kadriye-resort', [BlogController::class, 'kadriyeResort'])->name('kadriye-resort');
// Route::get('kadriye-deluxe', [BlogController::class, 'kadriyeDeluxe'])->name('kadriye-deluxe');
// Route::get('kadriye-holiday', [BlogController::class, 'kadriyeHoliday'])->name('kadriye-holiday');

// Route::get('belek-beach-hotel', [BlogController::class, 'belekBeachHotel'])->name('belek-beach-hotel');
// Route::get('belek-beach-resort', [BlogController::class, 'belekBeachResort'])->name('belek-beach-resort');
// Route::get('belek-beach-holiday', [BlogController::class, 'belekBeachHoliday'])->name('belek-beach-holiday');
// Route::get('belek-beach-deluxe', [BlogController::class, 'belekBeachDeluxe'])->name('belek-beach-deluxe');

// Route::get('belek-best-hotel', [BlogController::class, 'belekBestHotel'])->name('belek-best-hotel');
// Route::get('belek-best-resort', [BlogController::class, 'belekBestResort'])->name('belek-best-resort');
// Route::get('belek-best-holiday', [BlogController::class, 'belekBestHoliday'])->name('belek-best-holiday');
// Route::get('belek-best-deluxe', [BlogController::class, 'belekBestDeluxe'])->name('belek-best-deluxe');

// Route::get('kadriye-best-hotel', [BlogController::class, 'kadriyeBestHotel'])->name('kadriye-best-hotel');
// Route::get('kadriye-best-resort', [BlogController::class, 'kadriyeBestResort'])->name('kadriye-best-resort');
// Route::get('kadriye-best-holiday', [BlogController::class, 'kadriyeBestHoliday'])->name('kadriye-best-holiday');
// Route::get('kadriye-best-deluxe', [BlogController::class, 'kadriyeBestDeluxe'])->name('kadriye-best-deluxe');
//BLOG PAGES END

Route::get('rooms', [AccommodationController::class, 'index'])->name('accommodation');
Route::get('standard-rooms', [AccommodationController::class, 'standard_rooms'])->name('standard-rooms');
Route::get('family-room', [AccommodationController::class, 'family_rooms'])->name('family-rooms');
Route::get('king-suite-room', [AccommodationController::class, 'kingsuit_rooms'])->name('kingsuit-rooms');
Route::get('standard-side-view-room', [AccommodationController::class, 'sideview_rooms'])->name('sideview-rooms');
Route::get('standard-sea-view-room', [AccommodationController::class, 'seaview_rooms'])->name('seaview-rooms');
Route::get('standard-land-view-room', [AccommodationController::class, 'landview_rooms'])->name('landview-rooms');

Route::get('kids-concept', [KidsConceptController::class, 'index'])->name('kids-concepts');
Route::get('aquapark', [KidsConceptController::class, 'aquapark'])->name('aquapark');
Route::get('mini-club-alacarte-restaurant', [KidsConceptController::class, 'mini_club_alacarte'])->name('mini-club-alacarte');

// Route::get('{$offer_slug}', [OfferController::class, 'offerDetail'])->name('offer-detail');
Route::get('special-offers', [OfferController::class, 'index'])->name('special-offers');
Route::get('en-antalya-hotels', [OfferController::class, 'antalyaOffers'])->name('antalya-hotels');
Route::get('en-belek-hotels', [OfferController::class, 'belekOffers'])->name('belek-hotels');
Route::get('en-turkey-hotels', [OfferController::class, 'turkeyOffers'])->name('turkey-hotels');


Route::get('food-drinks', [FoodDrinkController::class, 'index'])->name('food-drink');
Route::get('alacarte-restaurants', [FoodDrinkController::class, 'alacarte_restaurants'])->name('alacarte-restaurants');
Route::get('bars-cafes', [FoodDrinkController::class, 'bar_cafe'])->name('bar-cafe');
Route::get('davidoff-cafe', [FoodDrinkController::class, 'davidoff_cafe'])->name('davidoff-cafe');
Route::get('main-restaurant', [FoodDrinkController::class, 'main_restaurant'])->name('main-restaurant');
Route::get('far-east-alacarte-restaurant', [FoodDrinkController::class, 'fareast'])->name('fareast');
Route::get('all-day-dining-alacarte-restaurant', [FoodDrinkController::class, 'alldaydinning'])->name('alldaydinning');
Route::get('french-alacarte-restaurant', [FoodDrinkController::class, 'french'])->name('french');
Route::get('seaside-alacarte-restaurant', [FoodDrinkController::class, 'seaside'])->name('seaside');
Route::get('italian-alacarte-restaurant', [FoodDrinkController::class, 'italian'])->name('italian');
Route::get('sushi-bar-alacarte-restaurant', [FoodDrinkController::class, 'sushi_bar'])->name('sushi-bar');
Route::get('script-chivas-lounge', [FoodDrinkController::class, 'chivas_lounge'])->name('chivas-lounge');
Route::get('born9-hennessy-lounge', [FoodDrinkController::class, 'hennessy_lounge'])->name('hennessy-lounge');
Route::get('irish-pub', [FoodDrinkController::class, 'irish_pub'])->name('irish-pub');
Route::get('lobby-bar', [FoodDrinkController::class, 'lobby_bar'])->name('lobby-bar');
Route::get('flamingo-bar', [FoodDrinkController::class, 'flamingo_bar'])->name('flamingo-bar');
Route::get('kit-kat-cafe', [FoodDrinkController::class, 'kitkat_cafe'])->name('kitkat-cafe');
Route::get('nespresso-cafe', [FoodDrinkController::class, 'nespresso_cafe'])->name('nespresso-cafe');

Route::get('entertainment', [EntertainmentController::class, 'index'])->name('entertainment');
Route::get('activities', [EntertainmentController::class, 'activity'])->name('activity');
Route::get('concerts', [EntertainmentController::class, 'concert'])->name('concert');

Route::get('contacts', [ContactController::class, 'index'])->name('contacts');
Route::post('contacts', [ContactController::class, 'submit'])->name('contacts-submit');
Route::get('data-policy', [ContactController::class, 'data_policy'])->name('data-policy');

Route::get('spa-center', [SpaController::class, 'index'])->name('spa');
Route::get('indoor-pool', [SpaController::class, 'indoor_pool'])->name('indoor-pool');

Route::get('meeting-congress', [MeetingController::class, 'index'])->name('meeting-congress');


# ======================================= RUSSIAN ====================================================================

Route::get('ru', [App\Http\Controllers\Frontend\Russian\HomePageController::class, 'index'])->name('ru-homepage');

Route::get('blog-stranica', [App\Http\Controllers\Frontend\Russian\BlogController::class, 'index'])->name('ru-blog');

Route::get('nomera', [App\Http\Controllers\Frontend\Russian\AccommodationController::class, 'index'])->name('ru-accommodation');
Route::get('semeyniy-nomer', [App\Http\Controllers\Frontend\Russian\AccommodationController::class, 'family_rooms'])->name('ru-family-rooms');
Route::get('nomer-king-suite', [App\Http\Controllers\Frontend\Russian\AccommodationController::class, 'kingsuit_rooms'])->name('ru-kingsuit-rooms');
Route::get('nomera-standart', [App\Http\Controllers\Frontend\Russian\AccommodationController::class, 'standard_rooms'])->name('ru-standard-rooms');
Route::get('nomer-standard-vid-na-more', [App\Http\Controllers\Frontend\Russian\AccommodationController::class, 'seaview_rooms'])->name('ru-seaview-rooms');
Route::get('nomer-standart-s-bokovim-vidom', [App\Http\Controllers\Frontend\Russian\AccommodationController::class, 'sideview_rooms'])->name('ru-sideview-rooms');
Route::get('nomer-standard-vid-na-okrestnosti', [App\Http\Controllers\Frontend\Russian\AccommodationController::class, 'landview_rooms'])->name('ru-landview-rooms');

Route::get('detskiy-koncept',[App\Http\Controllers\Frontend\Russian\KidsConceptController::class, 'index'])->name('ru-kids-concepts');
Route::get('akvapark',[App\Http\Controllers\Frontend\Russian\KidsConceptController::class, 'aquapark'])->name('ru-aquapark');
Route::get('alacarte-restoran-mini-club',[App\Http\Controllers\Frontend\Russian\KidsConceptController::class, 'mini_club_alacarte'])->name('ru-mini-club-alacarte');

Route::get('specialniye-predlojeniya',[App\Http\Controllers\Frontend\Russian\OfferController::class, 'index'])->name('ru-special-offers');
Route::get('ru-oteli-v-antalii',[App\Http\Controllers\Frontend\Russian\OfferController::class, 'antalyaOffers'])->name('ru-antalya-hotels');
Route::get('ru-oteli-belek',[App\Http\Controllers\Frontend\Russian\OfferController::class, 'belekOffers'])->name('ru-belek-hotels');
Route::get('ru-oteli-turcii',[App\Http\Controllers\Frontend\Russian\OfferController::class, 'turkeyOffers'])->name('ru-turkey-hotels');

Route::get('eda-napitki',[App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'index'])->name('ru-food-drink');
Route::get('restorani-alacarte', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'alacarte_restaurants'])->name('ru-alacarte-restaurants');
Route::get('bari-kafe', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'bar_cafe'])->name('ru-bar-cafe');
Route::get('kafe-davidoff', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'davidoff_cafe'])->name('ru-davidoff-cafe');
Route::get('glavniy-restoran', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'main_restaurant'])->name('ru-main-restaurant');
Route::get('alacarte-restoran-dalnevostochniy', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'fareast'])->name('ru-fareast');
Route::get('alacarte-restoran-all-day-dining', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'alldaydinning'])->name('ru-alldaydinning');
Route::get('alacarte-restoran-francuzskiy', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'french'])->name('ru-french');
Route::get('alacarte-restoran-seaside', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'seaside'])->name('ru-seaside');
Route::get('alacarte-restoran-italyannskiy', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'italian'])->name('ru-italian');
Route::get('alacarte-restoran-sushi-bar', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'sushi_bar'])->name('ru-sushi-bar');
Route::get('script-chivas-launge', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'chivas_lounge'])->name('ru-chivas-lounge');
Route::get('born9-hennessy-launge', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'hennessy_lounge'])->name('ru-hennessy-lounge');
Route::get('pub-irish', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'irish_pub'])->name('ru-irish-pub');
Route::get('lobbybar', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'lobby_bar'])->name('ru-lobby-bar');
Route::get('flamingobar', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'flamingo_bar'])->name('ru-flamingo-bar');
Route::get('kafe-kit-kat', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'kitkat_cafe'])->name('ru-kitkat-cafe');
Route::get('kafe-nespresso', [App\Http\Controllers\Frontend\Russian\FoodDrinkController::class, 'nespresso_cafe'])->name('ru-nespresso-cafe');

Route::get('razvlecheniya', [App\Http\Controllers\Frontend\Russian\EntertainmentController::class, 'index'])->name('ru-entertainment');
Route::get('meropriyatiya', [App\Http\Controllers\Frontend\Russian\EntertainmentController::class, 'activity'])->name('ru-activity');
Route::get('concerti', [App\Http\Controllers\Frontend\Russian\EntertainmentController::class, 'concert'])->name('ru-concert');
Route::get('concertsbuilding', [App\Http\Controllers\Frontend\Russian\EntertainmentController::class, 'concertsbuilding'])->name('ru-concertsbuilding');

Route::get('kontakti', [App\Http\Controllers\Frontend\Russian\ContactController::class, 'index'])->name('ru-contacts');
Route::post('kontakti', [App\Http\Controllers\Frontend\Russian\ContactController::class, 'submit'])->name('ru-contacts-submit');
Route::get('politika-dannih', [App\Http\Controllers\Frontend\Russian\ContactController::class, 'data_policy'])->name('ru-data-policy');

Route::get('spa-centr', [App\Http\Controllers\Frontend\Russian\SpaController::class, 'index'])->name('ru-spa');
Route::get('kritiy-basseyn', [App\Http\Controllers\Frontend\Russian\SpaController::class, 'indoor_pool'])->name('ru-indoor-pool');

Route::get('vstrechi-kongress', [App\Http\Controllers\Frontend\Russian\MeetingController::class, 'index'])->name('ru-meeting-congress');



# ======================================= TURKISH ====================================================================

Route::get('tr', [App\Http\Controllers\Frontend\Turkish\HomePageController::class, 'index'])->name('tr-homepage');

Route::get('blog-sayfasi', [App\Http\Controllers\Frontend\Turkish\BlogController::class, 'index'])->name('tr-blog');

Route::get('konaklama', [App\Http\Controllers\Frontend\Turkish\AccommodationController::class, 'index'])->name('tr-accommodation');
Route::get('aile-odasi', [App\Http\Controllers\Frontend\Turkish\AccommodationController::class, 'family_rooms'])->name('tr-family-rooms');
Route::get('king-suite-oda', [App\Http\Controllers\Frontend\Turkish\AccommodationController::class, 'kingsuit_rooms'])->name('tr-kingsuit-rooms');
Route::get('standart-odalar', [App\Http\Controllers\Frontend\Turkish\AccommodationController::class, 'standard_rooms'])->name('tr-standard-rooms');
Route::get('standart-deniz-manzarali-oda', [App\Http\Controllers\Frontend\Turkish\AccommodationController::class, 'seaview_rooms'])->name('tr-seaview-rooms');
Route::get('standart-yandan-manzarali-oda', [App\Http\Controllers\Frontend\Turkish\AccommodationController::class, 'sideview_rooms'])->name('tr-sideview-rooms');
Route::get('standart-kara-manzarali-oda', [App\Http\Controllers\Frontend\Turkish\AccommodationController::class, 'landview_rooms'])->name('tr-landview-rooms');

Route::get('cocuk-konsepti',[App\Http\Controllers\Frontend\Turkish\KidsConceptController::class, 'index'])->name('tr-kids-concepts');
Route::get('su-parki',[App\Http\Controllers\Frontend\Turkish\KidsConceptController::class, 'aquapark'])->name('tr-aquapark');
Route::get('mini-club-alacarte-restoran',[App\Http\Controllers\Frontend\Turkish\KidsConceptController::class, 'mini_club_alacarte'])->name('tr-mini-club-alacarte');

Route::get('ozel-teklifler',[App\Http\Controllers\Frontend\Turkish\OfferController::class, 'index'])->name('tr-special-offers');
Route::get('tr-antalya-otelleri',[App\Http\Controllers\Frontend\Turkish\OfferController::class, 'antalyaOffers'])->name('tr-antalya-hotels');
Route::get('tr-belek-otelleri',[App\Http\Controllers\Frontend\Turkish\OfferController::class, 'belekOffers'])->name('tr-belek-hotels');
Route::get('tr-turkiye-otelleri',[App\Http\Controllers\Frontend\Turkish\OfferController::class, 'turkeyOffers'])->name('tr-turkey-hotels');

Route::get('yeme-icme',[App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'index'])->name('tr-food-drink');
Route::get('alacarte-restoranlar', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'alacarte_restaurants'])->name('tr-alacarte-restaurants');
Route::get('barlar-kafeler', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'bar_cafe'])->name('tr-bar-cafe');
Route::get('davidoff-kafe', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'davidoff_cafe'])->name('tr-davidoff-cafe');
Route::get('ana-restoran', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'main_restaurant'])->name('tr-main-restaurant');
Route::get('uzak-dogu-alacarte-restoran', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'fareast'])->name('tr-fareast');
Route::get('all-day-dining-alacarte-restoran', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'alldaydinning'])->name('tr-alldaydinning');
Route::get('fransiz-alacarte-restoran', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'french'])->name('tr-french');
Route::get('seaside-alacarte-restoran', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'seaside'])->name('tr-seaside');
Route::get('italyan-alacarte-restoran', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'italian'])->name('tr-italian');
Route::get('sushi-bar-alacarte-restoran', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'sushi_bar'])->name('tr-sushi-bar');
Route::get('script-launge-chivas', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'chivas_lounge'])->name('tr-chivas-lounge');
Route::get('born9-launge-hennessy', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'hennessy_lounge'])->name('tr-hennessy-lounge');
Route::get('irishpub', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'irish_pub'])->name('tr-irish-pub');
Route::get('bar-lobby', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'lobby_bar'])->name('tr-lobby-bar');
Route::get('bar-flamingo', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'flamingo_bar'])->name('tr-flamingo-bar');
Route::get('kit-kat-kafe', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'kitkat_cafe'])->name('tr-kitkat-cafe');
Route::get('nespresso-kafe', [App\Http\Controllers\Frontend\Turkish\FoodDrinkController::class, 'nespresso_cafe'])->name('tr-nespresso-cafe');

Route::get('eglenceler', [App\Http\Controllers\Frontend\Turkish\EntertainmentController::class, 'index'])->name('tr-entertainment');
Route::get('aktiviteler', [App\Http\Controllers\Frontend\Turkish\EntertainmentController::class, 'activity'])->name('tr-activity');
Route::get('konserler', [App\Http\Controllers\Frontend\Turkish\EntertainmentController::class, 'concert'])->name('tr-concert');

Route::get('iletisim', [App\Http\Controllers\Frontend\Turkish\ContactController::class, 'index'])->name('tr-contacts');
Route::post('iletisim', [App\Http\Controllers\Frontend\Turkish\ContactController::class, 'submit'])->name('tr-contacts-submit');
Route::get('kvkk', [App\Http\Controllers\Frontend\Turkish\ContactController::class, 'data_policy'])->name('tr-data-policy');

Route::get('spa-merkezi', [App\Http\Controllers\Frontend\Turkish\SpaController::class, 'index'])->name('tr-spa');
Route::get('kapali-havuz', [App\Http\Controllers\Frontend\Turkish\SpaController::class, 'indoor_pool'])->name('tr-indoor-pool');

Route::get('toplanti-kongre', [App\Http\Controllers\Frontend\Turkish\MeetingController::class, 'index'])->name('tr-meeting-congress');



# ======================================= DEUTSCH ====================================================================

Route::get('de', [App\Http\Controllers\Frontend\Deutsch\HomePageController::class, 'index'])->name('de-homepage');

Route::get('blog-seite', [App\Http\Controllers\Frontend\Deutsch\BlogController::class, 'index'])->name('de-blog');

Route::get('zimmer', [App\Http\Controllers\Frontend\Deutsch\AccommodationController::class, 'index'])->name('de-accommodation');
Route::get('familienzimmer', [App\Http\Controllers\Frontend\Deutsch\AccommodationController::class, 'family_rooms'])->name('de-family-rooms');
Route::get('king-suite-zimmer', [App\Http\Controllers\Frontend\Deutsch\AccommodationController::class, 'kingsuit_rooms'])->name('de-kingsuit-rooms');
Route::get('standard-zimmer', [App\Http\Controllers\Frontend\Deutsch\AccommodationController::class, 'standard_rooms'])->name('de-standard-rooms');
Route::get('standard-meerblick-zimmer', [App\Http\Controllers\Frontend\Deutsch\AccommodationController::class, 'seaview_rooms'])->name('de-seaview-rooms');
Route::get('standard-seitlichemblick-zimmer', [App\Http\Controllers\Frontend\Deutsch\AccommodationController::class, 'sideview_rooms'])->name('de-sideview-rooms');
Route::get('standard-landblick-zimmer', [App\Http\Controllers\Frontend\Deutsch\AccommodationController::class, 'landview_rooms'])->name('de-landview-rooms');

Route::get('kinderkonzept',[App\Http\Controllers\Frontend\Deutsch\KidsConceptController::class, 'index'])->name('de-kids-concepts');
Route::get('aqua-park',[App\Http\Controllers\Frontend\Deutsch\KidsConceptController::class, 'aquapark'])->name('de-aquapark');
Route::get('alacarte-restaurant-mini-club',[App\Http\Controllers\Frontend\Deutsch\KidsConceptController::class, 'mini_club_alacarte'])->name('de-mini-club-alacarte');

Route::get('angebote',[App\Http\Controllers\Frontend\Deutsch\OfferController::class, 'index'])->name('de-special-offers');
Route::get('de-antalya-hotel',[App\Http\Controllers\Frontend\Deutsch\OfferController::class, 'antalyaOffers'])->name('de-antalya-hotels');
Route::get('de-hotel-belek',[App\Http\Controllers\Frontend\Deutsch\OfferController::class, 'belekOffers'])->name('de-belek-hotels');
Route::get('de-hotel-turkei',[App\Http\Controllers\Frontend\Deutsch\OfferController::class, 'turkeyOffers'])->name('de-turkey-hotels');

Route::get('speisen-getranke',[App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'index'])->name('de-food-drink');
Route::get('restaurants-alacarte', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'alacarte_restaurants'])->name('de-alacarte-restaurants');
Route::get('cafes-bars', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'bar_cafe'])->name('de-bar-cafe');
Route::get('kafedavidoff', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'davidoff_cafe'])->name('de-davidoff-cafe');
Route::get('hauptrestaurant', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'main_restaurant'])->name('de-main-restaurant');
Route::get('alacarte-restaurant-far-east', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'fareast'])->name('de-fareast');
Route::get('alacarte-restaurant-all-day-dining', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'alldaydinning'])->name('de-alldaydinning');
Route::get('alacarte-restaurant-french', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'french'])->name('de-french');
Route::get('alacarte-restaurant-seaside', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'seaside'])->name('de-seaside');
Route::get('alacarte-restaurant-italian', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'italian'])->name('de-italian');
Route::get('alacarte-restaurant-sushi-bar', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'sushi_bar'])->name('de-sushi-bar');
Route::get('lounge-chivas-script', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'chivas_lounge'])->name('de-chivas-lounge');
Route::get('lounge-born9-hennessy', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'hennessy_lounge'])->name('de-hennessy-lounge');
Route::get('pubirish', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'irish_pub'])->name('de-irish-pub');
Route::get('barlobby', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'lobby_bar'])->name('de-lobby-bar');
Route::get('barflamingo', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'flamingo_bar'])->name('de-flamingo-bar');
Route::get('cafe-kit-kat', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'kitkat_cafe'])->name('de-kitkat-cafe');
Route::get('cafe-nespresso', [App\Http\Controllers\Frontend\Deutsch\FoodDrinkController::class, 'nespresso_cafe'])->name('de-nespresso-cafe');

Route::get('unterhaltung', [App\Http\Controllers\Frontend\Deutsch\EntertainmentController::class, 'index'])->name('de-entertainment');
Route::get('aktiviaten', [App\Http\Controllers\Frontend\Deutsch\EntertainmentController::class, 'activity'])->name('de-activity');
Route::get('konzert', [App\Http\Controllers\Frontend\Deutsch\EntertainmentController::class, 'concert'])->name('de-concert');

Route::get('kontakte', [App\Http\Controllers\Frontend\Deutsch\ContactController::class, 'index'])->name('de-contacts');
Route::post('kontakte', [App\Http\Controllers\Frontend\Deutsch\ContactController::class, 'submit'])->name('de-contacts-submit');
Route::get('datenschutzrichtlinien', [App\Http\Controllers\Frontend\Deutsch\ContactController::class, 'data_policy'])->name('de-data-policy');

Route::get('spa-zentrum', [App\Http\Controllers\Frontend\Deutsch\SpaController::class, 'index'])->name('de-spa');
Route::get('innenpool', [App\Http\Controllers\Frontend\Deutsch\SpaController::class, 'indoor_pool'])->name('de-indoor-pool');

Route::get('tagung-kongress', [App\Http\Controllers\Frontend\Deutsch\MeetingController::class, 'index'])->name('de-meeting-congress');



# ====================================================== ADMIN ============================================================================

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);
    // CATEGORY
    Route::get('category-list', [CategoryController::class, 'index']);
    Route::get('category-create', [CategoryController::class, 'create']);
    Route::post('category-create', [CategoryController::class, 'store']);
    Route::get('category-edit/{category_id}', [CategoryController::class, 'edit']);
    Route::put('category-update/{category_id}', [CategoryController::class, 'update']);
    Route::get('category-delete/{category_id}', [CategoryController::class, 'destroy']);
    // POSTS
    Route::get('post-list', [PostController::class, 'index']);
    Route::get('post-create', [PostController::class, 'create']);
    Route::post('post-create', [PostController::class, 'store']);
    Route::get('post-edit/{post_id}', [PostController::class, 'edit']);
    Route::put('post-update/{post_id}', [PostController::class, 'update']);
    Route::get('post-delete/{post_id}', [PostController::class, 'destroy']);
    // SLIDERS
    Route::get('slider-list', [SliderController::class, 'index']);
    Route::get('slider-create', [SliderController::class, 'create']);
    Route::post('slider-create', [SliderController::class, 'store']);
    Route::get('slider-edit/{slider_id}', [SliderController::class, 'edit']);
    Route::put('slider-update/{slider_id}', [SliderController::class, 'update']);
    Route::get('slider-delete/{slider_id}', [SliderController::class, 'destroy']);
    // Image Gallery
    Route::get('dropzone', [GalleryController::class, 'index']);
    Route::post('/dropzone-store', [GalleryController::class, 'dropzoneStore'])->name('dropzone.store');
    Route::get('dropzone/fetch', [GalleryController::class, 'fetch'])->name('dropzone.fetch');    
    Route::get('dropzone/delete', [GalleryController::class, 'delete'])->name('dropzone.delete');
    // OFFERS
    Route::get('offer-list', [App\Http\Controllers\Admin\OfferController::class, 'index']);
    Route::get('offer-create', [App\Http\Controllers\Admin\OfferController::class, 'create']);
    Route::post('offer-create', [App\Http\Controllers\Admin\OfferController::class, 'store']);
    Route::get('offer-edit/{offer_id}', [App\Http\Controllers\Admin\OfferController::class, 'edit']);
    Route::put('offer-update/{offer_id}', [App\Http\Controllers\Admin\OfferController::class, 'update']);
    Route::get('offer-delete/{offer_id}', [App\Http\Controllers\Admin\OfferController::class, 'destroy']);
    // USERS
    Route::get('user-list', [UserController::class, 'index']);
    Route::get('user-edit/{user_id}', [UserController::class, 'edit']);
    Route::put('user-update/{user_id}', [UserController::class, 'update']);
});
