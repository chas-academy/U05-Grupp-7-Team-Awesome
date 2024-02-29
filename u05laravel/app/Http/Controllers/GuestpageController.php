<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class GuestpageController extends Controller
{
    public function show()
    {   //Hämtar in alla filmer och display på guestpage
        $movies = Movie::all();
        return view('guestpage', compact('movies'));
    }
}
