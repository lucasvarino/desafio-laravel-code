@extends('layout.app')

@section('content')
    <section class="bg-gray-900">
        <div class="text-white max-w-7xl">
            <div class="flex items-center justify-center pt-8 mx-auto flex-wrap">
                <img src="{{ asset('images/kabum-logo.png') }}" alt="" class="rounded-full h-[200px]">
                <div>
                    <h1 class="font-bold text-3xl ml-5">{{ $team->name }}</h1>
                    <p class="ml-5 font-light">{{ $team->wins }} W / {{ $team->loses }} L</p>
                </div>
            </div>
            <h3 class="font-bold text-2xl ml-5 mt-12">Jogadores</h3>
            <div class="mt-8 flex flex-wrap justify-around">
                @foreach ($players as $player)
                <div class="flex justify-center">
                    <div class="rounded-lg shadow-lg bg-white max-w-xs mx-4 my-6">
                        <a href="#">
                            <img src="{{ asset('images/roles/' . '0' . '.png' ) }}" class="h-[150px]">
                        </a>
                        <div class="p-6">
                            <h5 class="text-gray-900 text-xl font-medium mb-1">{{ $player->name }}</h5>
                                <p class="font-normal text-black mb-2">{{ $player->wins }} W / {{ $player->loses }} L</p>
                            <a href="/teams/{{ $player->id }}" type="button" class=" inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Acessar jogador</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            @foreach ($championships as $championship)
            <h3 class="font-bold text-2xl ml-5 mt-12">Campeonatos ativos</h3>
            <div class="flex flex-wrap mt-8">
                <div class="py-8 px-8 max-w-sm mx-auto bg-white rounded-xl shadow-lg space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6 md:mx-3">
                    <img src="https://www.kindpng.com/picc/m/303-3036811_lck-logo-2018-lck-2019-hd-png-download.png" alt=""
                         class="block h-24 rounded-full sm:mx-0 sm:shrink-0">
                    <div class="space-y-2">
                        <p class="text-lg text-black font-semibold">
                            {{ $championship->name }}
                        </p>
                        <p class="text-slate-500 font-medium flex items-center">
                            <ion-icon name="calendar" class="mr-1"></ion-icon> {{ date('d/m', strtotime($championship->start_date)) }} - {{ date('d/m', strtotime($championship->finish_date)) }}
                        </p>
                        <a href="/championships/{{ $championship->id }}"><button class="px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Acessar</button></a>
                    </div>
                </div>
            </div> <!- Cards dos Campeonatos >    
            @endforeach
            
        </div>
    </section>
@endsection