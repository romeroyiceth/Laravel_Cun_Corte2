<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    protected $table='restaurantes';

    protected $fillable = ['nit','nombre' ];

    public function reseña(){
        return $this->morphMany('App\Models\Reseña','reseñeable');
    }
}
