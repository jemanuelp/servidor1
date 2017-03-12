<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SerieHasGenero extends Model
{
    //relacion pertenece a una Serie
    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }
    //relacion pertenece a un Genero
    public function genero()
    {
        return $this->belongsTo(Genero::class);
    }
}
