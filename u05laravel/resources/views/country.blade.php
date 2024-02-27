<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Scripts Navbar-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<nav class="w-full">
    @include('layouts.navigation')
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

<body>
    

    <div class="flex flex-col min-h-screen bg-gray-100 dark:bg-white-900">

        <div class="container mx-auto p-4">
            <h1 class="text-3xl mb-9">Country Movies</h1>

            <form action="{{ route('country.filter') }}" method="GET" class="mb-8">
                <label for="country" class="mr-4">Select Country:</label>
                <select name="country" id="country" class="rounded-md bg-gray-500 text-gray p-2">
                    <option value="">All</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country }}">{{ $country }}</option>
                    @endforeach
                </select>
                <button type="submit" class="bg-gray-500 text-white px-4 py-2 rounded-md ml-4">Filter</button>
            </form>

            <div class="overflow-x-auto mx-auto">
                <table class="w-full text-white border-collapse">
                    <tbody>
                        @foreach ($movies as $movie)
                            <tr class="flex flex-wrap">
                                <td class="border bg-gray-800 px-2 py-1 w-full sm:w-1/2 md:w-1/6 lg:w-1/12">
                                    <div class="px-2 py-1 mb-1 sm:mb-0">Title: {{ $movie->title }}</div>
                                </td>
                                <td class="border bg-gray-800 px-2 py-1 w-full sm:w-1/2 md:w-1/6 lg:w-1/12">
                                    <div class="px-2 py-1 mb-1 sm:mb-0">Genre: {{ $movie->genre }}</div>
                                </td>
                                <td class="border bg-gray-800 px-2 py-1 w-full sm:w-1/2 md:w-1/6 lg:w-1/12">
                                    <div class="px-2 py-1 mb-1 sm:mb-0">Country: {{ $movie->country }}</div>
                                </td>
                                <td class="border bg-gray-800 px-2 py-1 w-full sm:w-1/2 md:w-1/6 lg:w-1/12">
                                    <div class="px-2 py-1 mb-1 sm:mb-0">Release Year: {{ $movie->year }}</div>
                                </td>
                                <td class="border bg-gray-800 px-2 py-1 w-full sm:w-1/2 md:w-1/6 lg:w-1/12">
                                    <div class="px-2 py-1 mb-1 sm:mb-0">Director: {{ $movie->director }}</div>
                                </td>
                                <td class="border bg-gray-800 px-2 py-1 w-full sm:w-1/2 md:w-1/6 lg:w-1/12">
                                    <div class="px-2 py-1 mb-1 sm:mb-0">Photo: <img src="{{ asset($movie->photoPath) }}" alt="{{ $movie->title }}" class="w-8 h-8"></div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  
  
</body>
<div class=" w-full bg-gray-800 text-white p-4 z-50 block">
    @include('footer')
</div>
  
</html>
