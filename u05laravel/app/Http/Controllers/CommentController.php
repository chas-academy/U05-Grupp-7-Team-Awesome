<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\MyList; // Import the MyList model
use App\Models\Movie;

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
    
        // Fetch the movie ID and rating from the request
        $movieId = $request->movie_id;
        $rating = $request->rating;
    
        // Fetch comments from the database
        $comments = Comment::all(); 
    
        // Fetch the user ID of the authenticated user
        $userId = auth()->user()->id;
    
        // Pass comments, userId, and movieId to the view
        return view('comment')->with('comments', $comments)
                              ->with('userId', $userId)
                              ->with('movieId', $movieId)
                              ->with('rating', $rating);
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
    
        // Fetch movies from the database
        $movies = Movie::all();
    
        // Fetch the user ID of the authenticated user
        $userId = auth()->user()->id;
    
        // Pass comments, movies, and userId to the view
        return view('comment')->with('comments', $comments)
                              ->with('movies', $movies)
                              ->with('userId', $userId);
                              
    }
    Public function getCommentsByMovies($movie_id){
        
        $movie = Movie::where("id", $movie_id)->first();
         // Find the movie with the given ID
    $movie = Movie::find($movie_id);
    $comments = $movie->comments;


    // Return the view with the movie details
    return view('comment', ['movie' => $movie, 'movieId' => $movie_id, 'comments' => $comments]);
}
    }
