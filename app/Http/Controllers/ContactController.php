<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show(){
        return view('contact.show');
    }

    public function send( Request $request ){
        // dd( env('MAIL_HOST') );

        $name = $request->name;
        $mail = $request->mail;
        $message = $request->message;

        Mail::to( env('MAIL_FROM_ADDRESS') )
            ->queue(new ContactMail($name, $mail, $message));

        return redirect()->back();
    }
    
}
