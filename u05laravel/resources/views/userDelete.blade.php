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


<!-- <table class="table-auto">
    <thead>
        <tr>
            <th>Song</th>
            <th>Artist</th>
            <th>Year</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
            <td>Malcolm Lockyer</td>
            <td>1961</td>
        </tr>
        <tr>
            <td>Witchy Woman</td>
            <td>The Eagles</td>
            <td>1972</td>
        </tr>
        <tr>
            <td>Shining Star</td>
            <td>Earth, Wind, and Fire</td>
            <td>1975</td>
        </tr>
    </tbody>
</table> -->