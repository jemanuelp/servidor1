<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capitulo extends Model
{
    //marcamos la relación de uno a muchos entre Capitulo y AnimeHasCapitulo
    public function animehascapitulo()
    {
        return $this->hasMany(AnimeHasCapitulo::class);
    }
    //marcamos la relación de uno a muchos entre Capitulo y SerieAnimadaHasCapitulo
    public function serieanimadahascapitulo()
    {
        return $this->hasMany(SerieAnimadaHasCapitulo::class);
    }
    //marcamos la relación de uno a muchos entre Capitulo y SerieHasCapitulo
    public function seriehascapitulo()
    {
        return $this->hasMany(SerieHasCapitulo::class);
    }
}
