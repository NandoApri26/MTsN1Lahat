<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Flowbite --}}
    @vite(['resources/css/app.css','resources/js/app.js'])

    {{-- Livewire --}}
    @livewireStyles
    <title>@yield('title')</title>
</head>
<body>

</body>
</html>
