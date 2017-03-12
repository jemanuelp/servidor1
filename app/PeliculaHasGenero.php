<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeliculaHasGenero extends Model
{
    //relacion pertenece a una Pelicula
    public function pelicula()
    {
        return $this->belongsTo(Pelicula::class);
    }
    //relacion pertenece a un Genero
    public function genero()
    {
        return $this->belongsTo(Genero::class);
    }
}
