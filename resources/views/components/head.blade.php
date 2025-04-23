<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Sistem Perizinan Lingkungan' }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- SEO Meta Tags -->
    <meta name="description" content="{{ $description ?? 'Sistem Perizinan Lingkungan Dinas Lingkungan Hidup Provinsi DKI Jakarta' }}" />
    <meta name="keywords" content="{{ $keywords ?? 'Sistem Perizinan Lingkungan, Dinas Lingkungan Hidup DKI Jakarta' }}" />
    <meta name="author" content="Dinas Lingkungan Hidup Provinsi DKI Jakarta" />
    <meta name="robots" content="index, follow" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ $ogTitle ?? 'Sistem Perizinan Lingkungan' }}" />
    <meta property="og:description" content="{{ $ogDescription ?? 'Dinas Lingkungan Hidup Provinsi DKI Jakarta' }}" />
    <meta property="og:image" content="{{ asset('assets/images/logo_color.svg') }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{ $twitterTitle ?? 'Sistem Perizinan Lingkungan' }}" />
    <meta name="twitter:description" content="{{ $twitterDescription ?? 'Dinas Lingkungan Hidup Provinsi DKI Jakarta' }}" />
    <meta name="twitter:image" content="{{ asset('assets/images/logo_color.svg') }}" />

    <link rel="icon" type="image/ico"  href="{{ asset('favicon.ico') }}" sizes="16x16">
    <!-- remix icon font css  -->
    <link rel="stylesheet"  href="{{ asset('assets/css/remixicon.css') }}">
    <!-- BootStrap css -->
    <link rel="stylesheet"  href="{{ asset('assets/css/lib/bootstrap.min.css') }}">
    <!-- Apex Chart css -->
    <link rel="stylesheet"  href="{{ asset('assets/css/lib/apexcharts.css') }}">
    <!-- Data Table css -->
    <link rel="stylesheet"  href="{{ asset('assets/css/lib/dataTables.min.css') }}">

    <!-- Text Editor css -->
    <link rel="stylesheet"  href="{{ asset('assets/css/lib/editor-katex.min.css') }}">
    <link rel="stylesheet"  href="{{ asset('assets/css/lib/editor.atom-one-dark.min.css') }}">
    <link rel="stylesheet"  href="{{ asset('assets/css/lib/editor.quill.snow.css') }}">

    <!-- Date picker css -->
    <link rel="stylesheet"  href="{{ asset('assets/css/lib/flatpickr.min.css') }}">
    <!-- Calendar css -->
    <link rel="stylesheet"  href="{{ asset('assets/css/lib/full-calendar.css') }}">
    <!-- Vector Map css -->
    <link rel="stylesheet"  href="{{ asset('assets/css/lib/jquery-jvectormap-2.0.5.css') }}">
    <!-- Popup css -->
    <link rel="stylesheet"  href="{{ asset('assets/css/lib/magnific-popup.css') }}">
    <!-- Slick Slider css -->
    <link rel="stylesheet"  href="{{ asset('assets/css/lib/slick.css') }}">
    <!-- prism css -->
    <link rel="stylesheet"  href="{{ asset('assets/css/lib/prism.css') }}">
    <!-- file upload css -->
    <link rel="stylesheet"  href="{{ asset('assets/css/lib/file-upload.css') }}">

    <link rel="stylesheet"  href="{{ asset('assets/css/lib/audioplayer.css') }}">
    <!-- main css -->
    <link rel="stylesheet"  href="{{ asset('assets/css/style.css') }}">
    {{-- custom css --}}
    {!! $css ?? '' !!}

    <!-- Include select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
</head>
