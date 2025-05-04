<?php

namespace App\Http\Controllers\Persetujuan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DelhController extends Controller
{
    public function index()
    {
        return view('persetujuanlingkungan.delh.index_delh');
    }

    public function view()
    {
        return view('persetujuanlingkungan.delh.view_delh');
    }
}
