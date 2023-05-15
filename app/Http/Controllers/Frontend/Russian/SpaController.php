<?php

namespace App\Http\Controllers\Frontend\Russian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpaController extends Controller
{
    public function index() {

        return view('frontend.ru.spa.spa');
    }

    public function indoor_pool() {

        return view('frontend.ru.spa.indoor-pool');
    }
}
