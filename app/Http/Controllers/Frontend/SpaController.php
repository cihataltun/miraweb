<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpaController extends Controller
{
    public function index() {

        return view('frontend.en.spa.spa');
    }

    public function indoor_pool() {

        return view('frontend.en.spa.indoor-pool');
    }
}
