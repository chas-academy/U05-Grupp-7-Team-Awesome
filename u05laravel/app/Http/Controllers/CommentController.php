<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\MyList; // Import the MyList model

class CommentController extends Controller
{
    /**
     * Store a newly created comment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'movie_id' => 'required|exists:movies,id',
        ]);

        // Create a new comment instance
        $comment = new Comment();

        // Assign attributes and save the comment
        $comment->user_id = auth()->user()->id;
        $comment->movie_id = $request->movie_id;
        $comment->content = $request->content;
        $comment->rating = $request->rating;
        $comment->save();

        // Redirect to the method that handles adding to My List
        return redirect()->route('comments', ['movie_id' => $request->movie_id]);
    }

    /**
     * Add a movie to the user's list.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addToMyList(Request $request)
    {
        $request->validate([
            'movie_id' => 'required|exists:movies,id', // Validate that the movie exists
        ]);

        // Create a new record in the MyList table
        $myList = new MyList();
        $myList->user_id = auth()->user()->id;
        $myList->movie_id = $request->movie_id;
        $myList->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Movie added to My List successfully.');
    }

    /**
     * Display a listing of the comments.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch comments from the database
        $comments = Comment::all(); 

        // Fetch the user ID of the authenticated user
        $userId = auth()->user()->id;

        // Pass comments and userId to the view
        return view('comment')->with('comments', $comments)->with('userId', $userId);
    }
}