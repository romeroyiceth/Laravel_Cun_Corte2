<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cafeteria extends Model
{
    protected $table='cafeterias';

    protected $fillable = ['nit','nombre' ];

    public function reseña(){
        return $this->morphMany('App\Models\Reseña','reseñeable');
    }
}
