<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Season;
use App\Actor;

class Episode extends Model
{
    public function season(){
        return $this -> belongsTo(Season::class);
        //return $this -> belongsTo("App\Season"); //equivalente a linha de cima

    }
    public function actors(){//o nome da function é no plural pois a relação é muitos para muitos
        return $this->belongsToMany(Actor::class);
    }
}
