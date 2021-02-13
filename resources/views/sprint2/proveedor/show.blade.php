@extends('layouts.menu')

@section('title', $proveedor->nombre .' | MRP')

@section('body-class', 'landing-page')

@section('styles')
    <style>

    </style>
@endsection

@section('contenido-central')
<div class="tarjeta">
    <div class="card col-md-6">
        <div class="card-title btn btn-info">
            Proveedor
        </div>
        <div class="card-body">
            <span class="detalle">
                <h6 class="item col-md-4">Código:</h6>
                <p class="item col-md-8">{{ $proveedor->codigo }}</p>
            </span>
            <span class="detalle">
                <h6 class="item col-md-4">Foto:</h6>
                <p class="item col-md-8">{{ $proveedor->imagen }}</p>
            </span>
            <span class="detalle">
                <h6 class="item col-md-4">Nombre:</h6>
                <p class="item col-md-8">{{ $proveedor->nombre }}</p>
            </span>
            <span class="detalle">
                <h6 class="item col-md-4">Dirección:</h6>
                <p class="item col-md-8">{{ $proveedor->direccion }}</p>
            </span>
            <span class="detalle">
                <h6 class="item col-md-4">Teléfono :</h6>
                <p class="item col-md-8">{{ $proveedor->telefono }}</p>
            </span>
            <span class="detalle">
                <h6 class="item col-md-4">Correo Electrónico:</h6>
                <p class="item col-md-8">{{ $proveedor->correo }}</p>
            </span>
            <span class="detalle">
                <h6 class="item col-md-4">Municipio:</h6>
                <p class="item col-md-8">{{ $municipio->nombre }}</p>
            </span>
            <span class="detalle">
                <h6 class="item col-md-4">Estado: </h6>
                <p class="item col-md-8">
                    @if($proveedor->estado == 1)
                        Activo
                    @else
                        Inactivo
                    @endif
                </p>
                
            </span>
        </div>
        <div class=" text-muted">
            Código: {{ $proveedor->id }} 
        </div>
    </div>
</div>
@endsection