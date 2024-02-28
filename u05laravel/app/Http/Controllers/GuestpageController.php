<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class GuestpageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        //$myList = MyList::where('user_id', $user_id)->first();??
        //$movies = $myList->movies()->get();??
        return view('guestpage', compact('movies'));
    }
}
