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
    
<div class="overflow-x-auto">
    <div class="flex flex-col min-h-screen items-center justify-center bg-gray-100 dark:bg-white-900 mx-auto">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 mx-auto">

            <!-- Heading -->
            <h1 class="text-3xl mb-8 flex justify-center" style="color: #ff0000;">Country Movies</h1>

            <!-- Filter Form -->
            <form action="{{ route('country.filter') }}" method="GET" class="mb-8 flex flex-col sm:flex-row items-center justify-center">
                <label for="country" class="mr-2">Select Country:</label>
                <div class="flex">
                    <select name="country" id="country" class="flex-grow bg-gray-300 text-black p-2 mb-2 sm:mb-0 mr-2 rounded-md border border-gray-300 focus:outline-none">
                        <option value="">All</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country }}">{{ $country }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="bg-gray-300 text-black px-4 py-2 rounded-md border border-gray-300 focus:outline-none">Filter</button>
                </div>
            </form>

            <!-- Responsive Table -->
            <div class="overflow-x-auto flex justify-center">
                <table class="w-full sm:w-full md:w-4/5 lg:w-3/4 xl:w-2/3 bg-gray border-collapse border border-gray-300 sm:rounded-lg">
                    <thead class="hidden sm:table-header-group">
                        <tr class="bg-gray-300 sm:w-full">
                            <th class="py-2 px-4 border-b sm:table-cell">ID</th>
                            <th class="py-2 px-4 border-b sm:table-cell">Title</th>
                            <th class="py-2 px-4 border-b sm:table-cell">Genre</th>
                            <th class="py-2 px-4 border-b sm:table-cell">Country</th>
                            <th class="py-2 px-4 border-b sm:table-cell">Release Year</th>
                            <th class="py-2 px-4 border-b sm:table-cell">Director</th>
                            <th class="py-2 px-4 border-b sm:table-cell">Photo</th>
                            <th class="py-2 px-4 border-b sm:table-cell">Comment</th>
                        </tr>
                    </thead>
                    <tbody class="sm:table-row-group">
                        @foreach ($movies as $movie)
                        <tr class="hover:bg-gray-100 sm:table-row flex flex-col w-full">
                            <td class="py-2 px-4 border-b sm:table-cell">{{ $movie->id }}</td>
                            <td class="py-2 px-4 border-b sm:table-cell">{{ $movie->titel }}</td>
                            <td class="py-2 px-4 border-b sm:table-cell">{{ $movie->genre }}</td>
                            <td class="py-2 px-4 border-b sm:table-cell">{{ $movie->country }}</td>
                            <td class="py-2 px-4 border-b sm:table-cell">{{ $movie->year }}</td>
                            <td class="py-2 px-4 border-b sm:table-cell">{{ $movie->director }}</td>
                            <td class="py-2 px-4 border-b sm:table-cell"><img src="{{ asset($movie->photoPath) }}" alt="{{ $movie->title }}" class="w-16 h-16"></td>
                            <td class="py-2 px-4 border-b sm:table-cell">
                            <a href="{{ url('/comment/'.$movie->id) }}" class="text-white-500 hover:underline border border-blue-500 bg-blue-500 text-white px-2 py-1 rounded">Comment</a</td>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

  
  
</body>
<div class=" w-full bg-gray-800 text-white p-4 z-50 block">
    @include('footer')
</div>
  
</html>
