<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyAbilitie;

class AboutController extends Controller
{
    public function show(){
        $myAbilities = MyAbilitie::get();
        return view('about.show', compact('myAbilities'));
    }
}
