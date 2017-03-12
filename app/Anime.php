<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    //marcamos la relaci�n de uno a muchos entre Anime y AnimeHasAutor
    public function animehasautor()
    {
        return $this->hasMany(AnimeHasAutor::class);
    }
    //marcamos la relaci�n de uno a muchos entre Anime y AnimeHasCapitulo
    public function animehascapitulo()
    {
        return $this->hasMany(AnimeHasCapitulo::class);
    }
}
