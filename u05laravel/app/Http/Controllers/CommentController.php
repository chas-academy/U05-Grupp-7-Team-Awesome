<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment; // Import the Comment model if not already imported
use App\Models\my_list;

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
        ]);

        // Create a new comment instance
        $comment = new Comment();

        // Assign attributes and save the comment
        $comment->user_id = auth()->user()->id;
        $comment->movie_id = $request->post_id;
        $comment->content = $request->content;
        $comment->rating = $request->rating;
       

        // Redirect back with success message
        return redirect()->back()->with('success', 'Comment added successfully.');
    }

    /**
     * Display a listing of the comments.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch comments from the database
        $comments = Comment::all(); // You may need to adjust this query based on your requirements

        // Fetch the user ID of the authenticated user
        $userId = auth()->user()->id;

        // Pass comments and userId to the view
        return view('comment')->with('comments', $comments)->with('userId', $userId);
    }
}