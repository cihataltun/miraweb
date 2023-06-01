<?php

namespace App\Http\Controllers\Frontend\English\Queen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QueenHomeController extends Controller
{
    public function index() {

        return view('frontend.en.QUEEN.homepage');
    }
}
