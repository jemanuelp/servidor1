<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeliculaHasActor extends Model
{
    //relacion pertenece a una Pelicula
    public function pelicula()
    {
        return $this->belongsTo(Pelicula::class);
    }
    //relacion pertenece a un Actor
    public function actor()
    {
        return $this->belongsTo(Actor::class);
    }
}
