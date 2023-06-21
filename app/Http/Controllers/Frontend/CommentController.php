<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Comment;
use App\Models\Movie;

class CommentController extends Controller
{
    public function store(Request $request){
        if(Auth::check()){
            $validator = Validator::make($request->all(), [
                'comment_body' => 'required|string'
            ]);
            if($validator->fails()){return redirect()->back()->with('message', 'Comment area is mandatory');}

            $movie = Movie::where('id', $request->movie_id)->first();

            if($movie){
                Comment::create([
                'movie_id' => $movie->id,
                'user_id' => Auth::user()->id,
                'comment_body' => $request->comment_body
                ]);
                return redirect()->back()->with('message', 'Commented successfully');
            }
            else {return redirect()->back()->with('message', 'No such post found'); }
        }
        else {return redirect('login')->with('message', 'Login first to comment'); }
    }

public function edit(Comment $comment)
{
    $previousUrl = url()->previous();

    return view('movies.edit-comment', compact('comment', 'previousUrl'));
}

public function update(Request $request, Comment $comment)
{
    $validatedData = $request->validate([
        'comment_body' => 'required|string',
    ]);

    $comment->update($validatedData);

    $previousUrl = $request->input('previous_url');

    return redirect($previousUrl)->with('message', 'Comment updated successfully.');
}

public function delete(Comment $comment)
{
    $comment->delete();

    return redirect()->back()->with('message', 'Comment deleted successfully.');
}


}
