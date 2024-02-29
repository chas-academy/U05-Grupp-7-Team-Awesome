<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class GenreController extends Controller
{
    public function index()
    {
        // Den kan hämta alla filmen from Data base
        $movies = Movie::all();
        //Den gör att hämta en unik lista över genre från DB
        $genres = Movie::distinct()->pluck('genre')->toArray();
         // den Gör att returnerar på table elle lista som finns i blade filen och skickar med variablerna $movies 
        return view('genre', compact('movies', 'genres'));
    }

    public function filter(Request $request)
    {
        // Skapa en fråga för att skapa en fråga för att filtrera filmer.
        $query = Movie::query();

       // Filtrera efter vald genre om frågan innehåller en parameter som heter genres
        if ($request->has('genre')) {
            $query->where('genre', $request->input('genre'));
        }
         //hämta på filmern som man filtarerad
        $movies = $query->get();
        /// Returnerar vyn 'genre.blade.php' och skickar variablerna $movies och $genres till vyn.
    
        $genres = Movie::distinct()->pluck('genre')->toArray();
        return view('genre', compact('movies', 'genres'));
    }

    /// att hantera kommentaren specifk film 
    public function comment(Request $request, Movie $movie)
    {
       // behandla kommentarinlämningen här
// Du kan till exempel spara kommentaren i databasen

// Efter att kommentaren har bearbetats omdirigeras användaren till genreindexsida
        return redirect()->route('genre.index')->with('success', 'Comment submitted successfully!');
    }
}
