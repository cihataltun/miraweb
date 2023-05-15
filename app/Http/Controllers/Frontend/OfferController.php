<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index() {

        return view('frontend.en.offers.special-offers');
    }
    public function antalyaOffers() {

        return view('frontend.en.offers.antalya-hotels');
    }
    public function belekOffers() {

        return view('frontend.en.offers.belek-hotels');
    }
    public function turkeyOffers() {

        return view('frontend.en.offers.turkey-hotels');
    }
}