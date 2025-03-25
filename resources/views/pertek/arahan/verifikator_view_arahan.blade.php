@extends('layout.layout')
@php
    $title='Permohonan Surat Arahan Persetujuan Teknis - Admin View';
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
                                                    <input type="text" class="form-control radius-8" id="NamaPemohon" value="John Doe" disabled>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-20">
                                                    <label for="Jabatan" class="form-label fw-semibold text-primary-light text-sm mb-8">Jabatan <span class="text-danger-600">*</span></label>
                                                    <input type="text" class="form-control radius-8" id="Jabatan" value="Direktur" disabled>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-20">
                                                    <label for="Email" class="form-label fw-semibold text-primary-light text-sm mb-8">Email <span class="text-danger-600">*</span></label>
                                                    <input type="email" class="form-control radius-8" id="Email" value="john.doe@example.com" disabled>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-20">
                                                    <label for="Telepon" class="form-label fw-semibold text-primary-light text-sm mb-8">Nomor Telepon</label>
                                                    <input type="text" class="form-control radius-8" id="Telepon" value="08123456789" disabled>
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
                                                    <input type="text" class="form-control radius-8" id="NamaKegiatan" value="Pengolahan Limbah Industri" disabled>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-20">
                                                    <label for="JenisKegiatan" class="form-label fw-semibold text-primary-light text-sm mb-8">Jenis Kegiatan <span class="text-danger-600">*</span></label>
                                                    <input type="text" class="form-control radius-8" id="JenisKegiatan" value="Industri Pengolahan" disabled>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-20">
                                                    <label for="PelaksanaKegiatan" class="form-label fw-semibold text-primary-light text-sm mb-8">Pelaksana Kegiatan</label>
                                                    <input type="text" class="form-control radius-8" id="PelaksanaKegiatan" value="PT Example Industries" disabled>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-20">
                                                    <label for="AlamatKegiatan" class="form-label fw-semibold text-primary-light text-sm mb-8">Alamat Kegiatan <span class="text-danger-600">*</span></label>
                                                    <input type="text" class="form-control radius-8" id="AlamatKegiatan" value="Jl. Industri No. 123, Jakarta Utara" disabled>
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
                                                    <select class="form-control radius-8 form-select" id="JenisIzinLingkungan" disabled>
                                                        <option selected>Persetujuan Teknis - Pemenuhan Baku Mutu Air Limbah (Pemanfaatan)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-20">
                                                    <label for="StatusPemodalan" class="form-label fw-semibold text-primary-light text-sm mb-8">Status Pemodalan</label>
                                                    <input type="text" class="form-control radius-8" id="StatusPemodalan" value="PMDN" disabled>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-20">
                                                    <label for="NIB" class="form-label fw-semibold text-primary-light text-sm mb-8">NIB<span class="text-danger-600">*</span></label>
                                                    <input type="text" class="form-control radius-8" id="NIB" value="8123456789012" disabled>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-20">
                                                    <label for="KBLI" class="form-label fw-semibold text-primary-light text-sm mb-8">KBLI <span class="text-danger-600">*</span></label>
                                                    <select class="form-control radius-8 form-select" id="KBLI" disabled>
                                                        <option selected>10293 (lndustri Pembekuan Biota Air Lainnya)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-20">
                                                    <label for="OperasionalKegiatan" class="form-label fw-semibold text-primary-light text-sm mb-8">Operasional Kegiatan<span class="text-danger-600">*</span></label>
                                                    <input type="text" class="form-control radius-8" id="OperasionalKegiatan" value="24 Jam" disabled>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-20">
                                                    <label for="Skala" class="form-label fw-semibold text-primary-light text-sm mb-8">Skala<span class="text-danger-600">*</span></label>
                                                    <input type="text" class="form-control radius-8" id="Skala" value="Menengah" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 2: Persyaratan Izin -->
                        <div class="tab-pane fade" id="persyaratan" role="tabpanel" aria-labelledby="persyaratan-tab" tabindex="0">
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
                                                    <select class="form-select form-select-sm status-dropdown" style="max-width: 160px;">
                                                        <option value="approved" selected data-icon="bi:check-circle-fill" data-color="success">Disetujui</option>
                                                        <option value="revision" data-icon="bi:exclamation-triangle" data-color="warning">Perlu Perbaikan</option>
                                                    </select>
                                                </div>

                                                <script>
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    const statusDropdowns = document.querySelectorAll('.status-dropdown');

                                                    statusDropdowns.forEach(dropdown => {
                                                        // Initialize with proper styling
                                                        styleDropdown(dropdown);

                                                        // Update styling when changed
                                                        dropdown.addEventListener('change', function() {
                                                            styleDropdown(this);
                                                        });
                                                    });

                                                    function styleDropdown(dropdown) {
                                                        const selectedOption = dropdown.options[dropdown.selectedIndex];
                                                        const color = selectedOption.getAttribute('data-color');
                                                        const icon = selectedOption.getAttribute('data-icon');

                                                        // Reset classes
                                                        dropdown.className = 'form-select form-select-sm status-dropdown';

                                                        // Add styling based on selection
                                                        dropdown.classList.add(`bg-${color}-100`, `text-${color}-600`);

                                                        // Create custom appearance with icon
                                                        dropdown.style.borderColor = `var(--bs-${color}-200)`;
                                                        dropdown.style.paddingLeft = '28px'; // Space for icon

                                                        // Add icon through pseudo-element (controlled by CSS)
                                                        const iconStyle = document.createElement('style');
                                                        iconStyle.textContent = `
                                                            .status-dropdown.bg-${color}-100::before {
                                                                content: '';
                                                                position: absolute;
                                                                left: 8px;
                                                                top: 50%;
                                                                transform: translateY(-50%);
                                                                width: 16px;
                                                                height: 16px;
                                                                background: url("https://api.iconify.design/${icon}.svg") no-repeat center center;
                                                                background-size: contain;
                                                            }
                                                        `;

                                                        // Remove any previous custom styles
                                                        const prevStyle = dropdown.nextElementSibling;
                                                        if (prevStyle && prevStyle.tagName === 'STYLE') {
                                                            prevStyle.remove();
                                                        }

                                                        dropdown.parentNode.insertBefore(iconStyle, dropdown.nextSibling);
                                                    }
                                                });
                                                </script>
                                            </div>

                                            <!-- File Preview Section -->
                                            <div class="file-preview-container mt-3">
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
                                                            <div class="d-flex gap-2">
                                                            <a href="#" class="btn btn-sm btn-primary-600 d-flex align-items-center justify-content-center gap-2" target="_blank">
                                                                <iconify-icon icon="bi:eye-fill" class="text-white"></iconify-icon>
                                                                Lihat
                                                            </a>
                                                            </div>
                                                        </div>
                                                        <div class="progress mt-2" style="height: 5px;">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <small class="text-muted d-block">Dokumen telah diverifikasi dan disetujui</small>

                                                <!-- Message Section -->
                                                <div class="mt-3 border-top pt-3">
                                                    <!-- Message History Container -->
                                                    <div class="message-history mb-3">
                                                        <div class="d-flex flex-column gap-3">
                                                             <!-- User Message -->
                                                             <div class="d-flex flex-row-reverse gap-2">
                                                                <div class="avatar avatar-sm bg-primary-600 rounded-circle d-flex align-items-center justify-content-center">
                                                                    <iconify-icon icon="bi:person-fill" class="text-white"></iconify-icon>
                                                                </div>
                                                                <div style="max-width: 85%;">
                                                                    <div class="fw-semibold text-xs mb-1 text-end">Admin Perizinan</div>
                                                                    <div class="bg-primary-50 rounded p-2 px-3">
                                                                        <div>Silahkan upload dokumen pendukung lainnya jika ada</div>
                                                                        <div class="text-muted text-xs mt-1">10:30 AM</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Admin Message -->
                                                            <div class="d-flex gap-2">
                                                                <div class="avatar avatar-sm bg-primary-100 rounded-circle d-flex align-items-center justify-content-center">
                                                                    <iconify-icon icon="bi:person-fill" class="text-primary-600"></iconify-icon>
                                                                </div>
                                                                <div style="max-width: 85%;">
                                                                    <div class="fw-semibold text-xs mb-1">Budi Santoso</div>
                                                                    <div class="bg-light rounded p-2 px-3">
                                                                        <div>Baik, saya akan upload dokumen tambahan</div>
                                                                        <div class="text-muted text-xs mt-1">10:45 AM</div>

                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>

                                                    <!-- Message Input -->
                                                    <div class="d-flex gap-2">
                                                        <textarea class="form-control" rows="2" placeholder="Tulis balasan..."></textarea>
                                                        <button type="button" class="btn btn-sm btn-primary-600 d-flex align-items-center align-self-end">
                                                            Kirim
                                                            <iconify-icon icon="f7:paperplane" class="ms-1 text-white"></iconify-icon>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                            <div class="section-card mb-8">
                                <div class="section-header active">
                                    <iconify-icon icon="material-symbols:timeline" class="section-icon"></iconify-icon>
                                    <h6 class="text-md mb-0">Timeline Status Permohonan</h6>
                                    <button class="btn btn-success">Simpan</button>
                                </div>
                                <div class="section-content p-3">
                                    <div class="timeline-status">
                                        <!-- Item 1: Completed -->
                                        <div class="timeline-item completed">
                                            <div class="timeline-marker"></div>
                                            <div class="timeline-content">
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <h6 class="mb-0">Permohonan Diterima</h6>
                                                    <select class="form-select form-select-sm status-select" style="width: auto;">
                                                        <option value="completed" selected>Completed</option>
                                                        <option value="in-progress">In Progress</option>
                                                        <option value="pending">Pending</option>
                                                        <option value="rejected">Rejected</option>
                                                    </select>
                                                </div>
                                                <p class="text-muted small mb-1">
                                                    21 Mar 2025 - 09:30
                                                </p>
                                                <div class="mb-2">
                                                    <textarea class="form-control form-control-sm mb-2" placeholder="Tambahkan catatan...">Permohonan telah diterima dan diverifikasi</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item 2: Active -->
                                        <div class="timeline-item active">
                                            <div class="timeline-marker"></div>
                                            <div class="timeline-content">
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <h6 class="mb-0">Verifikasi Dokumen</h6>
                                                    <select class="form-select form-select-sm status-select" style="width: auto;">
                                                        <option value="completed">Completed</option>
                                                        <option value="in-progress" selected>In Progress</option>
                                                        <option value="pending">Pending</option>
                                                        <option value="rejected">Rejected</option>
                                                    </select>
                                                </div>
                                                <p class="text-muted small mb-1">
                                                    22 Mar 2025 - 10:15
                                                </p>
                                                <div class="mb-2">
                                                    <textarea class="form-control form-control-sm mb-2" placeholder="Tambahkan catatan...">Sedang dalam proses verifikasi dokumen oleh tim teknis</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item 3: Active -->
                                        <div class="timeline-item active">
                                            <div class="timeline-marker"></div>
                                            <div class="timeline-content">
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <h6 class="mb-0">Perbaikan Dokumen 1</h6>
                                                    <select class="form-select form-select-sm status-select" style="width: auto;">
                                                        <option value="completed">Completed</option>
                                                        <option value="in-progress" selected>In Progress</option>
                                                        <option value="pending">Pending</option>
                                                        <option value="rejected">Rejected</option>
                                                    </select>
                                                </div>
                                                <p class="text-muted small mb-1">
                                                    25 Mar 2025 - 14:30
                                                </p>
                                                <div class="mb-2">
                                                    <textarea class="form-control form-control-sm mb-2" placeholder="Tambahkan catatan...">Pemohon diminta melakukan perbaikan pada dokumen teknis</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item 4: Active -->
                                        <div class="timeline-item active">
                                            <div class="timeline-marker"></div>
                                            <div class="timeline-content">
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <h6 class="mb-0">Perbaikan Dokumen 2</h6>
                                                    <select class="form-select form-select-sm status-select" style="width: auto;">
                                                        <option value="completed">Completed</option>
                                                        <option value="in-progress" selected>In Progress</option>
                                                        <option value="pending">Pending</option>
                                                        <option value="rejected">Rejected</option>
                                                    </select>
                                                </div>
                                                <p class="text-muted small mb-1">
                                                    28 Mar 2025 - 09:45
                                                </p>
                                                <div class="mb-2">
                                                    <textarea class="form-control form-control-sm mb-2" placeholder="Tambahkan catatan...">Perbaikan lanjutan pada dokumen pendukung</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item 5: Active -->
                                        <div class="timeline-item active">
                                            <div class="timeline-marker"></div>
                                            <div class="timeline-content">
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <h6 class="mb-0">Perbaikan Dokumen 3</h6>
                                                    <select class="form-select form-select-sm status-select" style="width: auto;">
                                                        <option value="completed">Completed</option>
                                                        <option value="in-progress" selected>In Progress</option>
                                                        <option value="pending">Pending</option>
                                                        <option value="rejected">Rejected</option>
                                                    </select>
                                                </div>
                                                <p class="text-muted small mb-1">
                                                    02 Apr 2025 - 11:20
                                                </p>
                                                <div class="mb-2">
                                                    <textarea class="form-control form-control-sm mb-2" placeholder="Tambahkan catatan...">Pemohon sedang melakukan perbaikan akhir pada dokumen</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item 6: Penjadwalan with date time picker -->
                                        <div class="timeline-item">
                                            <div class="timeline-marker"></div>
                                            <div class="timeline-content">
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <h6 class="mb-0">Penjadwalan Rapat/Sidang Pembahasan Dokumen Persetujuan Teknis</h6>
                                                    <select class="form-select form-select-sm status-select" style="width: auto;">
                                                        <option value="completed">Completed</option>
                                                        <option value="in-progress">In Progress</option>
                                                        <option value="pending" selected>Pending</option>
                                                        <option value="rejected">Rejected</option>
                                                    </select>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-6">
                                                        <label class="form-label text-sm mb-1">Tanggal Rapat</label>
                                                        <input type="date" class="form-control form-control-sm">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label text-sm mb-1">Jam</label>
                                                        <input type="time" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <textarea class="form-control form-control-sm mb-2" placeholder="Tambahkan catatan...">Menunggu kelengkapan dokumen</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item 7: Pending -->
                                        <div class="timeline-item">
                                            <div class="timeline-marker"></div>
                                            <div class="timeline-content">
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <h6 class="mb-0">Rapat/Sidang Pembahasan Dokumen Persetujuan Teknis</h6>
                                                    <select class="form-select form-select-sm status-select" style="width: auto;">
                                                        <option value="completed">Completed</option>
                                                        <option value="in-progress">In Progress</option>
                                                        <option value="pending" selected>Pending</option>
                                                        <option value="rejected">Rejected</option>
                                                    </select>
                                                </div>
                                                <p class="text-muted small mb-1">-</p>
                                                <div class="mb-2">
                                                    <textarea class="form-control form-control-sm mb-2" placeholder="Tambahkan catatan..."></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item 8: Pending -->
                                        <div class="timeline-item">
                                            <div class="timeline-marker"></div>
                                            <div class="timeline-content">
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <h6 class="mb-0">Perbaikan Dokumen Persetujuan Teknis Hasil Rapat/Sidang</h6>
                                                    <select class="form-select form-select-sm status-select" style="width: auto;">
                                                        <option value="completed">Completed</option>
                                                        <option value="in-progress">In Progress</option>
                                                        <option value="pending" selected>Pending</option>
                                                        <option value="rejected">Rejected</option>
                                                    </select>
                                                </div>
                                                <p class="text-muted small mb-1">-</p>
                                                <div class="mb-2">
                                                    <textarea class="form-control form-control-sm mb-2" placeholder="Tambahkan catatan..."></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Item 9: Pending -->
                                        <div class="timeline-item">
                                            <div class="timeline-marker"></div>
                                            <div class="timeline-content">
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <h6 class="mb-0">Penerbitan Rekomendasi Persetujuan Teknik</h6>
                                                    <select class="form-select form-select-sm status-select" style="width: auto;">
                                                        <option value="completed">Completed</option>
                                                        <option value="in-progress">In Progress</option>
                                                        <option value="pending" selected>Pending</option>
                                                        <option value="rejected">Rejected</option>
                                                    </select>
                                                </div>
                                                <p class="text-muted small mb-1">-</p>
                                                <div class="mb-2">
                                                    <textarea class="form-control form-control-sm mb-2" placeholder="Tambahkan catatan..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <style>
                                .timeline-status {
                                    position: relative;
                                    padding-left: 25px;
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
                                    box-shadow: 0 0 0 4px rgba(40, 167, 69, 0.2);
                                }
                                .timeline-item.rejected .timeline-marker {
                                    background: #dc3545;
                                    box-shadow: 0 0 0 4px rgba(220, 53, 69, 0.2);
                                }
                                .timeline-item.active .timeline-marker {
                                    background: #007bff;
                                    box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.2);
                                }
                                .timeline-content {
                                    padding-left: 10px;
                                }
                                .status-select {
                                    min-width: 120px;
                                }
                            </style>

                            <script>
                                // Add script to handle status changes
                                document.addEventListener('DOMContentLoaded', function() {
                                    const statusSelects = document.querySelectorAll('.status-select');

                                    statusSelects.forEach(select => {
                                        select.addEventListener('change', function() {
                                            const timelineItem = this.closest('.timeline-item');

                                            // Remove all status classes
                                            timelineItem.classList.remove('completed', 'active', 'rejected');

                                            // Add the appropriate class based on selection
                                            if (this.value === 'completed') {
                                                timelineItem.classList.add('completed');
                                            } else if (this.value === 'in-progress') {
                                                timelineItem.classList.add('active');
                                            } else if (this.value === 'rejected') {
                                                timelineItem.classList.add('rejected');
                                            }
                                        });
                                    });
                                });
                            </script>
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
                        <span class="badge bg-warning-100 text-warning-600">Menunggu Revisi</span>
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

                    <!-- Action Buttons -->
                    <div class="d-flex flex-column gap-2 mt-4">
                        <button type="button" class="btn btn-primary-600 d-flex align-items-center justify-content-center gap-2">
                            <iconify-icon icon="bi:check-circle-fill"></iconify-icon>
                            Setujui Permohonan
                        </button>
                        <button type="button" class="btn btn-outline-danger d-flex align-items-center justify-content-center gap-2">
                            <iconify-icon icon="bi:x-circle-fill"></iconify-icon>
                            Tolak Permohonan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
