<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Movies Comments</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Scripts Navbar-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

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

<body class="bg-gray-100 min-h-screen flex flex-col justify-center items-center">
    <div class="max-w-4xl w-full p-6 bg-white rounded-lg shadow-md">
        <!-- Loop through each movie -->
        @foreach($movies as $movie)
        <div class="mb-6">
            <h2 class="text-xl font-semibold mb-2">{{ $movie->title }}</h2>
            <img src="{{ asset($movie->photoPath) }}" alt="Movie Image" class="mx-auto mb-4"> <!-- Center the image -->

            <!-- Display Comments for this Movie -->
            @if ($movie->comments->count() > 0)
            <h3 class="text-lg font-semibold mb-2">Comments</h3>
            @foreach($movie->comments as $comment)
            <div class="bg-gray-50 rounded-lg p-4 mb-4">
                <p class="text-gray-700">{{ $comment->comment }}</p>
            </div>
            @endforeach
            @else
            <p class="text-gray-500">No comments yet.</p>
            @endif
        </div>
        <hr class="my-6">
        @endforeach
    </div>
</body>
<div class=" w-full bg-gray-800 text-white p-4 z-50 block">
    @include('footer')
</div>

</html>