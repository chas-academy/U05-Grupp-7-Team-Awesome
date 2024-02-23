<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class CountryController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        $countries = Movie::distinct()->pluck('country')->toArray();
        return view('country', compact('movies', 'countries'));
    }

    public function filter(Request $request)
    {
        $query = Movie::query();

        // Filtrera baserat på land
        if ($request->has('country')) {
            $query->where('country', $request->input('country'));
        }

        $movies = $query->get();
        $countries = Movie::distinct()->pluck('country')->toArray();
        return view('country', compact('movies', 'countries'));
    }
}
