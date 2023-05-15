<?php

namespace App\Http\Controllers\Frontend\Deutsch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {

        return view('frontend.de.blog.blog');
    }
     
}
