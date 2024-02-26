<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>


@include('layouts.navigation')

<!-- Page Heading -->
@if (isset($header))
<header class="bg-white dark:bg-gray-800 shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        {{ $header }}
    </div>
</header>
@endif



<form action="{{ route('movies.update', ['id' => $movie->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="title">Titel:</label>
    <input type="text" name="titel" id="titel" value="{{ $movie->titel }}">

    <label for="genre">Genre:</label>
    <input type="text" name="genre" id="genre" value="{{ $movie->genre }}">

    <label for="country">Land:</label>
    <input type="text" name="country" id="country" value="{{ $movie->country }}">

    <label for="year">År:</label>
    <input type="text" name="year" id="year" value="{{ $movie->year }}">

    <label for="director">Regissör:</label>
    <input type="text" name="director" id="director" value="{{ $movie->director }}">

    <button type="submit">Uppdatera film</button>
</form>