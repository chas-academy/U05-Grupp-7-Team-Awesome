<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horror Movies</title>
</head>
<body>
    <h1>Horror Movies</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 sm:grid-cols-3 gap-8">
        <h3>The Ring</h3>
        <a href="#">
            <img src="{{ asset('seed-moviecover/The-ring.jpg') }}" alt="The Ring" class="hover:opacity-75 transition ease-in-out duration-150">
        </a>
        <p>Ring (リング, Ringu) is a 1998 Japanese supernatural psychological horror film directed by Hideo Nakata, 
            based on the 1991 novel by Koji Suzuki. The film stars Nanako Matsushima, Miki Nakatani and Hiroyuki Sanada, 
            and follows a reporter who is racing to investigate the mystery behind a cursed video tape; whoever 
            watches the tape dies seven days after doing so.
</p> <br>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 sm:grid-cols-3 gap-8">
        <h3>Audition</h3>
        <a href="#">
            <img src="{{ asset('seed-moviecover/Audition.jpg') }}" alt="Audition" class="hover:opacity-75 transition ease-in-out duration-150">
        </a>
        <p>Audition (オーディション, Ōdishon) is a 1999 horror film directed by Takashi Miike, based on the 1997 novel by Ryu Murakami. 
            Starring Ryo Ishibashi and Eihi Shiina, the film is about a widower, Shigeharu Aoyama (Ishibashi), 
            who stages a phony audition to meet a potential new romantic partner. After interviewing several women, 
            Aoyama becomes interested in Asami (Shiina), whose dark past affects their relationship.</p> <br>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 sm:grid-cols-3">
        <h3>One cut of the dead</h3>
        <a href="#">
            <img src="{{ asset('seed-moviecover/One-cut-of-the-dead.jpg') }}" alt="One cut of the dead" class="hover:opacity-75 transition ease-in-out duration-150">
        </a>
        <p>One Cut of the Dead (カメラを止めるな!, Kamera o Tomeru na!, transl. "Don't Stop the Camera!") is a 2017 Japanese zombie comedy film 
            written and directed by Shin'ichirō Ueda. It follows a team of actors and filmmakers who are tasked with shooting 
            a zombie film for live television, and who must do so in a single take.</p> 
    </div>

</body>
</html>
<!-- 
@foreach($horrorMovies as $movie)
    <div>
        <a href="{{ route('horror-movies.show', $movie->id) }}">
            <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
        </a>
        <a href="{{ route('horror.show', $movie->id) }}">{{ $movie->title }}</a>
    </div>
@endforeach
