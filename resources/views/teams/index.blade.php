@extends('layout.app')

@section('content')
    <section class="bg-gray-900">
        <div class="text-white">
            <div class="max-w-7xl mx-auto">
                <h1 class="pt-16 text-2xl font-bold px-8">Times Cadastrados</h1>
                <div class="mt-6 flex flex-wrap justify-around items-center sm:justify-center">
                    @foreach($teams as $team)
                        <div class="flex justify-center">
                            <div class="rounded-lg shadow-lg bg-white max-w-xs mx-4 my-6">
                                <a href="#">
                                    <img class="rounded-t-lg h-[200px]" src="{{ asset('images/kabum-logo.png') }}" alt="Logo kabum"/>
                                </a>
                                <div class="p-6">
                                    <h5 class="text-gray-900 text-xl font-medium mb-2">{{ $team->name }}</h5>
                                    <p class="text-gray-700 text-base mb-4 flex items-center mr-2">
                                        <ion-icon name="location-outline"></ion-icon> {{ $team->country }}
                                    </p>
                                    <a href="/teams/{{ $team->id }}" type="button" class=" inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Acessar time</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
