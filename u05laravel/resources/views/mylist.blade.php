<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <!-- Lägg till följande meta-taggar för att se till att mobila webbläsare använder den senaste renderingmotorn -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
</head>

<!-- Scripts Navbar-->
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

    <body class="bg-gray-900 text-white p-4 md:p-8">
        <h1 class="text-2xl md:text-3xl mb-4 md:mb-8">My Saved Movies:</h1>

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
                        <td class="border px-6 py-3 sm:w-1/6">
                        <a href="{{ url('/mylist/delete/'.$movie->id) }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
    <footer class=" w-full bg-gray-800 text-white p-4 z-50 block">
        @include('footer')
    </footer>
</html>