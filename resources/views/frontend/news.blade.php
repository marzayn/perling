@extends('components.frontend.layout')

@section('title', 'Berita & Updates - Sistem Perizinan Lingkungan')
@section('description', 'Sistem Perizinan Lingkungan Dinas Lingkungan Hidup Provinsi DKI Jakarta')
@section('keywords', 'Berita & Updates, DLH, Sistem Perizinan Lingkungan, Dinas Lingkungan Hidup DKI Jakarta')
@section('ogTitle', 'Berita & Updates - Sistem Perizinan Lingkungan')
@section('ogDescription', 'Dinas Lingkungan Hidup DKI Jakarta')
@section('twitterTitle', 'Berita & Updates - Sistem Perizinan Lingkungan')
@section('twitterDescription', 'Dinas Lingkungan Hidup DKI Jakarta')

@section('content')

@include('components.frontend.news.index_news')
@include('components.frontend.footer')

@endsection


@push('script')
<script src="{{ asset('assets/js/frontend/news/newsvideo.js') }}"></script>
@endpush

