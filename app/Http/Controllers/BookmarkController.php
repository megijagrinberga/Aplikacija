<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
class BookmarkController extends Controller
{
    public function bookmarkMovie(Request $request, Movie $movie)
    {
        $user = auth()->user();
        $user->movies_bookmark()->attach($movie->id);

        return redirect()->back()->with('message', 'Added to bookmarks');
    }

    public function unbookmarkMovie(Request $request, Movie $movie)
    {
        $user = auth()->user();
        $user->movies_bookmark()->detach($movie->id);

        return redirect()->back()->with('message', 'Bookmark removed');
    }
}
