@extends('layout')

@section('content')
<section class="create">
    <form method="POST" action="/movies" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="language">Language:</label>
            <select id="language" name="language" required>
                    <option value="..." disabled selected></option>
                    <option value="German">German</option>
                    <option value="Chinese">Chinese</option>
                    <option value="French">French</option>
                    <option value="Spanish">Spanish</option>
            </select>
        </div>

        <div class="form-group">
            <label for="genres">Genres:</label>
            <select id="genres" name="genres[]" multiple required>
                <option value="Thriller">Thriller</option>
                <option value="Comedy">Comedy</option>
                <option value="Drama">Drama</option>
                <option value="Romcom">Romcom</option>
                <option value="Horror">Horror</option>
                <option value="Historic">Historic</option>
                <option value="Mystery">Mystery</option>
                <option value="Romance">Romance</option>
                <option value="Action">Action</option>
            </select>
        </div>


        <div class="form-group">
            <label for="year">Year:</label>
            <input type="number" id="year" name="year" required>
        </div>

        <div class="form-group">
            <label for="directors">Directors:</label>
            <input type="text" id="directors" name="directors" required>
        </div>

        <div class="form-group">
            <label for="length">Length:</label>
            <input type="number" id="length" name="length" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="logo">Image:</label>
            <input type="file" id="logo" name="logo">
        </div>

        <button type="submit">Create Movie</button>
        </form>
    </form>
</section>
@endsection
