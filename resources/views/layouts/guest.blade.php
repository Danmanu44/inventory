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
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div style="box-shadow: 0 4px 6px rgba(0, 0, 255, 0.1);" class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-lg sm:rounded-lg">

                <div class="text-center">
                    <a href="/">
                        <img src="{{ asset('assets/images/Logo_General.JPG') }}" alt="Inventory Logo" class="w-28 h-28 sm:w-30 sm:h-30 mx-auto min-w-20 min-h-20 max-w-40 max-h-40 rounded-full">
                    </a>
                    <h1 class="text-2xl font-bold mt-4 text-gray-900">Inventory Management System</h1>
                    <p class="mt-2 text-lg text-gray-600">Some fantastic text goes here!</p>
                </div>
            
                <div class="w-full mt-6">
                    {{ $slot }}
                </div>
            </div>
            
        </div>
    </body>
</html>
