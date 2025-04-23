<!DOCTYPE html>
<html lang="en" data-theme="light">

@include('components.frontend.head')

<body class="bg-white md:bg-[#e3e8f0]">
<main>
    @include('components.frontend.navbar')
    @yield('content')
</main>

@include('components.frontend.script')
@stack('script')

</body>
</html>
