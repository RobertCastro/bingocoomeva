<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css') }}">

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen sm:items-center sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Iniciar sesión</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrarse</a>
            @endif
            @endif
        </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <img src="/img/grupo-coomeva-logo.png" alt="Inicio" class="h-16 w-auto text-gray-700 sm:h-20">

            </div>

            <div class="container">
                <x-search />
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>