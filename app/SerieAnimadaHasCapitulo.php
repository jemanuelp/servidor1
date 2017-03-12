<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SerieAnimadaHasCapitulo extends Model
{
    //relacion pertenece a una SerieAnimada
    public function serieanimada()
    {
        return $this->belongsTo(SerieAnimada::class);
    }
    //relacion pertenece a un Capitulo
    public function capitulo()
    {
        return $this->belongsTo(Capitulo::class);
    }
}
