<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
</div>

<!-- ÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖ -->




<!-- Fixa en gene controller till denna -->

<!-- ÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖ -->

@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <h1>Redigera film</h1>
    <form action="{{ route('movies.update', ['id' => $movie->id]) }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block text-gray-600">Titel:</label>
            <input type="text" id="title" name="title" value="{{ $movie->title }}" class="w-full p-2 border rounded">
        </div>

        <div class="mb-4">
            <label for="genre" class="block text-gray-600">Genre:</label>
            <input type="text" id="genre" name="genre" value="{{ $movie->genre }}" class="w-full p-2 border rounded">
        </div>

        <!-- Lägg till andra formulärfält för de andra attributen -->

        <button type="submit" class="mt-4 p-2 bg-blue-500 text-white rounded">Uppdatera</button>
    </form>
</div>
@endsection