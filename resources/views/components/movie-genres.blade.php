@props(['genresCsv'])

@php
$genres = explode(',', $genresCsv);
@endphp

<div class="genre-list">
  @foreach($genres as $genre)
  <p>
    <a href="/?genre={{ $genre }}">{{ trim($genre, '[]"') }}</a>
  </p>
  @endforeach
</div>

