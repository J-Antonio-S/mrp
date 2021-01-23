@extends('layouts.menu')

@section('title', 'Almacene '. $almacen->name .' | MRP')

@section('body-class', 'landing-page')

@section('styles')
    <style>
    </style>
@endsection

@section('contenido-central')
<div class="tarjeta">
    <div class="card col-md-7">
        <div class="card-title btn btn-primary">
         Almacen
        </div>
        <div class="card-body">
            <span class="detalle">
                <h6 class="item col-md-4">Nombre:</h6>
                <p class="item col-md-8">{{ $almacen->codigo }}</p>
            </span>
            <span class="detalle">
                <h6 class="item col-md-4">Descripción:</h6>
                <p class="item col-md-8">{{ $almacen->descripcion }}</p>
            </span>
            <span class="detalle">
                <h6 class="item col-md-4">Descripción larga: </h6>
                <p class="item col-md-8">{{ $almacen->id_sucursal }}</p>
            </span>
        
        </div>

    </div>
</div>
@endsection