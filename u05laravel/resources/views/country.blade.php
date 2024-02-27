<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<!-- Scripts Navbar-->
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif


        <body class="bg-gray-900 text-white p-8">
            <h1 class="text-3xl mb-8">Country Movies</h1>


            <form action="{{ route('country.filter') }}" method="GET" class="mb-8">
                <label for="country" class="mr-4">Select Country:</label>
                <select name="country" id="country" class="rounded-md bg-gray-800 text-white p-2">
                    <option value="">All</option>
                    @foreach ($countries as $country)
                    <option value="{{ $country }}">{{ $country }}</option>
                    @endforeach
                </select>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md ml-4">Filter</button>
            </form>


            <div class="overflow-x-auto">
                <table class="w-full bg-gray-800 text-white border-collapse">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left">Title</th>
                            <th class="px-6 py-3 text-left">Genre</th>
                            <th class="px-6 py-3 text-left">Country</th>
                            <th class="px-6 py-3 text-left">Release Year</th>
                            <th class="px-6 py-3 text-left">Director</th>
                            <th class="px-6 py-3 text-left">Photo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($movies as $movie)
                        <tr>
                            <td class="border px-6 py-3">{{ $movie->titel }}</td>
                            <td class="border px-6 py-3">{{ $movie->genre }}</td>
                            <td class="border px-6 py-3">{{ $movie->country }}</td>
                            <td class="border px-6 py-3">{{ $movie->year }}</td>
                            <td class="border px-6 py-3">{{ $movie->director }}</td>
                            <td class="border px-6 py-3"><img src="{{ asset($movie->photoPath) }}" alt="{{ $movie->title }}" class="w-16 h-16"></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </body>


</html>