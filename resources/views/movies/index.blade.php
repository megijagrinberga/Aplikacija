@extends('layout')
@include('partials._filterbox')
@endsection

@section('content')
<div id="moviebox" class="movie-container">
    @isset($movies)
        @unless(count($movies) == 0)
            @foreach($movies as $movie)
            <x-movie-card :movie="$movie"/>
            @endforeach
        @else
            <p class="womp-womp">No movies found</p>
        @endunless
    @else
        <p class="womp-womp">No movies found</p>
    @endisset
</div>
@endsection


