<?php

namespace App\Http\Controllers;

// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;

class SuratArahanController extends Controller
{
    public function show()
    {
        // $data = [
        //     'tanggal_surat' => '14 Januari 2025',
        //     'kepada' => 'Direktur Utama PT. Gedung Bank Exim',
        //     'nomor_surat' => 'e-0025/LH.01.03',
        //     'isi_surat' => 'Menindaklanjuti surat Saudara Nomor 1620/DIR-GBE/XI/2024...',
        // ];

        return view('pertek.subkel.surat');
    }


    public function save(Request $request)
    {
        // Ambil data dari form
        $data = $request->all();

        return view('pertek.subkel.surat', compact('data'));
    }


    public function exportPDF(Request $request)
    {
        $data = $request->all();
        $pdf = FacadePdf::loadView('pertek.subkel.surat_pdf', compact('data'));
        return $pdf->download('surat.pdf');
    }
}
