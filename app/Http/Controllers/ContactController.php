<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $contact = ContactInfo::first();
        return view('contact', compact('contact'));
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::raw("Name: {$request->name}\nEmail: {$request->email}\nMessage: {$request->message}", function ($mail) {
            $mail->to('admin@tablenest.com')
                 ->subject('New Contact Form Message - TableNest');
        });

        return back()->with('success', 'Your message has been sent!');
    }
}