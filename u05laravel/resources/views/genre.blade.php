<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genre Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-red-900 text-black p-8">
    <h1 class="text-3xl mb-8">Genre Movies</h1>
    <!-- i den har form  koden det gör att filtarera på genre  -->
    <form action="{{ route('genre.filter') }}" method="GET" class="mb-8">
        <!-- i den har label det är ett loop som visa vilken alternative av genre som man kan välja   -->
        <label for="genre" class="mr-4">Select Genre:</label>
        <select name="genre" id="genre" class="rounded-md bg-gray-500 text-black p-2">
            <option value="">All</option>
            @foreach ($genres as $genre)
            <option value="{{ $genre }}">{{ $genre }}</option>
            @endforeach
        </select>
        <!-- deta är en knapp som man kan filtarera  saker som man vill see   -->
        <button type="submit" class="bg-gray-300 text-black px-4 py-2 rounded-md ml-4">Filter</button>
    </form>

    <div class="overflow-x-auto border-collapse rounded-md">

        <!-- det är en TabelRubriken som har flera kolumrubriken  som visar olika information om movies o   -->
        <table class="w-full bg-gray-400 text-black ">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-left">Title</th>
                    <th class="px-6 py-3 text-left">Genre</th>
                    <th class="px-6 py-3 text-left">Country</th>
                    <th class="px-6 py-3 text-left">Release Year</th>
                    <th class="px-6 py-3 text-left">Director</th>
                    <th class="px-6 py-3 text-left">Photo</th>
                    <th class="px-6 py-3 text-left">comment</th>
                </tr>
            </thead>
            <!-- den här koden det är en looper  som gå varje filmobjekt  i movie array sedan skapas en table som har information till ex.genre om filmen osv   -->

            <tbody>
                @foreach ($movies as $movie)
                <tr>
                    <td class="border px-6 py-3">{{ $movie->titel }}</td>
                    <td class="border px-6 py-3">{{ $movie->genre }}</td>
                    <td class="border px-6 py-3">{{ $movie->country }}</td>
                    <td class="border px-6 py-3">{{ $movie->year }}</td>
                    <td class="border px-6 py-3">{{ $movie->director }}</td>
                    <td class="border px-6 py-3"><img src="{{ asset($movie->photoPath) }}" alt="{{ $movie->title }}" class="w-16 h-16"></td>
                    <td class="border px-6 py-3">
                        <form action="{{ route('movies.comment', $movie) }}" method="POST">
                            @csrf
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Comment</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>