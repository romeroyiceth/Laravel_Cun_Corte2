<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected  $table='usuarios';
    protected $fillable =['nombre'];

    public function imagen() { 
        return $this->morphMany('App\Models\Imagen','imageable');
    }
}
