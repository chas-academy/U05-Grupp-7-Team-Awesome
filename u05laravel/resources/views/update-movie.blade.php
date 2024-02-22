<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
</div>

<!-- ÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖÖ -->






<form action="{{ route('movies.update', ['id' => $movie->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="title">Titel:</label>
    <input type="text" name="title" id="title" value="{{ $movie->title }}">

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