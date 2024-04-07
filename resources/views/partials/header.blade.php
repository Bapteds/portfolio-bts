<div class="h-[100%] w-[100%] ">
    <div class="h-[15%] w-[80%] flex items-center justif-left ">
        <h1 class="font-semibold text-white text-2xl pl-6 uppercase"><span class="text-4xl text-button-vio">Erades</span><br> Baptiste</h1>
    </div>
    <div class="h-[70%] font-semibold w-[100%] flex flex-col items-center text-lg">
        <div class="text-white w-[80%] h-[10%] flex justify-left items-center ">
            <a href="{{route('accueil')}}" class="hover:scale-105  hover:text-button-vio hover:font-bold duration-200 {{Route::is('acceuil') ?'text-button-vio font-bold' :'' }}">Accueil</a>
        </div>
        <div class="text-white w-[80%] h-[10%] flex justify-left items-center ">
            <a href="{{route('cv')}}" class="hover:scale-105  hover:text-button-vio hover:font-bold duration-200 {{Route::is('cv') ?'text-button-vio font-bold' :'' }} ">Mon CV</a>
        </div>
        <!--<div class="text-white w-[80%] h-[10%] flex justify-left items-center ">
            <a href="{route('bts')}}" class="hover:scale-105  hover:text-button-vio hover:font-bold duration-200 {Route::is('bts') ?'text-button-vio font-bold' :'' }}">Mon BTS</a>
        </div>-->
        <div class="text-white w-[80%] h-[10%] flex justify-left items-center ">
            <a href="{{route('realisations')}}" class="hover:scale-105 hover:text-button-vio hover:font-bold duration-200 {{Route::is('realisations') ?'text-button-vio font-bold' :'' }}">Mes réalisations</a>
        </div>
        <div class="text-white w-[80%] h-[10%] flex justify-left items-center ">
            <a href="{{route('veille-techno')}}" class="hover:scale-105 hover:text-button-vio hover:font-bold duration-200 {{Route::is('veille-techno') ?'text-button-vio font-bold' :'' }}">Ma veille technologique</a>
        </div>
        <div class="text-white w-[80%] h-[10%] flex justify-left items-center ">
            <a href="mailto:eradesbapt@gmail.com" class="hover:scale-105 hover:text-button-vio hover:font-bold duration-200">Me contacter</a>
        </div>
    </div>
    <div class="h-[15%] w-[100%] flex items-center justify-center">
        <div class="h-[80%] w-[100%] flex justify-around items-center">
            <a target="_blanck" href="https://github.com/Bapteds"><img class="w-9" src="{{ Vite::asset('resources/img/svg/github.svg') }}"></a>
            <a target="_blanck" href="https://www.instagram.com/bapt_eds/?hl=fr"><img class="w-9" src="{{ Vite::asset('resources/img/svg/instagram.svg') }}"></a>
            <a target="_blanck" href="https://www.linkedin.com/in/baptiste-erades-b41794296/"><img class="w-9" src="{{ Vite::asset('resources/img/svg/linkedin.svg') }}"></a>
        </div>
    </div>
</div>
