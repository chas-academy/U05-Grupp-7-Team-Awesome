<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyList; // Import the MyList model
use App\Models\Movie;
use Illuminate\View\View;

class MyListController extends Controller
{
    /*
     * Display the specified resource.
     */
        public function show($id)
        {
            $myList = MyList::find($id);

            if (!$myList) {
                return abort(404);
        }
        return view('mylist.show', ['myList' => $myList]);
    }
}