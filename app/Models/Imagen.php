<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected  $table='imagenes';
    protected $fillable =['url','imageable_id','imageable_type'];

    public function imageable(){
        return $this->morphTo();
}
}
