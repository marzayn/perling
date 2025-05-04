<?php

namespace App\Http\Controllers\Persetujuan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UklController extends Controller
{
    public function index()
    {
        return view('persetujuanlingkungan.ukl.index_ukl');
    }

    public function view()
    {
        return view('persetujuanlingkungan.ukl.view_ukl');
    }
}
