@extends('base')
@section('content')
    <div class="h-[100vh] w-[100%] overflow-y-scroll">
        <div class="h-[100vh] w-[100%] flex flex-row ">
            @foreach ( $images as $img )
                <img src="{{Vite::asset('resources/img/'.$real.'/'.$img)}}">
            @endforeach

        </div>
    </div>
@endsection
