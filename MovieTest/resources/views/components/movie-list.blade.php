<div id="movie-list">
    <ul>
        @foreach ($movies as $movie)
            <li>
                {{ $movie -> title }}
                <img src="{{ asset('storage/posters/' . $movie -> poster) }}" alt="" style="width: 100px">
            </li>
        @endforeach
    </ul>
</div>