<?php

namespace App\Http\Controllers\Frontend\English;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {

        return view('frontend.en.contact.contacts');
    }
    
    public function submit(Request $request) {
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message')
        ];
        
        Mail::to('callcenter@portnature.com.tr')->send(new ContactForm($data));
        
        return redirect('contacts')->with('success', 'Your message has been sent. Thank you!');
    }

    public function data_policy() {

        return view('frontend.en.contact.data-policy');
    }
}
