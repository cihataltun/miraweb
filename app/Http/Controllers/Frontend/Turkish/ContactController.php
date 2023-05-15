<?php

namespace App\Http\Controllers\Frontend\Turkish;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {

        return view('frontend.tr.contact.contacts');
    }
    
    public function submit(Request $request) {
        
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message')
        ];
        
        Mail::to('callcenter@portnature.com.tr')->send(new ContactForm($data));
        
        return redirect('iletisim')->with('success', 'Mesajınız tarafımıza başarıyla iletilmiştir. Teşekkürler!');
    }

    public function data_policy() {

        return view('frontend.tr.contact.data-policy');
    }

}
