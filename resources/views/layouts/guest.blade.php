<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <style>
        body{
            background: #fdba74;
        }
    </style>
    <body>
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <img class="max-w-min pb-5 h-20 justify-center" src="{{ url('/images/logocienergies.png') }}">
            <div class="w-full sm:max-w-md mt-6 px-6 py-6 shadow-md overflow-hidden sm:rounded-lg bg-white">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
