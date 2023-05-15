<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index() {

        $posts = Post::orderBy('id', 'ASC')->paginate(10);
        return view('admin.dashboard', compact('posts'));
    }
}
