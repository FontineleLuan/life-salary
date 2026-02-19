<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="bg-gray-100">
        <div class="flex min-h-screen">
            <x-side-bar/>

            <main class="flex-1 py-18 px-12">

                {{ $slot }}
            </main>
        </div>    


        @livewireScripts
    </body>
</html>
