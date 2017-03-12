<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SerieHasCapitulo extends Model
{
    //relacion pertenece a una Serie
    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }
    //relacion pertenece a un Capitulo
    public function capitulo()
    {
        return $this->belongsTo(Capitulo::class);
    }
}
