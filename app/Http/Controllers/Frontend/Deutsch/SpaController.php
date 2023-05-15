<?php

namespace App\Http\Controllers\Frontend\Deutsch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpaController extends Controller
{
    public function index() {

        return view('frontend.de.spa.spa');
    }

    public function indoor_pool() {

        return view('frontend.de.spa.indoor-pool');
    }
}
