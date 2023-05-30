<?php

namespace App\Http\Controllers\Admin;

use App\Models\Offer;
use Illuminate\Support\Str;
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
            'bottom_desc_left' => 'required|string|max:200',
            'bottom_desc_center' => 'required|string|max:200',
            'bottom_desc_right' => 'required|string|max:200',
            'slider_images.*' => 'required|image|mimes:webp,jpeg,jpg,png',
            'slider_images_mobile.*' => 'required|image|mimes:webp,jpeg,jpg,png',
            'opportunity_image' => 'required|mimes:webp,jpeg,jpg,png',
            'opportunity_title' => 'required|string|max:200',
            'opportunity_slug' => 'required|string|max:200',
            'seo_description' => 'required',
            'meta_title' => 'required|string',
            'meta_description' => 'nullable|string',
            'status' => 'nullable'
        ]);

        function saveSliderImages($request)
        {
            $sliderImages = [];
        
            if ($request->hasFile('slider_images')) {
                foreach ($request->file('slider_images') as $image) {
                    $imageName = uniqid() . '.' . $image->extension();
                    $image->move(public_path('assets/admin/images/offers/'), $imageName);
                    $sliderImages['slider_images'][] = $imageName;
                }
            }
        
            if ($request->hasFile('slider_images_mobile')) {
                foreach ($request->file('slider_images_mobile') as $image) {
                    $imageName = uniqid() . '.' . $image->extension();
                    $image->move(public_path('assets/admin/images/offers/'), $imageName);
                    $sliderImages['slider_images_mobile'][] = $imageName;
                }
            }
        
            if ($request->hasFile('opportunity_image')) {
                $image = $request->file('opportunity_image');
                $imageName = uniqid() . '.' . $image->extension();
                $image->move(public_path('assets/admin/images/offers/'), $imageName);
                $opportunityImage = $imageName;
            }
        
            // JSON dosya yollarını düzeltme
            if (!empty($sliderImages)) {
                $sliderImages = json_encode($sliderImages);
                // Eğik çizgileri düzeltme
                // $sliderImages = str_replace('\/', '/', $sliderImages);
            }

            $data = [
                'top_title' => $request->top_title,
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'bottom_desc_left' => $request->bottom_desc_left,
                'bottom_desc_center' => $request->bottom_desc_center,
                'bottom_desc_right' => $request->bottom_desc_right,
                'opportunity_title' => $request->opportunity_title,
                'opportunity_slug' => $request->opportunity_slug,
                'seo_description' => $request->seo_description,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'created_by' => Auth::user()->name,
                'status' => $request->status == true ? '1' : '0'
            ];
        
            if (!empty($sliderImages)) {
                $sliderImages = json_decode($sliderImages, true);
                $data['slider_images'] = json_encode($sliderImages['slider_images']);
                $data['slider_images_mobile'] = json_encode($sliderImages['slider_images_mobile']);
            }
            
            if (!is_null($opportunityImage)) {
                $data['opportunity_image'] = $opportunityImage;
            }
        
            Offer::create($data);
        }        
        saveSliderImages($request, 'slider_images');

        return redirect('admin/offer-list')->with('message', 'Teklif başarıyla oluşturuldu.');

    }

    public function edit($offer_id)
    {        
        $offer = Offer::find($offer_id);
        return view('admin.offer.edit', compact('offer'));
    }

    public function update(Request $request, $offer_id)
    {

        $request->validate([
            'top_title' => 'required|string|max:200',
            'title' => 'required|string|max:200',
            'sub_title' => 'required|string|max:200',
            'bottom_desc_left' => 'required|string|max:200',
            'bottom_desc_center' => 'required|string|max:200',
            'bottom_desc_right' => 'required|string|max:200',
            'slider_images.*' => 'required|image|mimes:webp,jpeg,jpg,png',
            'slider_images_mobile.*' => 'required|image|mimes:webp,jpeg,jpg,png',
            'opportunity_image' => 'mimes:webp,jpeg,jpg,png',
            'opportunity_title' => 'required|string|max:200',
            'opportunity_slug' => 'required|string|max:200',
            'seo_description' => 'required',
            'meta_title' => 'required|string',
            'meta_description' => 'nullable|string',
            'status' => 'nullable'
        ]);   
        
        function updateSliderImages($request, $offerId)
        {
            $offer = Offer::findOrFail($offerId); // Güncellenmek istenen teklifi bulun
        
            // Mevcut dosya yollarını al
            $sliderImages = json_decode($offer->slider_images, true);
            $sliderImagesMobile = json_decode($offer->slider_images_mobile, true);
        
            // Eski dosya yollarını sil
            if (!empty($sliderImages['slider_images'])) {
                foreach ($sliderImages['slider_images'] as $image) {
                    $imagePath = public_path('assets/admin/images/offers/') . $image;
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                }
            }
        
            if (!empty($sliderImagesMobile['slider_images_mobile'])) {
                foreach ($sliderImagesMobile['slider_images_mobile'] as $image) {
                    $imagePath = public_path('assets/admin/images/offers/') . $image;
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                }
            }
        
            // Eski opportunity_image dosyasını sil
            if (!empty($offer->opportunity_image)) {
                $opportunityImagePath = public_path('assets/admin/images/offers/') . $offer->opportunity_image;
                if (file_exists($opportunityImagePath)) {
                    unlink($opportunityImagePath);
                }
            }
        
            // Yeni dosya yollarını ekle
            $newSliderImages = [];
            $newSliderImagesMobile = [];
            $newOpportunityImage = null;
        
            if ($request->hasFile('slider_images')) {
                foreach ($request->file('slider_images') as $image) {
                    $imageName = uniqid() . '.' . $image->extension();
                    $image->move(public_path('assets/admin/images/offers/'), $imageName);
                    $newSliderImages[] = $imageName;
                }
            }
        
            if ($request->hasFile('slider_images_mobile')) {
                foreach ($request->file('slider_images_mobile') as $image) {
                    $imageName = uniqid() . '.' . $image->extension();
                    $image->move(public_path('assets/admin/images/offers/'), $imageName);
                    $newSliderImagesMobile[] = $imageName;
                }
            }
        
            if ($request->hasFile('opportunity_image')) {
                $image = $request->file('opportunity_image');
                $imageName = uniqid() . '.' . $image->extension();
                $image->move(public_path('assets/admin/images/offers/'), $imageName);
                $newOpportunityImage = $imageName;
            }        
            $data = [
                'top_title' => $request->top_title,
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'bottom_desc_left' => $request->bottom_desc_left,
                'bottom_desc_center' => $request->bottom_desc_center,
                'bottom_desc_right' => $request->bottom_desc_right,
                'opportunity_title' => $request->opportunity_title,
                'opportunity_slug' => $request->opportunity_slug,
                'seo_description' => $request->seo_description,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'created_by' => Auth::user()->name,
                'status' => $request->status == true ? '1' : '0',
                'slider_images' => json_encode($newSliderImages),
                'slider_images_mobile' => json_encode($newSliderImagesMobile),
                'opportunity_image' => $newOpportunityImage
            ];
        
            $offer->update($data); // Teklifi güncelle
        }

        return redirect('admin/offer-list')->with('message', 'Değişiklikler başarıyla kaydedildi.');
    }

}
