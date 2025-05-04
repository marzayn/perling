<?php

namespace App\Http\Controllers\Persetujuan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KerangkaController extends Controller
{
    public function index()
    {
        return view('persetujuanlingkungan.kerangka_acuan.index_kerangka_acuan');
    }

    public function create()
    {
        return view('persetujuanlingkungan.kerangka_acuan.create_kerangka_acuan');
    }
}
