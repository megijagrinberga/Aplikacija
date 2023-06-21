<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class SeenController extends Controller
{
    public function seenMovie(Request $request, Movie $movie)
    {
        $user = auth()->user();
        $user->movies_seen()->attach($movie->id);

        return redirect()->back()->with('message', 'Marked as seen');
    }

    public function notSeenMovie(Request $request, Movie $movie)
    {
        $user = auth()->user();
        $user->movies_seen()->detach($movie->id);

        return redirect()->back()->with('message', 'Removed from seen');
    }
}

