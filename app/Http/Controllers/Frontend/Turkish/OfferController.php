<?php

namespace App\Http\Controllers\Frontend\Turkish;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index() {

        return view('frontend.tr.offers.special-offers');
    }
    public function antalyaOffers() {

        return view('frontend.tr.offers.antalya-hotels');
    }
    public function belekOffers() {

        return view('frontend.tr.offers.belek-hotels');
    }
    public function turkeyOffers() {

        return view('frontend.tr.offers.turkey-hotels');
    }
}
