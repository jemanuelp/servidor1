<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnimeHasGenero extends Model
{
    //relacion pertenece a un Anime
    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }
    //relacion pertenece a un Genero
    public function genero()
    {
        return $this->belongsTo(Genero::class);
    }
}
