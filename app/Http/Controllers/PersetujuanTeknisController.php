<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersetujuanTeknisController extends Controller
{

    //Arahan
    public function index_arahan()
    {
        return view('pertek/arahan/index_arahan');
    }

    public function verifikator_arahan()
    {
        return view('pertek/arahan/verifikator_view_arahan');
    }

    public function user_arahan()
    {
        return view('pertek/arahan/user_view_arahan');
    }

    public function create_arahan()
    {
        return view('pertek/arahan/create_arahan');
    }


    // Emisi
    public function index_emisi()
    {
        return view('pertek/emisi/index_emisi');
    }

    public function detail_emisi()
    {
        return view('pertek/emisi/detail_emisi');
    }

     // Air Limbah

    public function index_airlimbah()
    {
        return view('pertek/airlimbah/index_airlimbah');
    }

    public function index_limbahb3()
    {
        return view('pertek/limbahb3/index_limbahb3');
    }

    // SLO

    public function index_slo()
    {
        return view('pertek/slo/index_slo');
    }
    public function detail_slo()
    {
        return view('pertek/slo/detail_slo');
    }
}
