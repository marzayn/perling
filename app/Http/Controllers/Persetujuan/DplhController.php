<?php

namespace App\Http\Controllers\Persetujuan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DplhController extends Controller
{
    public function index()
    {
        return view('persetujuanlingkungan.dplh.index_dplh');
    }

    public function view()
    {
        return view('persetujuanlingkungan.dplh.view_dplh');
    }
}
