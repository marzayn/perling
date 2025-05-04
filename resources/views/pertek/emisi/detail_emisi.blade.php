@extends('layout.layout')
@php
    $title='Permohonan Surat Arahan Persetujuan Teknis';
    $subTitle = 'Permohonan Surat Arahan Persetujuan Teknis';
    $css = '<link rel="stylesheet" href="' . asset('assets/css/custom.css') . '">';
@endphp

@section('content')
    <div class="row gy-4">
        <div class="col-md-8">
            <div class="card p-0 overflow-hidden position-relative radius-12 h-100">
                <div class="card-header py-16 px-24 bg-base border border-end-0 border-start-0 border-top-0">
                    <h6 class="text-lg mb-0">Detail Permohonan</h6>
                </div>
                <div class="card-body p-24 pt-10">
                    <!-- Tab Navigation -->
                    <ul class="nav button-tab nav-pills mb-16" id="permohonan-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-flex align-items-center gap-2 fw-semibold text-primary-light radius-4 px-16 py-10 active" id="info-pemohon-tab" data-bs-toggle="pill" data-bs-target="#info-pemohon" type="button" role="tab" aria-controls="info-pemohon" aria-selected="true">
                                <iconify-icon icon="bi:person-fill" class="text-xl"></iconify-icon>
                                <span class="line-height-1">Informasi Pemohon</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-flex align-items-center gap-2 fw-semibold text-primary-light radius-4 px-16 py-10" id="persyaratan-tab" data-bs-toggle="pill" data-bs-target="#persyaratan" type="button" role="tab" aria-controls="persyaratan" aria-selected="false">
                                <iconify-icon icon="bi:file-earmark-text" class="text-xl"></iconify-icon>
                                <span class="line-height-1">Persyaratan Izin</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-flex align-items-center gap-2 fw-semibold text-primary-light radius-4 px-16 py-10" id="pertanyaan-tab" data-bs-toggle="pill" data-bs-target="#pertanyaan" type="button" role="tab" aria-controls="pertanyaan" aria-selected="false">
                                <iconify-icon icon="bi:patch-question" class="text-xl"></iconify-icon>
                                <span class="line-height-1">Pertanyaan</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-flex align-items-center gap-2 fw-semibold text-primary-light radius-4 px-16 py-10" id="timeline-tab" data-bs-toggle="pill" data-bs-target="#timeline" type="button" role="tab" aria-controls="timeline" aria-selected="false">
                                <iconify-icon icon="material-symbols:timeline" class="text-xl"></iconify-icon>
                                <span class="line-height-1">Timeline</span>
                            </button>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content" id="permohonan-tabs-content">
                        <!-- Tab 1: Informasi Pemohon -->
                        <div class="tab-pane fade show active" id="info-pemohon" role="tabpanel" aria-labelledby="info-pemohon-tab" tabindex="0">
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
                                                    <label for="NamaPemohon" class="form-label fw-semibold text-primary-light text-sm mb-8">Nama Pemohon <span class="text-danger-600">*</span></label>
                                                    <input type="text" class="form-control radius-8" id="NamaPemohon" value="John Doe">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-20">
                                                    <label for="Jabatan" class="form-label fw-semibold text-primary-light text-sm mb-8">Jabatan <span class="text-danger-600">*</span></label>
                                                    <input type="text" class="form-control radius-8" id="Jabatan" value="Direktur">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-20">
                                                    <label for="Email" class="form-label fw-semibold text-primary-light text-sm mb-8">Email <span class="text-danger-600">*</span></label>
                                                    <input type="email" class="form-control radius-8" id="Email" value="john.doe@example.com">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-20">
                                                    <label for="Telepon" class="form-label fw-semibold text-primary-light text-sm mb-8">Nomor Telepon</label>
                                                    <input type="text" class="form-control radius-8" id="Telepon" value="08123456789">
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
                                                    <label for="NamaKegiatan" class="form-label fw-semibold text-primary-light text-sm mb-8">Nama Kegiatan <span class="text-danger-600">*</span></label>
                                                    <input type="text" class="form-control radius-8" id="NamaKegiatan" value="Pengolahan Limbah Industri" >
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-20">
                                                    <label for="JenisKegiatan" class="form-label fw-semibold text-primary-light text-sm mb-8">Jenis Kegiatan <span class="text-danger-600">*</span></label>
                                                    <input type="text" class="form-control radius-8" id="JenisKegiatan" value="Industri Pengolahan" >
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-20">
                                                    <label for="PelaksanaKegiatan" class="form-label fw-semibold text-primary-light text-sm mb-8">Pelaksana Kegiatan</label>
                                                    <input type="text" class="form-control radius-8" id="PelaksanaKegiatan" value="PT Example Industries" >
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-20">
                                                    <label for="AlamatKegiatan" class="form-label fw-semibold text-primary-light text-sm mb-8">Alamat Kegiatan <span class="text-danger-600">*</span></label>
                                                    <input type="text" class="form-control radius-8" id="AlamatKegiatan" value="Jl. Industri No. 123, Jakarta Utara" >
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
                                                    <label for="JenisIzinLingkungan" class="form-label fw-semibold text-primary-light text-sm mb-8">Jenis Izin Lingkungan <span class="text-danger-600">*</span></label>
                                                    <select class="form-control radius-8 form-select" id="JenisIzinLingkungan" >
                                                        <option selected>Persetujuan Teknis - Pemenuhan Baku Mutu Air Limbah (Pemanfaatan)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-20">
                                                    <label for="StatusPemodalan" class="form-label fw-semibold text-primary-light text-sm mb-8">Status Pemodalan</label>
                                                    <input type="text" class="form-control radius-8" id="StatusPemodalan" value="PMDN" >
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-20">
                                                    <label for="NIB" class="form-label fw-semibold text-primary-light text-sm mb-8">NIB<span class="text-danger-600">*</span></label>
                                                    <input type="text" class="form-control radius-8" id="NIB" value="8123456789012" >
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-20">
                                                    <label for="KBLI" class="form-label fw-semibold text-primary-light text-sm mb-8">KBLI <span class="text-danger-600">*</span></label>
                                                    <select class="form-control radius-8 form-select" id="KBLI" >
                                                        <option selected>10293 (lndustri Pembekuan Biota Air Lainnya)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-20">
                                                    <label for="OperasionalKegiatan" class="form-label fw-semibold text-primary-light text-sm mb-8">Operasional Kegiatan<span class="text-danger-600">*</span></label>
                                                    <input type="text" class="form-control radius-8" id="OperasionalKegiatan" value="24 Jam" >
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-20">
                                                    <label for="Skala" class="form-label fw-semibold text-primary-light text-sm mb-8">Skala<span class="text-danger-600">*</span></label>
                                                    <input type="text" class="form-control radius-8" id="Skala" value="Menengah" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 2: Persyaratan Izin -->
                        <div class="tab-pane fade" id="persyaratan" role="tabpanel" aria-labelledby="persyaratan-tab" tabindex="0">
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
                                    </div>
                                </div>
                            </div>

                            <div class="form-group d-flex align-items-center justify-content-end gap-8 mt-4">
                                <button type="button" class="form-wizard-previous-btn btn btn-neutral-500 border-neutral-100 px-32">Sebelumnya</button>
                                <button type="button" class="form-wizard-next-btn btn btn-primary-600 px-32">Berikutnya</button>
                            </div>
                        </fieldset>
                        </div>

                        <!-- Tab 3: Pertanyaan -->
                        <div class="tab-pane fade" id="pertanyaan" role="tabpanel" aria-labelledby="pertanyaan-tab" tabindex="0">
                            <div class="section-card mb-8">
                                <div class="section-header active">
                                    <iconify-icon icon="bi:question-circle-fill" class="section-icon"></iconify-icon>
                                    <h6 class="text-md mb-0">Pertanyaan dan Jawaban</h6>
                                </div>
                                <div class="section-content p-3">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-20">
                                                <label class="form-label fw-semibold text-primary-light text-sm mb-8">Apakah berada di lokasi kawasan industri?</label>
                                                <div class="form-control-plaintext">Ya</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-20">
                                                <label class="form-label fw-semibold text-primary-light text-sm mb-8">Apakah masuk dalam Kawasan Lindung?</label>
                                                <div class="form-control-plaintext">Tidak</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-20">
                                                <label class="form-label fw-semibold text-primary-light text-sm mb-8">Apakah masuk dalam PIPPIB?</label>
                                                <div class="form-control-plaintext">Tidak</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-20">
                                                <label class="form-label fw-semibold text-primary-light text-sm mb-8">Apakah melakukan pengumpulan limbah B3?</label>
                                                <div class="form-control-plaintext">Ya</div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="mb-20">
                                                <label class="form-label fw-semibold text-primary-light text-sm mb-8">Apakah melakukan pengolahan air limbah?</label>
                                                <div class="form-control-plaintext">Ya</div>
                                            </div>
                                        </div>

                                        <!-- Additional details for "Ya" response -->
                                        <div class="col-12">
                                            <div class="card border border-primary-100 rounded-3 p-3 mb-20">
                                                <div class="row">
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="mb-20">
                                                            <label class="form-label fw-semibold text-primary-light text-sm mb-8">Jumlah IPAL yang telah beroperasi?</label>
                                                            <div class="form-control-plaintext">2 Unit</div>
                                                        </div>
                                                        <div class="mb-20">
                                                            <label class="form-label fw-semibold text-primary-light text-sm mb-8">Keterangan</label>
                                                            <div class="form-control-plaintext">IPAL beroperasi sejak tahun 2020 dengan kapasitas 100 m³/hari</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="mb-20">
                                                            <label class="form-label fw-semibold text-primary-light text-sm mb-8">
                                                                Apakah sebelumnya mempunyai izin IPAL?
                                                            </label>
                                                            <div class="form-control-plaintext">Ya</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="mb-20">
                                                <label class="form-label fw-semibold text-primary-light text-sm mb-8">Apakah menghasilkan emisi?</label>
                                                <div class="form-control-plaintext">Ya</div>
                                            </div>
                                        </div>

                                        <!-- Additional details for emisi -->
                                        <div class="col-12">
                                            <div class="card border border-primary-100 rounded-3 p-3 mb-20">
                                                <div class="row">
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="mb-20">
                                                            <label class="form-label fw-semibold text-primary-light text-sm mb-8">Keterangan</label>
                                                            <div class="form-control-plaintext">Emisi dari mesin diesel dan proses produksi</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="mb-20">
                                                <label class="form-label fw-semibold text-primary-light text-sm mb-8">Apakah menghasilkan Limbah B3?</label>
                                                <div class="form-control-plaintext">Ya</div>
                                            </div>
                                        </div>

                                        <!-- Additional details for limbah B3 -->
                                        <div class="col-12">
                                            <div class="card border border-primary-100 rounded-3 p-3 mb-20">
                                                <div class="row">
                                                    <div class="col-sm-12 mb-3">
                                                        <div class="mb-20">
                                                            <label class="form-label fw-semibold text-primary-light text-sm mb-8">Keterangan</label>
                                                            <div class="form-control-plaintext">Limbah B3 berupa oli bekas, kemasan bekas bahan kimia, dan sludge dari IPAL</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 4: Timeline -->
                        <div class="tab-pane fade" id="timeline" role="tabpanel" aria-labelledby="timeline-tab" tabindex="0">
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
                                                        <h6 class="mb-0">Pembuatan Surat Tanggapan
                                                            Arahan Persetujuan Teknis
                                                        </h6>
                                                        <p class="text-muted small mb-0">22 Maret 2025 - 14:15</p>
                                                        <p class="small">Dokumen telah diverifikasi oleh admin</p>
                                                    </div>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="timeline-marker"></div>
                                                    <div class="timeline-content">
                                                        <h6 class="mb-0">Penerbitan Surat Tanggapan
                                                            Arahan Persetujuan Teknis</h6>
                                                            <p class="text-muted small mb-0">22 Maret 2025 - 15:00</p>
                                                        <p class="small">Proses permohonan selesai</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </fieldset>
                        </div>
                    </div>
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
                                <span class="text-md fw-medium">K23/250120CAEFC3A7E</span>
                            </div>
                            <div class="mb-3">
                                <span class="d-block text-neutral-500 mb-1 text-sm">Jenis Izin</span>
                                <span class="text-md fw-medium">SERTIFIKAT LAIK OPERASI - PEMENUHAN BAKU MUTU AIR LIMBAH (PEMANFAATAN)</span>
                            </div>
                            <div class="mb-3">
                                <span class="d-block text-neutral-500 mb-1 text-sm">Tipe Perizinan</span>
                                <span class="text-md fw-medium">Perusahaan/Yayasan/Pemerintahan</span>
                            </div>
                            <div class="mb-3">
                                <span class="d-block text-neutral-500 mb-1 text-sm">Status</span>
                                <span class="badge bg-warning-100 text-warning-600">Substansi Disetujui Tim Sekre LH</span>
                            </div>
                            <div class="mb-3">
                                <span class="d-block text-neutral-500 mb-1 text-sm">Alamat Maps</span>
                                <span class="text-md fw-medium">Jl. Kapten Tendean No.20C, RW.3, Kuningan Bar., Kec. Mampang Prpt., Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12710, Indonesia</span>
                            </div>
                            <div class="mb-3">
                                <span class="d-block text-neutral-500 mb-1 text-sm">Tanggal Pengajuan</span>
                                <span class="text-md">{{ date('d/m/Y') }}</span>
                            </div>
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
@endsection
