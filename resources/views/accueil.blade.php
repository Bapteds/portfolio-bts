@extends('base')
@section('content')
    <div class="h-[100%] w-[100%] flex justify-center items-center flex-col space-y-32">
        <!-- Texte page d'acceuil -->
        <div class="flex flex-col items-center justify-between space-y-3">
            <div class="flex flex-col space-y-3 justify-between items-center">
                <h1 class="text-white text-7xl tracking-wider font-semibold">Erades Baptiste</h1>
                <h2 class="text-gray-300 text-2xl">Étudiant en BTS SIO - SLAM</h2>
            </div>
        </div>
        <div class="flex justify-center items-center w-[100%] h-[20%]">
            <a type="button" href="{{route('cv')}}" class="bg-button-vio hover:bg-gray-300 duration-200 hover:scale-105 flex items-center justify-center rounded-md font-semibold text-white h-[30%] w-[15%]">En savoir plus</a>
        </div>
    </div>
@endsection
