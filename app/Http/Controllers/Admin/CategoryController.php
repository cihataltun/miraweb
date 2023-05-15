<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function index() {

        $categories = Category::orderBy('id', 'ASC')->paginate(10);

        return view('admin.category.index', compact('categories'));
    }

    public function create() {

        $categories = Category::all();
        return view('admin.category.create', compact('categories'));
    }
    public function store(Request $request) {

        $request->validate([
            'name' => 'required|string|max:200',
            'slug' => 'required|string|max:200',
        ]);

        if (Category::where('name', $request->name)->exists()) {
            return Redirect::back()->withErrors('Bu isimde kategori zaten mevcut!');
        }

        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->slug)
        ]);

        return redirect('admin/category-list')->with('message', 'Kategori başarıyla eklendi.');
    }

    public function edit($category_id) {

        $category = Category::find($category_id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $category_id) {

        $category = Category::find($category_id);

        $request->validate([
            'name' => 'required|string|max:200',
            'slug' => 'required|string|max:200',
        ]);   

            if (Category::where('name', $request->name)->exists() && $category->name !== $request->name) {
                return Redirect::back()->withErrors('Bu isimde kategori zaten mevcut!');
            }

            $category->name = $request->name;
            $category->slug = Str::slug($request->slug);
            $category->update();

        return redirect('admin/category-list')->with('message', 'Değişiklikler başarıyla kaydedildi.');
    }

    public function destroy($category_id) {

        $category = Category::find($category_id);
        
        if($category) {
            $category->delete();
            return redirect('admin/category-list')->with('message', 'Kategori başarıyla silinmiştir.');
        }
        else {
            return redirect('admin/category-list')->with('message', 'Kategori silinemedi.');
        }
    }

}
