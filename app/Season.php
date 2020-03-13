<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Episode;

class Season extends Model
{
    public function episodes(){
        return $this->hasMany(Episode::class);
    }
}
