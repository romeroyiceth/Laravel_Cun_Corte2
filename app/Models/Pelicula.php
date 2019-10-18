<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $table='peliculas';

    protected $fillable = ['nombrepelicula','fechaestreno','genero_id' ];

    public function genero(){
        return $this->belongsTo('App\Models\Genero','genero_id');
    }
}
