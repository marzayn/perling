<!DOCTYPE html>
<html lang="en" data-theme="light">

{{-- <x-css css='{!! isset($css) ? $css : "" !!}' /> --}}
<x-head css='{!! isset($css) ? $css : "" !!}' />

<body>

    <x-sidebar />

    <main class="dashboard-main">

        <x-navbar />
        <div class="dashboard-main-body">

            <x-breadcrumb title='{{ isset($title) ? $title : "" }}' subTitle='{{ isset($subTitle) ? $subTitle : "" }}' />

            @yield('content')

        </div>
        <x-footer />

    </main>

    <x-script  script='{!! isset($script) ? $script : "" !!}' />

</body>

</html>
