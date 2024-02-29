<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class EditMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return view('edit-movie', compact('movies'));
    }

    // Mike

    // Id i edit tar in filmens id från knapptrycket och får upp information om filmen.


    public function edit($id)
    {
        // Hämta filmen baserat på id och visa redigeringsformuläret
        $movie = Movie::find($id);
        return view('update-movie', compact('movie'));
    }


    // Mike

    // Update tar emot 2 parametrar de ena är filmens id och det andra är den uppdaterade informationen
    // ValidateData kollar så att den informationen som kommer in har tex max 155 tecken eller att year är en iteger.


    public function update(Request $request, string $id)
    {
        // Validera om det behövs
        $validatedData = $request->validate([
            'titel' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'year' => 'required|integer',
            'director' => 'required|string|max:255',
        ]);

        // Uppdatera filmen i databasen
        Movie::where('id', $id)->update($validatedData);


        return redirect()->action([EditMovieController::class, 'index'])->with('success', 'Film updated successfully.');
    }

    // Mike

    // Sestroy söker upp filmen efter id och tar bort den.


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movie = Movie::find($id);

        if ($movie) {
            $movie->delete();
            return back()->with('success', 'Filmen har tagits bort!');
        } else {
            return back()->with('error', 'Kunde inte hitta filmen.');
        }
    }
}
