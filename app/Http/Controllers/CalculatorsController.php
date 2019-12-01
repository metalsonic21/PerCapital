<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorsController extends Controller
{
    public function index(){
        return view ('main.calculators');
    }
    
    public function indexEN(){
        return view ('en.main.calculators');
    }
}
