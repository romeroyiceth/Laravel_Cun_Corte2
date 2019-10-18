<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected  $table='administradores';
    protected $fillable =['nombre'];

    public function imagen() { 
        return $this->morphMany('App\Models\Imagen','imageable');
    }
}

