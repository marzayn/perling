@extends('layout.layout')
@php
    $title='Permohonan Surat Arahan Rincian Teknis';
    $subTitle = 'Permohonan Surat Arahan Rincian Teknis';
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

                <div class="col-md-12">
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
                                                <span class="text text-xs fw-semibold">Konfirmasi</span>
                                            </li>
                                            <li class="form-wizard-list__item">
                                                <div class="form-wizard-list__line">
                                                    <span class="count">4</span>
                                                </div>
                                                <span class="text text-xs fw-semibold">Selesai</span>
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
                                                                            <input type="text" class="form-control radius-8 " id="NamaPemohon" placeholder="Masukkan Nama Pemohon">
                                                                            <div class="wizard-form-error"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-20">
                                                                            <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Jabatan <span class="text-danger-600">*</span></label>
                                                                            <input type="text" class="form-control radius-8 " id="Jabatan" placeholder="Masukkan Jabatan">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-20">
                                                                            <label for="email" class="form-label fw-semibold text-primary-light text-sm mb-8">Email <span class="text-danger-600">*</span></label>
                                                                            <input type="email" class="form-control radius-8 " id="Email" placeholder="Masukkan email address">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-20">
                                                                            <label for="number" class="form-label fw-semibold text-primary-light text-sm mb-8">Nomor Telepon</label>
                                                                            <input type="number" class="form-control radius-8 " id="Telepon" placeholder="Masukkan Nomor Telepon">
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
                                                                            <input type="text" class="form-control radius-8 " id="NamaKegiatan" placeholder="Masukkan Nama Kegiatan">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-20">
                                                                            <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Jenis Kegiatan <span class="text-danger-600">*</span></label>
                                                                            <input type="text" class="form-control radius-8 " id="JenisKegiatan" placeholder="Masukkan Jenis Kegiatan">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-20">
                                                                            <label for="number" class="form-label fw-semibold text-primary-light text-sm mb-8">Pelaksana Kegiatan</label>
                                                                            <input type="text" class="form-control radius-8 " id="PelaksanaKegiatan" placeholder="Masukkan Pelaksana Kegiatan">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-20">
                                                                            <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Alamat Kegiatan <span class="text-danger-600">*</span></label>
                                                                            <input type="text" class="form-control radius-8 " id="AlamatKegiatan" placeholder="Masukkan Alamat Kegiatan">
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
                                                                                <option selected disabled>Select Jenis Izin Lingkungan</option>
                                                                                <option>Persetujuan Teknis - Pemenuhan Baku Mutu Emisi</option>
                                                                                <option>Persetujuan Teknis - Pemenuhan Baku Mutu Air Limbah (Pembuangan)</option>
                                                                                <option>Persetujuan Teknis - Pemenuhan Baku Mutu Air Limbah (Pemanfaatan)</option>
                                                                                <option>Persetujuan Teknis - Pemenuhan Baku Mutu Limbah B3</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-20">
                                                                            <label for="number" class="form-label fw-semibold text-primary-light text-sm mb-8">Status Pemodalan</label>
                                                                            <input type="text" class="form-control radius-8 " id="StatusPemodalan" placeholder="Masukkan Status Pemodalan">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-20">
                                                                            <label for="NIB" class="form-label fw-semibold text-primary-light text-sm mb-8">NIB<span class="text-danger-600">*</span></label>
                                                                            <input type="text" class="form-control radius-8 " id="NIB" placeholder="NIB">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-20">
                                                                            <label for="KBLI" class="form-label fw-semibold text-primary-light text-sm mb-8">KBLI <span class="text-danger-600">*</span> </label>
                                                                            <select class="form-control radius-8  form-select" id="KBLI">
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
                                                                            <input type="text" class="form-control radius-8 " id="OperasionalKegiatan" placeholder="Operasional Kegiatan">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-20">
                                                                            <label for="Skala" class="form-label fw-semibold text-primary-light text-sm mb-8">Skala<span class="text-danger-600">*</span></label>
                                                                            <input type="text" class="form-control radius-8 " id="OperasionalKegiatan" placeholder="Skala">
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
                                                                                <option selected disabled>Pilih Jawaban</option>
                                                                                <option>Ya</option>
                                                                                <option>Tidak</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <div class="mb-20">
                                                                            <label for="KawasanIndustri" class="form-label fw-semibold text-primary-light text-sm mb-8">Apakah masuk dalam Kawasan Lindung ?<span class="text-danger-600">*</span> </label>
                                                                            <select class="form-control radius-8  form-select" id="KawasanIndustri">
                                                                                <option selected disabled>Pilih Jawaban</option>
                                                                                <option>Ya</option>
                                                                                <option>Tidak</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-sm-6">
                                                                        <div class="mb-20">
                                                                            <label for="KawasanIndustri" class="form-label fw-semibold text-primary-light text-sm mb-8">Apakah masuk dalam PIPPIB?<span class="text-danger-600">*</span> </label>
                                                                            <select class="form-control radius-8  form-select" id="KawasanIndustri">
                                                                                <option selected disabled>Pilih Jawaban</option>
                                                                                <option>Ya</option>
                                                                                <option>Tidak</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <div class="mb-20">
                                                                            <label for="KawasanIndustri" class="form-label fw-semibold text-primary-light text-sm mb-8">Apakah melakukan pengumpulan limbah B3?<span class="text-danger-600">*</span> </label>
                                                                            <select class="form-control radius-8  form-select" id="KawasanIndustri">
                                                                                <option selected disabled>Pilih Jawaban</option>
                                                                                <option>Ya</option>
                                                                                <option>Tidak</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-12">
                                                                        <div class="mb-20">
                                                                            <label for="pengolahanAirLimbah" class="form-label fw-semibold text-primary-light text-sm mb-8">Apakah melakukan pengolahan air limbah ?<span class="text-danger-600">*</span></label>
                                                                            <select class="form-control radius-8  form-select" id="pengolahanAirLimbah" onchange="togglePengolahanFields()">
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
                                                                                        <input type="text" class="form-control radius-8 " id="OperasionalKegiatan" placeholder="berapa Unit">
                                                                                    </div>
                                                                                    <div class="mb-20">
                                                                                        <div class="d-flex align-items-center">
                                                                                        <label for="catatanPengolahan" class="d-flex align-items-center gap-1 form-label fw-semibold text-primary-light text-sm mb-8">
                                                                                            <iconify-icon icon="bi:pencil-square" class="me-1"></iconify-icon>
                                                                                            Keterangan</span>
                                                                                        </label>
                                                                                        </div>
                                                                                        <textarea class="form-control radius-8 " id="catatanPengolahan" rows="3" placeholder="Masukkan catatan pengolahan air limbah"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <div class="mb-20">
                                                                                        <label for="jenisPengolahan" class="form-label fw-semibold text-primary-light text-sm mb-8">
                                                                                            Apakah sebelumnya mempunyai izin IPAL? <span class="text-danger-600">*</span>
                                                                                        </label>
                                                                                        <select class="form-control radius-8  form-select" id="jenisPengolahan">
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
                                                                            <select class="form-control radius-8  form-select" id="emisiAirLimbah" onchange="toggleEmisiFields()">
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
                                                                                        <textarea class="form-control radius-8 " id="catatanPengolahan" rows="3" placeholder="Masukkan catatan emisi"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-12">
                                                                        <div class="mb-20">
                                                                            <label for="hasilLimbahB3" class="form-label fw-semibold text-primary-light text-sm mb-8">Apakah menghasilkan Limbah B3 ?<span class="text-danger-600">*</span></label>
                                                                            <select class="form-control radius-8  form-select" id="hasilLimbahB3" onchange="toggleLimbahFields()">
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
                                                                                        <textarea class="form-control radius-8 " id="catatanPengolahan" rows="3" placeholder="Masukkan catatan Limbah B3"></textarea>
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
                                                                </div>
                                                                <div class="position-relative">
                                                                    <div class="input-group file-upload-container">
                                                                        <input type="file" class="form-control wizard-required file-upload" id="suratPermohonan" required>
                                                                        <button class="btn btn-neutral-500 border-neutral-100 upload-btn" type="button" data-target="suratPermohonan">Upload</button>
                                                                    </div>
                                                                    <div class="wizard-form-error"></div>
                                                                </div>

                                                                <!-- File Preview Section -->
                                                                <div class="file-preview-container mt-3 d-none" id="suratPermohonanPreview">
                                                                    <div class="border rounded p-3 bg-light d-flex align-items-start">
                                                                        <div class="preview-image me-3">
                                                                            <img src="" alt="File Preview" class="preview-img" style="max-width: 150px; max-height: 150px; object-fit: cover;">
                                                                            <div class="preview-icon d-none">
                                                                                <iconify-icon icon="bi:file-earmark-pdf" class="text-danger fs-1"></iconify-icon>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <div class="d-flex justify-content-between align-items-start">
                                                                                <div>
                                                                                    <h6 class="preview-filename mb-1 text-truncate" style="max-width: 200px;"></h6>
                                                                                    <p class="preview-filesize text-sm text-muted mb-0"></p>
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
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                     <!-- Dokumen Rincian Teknis Limbah B3 dan/atau Limbah Non B3 -->
                                                     <div class="col-12">
                                                        <div class="card border">
                                                            <div class="card-body">
                                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="d-flex align-items-center justify-content-center bg-primary-600 rounded-circle text-white fw-bold me-2" style="width: 24px; height: 24px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">2</div>
                                                                        <label class="form-label required-field mb-0">Dokumen Rincian Teknis Limbah B3 dan/atau Limbah Non B3</label>
                                                                    </div>
                                                                </div>
                                                                <div class="position-relative">
                                                                    <div class="input-group file-upload-container">
                                                                        <input type="file" class="form-control wizard-required file-upload" id="rintekLimbah" required>
                                                                        <button class="btn btn-neutral-500 border-neutral-100 upload-btn" type="button" data-target="rintekLimbah">Upload</button>
                                                                    </div>
                                                                    <div class="wizard-form-error"></div>
                                                                </div>

                                                                <!-- File Preview Section -->
                                                                <div class="file-preview-container mt-3 d-none" id="rintekLimbahPreview">
                                                                    <div class="border rounded p-3 bg-light d-flex align-items-start">
                                                                        <div class="preview-image me-3">
                                                                            <img src="" alt="File Preview" class="preview-img" style="max-width: 150px; max-height: 150px; object-fit: cover;">
                                                                            <div class="preview-icon d-none">
                                                                                <iconify-icon icon="bi:file-earmark-pdf" class="text-danger fs-1"></iconify-icon>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <div class="d-flex justify-content-between align-items-start">
                                                                                <div>
                                                                                    <h6 class="preview-filename mb-1 text-truncate" style="max-width: 200px;"></h6>
                                                                                    <p class="preview-filesize text-sm text-muted mb-0"></p>
                                                                                </div>
                                                                                <button type="button" class="btn btn-sm btn-neutral-200 remove-file" data-target="rintekLimbah">
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

                                                    <!-- Izin TPS Limbah B3 (jika ada) -->
                                                    <div class="col-12">
                                                        <div class="card border">
                                                            <div class="card-body">
                                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="d-flex align-items-center justify-content-center bg-primary-600 rounded-circle text-white fw-bold me-2" style="width: 24px; height: 24px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">3</div>
                                                                        <label class="form-label mb-0">Izin TPS Limbah B3 (jika ada)</label>
                                                                    </div>
                                                                </div>
                                                                <div class="position-relative">
                                                                    <div class="input-group file-upload-container">
                                                                        <input type="file" class="form-control file-upload" id="izinTPS">
                                                                        <button class="btn btn-neutral-500 border-neutral-100 upload-btn" type="button" data-target="izinTPS">Upload</button>
                                                                    </div>
                                                                    <div class="wizard-form-error"></div>
                                                                </div>

                                                                <!-- File Preview Section -->
                                                                <div class="file-preview-container mt-3 d-none" id="izinTPSPreview">
                                                                    <div class="border rounded p-3 bg-light d-flex align-items-start">
                                                                        <div class="preview-image me-3">
                                                                            <img src="" alt="File Preview" class="preview-img" style="max-width: 150px; max-height: 150px; object-fit: cover;">
                                                                            <div class="preview-icon d-none">
                                                                                <iconify-icon icon="bi:file-earmark-pdf" class="text-danger fs-1"></iconify-icon>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <div class="d-flex justify-content-between align-items-start">
                                                                                <div>
                                                                                    <h6 class="preview-filename mb-1 text-truncate" style="max-width: 200px;"></h6>
                                                                                    <p class="preview-filesize text-sm text-muted mb-0"></p>
                                                                                </div>
                                                                                <button type="button" class="btn btn-sm btn-neutral-200 remove-file" data-target="izinTPS">
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

                                                     <!-- Rekomendasi Teknis Dokumen Lingkungan -->
                                                    <div class="col-12">
                                                        <div class="card border">
                                                            <div class="card-body">
                                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="d-flex align-items-center justify-content-center bg-primary-600 rounded-circle text-white fw-bold me-2" style="width: 24px; height: 24px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">4</div>
                                                                        <label class="form-label required-field mb-0">Rekomendasi Teknis Dokumen Lingkungan</label>
                                                                    </div>
                                                                </div>
                                                                <div class="position-relative">
                                                                    <div class="input-group file-upload-container">
                                                                        <input type="file" class="form-control wizard-required file-upload" id="rekomtekDokling" required>
                                                                        <button class="btn btn-neutral-500 border-neutral-100 upload-btn" type="button" data-target="rekomtekDokling">Upload</button>
                                                                    </div>
                                                                    <div class="wizard-form-error"></div>
                                                                </div>

                                                                <!-- File Preview Section -->
                                                                <div class="file-preview-container mt-3 d-none" id="rekomtekDoklingPreview">
                                                                    <div class="border rounded p-3 bg-light d-flex align-items-start">
                                                                        <div class="preview-image me-3">
                                                                            <img src="" alt="File Preview" class="preview-img" style="max-width: 150px; max-height: 150px; object-fit: cover;">
                                                                            <div class="preview-icon d-none">
                                                                                <iconify-icon icon="bi:file-earmark-pdf" class="text-danger fs-1"></iconify-icon>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <div class="d-flex justify-content-between align-items-start">
                                                                                <div>
                                                                                    <h6 class="preview-filename mb-1 text-truncate" style="max-width: 200px;"></h6>
                                                                                    <p class="preview-filesize text-sm text-muted mb-0"></p>
                                                                                </div>
                                                                                <button type="button" class="btn btn-sm btn-neutral-200 remove-file" data-target="rekomtekDokling">
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

                                                      <!-- Matriks RKL-RPL -->
                                                    <div class="col-12">
                                                        <div class="card border">
                                                            <div class="card-body">
                                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="d-flex align-items-center justify-content-center bg-primary-600 rounded-circle text-white fw-bold me-2" style="width: 24px; height: 24px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">5</div>
                                                                        <label class="form-label required-field mb-0">Matriks RKL-RPL</label>
                                                                    </div>
                                                                </div>
                                                                <div class="position-relative">
                                                                    <div class="input-group file-upload-container">
                                                                        <input type="file" class="form-control wizard-required file-upload" id="matriksRKLRPL" required>
                                                                        <button class="btn btn-neutral-500 border-neutral-100 upload-btn" type="button" data-target="matriksRKLRPL">Upload</button>
                                                                    </div>
                                                                    <div class="wizard-form-error"></div>
                                                                </div>

                                                                <!-- File Preview Section -->
                                                                <div class="file-preview-container mt-3 d-none" id="matriksRKLRPLPreview">
                                                                    <div class="border rounded p-3 bg-light d-flex align-items-start">
                                                                        <div class="preview-image me-3">
                                                                            <img src="" alt="File Preview" class="preview-img" style="max-width: 150px; max-height: 150px; object-fit: cover;">
                                                                            <div class="preview-icon d-none">
                                                                                <iconify-icon icon="bi:file-earmark-pdf" class="text-danger fs-1"></iconify-icon>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <div class="d-flex justify-content-between align-items-start">
                                                                                <div>
                                                                                    <h6 class="preview-filename mb-1 text-truncate" style="max-width: 200px;"></h6>
                                                                                    <p class="preview-filesize text-sm text-muted mb-0"></p>
                                                                                </div>
                                                                                <button type="button" class="btn btn-sm btn-neutral-200 remove-file" data-target="matriksRKLRPL">
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

                                                     <!-- Site Plan Kegiatan Usaha -->
                                                     <div class="col-12">
                                                        <div class="card border">
                                                            <div class="card-body">
                                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="d-flex align-items-center justify-content-center bg-primary-600 rounded-circle text-white fw-bold me-2" style="width: 24px; height: 24px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">6</div>
                                                                        <label class="form-label required-field mb-0">Site Plan Kegiatan Usaha</label>
                                                                    </div>
                                                                </div>
                                                                <div class="position-relative">
                                                                    <div class="input-group file-upload-container">
                                                                        <input type="file" class="form-control wizard-required file-upload" id="siteplan" required>
                                                                        <button class="btn btn-neutral-500 border-neutral-100 upload-btn" type="button" data-target="siteplan">Upload</button>
                                                                    </div>
                                                                    <div class="wizard-form-error"></div>
                                                                </div>

                                                                <!-- File Preview Section -->
                                                                <div class="file-preview-container mt-3 d-none" id="siteplanPreview">
                                                                    <div class="border rounded p-3 bg-light d-flex align-items-start">
                                                                        <div class="preview-image me-3">
                                                                            <img src="" alt="File Preview" class="preview-img" style="max-width: 150px; max-height: 150px; object-fit: cover;">
                                                                            <div class="preview-icon d-none">
                                                                                <iconify-icon icon="bi:file-earmark-pdf" class="text-danger fs-1"></iconify-icon>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <div class="d-flex justify-content-between align-items-start">
                                                                                <div>
                                                                                    <h6 class="preview-filename mb-1 text-truncate" style="max-width: 200px;"></h6>
                                                                                    <p class="preview-filesize text-sm text-muted mb-0"></p>
                                                                                </div>
                                                                                <button type="button" class="btn btn-sm btn-neutral-200 remove-file" data-target="siteplan">
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
                                        <!-- Dokumen Persyaratan Section -->
                                        <div class="section-card">
                                            <div class="section-header mb-3">
                                                <iconify-icon icon="bi:file-earmark-text" class="section-icon"></iconify-icon>
                                                <h6 class="text-md mb-0">Konfirmasi Dokumen</h6>
                                            </div>
                                            <div class="section-content">
                                                <div class="alert alert-info mb-4" role="alert">
                                                    <div class="d-flex">
                                                        <iconify-icon icon="bi:info-circle-fill" class="me-2 fs-5"></iconify-icon>
                                                        <div>
                                                            <strong>Konfirmasi Dokumen:</strong> Halaman ini menampilkan dokumen yang telah Anda unggah di step sebelumnya.
                                                        </div>
                                                    </div>
                                                </div>

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
                                                                </div>

                                                                <!-- File Preview Section - Always visible in confirmation mode -->
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
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                     <!-- Dokumen Rincian Teknis Limbah B3 dan/atau Limbah Non B3 -->
                                                     <div class="col-12">
                                                        <div class="card border">
                                                            <div class="card-body">
                                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="d-flex align-items-center justify-content-center bg-primary-600 rounded-circle text-white fw-bold me-2" style="width: 24px; height: 24px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">2</div>
                                                                        <label class="form-label required-field mb-0">Dokumen Rincian Teknis Limbah B3 dan/atau Limbah Non B3</label>
                                                                    </div>
                                                                </div>

                                                                <!-- File Preview Section - Always visible in confirmation mode -->
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
                                                                                    <h6 class="preview-filename mb-1 text-truncate" style="max-width: 200px;">Dokumen Rincian Teknis Limbah B3 dan/atau Limbah Non B3.pdf</h6>
                                                                                    <p class="preview-filesize text-sm text-muted mb-0">1.2 MB</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                        <!-- Izin TPS Limbah B3 (jika ada) -->
                                                        <div class="col-12">
                                                            <div class="card border">
                                                                <div class="card-body">
                                                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="d-flex align-items-center justify-content-center bg-primary-600 rounded-circle text-white fw-bold me-2" style="width: 24px; height: 24px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">3</div>
                                                                            <label class="form-label required-field mb-0">Izin TPS Limbah B3 (jika ada)</label>
                                                                        </div>
                                                                    </div>

                                                                    <!-- File Preview Section - Always visible in confirmation mode -->
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
                                                                                        <h6 class="preview-filename mb-1 text-truncate" style="max-width: 200px;">Izin TPS Limbah B3.pdf</h6>
                                                                                        <p class="preview-filesize text-sm text-muted mb-0">1.2 MB</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Rekomendasi Teknis Dokumen Lingkungan -->
                                                        <div class="col-12">
                                                            <div class="card border">
                                                                <div class="card-body">
                                                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="d-flex align-items-center justify-content-center bg-primary-600 rounded-circle text-white fw-bold me-2" style="width: 24px; height: 24px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">4</div>
                                                                            <label class="form-label required-field mb-0">Rekomendasi Teknis Dokumen Lingkungan</label>
                                                                        </div>
                                                                    </div>

                                                                    <!-- File Preview Section - Always visible in confirmation mode -->
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
                                                                                        <h6 class="preview-filename mb-1 text-truncate" style="max-width: 200px;">Rekomendasi Teknis Dokumen Lingkungan.pdf</h6>
                                                                                        <p class="preview-filesize text-sm text-muted mb-0">1.2 MB</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Matriks RKL-RPL -->
                                                        <div class="col-12">
                                                            <div class="card border">
                                                                <div class="card-body">
                                                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="d-flex align-items-center justify-content-center bg-primary-600 rounded-circle text-white fw-bold me-2" style="width: 24px; height: 24px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">5</div>
                                                                            <label class="form-label required-field mb-0">Matriks RKL-RPL</label>
                                                                        </div>
                                                                    </div>

                                                                    <!-- File Preview Section - Always visible in confirmation mode -->
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
                                                                                        <h6 class="preview-filename mb-1 text-truncate" style="max-width: 200px;">Matriks RKL-RPL.pdf</h6>
                                                                                        <p class="preview-filesize text-sm text-muted mb-0">1.2 MB</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="progress mt-2" style="height: 5px;">
                                                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                                                                                </div>
                                                                                <span class="text-success text-xs mt-1 d-block">Berhasil diupload</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>


                                                        <!-- Site Plan Kegiatan Usaha -->
                                                        <div class="col-12">
                                                            <div class="card border">
                                                                <div class="card-body">
                                                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="d-flex align-items-center justify-content-center bg-primary-600 rounded-circle text-white fw-bold me-2" style="width: 24px; height: 24px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">6</div>
                                                                            <label class="form-label required-field mb-0">Site Plan Kegiatan Usaha</label>
                                                                        </div>
                                                                    </div>

                                                                    <!-- File Preview Section - Always visible in confirmation mode -->
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
                                                                                        <h6 class="preview-filename mb-1 text-truncate" style="max-width: 200px;">Site Plan Kegiatan Usaha.pdf</h6>
                                                                                        <p class="preview-filesize text-sm text-muted mb-0">1.2 MB</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group d-flex align-items-center justify-content-end gap-8 mt-4">
                                            <button type="button" class="form-wizard-previous-btn btn btn-neutral-500 border-neutral-100 px-32">Sebelumnya</button>
                                            <button type="button" class="form-wizard-next-btn btn btn-primary-600 px-32" id="btnAjukanPermohonan">Ajukan Permohonan</button>
                                        </div>
                                    </fieldset>

                                    <fieldset class="wizard-fieldset">
                                        <div class="text-center mb-40">
                                            <img src="{{ asset('assets/images/gif/success-img3.gif') }}" alt="" class="gif-image mb-24">
                                            <h6 class="text-md text-neutral-600">Sukses</h6>
                                            <p class="text-neutral-400 text-sm mb-0">Permohonan berhasil dibuat!</p>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-center gap-8">
                                            <a href="{{ route('rintek.index_arahan') }}">
                                                <button type="button" class="form-wizard-submit btn btn-primary-600 px-32">Lihat Permohonan</button>
                                            </a>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                            <!-- Form Wizard End -->
                        </div>
                    </div>
                </div>

            </div>

            <script src="{{ asset('assets/js/pertek/script_dropdown.js') }}"></script>
            <script src="{{ asset('assets/js/pertek/script_fileUpload.js') }}"></script>
            <script src="{{ asset('assets/js/pertek/script_pertanyaan.js') }}"></script>
@endsection
