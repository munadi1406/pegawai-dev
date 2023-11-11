<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hasnur Riung Sinergi</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    @include('layouts.homeNavigation')
    <div class="relative w-full h-[90vh] overflow-clip grid lg:grid-cols-2 grid-cols-1 bg-white">
        <div class="w-full h-full flex justify-center items-center flex-col">
            <div class="text-5xl text-color1 font-bold " style="text-shadow: 1px 1px 1px #FFC436">
                Hasnur Riung Sinergi
            </div>
            <div class="text-color2 text-lg w-full text-center">Lorem ipsum dolor, sit amet <span
                    class="text-color3 font-semibold">consectetur</span> adipisicing elit.
                <span class="font-semibold">Aperiam, nam!</span>
            </div>
        </div>
        <div class="justify-center items-center lg:flex hidden">
            <img src="{{ asset('images/foto1.jpg') }}" class="w-56 h-56 object-cover -top-32 left-10 relative z-20" />
            <img src="{{ asset('images/foto2.jpg') }}" class="w-56 h-56 object-cover relative z-10" />
            <img src="{{ asset('images/foto3.jpg') }}" class="w-56 h-56 object-cover top-32 right-10 relative z-0" />
        </div>
    </div>
    <div
        class="flex flex-wrap justify-center items-center gap-2 px-2 py-10 bg-gradient-to-b from-color2/10 to-transparent relative">
        <img src="{{ asset('images/foto4.png') }}" class="-top-56 left-0 absolute  z-20" />
        {{-- <img src="{{ asset('images/foto5.png') }}" class=" w-72 right-0 absolute bottom-0 z-20" /> --}}
        <div class="text-color2 font-semibold capitalize text-center text-3xl w-full p-2">our
            business</div>
        <div class="flex flex-wrap justify-center items-center gap-2 p-2">
            <x-cardLandingPage :img="'images/distribution.png'" text="'Logistic'" />
            <x-cardLandingPage :img="'images/forestry.png'" text="'Agro Foresty'" />
            <x-cardLandingPage :img="'images/energy.png'" text="'Energy'" />
            <x-cardLandingPage :img="'images/technology.png'" text="'technology and services'" />
            <x-cardLandingPage :img="'images/education.png'" text="'education'" />
            <x-cardLandingPage :img="'images/consumer.png'" text="'consumer'" />
            <x-cardLandingPage :img="'images/invesment.png'" text="'invesment'" />
        </div>
    </div>
    <div
        class="flex flex-wrap justify-center items-center gap-2 px-2 py-10 bg-gradient-to-b from-transparent to-color2/10 relative">
        <div class="text-color2 font-semibold capitalize text-center text-3xl w-full p-2">our
            Activty</div>
    </div>
</body>

</html>
