<?php

namespace App\Http\Controllers\Frontend\Russian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainHomePageController extends Controller
{
    public function index() {

        return view('frontend.ru.homepage');
    }
}
