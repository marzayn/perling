<?php

namespace App\Http\Controllers\Persetujuan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AmdalController extends Controller
{
    public function index()
    {
        return view('persetujuanlingkungan.amdal.index_amdal');
    }

    public function view()
    {
        return view('persetujuanlingkungan.amdal.view_amdal');
    }
}
