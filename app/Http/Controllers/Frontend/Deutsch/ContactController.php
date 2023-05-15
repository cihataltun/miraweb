<?php

namespace App\Http\Controllers\Frontend\Deutsch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {

        return view('frontend.de.contact.contacts');
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
        
        return redirect('kontakte')->with('success', 'Ihre Nachricht wurde gesendet. Danke!');
    }

    public function data_policy() {

        return view('frontend.de.contact.data-policy');
    }
}
