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

<body class="font-sans antialiased max-w-screen-sm min-h-screen mx-auto bg-gray-300">
    <div class="w-full h-full flex flex-col bg-white">
        @isset($header)
            <header>
                {{ $header }}
            </header>
        @endisset

        <main class="py-8 min-h-screen bg-gray-300 border-x border-black">
            {{ $slot }}
        </main>

        <footer class="px-8 h-20 bg-white shadow sticky bottom-0">
            @include('layouts.navigation')
        </footer>
    </div>

    {{--
    <div class="min-h-screen bg-gray-100">
        <!-- Navigation -->
        <div class="bg-white border-b">
            @include('layouts.navigation')
        </div>

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-full mx-auto py-4 px-4">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main class="px-4 py-6">
            <div class="max-w-full mx-auto">
                {{ $slot }}
            </div>
        </main>
    </div>
    --}}

</body>

</html>
