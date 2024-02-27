
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<h1>My List</h1>

<p>My List ID: {{ $myList->id }}</p>

<h2>Movies:</h2>
<ul>
    @foreach ($myList as $movie) <!--setting attribut to use-->
        <li>
            Movie ID: {{ $movie->id }},
            My List ID: {{ $movie->pivot->my_list_id }}
            Movie ID: {{ $movie->pivot->movie_id }}
        </li>
    @endforeach
</ul>

 <!-- Vill ta in datan på detta sättet!
    
<body class="bg-gray-900 text-white p-8">
    <h1 class="text-3xl mb-8">My List</h1>

    <form action="{{ route('mylist') }}" method="GET" class="mb-8">
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
   -->