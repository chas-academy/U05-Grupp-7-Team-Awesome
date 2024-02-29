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

<body>

    <div class="overflow-x-auto">
        <div class="flex flex-col min-h-screen items-center justify-center bg-gray-100 dark:bg-white-900 mx-auto">
            <!-- Heading -->
            <h1 class="text-3xl mb-8 flex justify-center" style="color: #ff0000;">My Saved Movies:</h1>
            <!-- Responsive Table -->
            <div class="overflow-x-auto flex justify-center">
                <table class="w-full sm:w-full md:w-4/5 lg:w-3/4 xl:w-2/3 bg-gray border-collapse border border-gray-300 sm:rounded-lg">
                    <thead class="hidden sm:table-header-group">
                        <tr class="bg-gray-300 sm:w-full">
                            <th class="py-2 px-4 border-b sm:table-cell">Title</th>
                            <th class="py-2 px-4 border-b sm:table-cell">Genre</th>
                            <th class="py-2 px-4 border-b sm:table-cell">Country</th>
                            <th class="py-2 px-4 border-b sm:table-cell">Release Year</th>
                            <th class="py-2 px-4 border-b sm:table-cell">Director</th>
                            <th class="py-2 px-4 border-b sm:table-cell">Photo</th>
                            <th class="py-2 px-4 border-b sm:table-cell">Comment</th>
                            <th class="py-2 px-4 border-b sm:table-cell">Delete</th>
                        </tr>
                    </thead>
                    <tbody class="sm:table-row-group">
                        @foreach ($movies as $movie)
                        <tr class="hover:bg-gray-100 sm:table-row flex flex-col w-full">
                            <td class="border px-6 py-3 sm:w-1/8">{{ $movie->titel }}</td>
                            <td class="border px-6 py-3 sm:w-1/8">{{ $movie->genre }}</td>
                            <td class="border px-6 py-3 sm:w-1/8">{{ $movie->country }}</td>
                            <td class="border px-6 py-3 sm:w-1/8">{{ $movie->year }}</td>
                            <td class="border px-6 py-3 sm:w-1/8">{{ $movie->director }}</td>
                            <td class="py-2 px-4 border-b sm:table-cell"><img src="{{ asset($movie->photoPath) }}" alt="{{ $movie->title }}" class="w-21 h-auto"></td>
                            <td class="border px-6 py-3 sm:w-1/8">
                                <a href="{{ url('/comment/'.$movie->id) }}" class="text-white-500 hover:underline border border-blue-500 bg-blue-500 text-white px-2 py-1 rounded">Comment</a>
                            </td>
                            <td class="border px-6 py-3 sm:w-1/8">
                                <!-- Länk som deletar i My List -->
                                <a href="{{ route('mylist.delete', ['movie_id' => $movie->id]) }}" class="text-white-500 hover:underline border border-blue-500 bg-red-500 text-white px-2 py-1 rounded">Delete</a>
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
</div>
</html>