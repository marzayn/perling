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
                                                <span class="text text-xs fw-semibold">Konfirmasi</span>
                                            </li>
                                        </ul>
                                    </div>





                                    <fieldset class="wizard-fieldset show">
                                        <!-- Data Penanggung Jawab Section -->
                                        <div class="section-card">
                                            <div class="section-header active" data-bs-toggle="collapse" href="#dataPenanggungJawab" role="button" aria-expanded="true" aria-controls="dataPenanggungJawab">
                                                <iconify-icon icon="bi:person-fill" class="section-icon"></iconify-icon>
                                                <h6 class="text-md mb-0">Data Penanggung Jawab</h6>
                                                <iconify-icon icon="bi:chevron-down" class="ms-auto dropdown-arrow rotated"></iconify-icon>
                                            </div>
                                            <div class="collapse show" id="dataPenanggungJawab">
                                                <div class="section-content">
                                                    <div class="row gy-4">
                                                        <div class="col-sm-6">
                                                            <label class="form-label required-field">NIK</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control wizard-required" placeholder="31.73.06.540867.0005" required>
                                                                <div class="wizard-form-error"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="form-label required-field">NPWP</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control wizard-required" placeholder="18.304.111.0-034.000_" required>
                                                                <div class="wizard-form-error"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="form-label required-field">Nama</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control wizard-required" placeholder="Nama Lengkap" required>
                                                                <div class="wizard-form-error"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="form-label required-field">Nomor Telepon / HP</label>
                                                            <div class="position-relative input-group">
                                                                <span class="input-group-text bg-light border-end-0">
                                                                    <iconify-icon icon="bi:phone" class="text-muted"></iconify-icon>
                                                                </span>
                                                                <input type="text" class="form-control border-start-0" placeholder="08xxxxxxxxx" required>
                                                                <div class="wizard-form-error"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="form-label required-field">Alamat</label>
                                                            <div class="position-relative">
                                                                <textarea class="form-control wizard-required" placeholder="Alamat lengkap" rows="3" required></textarea>
                                                                <div class="wizard-form-error"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="form-label required-field">Email</label>
                                                            <div class="position-relative input-group">
                                                                <span class="input-group-text bg-light border-end-0">
                                                                    <iconify-icon icon="bi:envelope" class="text-muted"></iconify-icon>
                                                                </span>
                                                                <input type="email" class="form-control border-start-0" placeholder="email@example.com" required>
                                                                <div class="wizard-form-error"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="form-label required-field">RT</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control wizard-required" placeholder="009" required>
                                                                <div class="wizard-form-error"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="form-label required-field">RW</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control wizard-required" placeholder="013" required>
                                                                <div class="wizard-form-error"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="form-label required-field">Kode Pos</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control wizard-required" placeholder="11830" required>
                                                                <div class="wizard-form-error"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label required-field">Wilayah</label>
                                                            <div class="position-relative input-group">
                                                                <span class="input-group-text bg-light border-end-0">
                                                                    <iconify-icon icon="bi:geo-alt" class="text-muted"></iconify-icon>
                                                                </span>
                                                                <input type="text" class="form-control border-start-0" placeholder="PEGADUNGAN, KALI DERES, KOTA JAKARTA BARAT, DKI JAKARTA" required>
                                                                <div class="wizard-form-error"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Data Perusahaan Section -->
                                        <div class="section-card">
                                            <div class="section-header" data-bs-toggle="collapse" href="#dataPerusahaan" role="button" aria-expanded="false" aria-controls="dataPerusahaan">
                                                <iconify-icon icon="bi:building" class="section-icon"></iconify-icon>
                                                <h6 class="text-md mb-0">Data Perusahaan</h6>
                                                <iconify-icon icon="bi:chevron-down" class="ms-auto dropdown-arrow"></iconify-icon>
                                            </div>
                                            <div class="collapse" id="dataPerusahaan">
                                                <div class="section-content">
                                                    <div class="row gy-4">
                                                        <div class="col-sm-6">
                                                            <label class="form-label required-field">Nama Perusahaan</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control wizard-required" placeholder="Nama Perusahaan" required>
                                                                <div class="wizard-form-error"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="form-label required-field">NPWP Perusahaan</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control wizard-required" placeholder="00.000.000.0-000.000" required>
                                                                <div class="wizard-form-error"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label required-field">Alamat Perusahaan</label>
                                                            <div class="position-relative input-group">
                                                                <span class="input-group-text bg-light border-end-0">
                                                                    <iconify-icon icon="bi:pin-map" class="text-muted"></iconify-icon>
                                                                </span>
                                                                <textarea class="form-control border-start-0 wizard-required" placeholder="Alamat lengkap perusahaan" rows="3" required></textarea>
                                                                <div class="wizard-form-error"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="form-label required-field">Email Perusahaan</label>
                                                            <div class="position-relative input-group">
                                                                <span class="input-group-text bg-light border-end-0">
                                                                    <iconify-icon icon="bi:envelope" class="text-muted"></iconify-icon>
                                                                </span>
                                                                <input type="email" class="form-control border-start-0" placeholder="perusahaan@example.com" required>
                                                                <div class="wizard-form-error"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="form-label required-field">Nomor Telepon Perusahaan</label>
                                                            <div class="position-relative input-group">
                                                                <span class="input-group-text bg-light border-end-0">
                                                                    <iconify-icon icon="bi:telephone" class="text-muted"></iconify-icon>
                                                                </span>
                                                                <input type="text" class="form-control border-start-0" placeholder="(021) xxxxxxxx" required>
                                                                <div class="wizard-form-error"></div>
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
                                                                <div class="position-relative">
                                                                    <div class="input-group">
                                                                        <input type="file" class="form-control wizard-required file-upload" id="dokumenTeknis" required>
                                                                        <button class="btn btn-neutral-500 border-neutral-100 upload-btn" type="button" data-target="dokumenTeknis">Upload</button>
                                                                    </div>
                                                                    <div class="wizard-form-error"></div>
                                                                </div>

                                                                <!-- File Preview Section -->
                                                                <div class="file-preview-container mt-3 d-none" id="dokumenTeknisPreview">
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
                                                                            <!-- Messages will appear here -->
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
                                                                <div class="position-relative">
                                                                    <div class="input-group">
                                                                        <input type="file" class="form-control wizard-required file-upload" id="suratPernyataan" required>
                                                                        <button class="btn btn-neutral-500 border-neutral-100 upload-btn" type="button" data-target="suratPernyataan">Upload</button>
                                                                    </div>
                                                                    <div class="wizard-form-error"></div>
                                                                </div>

                                                                <!-- File Preview Section -->
                                                                <div class="file-preview-container mt-3 d-none" id="suratPernyataanPreview">
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
                                                                            <!-- Messages will appear here -->
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
                                                                    {{-- <div class="d-flex align-items-center">
                                                                        <span class="badge bg-neutral-200 text-neutral-600 text-lg d-flex align-items-center">
                                                                            <iconify-icon icon="bi:hourglass-bottom" class="me-1"></iconify-icon>
                                                                            Belum Diperiksa
                                                                        </span>
                                                                    </div> --}}
                                                                </div>
                                                                <div class="position-relative">
                                                                    <div class="input-group">
                                                                        <input type="file" class="form-control file-upload" id="dokumenPendukung">
                                                                        <button class="btn btn-neutral-500 border-neutral-100 upload-btn" type="button" data-target="dokumenPendukung">Upload</button>
                                                                    </div>
                                                                </div>

                                                                <!-- File Preview Section -->
                                                                <div class="file-preview-container mt-3 d-none" id="dokumenPendukungPreview">
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
                                        <div class="text-center mb-40">
                                            <img src="{{ asset('assets/images/gif/success-img3.gif') }}" alt="" class="gif-image mb-24">
                                            <h6 class="text-md text-neutral-600">Congratulations </h6>
                                            <p class="text-neutral-400 text-sm mb-0">Well done! You have successfully completed.</p>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-end gap-8">
                                            <button type="button" class="form-wizard-previous-btn btn btn-neutral-500 border-neutral-100 px-32">Back</button>
                                            <button type="button" class="form-wizard-submit btn btn-primary-600 px-32">Publish</button>
                                        </div>
                                    </fieldset>
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

            <script src="{{ asset('assets/js/dashboard/script_dropdown.js') }}"></script>
            <script src="{{ asset('assets/js/dashboard/script_fileUpload.js') }}"></script>
@endsection
