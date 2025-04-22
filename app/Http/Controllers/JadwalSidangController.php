<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalSidangController extends Controller
{
    public function index()
    {
        return view('penjadwalan.jadwal_sidang');
    }

    public function create()
    {
        return view('penjadwalan.create_jadwal');
    }

}
