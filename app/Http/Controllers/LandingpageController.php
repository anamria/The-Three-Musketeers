<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index(Request $request){

        return view('landingpage');
    }
}
