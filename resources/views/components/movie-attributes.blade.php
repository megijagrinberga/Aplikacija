@props(['movie'])

<div class="description">
      <p class="movie-text-2">Language: {{$movie['language']}}</p>
      <p class="movie-text-2">Year: {{$movie['year']}}</p>
      @php
        $genres = str_replace(['[', ']', '"'], '', $movie['genres']);
        $genres = str_replace(',', ' ', $genres);
      @endphp
      <p class="movie-text-2">Genre/-s: {{$genres}}</p>
      <p class="movie-text-2">Length: {{ floor($movie['length'] / 60) }}h{{ $movie['length'] % 60 }}</p>
      <p class="movie-text-2">Description: <p class="movie-text-2">{{$movie['description']}}</p></p>
  
</div>
