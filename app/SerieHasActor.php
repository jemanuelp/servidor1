<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SerieHasActor extends Model
{
    //relacion pertenece a una Serie
    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }
    //relacion pertenece a un Actor
    public function actor()
    {
        return $this->belongsTo(Actor::class);
    }
}
