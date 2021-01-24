<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = [
        'nombre', 'codigo', 'estado', 'departamento_id'
    ];

    public function departamento(){
        return $this->belongsTo('App\Departamento');
    }
}
