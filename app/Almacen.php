<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'codigo', 'descripcion', 'sucursal'
    ];

    public function sucursal(){
        return $this->belongTo(App\Sucursal);
    }
}
