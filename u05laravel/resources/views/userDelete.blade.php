<!-- Header with Navbar -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>





<body>

    <div class="flex justify-center items-center h-screen flex-col">
        <h1 style="color: #ff0000;" class="mb-4">Användarlista</h1>
        <ul class="list-disc">
            @foreach ($users as $user)
            <li class="flex items-center justify-between mb-3">
                <span>{{ $user->name }} - {{ $user->email }}</span>
                <form method="POST" action="{{ route('delete.user', ['id' => $user->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                </form>
            </li>
            @endforeach
        </ul>
    </div>

</body>

</html>