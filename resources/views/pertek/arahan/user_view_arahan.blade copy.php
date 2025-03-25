@extends('layout.layout')
@php
    $title='Permohonan Surat Arahan Persetujuan Teknis';
    $subTitle = 'Permohonan Surat Arahan Persetujuan Teknis';
    $script = ' <script>
        // =============================== Wizard Step Js Start ================================
        $(document).ready(function() {
            // click on next button
            $(".form-wizard-next-btn").on("click", function() {
                var parentFieldset = $(this).parents(".wizard-fieldset");
                var currentActiveStep = $(this).parents(".form-wizard").find(".form-wizard-list .active");
                var next = $(this);
                var nextWizardStep = true;
                parentFieldset.find(".wizard-required").each(function(){
                    var thisValue = $(this).val();

                    if( thisValue == "") {
                        $(this).siblings(".wizard-form-error").show();
                        nextWizardStep = false;
                    }
                    else {
                        $(this).siblings(".wizard-form-error").hide();
                    }
                });
                if( nextWizardStep) {
                    next.parents(".wizard-fieldset").removeClass("show","400");
                    currentActiveStep.removeClass("active").addClass("activated").next().addClass("active","400");
                    next.parents(".wizard-fieldset").next(".wizard-fieldset").addClass("show","400");
                    $(document).find(".wizard-fieldset").each(function(){
                        if($(this).hasClass("show")){
                            var formAtrr = $(this).attr("data-tab-content");
                            $(document).find(".form-wizard-list .form-wizard-step-item").each(function(){
                                if($(this).attr("data-attr") == formAtrr){
                                    $(this).addClass("active");
                                    var innerWidth = $(this).innerWidth();
                                    var position = $(this).position();
                                    $(document).find(".form-wizard-step-move").css({"left": position.left, "width": innerWidth});
                                }else{
                                    $(this).removeClass("active");
                                }
                            });
                        }
                    });
                }
            });
            //click on previous button
            $(".form-wizard-previous-btn").on("click",function() {
                var counter = parseInt($(".wizard-counter").text());;
                var prev =$(this);
                var currentActiveStep = $(this).parents(".form-wizard").find(".form-wizard-list .active");
                prev.parents(".wizard-fieldset").removeClass("show","400");
                prev.parents(".wizard-fieldset").prev(".wizard-fieldset").addClass("show","400");
                currentActiveStep.removeClass("active").prev().removeClass("activated").addClass("active","400");
                $(document).find(".wizard-fieldset").each(function(){
                    if($(this).hasClass("show")){
                        var formAtrr = $(this).attr("data-tab-content");
                        $(document).find(".form-wizard-list .form-wizard-step-item").each(function(){
                            if($(this).attr("data-attr") == formAtrr){
                                $(this).addClass("active");
                                var innerWidth = $(this).innerWidth();
                                var position = $(this).position();
                                $(document).find(".form-wizard-step-move").css({"left": position.left, "width": innerWidth});
                            }else{
                                $(this).removeClass("active");
                            }
                        });
                    }
                });
            });
            //click on form submit button
            $(document).on("click",".form-wizard .form-wizard-submit" , function(){
                var parentFieldset = $(this).parents(".wizard-fieldset");
                var currentActiveStep = $(this).parents(".form-wizard").find(".form-wizard-list .active");
                parentFieldset.find(".wizard-required").each(function() {
                    var thisValue = $(this).val();
                    if( thisValue == "" ) {
                        $(this).siblings(".wizard-form-error").show();
                    }
                    else {
                        $(this).siblings(".wizard-form-error").hide();
                    }
                });
            });
            // focus on input field check empty or not
            $(".form-control").on("focus", function(){
                var tmpThis = $(this).val();
                if(tmpThis == "" ) {
                    $(this).parent().addClass("focus-input");
                }
                else if(tmpThis !="" ){
                    $(this).parent().addClass("focus-input");
                }
            }).on("blur", function(){
                var tmpThis = $(this).val();
                if(tmpThis == "" ) {
                    $(this).parent().removeClass("focus-input");
                    $(this).siblings(".wizard-form-error").show();
                }
                else if(tmpThis !="" ){
                    $(this).parent().addClass("focus-input");
                    $(this).siblings(".wizard-form-error").hide();
                }
            });
        });
        // =============================== Wizard Step Js End ================================
    </script>';
    $css = '<link rel="stylesheet" href="' . asset('assets/css/custom.css') . '">';

@endphp

