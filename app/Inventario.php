<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $fillable = [
        'codigo','estado', 'almacen_id', 'tipo_mov_id'
    ];
    
}
