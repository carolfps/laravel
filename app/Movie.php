<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Genre;
use App\Actor;

class Movie extends Model
{
    protected $fillable=['title','rating','awards','release_date','length'];
    public function genre(){
        return $this -> belongsTo(Genre::class);
    }

    public function actors(){
        return $this -> belongsToMany(Actor::class);
    }
}
