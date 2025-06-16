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
        <div class="min-h-screen flex  sm:justify-center items-center pt-6 sm:pt-0" id="div_principal">

            <div class="Acceder">
                <h2>ACCEDER</h2>
                {{ $slot }}
            </div>
            
        </div>
            
    </body>
    <div>
        @component('components.footer')
        @endcomponent
    </div>
</html>
<style>
    #div_principal{
        background-color: #ffff;

    }
    .Acceder{
        width: 459px;
        height: 61px;
        background: #F5F5F5;
    }
    .Acceder h2 {
        color: #000;
    font-family: 'Inter', sans-serif;
    font-size: 26px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    width: 137px;
height: 37px;
flex-shrink: 0;
    }
    
</style>
