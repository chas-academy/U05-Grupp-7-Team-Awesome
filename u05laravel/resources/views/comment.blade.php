<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Comments Page</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<!-- Scripts Navbar-->
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif


        <!-- Display Existing Movies with Images -->
        @if ($movies->count() > 0)
        <div class="grid grid-cols-3 gap-4">
            @foreach($movies as $movie)
            <img src="{{ asset($movie->photoPath) }}" alt="{{ $movie->title }}">
            @endforeach
        </div>
        @else
        <p class="text-gray-500">No movies found.</p>
        @endif

        <body class="bg-gray-100 min-h-screen flex flex-col justify-center items-center">
            <div class="max-w-md w-full p-6 bg-white rounded-lg shadow-md">
                <!-- Display success message if any -->
                @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                    <p class="font-bold">Success</p>
                    <p>{{ session('success') }}</p>
                </div>
                @endif

                <!-- Comment Form -->
                <form action="{{ route('comments.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <!-- Pass movie ID to the store method -->
                    <!--input type="hidden" name="movie_id" value=""-->
                    <div>
                        <label for="rating" class="block text-sm font-medium text-gray-700">Rating:</label>
                        <input type="number" name="rating" id="rating" min="1" max="5" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                    </div>
                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700">Comment:</label>
                        <textarea name="content" id="content" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required></textarea>
                    </div>
                    <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Submit
                    </button>
                </form>

                <hr class="my-6">

                <!-- Display Existing Comments -->
                @if ($comments->count() > 0)
                <h2 class="text-xl font-semibold mb-2">Comments</h2>
                @foreach($comments as $comment)
                <div class="bg-gray-50 rounded-lg p-4 mb-4">
                    <p class="text-lg font-semibold">Rating: {{ $comment->rating }}</p>
                    <p class="text-gray-700">{{ $comment->comment }}</p>
                </div>
                @endforeach
                @else
                <p class="text-gray-500">No comments yet.</p>
                @endif

                <!-- Add to My List button -->
                <!--form action="" method="POST"-->
                @csrf
                <!-- Pass movie ID to the addToMyList method -->
                <!--<input type="hidden" name="movie_id" value=""-->
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md mt-4">
                    Add to My List
                </button>
                </form>
            </div>
        </body>

</html>