<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'codigo', 'descripcion', 'direccion', 'estado'
    ];
    public function estado(){
        return $this->belongTo(App\Estado);
    }

}
