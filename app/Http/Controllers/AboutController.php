<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view ('main.about');
    }

    public function indexEN(){
        return view ('en.main.about');
    }
}
