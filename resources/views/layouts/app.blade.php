<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Personal Notes') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-gummy antialiased">
        <div class="min-h-screen bg-white">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <div class="flex justify-center">
                <div class="w-[500px]">
                    @session('message')
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative flex items-center gap-2 mt-6"
                        role="alert"><x-icons.check /> {{ session('message') }}</div>        
                    @endsession
                </div>
            </div>

            <!-- Page Content -->
            <main class="flex justify-center">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
