@extends('layout')

@section('content')
<div class="top-part">
<img class="poster-2" src="{{$movie->logo ? asset('storage/' . $movie->logo) : asset('/images/bob-ross.jpg')}}" alt="Poster"/>
<h2 class="movie-title">
    {{$movie['title']}}
</h2>
@auth
@if(auth()->user()->role === 'admin')
    <div class="button-group">
        <p class="icon"><i class="fa-solid fa-pen-to-square"></i><a href="/movies/{{$movie->id}}/edit"><button class="button">Edit</button></a></p>

        <form method="POST" action="/movies/{{$movie->id}}">
            @csrf
            @method('DELETE')
            <p class="icon"><i class="fa-solid fa-trash"></i><button class="button">Delete</button></p>
        </form>
    </div>
@endif
@endauth

@auth
    @if (auth()->user()->movies_bookmark->contains($movie->id))
        <form action="{{ route('movies.unbookmark', $movie) }}" method="POST">
            @csrf
            <i class="fa-solid fa-bookmark"></i><button class="button" type="submit">Unbookmark</button>
        </form>
    @else
        <form action="{{ route('movies.bookmark', $movie) }}" method="POST">
            @csrf
            <i class="fa-solid fa-bookmark"></i><button class="button" type="submit">Bookmark</button>
        </form>
    @endif

    @if (auth()->user()->movies_seen->contains($movie->id))
        <form action="{{ route('movies.notseen', $movie) }}" method="POST">
            @csrf
            <i class="fa-solid fa-eye"></i><button class="button" type="submit">Remove from seen</button>
        </form>
    @else
        <form action="{{ route('movies.seen', $movie) }}" method="POST">
            @csrf
            <i class="fa-solid fa-eye"></i></i><button class="button" type="submit">Add to seen</button>
        </form>
    @endif

@endauth

<div class="text"><x-movie-attributes :movie="$movie"/></div>
</div>

<div class="comment-part">
<h2>Comments</h2>
<div class="comment-box">
<form action="{{url('comments')}}" method="POST">
    @csrf
    <input type="hidden" name="movie_id" value="{{ $movie->id }}">
    <div>
        <textarea name="comment_body" id="comment_body" style="font-family:sans-serif;font-size:1.2em;" placeholder="Leave a comment" required></textarea>
    </div>
    <input class="button comment-submit" type="submit" value="Submit">
</form>
</div>
</div>
@forelse ($movie->comments->reverse() as $comment)
    <div id="comments-section">
        <div class="comment">
            <div class="comment-meta">
                    @if($comment->user)
                    <p class="comment-user">User {{$comment->user->name}}</p>
                    @endif
                    <p class="comment-date">commented on {{$comment->created_at->format('d-m-y')}}</p>
                </div>
            <p class="comment-content">{!! $comment->comment_body !!}</p>
            @if(Auth::check() && ($comment->user_id == auth()->user()->id || auth()->user()->role === 'admin'))
        <div class="comment-buttons">

        <a  class="button" href="{{ route('comments.edit', $comment) }}">Edit</a>


        <form action="{{ route('comments.delete', $comment) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="button" type="submit">Delete</button>
        </form>
    </div>
                </div>
            @endif
        </div>
    </div>
@empty
    <p class="womp-womp">No comments yet</p>
@endforelse

@endsection
