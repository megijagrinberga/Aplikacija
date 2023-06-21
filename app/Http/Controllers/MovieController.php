<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //visas
public function index(Request $request)
{
    $filters = $request->only(['genres', 'search', 'language', 'length', 'year', 'bookmark', 'seen']);
    $movies = Movie::latest()->filter($filters)->get();

    return view('movies.index', compact('movies'));
}


    //viena
    public function show(Movie $movie){
         return view('movies.show', ['movie' => $movie]);
    }

    //izveides forma
    public function create(){
         return view('movies.create');
    }

    //uzglabā filmu
    public function store(Request $request)
{
    $formFields = $request->validate([
        'title' => 'required',
        'genres' => 'required|array',
        'genres.*' => 'distinct',
        'year' => 'required',
        'directors' => 'required',
        'description' => 'required',
        'language' => 'required',
        'length' => 'required',
    ]);

    if ($request->hasFile('logo')) {
        $formFields['logo'] = $request->file('logo')->store('logos', 'public');
    }

    $formFields['genres'] = implode(',', $formFields['genres']);

    Movie::create($formFields);

    return redirect('/')->with('message', 'Movie entry created successfully!');
}


    //rāda edit formu
    public function edit(Movie $movie){
        return view('movies.edit', ['movie' => $movie]);
    }

public function update(Request $request, Movie $movie)
{
    $formFields = $request->validate([
        'title' => 'required',
        'genres' => 'required',
        'year' => 'required',
        'directors' => 'required',
        'description' => 'required',
        'language' => 'required',
        'length' => 'required',
    ]);

    if ($request->hasFile('logo')) {
        $formFields['logo'] = $request->file('logo')->store('logos', 'public');
    }

    $movie->update($formFields);

    return redirect('/movies/' . $movie->id)->with('message', 'Movie entry updated successfully!');

}
  public function delete(Movie $movie){
      $movie->delete();
      return redirect('/')->with('message', 'Movie entry deleted successfully!');
  }
}
