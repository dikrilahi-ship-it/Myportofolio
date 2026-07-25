<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([

            'name'=>'required',

            'email'=>'required|email',

            'message'=>'required',

        ]);

        Mail::to('dikrilahi@gmail.com')
            ->send(new ContactMail($request->all()));

        return back()->with('success','Pesan berhasil dikirim.');
    }
}