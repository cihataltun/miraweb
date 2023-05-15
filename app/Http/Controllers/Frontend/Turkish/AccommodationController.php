<?php

namespace App\Http\Controllers\Frontend\Turkish;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    public function index() {

        return view('frontend.tr.accommdation.accommdation');
    }
    public function standard_rooms() {

        return view('frontend.tr.accommdation.standard-rooms');
    }
    public function family_rooms() {

        return view('frontend.tr.accommdation.family-rooms');
    }
    public function kingsuit_rooms() {

        return view('frontend.tr.accommdation.kingsuit-rooms');
    }
    public function sideview_rooms() {

        return view('frontend.tr.accommdation.side-view-rooms');
    }
    public function seaview_rooms() {

        return view('frontend.tr.accommdation.sea-view-rooms');
    }
    public function landview_rooms() {

        return view('frontend.tr.accommdation.land-view-rooms');
    }

}
