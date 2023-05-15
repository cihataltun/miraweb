<?php

namespace App\Http\Controllers\Frontend\Russian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodDrinkController extends Controller
{
    public function index() {

        return view('frontend.ru.food-drink.food-drink');
    }
    public function alacarte_restaurants() {

        return view('frontend.ru.food-drink.alacarte-restaurants');
    }
    public function bar_cafe() {

        return view('frontend.ru.food-drink.bar-cafe');
    }
    public function davidoff_cafe() {

        return view('frontend.ru.food-drink.davidoff-cafe');
    }
    public function main_restaurant() {

        return view('frontend.ru.food-drink.main-restaurant');
    }
    public function fareast() {

        return view('frontend.ru.food-drink.fareast');
    }
    public function alldaydinning() {

        return view('frontend.ru.food-drink.alldaydinning');
    }
    public function french() {

        return view('frontend.ru.food-drink.french');
    }
    public function seaside() {

        return view('frontend.ru.food-drink.seaside');
    }
    public function italian() {

        return view('frontend.ru.food-drink.italian');
    }
    public function sushi_bar() {

        return view('frontend.ru.food-drink.sushibar');
    }
    public function chivas_lounge() {

        return view('frontend.ru.food-drink.chivas');
    }
    public function hennessy_lounge() {

        return view('frontend.ru.food-drink.hennesy');
    }
    public function irish_pub() {

        return view('frontend.ru.food-drink.irish-pub');
    }
    public function lobby_bar() {

        return view('frontend.ru.food-drink.lobby-bar');
    }
    public function flamingo_bar() {

        return view('frontend.ru.food-drink.flamingo-bar');
    }
    public function kitkat_cafe() {

        return view('frontend.ru.food-drink.kitkat');
    }
    public function nespresso_cafe() {

        return view('frontend.ru.food-drink.nespresso');
    }
}
