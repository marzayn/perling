<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerizinanLingkunganController extends Controller
{
    public function index()
    {
        return view('perizinan/index');
    }
}
