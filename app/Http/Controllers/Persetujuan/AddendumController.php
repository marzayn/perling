<?php

namespace App\Http\Controllers\Persetujuan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddendumController extends Controller
{
    public function index()
    {
        return view('persetujuanlingkungan.addendum.index_addendum');
    }

    public function view()
    {
        return view('persetujuanlingkungan.addendum.view_addendum');
    }
}
