<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class JapanController extends Controller
{
    public function index()
    {
        // get countries from the database 
        $usa = Movie::where('country', 'japan')->get();

        return view('japan.index', compact('japan'));
    }

    public function show($id)
    {
        // Fetch the specific horror movie
        $movie = Movie::findOrFail($id);

        return view('japan.show', compact('japan'));
    }
}
?>

