<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
 <!-- Display success message if any -->
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- Comment Form -->
<form action="{{ route('comments.store') }}" method="POST">
    @csrf
    <input type="hidden" name="movie_id" value="{{ $userId }}">
    <div>
        <label for="rating">Rating:</label>
        <input type="number" name="rating" id="rating" min="1" max="5" required>
    </div>
    <div>
        <label for="content">Comment:</label>
        <textarea name="content" id="content" required></textarea>
    </div>
    <button type="submit">Submit</button>
</form>

<hr>

<!-- Display Existing Comments -->
@if ($comments->count() > 0)
    <h2>Comments</h2>
    @foreach($comments as $comment)
        <div>
            <p><strong>Rating:</strong> {{ $comment->rating }}</p>
            <p><strong>Content:</strong> {{ $comment->content }}</p>
        </div>
        <hr>
    @endforeach
@else
    <p>No comments yet.</p>
@endif

</body>
</html>