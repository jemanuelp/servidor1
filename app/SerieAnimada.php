<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SerieAnimada extends Model
{
    //marcamos la relación de uno a muchos entre Serie y SerieAnimadaHasAutor
    public function serieanimadahasautor()
    {
        return $this->hasMany(SerieAnimadaHasAutor::class);
    }
    //marcamos la relación de uno a muchos entre Serie y SerieAnimadaHasCapitulo
    public function serieanimadahascapitulo()
    {
        return $this->hasMany(SerieAnimadaHasCapitulo::class);
    }
    //marcamos la relación de uno a muchos entre Serie y SerieAnimadaHasGenero
    public function serieanimadahasgenero()
    {
        return $this->hasMany(SerieAnimadaHasGenero::class);
    }
}
