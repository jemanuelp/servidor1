<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnimeHasCapitulo extends Model
{
    //relacion pertenece a un Capitulo
    public function capitulo()
    {
        return $this->belongsTo(Capitulo::class);
    }
    //relacion pertenece a un Anime
    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }
}
