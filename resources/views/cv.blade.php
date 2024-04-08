@extends('base')
@section('content')
    <div class="h-[151vh] w-[99%] ">
        <!-- Première page -->
        <div class="h-[100vh] w-[100%] flex flex-row ">
            <div class="h-[100vh]  w-[50%] flex flex-col items-center justify-around">
                <div
                    class="h-[40%] w-[90%] bg-light-gray flex flex-row items-center justify-center rounded-md shadow-sm space-x-2">
                    <div class="h-[90%] w-[35%] flex flex-col items-center pr-2 justify-center ">
                        <div class="h-[15%] w-[100%] text-justify font-semibold text-white flex justify-center">
                            <h1 class="text-2xl tracking-wider">À propos de moi</h1>
                        </div>
                        <div class="h-[85%] w-[100%] flex justify-center"><img class="h-[100%] rounded-3xl"
                                src="{{ asset('build/assets/photodemoi-Ca4OGyzb.jpg') }}"></div>
                    </div>
                    <div class="h-[90%] w-[57%] bg-light-black rounded-md flex justify-center flex-col items-center ">
                        <section class="h-[80%] w-[90%] overflow-y-auto">
                            <article class="font-normal text-white tracking-wide text-justify p-2 leading-4 ">
                                Depuis mon plus jeune âge, je suis passioné d'informatique et d'éléctronique en tout
                                genre.<br><br>
                                Je suis actuellement en préparation d'un BTS Service Informatique aux organisations Option
                                SLAM.<br><br>
                                Actuellement, je fais mon BTS en alternance avec un état major de la Marine Nationale.
                                <br><br>
                                J'ai pour objectif d'apprendre à developper des applications, et des logiciels.
                            </article>
                        </section>
                        <div class=" h-[15%] w-[90%] flex justify-center items-center">
                            <a href="{{ route('get-cv') }}" target="_blanck"
                                class=" h-[80%] w-[80%] bg-button-vio hover:bg-gray-300 duration-200 hover:scale-105 flex items-center justify-center rounded-md font-semibold text-white">Télécharger
                                mon CV</a>
                        </div>
                    </div>
                </div>
                <div class="h-[40%] w-[90%] flex flex-col items-center justify-around bg-light-gray rounded-md shadow-sm ">
                    <div
                        class="h-[40%] w-[90%] flex flex-col rounded-md shadow-sm bg-light-black justify-center items-center">
                        <div class="h-[25%] w-[95%] bg-light-gray rounded-t-md flex flex-row">
                            <div class="w-24 flex flew-row items-center justify-around text-center pl-2">
                                <div class="w-4 h-4 rounded-full bg-red-500 flex items-center justify-center">
                                </div>
                                <div class="w-4 h-4 rounded-full bg-yellow-400 flex items-center justify-center">
                                </div>
                                <div class="w-4 h-4 rounded-full bg-green-500 flex items-center justify-center">
                                </div>
                            </div>
                            <div class="w-[77%] flex items-center pl-2 font-semibold text-gray-200">
                                <h1>Frameworks / Langages de programmations</h1>
                            </div>
                        </div>
                        <div
                            class="h-[60%] w-[95%] bg-light-black items-center border-b-2 border-x-2 border-light-gray rounded-b-md flex flex-row space-x-6 pl-2 pr-2 overflow-x-auto">
                            <div
                                class="max-w-[25%] min-w-[12%] h-[70%]   flex items-center  justify-between flex-col">
                                <img class="h-[60%] w-[100%] " src="{{ Vite::asset('resources/img/svg/HTML.svg') }}">
                                <div class="w-[100%] h-[30%] flex flex-row pt-1">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile_colored.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile_colored.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile_colored.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile.svg') }}">
                                </div>
                            </div>
                            <div  class="max-w-[25%] min-w-[12%] h-[70%]   flex items-center  justify-between flex-col">  
                                <img class="h-[60%] w-[100%] " src="{{ Vite::asset('resources/img/svg/CSS.svg') }}">
                                <div class="w-[100%] h-[30%] flex flex-row pt-1">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile_colored.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile_colored.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile.svg') }}">
                                </div>
                            </div>
                            <div  class="max-w-[25%] min-w-[12%] h-[70%]   flex items-center  justify-between flex-col">
                                <img class="h-[60%] w-[100%] " src="{{ Vite::asset('resources/img/svg/Java-Dark.svg') }}">
                                <div class="w-[100%] h-[30%] flex flex-row pt-1">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile_colored.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile_colored.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile_colored.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile.svg') }}">
                                </div>
                            </div>
                            <div  class="max-w-[25%] min-w-[12%] h-[70%]   flex items-center  justify-between flex-col">
                                <img class="h-[60%] w-[100%] " src="{{ Vite::asset('resources/img/svg/JavaScript.svg') }}">
                                <div class="w-[100%] h-[30%] flex flex-row pt-1">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile_colored.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile.svg') }}">
                                </div>
                            </div>
                            <div  class="max-w-[25%] min-w-[12%] h-[70%]   flex items-center  justify-between flex-col">
                                <img class="h-[60%] w-[100%] " src="{{ Vite::asset('resources/img/svg/Kafka.svg') }}">
                                <div class="w-[100%] h-[30%] flex flex-row pt-1">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile_colored.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile_colored.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile_colored.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile_colored.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile.svg') }}">
                                </div>
                            </div>
                            <div  class="max-w-[25%] min-w-[12%] h-[70%]   flex items-center  justify-between flex-col">
                                <img class="h-[60%] w-[100%] "
                                    src="{{ Vite::asset('resources/img/svg/Laravel-Dark.svg') }}">
                                <div class="w-[100%] h-[30%] flex flex-row pt-1">
                                    <img class="w-4 h-5 "
                                        src="{{ Vite::asset('resources/img/svg/etoile_colored.svg') }}">
                                    <img class="w-4 h-5 "
                                        src="{{ Vite::asset('resources/img/svg/etoile_colored.svg') }}">
                                    <img class="w-4 h-5 "
                                        src="{{ Vite::asset('resources/img/svg/etoile_colored.svg') }}">
                                    <img class="w-4 h-5 "
                                        src="{{ Vite::asset('resources/img/svg/etoile_colored.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile.svg') }}">
                                </div>
                            </div>
                            <div  class="max-w-[25%] min-w-[12%] h-[70%]   flex items-center  justify-between flex-col">
                                <img class="h-[60%] w-[100%] " src="{{ Vite::asset('resources/img/svg/PHP-Dark.svg') }}">
                                <div class="w-[100%] h-[30%] flex flex-row pt-1">
                                    <img class="w-4 h-5 "
                                        src="{{ Vite::asset('resources/img/svg/etoile_colored.svg') }}">
                                    <img class="w-4 h-5 "
                                        src="{{ Vite::asset('resources/img/svg/etoile_colored.svg') }}">
                                    <img class="w-4 h-5 "
                                        src="{{ Vite::asset('resources/img/svg/etoile_colored.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile.svg') }}">
                                </div>
                            </div>
                            <div  class="max-w-[25%] min-w-[12%] h-[70%]   flex items-center  justify-between flex-col">
                                <img class="h-[60%] w-[100%] "
                                    src="{{ Vite::asset('resources/img/svg/Python-Dark.svg') }}">
                                <div class="w-[100%] h-[30%] flex flex-row pt-1">
                                    <img class="w-4 h-5 "
                                        src="{{ Vite::asset('resources/img/svg/etoile_colored.svg') }}">
                                    <img class="w-4 h-5 "
                                        src="{{ Vite::asset('resources/img/svg/etoile_colored.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile.svg') }}">
                                </div>
                            </div>
                            <div  class="max-w-[25%] min-w-[12%] h-[70%]   flex items-center  justify-between flex-col">
                                <img class="h-[60%] w-[100%] "
                                    src="{{ Vite::asset('resources/img/svg/TailwindCSS-Dark.svg') }}">
                                <div class="w-[100%] h-[30%] flex flex-row pt-1">
                                    <img class="w-4 h-5 "
                                        src="{{ Vite::asset('resources/img/svg/etoile_colored.svg') }}">
                                    <img class="w-4 h-5 "
                                        src="{{ Vite::asset('resources/img/svg/etoile_colored.svg') }}">
                                    <img class="w-4 h-5 "
                                        src="{{ Vite::asset('resources/img/svg/etoile_colored.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile.svg') }}">
                                    <img class="w-4 h-5 " src="{{ Vite::asset('resources/img/svg/etoile.svg') }}">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div
                        class="h-[40%] w-[90%] flex flex-col rounded-md shadow-sm bg-light-black justify-center items-center">
                        <div class="h-[25%] w-[95%] bg-light-gray rounded-t-md flex flex-row">
                            <div class="w-24 flex flew-row items-center justify-around text-center pl-2">
                                <div class="w-4 h-4 rounded-full bg-red-500 flex items-center justify-center">
                                </div>
                                <div class="w-4 h-4 rounded-full bg-yellow-400 flex items-center justify-center">
                                </div>
                                <div class="w-4 h-4 rounded-full bg-green-500 flex items-center justify-center">
                                </div>
                            </div>
                            <div class="w-[77%] flex items-center pl-2 font-semibold text-gray-200">
                                <h1>Environement de dev</h1>
                            </div>
                        </div>
                        <div
                            class="h-[60%] w-[95%] bg-light-black border-b-2 border-x-2 border-light-gray rounded-b-md flex justify-around items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="h-[100%] w-[8%] "
                                viewBox="0 0 50 50">
                                <path fill="#FFFFFF"
                                    d="M19.852 7.761l-15 2.25C4.362 10.085 4 10.505 4 11v12c0 .553.448 1 1 1h15c.552 0 1-.447 1-1V8.75c0-.291-.127-.567-.348-.758C20.432 7.803 20.139 7.721 19.852 7.761zM45.652 4.242c-.22-.189-.512-.271-.801-.231l-21 3.15C23.362 7.235 23 7.655 23 8.15V23c0 .553.448 1 1 1h21c.552 0 1-.447 1-1V5C46 4.709 45.873 4.433 45.652 4.242zM20 26H5c-.552 0-1 .447-1 1v12c0 .495.362.915.852.989l15 2.25c.05.007.099.011.148.011.238 0 .47-.085.652-.242C20.873 41.817 21 41.541 21 41.25V27C21 26.447 20.552 26 20 26zM45 26H24c-.552 0-1 .447-1 1v14.85c0 .495.362.915.852.989l21 3.15C44.901 45.996 44.951 46 45 46c.238 0 .47-.085.652-.242C45.873 45.567 46 45.291 46 45V27C46 26.447 45.552 26 45 26z">
                                </path>
                            </svg>
                            <svg viewBox="0 0 512 512" class="h-[100%] w-[8%]" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#FFFFFF"
                                    d="m341.52 285.56c33.65 0 82.34-6.94 82.34-47 .22-6.74.86-1.82-20.88-96.24-4.62-19.15-8.68-27.84-42.31-44.65-26.09-13.34-82.92-35.37-99.73-35.37-15.66 0-20.2 20.17-38.87 20.17-18 0-31.31-15.06-48.12-15.06-16.14 0-26.66 11-34.78 33.62-27.5 77.55-26.28 74.27-26.12 78.27 0 24.8 97.64 106.11 228.47 106.11m87.48-30.57c4.65 22 4.65 24.35 4.65 27.25 0 37.66-42.33 58.56-98 58.56-125.74.08-235.91-73.65-235.91-122.33a49.55 49.55 0 0 1 4.06-19.72c-45.24 2.26-103.8 10.33-103.8 62.03 0 84.67 200.63 189 359.49 189 121.79 0 152.51-55.08 152.51-98.58 0-34.21-29.59-73.05-82.93-96.24" />
                            </svg>
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-[100%] w-[8%]">
                                <path fill="#FFFFFF"
                                    d="m13.88 12.68c-.4 0 .08.2.6.28.14-.1.27-.22.39-.33a3 3 0 0 1 -.99.05m2.14-.53c.23-.33.4-.69.47-1.06-.06.27-.2.5-.33.73-.75.47-.07-.27 0-.56-.8 1.01-.11.6-.14.89m.78-2.05c.05-.72-.14-.5-.2-.22.07.04.13.5.2.22m-4.42-9.79c.2.04.45.07.42.12.23-.05.28-.1-.43-.12m.43.12-.15.03.14-.01v-.02m6.63 9.94c.02.64-.2.95-.38 1.5l-.35.18c-.28.54.03.35-.17.78-.44.39-1.34 1.22-1.62 1.3-.2 0 .14-.25.19-.34-.59.4-.48.6-1.37.85l-.03-.06c-2.22 1.04-5.3-1.02-5.25-3.84-.03.17-.07.13-.12.2a3.55 3.55 0 0 1 2-3.5 3.36 3.36 0 0 1 3.73.48 3.34 3.34 0 0 0 -2.72-1.3c-1.18.01-2.28.76-2.65 1.57-.6.38-.67 1.47-.93 1.66-.36 2.6.66 3.72 2.38 5.04.27.19.08.21.12.35a4.7 4.7 0 0 1 -1.53-1.16c.23.33.47.66.8.91-.55-.18-1.27-1.3-1.48-1.35.93 1.66 3.78 2.92 5.26 2.3a6.2 6.2 0 0 1 -2.33-.28c-.33-.16-.77-.51-.7-.57a5.8 5.8 0 0 0 5.9-.84c.44-.35.93-.94 1.07-.95-.2.32.04.16-.12.44.44-.72-.2-.3.46-1.24l.24.33c-.09-.6.74-1.32.66-2.26.19-.3.2.3 0 .97.29-.74.08-.85.15-1.46.08.2.18.42.23.63-.18-.7.2-1.2.28-1.6-.09-.05-.28.3-.32-.53 0-.37.1-.2.14-.28-.08-.05-.26-.32-.38-.86.08-.13.22.33.34.34-.08-.42-.2-.75-.2-1.08-.34-.68-.12.1-.4-.3-.34-1.09.3-.25.34-.74.54.77.84 1.96.98 2.46-.1-.6-.28-1.2-.49-1.76.16.07-.26-1.24.21-.37a7.82 7.82 0 0 0 -3.66-4.39c.18.17.42.39.33.42-.75-.45-.62-.48-.73-.67-.61-.25-.65.02-1.06 0-1.16-.62-1.38-.55-2.44-.95l.05.23c-.77-.25-.9.1-1.73 0-.05-.04.27-.14.53-.18-.74.1-.7-.14-1.43.03.17-.13.36-.21.55-.32-.6.04-1.44.35-1.18.07-.99.45-2.74 1.07-3.72 1.99l-.03-.22c-.45.54-1.96 1.61-2.08 2.31l-.13.03c-.23.4-.38.85-.57 1.26-.3.52-.45.2-.4.28-.6 1.22-.9 2.25-1.16 3.1.18.27 0 1.65.07 2.76-.3 5.46 3.84 10.77 8.36 12 .67.23 1.65.23 2.49.25-.99-.28-1.12-.15-2.08-.49-.7-.32-.85-.7-1.34-1.13l.2.35c-.97-.34-.57-.42-1.36-.67l.21-.27c-.31-.03-.83-.53-.97-.81l-.34.01c-.41-.5-.63-.87-.61-1.16l-.11.2c-.13-.21-1.52-1.9-.8-1.51-.13-.12-.31-.2-.5-.55l.14-.17c-.35-.44-.64-1.02-.62-1.2.2.24.32.3.45.33-.88-2.17-.93-.12-1.6-2.2l.15-.02c-.1-.16-.18-.34-.26-.51l.06-.6c-.63-.74-.18-3.1-.09-4.4.07-.54.53-1.1.88-1.98l-.21-.04c.4-.71 2.34-2.87 3.24-2.76.43-.55-.09 0-.18-.14.96-.99 1.26-.7 1.9-.88.7-.4-.6.16-.27-.15 1.2-.3.85-.7 2.42-.85.16.1-.39.14-.52.26 1-.49 3.15-.37 4.56.27 1.63.77 3.46 3.01 3.53 5.13l.08.02c-.04.85.13 1.82-.17 2.71l.2-.42m-9.87 2.87-.05.28c.26.35.47.73.8 1.01-.24-.47-.42-.66-.75-1.3m.62-.02c-.14-.15-.22-.34-.31-.52.08.32.26.6.43.88zm10.94-2.38-.07.15c-.1.76-.34 1.51-.69 2.21.4-.73.65-1.54.75-2.36m-8.64-10.7c.27-.1.66-.05.95-.12-.37.03-.74.05-1.1.1zm-9.44 5.02c.07.57-.43.8.11.42.3-.66-.11-.18-.1-.42m-.64 2.66c.12-.39.15-.62.2-.84-.35.44-.17.53-.2.83" />
                            </svg>
                            <svg viewBox="0 0 384 512" class="h-[100%] w-[8%]" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#FFFFFF"
                                    d="m318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7-55.8.9-115.1 44.5-115.1 133.2q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z" />
                            </svg>
                            <svg class="h-[100%] w-[8%]" preserveAspectRatio="xMidYMid" viewBox="0 0 256 254"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <linearGradient id="a" x1="50.000048%" x2="50.000048%" y1="0%"
                                    y2="99.999921%">
                                    <stop offset="0" stop-color="#fff" />
                                    <stop offset="1" stop-color="#fff" stop-opacity="0" />
                                </linearGradient>
                                <mask id="b" fill="#fff">
                                    <path
                                        d="m180.82764 252.605272c4.016311 1.564887 8.59642 1.46428 12.650584-.486102l52.500918-25.262319c5.516451-2.65463 9.024747-8.238817 9.024747-14.363891v-171.2957755c0-6.1252732-3.508296-11.7085634-9.024747-14.3631938l-52.500918-25.26330519c-5.320218-2.55994222-11.546895-1.93291555-16.215658 1.46166039-.667393.48492576-1.302911 1.02635082-1.898584 1.62302008l-100.5073927 91.69447842-43.7787891-33.2316887c-4.0753805-3.0935159-9.7757136-2.8401058-13.5607284.6029448l-14.04129121 12.772607c-4.62980482 4.2115486-4.63511408 11.4951968-.01146521 15.713519l37.96644362 34.6372985-37.96644362 34.637696c-4.62364887 4.218521-4.61833961 11.50207.01146521 15.713619l14.04129121 12.772109c3.7850148 3.443548 9.4853479 3.69656 13.5607284.603642l43.7787891-33.232187 100.5073927 91.694817c1.58979 1.590786 3.456498 2.789105 5.463658 3.571051zm10.464124-183.6493202-76.262101 57.8885732 76.262101 57.888871z"
                                        fill="#fff" />
                                </mask>
                                <path
                                    d="m246.134784 26.873337-52.541759-25.29809927c-6.081245-2.92824355-13.349852-1.69304554-18.123206 3.07990911l-172.00340183 156.82707416c-4.62645789 4.218521-4.62113867 11.50207.01147518 15.713619l14.04978805 12.772109c3.7874054 3.443548 9.4912249 3.69656 13.5689961.603642l207.1319905-157.1352905c6.948856-5.2716078 16.929868-.3153681 16.929868 8.4069603v-.6100172c0-6.1225836-3.5073-11.7038817-9.023751-14.3599066z"
                                    fill="#FFFFFF" mask="url(#b)" />
                                <path
                                    d="m246.134784 226.816011-52.541759 25.298179c-6.081245 2.927564-13.349852 1.692389-18.123206-3.079969l-172.00340183-156.8271937c-4.62645789-4.2182226-4.62113867-11.50207.01147518-15.7135191l14.04978805-12.772607c3.7874054-3.4430506 9.4912249-3.6965603 13.5689961-.6029447l207.1319905 157.1346925c6.948856 5.271409 16.929868.315767 16.929868-8.407159v.610614c0 6.122086-3.5073 11.703284-9.023751 14.359907z"
                                    fill="#FFFFFF" mask="url(#b)" />
                                <path
                                    d="m193.428324 252.134497c-6.083238 2.925572-13.351845 1.689401-18.125199-3.083953 5.881028 5.881027 15.937743 1.715299 15.937743-6.60221v-231.1753717c0-8.31753961-10.056715-12.48301323-15.937743-6.60160249 4.773354-4.77339792 12.041961-6.01033911 18.125199-3.08468047l52.532793 25.26333506c5.520436 2.6546304 9.030724 8.2379207 9.030724 14.3631938v171.2960748c0 6.125074-3.510288 11.708265-9.030724 14.362895z"
                                    fill="#FFFFFF" mask="url(#b)" />
                                <path
                                    d="m180.827889 252.605272c4.016311 1.563891 8.59642 1.46428 12.649587-.486102l52.500919-25.263315c5.517447-2.65463 9.025743-8.237821 9.025743-14.362895v-171.2959747c0-6.1252732-3.508296-11.7085634-9.024747-14.3631938l-52.501915-25.26326537c-5.319221-2.55994919-11.545898-1.93292252-16.215657 1.46165043-.666397.48492576-1.301915 1.02635082-1.898584 1.62302008l-100.5066955 91.69444856-43.7787891-33.2316887c-4.0752809-3.093516-9.7757136-2.8400062-13.5607284.6029447l-14.0412414 12.772607c-4.62980483 4.2115487-4.63511409 11.4952965-.01146521 15.7136187l37.96649341 34.6373981-37.96649341 34.637696c-4.62364888 4.218521-4.61833962 11.50207.01146521 15.713619l14.0412414 12.772109c3.7850148 3.443548 9.4854475 3.69656 13.5607284.603642l43.7787891-33.232187 100.5066955 91.694817c1.58979 1.590786 3.457494 2.789105 5.464654 3.571051zm10.464124-183.6495194-76.262101 57.8887724 76.262101 57.888871z"
                                    fill="#FFFFFF" fill-opacity=".0" />
                            </svg>
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                class="h-[100%] w-[8%]">
                                <path fill="#FFFFFF"
                                    d="M11.108.024c-.274.004-.604.012-.737.023C6.727.361 3.468 2.518 1.578 5.86A12.53 12.53 0 0 0 .02 11.112c-.04.517-.02 1.745.035 2.208.306 2.682 1.353 5.06 3.07 6.965 1.962 2.173 4.586 3.467 7.437 3.663.42.032 1.043.04 1.02.012a2.404 2.404 0 0 0-.338-.074c-1.674-.33-3.388-1.13-4.777-2.232a12.345 12.345 0 0 1-2.45-2.636A12.388 12.388 0 0 1 1.883 12.5a12.414 12.414 0 0 1 .56-4.275c.785-2.522 2.37-4.726 4.475-6.228A11.074 11.074 0 0 1 11.155.122l.443-.098zm1.475.51C10.645.65 8.806 1.299 7.3 2.4 5.425 3.77 3.994 5.644 3.22 7.746c-.145.397-.282.82-.282.879 0 .012 3.828.024 10.31.024 8.464 0 10.316-.008 10.316-.036 0-.047-.153-.525-.283-.878a14.18 14.18 0 0 0-.82-1.722c-.4-.683-.91-1.373-1.474-1.992-1.651-1.82-3.593-2.934-5.82-3.334-.785-.141-1.8-.2-2.585-.153zM23.83 9.97c-.02 0-4.792 0-10.609.004l-10.574.008-.011.059a14.52 14.52 0 0 0-.134 1.243c0 .028 1.785.032 10.747.032H24v-.075c0-.102-.07-.792-.106-1.055-.02-.16-.04-.216-.063-.216zm-10.573 2.636c-9.37-.004-10.731 0-10.743.035-.02.04.024.557.075.973.02.157.035.298.035.314 0 .027 2.137.035 10.625.035h10.624l.024-.188c.043-.326.102-.97.094-1.067l-.008-.094zm.003 2.718c-8.883 0-10.322.004-10.322.035 0 .02.054.208.121.42A11.123 11.123 0 0 0 5.13 19.52c.282.342.945 1.036 1.228 1.287 1.568 1.4 3.247 2.216 5.18 2.53.605.094.887.113 1.75.11.91 0 1.298-.032 2.024-.177 2.11-.416 3.914-1.451 5.53-3.17 1.267-1.348 2.106-2.76 2.628-4.411l.117-.365z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="h-[100%] w-[8%]"
                                viewBox="0,0,256,256">
                                <g fill="none" fill-rule="nonzero" stroke="#ffffff" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(5.12,5.12)">
                                        <path d="M25,2l-20,11v24l20,11l20,-11v-24z"></path>
                                        <path d="M12,33v-16l13,-7l13,7v16l-13,7z"></path>
                                        <path d="M5,13l20,11v24"></path>
                                        <path d="M45,13l-20,11"></path>
                                        <path d="M25,2v8"></path>
                                        <path d="M5,37l7,-4"></path>
                                        <path d="M45,37l-7,-4"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-[100vh] w-[50%] flex items-center justify-center">
                <div class="h-[90vh] w-[90%] bg-light-gray rounded-md shadow-sm flex items-center justify-center">
                    <div
                        class="h-[95%] w-[95%] flex flex-col rounded-md shadow-sm bg-light-black justify-center items-center">
                        <div class="h-[5%] w-[95%] bg-light-gray rounded-t-md flex flex-row">
                            <div class="w-24 flex flew-row items-center justify-around text-center pl-2">
                                <div class="w-4 h-4 rounded-full bg-red-500 flex items-center justify-center">
                                </div>
                                <div class="w-4 h-4 rounded-full bg-yellow-400 flex items-center justify-center">
                                </div>
                                <div class="w-4 h-4 rounded-full bg-green-500 flex items-center justify-center">
                                </div>
                            </div>
                            <div class="w-[77%] flex items-center pl-2 font-semibold text-gray-200">
                                <h1>Formations et diplômes</h1>
                            </div>
                        </div>
                        <div
                            class="h-[90%] w-[95%] bg-light-black border-b-2 border-x-2 border-light-gray rounded-b-md flex flex-col items-center justify-start pt-6 space-y-4">
                            <div
                                class="w-[95%] flex flex-row border-light-gray border-[4px] rounded-lg shadow-md  h-24  items-center">
                                <div class="flex flex-row w-[25%] h-[90%] items-center">
                                    <div class="flex flew-row items-center justify-around pl-2">
                                        <h1 class=" text-blanc font-semibold uppercase">En cours</h1>
                                    </div>
                                </div>
                                <div class="w-[75%] pl-2 flex-col justify-center">
                                    <h1 class="font-semibold text-lg text-button-vio  flex">BTS Service Informatique aux
                                        Organisations
                                    </h1>
                                    <h3 class="text-blanc">Lycée Bonaparte - Toulon</h3>
                                </div>
                            </div>
                            <div
                                class="w-[95%] flex flex-row border-light-gray border-[4px] rounded-lg shadow-md  h-24  items-center">
                                <div class="flex flex-row w-[25%] h-[90%] items-center">
                                    <div class="flex flew-row items-center justify-around pl-2">
                                        <h1 class="text-blanc font-semibold">2022</h1>
                                    </div>
                                </div>
                                <div class="w-[75%] pl-2 flex-col justify-center">
                                    <h1 class="font-semibold text-lg text-button-vio  flex">Permis B </h1>
                                    <h3 class="text-blanc">Hyères - Véhicule personnel</h3>
                                </div>
                            </div>
                            <div
                                class="w-[95%] flex flex-row border-light-gray border-[4px] rounded-lg shadow-md  h-24  items-center">
                                <div class="flex flex-row w-[25%] h-[90%] items-center">
                                    <div class="flex flew-row items-center justify-around pl-2">
                                        <h1 class="text-blanc font-semibold">2022</h1>
                                    </div>
                                </div>
                                <div class="w-[75%] pl-2 flex-col justify-center">
                                    <h1 class="font-semibold text-lg text-button-vio flex">Baccalauréat - Mathématiques /
                                        Informatique
                                    </h1>
                                    <h3 class="text-blanc">Lycée Constebelle - Hyères | Metion <span
                                            class="underline">Assez Biens</span></h3>
                                </div>
                            </div>
                            <div
                                class="w-[95%] flex flex-row border-light-gray border-[4px] rounded-lg shadow-md  h-24  items-center">
                                <div class="flex flex-row w-[25%] h-[90%] items-center">
                                    <div class="flex flew-row items-center justify-around pl-2">
                                        <h1 class=" text-blanc font-semibold">2019</h1>
                                    </div>
                                </div>
                                <div class="w-[75%] pl-2 flex-col justify-center">
                                    <h1 class="font-semibold text-lg text-button-vio flex">Brevet des collèges </h1>
                                    <h3 class="text-blanc">Établissement Fénelon - Toulon</h3>
                                </div>
                            </div>
                            <div
                                class="w-[95%] flex flex-row border-light-gray border-[4px] rounded-lg shadow-md  h-24  items-center">
                                <div class="flex flex-row w-[25%] h-[90%] items-center">
                                    <div class="flex flew-row items-center justify-around pl-2">
                                        <h1 class=" text-blanc font-semibold">2019</h1>
                                    </div>
                                </div>
                                <div class="w-[75%] pl-2 flex-col justify-center">
                                    <h1 class="font-semibold text-lg text-button-vio flex">Niveau 1 de plongée sous marine
                                    </h1>
                                    <h3 class="text-blanc">Club Nautica - Toulon</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Seconde page -->
        <div class="h-[50vh] w-[100%] flex items-center flex-row justify-around">
            <div class="h-[50vh] w-[70vh] bg-light-gray rounded-md shadow-sm flex items-center justify-center">
                <div class="h-[95%] w-[95%] flex flex-col rounded-md shadow-sm bg-light-black justify-center items-center">
                    <div class="h-10 w-[95%] bg-light-gray rounded-t-md flex flex-row">
                        <div class="w-24 flex flew-row items-center justify-around text-center pl-2">
                            <div class="w-4 h-4 rounded-full bg-red-500 flex items-center justify-center">
                            </div>
                            <div class="w-4 h-4 rounded-full bg-yellow-400 flex items-center justify-center">
                            </div>
                            <div class="w-4 h-4 rounded-full bg-green-500 flex items-center justify-center">
                            </div>
                        </div>
                        <div class="w-[77%] flex items-center pl-2 font-semibold text-gray-200">
                            <h1>Mes expériences professionelles</h1>
                        </div>
                    </div>
                    <div
                        class="h-[85%] w-[95%] bg-light-black border-b-2 border-x-2 border-light-gray rounded-b-md flex flex-col items-center justify-start pt-6 space-y-4">
                        <div
                            class="w-[95%] flex flex-row border-4 rounded-lg shadow-md border-light-gray h-24  items-center">
                            <div class="flex flex-row w-[25%] h-[90%] items-center">
                                <div class="flex flew-row items-center justify-around pl-2">
                                    <h1 class="font-semibold text-blanc uppercase">En cours</h1>
                                </div>
                            </div>
                            <div class="w-[75%] pl-2 flex-col justify-center">
                                <h1 class="font-semibold text-lg text-button-vio flex">Alternance - État-major Force
                                    Aéronautique
                                    Navale
                                    (ALAVIA) </h1>
                                <h3 class="text-blanc">Marine Nationale - Toulon</h3>
                            </div>
                        </div>
                        <div
                            class="w-[95%] flex flex-row border-4 rounded-lg shadow-md border-light-gray h-24  items-center">
                            <div class="flex flex-row w-[25%] h-[90%] items-center">
                                <div class="flex flew-row items-center justify-around pl-2">
                                    <h1 class="font-semibold text-blanc uppercase">En cours</h1>
                                </div>
                            </div>
                            <div class="w-[75%] pl-2 flex-col justify-center">
                                <h1 class="font-semibold text-lg text-button-vio flex">Réserviste Marine Nationale</h1>
                                <h3 class="text-blanc">Centre de détente du Cap Brun - Toulon</h3>
                            </div>
                        </div>
                        <div
                            class="w-[95%] flex flex-row border-4 rounded-lg shadow-md border-light-gray h-24  items-center">
                            <div class="flex flex-row w-[25%] h-[90%] items-center">
                                <div class="flex flew-row items-center justify-around pl-2">
                                    <h1 class="font-semibold text-blanc">2018</h1>
                                </div>
                            </div>
                            <div class="w-[75%] pl-2 flex-col justify-center">
                                <h1 class="font-semibold text-lg text-button-vio flex">Stage d’observation
                                </h1>
                                <h3 class="text-blanc">Délégation à la Mer et au Littoral (DML) - Toulon </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-[50vh] w-[70vh] bg-light-gray rounded-md shadow-sm flex items-center justify-center">
                <div class="h-[95%] w-[95%] flex flex-col rounded-md shadow-sm bg-light-black justify-center items-center">
                    <div class="h-10 w-[95%] bg-light-gray rounded-t-md flex flex-row">
                        <div class="w-24 flex flew-row items-center justify-around text-center pl-2">
                            <div class="w-4 h-4 rounded-full bg-red-500 flex items-center justify-center">
                            </div>
                            <div class="w-4 h-4 rounded-full bg-yellow-400 flex items-center justify-center">
                            </div>
                            <div class="w-4 h-4 rounded-full bg-green-500 flex items-center justify-center">
                            </div>
                        </div>
                        <div class="w-[77%] flex items-center pl-2 font-semibold text-gray-200">
                            <h1>Mes centres d'intêrets</h1>
                        </div>
                    </div>
                    <div
                        class="h-[85%] w-[95%] bg-light-black border-b-2 border-x-2 border-light-gray rounded-b-md flex flex-col items-center justify-start pt-4 space-y-4">

                        <div
                            class="w-[95%] flex flex-row border-4 rounded-lg shadow-md border-light-gray h-12  items-center">
                            <div class="flex flex-row w-[15%] h-[90%] items-center">
                                <div class="flex flew-row items-center justify-around pl-2">
                                    <svg class="h-10 w-10" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.75 9.0251H14.5C14.5 9.01035 14.4996 8.9956 14.4987 8.98087L13.75 9.0251ZM14.2847 8.10156L13.9503 7.43023L14.2847 8.10156ZM15.344 8.2311L15.8446 7.67259C15.8399 7.66838 15.8351 7.66424 15.8303 7.66015L15.344 8.2311ZM18.65 11.1941L19.1569 10.6413L19.1506 10.6356L18.65 11.1941ZM18.65 12.7831L19.1507 13.3416L19.1569 13.3359L18.65 12.7831ZM15.344 15.7471L15.8303 16.3181C15.8352 16.3139 15.8399 16.3098 15.8447 16.3055L15.344 15.7471ZM14.2847 15.8767L14.6191 15.2053L14.6191 15.2053L14.2847 15.8767ZM13.75 14.9531L14.4987 14.9973C14.4996 14.9826 14.5 14.9679 14.5 14.9531H13.75ZM13.75 12.7391C14.1642 12.7391 14.5 12.4033 14.5 11.9891C14.5 11.5749 14.1642 11.2391 13.75 11.2391V12.7391ZM5 11.2391C4.58579 11.2391 4.25 11.5749 4.25 11.9891C4.25 12.4033 4.58579 12.7391 5 12.7391V11.2391ZM14.5 11.9891V9.0251H13V11.9891H14.5ZM14.4987 8.98087C14.4935 8.89368 14.5409 8.81182 14.6191 8.77288L13.9503 7.43023C13.3342 7.73714 12.9607 8.38219 13.0013 9.06934L14.4987 8.98087ZM14.6191 8.77288C14.6973 8.73394 14.7912 8.74542 14.8577 8.80206L15.8303 7.66015C15.3063 7.2138 14.5665 7.12332 13.9503 7.43023L14.6191 8.77288ZM14.8434 8.78961L18.1494 11.7526L19.1506 10.6356L15.8446 7.67259L14.8434 8.78961ZM18.1431 11.7469C18.2108 11.809 18.2494 11.8967 18.2494 11.9886H19.7494C19.7494 11.4763 19.5345 10.9876 19.1569 10.6413L18.1431 11.7469ZM18.2494 11.9886C18.2494 12.0805 18.2108 12.1682 18.1431 12.2303L19.1569 13.3359C19.5345 12.9896 19.7494 12.5009 19.7494 11.9886H18.2494ZM18.1493 12.2247L14.8433 15.1887L15.8447 16.3055L19.1507 13.3415L18.1493 12.2247ZM14.8577 15.1762C14.7912 15.2328 14.6973 15.2443 14.6191 15.2053L13.9503 16.548C14.5665 16.8549 15.3063 16.7644 15.8303 16.3181L14.8577 15.1762ZM14.6191 15.2053C14.5409 15.1664 14.4935 15.0845 14.4987 14.9973L13.0013 14.9089C12.9607 15.596 13.3342 16.2411 13.9503 16.548L14.6191 15.2053ZM14.5 14.9531V11.9891H13V14.9531H14.5ZM13.75 11.2391H5V12.7391H13.75V11.2391Z"
                                            fill="#76ABAE" />
                                    </svg>
                                </div>
                            </div>
                            <div class="w-[75%] pl-2 flex-col justify-center">
                                <h1 class="font-semibold text-lg text-blanc flex">Mécanique, Automobile, Moto ... </h1>
                            </div>
                        </div>
                        <div
                            class="w-[95%] flex flex-row border-4 rounded-lg shadow-md border-light-gray h-12  items-center">
                            <div class="flex flex-row w-[15%] h-[90%] items-center">
                                <div class="flex flew-row items-center justify-around pl-2">
                                    <svg class="h-10 w-10" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.75 9.0251H14.5C14.5 9.01035 14.4996 8.9956 14.4987 8.98087L13.75 9.0251ZM14.2847 8.10156L13.9503 7.43023L14.2847 8.10156ZM15.344 8.2311L15.8446 7.67259C15.8399 7.66838 15.8351 7.66424 15.8303 7.66015L15.344 8.2311ZM18.65 11.1941L19.1569 10.6413L19.1506 10.6356L18.65 11.1941ZM18.65 12.7831L19.1507 13.3416L19.1569 13.3359L18.65 12.7831ZM15.344 15.7471L15.8303 16.3181C15.8352 16.3139 15.8399 16.3098 15.8447 16.3055L15.344 15.7471ZM14.2847 15.8767L14.6191 15.2053L14.6191 15.2053L14.2847 15.8767ZM13.75 14.9531L14.4987 14.9973C14.4996 14.9826 14.5 14.9679 14.5 14.9531H13.75ZM13.75 12.7391C14.1642 12.7391 14.5 12.4033 14.5 11.9891C14.5 11.5749 14.1642 11.2391 13.75 11.2391V12.7391ZM5 11.2391C4.58579 11.2391 4.25 11.5749 4.25 11.9891C4.25 12.4033 4.58579 12.7391 5 12.7391V11.2391ZM14.5 11.9891V9.0251H13V11.9891H14.5ZM14.4987 8.98087C14.4935 8.89368 14.5409 8.81182 14.6191 8.77288L13.9503 7.43023C13.3342 7.73714 12.9607 8.38219 13.0013 9.06934L14.4987 8.98087ZM14.6191 8.77288C14.6973 8.73394 14.7912 8.74542 14.8577 8.80206L15.8303 7.66015C15.3063 7.2138 14.5665 7.12332 13.9503 7.43023L14.6191 8.77288ZM14.8434 8.78961L18.1494 11.7526L19.1506 10.6356L15.8446 7.67259L14.8434 8.78961ZM18.1431 11.7469C18.2108 11.809 18.2494 11.8967 18.2494 11.9886H19.7494C19.7494 11.4763 19.5345 10.9876 19.1569 10.6413L18.1431 11.7469ZM18.2494 11.9886C18.2494 12.0805 18.2108 12.1682 18.1431 12.2303L19.1569 13.3359C19.5345 12.9896 19.7494 12.5009 19.7494 11.9886H18.2494ZM18.1493 12.2247L14.8433 15.1887L15.8447 16.3055L19.1507 13.3415L18.1493 12.2247ZM14.8577 15.1762C14.7912 15.2328 14.6973 15.2443 14.6191 15.2053L13.9503 16.548C14.5665 16.8549 15.3063 16.7644 15.8303 16.3181L14.8577 15.1762ZM14.6191 15.2053C14.5409 15.1664 14.4935 15.0845 14.4987 14.9973L13.0013 14.9089C12.9607 15.596 13.3342 16.2411 13.9503 16.548L14.6191 15.2053ZM14.5 14.9531V11.9891H13V14.9531H14.5ZM13.75 11.2391H5V12.7391H13.75V11.2391Z"
                                            fill="#76ABAE" />
                                    </svg>
                                </div>
                            </div>
                            <div class="w-[75%] pl-2 flex-col justify-center">
                                <h1 class="font-semibold text-lg text-blanc flex">Éléctronique, Maçonerie, Plomberie ...
                                </h1>
                            </div>
                        </div>
                        <div
                            class="w-[95%] flex flex-row border-4 rounded-lg shadow-md border-light-gray h-12  items-center">
                            <div class="flex flex-row w-[15%] h-[90%] items-center">
                                <div class="flex flew-row items-center justify-around pl-2">
                                    <svg class="h-10 w-10" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.75 9.0251H14.5C14.5 9.01035 14.4996 8.9956 14.4987 8.98087L13.75 9.0251ZM14.2847 8.10156L13.9503 7.43023L14.2847 8.10156ZM15.344 8.2311L15.8446 7.67259C15.8399 7.66838 15.8351 7.66424 15.8303 7.66015L15.344 8.2311ZM18.65 11.1941L19.1569 10.6413L19.1506 10.6356L18.65 11.1941ZM18.65 12.7831L19.1507 13.3416L19.1569 13.3359L18.65 12.7831ZM15.344 15.7471L15.8303 16.3181C15.8352 16.3139 15.8399 16.3098 15.8447 16.3055L15.344 15.7471ZM14.2847 15.8767L14.6191 15.2053L14.6191 15.2053L14.2847 15.8767ZM13.75 14.9531L14.4987 14.9973C14.4996 14.9826 14.5 14.9679 14.5 14.9531H13.75ZM13.75 12.7391C14.1642 12.7391 14.5 12.4033 14.5 11.9891C14.5 11.5749 14.1642 11.2391 13.75 11.2391V12.7391ZM5 11.2391C4.58579 11.2391 4.25 11.5749 4.25 11.9891C4.25 12.4033 4.58579 12.7391 5 12.7391V11.2391ZM14.5 11.9891V9.0251H13V11.9891H14.5ZM14.4987 8.98087C14.4935 8.89368 14.5409 8.81182 14.6191 8.77288L13.9503 7.43023C13.3342 7.73714 12.9607 8.38219 13.0013 9.06934L14.4987 8.98087ZM14.6191 8.77288C14.6973 8.73394 14.7912 8.74542 14.8577 8.80206L15.8303 7.66015C15.3063 7.2138 14.5665 7.12332 13.9503 7.43023L14.6191 8.77288ZM14.8434 8.78961L18.1494 11.7526L19.1506 10.6356L15.8446 7.67259L14.8434 8.78961ZM18.1431 11.7469C18.2108 11.809 18.2494 11.8967 18.2494 11.9886H19.7494C19.7494 11.4763 19.5345 10.9876 19.1569 10.6413L18.1431 11.7469ZM18.2494 11.9886C18.2494 12.0805 18.2108 12.1682 18.1431 12.2303L19.1569 13.3359C19.5345 12.9896 19.7494 12.5009 19.7494 11.9886H18.2494ZM18.1493 12.2247L14.8433 15.1887L15.8447 16.3055L19.1507 13.3415L18.1493 12.2247ZM14.8577 15.1762C14.7912 15.2328 14.6973 15.2443 14.6191 15.2053L13.9503 16.548C14.5665 16.8549 15.3063 16.7644 15.8303 16.3181L14.8577 15.1762ZM14.6191 15.2053C14.5409 15.1664 14.4935 15.0845 14.4987 14.9973L13.0013 14.9089C12.9607 15.596 13.3342 16.2411 13.9503 16.548L14.6191 15.2053ZM14.5 14.9531V11.9891H13V14.9531H14.5ZM13.75 11.2391H5V12.7391H13.75V11.2391Z"
                                            fill="#76ABAE" />
                                    </svg>
                                </div>
                            </div>
                            <div class="w-[75%] pl-2 flex-col justify-center">
                                <h1 class="font-semibold text-lg text-blanc flex">Informatique, HardWare, Software ...
                                </h1>
                            </div>
                        </div>
                        <div
                            class="w-[95%] flex flex-row border-4 rounded-lg shadow-md border-light-gray h-12  items-center">
                            <div class="flex flex-row w-[15%] h-[90%] items-center">
                                <div class="flex flew-row items-center justify-around pl-2">
                                    <svg class="h-10 w-10" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.75 9.0251H14.5C14.5 9.01035 14.4996 8.9956 14.4987 8.98087L13.75 9.0251ZM14.2847 8.10156L13.9503 7.43023L14.2847 8.10156ZM15.344 8.2311L15.8446 7.67259C15.8399 7.66838 15.8351 7.66424 15.8303 7.66015L15.344 8.2311ZM18.65 11.1941L19.1569 10.6413L19.1506 10.6356L18.65 11.1941ZM18.65 12.7831L19.1507 13.3416L19.1569 13.3359L18.65 12.7831ZM15.344 15.7471L15.8303 16.3181C15.8352 16.3139 15.8399 16.3098 15.8447 16.3055L15.344 15.7471ZM14.2847 15.8767L14.6191 15.2053L14.6191 15.2053L14.2847 15.8767ZM13.75 14.9531L14.4987 14.9973C14.4996 14.9826 14.5 14.9679 14.5 14.9531H13.75ZM13.75 12.7391C14.1642 12.7391 14.5 12.4033 14.5 11.9891C14.5 11.5749 14.1642 11.2391 13.75 11.2391V12.7391ZM5 11.2391C4.58579 11.2391 4.25 11.5749 4.25 11.9891C4.25 12.4033 4.58579 12.7391 5 12.7391V11.2391ZM14.5 11.9891V9.0251H13V11.9891H14.5ZM14.4987 8.98087C14.4935 8.89368 14.5409 8.81182 14.6191 8.77288L13.9503 7.43023C13.3342 7.73714 12.9607 8.38219 13.0013 9.06934L14.4987 8.98087ZM14.6191 8.77288C14.6973 8.73394 14.7912 8.74542 14.8577 8.80206L15.8303 7.66015C15.3063 7.2138 14.5665 7.12332 13.9503 7.43023L14.6191 8.77288ZM14.8434 8.78961L18.1494 11.7526L19.1506 10.6356L15.8446 7.67259L14.8434 8.78961ZM18.1431 11.7469C18.2108 11.809 18.2494 11.8967 18.2494 11.9886H19.7494C19.7494 11.4763 19.5345 10.9876 19.1569 10.6413L18.1431 11.7469ZM18.2494 11.9886C18.2494 12.0805 18.2108 12.1682 18.1431 12.2303L19.1569 13.3359C19.5345 12.9896 19.7494 12.5009 19.7494 11.9886H18.2494ZM18.1493 12.2247L14.8433 15.1887L15.8447 16.3055L19.1507 13.3415L18.1493 12.2247ZM14.8577 15.1762C14.7912 15.2328 14.6973 15.2443 14.6191 15.2053L13.9503 16.548C14.5665 16.8549 15.3063 16.7644 15.8303 16.3181L14.8577 15.1762ZM14.6191 15.2053C14.5409 15.1664 14.4935 15.0845 14.4987 14.9973L13.0013 14.9089C12.9607 15.596 13.3342 16.2411 13.9503 16.548L14.6191 15.2053ZM14.5 14.9531V11.9891H13V14.9531H14.5ZM13.75 11.2391H5V12.7391H13.75V11.2391Z"
                                            fill="#76ABAE" />
                                    </svg>
                                </div>
                            </div>
                            <div class="w-[75%] pl-2 flex-col justify-center">
                                <h1 class="font-semibold text-lg text-blanc flex">Les nouvelles téchnologies ...</h1>
                            </div>
                        </div>
                        <div
                            class="w-[95%]  flex flex-row border-4 rounded-lg shadow-md border-light-gray h-12  items-center">
                            <div class="flex flex-row w-[15%] h-[90%] items-center">
                                <div class="flex flew-row items-center justify-around pl-2">
                                    <svg class="h-10 w-10" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.75 9.0251H14.5C14.5 9.01035 14.4996 8.9956 14.4987 8.98087L13.75 9.0251ZM14.2847 8.10156L13.9503 7.43023L14.2847 8.10156ZM15.344 8.2311L15.8446 7.67259C15.8399 7.66838 15.8351 7.66424 15.8303 7.66015L15.344 8.2311ZM18.65 11.1941L19.1569 10.6413L19.1506 10.6356L18.65 11.1941ZM18.65 12.7831L19.1507 13.3416L19.1569 13.3359L18.65 12.7831ZM15.344 15.7471L15.8303 16.3181C15.8352 16.3139 15.8399 16.3098 15.8447 16.3055L15.344 15.7471ZM14.2847 15.8767L14.6191 15.2053L14.6191 15.2053L14.2847 15.8767ZM13.75 14.9531L14.4987 14.9973C14.4996 14.9826 14.5 14.9679 14.5 14.9531H13.75ZM13.75 12.7391C14.1642 12.7391 14.5 12.4033 14.5 11.9891C14.5 11.5749 14.1642 11.2391 13.75 11.2391V12.7391ZM5 11.2391C4.58579 11.2391 4.25 11.5749 4.25 11.9891C4.25 12.4033 4.58579 12.7391 5 12.7391V11.2391ZM14.5 11.9891V9.0251H13V11.9891H14.5ZM14.4987 8.98087C14.4935 8.89368 14.5409 8.81182 14.6191 8.77288L13.9503 7.43023C13.3342 7.73714 12.9607 8.38219 13.0013 9.06934L14.4987 8.98087ZM14.6191 8.77288C14.6973 8.73394 14.7912 8.74542 14.8577 8.80206L15.8303 7.66015C15.3063 7.2138 14.5665 7.12332 13.9503 7.43023L14.6191 8.77288ZM14.8434 8.78961L18.1494 11.7526L19.1506 10.6356L15.8446 7.67259L14.8434 8.78961ZM18.1431 11.7469C18.2108 11.809 18.2494 11.8967 18.2494 11.9886H19.7494C19.7494 11.4763 19.5345 10.9876 19.1569 10.6413L18.1431 11.7469ZM18.2494 11.9886C18.2494 12.0805 18.2108 12.1682 18.1431 12.2303L19.1569 13.3359C19.5345 12.9896 19.7494 12.5009 19.7494 11.9886H18.2494ZM18.1493 12.2247L14.8433 15.1887L15.8447 16.3055L19.1507 13.3415L18.1493 12.2247ZM14.8577 15.1762C14.7912 15.2328 14.6973 15.2443 14.6191 15.2053L13.9503 16.548C14.5665 16.8549 15.3063 16.7644 15.8303 16.3181L14.8577 15.1762ZM14.6191 15.2053C14.5409 15.1664 14.4935 15.0845 14.4987 14.9973L13.0013 14.9089C12.9607 15.596 13.3342 16.2411 13.9503 16.548L14.6191 15.2053ZM14.5 14.9531V11.9891H13V14.9531H14.5ZM13.75 11.2391H5V12.7391H13.75V11.2391Z"
                                            fill="#76ABAE" />
                                    </svg>
                                </div>
                            </div>
                            <div class="w-[75%] pl-2 flex-col justify-center">
                                <h1 class="font-semibold text-lg text-blanc flex">Musique, Plongée sous-marine ...</h1>
                            </div>
                        </div>
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
