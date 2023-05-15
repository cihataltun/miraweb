<?php

namespace App\Http\Controllers\Admin;

use App\Models\Offer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::orderBy('id', 'DESC')->paginate(10);
        return view('admin.offer.index', compact('offers'));
    }

    public function create()
    {
        $offers = Offer::all();
        return view('admin.offer.create', compact('offers'));
    }

    public function store(Request $request) {

        $request->validate([
            'top_title' => 'required|string|max:200',
            'title' => 'required|string|max:200',
            'sub_title' => 'required|string|max:200',
            'bottom_title' => 'required|string|max:200',
            'slider_images.*' => 'required|image|mimes:webp,jpeg,jpg,png',
            'seo_description' => 'required',
            'meta_title' => 'required|string',
            'meta_description' => 'nullable|string',
            'status' => 'nullable'
        ]);        
        if ($request->hasFile('slider_images')) {
            $images = [];
            foreach ($request->file('slider_images') as $image) {
                $imageName = uniqid() . '.' . $image->extension();
                $image->move(public_path('assets/admin/images/offers/'), $imageName);
                $images[] = $imageName;
            }

            Offer::create([
                'top_title' => $request->top_title,
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'bottom_title' => $request->bottom_title,
                'slider_images' => json_encode($images),
                'seo_description' => $request->seo_description,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'created_by' => Auth::user()->name,
                'status' => $request->status == true ? '1' : '0'
            ]);
        }
        return redirect('admin/offer-list')->with('message', 'Teklif başarıyla oluşturuldu.');

    }

    public function edit($offer_id)
    {
        
        $offer = Offer::find($offer_id);
        return view('admin.offer.edit', compact('offer'));
    }



}
