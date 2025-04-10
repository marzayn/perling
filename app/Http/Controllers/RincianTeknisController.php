<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RincianTeknisController extends Controller
{
    public function index_arahan()
    {
        return view('rintek.index_arahan');
    }

    public function create_arahan()
    {
        return view('rintek.create_arahan');
    }

    public function verifikator_arahan()
    {
        return view('rintek/verifikator_view_arahan');
    }
}
