<!-- Header with Navbar -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>



<!-- Scripts Navbar-->
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<div class="">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @if (isset($header))
    <header class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>
    @endif




    <body class="bg-gray-100">

        <div class="flex justify-center items-center h-screen flex-col">
            <h1 style="color: #ff0000;" class="text-4xl font-bold mb-4">Användarlista</h1>
            <ul class="list-disc w-full max-w-md">
                @foreach ($users as $user)
                <li class="flex items-center justify-between mb-3 bg-white p-4 rounded-md shadow-md">
                    <span>{{ $user->name }} - {{ $user->email }}</span>
                    <form method="POST" action="{{ route('delete.user', ['id' => $user->id]) }}" class="flex flex-col items-center justify-center mt-4">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-700">Delete</button>
                    </form>


                </li>
                @endforeach
            </ul>
        </div>

    </body>

    @include('footer')

    </html>