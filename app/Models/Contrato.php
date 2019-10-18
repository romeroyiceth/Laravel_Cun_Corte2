<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $table='contratos';

    Protected $primary='id';
     
    protected $fillable = ['fechainicio', 'fechacierre','condiciones'];
    
    public function empleado(){
        return $this->hasOne('App\Models\Empleado','contrato_id','id');
    }
}
