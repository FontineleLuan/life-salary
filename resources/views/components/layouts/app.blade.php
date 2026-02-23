<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <title>{{ $title ?? config('app.name') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="bg-gray-100 font-sans">
        <div class="flex min-h-screen">
            <x-side-bar/>

            <div class="flex-1">
                <div class="flex justify-end px-12 pt-6">
                    <div class="bg-white px-6 py-3 rounded-lg flex items-center gap-4 font-bold">
                        <img src="{{ asset('img/user.png')}}">
                        Luan
                    </div>
                </div>
            
            <main class="flex-1 py-15 px-12">

                {{ $slot }}
            </main>
            </div>
        </div>    


        @livewireScripts
    </body>
</html>
