<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Desafio Laravel - Code</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    @livewireStyles
</head>

<body class="antialiased">
    <nav class="p-5 bg-gray-900 shadow text-white md:flex md:items-center md:justify-between"
         x-data="{ isOpen: false }"

    >
        <div class="flex justify-between items-center">
            <span class="text-lg my-[6px] md:my-0">LolChamps</span>
            <span class="text-3xl cursor-pointer md:hidden block mx-2">
                    <ion-icon name="menu" @click="isOpen = !isOpen" x-show="!isOpen"></ion-icon>
                    <ion-icon name="close" @click="isOpen = !isOpen" x-show="isOpen"></ion-icon>
                </span>
        </div>

        <ul class="md:flex md:items-center md:static absolute bg-gray-900 w-full left-0 md:w-auto md:py-0 py-4 md:pl-0
            pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-50"
            :class="{ 'top-[80px] opacity-100': isOpen, '': !isOpen }"
        >
            <li class="mx-4 my-6 md:my-0">
                <a href="/" class="text-base hover:text-purple-600 duration-500">Home</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-base hover:text-purple-600 duration-500">Players</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="/teams" class="text-base hover:text-purple-600 duration-500">Teams</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-base hover:text-purple-600 duration-500">Championships</a>
            </li>

            <button type="button" class="bg-purple-600 text-white duration-500 px-6 py-2 mx-4 hover:bg-purple-700 rounded">
                Crie seu Time
            </button>
        </ul>
    </nav>
    @yield('content')
    @livewireScripts
</body>

</html>
