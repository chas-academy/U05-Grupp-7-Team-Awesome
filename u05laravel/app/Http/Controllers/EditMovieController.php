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



    // Denna används för att göra Edit förfrågan edit-movie.blade.php och länkas visare till update-movie.blade.php

    // Routen klar börja med att göra formuläret och kunna få ut de värden som skickas in fixa så att dessa saker kommer upp i fällt så att man kkan se dom och editera altså
    //  gå ini update-movie blade fil

    // public function edit(string $id)
    // {
    //     $movie = Movie::find($id);

    //     // Kontrollera om filmen hittades
    //     return view('update-movie', compact('movie'));
    // }

    public function edit($id)
    {
        // Hämta filmen baserat på id och visa redigeringsformuläret
        $movie = Movie::find($id);
        return view('update-movie', compact('movie'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Uppdatera filmen i databasen utan validering
        Movie::where('id', $id)->update($request->except(['_token', '_method']));

        // Omdirigera tillbaka till redigeringssidan med ett meddelande om att uppdateringen lyckades
        return redirect()->route('edit-movie', ['id' => $id])->with('success', 'Film updated successfully.');
    }




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
