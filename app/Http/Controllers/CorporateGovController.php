<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorporateGovController extends Controller
{
    public function index(){
        return view('main.corporate');
    }
}
