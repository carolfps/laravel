<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Movie;
use App\Serie;

class Genre extends Model
{
    public function movies(){
        return $this -> hasMany(Movie::class);
    }

    public function series(){
        return $this -> hasMany(Serie::class);
    }
}
