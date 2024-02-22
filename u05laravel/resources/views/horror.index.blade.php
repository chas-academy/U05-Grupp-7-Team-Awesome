@foreach($horror as $movie)
    <div>
        <a href="{{ route('horror.show', $movie->id) }}">
            <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
        </a>
        <a href="{{ route('horror.show', $movie->id) }}">{{ $movie->title }}</a>
    </div>
@endforeach
