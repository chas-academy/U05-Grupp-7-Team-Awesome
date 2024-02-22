<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<div>
    <h1>Hello</h1>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div>



<!-- <div class="flex justify-center items-center h-screen flex-col">
    <h1 style="color: #ff0000;" class="mb-4">Filmlista</h1>
    <table class="border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                @foreach ($movies->first()->getAttributes() as $key => $value)
                @if ($key === 'photoPath')
                <th class="py-2 px-4 border-b">Bild</th>
                @else
                <th class="py-2 px-4 border-b">{{ ucfirst($key) }}</th>
                @endif
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
            <tr class="hover:bg-gray-100">
                @foreach ($movie->getAttributes() as $key => $value)
                @if ($key === 'photoPath')
                <td class="py-2 px-4 border-b">
                    <img src="{{ asset($value) }}" alt="Movie Cover" class="w-20 h-20 object-cover">
                </td>
                @else
                <td class="py-2 px-4 border-b">{{ $value }}</td>
                @endif
                @endforeach
            </tr>
            @endforeach
        </tbody>
    </table>
</div> -->

<div class="flex justify-center items-center h-screen flex-col">
    <h1 style="color: #ff0000;" class="mb-4">Filmlista</h1>
    <table class="border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                @foreach ($movies->first()->getAttributes() as $key => $value)
                @if ($key === 'photoPath')
                <th class="py-2 px-4 border-b">Bild</th>
                @else
                <th class="py-2 px-4 border-b">{{ ucfirst($key) }}</th>
                @endif
                @endforeach
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
            <tr class="hover:bg-gray-100">
                @foreach ($movie->getAttributes() as $key => $value)
                @if ($key === 'photoPath')
                <td class="py-2 px-4 border-b">
                    <img src="{{ asset($value) }}" alt="Movie Cover" class="w-20 h-20 object-cover">
                </td>
                @else
                <td class="py-2 px-4 border-b">{{ $value }}</td>
                @endif
                @endforeach
                <td class="py-2 px-4 border-b">
                    <div class="flex">
                        <form action="{{ route('movies.edit', ['id' => $movie->id]) }}" method="POST" class="mr-2">
                            @csrf
                            @method('GET')
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Update</button>
                        </form>

                        <form action="{{ route('movies.destroy', ['id' => $movie->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this movie?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>