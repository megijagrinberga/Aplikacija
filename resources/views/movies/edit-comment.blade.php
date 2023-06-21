@extends('layout')

@section('content')
<section class="create">

<form action="{{ route('comments.update', $comment) }}" method="POST">
    @csrf
    @method('PUT')
    <textarea name="comment_body">{{ $comment->comment_body }}</textarea>
    <input type="hidden" name="previous_url" value="{{ $previousUrl }}">
    <button type="submit">Update</button>
</form>


</section>
@endsection
