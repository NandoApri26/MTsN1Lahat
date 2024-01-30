<!doctype html>
<html lang="en">
<head>
    @include('templating.header')

    <title>@yield('title')</title>
</head>
<body class="bg-gray-200">
    @include('templating.navbar')

    <div class="">
        @yield('content')
    </div>

    {{-- Livewire Script --}}
    @livewireScripts
</body>
</html>
