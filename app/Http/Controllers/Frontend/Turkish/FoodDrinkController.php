<?php

namespace App\Http\Controllers\Frontend\Turkish;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodDrinkController extends Controller
{
    public function index() {

        return view('frontend.tr.food-drink.food-drink');
    }
    public function alacarte_restaurants() {

        return view('frontend.tr.food-drink.alacarte-restaurants');
    }
    public function bar_cafe() {

        return view('frontend.tr.food-drink.bar-cafe');
    }
    public function davidoff_cafe() {

        return view('frontend.tr.food-drink.davidoff-cafe');
    }
    public function main_restaurant() {

        return view('frontend.tr.food-drink.main-restaurant');
    }
    public function fareast() {

        return view('frontend.tr.food-drink.fareast');
    }
    public function alldaydinning() {

        return view('frontend.tr.food-drink.alldaydinning');
    }
    public function french() {

        return view('frontend.tr.food-drink.french');
    }
    public function seaside() {

        return view('frontend.tr.food-drink.seaside');
    }
    public function italian() {

        return view('frontend.tr.food-drink.italian');
    }
    public function sushi_bar() {

        return view('frontend.tr.food-drink.sushibar');
    }
    public function chivas_lounge() {

        return view('frontend.tr.food-drink.chivas');
    }
    public function hennessy_lounge() {

        return view('frontend.tr.food-drink.hennesy');
    }
    public function irish_pub() {

        return view('frontend.tr.food-drink.irish-pub');
    }
    public function lobby_bar() {

        return view('frontend.tr.food-drink.lobby-bar');
    }
    public function flamingo_bar() {

        return view('frontend.tr.food-drink.flamingo-bar');
    }
    public function kitkat_cafe() {

        return view('frontend.tr.food-drink.kitkat');
    }
    public function nespresso_cafe() {

        return view('frontend.tr.food-drink.nespresso');
    }

}
