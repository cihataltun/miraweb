<?php

namespace App\Http\Controllers\Frontend\Russian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    public function index() {

        return view('frontend.ru.accommdation.accommdation');
    }
    public function standard_rooms() {

        return view('frontend.ru.accommdation.standard-rooms');
    }
    public function family_rooms() {

        return view('frontend.ru.accommdation.family-rooms');
    }
    public function kingsuit_rooms() {

        return view('frontend.ru.accommdation.kingsuit-rooms');
    }
    public function sideview_rooms() {

        return view('frontend.ru.accommdation.side-view-rooms');
    }
    public function seaview_rooms() {

        return view('frontend.ru.accommdation.sea-view-rooms');
    }
    public function landview_rooms() {

        return view('frontend.ru.accommdation.land-view-rooms');
    }
}
