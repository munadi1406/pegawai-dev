<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hasnur Riung Sinergi</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/png">

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
            <div class="text-5xl text-color1 font-bold w-full text-center" style="text-shadow: 1px 1px 1px #FFC436">
                Hasnur Riung Sinergi
            </div>
            <div class="text-color2 text-lg w-full text-center">Lorem ipsum dolor, sit amet <span
                    class="text-color3 font-semibold">consectetur</span> adipisicing elit.
                <span class="font-semibold">Aperiam, nam!</span>
            </div>
        </div>
        <div class="justify-center items-center lg:flex hidden">
            <img src="{{ asset('assets/images/foto1.jpg') }}" class="w-56 h-56 object-cover -top-32 left-10 relative z-20" />
            <img src="{{ asset('assets/images/foto2.jpg') }}" class="w-56 h-56 object-cover relative z-10" />
            <img src="{{ asset('assets/images/foto3.jpg') }}" class="w-56 h-56 object-cover top-32 right-10 relative z-0" />
        </div>
    </div>
    <div
        class="flex flex-wrap justify-center items-center gap-2 px-2 py-10 bg-gradient-to-b from-color2/10 to-transparent relative">
        <div class=" -top-[150px] sm:-top-[220px] lg:-top-[200px] -left-24 absolute z-20  w-full">
            <img src="{{ asset('assets/images/foto4.png') }}" class="z-20 " />
        </div>
        {{-- <img src="{{ asset('assets/images/foto5.png') }}" class=" w-72 right-0 absolute bottom-0 z-20" /> --}}
        <div
            class="lg:text-color2 bg-color2/40 text-white lg:bg-transparent backdrop-blur-sm rounded-md font-semibold capitalize  text-center text-3xl w-max px-2 py-1 relative z-30">
            our
            business</div>
        <div class="flex flex-wrap justify-center items-center gap-2 p-2">
            <x-cardLandingPage :img="'assets/images/distribution.png'" text="'Logistic'" />
            <x-cardLandingPage :img="'assets/images/forestry.png'" text="'Agro Foresty'" />
            <x-cardLandingPage :img="'assets/images/energy.png'" text="'Energy'" />
            <x-cardLandingPage :img="'assets/images/technology.png'" text="'technology and services'" />
            <x-cardLandingPage :img="'assets/images/education.png'" text="'education'" />
            <x-cardLandingPage :img="'assets/images/consumer.png'" text="'consumer'" />
            <x-cardLandingPage :img="'assets/images/invesment.png'" text="'invesment'" />
        </div>
    </div>
    <div
        class="flex w-full h-max flex-col justify-center items-center gap-2 px-2 py-10 bg-gradient-to-b from-transparent to-color2/10 relative">
        <div class="text-color2 font-semibold capitalize text-center text-3xl w-full p-2">
            our Activty
        </div>
        <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 w-full gap-2 px-4 h-full  ">
            @for ($i = 0; $i < 4; $i++)
                <x-card-news image="assets/images/foto{{ $i + 1 }}.jpg" title="Lorem ipsum dolor sit amet consectetur."
                    link="login"
                    desc="Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dolorem culpa error beatae, iure dolores esse" />
            @endfor
            <div class="md:col-span-2 col-span-1 relative rounded-md overflow-clip md:h-full min-h-[300px] ">
                <img src="{{ asset('assets/images/foto6.jpg') }}"
                    class="w-full h-full absolute top-0 left-0 object-cover z-0" />
                <div class="relative z-10 w-full h-full flex justify-center items-center flex-col">
                    <h4 class="text-2xl font-semibold text-center text-white" style="text-shadow: 1px 1px 1px #FFC436">
                        Ingin Melihat Lebih Banyak ?</h4>
                    <x-link :href="route('login')">
                        {{ __('Lihat Semua') }}
                    </x-link>
                </div>
            </div>
        </div>
    </div>
    <div class="h-16 w-full bg-color3"></div>
    @include('layouts.footerHomepage')
</body>

</html>
