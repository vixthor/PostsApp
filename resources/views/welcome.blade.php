<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
         @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased h-full bg-dark-brown">
        <div class="relative  flex mx-auto h-1/4 justify-between bg-dark-brown sm:items-center px-2 py-4 ">
            <x-application-logo class="text-6xl   h-9 w-auto " />
            @if (Route::has('login'))
                <div class="hidden   px-6 py-3 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="link">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="  link ">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
            <section class="w-full background-image h-2/4 flex font-serif bg-[url('/public/images/adam-kool-ndN00KmbJ1c-unsplash.jpg')] bg-center bg-auto items-center text-center justify-center  text-7xl">
                 
                <div class="w-1/2 px-2 py-3 text-biege ">
                   
                    <h3 class="">Welcome to <span><x-application-logo class=" text-7xl w-auto"/></span></h3>
                    <p>Taking Communication to the next level</p>
                </div>
            </section>
            
    </body>
</html>
