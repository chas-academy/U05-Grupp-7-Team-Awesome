<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genre Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Scripts Navbar -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<!-- Scripts Navbar-->
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<header class="font-sans antialiased">
    <div>
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
        <header classbg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif
</header>



<body>

    <div class="min-h-screen bg-gray-100 dark:bg-white-900">

        <div class="container mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Heading -->
            <h1 class="text-3xl mb-8">Genre Movies</h1>

            <!-- Filter Form -->
            <form action="{{ route('genre.filter') }}" method="GET" class="mb-8 flex flex-col sm:flex-row items-center">
                <label for="genre" class="mr-4">Select Genre:</label>
                <select name="genre" id="genre" class="rounded-md bg-gray-500 text-black p-2 mb-2 sm:mb-0">
                    <option value="">All</option>
                    @foreach ($genres as $genre)
                    <option value="{{ $genre }}">{{ $genre }}</option>
                    @endforeach
                </select>
                <button type="submit" class="bg-gray-500 text-black px-4 py-2 rounded-md ml-0 sm:ml-4">Filter</button>
            </form>

            <!-- Responsive Table -->
            <div class="overflow-x-auto">
                <table class="w-full sm:w-full md:w-4/5 lg:w-3/4 xl:w-2/3 bg-gray border-collapse border border-gray-300 sm:rounded-lg">
                    <thead class="hidden sm:table-header-group">
                        <tr class="hover:bg-gray-100 sm:table-row flex flex-col w-full">
                            <th class="px-6 py-3 text-left sm:w-1/6">Title</th>
                            <th class="px-6 py-3 text-left sm:w-1/6">Genre</th>
                            <th class="px-6 py-3 text-left sm:w-1/6">Country</th>
                            <th class="px-6 py-3 text-left sm:w-1/6">Release Year</th>
                            <th class="px-6 py-3 text-left sm:w-1/6">Director</th>
                            <th class="px-6 py-3 text-left sm:w-1/6">Photo</th>
                            <th class="px-6 py-3 text-left sm:w-1/6">Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($movies as $movie)
                        <tr class="hover:bg-gray-100 sm:table-row flex flex-col w-full">
                            <td class="border px-6 py-3 sm:w-1/6">{{ $movie->titel }}</td>
                            <td class="border px-6 py-3 sm:w-1/6">{{ $movie->genre }}</td>
                            <td class="border px-6 py-3 sm:w-1/6">{{ $movie->country }}</td>
                            <td class="border px-6 py-3 sm:w-1/6">{{ $movie->year }}</td>
                            <td class="border px-6 py-3 sm:w-1/6">{{ $movie->director }}</td>
                            <td class="border px-6 py-3 sm:w-1/6"><img src="{{ asset($movie->photoPath) }}" alt="{{ $movie->title }}" class="w-16 h-16"></td>
                            <td class="border px-6 py-3 sm:w-1/6">
                                <a href="{{ url('/comment/'.$movie->id) }}">Comment</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
