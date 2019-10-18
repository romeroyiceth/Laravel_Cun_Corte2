<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table='generos';

    protected $fillable = ['tipopublico','nombregenero'];
   
    public function peliculas(){
        return $this->hasMany('App\Models\Pelicula');
    }
}
