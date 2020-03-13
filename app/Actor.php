<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Episode;
use App\Movie;

class Actor extends Model
{
    public function episodes(){
        return $this -> belongsToMany(Episode::class);
    }

    public function movies(){
        return $this -> belongsToMany(Movie::class);
    }

    public function favorite_movie(){
        return $this -> belongsTo(Movie::class, 'favorite_movie_id');
    }
}
