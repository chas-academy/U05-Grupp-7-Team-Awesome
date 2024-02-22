@foreach($scifi as $movie)
    <div>
        <a href="{{ route('scifi.show', $movie->id) }}">
            <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
        </a>
        <a href="{{ route('scifi.show', $movie->id) }}">{{ $movie->title }}</a>
    </div>
@endforeach