@section('content')
<div class="row gy-4">

    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                </div>

                <!-- Form Wizard Start -->
                <div class="form-wizard">
                    <form action="#" method="post">
                        <div class="form-wizard-header overflow-x-auto scroll-sm pb-8 my-32">
                            <ul class="list-unstyled form-wizard-list style-two">
                                <li class="form-wizard-list__item active">
                                    <div class="form-wizard-list__line">
                                        <span class="count">1</span>
                                    </div>
                                    <span class="text text-xs fw-semibold">Isian Pemohon</span>
                                </li>
                                <li class="form-wizard-list__item">
                                    <div class="form-wizard-list__line">
                                        <span class="count">2</span>
                                    </div>
                                    <span class="text text-xs fw-semibold">Persyaratan Izin</span>
                                </li>
                                <li class="form-wizard-list__item">
                                    <div class="form-wizard-list__line">
                                        <span class="count">3</span>
                                    </div>
                                    <span class="text text-xs fw-semibold">Timeline Status</span>
                                </li>
                            </ul>
                        </div>


                        <fieldset class="wizard-fieldset show">
                            <div class="card h-100 p-0 radius-12 overflow-hidden">
                                <div class="card-header bg-light py-3">
                                    <div class="d-flex align-items-center">
                                        <iconify-icon icon="bi:file-earmark-medical" class="text-xl text-primary-600 me-2"></iconify-icon>
                                        <h6 class="mb-0 fw-semibold">Informasi Permohonan</h6>
                                    </div>
                                </div>
                                <div class="card-body p-40">
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
                                                                <input type="text" class="form-control radius-8 " id="NamaPemohon" placeholder="Masukkan Nama Pemohon" value="Charles Hasibuan">
                                                                <div class="wizard-form-error"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="mb-20">
                                                                <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Jabatan <span class="text-danger-600">*</span></label>
                                                                <input type="text" class="form-control radius-8 " id="Jabatan" placeholder="Masukkan Jabatan" value="Manager Operasional">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="mb-20">
                                                                <label for="email" class="form-label fw-semibold text-primary-light text-sm mb-8">Email <span class="text-danger-600">*</span></label>
                                                                <input type="email" class="form-control radius-8 " id="Email" placeholder="Masukkan email address" value="charles.hasibuan@permatahijau.co.id">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="mb-20">
                                                                <label for="number" class="form-label fw-semibold text-primary-light text-sm mb-8">Nomor Telepon</label>
                                                                <input type="number" class="form-control radius-8 " id="Telepon" placeholder="Masukkan Nomor Telepon" value="082134567890">
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
                                                                <input type="text" class="form-control radius-8 " id="NamaKegiatan" placeholder="Masukkan Nama Kegiatan" value="Pembangunan Gedung Baru">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="mb-20">
                                                                <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Jenis Kegiatan <span class="text-danger-600">*</span></label>
                                                                <input type="text" class="form-control radius-8 " id="JenisKegiatan" placeholder="Masukkan Jenis Kegiatan" value="Konstruksi">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="mb-20">
                                                                <label for="number" class="form-label fw-semibold text-primary-light text-sm mb-8">Pelaksana Kegiatan</label>
                                                                <input type="text" class="form-control radius-8 " id="PelaksanaKegiatan" placeholder="Masukkan Pelaksana Kegiatan" value="PT. Permata Hijau">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="mb-20">
                                                                <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Alamat Kegiatan <span class="text-danger-600">*</span></label>
                                                                <input type="text" class="form-control radius-8 " id="AlamatKegiatan" placeholder="Masukkan Alamat Kegiatan" value="Jl. Sudirman No. 123, Jakarta Pusat">
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
                                                                <label for="Jenis Izin Lingkungan" class="form-label fw-semibold text-primary-light text-sm mb-8">Jenis Izin Lingkungan <span class="text-danger-600">*</span> </label>
                                                                <select class="form-control radius-8  form-select" id="JenisIzinLingkungan">
                                                                    <option disabled>Select Jenis Izin Lingkungan</option>
                                                                    <option selected>Persetujuan Teknis - Pemenuhan Baku Mutu Emisi</option>
                                                                    <option>Persetujuan Teknis - Pemenuhan Baku Mutu Air Limbah (Pembuangan)</option>
                                                                    <option>Persetujuan Teknis - Pemenuhan Baku Mutu Air Limbah (Pemanfaatan)</option>
                                                                    <option>Persetujuan Teknis - Pemenuhan Baku Mutu Limbah B3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="mb-20">
                                                                <label for="number" class="form-label fw-semibold text-primary-light text-sm mb-8">Status Pemodalan</label>
                                                                <input type="text" class="form-control radius-8 " id="StatusPemodalan" placeholder="Masukkan Status Pemodalan" value="PMA">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="mb-20">
                                                                <label for="NIB" class="form-label fw-semibold text-primary-light text-sm mb-8">NIB<span class="text-danger-600">*</span></label>
                                                                <input type="text" class="form-control radius-8 " id="NIB" placeholder="NIB" value="8120306789123">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="mb-20">
                                                                <label for="KBLI" class="form-label fw-semibold text-primary-light text-sm mb-8">KBLI <span class="text-danger-600">*</span> </label>
                                                                <select class="form-control radius-8  form-select" id="KBLI">
                                                                    <option disabled>Pilih KBLI</option>
                                                                    <option>10293.A (lndustri Pembekuan Bióta Air Lainnya)</option>
                                                                    <option>10299 (lndustri Pengolahan dan Pengawetan lainnya untuk Biota Air Lainnya)</option>
                                                                    <option selected>49431 (Angkutan Bermotor untuk Barang Umum)</option>
                                                                    <option>10293 (lndustri Pembekuan Biota Air Lainnya)</option>
                                                                    <option>46324 (Perdagangan Besar Hasil Olahan Perikanan)</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="mb-20">
                                                                <label for="Operasional Kegiatan" class="form-label fw-semibold text-primary-light text-sm mb-8">Operasional Kegiatan<span class="text-danger-600">*</span></label>
                                                                <input type="text" class="form-control radius-8 " id="OperasionalKegiatan" placeholder="Operasional Kegiatan" value="24 Jam">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="mb-20">
                                                                <label for="Skala" class="form-label fw-semibold text-primary-light text-sm mb-8">Skala<span class="text-danger-600">*</span></label>
                                                                <input type="text" class="form-control radius-8 " id="OperasionalKegiatan" placeholder="Skala" value="Menengah">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                        <!-- Apply the same section pattern for the second card -->
                                        <div class="section-card mb-8">
                                            <div class="section-header active" data-bs-toggle="collapse" href="#dataPemohon2" role="button" aria-expanded="true" aria-controls="dataPemohon2">
                                                <iconify-icon icon="bi:person-fill" class="section-icon"></iconify-icon>
                                                <h6 class="text-md mb-0">List Pertanyaan</h6>
                                                <iconify-icon icon="bi:chevron-down" class="ms-auto dropdown-arrow rotated"></iconify-icon>
                                            </div>
                                            <div class="collapse show" id="dataPemohon2">
                                                <div class="section-content p-3">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="mb-20">
                                                                <label for="KawasanIndustri" class="form-label fw-semibold text-primary-light text-sm mb-8">Apakah berada di lokasi kawasan industri ? <span class="text-danger-600">*</span> </label>
                                                                <select class="form-control radius-8  form-select" id="KawasanIndustri">
                                                                    <option disabled>Pilih Jawaban</option>
                                                                    <option selected>Ya</option>
                                                                    <option>Tidak</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="mb-20">
                                                                <label for="KawasanIndustri" class="form-label fw-semibold text-primary-light text-sm mb-8">Apakah masuk dalam Kawasan Lindung ?<span class="text-danger-600">*</span> </label>
                                                                <select class="form-control radius-8  form-select" id="KawasanIndustri">
                                                                    <option disabled>Pilih Jawaban</option>
                                                                    <option>Ya</option>
                                                                    <option selected>Tidak</option>
                                                                </select>
                                                            </div>
                                                        </div>


                                                        <div class="col-sm-6">
                                                            <div class="mb-20">
                                                                <label for="KawasanIndustri" class="form-label fw-semibold text-primary-light text-sm mb-8">Apakah masuk dalam PIPPIB?<span class="text-danger-600">*</span> </label>
                                                                <select class="form-control radius-8  form-select" id="KawasanIndustri">
                                                                    <option disabled>Pilih Jawaban</option>
                                                                    <option>Ya</option>
                                                                    <option selected>Tidak</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="mb-20">
                                                                <label for="KawasanIndustri" class="form-label fw-semibold text-primary-light text-sm mb-8">Apakah melakukan pengumpulan limbah B3?<span class="text-danger-600">*</span> </label>
                                                                <select class="form-control radius-8  form-select" id="KawasanIndustri">
                                                                    <option disabled>Pilih Jawaban</option>
                                                                    <option selected>Ya</option>
                                                                    <option>Tidak</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12">
                                                            <div class="mb-20">
                                                                <label for="pengolahanAirLimbah" class="form-label fw-semibold text-primary-light text-sm mb-8">Apakah melakukan pengolahan air limbah ?<span class="text-danger-600">*</span></label>
                                                                <select class="form-control radius-8  form-select" id="pengolahanAirLimbah" onchange="togglePengolahanFields()">
                                                                    <option disabled>Pilih Jawaban</option>
                                                                    <option value="Ya" selected>Ya</option>
                                                                    <option value="Tidak">Tidak</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <!-- Additional fields that appear when "Ya" is selected -->
                                                        <div id="pengolahanAdditionalFields" class="col-12">
                                                            <div class="card border border-primary-100 rounded-3 p-3 mb-20 animate__animated animate__fadeIn">
                                                                <div class="row">
                                                                    <div class="col-sm-12 mb-3">
                                                                        <div class="mb-20">
                                                                            <label for="Skala" class="form-label fw-semibold text-primary-light text-sm mb-8">Jumlah IPAL yang telah beroperasi?<span class="text-danger-600">*</span></label>
                                                                            <input type="text" class="form-control radius-8 " id="OperasionalKegiatan" placeholder="berapa Unit" value="2 Unit">
                                                                        </div>
                                                                        <div class="mb-20">
                                                                            <div class="d-flex align-items-center">
                                                                            <label for="catatanPengolahan" class="d-flex align-items-center gap-1 form-label fw-semibold text-primary-light text-sm mb-8">
                                                                                <iconify-icon icon="bi:pencil-square" class="me-1"></iconify-icon>
                                                                                Keterangan</span>
                                                                            </label>
                                                                            </div>
                                                                            <textarea class="form-control radius-8 " id="catatanPengolahan" rows="3" placeholder="Masukkan catatan pengolahan air limbah">IPAL 1 untuk proses produksi, IPAL 2 untuk kegiatan domestik</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="mb-20">
                                                                            <label for="jenisPengolahan" class="form-label fw-semibold text-primary-light text-sm mb-8">
                                                                                Apakah sebelumnya mempunyai izin IPAL? <span class="text-danger-600">*</span>
                                                                            </label>
                                                                            <select class="form-control radius-8  form-select" id="jenisPengolahan">
                                                                                <option disabled>Pilih Jawaban</option>
                                                                                <option selected>Ya</option>
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
                                                                <select class="form-control radius-8  form-select" id="emisiAirLimbah" onchange="toggleEmisiFields()">
                                                                    <option disabled>Pilih Jawaban</option>
                                                                    <option value="Ya" selected>Ya</option>
                                                                    <option value="Tidak">Tidak</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <!-- Additional fields that appear when "Ya" is selected -->
                                                        <div id="emisiAdditionalFields" class="col-12">
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
                                                                            <textarea class="form-control radius-8 " id="catatanPengolahan" rows="3" placeholder="Masukkan catatan emisi">Emisi berasal dari kegiatan genset dan boiler</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12">
                                                            <div class="mb-20">
                                                                <label for="hasilLimbahB3" class="form-label fw-semibold text-primary-light text-sm mb-8">Apakah menghasilkan Limbah B3 ?<span class="text-danger-600">*</span></label>
                                                                <select class="form-control radius-8  form-select" id="hasilLimbahB3" onchange="toggleLimbahFields()">
                                                                    <option disabled>Pilih Jawaban</option>
                                                                    <option value="Ya" selected>Ya</option>
                                                                    <option value="Tidak">Tidak</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <!-- Additional fields that appear when "Ya" is selected -->
                                                        <div id="limbahAdditionalFields" class="col-12">
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
                                                                            <textarea class="form-control radius-8 " id="catatanPengolahan" rows="3" placeholder="Masukkan catatan Limbah B3">Limbah B3 berupa oli bekas, bahan kimia kadaluarsa, dan material terkontaminasi</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group d-flex align-items-center justify-content-end gap-8">
                                            <button type="button" class="form-wizard-previous-btn btn btn-neutral-500 border-neutral-100 px-32">Simpan</button>
                                            <button type="button" class="form-wizard-next-btn btn btn-primary-600 px-32">Berikutnya</button>
                                        </div>
                                </div>
                            </div>


                        </fieldset>

                        <fieldset class="wizard-fieldset">
                            <!-- Dokumen Persyaratan Section -->
                            <div class="section-card">
                                <div class="section-header mb-3">
                                    <iconify-icon icon="bi:file-earmark-text" class="section-icon"></iconify-icon>
                                    <h6 class="text-md mb-0">Dokumen Persyaratan</h6>
                                </div>
                                <div class="section-content">
                                    <div class="row gy-4">
                                        <!-- Surat Permohonan -->
                                        <div class="col-12">
                                            <div class="card border">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center justify-content-center bg-primary-600 rounded-circle text-white fw-bold me-2" style="width: 24px; height: 24px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">1</div>
                                                            <label class="form-label required-field mb-0">Surat Permohonan</label>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="badge bg-success-100 text-success-600 text-lg d-flex align-items-center">
                                                                <iconify-icon icon="bi:check-circle-fill" class="me-1"></iconify-icon>
                                                                Disetujui
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <!-- File Preview Section -->
                                                    <div class="file-preview-container mt-3" id="suratPermohonanPreview">
                                                        <div class="border rounded p-3 bg-light d-flex align-items-start">
                                                            <div class="preview-image me-3">
                                                                <div class="preview-icon">
                                                                    <iconify-icon icon="bi:file-earmark-pdf" class="text-danger fs-1"></iconify-icon>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex justify-content-between align-items-start">
                                                                    <div>
                                                                        <h6 class="preview-filename mb-1 text-truncate" style="max-width: 200px;">surat_permohonan.pdf</h6>
                                                                        <p class="preview-filesize text-sm text-muted mb-0">1.2 MB</p>
                                                                    </div>
                                                                    <button type="button" class="btn btn-sm btn-neutral-200 remove-file" data-target="suratPermohonan">
                                                                        <iconify-icon icon="bi:x" class="text-muted"></iconify-icon>
                                                                    </button>
                                                                </div>
                                                                <div class="progress mt-2" style="height: 5px;">
                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                                                                </div>
                                                                <span class="text-success text-xs mt-1 d-block">Berhasil diupload</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mt-2">
                                                        <small class="text-muted d-block">Maks. berukuran 20 MB dan berformat pdf</small>

                                                         <!-- Message Section -->
                                                         <div class="mt-3 border-top pt-3">
                                                            <!-- Message History Container -->
                                                            <div class="message-history mb-3">
                                                                <div class="d-flex flex-column gap-3">
                                                                    <!-- Admin Message -->
                                                                    <div class="d-flex gap-2">
                                                                        <div class="avatar avatar-sm bg-primary-100 rounded-circle d-flex align-items-center justify-content-center">
                                                                            <iconify-icon icon="bi:person-fill" class="text-primary-600"></iconify-icon>
                                                                        </div>
                                                                        <div style="max-width: 85%;">
                                                                            <div class="fw-semibold text-xs mb-1">Admin Perizinan</div>
                                                                            <div class="bg-light rounded p-2 px-3">
                                                                                <div>Silahkan upload dokumen pendukung lainnya jika ada</div>
                                                                                <div class="text-muted text-xs mt-1">10:30 AM</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- User Message -->
                                                                    <div class="d-flex flex-row-reverse gap-2">
                                                                        <div class="avatar avatar-sm bg-primary-600 rounded-circle d-flex align-items-center justify-content-center">
                                                                            <iconify-icon icon="bi:person-fill" class="text-white"></iconify-icon>
                                                                        </div>
                                                                        <div style="max-width: 85%;">
                                                                            <div class="fw-semibold text-xs mb-1 text-end">Budi Santoso</div>
                                                                            <div class="bg-primary-50 rounded p-2 px-3">
                                                                                <div>Baik, saya akan upload dokumen tambahan</div>
                                                                                <div class="text-muted text-xs mt-1">10:45 AM</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Message Input -->
                                                            <div class="d-flex gap-2">
                                                                <textarea class="form-control" rows="2" placeholder="Tulis Pesan..."></textarea>
                                                                <button type="button" class="btn btn-sm btn-primary-600 d-flex align-items-center align-self-end">
                                                                    Kirim
                                                                    <iconify-icon icon="f7:paperplane" class="text-white me-1"></iconify-icon>

                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Dokumen Teknis Kegiatan -->
                                        <div class="col-12">
                                            <div class="card border">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center justify-content-center bg-primary-600 rounded-circle text-white fw-bold me-2" style="width: 24px; height: 24px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">2</div>
                                                            <label class="form-label required-field mb-0">Dokumen Teknis Kegiatan</label>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="badge bg-warning-100 text-warning-600 text-lg d-flex align-items-center">
                                                                <iconify-icon icon="bi:exclamation-triangle" class="me-1"></iconify-icon>
                                                                Perlu Perbaikan
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <!-- File Preview Section -->
                                                    <div class="file-preview-container mt-3" id="dokumenTeknisPreview">
                                                        <div class="border rounded p-3 bg-light d-flex align-items-start">
                                                            <div class="preview-image me-3">
                                                                <div class="preview-icon">
                                                                    <iconify-icon icon="bi:file-earmark-pdf" class="text-danger fs-1"></iconify-icon>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex justify-content-between align-items-start">
                                                                    <div>
                                                                        <h6 class="preview-filename mb-1 text-truncate" style="max-width: 200px;">dokumen_teknis.pdf</h6>
                                                                        <p class="preview-filesize text-sm text-muted mb-0">2.5 MB</p>
                                                                    </div>
                                                                    <button type="button" class="btn btn-sm btn-neutral-200 remove-file" data-target="dokumenTeknis">
                                                                        <iconify-icon icon="bi:x" class="text-muted"></iconify-icon>
                                                                    </button>
                                                                </div>
                                                                <div class="progress mt-2" style="height: 5px;">
                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                                                                </div>
                                                                <span class="text-success text-xs mt-1 d-block">Berhasil diupload</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mt-2">
                                                        <small class="text-muted d-block">Maks. berukuran 20 MB dan berformat pdf</small>

                                                        <!-- Message Section -->
                                                        <div class="mt-3 border-top pt-3">
                                                            <!-- Message History -->
                                                            <div class="message-history mb-3">
                                                                <div class="d-flex gap-2">
                                                                    <div class="avatar avatar-sm bg-primary-100 rounded-circle d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="bi:person-fill" class="text-primary-600"></iconify-icon>
                                                                    </div>
                                                                    <div style="max-width: 85%;">
                                                                        <div class="fw-semibold text-xs mb-1">Admin Perizinan</div>
                                                                        <div class="bg-light rounded p-2 px-3">
                                                                            <div>Mohon untuk memperbaiki dokumen teknis dengan menambahkan rincian proses pengolahan limbah</div>
                                                                            <div class="text-muted text-xs mt-1">11:20 AM</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Message Input -->
                                                            <div class="d-flex gap-2">
                                                                <textarea class="form-control" rows="2" placeholder="Tulis Pesan..."></textarea>
                                                                <button type="button" class="btn btn-sm btn-primary-600 d-flex align-items-center align-self-end">
                                                                    <iconify-icon icon="bi:send" class="text-white me-1"></iconify-icon>
                                                                    Kirim
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Surat Pernyataan Keabsahan Dokumen -->
                                        <div class="col-12">
                                            <div class="card border">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center justify-content-center bg-primary-600 rounded-circle text-white fw-bold me-2" style="width: 24px; height: 24px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">3</div>
                                                            <label class="form-label required-field mb-0">Surat Pernyataan Keabsahan Dokumen</label>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="badge bg-warning-100 text-warning-600 text-lg d-flex align-items-center">
                                                                <iconify-icon icon="bi:exclamation-triangle" class="me-1"></iconify-icon>
                                                                Perlu Perbaikan
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <!-- File Preview Section -->
                                                    <div class="file-preview-container mt-3" id="suratPernyataanPreview">
                                                        <div class="border rounded p-3 bg-light d-flex align-items-start">
                                                            <div class="preview-image me-3">
                                                                <div class="preview-icon">
                                                                    <iconify-icon icon="bi:file-earmark-pdf" class="text-danger fs-1"></iconify-icon>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex justify-content-between align-items-start">
                                                                    <div>
                                                                        <h6 class="preview-filename mb-1 text-truncate" style="max-width: 200px;">surat_pernyataan.pdf</h6>
                                                                        <p class="preview-filesize text-sm text-muted mb-0">0.8 MB</p>
                                                                    </div>
                                                                    <button type="button" class="btn btn-sm btn-neutral-200 remove-file" data-target="suratPernyataan">
                                                                        <iconify-icon icon="bi:x" class="text-muted"></iconify-icon>
                                                                    </button>
                                                                </div>
                                                                <div class="progress mt-2" style="height: 5px;">
                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                                                                </div>
                                                                <span class="text-success text-xs mt-1 d-block">Berhasil diupload</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mt-2">
                                                        <small class="text-muted d-block">Maks. berukuran 20 MB dan berformat pdf</small>

                                                        <!-- Message Section -->
                                                        <div class="mt-3 border-top pt-3">
                                                            <!-- Message History -->
                                                            <div class="message-history mb-3">
                                                                <div class="d-flex gap-2">
                                                                    <div class="avatar avatar-sm bg-primary-100 rounded-circle d-flex align-items-center justify-content-center">
                                                                        <iconify-icon icon="bi:person-fill" class="text-primary-600"></iconify-icon>
                                                                    </div>
                                                                    <div style="max-width: 85%;">
                                                                        <div class="fw-semibold text-xs mb-1">Admin Perizinan</div>
                                                                        <div class="bg-light rounded p-2 px-3">
                                                                            <div>Mohon untuk melengkapi surat pernyataan dengan tanda tangan direktur dan stempel perusahaan</div>
                                                                            <div class="text-muted text-xs mt-1">11:45 AM</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Message Input -->
                                                            <div class="d-flex gap-2">
                                                                <textarea class="form-control" rows="2" placeholder="Tulis Pesan..."></textarea>
                                                                <button type="button" class="btn btn-sm btn-primary-600 d-flex align-items-center align-self-end">
                                                                    <iconify-icon icon="bi:send" class="text-white me-1"></iconify-icon>
                                                                    Kirim
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Dokumen Pendukung Lainnya -->
                                        <div class="col-12">
                                            <div class="card border">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="d-flex align-items-center justify-content-center bg-primary-600 rounded-circle text-white fw-bold me-2" style="width: 24px; height: 24px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">4</div>
                                                            <label class="form-label mb-0">Dokumen Pendukung Lainnya</label>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="badge bg-neutral-200 text-neutral-600 text-lg d-flex align-items-center">
                                                                <iconify-icon icon="bi:hourglass-bottom" class="me-1"></iconify-icon>
                                                                Belum Diperiksa
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <!-- File Preview Section -->
                                                    <div class="file-preview-container mt-3" id="dokumenPendukungPreview">
                                                        <div class="border rounded p-3 bg-light d-flex align-items-start">
                                                            <div class="preview-image me-3">
                                                                <div class="preview-icon">
                                                                    <iconify-icon icon="bi:file-earmark-pdf" class="text-danger fs-1"></iconify-icon>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex justify-content-between align-items-start">
                                                                    <div>
                                                                        <h6 class="preview-filename mb-1 text-truncate" style="max-width: 200px;">dokumen_pendukung.pdf</h6>
                                                                        <p class="preview-filesize text-sm text-muted mb-0">3.1 MB</p>
                                                                    </div>
                                                                    <button type="button" class="btn btn-sm btn-neutral-200 remove-file" data-target="dokumenPendukung">
                                                                        <iconify-icon icon="bi:x" class="text-muted"></iconify-icon>
                                                                    </button>
                                                                </div>
                                                                <div class="progress mt-2" style="height: 5px;">
                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                                                                </div>
                                                                <span class="text-success text-xs mt-1 d-block">Berhasil diupload</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mt-2">
                                                        <small class="text-muted d-block">Maks. berukuran 20 MB dan berformat pdf</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group d-flex align-items-center justify-content-end gap-8 mt-4">
                                <button type="button" class="form-wizard-previous-btn btn btn-neutral-500 border-neutral-100 px-32">Sebelumnya</button>
                                <button type="button" class="form-wizard-next-btn btn btn-primary-600 px-32">Berikutnya</button>
                            </div>
                        </fieldset>

                        <fieldset class="wizard-fieldset">
                            <!-- Timeline Status Section -->
                            <div class="section-card">
                                <div class="section-header mb-3">
                                    <iconify-icon icon="material-symbols:timeline" class="section-icon"></iconify-icon>
                                    <h6 class="text-md mb-0">Timeline Status Permohonan</h6>
                                </div>
                                <div class="section-content">
                                    <div class="alert alert-info mb-4" role="alert">
                                        <div class="d-flex">
                                            <iconify-icon icon="bi:info-circle-fill" class="me-2 fs-5"></iconify-icon>
                                            <div>
                                                <strong>Status Permohonan:</strong> Berikut adalah timeline status permohonan Anda. Harap periksa secara berkala untuk mengetahui kemajuan permohonan.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card border p-12">
                                        <div class="timeline-status">
                                            <div class="timeline-item completed">
                                                <div class="timeline-marker"></div>
                                                <div class="timeline-content">
                                                    <h6 class="mb-0">Permohonan Diajukan</h6>
                                                    <p class="text-muted small mb-0">21 Maret 2025 - 09:30</p>
                                                    <p class="small">Permohonan berhasil diajukan</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item completed">
                                                <div class="timeline-marker"></div>
                                                <div class="timeline-content">
                                                    <h6 class="mb-0">Verifikasi Dokumen</h6>
                                                    <p class="text-muted small mb-0">22 Maret 2025 - 14:15</p>
                                                    <p class="small">Dokumen telah diverifikasi oleh admin</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item completed">
                                                <div class="timeline-marker"></div>
                                                <div class="timeline-content">
                                                    <h6 class="mb-0">PembuatanSurat Tanggapan
                                                        Arahan Persetujuan Teknis
                                                        (12 Hari Kerja)</h6>
                                                    <p class="text-muted small mb-0">22 Maret 2025 - 14:15</p>
                                                    <p class="small">Dokumen telah diverifikasi oleh admin</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item active">
                                                <div class="timeline-marker"></div>
                                                <div class="timeline-content">
                                                    <h6 class="mb-0">Proses Review Teknis</h6>
                                                    <p class="text-muted small mb-0">23 Maret 2025 - 10:45</p>
                                                    <p class="small">Sedang dalam proses review oleh tim teknis</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-marker"></div>
                                                <div class="timeline-content">
                                                    <h6 class="mb-0">Persetujuan Arahan</h6>
                                                    <p class="text-muted small mb-0">-</p>
                                                    <p class="small">Menunggu persetujuan arahan teknis</p>
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-marker"></div>
                                                <div class="timeline-content">
                                                    <h6 class="mb-0">Selesai</h6>
                                                    <p class="text-muted small mb-0">-</p>
                                                    <p class="small">Proses permohonan selesai</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group d-flex align-items-center justify-content-end gap-8 mt-4">
                                <button type="button" class="form-wizard-previous-btn btn btn-neutral-500 border-neutral-100 px-32">Sebelumnya</button>
                                <a href="{{ route('pertek.index_arahan') }}" class="btn btn-primary-600 px-32">Lihat Semua Permohonan</a>
                            </div>
                        </fieldset>

                            {{-- <fieldset class="wizard-fieldset">
                              <!-- Timeline Status Section -->
                              <div class="section-card">
                                <div class="section-header mb-4">
                                  <iconify-icon icon="material-symbols:timeline" class="section-icon"></iconify-icon>
                                  <h5 class="m-0">Timeline Status Permohonan</h5>
                                </div>

                                <div class="section-content">
                                  <div class="alert alert-info mb-4" role="alert">
                                    <div class="d-flex align-items-center">
                                      <iconify-icon icon="bi:info-circle-fill" style="font-size: 1.25rem; margin-right: 0.75rem;"></iconify-icon>
                                      <div>
                                        <strong>Status Permohonan:</strong> Berikut adalah timeline status permohonan Anda. Harap periksa secara berkala untuk mengetahui kemajuan permohonan.
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-wrapper">
                                    <div class="timeline-status">
                                      <div class="timeline-item completed">
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                          <h6 class="timeline-title">Permohonan Diajukan</h6>
                                          <p class="timeline-date">21 Maret 2025 - 09:30</p>
                                          <p class="timeline-description">Permohonan berhasil diajukan</p>
                                        </div>
                                      </div>

                                      <div class="timeline-item completed">
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                          <h6 class="timeline-title">Verifikasi Dokumen</h6>
                                          <p class="timeline-date">22 Maret 2025 - 14:15</p>
                                          <p class="timeline-description">Dokumen telah diverifikasi oleh admin</p>
                                        </div>
                                      </div>

                                      <div class="timeline-item active">
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                          <h6 class="timeline-title">Proses Review Teknis</h6>
                                          <p class="timeline-date">23 Maret 2025 - 10:45</p>
                                          <p class="timeline-description">Sedang dalam proses review oleh tim teknis</p>
                                        </div>
                                      </div>

                                      <div class="timeline-item">
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                          <h6 class="timeline-title">Persetujuan Arahan</h6>
                                          <p class="timeline-date">-</p>
                                          <p class="timeline-description">Menunggu persetujuan arahan teknis</p>
                                        </div>
                                      </div>

                                      <div class="timeline-item">
                                        <div class="timeline-marker"></div>
                                        <div class="timeline-content">
                                          <h6 class="timeline-title">Selesai</h6>
                                          <p class="timeline-date">-</p>
                                          <p class="timeline-description">Proses permohonan selesai</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                </div>
                              </div>

                              <div class="d-flex justify-content-end gap-3 mt-4">
                                <button type="button" class="btn btn-outline-secondary">
                                  <i class="bi bi-arrow-left me-1"></i> Sebelumnya
                                </button>
                                <a href="#" class="btn btn-primary">
                                  Lihat Semua Permohonan <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                              </div>
                            </fieldset> --}}
                    </form>
                </div>
                <!-- Form Wizard End -->
            </div>
        </div>
    </div>

     <!-- Informasi Permohonan -->
     <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-light py-3">
                            <div class="d-flex align-items-center">
                                <iconify-icon icon="bi:file-earmark-medical" class="text-xl text-primary-600 me-2"></iconify-icon>
                                <h6 class="mb-0 fw-semibold">Informasi Permohonan</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <span class="d-block text-neutral-500 mb-1 text-sm">Nomor Pengajuan</span>
                                <span class="text-md fw-medium">K24/250319E5CC8C330</span>
                            </div>
                            <div class="mb-3">
                                <span class="d-block text-neutral-500 mb-1 text-sm">Jenis Izin</span>
                                <span class="text-md fw-medium">PERSETUJUAN TEKNIS - PEMENUHAN BAKU MUTU AIR LIMBAH (PEMANFAATAN)</span>
                            </div>
                            <div class="mb-3">
                                <span class="d-block text-neutral-500 mb-1 text-sm">Tipe Perizinan</span>
                                <span class="text-md fw-medium">Perusahaan/Yayasan/Pemerintahan</span>
                            </div>
                            <div class="mb-3">
                                <span class="d-block text-neutral-500 mb-1 text-sm">Status</span>
                                <span class="badge bg-warning-100 text-warning-600">Draft</span>
                            </div>
                            <div class="mb-3">
                                <span class="d-block text-neutral-500 mb-1 text-sm">Kantor/Wilayah</span>
                                <span class="text-md fw-medium">DPMPTSP DKI JAKARTA
                                    Gedung Mal Pelayanan Publik. Jl.HR. Rasuna Said Kav. 22, Telp. 021-50810900 Website: pelayanan.jakarta.go.id, email: dpmptsp@jakarta.go.id</span>
                            </div>
                            <div class="mb-3">
                                <span class="d-block text-neutral-500 mb-1 text-sm">Tanggal Pengajuan</span>
                                <span class="text-md">{{ date('d/m/Y') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

    <style>
        .timeline-status {
            position: relative;
            padding-left: 28px;
        }
        .timeline-status:before {
            content: '';
            position: absolute;
            left: 9px;
            top: 6px;
            height: calc(100% - 12px);
            width: 2px;
            background: #e9ecef;
        }
        .timeline-item {
            position: relative;
            padding-bottom: 20px;
        }
        .timeline-marker {
            position: absolute;
            left: -25px;
            top: 6px;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: #e9ecef;
            border: 2px solid #fff;
        }
        .timeline-item.completed .timeline-marker {
            background: #28a745;
        }
        .timeline-item.active .timeline-marker {
            background: #007bff;
            box-shadow: 0 0 0 4px rgba(0,123,255,0.2);
        }
        .timeline-content {
            padding-left: 10px;
        }


    </style>

<script src="{{ asset('assets/js/pertek/script_dropdown.js') }}"></script>
<script src="{{ asset('assets/js/pertek/script_fileUpload.js') }}"></script>
<script src="{{ asset('assets/js/pertek/script_pertanyaan.js') }}"></script>


@endsection
