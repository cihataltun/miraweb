<?php

namespace App\Http\Controllers\Frontend\Turkish;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index() {

        return view('frontend.tr.homepage');
    }
}
