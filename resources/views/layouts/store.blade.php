<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>VAVCustoms | Store</title>

        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
        {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen dark:bg-gray-900">
            <livewire:welcome.navigation />
            <div class="fixed bg-white shadow border-b border-gray-200 left-0 top-[60px] w-full">
                <ul class="flex gap-3 px-6 py-3">
                    <li><a wire:navigate href="{{ route('store') }}" class="font-bold">Store Home</a></li>
                    <li><a>Woodwork</a></li>
                    <li><a>Plans</a></li>
                    <li><a>Tools</a></li>
                    <li><a>Merch</a></li>
                </ul>
            </div>
            <main>
                {{ $slot }}
            </main>
        </div>
        <livewire:store.cart />
        @livewireScripts
    </body>
</html>