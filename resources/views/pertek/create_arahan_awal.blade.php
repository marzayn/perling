@extends('layout.layout')
@php
    $title='Permohonan Surat Arahan Persetujuan Teknis';
    $subTitle = 'Permohonan Surat Arahan Persetujuan Teknis';
    $css = '<link rel="stylesheet" href="' . asset('assets/css/custom.css') . '">';
@endphp

@section('content')
<div class="card h-100 p-0 radius-12 overflow-hidden">
    <div class="card-header bg-light py-3">
        <div class="d-flex align-items-center">
            <iconify-icon icon="bi:file-earmark-medical" class="text-xl text-primary-600 me-2"></iconify-icon>
            <h6 class="mb-0 fw-semibold">Informasi Permohonan</h6>
        </div>
    </div>
    <div class="card-body p-40">
        <form action="#">
            <!-- Section Card: Data Pemohon -->
            <div class="section-card mb-8">
                <div class="section-header active" data-bs-toggle="collapse" href="#dataPemohon" role="button" aria-expanded="true" aria-controls="dataPemohon">
                    <iconify-icon icon="bi:person-fill" class="section-icon"></iconify-icon>
                    <h6 class="text-md mb-0">Data Pemohon</h6>
                    <iconify-icon icon="bi:chevron-down" class="ms-auto dropdown-arrow rotated"></iconify-icon>
                </div>
                <div class="collapse show" id="dataPemohon">
                    <div class="section-content p-3">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Nama Pemohon <span class="text-danger-600">*</span></label>
                                    <input type="text" class="form-control radius-8" id="NamaPemohon" placeholder="Masukkan Nama Pemohon">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Jabatan <span class="text-danger-600">*</span></label>
                                    <input type="text" class="form-control radius-8" id="Jabatan" placeholder="Masukkan Jabatan">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="email" class="form-label fw-semibold text-primary-light text-sm mb-8">Email <span class="text-danger-600">*</span></label>
                                    <input type="email" class="form-control radius-8" id="Email" placeholder="Masukkan email address">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="number" class="form-label fw-semibold text-primary-light text-sm mb-8">Nomor Telepon</label>
                                    <input type="number" class="form-control radius-8" id="Telepon" placeholder="Masukkan Nomor Telepon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section Card: Data Kegiatan -->
            <div class="section-card mb-8">
                <div class="section-header" data-bs-toggle="collapse" href="#dataKegiatan" role="button" aria-expanded="false" aria-controls="dataKegiatan">
                    <iconify-icon icon="bi:building" class="section-icon"></iconify-icon>
                    <h6 class="text-md mb-0">Data Kegiatan</h6>
                    <iconify-icon icon="bi:chevron-down" class="ms-auto dropdown-arrow"></iconify-icon>
                </div>
                <div class="collapse" id="dataKegiatan">
                    <div class="section-content p-3">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Nama Kegiatan <span class="text-danger-600">*</span></label>
                                    <input type="text" class="form-control radius-8" id="NamaKegiatan" placeholder="Masukkan Nama Kegiatan">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Jenis Kegiatan <span class="text-danger-600">*</span></label>
                                    <input type="text" class="form-control radius-8" id="JenisKegiatan" placeholder="Masukkan Jenis Kegiatan">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="mb-20">
                                    <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Alamat Kegiatan <span class="text-danger-600">*</span></label>
                                    <input type="text" class="form-control radius-8" id="AlamatKegiatan" placeholder="Masukkan Alamat Kegiatan">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Section Card: Detail Informasi -->
            <div class="section-card mb-8">
                <div class="section-header" data-bs-toggle="collapse" href="#detailInformasi" role="button" aria-expanded="false" aria-controls="detailInformasi">
                    <iconify-icon icon="bi:info-circle-fill" class="section-icon"></iconify-icon>
                    <h6 class="text-md mb-0">Detail Informasi</h6>
                    <iconify-icon icon="bi:chevron-down" class="ms-auto dropdown-arrow"></iconify-icon>
                </div>
                <div class="collapse" id="detailInformasi">
                    <div class="section-content p-3">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="number" class="form-label fw-semibold text-primary-light text-sm mb-8">Pelaksana Kegiatan</label>
                                    <input type="text" class="form-control radius-8" id="PelaksanaKegiatan" placeholder="Masukkan Pelaksana Kegiatan">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="number" class="form-label fw-semibold text-primary-light text-sm mb-8">Status Pemodalan</label>
                                    <input type="text" class="form-control radius-8" id="StatusPemodalan" placeholder="Masukkan Status Pemodalan">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="Jenis Izin Lingkungan" class="form-label fw-semibold text-primary-light text-sm mb-8">Jenis Izin Lingkungan <span class="text-danger-600">*</span> </label>
                                    <select class="form-control radius-8 form-select" id="JenisIzinLingkungan">
                                        <option selected disabled>Select Jenis Izin Lingkungan</option>
                                        <option>Permohonan Surat Arahan Persetujuan Teknis</option>
                                        <option>Persetujuan Teknis - Pemenuhan Baku Mutu Emisi</option>
                                        <option>Persetujuan Teknis - Pemenuhan Baku Mutu Air Limbah (Pembuangan)</option>
                                        <option>Persetujuan Teknis - Pemenuhan Baku Mutu Air Limbah (Pemanfaatan)</option>
                                        <option>Persetujuan Teknis - Pemenuhan Baku Mutu Limbah B3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="NIB" class="form-label fw-semibold text-primary-light text-sm mb-8">NIB<span class="text-danger-600">*</span></label>
                                    <input type="text" class="form-control radius-8" id="NIB" placeholder="NIB">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="KBLI" class="form-label fw-semibold text-primary-light text-sm mb-8">KBLI <span class="text-danger-600">*</span> </label>
                                    <select class="form-control radius-8 form-select" id="KBLI">
                                        <option selected disabled>Pilih KBLI</option>
                                        <option>10293.A (lndustri Pembekuan Bióta Air Lainnya)</option>
                                        <option>10299 (lndustri Pengolahan dan Pengawetan lainnya untuk Biota Air Lainnya)</option>
                                        <option>49431 (Angkutan Bermotor untuk Barang Umum)</option>
                                        <option>10293 (lndustri Pembekuan Biota Air Lainnya)</option>
                                        <option>46324 (Perdagangan Besar Hasil Olahan Perikanan)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="Operasional Kegiatan" class="form-label fw-semibold text-primary-light text-sm mb-8">Operasional Kegiatan<span class="text-danger-600">*</span></label>
                                    <input type="text" class="form-control radius-8" id="OperasionalKegiatan" placeholder="Operasional Kegiatan">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="Skala" class="form-label fw-semibold text-primary-light text-sm mb-8">Skala<span class="text-danger-600">*</span></label>
                                    <input type="text" class="form-control radius-8" id="OperasionalKegiatan" placeholder="Skala">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="card h-100 p-0 mt-10 radius-12 overflow-hidden">
    <div class="card-header bg-light py-3">
        <div class="d-flex align-items-center">
            <iconify-icon icon="bi:patch-question" class="text-xl text-primary-600 me-2"></iconify-icon>
            <h6 class="mb-0 fw-semibold">Pertanyaan</h6>
        </div>
    </div>
    <div class="card-body p-40">
        <form action="#">
            <!-- Apply the same section pattern for the second card -->
            <div class="section-card mb-8">
                <div class="section-header active" data-bs-toggle="collapse" href="#dataPemohon2" role="button" aria-expanded="true" aria-controls="dataPemohon2">
                    <iconify-icon icon="bi:person-fill" class="section-icon"></iconify-icon>
                    <h6 class="text-md mb-0">Data Pemohon</h6>
                    <iconify-icon icon="bi:chevron-down" class="ms-auto dropdown-arrow rotated"></iconify-icon>
                </div>
                <div class="collapse show" id="dataPemohon2">
                    <div class="section-content p-3">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="KawasanIndustri" class="form-label fw-semibold text-primary-light text-sm mb-8">Apakah berada di lokasi kawasan industri ? <span class="text-danger-600">*</span> </label>
                                    <select class="form-control radius-8 form-select" id="KawasanIndustri">
                                        <option selected disabled>Pilih Jawaban</option>
                                        <option>Ya</option>
                                        <option>Tidak</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="KawasanIndustri" class="form-label fw-semibold text-primary-light text-sm mb-8">Apakah masuk dalam Kawasan Lindung ?<span class="text-danger-600">*</span> </label>
                                    <select class="form-control radius-8 form-select" id="KawasanIndustri">
                                        <option selected disabled>Pilih Jawaban</option>
                                        <option>Ya</option>
                                        <option>Tidak</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="KawasanIndustri" class="form-label fw-semibold text-primary-light text-sm mb-8">Apakah masuk dalam PIPPIB?<span class="text-danger-600">*</span> </label>
                                    <select class="form-control radius-8 form-select" id="KawasanIndustri">
                                        <option selected disabled>Pilih Jawaban</option>
                                        <option>Ya</option>
                                        <option>Tidak</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="KawasanIndustri" class="form-label fw-semibold text-primary-light text-sm mb-8">Apakah melakukan pengumpulan limbah B3?<span class="text-danger-600">*</span> </label>
                                    <select class="form-control radius-8 form-select" id="KawasanIndustri">
                                        <option selected disabled>Pilih Jawaban</option>
                                        <option>Ya</option>
                                        <option>Tidak</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="mb-20">
                                    <label for="pengolahanAirLimbah" class="form-label fw-semibold text-primary-light text-sm mb-8">Apakah melakukan pengolahan air limbah ?<span class="text-danger-600">*</span></label>
                                    <select class="form-control radius-8 form-select" id="pengolahanAirLimbah" onchange="togglePengolahanFields()">
                                        <option selected disabled>Pilih Jawaban</option>
                                        <option value="Ya">Ya</option>
                                        <option value="Tidak">Tidak</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Additional fields that appear when "Ya" is selected -->
                            <div id="pengolahanAdditionalFields" class="col-12 d-none">
                                <div class="card border border-primary-100 rounded-3 p-3 mb-20 animate__animated animate__fadeIn">
                                    <div class="row">
                                        <div class="col-sm-12 mb-3">
                                            <div class="mb-20">
                                                <label for="Skala" class="form-label fw-semibold text-primary-light text-sm mb-8">Jumlah IPAL yang telah beroperasi?<span class="text-danger-600">*</span></label>
                                                <input type="text" class="form-control radius-8" id="OperasionalKegiatan" placeholder="berapa Unit">
                                            </div>
                                            <div class="mb-20">
                                                <div class="d-flex align-items-center">
                                                <label for="catatanPengolahan" class="d-flex align-items-center gap-1 form-label fw-semibold text-primary-light text-sm mb-8">
                                                    <iconify-icon icon="bi:pencil-square" class="me-1"></iconify-icon>
                                                    Keterangan</span>
                                                </label>
                                                </div>
                                                <textarea class="form-control radius-8" id="catatanPengolahan" rows="3" placeholder="Masukkan catatan pengolahan air limbah"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="mb-20">
                                                <label for="jenisPengolahan" class="form-label fw-semibold text-primary-light text-sm mb-8">
                                                    Apakah sebelumnya mempunyai izin IPAL? <span class="text-danger-600">*</span>
                                                </label>
                                                <select class="form-control radius-8 form-select" id="jenisPengolahan">
                                                    <option selected disabled>Pilih Jawaban</option>
                                                    <option>Ya</option>
                                                    <option>Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="mb-20">
                                    <label for="emisiAirLimbah" class="form-label fw-semibold text-primary-light text-sm mb-8">Apakah menghasilkan emisi ?<span class="text-danger-600">*</span></label>
                                    <select class="form-control radius-8 form-select" id="emisiAirLimbah" onchange="toggleEmisiFields()">
                                        <option selected disabled>Pilih Jawaban</option>
                                        <option value="Ya">Ya</option>
                                        <option value="Tidak">Tidak</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Additional fields that appear when "Ya" is selected -->
                            <div id="emisiAdditionalFields" class="col-12 d-none">
                                <div class="card border border-primary-100 rounded-3 p-3 mb-20 animate__animated animate__fadeIn">
                                    <div class="row">
                                        <div class="col-sm-12 mb-3">
                                            <div class="mb-20">
                                                <div class="d-flex align-items-center">
                                                <label for="catatanPengolahan" class="d-flex align-items-center gap-1 form-label fw-semibold text-primary-light text-sm mb-8">
                                                    <iconify-icon icon="bi:pencil-square" class="me-1"></iconify-icon>
                                                    Keterangan</span>
                                                </label>
                                                </div>
                                                <textarea class="form-control radius-8" id="catatanPengolahan" rows="3" placeholder="Masukkan catatan emisi"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="mb-20">
                                    <label for="hasilLimbahB3" class="form-label fw-semibold text-primary-light text-sm mb-8">Apakah menghasilkan Limbah B3 ?<span class="text-danger-600">*</span></label>
                                    <select class="form-control radius-8 form-select" id="hasilLimbahB3" onchange="toggleLimbahFields()">
                                        <option selected disabled>Pilih Jawaban</option>
                                        <option value="Ya">Ya</option>
                                        <option value="Tidak">Tidak</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Additional fields that appear when "Ya" is selected -->
                            <div id="limbahAdditionalFields" class="col-12 d-none">
                                <div class="card border border-primary-100 rounded-3 p-3 mb-20 animate__animated animate__fadeIn">
                                    <div class="row">
                                        <div class="col-sm-12 mb-3">
                                            <div class="mb-20">
                                                <div class="d-flex align-items-center">
                                                <label for="catatanPengolahan" class="d-flex align-items-center gap-1 form-label fw-semibold text-primary-light text-sm mb-8">
                                                    <iconify-icon icon="bi:pencil-square" class="me-1"></iconify-icon>
                                                    Keterangan</span>
                                                </label>
                                                </div>
                                                <textarea class="form-control radius-8" id="catatanPengolahan" rows="3" placeholder="Masukkan catatan Limbah B3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-center gap-3 mt-24">
                {{-- <button type="reset" class="border border-danger-600 bg-hover-danger-200 text-danger-600 text-md px-40 py-11 radius-8">
                    Reset
                </button> --}}
                <a href="{{ route('pertek.create_arahan') }}" class="btn btn-primary border border-primary-600 text-md px-24 py-12 radius-8">
                    Kirim
                </a>
            </div>
        </form>
    </div>
</div>


<script src="{{ asset('assets/js/dashboard/script_dropdown.js') }}"></script>

    function toggleLimbahFields() {
        const selection = document.getElementById('hasilLimbahB3').value;
        const additionalFields = document.getElementById('limbahAdditionalFields');

        if (selection === 'Ya') {
            additionalFields.classList.remove('d-none');
            additionalFields.classList.add('d-block');
        } else {
            additionalFields.classList.remove('d-block');
            additionalFields.classList.add('d-none');
        }
    }
    </script>

@endsection
