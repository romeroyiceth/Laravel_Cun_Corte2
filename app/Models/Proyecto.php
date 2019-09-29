<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table='proyectos';

    protected $fillable = ['nombre', 'fecha_inicio','fecha_entrega','empresa','programador_id' ];

    public function programadores(){
        return $this->belongsToMany('App\Models\Programador','programador_id');
    }
}
