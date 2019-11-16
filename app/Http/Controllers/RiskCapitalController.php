<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiskCapitalController extends Controller
{
    public function index(){
        return view('main.riskcapital');
    }
}
