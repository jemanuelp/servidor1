<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    //marcamos la relación de uno a muchos entre Actor y SerieHasActor
    public function seriehasactor()
    {
        return $this->hasMany(SerieHasActor::class);
    }
    //marcamos la relación de uno a muchos entre Actor y PeliculaHasActor
    public function peliculahasactor()
    {
        return $this->hasMany(PeliculaHasActor::class);
    }
}
