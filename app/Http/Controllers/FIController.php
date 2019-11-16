<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FIController extends Controller
{

    public function index(){
        return view ('main.FI');
    }
}
