<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    //marcamos la relación de uno a muchos entre Serie y SerieHasActor
    public function seriehasactor()
    {
        return $this->hasMany(SerieHasActor::class);
    }
    //marcamos la relación de uno a muchos entre Serie y SerieHasCapitulo
    public function seriehascapitulo()
    {
        return $this->hasMany(SerieHasCapitulo::class);
    }
    //marcamos la relación de uno a muchos entre Serie y SerieHasGenero
    public function seriehasgenero()
    {
        return $this->hasMany(SerieHasGenero::class);
    }
}
