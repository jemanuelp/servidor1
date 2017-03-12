<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    //marcamos la relaci�n de uno a muchos entre Autor y AnimeHasAutor
    public function animehasautor()
    {
        return $this->hasMany(AnimeHasAutor::class);
    }
    //marcamos la relaci�n de uno a muchos entre Autor y SerieAnimadaHasAutor
    public function serieanimadahasautor()
    {
        return $this->hasMany(SerieAnimadaHasAutor::class);
    }
}
