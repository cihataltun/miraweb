<?php

namespace App\Http\Controllers\Frontend\Turkish;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EntertainmentController extends Controller
{
    public function index() {

        return view('frontend.tr.entertainment.entertainment');
    }
    public function activity() {

        return view('frontend.tr.entertainment.activity');
    }
    public function concert() {

        return view('frontend.tr.entertainment.concert');
    }
}
