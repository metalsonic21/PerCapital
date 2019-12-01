<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        return view ('main.services');
    }

    public function indexEN(){
        return view ('en.main.services'); 
    }
}
