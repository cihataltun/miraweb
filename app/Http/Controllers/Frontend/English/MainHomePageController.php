<?php

namespace App\Http\Controllers\Frontend\English;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainHomePageController extends Controller
{
    public function index() {

        return view('frontend.en.homepage');
    }
}
