<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index()
    {
        //index route
        return view('chirps');
    }
}
