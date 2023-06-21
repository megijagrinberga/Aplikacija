@extends('layout')

@section('content')
<section class="create">
    <form method="POST" action="/movies/{{$movie->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{$movie->title}}">
        </div>

       <div class="form-group">
            <label for="language">Language:</label>
            <select id="language" name="language" required>
                <option value="..." disabled></option>
                <option value="German" {{$movie->language == 'german' ? 'selected' : ''}}>German</option>
                <option value="Chinese" {{$movie->language == 'chinese' ? 'selected' : ''}}>Chinese</option>
                <option value="French" {{$movie->language == 'french' ? 'selected' : ''}}>French</option>
                <option value="Spanish" {{$movie->language == 'spanish' ? 'selected' : ''}}>Spanish</option>
            </select>
        </div>

        <div class="form-group">
            <label for="genres">Genres:</label>
            <select id="genres" name="genres[]" multiple required>
                <option value="Thriller" {{$movie->genres == 'Thriller' ? 'selected' : ''}}>Thriller</option>
                <option value="Comedy" {{$movie->genres == 'Comedy' ? 'selected' : ''}}>Comedy</option>
                <option value="Drama" {{$movie->genres == 'Drama' ? 'selected' : ''}}>Drama</option>
                <option value="Romcom" {{$movie->genres == 'Romcom' ? 'selected' : ''}}>Romcom</option>
                <option value="Horror" {{$movie->genres == 'Horror' ? 'selected' : ''}}>Horror</option>
                <option value="Historic" {{$movie->genres == 'Historic' ? 'selected' : ''}}>Historic</option>
                <option value="Mystery" {{$movie->genres == 'Mystery' ? 'selected' : ''}}>Mystery</option>
                <option value="Romance" {{$movie->genres == 'Romance' ? 'selected' : ''}}>Romance</option>
                <option value="Action" {{$movie->genres == 'Action' ? 'selected' : ''}}>Action</option>
            </select>
        </div>

        <div class="form-group">
            <label for="year">Year:</label>
            <input type="number" id="year" name="year"  value="{{$movie->year}}">
        </div>

        <div class="form-group">
            <label for="directors">Directors:</label>
            <input type="text" id="directors" name="directors"  value="{{$movie->directors}}">
        </div>

        <div class="form-group">
            <label for="length">Length:</label>
            <input type="number" id="length" name="length" value="{{$movie->length}}">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4">{{$movie->description}}</textarea>
        </div>

        <div class="form-group">
            <label for="logo">Image:</label>
            <input type="file" id="logo" name="logo" value="{{$movie->logo}}">
        </div>

        <button type="submit">Edit {{$movie -> title}}</button>
        </form>
    </form>
</section>
@endsection
