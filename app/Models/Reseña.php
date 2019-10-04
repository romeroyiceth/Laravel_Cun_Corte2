<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reseña extends Model
{
    protected $table='reseñas';

    protected $fillable = ['contenido','reseñeable_id','reseñeable_type' ];

    public function reseñeable(){
        return $this->morphTo();
    }
}
