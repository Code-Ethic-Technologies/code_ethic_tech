<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::to('contact@codeethictech.com')->send(new ContactMail($data));

        return response()->json(['message' => 'Your message has been sent successfully!']);
        //return back()->with('success', 'Your message has been sent successfully!');
        //return redirect('/contact')->with('success', 'Your message has been sent successfully!');
    }
}