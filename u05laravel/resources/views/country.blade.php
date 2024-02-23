<!-- resources/views/country.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies List</title>
</head>
<body>
    <h1>Movies List</h1>
    
    <form action="{{ route('movies.filter') }}" method="GET">
        <label for="country">Select Country:</label>
        <select name="country" id="country">
            <option value="">All</option>
            @foreach ($countries as $country)
            <option value="{{ $country }}">{{ $country }}</option>
            @endforeach
        </select>
        <button type="submit">Filter</button>
    </form>
    
    <table border="1">
        <thead>
            <tr>
                <th>Title</th>
                <th>Country</th>
                <th>Release Year</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
            <tr>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->country }}</td>
                <td>{{ $movie->release_year }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
