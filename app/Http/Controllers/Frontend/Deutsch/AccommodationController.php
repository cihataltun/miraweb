<?php

namespace App\Http\Controllers\Frontend\Deutsch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    public function index() {

        return view('frontend.de.accommdation.accommdation');
    }
    public function standard_rooms() {

        return view('frontend.de.accommdation.standard-rooms');
    }
    public function family_rooms() {

        return view('frontend.de.accommdation.family-rooms');
    }
    public function kingsuit_rooms() {

        return view('frontend.de.accommdation.kingsuit-rooms');
    }
    public function sideview_rooms() {

        return view('frontend.de.accommdation.side-view-rooms');
    }
    public function seaview_rooms() {

        return view('frontend.de.accommdation.sea-view-rooms');
    }
    public function landview_rooms() {

        return view('frontend.de.accommdation.land-view-rooms');
    }
}
