<?php

namespace App\Http\Controllers\Frontend\Deutsch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EntertainmentController extends Controller
{
    public function index() {

        return view('frontend.de.entertainment.entertainment');
    }
    public function activity() {

        return view('frontend.de.entertainment.activity');
    }
    public function concert() {

        return view('frontend.de.entertainment.concert');
    }
}
