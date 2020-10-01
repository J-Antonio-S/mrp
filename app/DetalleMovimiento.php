<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleMovimiento extends Model
{
    protected $table  = 'detalle_movimiento';

    protected $fillable = [
        'cantidad',
        'id_materia_prima',
        'id_articulo'
    ];
}
