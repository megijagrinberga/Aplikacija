<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\SeenController;
use App\Models\Movie;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Frontend\CommentController;

//Visas filmas
Route::get('/', [MovieController::class, 'index']);

//Rāda reģistrācijas formu
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Jauns lietotājs
Route::post('/users', [UserController::class, 'store']);

//Logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Login forma
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');;

//Login
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//Admin atļaujas
Route::group(['middleware' => ['auth', 'admin']], function () {
    //Izveides forma
    Route::get('movies/create', [MovieController::class, 'create']);

    //Uzglabā filmu
    Route::post('/movies', [MovieController::class, 'store']);

    //Rāda edit formu
    Route::get('/movies/{movie}/edit', [MovieController::class, 'edit']);

    //Edit submit uz update
    Route::put('/movies/{movie}', [MovieController::class, 'update']);

    //Delete
    Route::delete('/movies/{movie}', [MovieController::class, 'delete']);
});

Route::post('comments', [CommentController::class, 'store']);

// Edit comment
Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit')->middleware('auth');

Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');

// Delete comment
Route::delete('/comments/{comment}', [CommentController::class, 'delete'])->name('comments.delete')->middleware('auth');


Route::middleware('auth')->group(function () {
    Route::post('/movies/{movie}/bookmark', [BookmarkController::class, 'bookmarkMovie'])->name('movies.bookmark');
    Route::post('/movies/{movie}/unbookmark', [BookmarkController::class, 'unbookmarkMovie'])->name('movies.unbookmark');
});

Route::middleware('auth')->group(function () {
    Route::post('/movies/{movie}/seen', [SeenController::class, 'seenMovie'])->name('movies.seen');
    Route::post('/movies/{movie}/notseen', [SeenController::class, 'notSeenMovie'])->name('movies.notseen');
});


//Viena filma
Route::get('/movies/{movie}', [MovieController::class, 'show']);
