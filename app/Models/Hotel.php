<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table='hoteles';

    protected $fillable = ['nit','nombre' ];

    public function reseña(){
        return $this->morphMany('App\Models\Reseña','reseñeable');
    }
}
