<?php

namespace App\Http\Controllers\Frontend\English;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {

        return view('frontend.en.blog.blog');
    }
}
