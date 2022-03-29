@extends('layout.app')

@section('content')
    <section class="bg-gray-900">
        <div class="text-white">
            <div class="max-w-xl mx-auto text-white flex items-center justify-center flex-wrap">
                <div class="my-10">
                    <h1 class="text-4xl font-bold">Construa Times e lute em <span class="text-purple-700 block text-center">Summoners Rift</span></h1>
                </div>
            </div>
            <div class="max-w-xl mx-auto text-white text-lg font-medium text-center">
                <p>Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.
                    Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
            </div>
            <div class="max-w-xl flex items-center mx-auto my-8 justify-center flex-wrap pb-8">
                <div class="rounded-md shadow">
                    <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-purple-800 hover:bg-purple-700 md:py-4 md:text-lg md:px-10"> Monte seu time </a>
                </div>
                <div class="mt-3 sm:mt-0 sm:ml-3">
                    <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-purple-500 hover:bg-purple-600 md:py-4 md:text-lg md:px-10"> Ver times </a>
                </div>
            </div>

            <div class="max-w-7xl mx-auto">
                <div class="flex justify-between">
                    <h3 class="font-bold text-xl mt-16 text-purple-700 text-center">Campeonatos em Andamento</h3>
                    <a href="#" class="font-medium text-lg mt-16 text-purple-500 text-center flex items-center">Acessar Campeonatos <ion-icon name="arrow-forward" class="ml-1"></ion-icon></a>
                </div>
                <div class="flex justify-around items-center flex-wrap sm:justify-center">
                    <!- Cards dos Campeonatos >
                    <div class="flex flex-wrap mt-8">
                        <div class="py-8 px-8 max-w-sm mx-auto bg-white rounded-xl shadow-lg space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6 md:mx-3">
                            <img src="https://www.kindpng.com/picc/m/303-3036811_lck-logo-2018-lck-2019-hd-png-download.png" alt=""
                                 class="block h-24 rounded-full sm:mx-0 sm:shrink-0">
                            <div class="space-y-2">
                                <p class="text-lg text-black font-semibold">
                                    LCK - League of Legends Korea
                                </p>
                                <p class="text-slate-500 font-medium flex items-center">
                                    <ion-icon name="calendar" class="mr-1"></ion-icon> 12/02 - 18/04
                                </p>
                                <button class="px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Acessar</button>
                            </div>
                        </div>
                    </div> <!- Cards dos Campeonatos >

                    <!- Cards dos Campeonatos >
                    <div class="flex flex-wrap mt-8">
                        <div class="py-8 px-8 max-w-sm mx-auto bg-white rounded-xl shadow-lg space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6 md:mx-3">
                            <img src="https://www.kindpng.com/picc/m/303-3036811_lck-logo-2018-lck-2019-hd-png-download.png" alt=""
                                 class="block h-24 rounded-full sm:mx-0 sm:shrink-0">
                            <div class="space-y-2">
                                <p class="text-lg text-black font-semibold">
                                    LCK - League of Legends Korea
                                </p>
                                <p class="text-slate-500 font-medium flex items-center">
                                    <ion-icon name="calendar" class="mr-1"></ion-icon> 12/02 - 18/04
                                </p>
                                <button class="px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Acessar</button>
                            </div>
                        </div>
                    </div> <!- Cards dos Campeonatos >

                    <!- Cards dos Campeonatos >
                    <div class="flex flex-wrap mt-8">
                        <div class="py-9 px-10 max-w-sm mx-auto bg-white rounded-xl shadow-lg space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6 md:mx-3">
                            <img src="https://www.kindpng.com/picc/m/303-3036811_lck-logo-2018-lck-2019-hd-png-download.png" alt=""
                                 class="block h-24 rounded-full sm:mx-0 sm:shrink-0">
                            <div class="space-y-2">
                                <p class="text-lg text-black font-semibold">
                                    LCK - League of Legends Korea
                                </p>
                                <p class="text-slate-500 font-medium flex items-center">
                                    <ion-icon name="calendar" class="mr-1"></ion-icon> 12/02 - 18/04
                                </p>
                                <button class="px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Acessar</button>
                            </div>
                        </div>
                    </div> <!- Cards dos Campeonatos >

                </div>
            </div>
        </div>

    </section>
@endsection
