<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactRequest2;
use App\Mail\AdminContactMail;
use App\Mail\UserContactMail;
use Illuminate\Support\Facades\Mail;

class ContactRequest2Controller extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'firstname'        => 'required',
            'lastname'    => 'required',
            'email'       => 'required|email',
            'phone'       => 'required',
            'Subject'          => 'required',
            'message'          => 'required',
        ]);

        $contact = ContactRequest2::create([
            'first_name'       => $request->firstname,
            'last_name'        => $request->lastname,
            'email'            => $request->email,
            'phone'            => $request->phone,
            'subject'          => $request->Subject,
            'preferred_office' => $request->PreferredOffice,
            'message'          => $request->message,
        ]);

        // Send mail to admin
        Mail::to('aouravprasad12345@gmail.com')->send(new AdminContactMail($contact));

        // Send confirmation mail to user
        Mail::to($contact->email)->send(new UserContactMail($contact));

        return back()->with('success', 'Message sent successfully.');
    }
}