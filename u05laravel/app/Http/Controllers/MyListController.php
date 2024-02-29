<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;
use App\Models\MyList;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class MyListController extends Controller
{
    /*
     
Display the specified resource.*/
    public function show()
    {   //Displayas i mylist blade
        $user_id = Auth::user()->id;
        $myList = MyList::where('user_id', $user_id)->first();
        $movies = $myList->movies()->get();

        if (!$myList) {
            return abort(404);
        }
        return view('mylist', ['myList' => $myList, 'movies' => $movies]);
    }
    public function addMovie($movie_id)
    {      //Lägger till Mylist 
        $user_id = Auth::user()->id;
        $myList = MyList::where('user_id', $user_id)->first();
        $myList->movies()->attach($movie_id);
        return redirect()->route('genre.index');
    }
    public function removeMovie($movie_id)
    {   //Deletar film från Mylist
        $user_id = Auth::user()->id;
        $myList = MyList::where('user_id', $user_id)->first();
        $myList->movies()->detach($movie_id);
        return redirect()->back();
    }
}
