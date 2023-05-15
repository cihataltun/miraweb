<?php

namespace App\Http\Controllers\Frontend\Turkish;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpaController extends Controller
{
    public function index() {

        return view('frontend.tr.spa.spa');
    }

    public function indoor_pool() {

        return view('frontend.tr.spa.indoor-pool');
    }
}
