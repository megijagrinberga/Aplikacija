<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bablingo</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>

<body>
   <x-flash-message/>
<section id="top">
    <a href="https://bablingo.dev" id="motto">
        <h1>Bablingo</h1>
        <h3>Watch and learn</h3>
    </a>
    <div>
    <div id="register-login">
        @auth
        <p class="welcome">Welcome {{auth()->user()->name}}!</p>
        <form class="log-out" method="POST" action="/logout">
            @csrf
        <button class="button" type="submit">Log out</button>
        </form>
         @else
        <a href="/register">Register</a>
        <a href="/login">Login</a>
        @endauth
       <div class="dropdown">
    <i class="fa-solid fa-user user-icon"></i>
    @auth
        @if(auth()->user()->role === 'admin')
            <div class="dropdown-content">
                <a href="/movies/create">Create</a>
            </div>
        @endif
    @endauth
</div>
</div>

    <div id="search-box">
    
    <form id="search" action="/" method="GET">
        <input type="text" name="search" placeholder="Search by title">
        <button type="submit" class="search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
</div>
</section>
<hr class="separator">

    <x-flash-message/>

    @yield('filter-box')
    @yield('content')

</body>

</html>
