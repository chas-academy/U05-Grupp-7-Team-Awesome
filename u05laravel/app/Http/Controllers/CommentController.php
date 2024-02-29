<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\MyList;
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
        'rating' => 'required|integer|min:1|max:5',
        'movie_id' => 'required|exists:movies,id',
        'comment' => 'required|string',
    ]);

    // Create a new comment instance
    $comment = new Comment();

    // Assign attributes and save the comment
    $comment->user_id = auth()->user()->id;
    $comment->movie_id = $request->movie_id;
    $comment->rating = $request->rating;
    $comment->comment = $request->input('comment'); // Assign the comment field from the form

    // Save the comment
    $comment->save();

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

    // Define a default value for $movieId or retrieve it from the request if applicable
    $movieId = null; // Define a default value

    // Pass comments, movies, userId, and movieId to the view
    return view('comment')->with('comments', $comments)
                          ->with('movies', $movies)
                          ->with('userId', $userId)
                          ->with('movieId', $movieId); // Pass movieId
                              
    }
    
    /**
     * Display comments for a specific movie.
     *
     * @param  int  $movie_id
     * @return \Illuminate\Http\Response
     */
    public function getCommentsByMovies($movie_id)
    {
        // Find the movie with the given ID
        $movie = Movie::find($movie_id);
        
        if (!$movie) {
            // Redirect back with error message if movie not found
            return redirect()->back()->with('error', 'Movie not found.');
        }
        
        // Fetch comments for the movie
        $comments = $movie->comments;
    
        // Return the view with the movie details and comments
        return view('comment', ['movie' => $movie, 'movieId' => $movie_id, 'comments' => $comments]);
    }
    
    /**
     * Display comments for all movies.
     *
     * @return \Illuminate\Http\Response
     */
    public function allMoviesComments()
    {
        // Fetch all movies with their associated comments
        $movies = Movie::with('comments')->get();
    
        // Pass data to the view
        return view('comments', compact('movies'));
    }
}