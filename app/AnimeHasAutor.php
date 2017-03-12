<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnimeHasAutor extends Model
{
    //relacion pertenece a un Autor
    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }
    //relacion pertenece a un Anime
    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }
}
