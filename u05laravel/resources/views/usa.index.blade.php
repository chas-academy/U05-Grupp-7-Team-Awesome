@foreach($usa as $movie)
    <div>
        <a href="{{ route('usa.show', $movie->id) }}">
            <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
        </a>
        <a href="{{ route('usa', $movie->id) }}">{{ $movie->title }}</a>
    </div>
@endforeach

