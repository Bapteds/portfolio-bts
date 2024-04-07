@extends('base')
@section('content')
    <div class="h-[100vh] w-[100%] items-center flex justify-center ">
        <div class="w-[90%] h-[90vh] flex flex-row justify-around items-center rounded-md shadow-sm ">
            <div class="w-[95%] h-[100%] flex items-center bg-light-gray rounded-md flex-col">
                <div class="h-[6%] w-[95%] bg-light-gray rounded-t-md flex flex-row">
                    <div class="w-24 flex flew-row items-center justify-around text-center pl-2">
                        <div class="w-5 h-5 rounded-full bg-red-500 flex items-center justify-center hover:scale-110 duration-200 hover:bg-red-700">
                            <a class="font-thin" href="{{route('realisations')}}">X</a>
                        </div>
                        <div class="w-5 h-5 rounded-full bg-yellow-400 flex items-center justify-center">
                        </div>
                        <div class="w-5 h-5 rounded-full bg-green-500 flex items-center justify-center">
                        </div>
                    </div>
                    <div class="w-[77%] flex items-center pl-2 font-semibold text-gray-200">
                        <h1 class="uppercase font-semibold text-xl text-blanc">{{$real}}</h1>
                    </div>
                </div>
                <div class="h-[90%] w-[96%]  flex items-center justify-center  rounded-md">
                    <div id="default-carousel" class="relative w-full h-[100%] bg-light-black rounded-md"
                        data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-[100%]  overflow-hidden rounded-lg">
                            @foreach ($images as $img)
                                <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/' . $real . '/' . $img) }}">
                                </div>
                            @endforeach
                        </div>
                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-3 h-3 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-next>
                            <span
                                class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-3 h-3 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
