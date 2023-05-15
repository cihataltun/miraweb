<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function edit($user_id)
    {
        $user = User::find($user_id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $user_id)
    {
        $user = User::find($user_id);

        $request->validate([
            'name' => 'required|string|max:200',
            'email' => 'required|string|max:200',
        ]);
        if (User::where('email', $request->email)->exists() && $user->email !== $request->email) {
            return Redirect::back()->withErrors('Bu e-posta ile oluşturulmuş kullanıcı zaten mevcut!');
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();

    return redirect('admin/user-list')->with('message', 'Değişiklikler başarıyla kaydedildi.');
    }

}
