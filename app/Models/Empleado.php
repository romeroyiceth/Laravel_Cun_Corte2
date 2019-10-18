<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table='empleados';
    
    Protected $primary='id';

    protected $fillable = ['identificacion', 'nombre','apellido','contrato_id' ];

    public function contrato(){
        return $this->belongsTo('App\Models\Contrato','contrato_id','id');
    }
}
