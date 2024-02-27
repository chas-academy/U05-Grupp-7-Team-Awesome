<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class TopmovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Hämta alla filmer från movies-tabellen, sorterade efter högsta rating i fallande ordning
        $movies = Movie::withAvg('comments', 'rating')  // För att hämta genomsnittlig rating från relationen comments
            ->orderByDesc('comments_avg_rating') // Sortera efter genomsnittlig rating i fallande ordning
            ->get();

        return view('topmovie', ['movies' => $movies]);
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
