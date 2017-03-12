<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    //marcamos la relación de uno a muchos entre Pelicula y PeliculaHasActor
    public function peliculahasactor()
    {
        return $this->hasMany(PeliculaHasActor::class);
    }
    //marcamos la relación de uno a muchos entre Pelicula y PeliculaHasGenero
    public function peliculahasgenero()
    {
        return $this->hasMany(PeliculaHasGenero::class);
    }
    //relacion pertenece a una Ruta
    public function ruta()
    {
        return $this->belongsTo(Rutum::class);
    }
}
