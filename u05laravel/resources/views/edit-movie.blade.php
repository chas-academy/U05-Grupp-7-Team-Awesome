<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <!-- Lägg till följande meta-taggar för att se till att mobila webbläsare använder den senaste renderingmotorn -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
</head>

<body class="font-sans antialiased">


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

            <!-- Table för Filmer -->

            <div class="flex flex-col items-center p-4 sm:p-0">
                <h1 style="color: #ff0000;" class="mb-4 text-xl md:text-2xl lg:text-3xl">Filmlista</h1>
                <div class="overflow-x-auto w-full min-w-full flex justify-center">
                    <table class="w-full sm:w-full md:w-4/5 lg:w-3/4 xl:w-2/3 bg-white border-collapse border border-gray-300 sm:rounded-lg">
                        <thead class="hidden sm:table-header-group">
                            <tr class="bg-gray-200 sm:w-full">
                                @foreach ($movies->first()->getAttributes() as $key => $value)
                                @if ($key === 'photoPath')
                                <th class=" py-2 px-4 border-b sm:table-cell">Bild</th>
                                @else
                                <th class="py-2 px-4 border-b sm:table-cell">{{ ucfirst($key) }}</th>
                                @endif
                                @endforeach
                                <th class="py-2 px-4 border-b sm:table-cell">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="sm:table-row-group">
                            @foreach ($movies as $movie)
                            <tr class="hover:bg-gray-100 sm:table-row flex flex-col w-full">
                                @foreach ($movie->getAttributes() as $key => $value)
                                @if ($key === 'photoPath')
                                <td class="py-2 px-4 border-b sm:table-cell">
                                    <img src="{{ asset($value) }}" alt="Movie Cover" class="w-20 h-20 object-cover mx-auto sm:mx-0">
                                </td>
                                @else
                                <td class="py-2 px-4 border-b sm:table-cell">{{ $value }}</td>
                                @endif
                                @endforeach
                                <td class="py-2 px-4 border-b sm:table-cell">
                                    <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2">
                                        <form action="{{ route('movies.edit', ['id' => $movie->id]) }}" method="POST">
                                            @csrf
                                            @method('GET')
                                            <button type="submit" class="w-full sm:w-auto px-4 py-2 bg-blue-500 text-white rounded">Update</button>
                                        </form>

                                        <form action="{{ route('movies.destroy', ['id' => $movie->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this movie?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="w-full sm:w-auto mt-2 sm:mt-0 px-4 py-2 bg-red-500 text-white rounded">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


    </body>

</html>