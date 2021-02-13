@extends('layouts.menu')

@section('title', $contacto->nombre .' | MRP')

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
                <h6 class="item col-md-4">Nombre:</h6>
                <p class="item col-md-8">{{ $contacto->nombre }}</p>
            </span>
            <span class="detalle">
                <h6 class="item col-md-4">Cargo:</h6>
                <p class="item col-md-8">{{ $contacto->cargo }}</p>
            </span>
            <span class="detalle">
                <h6 class="item col-md-4">Teléfono:</h6>
                <p class="item col-md-8">{{ $contacto->telefono }}</p>
            </span>
            <span class="detalle">
                <h6 class="item col-md-4">Celular:</h6>
                <p class="item col-md-8">{{ $contacto->celular }}</p>
            </span>
            <span class="detalle">
                <h6 class="item col-md-4">Correo Electrónico:</h6>
                <p class="item col-md-8">{{ $contacto->correo }}</p>
            </span>
            <span class="detalle">
                <h6 class="item col-md-4">Nota:</h6>
                <p class="item col-md-8">{{ $contacto->nota }}</p>
            </span>
            <span class="detalle">
                <h6 class="item col-md-4">Proveedor al que pertenece:</h6>
                <p class="item col-md-8">{{ $proveedor->nombre }}</p>
            </span>
            <span class="detalle">
                <h6 class="item col-md-4">Estado: </h6>
                <p class="item col-md-8">
                    @if($contacto->estado == 1)
                        Activo
                    @else
                        Inactivo
                    @endif
                </p>
                
            </span>
        </div>
        <div class=" text-muted">
            Código: {{ $contacto->id }} 
        </div>
    </div>
</div>
@endsection