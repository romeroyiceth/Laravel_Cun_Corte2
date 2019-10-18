<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $table='comics';

    protected $fillable = ['nombrecomic', 'fechapublicacion','fechafinalizacion','autor_id'];

    public function autors(){
        return $this->belongsToMany('App\Models\Autor','autor_id');
    }
}
