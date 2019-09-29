<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table='cursos';

    protected $fillable = ['nombre','fecha_inicio','fecha_final' ];
   
    public function clases(){
        return $this->hasMany('App\Models\Clase');
    }

    
    public function programas()
    {
        return $this->hasManyThrough('App\Models\Programa','App\Models\Clase');
    }
}
