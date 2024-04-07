@extends('base')
@section('content')
    <div class="h-[100vh] w-[100%] items-center flex flex-col justify-around overflow-y-scroll">
        <div class="w-[80%] text-left uppercase font-semibold text-button-vio text-3xl pt-2">
            <h1>Ma veille technologique:</h1>
        </div>
        <div class="h-[33vh] w-[80%] bg-light-gray rounded-md flex items-center justify-center">
            <div class="h-[94%] w-[98%] flex justify-center bg-light-black rounded-md">
                <div class="h-[99%] w-[100%] flex flex-col rounded-md shadow-sm  justify-center items-center">
                    <div class="h-[15%] w-[98%] bg-light-gray rounded-t-md flex flex-row">
                        <div class="w-24 flex flew-row items-center justify-around text-center pl-2">
                            <div class="w-5 h-5 rounded-full bg-red-500 flex items-center justify-center">
                            </div>
                            <div class="w-5 h-5 rounded-full bg-yellow-400 flex items-center justify-center">
                            </div>
                            <div class="w-5 h-5 rounded-full bg-green-500 flex items-center justify-center">
                            </div>
                        </div>
                        <div class="w-[77%] flex items-center pl-2 font-semibold text-gray-200">
                            <h1>Qu'est-ce que la veille technologique ?</h1>
                        </div>
                    </div>
                    <section
                        class="h-[75%] w-[98%] bg-light-black border-b-2 border-x-2 border-light-gray rounded-b-md flex flex-row space-x-6 pl-2 pr-2 overflow-x-scroll">
                        <p class="text-white text-xl tracking-wide text-justify w-[95%] leading-relaxed pt-3 ">
                            La veille technologique consiste à surveiller continuellement les évolutions ou les nouveautés dans un certain secteur d'activité, en utilisant divers outils technologiques ou matériels. Elle peut être utile pour maintenir ou mettre à jour des systèmes d'information, garantir leur disponibilité tout en anticipant les futures nouveautés.
                            <br><br>
                            Pour ma veille technologique, j'ai utilisé divers outils disponibles gratuitement sur le Web. Parmi ces outils, on retrouve YouTube, GitHub et les sites officiels des produits sur lesquels j'ai pu veiller.
                        </p>
                    </section>
                </div>
            </div>
        </div>
        <div class="h-[55vh] w-[80%] bg-light-gray flex items-center justify-center rounded-md">
            <div class="h-[94%] w-[98%] flex justify-center bg-light-black rounded-md">
                <div class="h-[99%] w-[100%] flex flex-col rounded-md shadow-sm  justify-center items-center">
                    <div class="h-[10%] w-[98%] bg-light-gray rounded-t-md flex flex-row">
                        <div class="w-24 flex flew-row items-center justify-around text-center pl-2">
                            <div class="w-5 h-5 rounded-full bg-red-500 flex items-center justify-center">
                            </div>
                            <div class="w-5 h-5 rounded-full bg-yellow-400 flex items-center justify-center">
                            </div>
                            <div class="w-5 h-5 rounded-full bg-green-500 flex items-center justify-center">
                            </div>
                        </div>
                        <div class="w-[77%] flex items-center pl-2 font-semibold text-gray-200">
                            <h1>Mes outils</h1>
                        </div>
                    </div>
                    <div
                        class="h-[85%] w-[98%] bg-light-black border-b-2 border-x-2 border-light-gray rounded-b-md flex flex-col space-y-5 p-2 overflow-y-scroll">
                        <div
                            class="min-h-[200px] w-[100%] bg-light-gray rounded-md items-center justify-around flex flex-row">
                            <div class="w-[18%] h-[90%] bg-light-black hover:scale-105 duration-200 hover:rounded-lg"><a target="_blanck"
                                    class="font-semibold uppercase text-blanc text-lg justify-around items-center h-[100%] flex flex-col w-[100%]"
                                    href="https://youtube.com/@LaravelJutsu?si=n4tYoeZ9J_zMbE3c">
                                    <img class="w-28 h-28 rounded-full "
                                        src="{{ Vite::asset('resources/img/pp_yt/youtube.png') }}">
                                    Laravel Jutsu</a></div>
                            <div class="w-[18%] h-[90%] bg-light-black hover:scale-105 duration-200 hover:rounded-lg"><a target="_blanck"
                                    class="font-semibold uppercase text-blanc text-lg justify-around items-center h-[100%] flex flex-col w-[100%]"
                                    href="https://youtube.com/@grafikart?si=X8wyuvGhBJBWJWFx">
                                    <img class="w-28 h-28 rounded-full "
                                        src="{{ Vite::asset('resources/img/pp_yt/youtube.png') }}">
                                    Grafikart</a></div>
                            <div class="w-[18%] h-[90%] bg-light-black hover:scale-105 duration-200 hover:rounded-lg"><a target="_blanck"
                                    class="font-semibold uppercase text-blanc text-lg justify-around items-center h-[100%] flex flex-col w-[100%]"
                                    href="https://youtube.com/@grafikart?si=X8wyuvGhBJBWJWFx">
                                    <img class="w-28 h-28 rounded-full "
                                        src="{{ Vite::asset('resources/img/pp_yt/youtube.png') }}">
                                    Xavki</a></div>
                            <div class="w-[18%] h-[90%] bg-light-black hover:scale-105 duration-200 hover:rounded-lg"><a target="_blanck"
                                    class="font-semibold uppercase text-blanc text-lg justify-around items-center h-[100%] flex flex-col w-[100%]"
                                    href="https://github.com/laravel/laravel">
                                    <img class="w-28 h-28 rounded-full "
                                        src="{{ Vite::asset('resources/img/svg/github.svg') }}">
                                    Laravel</a></div>
                            <div class="w-[18%] h-[90%] bg-light-black hover:scale-105 duration-200 hover:rounded-lg"><a target="_blanck"
                                    class="font-semibold uppercase text-blanc text-lg justify-around items-center h-[100%] flex flex-col w-[100%]"
                                    href="https://laravel.com">
                                    <img class="w-28 h-28 rounded-full "
                                        src="{{ Vite::asset('resources/img/svg/Laravel-Dark.svg') }}">
                                    Laravel</a></div>
                        </div>
                        <div
                            class="min-h-[200px] w-[100%] bg-light-gray rounded-md items-center justify-around flex flex-row">
                            <div class="w-[18%] h-[90%] bg-light-black hover:scale-105 duration-200 hover:rounded-lg"><a target="_blanck"
                                    class="font-semibold uppercase text-blanc text-lg justify-around items-center h-[100%] flex flex-col w-[100%]"
                                    href="https://php.net">
                                    <img class="w-28 h-28 rounded-full "
                                        src="{{ Vite::asset('resources/img/svg/PHP-Dark.svg') }}">
                                    PHP</a></div>
                            <div class="w-[18%] h-[90%] bg-light-black hover:scale-105 duration-200 hover:rounded-lg"><a target="_blanck"
                                    class="font-semibold uppercase text-blanc text-lg justify-around items-center h-[100%] flex flex-col w-[100%]"
                                    href="https://intel.fr">
                                    <img class="w-28 h-28 rounded-md"
                                        src="{{ Vite::asset('resources/img/svg/intel.svg') }}">
                                    Intel</a></div>
                            <div class="w-[18%] h-[90%] bg-light-black hover:scale-105 duration-200 hover:rounded-lg"><a target="_blanck"
                                    class="font-semibold uppercase text-blanc text-lg justify-around items-center h-[100%] flex flex-col w-[100%]"
                                    href="https://apple.fr">
                                    <img class="w-28 h-28 rounded-md"
                                        src="{{ Vite::asset('resources/img/svg/apple-2.svg') }}">
                                    Apple</a></div>
                            <div class="w-[18%] h-[90%] bg-light-black hover:scale-105 duration-200 hover:rounded-lg"> <a target="_blanck"
                                    class="font-semibold uppercase text-blanc text-lg justify-around items-center h-[100%] flex flex-col w-[100%]"
                                    href="https://www.frandroid.com">
                                    <img class="w-28 h-28 rounded-full"
                                        src="{{ Vite::asset('resources/img/pp_yt/frandroid.webp') }}">
                                    Frandroid</a></div>
                            <div class="w-[18%] h-[90%] bg-light-black hover:scale-105 duration-200 hover:rounded-lg"><a target="_blanck"
                                    class="font-semibold uppercase text-blanc text-lg justify-around items-center h-[100%] flex flex-col w-[100%]"
                                    href="https://www.lesnumeriques.com">
                                    <img class="w-28 h-28 rounded-md"
                                        src="{{ Vite::asset('resources/img/pp_yt/les_numeriques.png') }}">
                                    Les Numériques</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
