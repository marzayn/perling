@extends('layout.layout')

@section('content')
<div class="container">
    <div class="surat-container">
        <!-- Kop Surat -->
        <div class="kop-surat">
            <img src="{{ asset('assets/images/kop.jpg') }}" alt="Logo Kop Surat">
        </div>

        <!-- Form Input Surat -->
        <form action="{{ route('surat.save') }}" method="POST">
            @csrf
            <div class="surat-details">
                <div class="form-row">
                    <div class="form-group">
                        <label for="nomor_surat">Nomor</label>
                        <input type="text" id="nomor_surat" name="nomor_surat" value="{{ old('nomor_surat', 'e-0025/LH.01.03') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="sifat">Sifat</label>
                        <input type="text" id="sifat" name="sifat" value="{{ old('sifat', 'Penting') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="lampiran">Lampiran</label>
                        <input type="text" id="lampiran" name="lampiran" value="{{ old('lampiran', '-') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="hal">Hal</label>
                        <input type="text" id="hal" name="hal" value="{{ old('hal', 'Tanggapan Permohonan Arahan Persetujuan Teknis') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="tanggal_surat">Tanggal</label>
                        <input type="date" id="tanggal_surat" name="tanggal_surat" value="{{ old('tanggal_surat', '2025-01-14') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="kepada">Kepada</label>
                        <input type="text" id="kepada" name="kepada" value="{{ old('kepada', 'Yth. Direktur Utama PT. Gedung Bank Exim') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="isi_surat">Isi Surat</label>
                        <textarea id="isi_surat" name="isi_surat" rows="15">{{ old('isi_surat', 'Menindaklanjuti surat Saudara Nomor 1620/DIR-GBE/XI/2024 tanggal 21 November 2024 perihal Permohonan Surat Arahan Persetujuan Teknis IPAL, bersama ini, disampaikan beberapa hal sebagai berikut:

1. Informasi dalam surat Saudara pada intinya menjelaskan sebagai berikut:
    a. PT. Gedung Bank Exim memiliki Jenis Kegiatan Pengelolaan Gedung (Perkantoran) yang berlokasi di Plaza Mandiri Lantai Basement 1, Jl. Jend. Gatot Soebroto Kav. 36-38, Jakarta;
    b. Berdasarkan data Perizinan Berusaha Berbasis Resiko PT. Gedung Bank Exim dengan NIB : 0220206960026 dan KBLI Pengelolaan Fasilitas Real Estate Yang Dimiliki atau Disewa (68111) adalah perusahaan dengan status penanaman modal PMDN yang beroperasi sejak tahun 1996;
    c. PT. Gedung Bank Exim memiliki luas tanah 42.559 m², luas lantai bangunan 142.849,18 m², luas bangunan 8.293 m²;
    d. PT. Gedung Bank Exim telah memiliki 1 (satu) unit Instalasi Pengolahan Air Limbah (IPAL) dengan kapasitas 536 m³/hari dimana air limbah olahan IPAL dibuang ke badan air permukaan;
    e. Memiliki Izin Pembuangan Air Limbah (IPAL) yang diterbitkan oleh Kepala Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu dengan nomor 193/31.74.07.1006.06.02.P.1.a/I-1.774.15/2021 tanggal 8 Juni 2021 yang berlaku 1 (satu) tahun terhitung sejak tanggal ditetapkan atau sampai dengan berlakunya peraturan turunan peraturan pemerintah No. 22 Tahun 2021;
    f. Memiliki Rekomendasi ANDAL, RKL/RPL Pembangunan Gedung Perkantoran Plaza Exim (PT. Gedung Bank Exim) No. 240/-1.777.6 tanggal 31 Desember 1996 yang dikeluarkan oleh Komisi AMDAL Daerah Khusus Ibukota Jakarta;
    g. Berkenaan dengan hal tersebut, Saudara memohon arahan terkait penyusunan Persetujuan Teknis.') }}</textarea>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn">Simpan Surat</button>
                </div>
            </div>
        </form>

        @if(isset($data))
        <div class="preview-section">
            <h3>Preview Surat:</h3>
            <div class="kop-surat">
                <img src="{{ asset('assets/images/kop.jpg') }}" alt="Logo Kop Surat">
            </div>

            <div class="surat-preview">
                <table class="details-table">
                    <tr>
                        <td class="label">Nomor</td>
                        <td class="colon">:</td>
                        <td class="value">{{ $data['nomor_surat'] }}</td>
                    </tr>
                    <tr>
                        <td class="label">Sifat</td>
                        <td class="colon">:</td>
                        <td class="value">{{ $data['sifat'] }}</td>
                    </tr>
                    <tr>
                        <td class="label">Lampiran</td>
                        <td class="colon">:</td>
                        <td class="value">{{ $data['lampiran'] }}</td>
                    </tr>
                    <tr>
                        <td class="label">Hal</td>
                        <td class="colon">:</td>
                        <td class="value">{{ $data['hal'] }}</td>
                    </tr>
                    <tr>
                        <td class="label">Tanggal</td>
                        <td class="colon">:</td>
                        <td class="value">{{ date('d F Y', strtotime($data['tanggal_surat'])) }}</td>
                    </tr>
                    <tr>
                        <td class="label">Kepada</td>
                        <td class="colon">:</td>
                        <td class="value">{{ $data['kepada'] }}</td>
                    </tr>
                </table>

                <div class="content-surat">
                    {!! nl2br(e($data['isi_surat'])) !!}
                </div>

                <div class="ttd-section">
                    <p>Jakarta, {{ date('d F Y', strtotime($data['tanggal_surat'])) }}</p>
                    <p>Kepala Dinas Lingkungan Hidup</p>
                    <br><br><br>
                    <p><u>Nama Pejabat</u></p>
                    <p>NIP. 19700101 199001 1 001</p>
                </div>
            </div>

            <div class="form-actions">
                <form action="{{ route('surat.exportPDF') }}" method="GET">
                    <button type="submit" class="btn">Export PDF</button>
                </form>
            </div>
        </div>
        @endif
    </div>
</div>

<style>
    .container {
        max-width: 100%;
        padding: 20px;
    }

    .surat-container {
        font-family: 'Times New Roman', Times, serif;
        font-size: 12pt;
        line-height: 1.5;
        width: 210mm;
        height: auto;
        min-height: 297mm;
        padding: 20mm;
        background-color: white;
        margin: 0 auto;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        position: relative;
    }

    .kop-surat {
        text-align: center;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    .kop-surat img {
        width: 100%;
    }

    .surat-details {
        width: 100%;
    }

    .form-row {
        margin-bottom: 15px;
    }

    .form-group {
        position: relative;
    }

    .form-group label {
        display: inline-block;
        width: 120px;
        margin-right: 10px;
    }

    input, textarea {
        width: calc(100% - 135px);
        border: 1px solid #000;
        padding: 5px;
        background-color: white;
        font-family: 'Times New Roman', Times, serif;
        font-size: 12pt;
    }

    textarea {
        height: 200px;
    }

    .content-surat {
        margin-top: 20px;
        text-align: justify;
    }

    .form-actions {
        margin-top: 20px;
        text-align: right;
    }

    .btn {
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        cursor: pointer;
    }

    .preview-section {
        margin-top: 30px;
        border-top: 1px solid #ddd;
        padding-top: 20px;
    }

    .preview-section h3 {
        margin-bottom: 20px;
    }

    .details-table {
        width: 100%;
        border-collapse: collapse;
    }

    .details-table td {
        padding: 5px 0;
    }

    .details-table .label {
        width: 120px;
    }

    .details-table .colon {
        width: 20px;
        text-align: center;
    }

    .ttd-section {
        margin-top: 30px;
        text-align: right;
        width: 40%;
        float: right;
    }
</style>
@endsection
