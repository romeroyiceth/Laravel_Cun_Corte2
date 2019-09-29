<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programador extends Model
{
    protected $table='programadores';

    protected $fillable = ['identificacion', 'nombre','apellido','correo','cargo' ];

    public function proyectos(){
        return $this->belongsToMany('App\Models\Proyecto');
    }
}
