<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
</head>

<!-- Scripts Navbar-->
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<div class="min-h-screen bg-gray-100 ">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @if (isset($header))
    <header class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>
    @endif


    <body class="font-sans antialiased">


        <div class="p-4 lg:p-8 flex flex-col items-center justify-center">
            <h1 class="text-3xl lg:text-4xl mb-4 lg:mb-8">Top Movies</h1>
            @foreach ($movies as $movie)
            <div class="mb-6 lg:mb-8 w-full max-w-md mx-auto  flex flex-col items-center justify-center">
                <h2 class="text-xl lg:text-2xl font-semibold mb-2">{{ $movie->title }}</h2>
                <p class="text-sm lg:text-lg">Rating: {{ $movie->comments_avg_rating }}</p>


                <p class="text-sm lg:text-lg mb-2"> {{ $movie->titel }}</p>

                <!-- Visa filmens foto -->
                <img src="{{ asset($movie->photoPath) }}" alt="{{ $movie->title }}" class="w-full h-auto">
            </div>
            @endforeach
        </div>
    </body>

    <footer class=" w-full bg-gray-800 text-white p-4 z-50">
        @include('footer')
    </footer>

</html>