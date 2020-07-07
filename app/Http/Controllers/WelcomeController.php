<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $projects = Project::get();
        return view('welcome', compact('projects'));
    }
}
