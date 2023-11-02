<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div class="grid md:grid-cols-2 grid-cols-1">
        <div class="h-screen p-2 border md:block hidden">
            <div class="bg-blue-300 p-2 h-full rounded-md">
                <p class="text-3xl font-semibold text-white ">Sistem Informasi Kepegawaian</p>
            </div>
        </div>
        <div
            class="relative border h-screen flex justify-center items-center">
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="text-white bg-blue-600 hover:bg-white hover:text-blue-600 transition-all focus:outline-2 focus:outline-blue-600 ease-out duration-200 rounded-md font-semibold py-2 px-3">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="text-white bg-blue-600 hover:bg-white hover:text-blue-600 transition-all focus:outline-2 focus:outline-blue-600 ease-out duration-200 rounded-md font-semibold py-2 px-3">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</body>

</html>
