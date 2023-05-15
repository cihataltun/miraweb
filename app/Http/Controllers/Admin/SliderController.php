<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {
        $sliders = Slider::orderBy('id', 'DESC')->paginate(10);
        return view('admin.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'top_title' => 'nullable|string|max:200',
            'title' => 'nullable|string|max:200',
            'sub_title' => 'nullable|string|max:200',
            'image' => 'required|mimes:jpeg,jpg,png,webp',
            'offer' => 'nullable|string',
            'link' => 'nullable|string',
            'status' => 'nullable'
        ]);
        if ($request->image) {
            $imageName = uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/admin/images/sliders/'), $imageName);
        }
        Slider::create([
            'top_title' => $request->top_title,
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'image' => $imageName,
            'offer' => $request->offer,
            'link' => $request->link,
            'status' => $request->status == true ? '1' : '0'
        ]);

        return redirect('admin/slider-list')->with('message', 'Slider başarıyla kaydedildi.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slider_id)
    {
        $slider = Slider::find($slider_id);
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slider_id)
    {
        $slider = Slider::find($slider_id);

        $request->validate([
            'top_title' => 'nullable|string|max:200',
            'title' => 'nullable|string|max:200',
            'sub_title' => 'nullable|string|max:200',
            'image' => 'mimes:jpeg,jpg,png,webp|max:2048',
            'offer' => 'nullable|string',
            'link' => 'nullable|string',
            'status' => 'nullable'
        ]);   

            if ($request->hasFile('image')) {
                $old_image_path = public_path('assets/admin/images/sliders/'.$slider->image);
                $image = $request->file('image');
                $new_slider = uniqid() . '.' . $request->image->extension();
                $image->move(public_path('assets/admin/images/sliders/'), $new_slider);
                $slider->image = $new_slider;
                if (file_exists($old_image_path)) {
                    unlink($old_image_path);
                }
            } 
            else {
                $slider->image = $slider->image;
            }

            $slider->top_title = $request->top_title;
            $slider->title = $request->title;
            $slider->sub_title = $request->sub_title;
            $slider->offer = $request->offer;
            $slider->link = $request->link;
            $slider->status = $request->status == true ? '1' : '0';
            $slider->update();


        return redirect('admin/slider-list')->with('message', 'Değişiklikler başarıyla kaydedildi.');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slider_id)
    {
        $slider = Slider::find($slider_id);
       
        $destination = public_path('assets/admin/images/sliders/'.$slider->image);

        if (file_exists($destination)) {
            unlink($destination);
        }        
        $slider->delete();

        return redirect('admin/slider-list')->with('message', 'Slider başarıyla silinmiştir.');

    }
}
