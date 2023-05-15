<?php

namespace App\Http\Controllers\Frontend\Turkish;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KidsConceptController extends Controller
{
    public function index() {

        return view('frontend.tr.kids-concept.kids-concept');
    }
    public function aquapark() {

        return view('frontend.tr.kids-concept.aquapark');
    }
    public function mini_club_alacarte() {

        return view('frontend.tr.kids-concept.mini-club-alacarte');
    }
}
