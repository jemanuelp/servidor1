<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rutum extends Model
{
    //relacion pertenece a una Pelicula
    public function pelicula()
    {
        return $this->belongsTo(Pelicula::class);
    }
    //relacion pertenece a un Capitulo
    public function capitulo()
    {
        return $this->belongsTo(Capitulo::class);
    }
}
