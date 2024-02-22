<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class ScifiController extends Controller

{
    public function index()
    {
        
        $scifi = Movie::where('genre', 'scifi')->get();

        return view('scifi.index', compact('scifi'));
    }

    public function show($id)
    {
        // Fetch the specific horror movie
        $scifi = Movie::findOrFail($id);

        return view('scifi.show', compact('movie'));
    }
}
