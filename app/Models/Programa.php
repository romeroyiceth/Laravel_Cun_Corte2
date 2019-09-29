<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table='programas';

    protected $fillable = ['registro','nombre','informacion_programa','clase_id' ];
   
    public function clase(){
        return $this->belongsTo('App\Models\Clase','clase_id');
    }
}
