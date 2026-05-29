<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactRequest;
use App\Mail\ContactRequestMail;
use Illuminate\Support\Facades\Mail; 

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

        Mail::to('yourmail@gmail.com')->send(new ContactRequestMail($data));

        return back()->with('success', 'Thanks for reaching out! Our team will contact you shortly.');
    }
}