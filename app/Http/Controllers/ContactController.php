<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function contact(){
        return view('client.contact_us');
    }

    public function sentEmail(Request $request){

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        Mail::to('farhanahmedcse@gmail.com')->send(new ContactMail($details));
        return back()->with('status', 'Your message sent has benn successfully');
    }
}
