@extends('base')
@section('content')
    <div class=" w-[100%] h-[2733px] flex flex-col justify-center ">
        <div class="h-[100%] w-[98%] flex flex-col items-center  space-y-8 pt-3 pb-3 ">
            <div class="w-[95%] text-left uppercase font-semibold text-button-vio text-3xl pt-2">
                <h1>Mes réalisations:</h1>
            </div>
            <div class="w-[90%] h-[350px] bg-light-gray flex flex-row justify-around items-center rounded-md shadow-sm ">
                <div class="w-[47%] h-[100%] flex justify-center items-center">
                    <div class="h-[90%] w-[99%]  flex items-center justify-center  rounded-md">
                        <div id="default-carousel" class="relative w-full h-[100%] bg-light-black rounded-md"
                            data-carousel="static">
                            <!-- Carousel wrapper -->
                            <div class="relative h-[100%] overflow-hidden rounded-lg">
                                <!-- Item 1 -->
                                <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/nolark/nolark2.png') }}" class="h-[100%]"
                                        alt="...">
                                </div>
                                <!-- Item 2 -->
                                <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/nolark/nolarkaccueil.png') }}" class="h-[100%]"
                                        alt="...">
                                </div>
                                <!-- Item 3 -->
                                <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/nolark/nolarkcasque.png') }}" class="h-[100%]"
                                        alt="...">
                                </div>
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
                <div class="w-[47%] h-[90%] rounded-md flex items-center justify-center bg-light-black">
                    <div class="w-[93%] h-[85%] flex items-center justify-center flex-col space-y-3  ">
                        <a class="font-bold underline hover:text-gray-300 duration-200 uppercase text-start w-[95%] text-button-vio text-2xl"
                            href="{{ route('realisations.image', 'nolark') }}">Nolark - <span class="font-bold">BTS 1</span></a>
                        <h1 class="text-white text-md tracking-wide text-justify w-[95%] leading-relaxed">Site vitrine
                            Nolark : un site vitrine pour une entreprise de vente de casques. Celui-ci a été conçu pour
                            toucher une clientèle plus large et proposer un catalogue complet de casques. Le projet a été
                            développé durant le BTS et permet d'apprendre les bases du HTML, du CSS et du JavaScript.</h1>
                        <h2 class="text-gray-300 text-left w-[95%] pt-1"><span
                                class="text-button-vio uppercase font-bold text-lg">Téchnologies :</span> <br> PHP, HTML,
                            CSS, JavaScript, Versionnage </h2>
                    </div>
                </div>
            </div>
            <div class="w-[90%] h-[350px] bg-light-gray flex flex-row justify-around items-center rounded-md shadow-sm ">
                <div class="w-[47%] h-[90%] rounded-md flex items-center justify-center bg-light-black">
                    <div class="w-[93%] h-[85%] flex items-center justify-center flex-col space-y-3  ">
                        <a class="font-bold underline hover:text-gray-300 duration-200 uppercase text-start w-[95%] text-button-vio text-2xl"
                            href="{{ route('realisations.image', 'chocolatein') }}">Chocolate'In - <span class="font-bold">BTS 2</span></a>
                        <h1 class="text-white text-md tracking-wide text-justify w-[95%] leading-relaxed">Site vitrine
                            Chocolate'In : un site vitrine pour une entreprise de vente de chocolat. Il permet aux
                            utilisateurs de naviguer sur le site et de découvrir des chocolats. Le projet a été développé
                            durant le BTS et permet d'apprendre les bases du HTML, du CSS, du PHP et du SQL.</h1>
                        <h2 class="text-gray-300 text-left w-[95%] pt-1"><span
                                class="text-button-vio uppercase font-bold text-lg">Téchnologies :</span> <br> PHP, HTML,
                            CSS, Mysql, Versionnage </h2>
                    </div>
                </div>
                <div class="w-[47%] h-[100%] flex justify-center items-center">
                    <div class="h-[90%] w-[99%]  flex items-center justify-center  rounded-md">
                        <div id="default-carousel" class="relative w-full h-[100%] bg-light-black rounded-md"
                            data-carousel="static">
                            <!-- Carousel wrapper -->
                            <div class="relative h-[100%] overflow-hidden rounded-lg">
                                <!-- Item 1 -->
                                <div class=" duration-700 ease-in-out flex items-center justify-center" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/chocolatein/accueil.png') }}"
                                        class=" h-[100%]  " alt="...">
                                </div>
                                <!-- Item 2 -->
                                <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/chocolatein/horaires.png') }}" class="h-[100%]"
                                        alt="...">
                                </div>

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

            <div class="w-[90%] h-[350px] bg-light-gray flex flex-row justify-around items-center rounded-md shadow-sm ">
                <div class="w-[47%] h-[100%] flex justify-center items-center">
                    <div class="h-[90%] w-[99%]  flex items-center justify-center  rounded-md">
                        <div id="default-carousel" class="relative w-full h-[100%] bg-light-black rounded-md"
                            data-carousel="static">
                            <!-- Carousel wrapper -->
                            <div class="relative h-[100%] overflow-hidden rounded-lg">
                                <!-- Item 1 -->
                                <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/gsb/connexiongsb.png') }}" class="h-[100%]"
                                        alt="...">
                                </div>
                                <!-- Item 2 -->
                                <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/gsb/listefichefrais.png') }}" class="h-[100%]"
                                        alt="...">
                                </div>
                                <!-- Item 3 -->
                                <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/gsb/renseigner.png') }}" class="h-[100%]"
                                        alt="...">
                                </div>
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
                <div class="w-[47%] h-[90%] rounded-md flex items-center justify-center bg-light-black">
                    <div class="w-[93%] h-[85%] flex items-center justify-center flex-col space-y-3  ">
                        <a class="font-bold underline hover:text-gray-300 duration-200 uppercase text-start w-[95%] text-button-vio text-2xl"
                            href="{{ route('realisations.image', 'gsb') }}">Galaxy Swiss Bourdin - <span class="font-bold">BTS 1</span>
                        </a>
                        <h1 class="text-white text-md tracking-wide text-justify w-[95%] leading-relaxed">Site métier GSB :
                            un site pour une entreprise permettant la gestion des frais. Il simplifie le travail de
                            l'entreprise et offre un outil aux visiteurs pour renseigner leurs frais et se faire rembourser
                            par la suite. Le projet a été développé durant le BTS et permet d'apprendre les bases du HTML,
                            du CSS, du JavaScript, du PHP et de MySQL.</h1>
                        <h2 class="text-gray-300 text-left w-[95%] pt-1"><span
                                class="text-button-vio uppercase font-bold text-lg">Téchnologies :</span> <br> PHP, HTML,
                            CSS, Mysql, JavaScript, Versionnage </h2>
                    </div>
                </div>
            </div>
            <div class="w-[90%] h-[350px] bg-light-gray flex flex-row justify-around items-center rounded-md shadow-sm ">
                <div class="w-[47%] h-[90%] rounded-md flex items-center justify-center bg-light-black">
                    <div class="w-[93%] h-[85%] flex items-center justify-center flex-col space-y-3  ">
                        <a class="font-bold underline hover:text-gray-300 duration-200 uppercase text-start w-[95%] text-button-vio text-2xl"
                            href="{{ route('realisations.image', 'mdl') }}">Maison des ligues - <span class="font-bold">BTS 2</span></a>
                        <h1 class="text-white text-md tracking-wide text-justify w-[95%] leading-relaxed">Maison des
                            ligues, ou MDL, est une plateforme en ligne utile à la gestion des inscriptions à des congrès.
                            Elle permet aux utilisateurs de faire des réservations sur plusieurs jours avec, pendant cette
                            période, des activités.</h1>
                        <h2 class="text-gray-300 text-left w-[95%] pt-1"><span
                                class="text-button-vio uppercase font-bold text-lg">Téchnologies :</span> <br> PHP, HTML,
                            CSS, Mysql, Versionnage </h2>
                    </div>
                </div>
                <div class="w-[47%] h-[100%] flex justify-center items-center">
                    <div class="h-[90%] w-[99%]  flex items-center justify-center  rounded-md">
                        <div id="default-carousel" class="relative w-full h-[100%] bg-light-black rounded-md"
                            data-carousel="static">
                            <!-- Carousel wrapper -->
                            <div class="relative h-[100%] overflow-hidden rounded-lg">
                                <!-- Item 1 -->
                                <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/mdl/authmdl.png') }}" class="h-[100%]" alt="">
                                </div>

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
            <div class="w-[90%] h-[350px] bg-light-gray flex flex-row justify-around items-center rounded-md shadow-sm ">
                <div class="w-[47%] h-[100%] flex justify-center items-center">
                    <div class="h-[90%] w-[99%]  flex items-center justify-center  rounded-md">
                        <div id="default-carousel" class="relative w-full h-[100%] bg-light-black rounded-md"
                            data-carousel="static">
                            <!-- Carousel wrapper -->
                            <div class="relative h-[100%] overflow-hidden rounded-lg">
                                <!-- Item 1 -->
                                <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/capat/auth.png') }}" class="h-[100%]"
                                        alt="...">
                                </div>
                                <!-- Item 2 -->
                                <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/capat/role.png') }}" class="h-[100%]"
                                        alt="...">
                                </div>
                                <!-- Item 3 -->
                                <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/capat/user.png') }}" class="h-[100%]"
                                        alt="...">
                                </div>
                                <!-- Item 4 -->
                                <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/capat/formations.png') }}" class="h-[100%]"
                                        alt="...">
                                </div>
                                <!-- Item 5 -->
                                <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/capat/chat.png') }}" class="h-[100%]"
                                        alt="...">
                                </div>
                                <!-- Item 6 -->
                                <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/capat/ingredient.png') }}" class="h-[100%]"
                                        alt="...">
                                </div>
                                <!-- Item 7 -->
                                <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/capat/modifingre.png') }}" class="h-[100%]"
                                        alt="...">
                                </div>
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
                <div class="w-[47%] h-[90%] rounded-md flex items-center justify-center bg-light-black">
                    <div class="w-[93%] h-[85%] flex items-center justify-center flex-col space-y-3  ">
                        <a class="font-bold underline hover:text-gray-300 duration-200 uppercase text-start w-[95%] text-button-vio text-2xl"
                            href="{{ route('realisations.image', 'capat') }}">CAPAT - <span class="font-bold">ENTREPRISE</span>
                        </a>
                        <h1 class="text-white text-md tracking-wide text-justify w-[95%] leading-relaxed">Capat est un
                            logiciel de suivi et de prévision des indisponibilités des capacités des ateliers de maintenance
                            des aéronefs. Dans l'application, on retrouve une gestion complète des utilisateurs, un système
                            de messagerie, un chat en temps réel, des indicateurs et des interfaces CRUD pour la gestion des
                            ressources.</h1>
                        </h1>
                        <h2 class="text-gray-300 text-left w-[95%] pt-1"><span
                                class="text-button-vio uppercase font-bold text-lg">Téchnologies :</span> <br> Laravel,
                            Blade,Html, TailWind, LiveWire, PGSQL, Grafana, JavaScript, Versionnage </h2>
                    </div>
                </div>
            </div>
            <div class="w-[90%] h-[350px] bg-light-gray flex flex-row justify-around items-center rounded-md shadow-sm ">
                <div class="w-[47%] h-[90%] rounded-md flex items-center justify-center bg-light-black">
                    <div class="w-[93%] h-[85%] flex items-center justify-center flex-col space-y-3  ">
                        <a class="font-bold underline hover:text-gray-300 duration-200 uppercase text-start w-[95%] text-button-vio text-2xl"
                            href="{{ route('realisations.image', 'vols') }}">Gestion des vols - <span class="font-bold">ENTREPRISE</span>
                        </a>
                        <h1 class="text-white text-md tracking-wide text-justify w-[95%] leading-relaxed">Application de
                            gestion des vols, s'appuyant sur l'architecture de Mycelium. Dans laquelle on retrouve des
                            interfaces CRUD, pour la saisie des aéronefs, des pilotes, et des demandes de vol.
                            L'application a pour but de montrer le fonctionnement de Mycelium, en utilisant des données
                            provenant de plusieurs applications.
                        </h1>
                        </h1>
                        <h2 class="text-gray-300 text-left w-[95%] pt-1"><span
                                class="text-button-vio uppercase font-bold text-lg">Téchnologies :</span> <br> Laravel,
                            Blade,Html, TailWind, LiveWire, PGSQL, Grafana, JavaScript, Kafka </h2>
                    </div>
                </div>
                <div class="w-[47%] h-[100%] flex justify-center items-center">
                    <div class="h-[90%] w-[99%]  flex items-center justify-center  rounded-md">
                        <div id="default-carousel" class="relative w-full h-[100%] bg-light-black rounded-md"
                            data-carousel="static">
                            <!-- Carousel wrapper -->
                            <div class="relative h-[100%] overflow-hidden rounded-lg">
                                <!-- Item 1 -->
                                <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/vols/accueil.png') }}" class="h-[100%]">
                                </div>
                                <!-- Item 2 -->
                                <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/vols/aeronef.png') }}" class="h-[100%]">
                                </div>
                                <!-- Item 3 -->
                                <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/vols/capacite.png') }}" class="h-[100%]">
                                </div>
                                <!-- Item 4 -->
                                <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/vols/formation.png') }}" class="h-[100%]">
                                </div>
                                <!-- Item 5 -->
                                <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/vols/pilotes.png') }}" class="h-[100%]">
                                </div>
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
            <div class="w-[90%] h-[350px] bg-light-gray flex flex-row justify-around items-center rounded-md shadow-sm ">
                <div class="w-[47%] h-[100%] flex justify-center items-center">
                    <div class="h-[90%] w-[99%]  flex items-center justify-center  rounded-md">
                        <div id="default-carousel" class="relative w-full h-[100%] bg-light-black rounded-md"
                            data-carousel="static">
                            <!-- Carousel wrapper -->
                            <div class="relative h-[100%] overflow-hidden rounded-lg">
                                <!-- Item 1 -->
                                <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/chat/index.png') }}" class="h-[100%]"
                                        alt="...">
                                </div>
                                <!-- Item 2 -->
                                <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/chat/message.png') }}" class="h-[100%]"
                                        alt="...">
                                </div>
                                <!-- Item 3 -->
                                <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/chat/notif.png') }}" class="h-[100%]"
                                        alt="...">
                                </div>
                                <!-- Item 4 -->
                                <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ Vite::asset('resources/img/chat/search.png') }}" class="h-[100%]"
                                        alt="...">
                                </div>
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
                <div class="w-[47%] h-[90%] rounded-md flex items-center justify-center bg-light-black">
                    <div class="w-[93%] h-[85%] flex items-center justify-center flex-col space-y-3  ">
                        <a class="font-bold underline hover:text-gray-300 duration-200 uppercase text-start w-[95%] text-button-vio text-2xl"
                            href="{{ route('realisations.image', 'chat') }}">CHATBOX - <span class="font-bold">ENTREPRISE</span>
                        </a>
                        <h1 class="text-white text-md tracking-wide text-justify w-[95%] leading-relaxed">Petite chatbox, fonctionnant avec Livewire, un composant de Laravel, permettant de faire de l'Ajax très simplement.<br>
                            L'application possède un système de messages privés et de messages généraux. Elle permet aussi de recevoir des notifications.</h1>
                        </h1>
                        <h2 class="text-gray-300 text-left w-[95%] pt-1"><span
                                class="text-button-vio uppercase font-bold text-lg">Téchnologies :</span> <br> Laravel,
                            Blade,Html, TailWind, LiveWire, PGSQL, Versionnage  </h2>
                    </div>
                </div>
            </div>
            <div class="w-[90%] h-[350px] bg-light-gray flex flex-row justify-around items-center rounded-md shadow-sm ">
                <div class="w-[47%] h-[90%] rounded-md flex items-center justify-center bg-light-black">
                    <div class="w-[93%] h-[85%] flex items-center justify-center flex-col space-y-3  ">
                        <a class="font-bold underline hover:text-gray-300 duration-200 uppercase text-start w-[95%] text-button-vio text-2xl"
                            href="#">Mycelium - <span class="font-bold">ENTREPRISE</span></a>
                        <h1 class="text-white text-md tracking-wide text-justify w-[95%] leading-relaxed">Mycelium est un
                            ensemble de logiciels permettant la centralisation, la transformation et la redistribution des
                            données entre les services. L'architecture s'appuie sur SystemD, Kafka et Grafana..
                        </h1>
                        <h2 class="text-gray-300 text-left w-[95%] pt-1"><span
                                class="text-button-vio uppercase font-bold text-lg">Téchnologies :</span> <br> Linux,
                            Grafana, Apache Kafka </h2>
                    </div>
                </div>
                <div class="w-[47%] h-[90%] rounded-md flex items-center justify-center bg-light-black">
                    <div class="w-[93%] h-[85%] flex items-center justify-center flex-col space-y-3  ">
                        <a class="font-bold underline hover:text-gray-300 duration-200 uppercase text-start w-[95%] text-button-vio text-2xl"
                            href="#">Mon Portfolio - <span class="font-bold">ENTREPRISE</span></a>
                        <h1 class="text-white text-md tracking-wide text-justify w-[95%] leading-relaxed">Mon portfolio,
                            c'est simplement le site sur lequel vous vous trouvez. </h1>
                        <h2 class="text-gray-300 text-left w-[95%] pt-1"><span
                                class="text-button-vio uppercase font-bold text-lg">Téchnologies :</span> <br> PHP,
                            Laravel, Tailwind </h2>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection

<!-- <div class="h-[90%] w-[90%] bg-light-gray rounded-md shadow-sm"></div>

<!--                         <div class="flex flex-col items-center justify-start pt-4 space-y-4 h-[98%] w-[95%]">

                            <div class="w-[95%] bg-blanc border-4 rounded-lg shadow-md border-light-gray h-[15%]"></div>
                            <div class="w-[95%] bg-blanc border-4 rounded-lg shadow-md border-light-gray h-[15%]"></div>
                        </div> -->
