<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function sendEmail(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
            'state' => $request->state,
            'message' => $request->message,
        );

//
//        Mail::to('gregross.dev@gmail.com')->send(new ContactMail($data));
        Mail::to('info@flaniganlegal.com')->send(new ContactMail($data));
        return back()->with('message_sent', 'Your message has been sent successfully!');
    }
}
