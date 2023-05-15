<?php

namespace App\Http\Controllers\Frontend\Russian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {

        return view('frontend.ru.blog.blog');
    }
    public function blogDetail() {

        return view('frontend.ru.blog.blog-details');
    }
}
