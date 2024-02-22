<?php

namespace App\Http\Controllers;

use App\Models\movie;
use App\Models\movies;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function edit(Movie $movie)
    {
        return view('films.edit', compact('movie'));
    }

    public function update(Request $request, Movie $movie)
    {
        $movie->update($request->all());

        return redirect()->back()->with('success', 'Movie updated successfully!');
    }
}

?>