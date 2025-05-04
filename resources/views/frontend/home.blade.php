@extends('components.frontend.layout')

@section('title', 'Sistem Perizinan Lingkungan')
@section('description', 'Sistem Perizinan Lingkungan Dinas Lingkungan Hidup Provinsi DKI Jakarta')
@section('keywords', 'Home, DLH, Sistem Perizinan Lingkungan, Dinas Lingkungan Hidup DKI Jakarta')
@section('ogTitle', 'Home - Sistem Perizinan Lingkungan')
@section('ogDescription', 'Dinas Lingkungan Hidup DKI Jakarta')
@section('twitterTitle', 'Home - Sistem Perizinan Lingkungan')
@section('twitterDescription', 'Dinas Lingkungan Hidup DKI Jakarta')

@section('content')

@include('components.frontend.home.popup', ['popup' => $popup])
@include('components.frontend.home.hero', ['heros' => $heros])
@include('components.frontend.home.layanan')
@include('components.frontend.home.faq', ['faqs' => $faqs])
@include('components.frontend.home.news', ['newsItems' => $newsItems, 'videoItems' => $videoItems])
@include('components.frontend.footer')

@endsection
