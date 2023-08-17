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
<body >
    <header class="border-b border-gray-300">
        <div class="flex flex-col px-4 py-2 ">
            <h1 class="text-xl font-bold text-[#004080] ">CLASS RECORD</h1>
            <p class="text-xs text-green-500 font-bold">Prototype</p>
        </div>
    </header>

    <main class="">
        {{$slot}}
    </main>

    <x-flash-messages />
    
</body>
</html>