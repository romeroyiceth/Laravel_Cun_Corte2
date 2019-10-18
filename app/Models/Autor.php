<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table='autors';

    protected $fillable = ['nombre', 'apellido','ciudadnacimiento'];

    public function comics(){
        return $this->belongsToMany('App\Models\Comic');
    }
}

