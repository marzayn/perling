@extends('components.frontend.layout')

@section('title', 'Detail Berita & Updates - Sistem Perizinan Lingkungan')
@section('description', 'Sistem Perizinan Lingkungan Dinas Lingkungan Hidup Provinsi DKI Jakarta')
@section('keywords', 'Detail Berita & Updates, DLH, Sistem Perizinan Lingkungan, Dinas Lingkungan Hidup DKI Jakarta')
@section('ogTitle', 'Detail Berita & Updates - Sistem Perizinan Lingkungan')
@section('ogDescription', 'Dinas Lingkungan Hidup DKI Jakarta')
@section('twitterTitle', 'Detail Berita & Updates - Sistem Perizinan Lingkungan')
@section('twitterDescription', 'Dinas Lingkungan Hidup DKI Jakarta')

@section('content')

@include('components.frontend.news.detail_news')
@include('components.frontend.footer')

@endsection
