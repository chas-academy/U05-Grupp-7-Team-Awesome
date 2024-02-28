<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing/guest page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Lägg till följande meta-taggar för att se till att mobila webbläsare använder den senaste renderingmotorn -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
</head>

<body class="bg-gray-100 min-h-screen flex flex-col justify-center items-center">
    <div class="flex justify-end p-4">
        <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded inline-block mt-4 mr-4">Login</a>
        <a href="{{ route('register') }}" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded inline-block mt-4">Register</a>
    </div>

    <div class="flex items-center justify-center mb-8 bg-white rounded-lg shadow-lg p-6">
    <span class="md:text-xl font-semibold text-center">
        Welcome to DBOM -> DataBase of Movies!<br>
        You can browse our movie library here.<br>
        If you wanna review or rate please Login or Register in the right corner!
    </span>
</div>

    

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 justify-center">
        @foreach ($movies as $index => $movie)
        <div class="flex flex-col items-center">
            <h2 class="text-xl font-semibold mb-2">{{ $movie->title }}</h2>
            <img src="{{ asset($movie->photoPath) }}" alt="{{ $movie->title }} Image" class="mx-auto mb-4 w-full h-auto object-contain rounded-lg">
            <p class="text-center">{{ $movie->title }}</p> <!-- Add the title below the image -->
        </div>
        @endforeach
    </div>
</body>

</html>
