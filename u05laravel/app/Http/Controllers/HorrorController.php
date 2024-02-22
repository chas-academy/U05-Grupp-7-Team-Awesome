<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HorrorController extends Controller

{
    public function index()
    {
        // Fetch horror movies from the database or any other source
        $horror = Movie::where('genre', 'horror')->get();

        return view('horror.index', compact('horror'));
    }

    public function show($id)
    {
        // Fetch the specific horror movie
        $horror = Movie::findOrFail($id);

        return view('horror.show', compact('movie'));
    }
}
?>

