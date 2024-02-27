
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
    @foreach ($movies as $movie) <!--setting attribut to use-->
        <li>
            Movie ID: {{ $movie->id }},
            Movie Titel, {{$movie->titel}}
           
        </li>
    @endforeach
</ul>

