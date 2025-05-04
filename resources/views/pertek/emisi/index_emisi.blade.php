@extends('layout.layout')
@php
    $title='Pertek - Emisi';
    $subTitle = 'Pertek - Emisi';
    $script = '<script>
                    let table = new DataTable("#dataTable");
               </script>';
@endphp

@section('content')

            <div class="card basic-data-table">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <div class="form-check style-check d-flex align-items-center">
                                            <label class="form-check-label">
                                                No
                                            </label>
                                        </div>
                                    </th>
                                    <th scope="col">Nomor Permohonan</th>
                                    <th scope="col">Perusahaan</th>
                                    <th scope="col">Jenis Izin</th>
                                    <th scope="col">Pemohon</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Dok</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check style-check d-flex align-items-center">
                                            <label class="form-check-label">
                                                01
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        {{-- <a href="{{ route('pertek.verifikator_arahan') }}" class="text-primary-600">K24/Verifikator</a> --}}
                                        <a href="{{ route('pertek.detail_emisi') }}" class="text-primary-600 bg-amber-300 rounded-2xl">K23/250120CAEFC3A7E</a>
                                    </td>
                                    <td>
                                            <h6 class="text-md mb-0 fw-medium flex-grow-1">PT ANEKA TAMBANG TBK</h6>
                                    </td>
                                    <td>PERSETUJUAN TEKNIS - PEMENUHAN BAKU MUTU EMISI</td>
                                    <td>Charles Hasibuan</td>
                                    <td>21 Maret 2025</td>
                                    <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Perbaikan Berkas Dikirim Pemohon</span> </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-light-primary text-success" title="Download Dokumen" download>
                                            <iconify-icon icon="material-symbols:description" class="text-xl"></iconify-icon>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

@endsection
