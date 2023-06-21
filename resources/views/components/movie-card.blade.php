@props(['movie'])

<div class="movie">
      <img class="poster" src="{{$movie->logo ? asset('storage/' . $movie->logo) : asset('/images/bob-ross.jpg')}}" alt="Poster"/>

      <div class="descriptor">
      <div class="title-year">
            <h2>
                <a href="/movies/{{$movie['id']}}">{{$movie['title']}}</a>
            </h2>
            <p class="movie-text-1 floater">{{$movie['year']}}</p>
        </div>
      @php
        $genres = str_replace(['[', ']', '"'], '', $movie['genres']);
        $genres = str_replace(',', ' ', $genres);
        @endphp
      <p class="movie-text-1">{{$genres}}</p>
      <p class="movie-text-1">{{ floor($movie['length'] / 60) }}h{{ $movie['length'] % 60 }}</p>
      </div>
</div>
