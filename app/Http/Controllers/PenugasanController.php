<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenugasanController extends Controller
{
    public function index()
    {
        return view('penugasan/index');
    }
}
