@foreach($japan as $movie)
    <div>
        <a href="{{ route('japan.show', $movie->id) }}">
            <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
        </a>
        <a href="{{ route('japan.show', $movie->id) }}">{{ $movie->title }}</a>
    </div>
@endforeach
