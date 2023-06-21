<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;
use App\Models\Movie;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'genres', 'year', 'directors', 'description', 'language', 'length', 'logo'];

    public function users_seen()
    {
        return $this->belongsToMany(User::class, 'seen', 'movie_id', 'user_id');
    }

    public function users_bookmark()
    {
        return $this->belongsToMany(User::class, 'bookmarks', 'movie_id', 'user_id');
    }


public function scopeFilter($query, array $filters)
{
$query->when(isset($filters['genres']), function ($query) use ($filters) {
    $genres = explode(',', $filters['genres']);
    $query->where(function ($query) use ($genres) {
        foreach ($genres as $genre) {
            $query->orWhere('genres', 'like', '%' . trim($genre) . '%');
        }
    });
});

    $query->when(isset($filters['search']), function ($query) use ($filters) {
        $query->where('title', 'like', '%' . $filters['search'] . '%');
    });

    $query->when(isset($filters['language']), function ($query) use ($filters) {
        $languages = explode(',', $filters['language']);
        $query->whereIn('language', $languages);
    });

    $query->when(isset($filters['length']), function ($query) use ($filters) {
        switch ($filters['length']) {
            case 60:
                $query->where('length', '<', 60);
                break;
            case 90:
                $query->where('length', '<', 90);
                break;
            case 120:
                $query->where('length', '<', 120);
                break;
            case 180:
                $query->where('length', '<', 180);
                break;
        }
    });

    $query->when(isset($filters['year']), function ($query) use ($filters) {
        $query->where('year', $filters['year']);
    });

    $query->when(isset($filters['bookmark']), function ($query) use ($filters) {
        $query->whereHas('users_bookmark', function ($query) use ($filters) {
            $query->where('user_id', auth()->user()->id);
        });
    });

    $query->when(isset($filters['seen']), function ($query) use ($filters) {
        $query->whereDoesntHave('users_seen', function ($query) use ($filters) {
            $query->where('user_id', auth()->user()->id);
        });
    });

    return $query;
}



    public function user(){
        return $this->hasMany(User::class, 'created_by', 'id');
    }

    public function comments(){
        return $this->hasMany(Comment::class, 'movie_id', 'id');
    }
}


