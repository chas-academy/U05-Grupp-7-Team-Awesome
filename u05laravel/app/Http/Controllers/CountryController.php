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
        $country = $request->input('country');
        if ($country) {
            $movies = Movie::where('country', $country)->get();
        } else {
            $movies = Movie::all();
        }
        $countries = Movie::distinct()->pluck('country')->toArray();
        return view('country', compact('movies', 'countries'));
    }
}
