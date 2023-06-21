@extends('layout')
@section('content')
<section class="create">
    <form method="POST" action="/users">
        @csrf
        <div class="form-group">
            <label for="name">Username:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div class="form-group password-confirm">
            <label for="password_confirmation">Confirm password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>

        <button type="submit">Sign Up</button>

        @if($errors->has('email'))
        <p class="error-message">{{ $errors->first('email') }}</p>
        @elseif($errors->has('name'))
        <p class="error-message">{{ $errors->first('name') }}</p>
        @elseif($errors->has('password'))
        <p class="error-message">{{ $errors->first('password') }}</p>
        @endif


        <div id="have-account">
        <p class="redirect">Already have an account?
        <a class="login" href="/login">Login</a>
        </p>
        </div>
    </form>
</section>
@endsection
