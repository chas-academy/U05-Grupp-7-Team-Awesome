<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Movie;


class CountryController extends Controller
{
    public function index()
    {
      // Den gör att hämta alla filmen från databasen
        $movies = Movie::all();
        // det gör att hämta   en special lista över ett land från lista 
        $countries = Movie::distinct()->pluck('country')->toArray();
        // Det gör att retun på lander blade med filmer och vilken länder är filmen
        return view('country', compact('movies', 'countries'));
    }
    //
    public function filter(Request $request)
    {
        $query = Movie::query();


        // Skapa en frågeinstans för att skapa en fråga för att filtrera filmer
        if ($request->has('country')) {
            $query->where('country', $request->input('country'));
        }


        $movies = $query->get();
        // Hämta på special listta den länder som kommer från filmer 
        $countries = Movie::distinct()->pluck('country')->toArray();
        return view('country', compact('movies', 'countries'));
    }
}
