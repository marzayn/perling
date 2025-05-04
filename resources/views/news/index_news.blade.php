@extends('layout.layout')

@php
    $title='News & Video';
    $subTitle = 'News & Video';
    $script= '<script src="' . asset('assets/js/homeOneChart.js') . '"></script>';
@endphp

@section('content')

<div class="card basic-data-table">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="card-title mb-0">
        </h5>
        <a href="{{ route('news.create_newsvideo') }}">
        <button type="button" class="btn btn-primary-600 radius-8 px-20 py-11">Tambah Postingan</button>
        </a>
    </div>
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
                        <th scope="col">Judul</th>
                        <th scope="col">Thumbnail</th>
                        <th scope="col">Tanggal Upload</th>
                        <th scope="col">Tipe</th>
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
                        {{-- <td><a href="javascript:void(0)" class="text-primary-600" data-bs-toggle="modal" data-bs-target="#detailModal">K24/250319E5CC8C330</a></td> --}}
                        <td>
                            <a href="{{ route('pertek.verifikator_arahan') }}" class="text-primary-600">K24/Verifikator</a>
                            <a href="{{ route('pertek.user_arahan') }}" class="text-primary-600 bg-amber-300 rounded-2xl">65D47C214422D</a>
                        </td>

                        @include('pertek.arahan.modal_detail_arahan')
                        {{-- @include('pertek.arahan.admin_modal_detail_arahan') --}}

                        <td>
                            <div class="d-flex align-items-center">
                                {{-- <img src="{{ asset('assets/images/user-list/user-list1.png') }}" alt="" class="flex-shrink-0 me-12 radius-8"> --}}
                                <h6 class="text-md mb-0 fw-medium flex-grow-1">PT. Permata Hijau</h6>
                            </div>
                        </td>
                        <td>Pembangungan Gedung Baru</td>
                        <td>UKL-UPL</td>
                        <td>Charles Hasibuan</td>
                        <td>21 Maret 2025</td>
                        <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Proses Review Teknis</span> </td>
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
