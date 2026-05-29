<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactRequest;
use App\Mail\ContactRequestMail;
use Illuminate\Support\Facades\Mail; 
use App\Mail\UserConfirmationMail;

class Contact_RequestsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'info'  => 'nullable',
        ]);

        ContactRequest::create([
            'name'  => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'info'  => $request->info,
        ]);

        $data = [
            'name'  => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'info'  => $request->info,
        ];

        Mail::to('aouravprasad12345@gmail.com')->send(new ContactRequestMail($data));
        Mail::to($request->email)->send(new UserConfirmationMail($data));

        return back()->with('success', 'Thanks for reaching out! Our team will contact you shortly.');
    }
}