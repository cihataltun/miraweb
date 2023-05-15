<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccommodationController extends Controller
{

    public function index() {

        return view('frontend.en.accommdation.accommdation');
    }
    public function standard_rooms() {

        return view('frontend.en.accommdation.standard-rooms');
    }
    public function family_rooms() {

        return view('frontend.en.accommdation.family-rooms');
    }
    public function kingsuit_rooms() {

        return view('frontend.en.accommdation.kingsuit-rooms');
    }
    public function sideview_rooms() {

        return view('frontend.en.accommdation.side-view-rooms');
    }
    public function seaview_rooms() {

        return view('frontend.en.accommdation.sea-view-rooms');
    }
    public function landview_rooms() {

        return view('frontend.en.accommdation.land-view-rooms');
    }

}
