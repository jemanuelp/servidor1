<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SerieAnimadaHasAutor extends Model
{
    //relacion pertenece a una SerieAnimada
    public function serieanimada()
    {
        return $this->belongsTo(SerieAnimada::class);
    }
    //relacion pertenece a un Autor
    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }
}
