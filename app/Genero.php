<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    //marcamos la relación de uno a muchos entre Genero y SerieHasGenero
    public function seriehasgenero()
    {
        return $this->hasMany(SerieHasGenero::class);
    }
    //marcamos la relación de uno a muchos entre Genero y SerieAnimadaHasGenero
    public function serieanimadahasgenero()
    {
        return $this->hasMany(SerieAnimadaHasGenero::class);
    }
    //marcamos la relación de uno a muchos entre Genero y AnimeHasGenero
    public function animehasgenero()
    {
        return $this->hasMany(AnimeHasGenero::class);
    }
    //marcamos la relación de uno a muchos entre Genero y PeliculaHasGenero
    public function peliculahasgenero()
    {
        return $this->hasMany(PeliculaHasGenero::class);
    }
}
