<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Erades Baptiste</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css','resources/js/flowbite.js'])
    </head>
    <body class="flex h-[100vh] bg-light-black">
        <div class="h-[100%] bg-light-gray w-[15%] fixed inset-0">@include('partials.header')</div>
        <div class="h-[100%] w-[85%] ml-[15%] flex">@yield('content')</div>
    </body>
</html>
