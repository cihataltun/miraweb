<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Frontend\Deutsch\Beach\BeachHomeController as BeachBeachHomeController;
use App\Http\Controllers\Frontend\English\BlogController;
use App\Http\Controllers\Frontend\English\ContactController;
use App\Http\Controllers\Frontend\English\MainHomePageController;
use App\Http\Controllers\Frontend\English\Beach\BeachHomeController;
use App\Http\Controllers\Frontend\English\Queen\QueenHomeController;
use App\Http\Controllers\Frontend\Deutsch\BlogController as DeutschBlogController;
use App\Http\Controllers\Frontend\Deutsch\ContactController as DeutschContactController;
use App\Http\Controllers\Frontend\Deutsch\MainHomePageController as DeutschMainHomePageController;
use App\Http\Controllers\Frontend\Deutsch\Queen\QueenHomeController as QueenQueenHomeController;
use App\Http\Controllers\Frontend\Russian\Beach\BeachHomeController as RussianBeachBeachHomeController;
use App\Http\Controllers\Frontend\Russian\BlogController as RussianBlogController;
use App\Http\Controllers\Frontend\Russian\ContactController as RussianContactController;
use App\Http\Controllers\Frontend\Russian\MainHomePageController as RussianMainHomePageController;
use App\Http\Controllers\Frontend\Russian\Queen\QueenHomeController as RussianQueenQueenHomeController;
use App\Http\Controllers\Frontend\Turkish\Beach\BeachHomeController as TurkishBeachBeachHomeController;
use App\Http\Controllers\Frontend\Turkish\BlogController as TurkishBlogController;
use App\Http\Controllers\Frontend\Turkish\ContactController as TurkishContactController;
use App\Http\Controllers\Frontend\Turkish\MainHomePageController as TurkishMainHomePageController;
use App\Http\Controllers\Frontend\Turkish\Queen\QueenHomeController as TurkishQueenQueenHomeController;

# ==================================================== FRONTEND ====================================================================================


# =========================== ENGLISH ===================================================================

Route::get('/', [MainHomePageController::class, 'index'])->name('en-main-homepage');
Route::get('en', [MainHomePageController::class, 'index'])->name('en-main-homepage');
Route::get('miramare-hotel-beach', [BeachHomeController::class, 'index'])->name('en-beach-homepage');
Route::get('miramare-hotel-queen', [QueenHomeController::class, 'index'])->name('en-queen-homepage');

Route::get('blog-page', [BlogController::class, 'index'])->name('en-blog');
Route::get('contacts', [ContactController::class, 'index'])->name('en-contacts');
Route::post('contacts', [ContactController::class, 'submit'])->name('en-contacts-submit');
Route::get('data-policy', [ContactController::class, 'data_policy'])->name('en-data-policy');

# ======================================= DEUTSCH ====================================================================

Route::get('de', [DeutschMainHomePageController::class, 'index'])->name('de-main-homepage');
Route::get('beach-miramare-hotel', [BeachBeachHomeController::class, 'index'])->name('de-beach-homepage');
Route::get('queen-miramare-hotel', [QueenQueenHomeController::class, 'index'])->name('de-queen-homepage');

Route::get('blog-seite', [DeutschBlogController::class, 'index'])->name('de-blog');
Route::get('kontakte', [DeutschContactController::class, 'index'])->name('de-contacts');
Route::post('kontakte', [DeutschContactController::class, 'submit'])->name('de-contacts-submit');
Route::get('datenschutzrichtlinien', [DeutschContactController::class, 'data_policy'])->name('de-data-policy');

# ======================================= RUSSIAN ====================================================================

Route::get('ru', [RussianMainHomePageController::class, 'index'])->name('ru-main-homepage');
Route::get('hotel-miramare-beach', [RussianBeachBeachHomeController::class, 'index'])->name('ru-beach-homepage');
Route::get('hotel-miramare-queen', [RussianQueenQueenHomeController::class, 'index'])->name('ru-queen-homepage');

Route::get('blog-stranica', [RussianBlogController::class, 'index'])->name('ru-blog');
Route::get('kontakti', [RussianContactController::class, 'index'])->name('ru-contacts');
Route::post('kontakti', [RussianContactController::class, 'submit'])->name('ru-contacts-submit');
Route::get('politika-dannih', [RussianContactController::class, 'data_policy'])->name('ru-data-policy');

# ======================================= TURKISH ====================================================================

Route::get('tr', [TurkishMainHomePageController::class, 'index'])->name('tr-main-homepage');
Route::get('miramare-beach-hotel', [TurkishBeachBeachHomeController::class, 'index'])->name('tr-beach-homepage');
Route::get('miramare-queen-hotel', [TurkishQueenQueenHomeController::class, 'index'])->name('tr-queen-homepage');

Route::get('blog-sayfasi', [TurkishBlogController::class, 'index'])->name('tr-blog');
Route::get('iletisim', [TurkishContactController::class, 'index'])->name('tr-contacts');
Route::post('iletisim', [TurkishContactController::class, 'submit'])->name('tr-contacts-submit');
Route::get('kvkk', [TurkishContactController::class, 'data_policy'])->name('tr-data-policy');


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
    Route::get('offer-list', [OfferController::class, 'index']);
    Route::get('offer-create', [OfferController::class, 'create']);
    Route::post('offer-create', [OfferController::class, 'store']);
    Route::get('offer-edit/{offer_id}', [OfferController::class, 'edit']);
    Route::put('offer-update/{offer_id}', [OfferController::class, 'update']);
    Route::get('offer-delete/{offer_id}', [OfferController::class, 'destroy']);
    // USERS
    Route::get('user-list', [UserController::class, 'index']);
    Route::get('user-edit/{user_id}', [UserController::class, 'edit']);
    Route::put('user-update/{user_id}', [UserController::class, 'update']);
});
