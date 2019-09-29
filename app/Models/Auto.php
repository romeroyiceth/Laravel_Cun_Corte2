<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    protected $table='autos';

    Protected $primary='id';
     
    protected $fillable = ['modelo', 'marca','color','numero_puertas','peso' ];

    public function motor(){
        return $this->hasOne('App\Models\Motor','auto_id','id');
    }
}
