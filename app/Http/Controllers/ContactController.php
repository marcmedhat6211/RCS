<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{
    public function contact() {
        return view('contact');
    }

    public function sendEmail(Request $request) {

        $this->validate($request, [
            'name' => 'required|min:2|max:50',
            'email' => 'required|email',
            'business' => 'required',
            'message' => 'required'
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'business' => $request->business,
            'message' => $request->message
        ];

        Mail::to('marcmedhat6211@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent', 'Your message has been sent successfully!');
    }
}
