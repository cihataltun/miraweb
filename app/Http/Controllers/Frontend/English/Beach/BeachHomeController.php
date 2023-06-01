<?php

namespace App\Http\Controllers\Frontend\English\Beach;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeachHomeController extends Controller
{
    public function index() {

        return view('frontend.en.BEACH.homepage');
    }
}
