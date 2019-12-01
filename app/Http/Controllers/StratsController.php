<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StratsController extends Controller
{
    public function index(){
        return view ('main.strats');
    }

    public function indexEN(){
        return view ('en.main.strats');
    }
}
