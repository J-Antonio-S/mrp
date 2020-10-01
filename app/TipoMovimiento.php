<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMovimiento extends Model
{
    protected $table  = 'tipo_movimiento';

    protected $fillable = [
        'id',
        'codigo',
        'nombre'
    ];
}
