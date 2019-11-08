<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MutualController extends Controller
{
    public function index(){
        return view ('main.mutual');
    }
}
