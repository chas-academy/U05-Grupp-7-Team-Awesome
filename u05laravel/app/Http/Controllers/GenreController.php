<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class GenreController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        $genres = Movie::distinct()->pluck('genre')->toArray();
        return view('genre', compact('movies', 'genres'));
    }

    public function filter(Request $request)
    {
        $query = Movie::query();

        // Filtrera baserat på genre
        if ($request->has('genre')) {
            $query->where('genre', $request->input('genre'));
        }

        $movies = $query->get();
        $genres = Movie::distinct()->pluck('genre')->toArray();
        return view('genre', compact('movies', 'genres'));
    }
}
