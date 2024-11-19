<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Personal Notes</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-gummy antialiased m-10 flex justify-center">
    <div class="flex flex-col">
        @session('message')
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative flex items-center gap-2 mb-6"
            role="alert"><x-icons.check /> {{ session('message') }}</div>        
        @endsession
        {{ $slot }}
    </div>
</body>

</html>
