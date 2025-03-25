<!-- Detail Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Detail Permohonan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Tab Navigation -->
                <ul class="nav button-tab nav-pills mb-16" id="detailModalTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link d-flex align-items-center gap-2 fw-semibold text-primary-light radius-4 px-16 py-10 active" id="detail-tab" data-bs-toggle="tab" data-bs-target="#detail-pane" type="button" role="tab" aria-controls="detail-pane" aria-selected="true">
                            <iconify-icon icon="hugeicons:folder-details" class="text-xl"></iconify-icon>
                            <span class="line-height-1">Data Pemohon</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link d-flex align-items-center gap-2 fw-semibold text-primary-light radius-4 px-16 py-10" id="timeline-tab" data-bs-toggle="tab" data-bs-target="#timeline-pane" type="button" role="tab" aria-controls="timeline-pane" aria-selected="false">
                            <iconify-icon icon="material-symbols:timeline" class="text-xl"></iconify-icon>
                            <span class="line-height-1">Timeline Status</span>
                        </button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content" id="detailModalTabContent">
                    <!-- Detail Permohonan Tab -->
                    <div class="tab-pane fade show active" id="detail-pane" role="tabpanel" aria-labelledby="detail-tab">
                        <div class="row mb-3">
                            <div class="col-md-4 fw-bold">Nomor Permohonan</div>
                            <div class="col-md-8">K24/250319E5CC8C330</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 fw-bold">Perusahaan</div>
                            <div class="col-md-8">PT. Permata Hijau</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 fw-bold">Nama Kegiatan</div>
                            <div class="col-md-8">Pembangungan Gedung Baru</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 fw-bold">Tipe Perizinan</div>
                            <div class="col-md-8">UKL-UPL</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 fw-bold">Pemohon</div>
                            <div class="col-md-8">Charles Hasibuan</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 fw-bold">Tanggal Pengajuan</div>
                            <div class="col-md-8">21 Maret 2025</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 fw-bold">Status</div>
                            <div class="col-md-8"><span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Proses</span></div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 fw-bold">Deskripsi</div>
                            <div class="col-md-8">Permohonan arahan teknis untuk pembangunan gedung baru sesuai dengan regulasi UKL-UPL.</div>
                        </div>
                    </div>

                    <!-- Timeline Status Tab -->
                    <div class="tab-pane fade" id="timeline-pane" role="tabpanel" aria-labelledby="timeline-tab">
                        <form id="updateStatusForm" method="POST" action="#">
                            @csrf
                            <input type="hidden" name="permohonan_id" value="ID_PERMOHONAN">

                            <div class="timeline-status">
                                <!-- Item 1: Completed -->
                                <div class="timeline-item completed">
                                    <div class="timeline-marker"></div>
                                    <div class="timeline-content">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h6 class="mb-0">Permohonan Diterima</h6>
                                            <select name="status[1]" class="form-select form-select-sm status-select" style="width: 140px;">
                                                <option value="pending">Pending</option>
                                                <option value="active">In Progress</option>
                                                <option value="completed" selected>Completed</option>
                                                <option value="rejected">Rejected</option>
                                            </select>
                                        </div>
                                        <p class="text-muted small mb-1">
                                            21 Mar 2025 - 09:30
                                        </p>
                                        <div class="mb-2">
                                            <textarea name="notes[1]" class="form-control form-control-sm" placeholder="Tambahkan catatan (opsional)" rows="2">Permohonan telah diterima dan diverifikasi</textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item 2: Active -->
                                <div class="timeline-item active">
                                    <div class="timeline-marker"></div>
                                    <div class="timeline-content">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h6 class="mb-0">Verifikasi Dokumen</h6>
                                            <select name="status[2]" class="form-select form-select-sm status-select" style="width: 140px;">
                                                <option value="pending">Pending</option>
                                                <option value="active" selected>In Progress</option>
                                                <option value="completed">Completed</option>
                                                <option value="rejected">Rejected</option>
                                            </select>
                                        </div>
                                        <p class="text-muted small mb-1">
                                            22 Mar 2025 - 10:15
                                        </p>
                                        <div class="mb-2">
                                            <textarea name="notes[2]" class="form-control form-control-sm" placeholder="Tambahkan catatan (opsional)" rows="2">Sedang dalam proses verifikasi dokumen oleh tim teknis</textarea>
                                        </div>
                                    </div>
                                </div>

                                  <!-- Item 2: Active -->
                                  <div class="timeline-item active">
                                    <div class="timeline-marker"></div>
                                    <div class="timeline-content">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h6 class="mb-0">Perbaikan Dokumen 1</h6>
                                            <select name="status[2]" class="form-select form-select-sm status-select" style="width: 140px;">
                                                <option value="pending">Pending</option>
                                                <option value="active" selected>In Progress</option>
                                                <option value="completed">Completed</option>
                                                <option value="rejected">Rejected</option>
                                            </select>
                                        </div>
                                        <p class="text-muted small mb-1">
                                            22 Mar 2025 - 10:15
                                        </p>
                                        <div class="mb-2">
                                            <textarea name="notes[2]" class="form-control form-control-sm" placeholder="Tambahkan catatan (opsional)" rows="2">Sedang dalam proses verifikasi dokumen oleh tim teknis</textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 2: Active -->
                                <div class="timeline-item active">
                                    <div class="timeline-marker"></div>
                                    <div class="timeline-content">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h6 class="mb-0">Perbaikan Dokumen 2</h6>
                                            <select name="status[2]" class="form-select form-select-sm status-select" style="width: 140px;">
                                                <option value="pending">Pending</option>
                                                <option value="active" selected>In Progress</option>
                                                <option value="completed">Completed</option>
                                                <option value="rejected">Rejected</option>
                                            </select>
                                        </div>
                                        <p class="text-muted small mb-1">
                                            22 Mar 2025 - 10:15
                                        </p>
                                        <div class="mb-2">
                                            <textarea name="notes[2]" class="form-control form-control-sm" placeholder="Tambahkan catatan (opsional)" rows="2">Sedang dalam proses verifikasi dokumen oleh tim teknis</textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item 2: Active -->
                                <div class="timeline-item active">
                                    <div class="timeline-marker"></div>
                                    <div class="timeline-content">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h6 class="mb-0">Perbaikan Dokumen 3</h6>
                                            <select name="status[2]" class="form-select form-select-sm status-select" style="width: 140px;">
                                                <option value="pending">Pending</option>
                                                <option value="active" selected>In Progress</option>
                                                <option value="completed">Completed</option>
                                                <option value="rejected">Rejected</option>
                                            </select>
                                        </div>
                                        <p class="text-muted small mb-1">
                                            22 Mar 2025 - 10:15
                                        </p>
                                        <div class="mb-2">
                                            <textarea name="notes[2]" class="form-control form-control-sm" placeholder="Tambahkan catatan (opsional)" rows="2">Sedang dalam proses verifikasi dokumen oleh tim teknis</textarea>
                                        </div>
                                    </div>
                                </div>

                                 <!-- Item 2: Active -->
                                 <div class="timeline-item active">
                                    <div class="timeline-marker"></div>
                                    <div class="timeline-content">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h6 class="mb-0"> Penjadwalan
                                                Rapat/SIdang Pembahasan
                                                Dokumen Persetujuan Teknis </h6>
                                            <select name="status[2]" class="form-select form-select-sm status-select" style="width: 140px;">
                                                <option value="pending">Pending</option>
                                                <option value="active" selected>In Progress</option>
                                                <option value="completed">Completed</option>
                                                <option value="rejected">Rejected</option>
                                            </select>
                                        </div>
                                        <p class="text-muted small mb-1">
                                            22 Mar 2025 - 10:15
                                        </p>
                                        <div class="mb-2">
                                            <textarea name="notes[2]" class="form-control form-control-sm" placeholder="Tambahkan catatan (opsional)" rows="2">Sedang dalam proses verifikasi dokumen oleh tim teknis</textarea>
                                        </div>
                                    </div>
                                </div>

                                 <!-- Item 2: Active -->
                                 <div class="timeline-item active">
                                    <div class="timeline-marker"></div>
                                    <div class="timeline-content">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h6 class="mb-0"> Rapat/SIdang Pembahasan
                                                Dokumen Persetujuan Teknis </h6>
                                            <select name="status[2]" class="form-select form-select-sm status-select" style="width: 140px;">
                                                <option value="pending">Pending</option>
                                                <option value="active" selected>In Progress</option>
                                                <option value="completed">Completed</option>
                                                <option value="rejected">Rejected</option>
                                            </select>
                                        </div>
                                        <p class="text-muted small mb-1">
                                            22 Mar 2025 - 10:15
                                        </p>
                                        <div class="mb-2">
                                            <textarea name="notes[2]" class="form-control form-control-sm" placeholder="Tambahkan catatan (opsional)" rows="2">Sedang dalam proses verifikasi dokumen oleh tim teknis</textarea>
                                        </div>
                                    </div>
                                </div>

                                 <!-- Item 2: Active -->
                                 <div class="timeline-item active">
                                    <div class="timeline-marker"></div>
                                    <div class="timeline-content">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h6 class="mb-0"> Perbaikan Dokumen
                                                persetujuan Teknis hasil dari
                                                rapat/sidang </h6>
                                            <select name="status[2]" class="form-select form-select-sm status-select" style="width: 140px;">
                                                <option value="pending">Pending</option>
                                                <option value="active" selected>In Progress</option>
                                                <option value="completed">Completed</option>
                                                <option value="rejected">Rejected</option>
                                            </select>
                                        </div>
                                        <p class="text-muted small mb-1">
                                            22 Mar 2025 - 10:15
                                        </p>
                                        <div class="mb-2">
                                            <textarea name="notes[2]" class="form-control form-control-sm" placeholder="Tambahkan catatan (opsional)" rows="2">Sedang dalam proses verifikasi dokumen oleh tim teknis</textarea>
                                        </div>
                                    </div>
                                </div>


                                <!-- Item 3: Pending -->
                                <div class="timeline-item">
                                    <div class="timeline-marker"></div>
                                    <div class="timeline-content">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h6 class="mb-0">Tinjauan Lapangan</h6>
                                            <select name="status[3]" class="form-select form-select-sm status-select" style="width: 140px;" disabled>
                                                <option value="pending" selected>Pending</option>
                                                <option value="active">In Progress</option>
                                                <option value="completed">Completed</option>
                                                <option value="rejected">Rejected</option>
                                            </select>
                                        </div>
                                        <p class="text-muted small mb-1">
                                            -
                                        </p>
                                        <div class="mb-2">
                                            <textarea name="notes[3]" class="form-control form-control-sm" placeholder="Tambahkan catatan (opsional)" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item 4: Pending -->
                                <div class="timeline-item">
                                    <div class="timeline-marker"></div>
                                    <div class="timeline-content">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h6 class="mb-0">Penerbitan Arahan Teknis</h6>
                                            <select name="status[4]" class="form-select form-select-sm status-select" style="width: 140px;" disabled>
                                                <option value="pending" selected>Pending</option>
                                                <option value="active">In Progress</option>
                                                <option value="completed">Completed</option>
                                                <option value="rejected">Rejected</option>
                                            </select>
                                        </div>
                                        <p class="text-muted small mb-1">
                                            -
                                        </p>
                                        <div class="mb-2">
                                            <textarea name="notes[4]" class="form-control form-control-sm" placeholder="Tambahkan catatan (opsional)" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const statusSelects = document.querySelectorAll('.status-select');
                                statusSelects.forEach(select => {
                                    select.addEventListener('change', function() {
                                        const timelineItem = this.closest('.timeline-item');

                                        // Remove all status classes
                                        timelineItem.classList.remove('completed', 'active', 'rejected');

                                        // Add class based on selected status
                                        if (this.value === 'completed') {
                                            timelineItem.classList.add('completed');
                                        } else if (this.value === 'active') {
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
        box-shadow: 0 0 0 4px rgba(0,123,255,0.2);
    }
    .timeline-item.rejected .timeline-marker {
        background: #ff1100;
        box-shadow: 0 0 0 4px rgba(0,123,255,0.2);
    }
    .timeline-item.active .timeline-marker {
        background: #007bff;
        box-shadow: 0 0 0 4px rgba(0,123,255,0.2);
    }
    .timeline-content {
        padding-left: 10px;
    }
</style>
