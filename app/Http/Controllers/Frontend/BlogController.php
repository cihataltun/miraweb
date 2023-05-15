<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {

        return view('frontend.en.blog.blog');
    }
     
    public function belekHotel() {

        return view('frontend.en.blog.belek-hotel');
    }
    public function belekResort() {

        return view('frontend.en.blog.belek-resort');
    }
    public function belekDeluxe() {

        return view('frontend.en.blog.belek-deluxe');
    }
    public function belekHoliday() {

        return view('frontend.en.blog.belek-holiday');
    }


    public function bogazkentHotel() {

        return view('frontend.en.blog.bogazkent-hotel');
    }
    public function bogazkentResort() {

        return view('frontend.en.blog.bogazkent-resort');
    }
    public function bogazkentHoliday() {

        return view('frontend.en.blog.bogazkent-holiday');
    }
    public function bogazkentDeluxe() {

        return view('frontend.en.blog.bogazkent-deluxe');
    }


    public function kadriyeHotel() {

        return view('frontend.en.blog.kadriye-hotel');
    }
    public function kadriyeResort() {

        return view('frontend.en.blog.kadriye-resort');
    }
    public function kadriyeHoliday() {

        return view('frontend.en.blog.kadriye-holiday');
    }
    public function kadriyeDeluxe() {

        return view('frontend.en.blog.kadriye-deluxe');
    }


    public function belekBestHotel() {

        return view('frontend.en.blog.belek-best-hotel');
    }
    public function belekBestResort() {

        return view('frontend.en.blog.belek-best-resort');
    }
    public function belekBestHoliday() {

        return view('frontend.en.blog.belek-best-holiday');
    }
    public function belekBestDeluxe() {

        return view('frontend.en.blog.belek-best-deluxe');
    }


    public function kadriyeBestHotel() {

        return view('frontend.en.blog.kadriye-best-hotel');
    }
    public function kadriyeBestResort() {

        return view('frontend.en.blog.kadriye-best-resort');
    }
    public function kadriyeBestHoliday() {

        return view('frontend.en.blog.kadriye-best-holiday');
    }
    public function kadriyeBestDeluxe() {

        return view('frontend.en.blog.kadriye-best-deluxe');
    }


    public function belekBeachHotel() {

        return view('frontend.en.blog.belek-beach-hotel');
    }
    public function belekBeachResort() {

        return view('frontend.en.blog.belek-beach-resort');
    }
    public function belekBeachHoliday() {

        return view('frontend.en.blog.belek-beach-holiday');
    }
    public function belekBeachDeluxe() {

        return view('frontend.en.blog.belek-beach-deluxe');
    }
}
