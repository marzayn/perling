<?php

namespace App\Http\Controllers\Persetujuan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RklController extends Controller
{
    public function index()
    {
        return view('persetujuanlingkungan.rkl.index_rkl');
    }

    public function view()
    {
        return view('persetujuanlingkungan.rkl.view_rkl');
    }
}
