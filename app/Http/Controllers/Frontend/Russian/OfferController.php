<?php

namespace App\Http\Controllers\Frontend\Russian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index() {

        return view('frontend.ru.offers.special-offers');
    }
    public function antalyaOffers() {

        return view('frontend.ru.offers.antalya-hotels');
    }
    public function belekOffers() {

        return view('frontend.ru.offers.belek-hotels');
    }
    public function turkeyOffers() {

        return view('frontend.ru.offers.turkey-hotels');
    }
}
