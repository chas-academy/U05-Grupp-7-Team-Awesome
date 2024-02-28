<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class GuestpageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('guestpage', compact('movies'));
    }
}
