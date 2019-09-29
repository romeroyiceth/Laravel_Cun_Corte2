<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $table='motores';

    protected $fillable = ['modelo', 'potencia','rendimiento','consumo','auto_id' ];

    public function auto(){
        return $this->belongsTo('App\Models\Auto','auto_id');
    }
}
