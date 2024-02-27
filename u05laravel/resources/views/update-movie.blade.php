<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>


@vite(['resources/css/app.css', 'resources/js/app.js'])

<nav class="w-full">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @if (isset($header))
    <header class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>
    @endif
</nav>


<div class="min-h-screen bg-gray-100 ">


    <div class="flex flex-col min-h-screen items-center justify-center bg-gray-100 dark:bg-white-900">
        <form action="{{ route('movies.update', ['id' => $movie->id]) }}" method="POST" class="max-w-md mx-auto bg-white p-8 shadow-md rounded-md mt-4">
            <!-- Your form content goes here -->




            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="titel" class="block text-sm font-bold text-gray-600">Titel:</label>
                <input type="text" name="titel" id="titel" value="{{ $movie->titel }}" class="w-full mt-1 p-2 border rounded-md">
            </div>

            <div class="mb-4">
                <label for="genre" class="block text-sm font-bold text-gray-600">Genre:</label>
                <input type="text" name="genre" id="genre" value="{{ $movie->genre }}" class="w-full mt-1 p-2 border rounded-md">
            </div>

            <div class="mb-4">
                <label for="country" class="block text-sm font-bold text-gray-600">Land:</label>
                <input type="text" name="country" id="country" value="{{ $movie->country }}" class="w-full mt-1 p-2 border rounded-md">
            </div>

            <div class="mb-4">
                <label for="year" class="block text-sm font-bold text-gray-600">År:</label>
                <input type="text" name="year" id="year" value="{{ $movie->year }}" class="w-full mt-1 p-2 border rounded-md">
            </div>

            <div class="mb-4">
                <label for="director" class="block text-sm font-bold text-gray-600">Regissör:</label>
                <input type="text" name="director" id="director" value="{{ $movie->director }}" class="w-full mt-1 p-2 border rounded-md">
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">Uppdatera film</button>
        </form>
    </div>

    @include('footer')