<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'class record') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <div class="flex flex-col px-4 py-2 rounded bg-blue-800">
            <h1 class="text-xl font-bold text-white">Class Record</h1>
            <p class="text-xs text-green-500 font-bold">Prototype</p>
        </div>
    </header>

    <main>
        {{$slot}}
    </main>
    
</body>
</html>