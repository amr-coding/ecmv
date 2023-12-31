<!DOCTYPE html>
<html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- Include the navigation -->
    <div class="w-full min-h-screen font-sans text-gray-900 bg-gray-50 flex">

        {{-- include from layouts nav.blade.php layout --}}
        @include('layouts.vendor.nav')

        <!-- Main Content Area -->
        {{-- <main class="">
            {{ $slot }}
        </main> --}}
        @yield('content')
        <!-- Include the footer -->
        @include('layouts.vendor.footer')
    </div>
</body>

</html>
