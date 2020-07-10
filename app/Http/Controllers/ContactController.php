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
        Mail::to('cristian.guzman.contacto@gmail.com')
            ->queue(new ContactMail);

        return redirect()->back();
    }
    
}
