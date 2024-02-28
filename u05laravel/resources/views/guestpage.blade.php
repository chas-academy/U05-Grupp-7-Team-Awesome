<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Lägg till följande meta-taggar för att se till att mobila webbläsare använder den senaste renderingmotorn -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
</head>

<body>

<div>
    <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded inline-block mt-4 mr-4">Login</a>
<a href="{{ route('register') }}" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded inline-block mt-4">Register</a>
    </div>
</html>
