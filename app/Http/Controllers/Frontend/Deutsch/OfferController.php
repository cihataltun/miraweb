<?php

namespace App\Http\Controllers\Frontend\Deutsch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index() {

        return view('frontend.de.offers.special-offers');
    }
    public function antalyaOffers() {

        return view('frontend.de.offers.antalya-hotels');
    }
    public function belekOffers() {

        return view('frontend.de.offers.belek-hotels');
    }
    public function turkeyOffers() {

        return view('frontend.de.offers.turkey-hotels');
    }
}
