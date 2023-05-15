<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ImageGallery;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function index() {

        return view('admin.gallery.dropzone');
    }

    public function dropzoneStore(Request $request) {

     $image = $request->file('file');

     $imageName = $image->getClientOriginalName();

     $image->move(public_path('gallery'), $imageName);

     return response()->json(['success' => $imageName]);
    }

    public function fetch()
    {
     $images = File::allFiles(public_path('gallery'));
     $output = '<div class="row">';
     foreach($images as $image)
     {
      $output .= '
      <div class="col-md-2" style="margin-bottom:16px;" align="center">
                <img src="'.asset('gallery/' . $image->getFilename()).'" class="img-thumbnail" width="175" height="175" style="height:175px;" />
                <button type="button" class="btn btn-link remove_image" id="'.$image->getFilename().'">Remove</button>
            </div>
      ';
     }
     $output .= '</div>';
     echo $output;
    }

    public function delete(Request $request)
    {
     if($request->get('name'))
     {
      File::delete(public_path('gallery/' . $request->get('name')));
     }
    }
}
