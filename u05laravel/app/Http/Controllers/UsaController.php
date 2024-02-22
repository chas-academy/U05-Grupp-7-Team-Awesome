<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class UsaController extends Controller
{
    public function index()
    {
        // get countries from the database 
        $usa = Movie::where('country', 'usa')->get();

        return view('usa.index', compact('usa'));
    }

    public function show($id)
    {
        // Fetch the specific horror movie
        $movie = Movie::findOrFail($id);

        return view('usa.show', compact('usa'));
    }
}
?>