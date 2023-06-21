@extends('layout')
@section('content')
<section class="create">
    <form method="POST" action="/users/authenticate">
        @csrf
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit">Log in</button>
        </div>

        <div id="have-account">
        <p class="redirect">Don't have an account?
        <a class="register" href="/register">Register</a>
        </p>
        </div>
    </form>
</section>
@endsection
