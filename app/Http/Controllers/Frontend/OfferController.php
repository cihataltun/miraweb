<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Offer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfferController extends Controller
{

    // public function offerDetail($offer_slug) {

    //     $offer_content = Offer::where('status', 1)->where('opportunity_slug', $offer_slug)->first();
    //     dd($offer_content);
    //     return view('frontend.en.offers.special-offers', compact('offer_content'));
    // }

    public function index() {

        $offer_content = Offer::where('status', 1)->first();
        $sliderImages = json_decode($offer_content->slider_images, true);
        // dd($sliderImages);
        return view('frontend.en.offers.special-offers', compact('offer_content', 'sliderImages'));
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