<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SerieAnimadaHasGenero extends Model
{
    //relacion pertenece a una SerieAnimada
    public function serieanimada()
    {
        return $this->belongsTo(SerieAnimada::class);
    }
    //relacion pertenece a un Genero
    public function genero()
    {
        return $this->belongsTo(Genero::class);
    }
}
