<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-white"> <!-- Lägg till bg-white här -->
    <div class="min-h-screen">
        @include('layouts.navigation')
        <!-- 
        <div class="flex items-center justify-center mt-8">
            <div class="max-w-lg w-full bg-white p-8 rounded-md shadow-lg">
                <h1 class="text-4xl font-bold text-black mb-4">Welcome to Film World</h1>

                <p class="text-lg text-black">
                    Explore the captivating world of cinema, where storytelling transcends borders. Immerse yourself in the
                    enchanting films of Japan, known for their unique cultural perspectives and artistic brilliance. Or venture
                    into the dynamic world of American cinema, where Hollywood creates cinematic magic that captivates audiences
                    around the globe.
                </p>
            </div>
        </div>

        <div class="flex items-center justify-center mt-8">
            <div class="max-w-lg w-full bg-white p-8 rounded-md shadow-lg">
                <h1 class="text-4xl font-bold text-black mb-4">As a registered user, you can do things like</h1>


                <ul class="list-disc pl-6 mb-6">


                    <li class="mb-2">Rate movies and share your feedback</li>

                    <li class="mb-2">Discover and explore top-rated movies</li>

                    <li class="mb-2">Build your own list of favorite movies</li>



                </ul>
            </div>
        </div> -->








        <main class="p-4">
            {{ $slot }}
        </main>
    </div>
</body>
<footer class=" w-full bg-gray-800 text-white p-4 z-50">
    @include('footer')
</footer>

</html>