<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactRequest;

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

        return back()->with('success', 'Thanks for reaching out! Our team will contact you shortly.');
    }
}