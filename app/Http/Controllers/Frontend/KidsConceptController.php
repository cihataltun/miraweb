<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KidsConceptController extends Controller
{
    public function index() {

        return view('frontend.en.kids-concept.kids-concept');
    }
    public function aquapark() {

        return view('frontend.en.kids-concept.aquapark');
    }
    public function mini_club_alacarte() {

        return view('frontend.en.kids-concept.mini-club-alacarte');
    }

}
