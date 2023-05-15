<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EntertainmentController extends Controller
{
    public function index() {

        return view('frontend.en.entertainment.entertainment');
    }
    public function activity() {

        return view('frontend.en.entertainment.activity');
    }
    public function concert() {

        return view('frontend.en.entertainment.concert');
    }
}
