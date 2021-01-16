@extends('layouts.menu')

@section('title', 'Producto '. $product->name .' | MRP')

@section('body-class', 'landing-page')

@section('styles')
    <style>
    </style>
@endsection

@section('contenido-central')
<div class="tarjeta">
    <div class="card col-md-7">
        <div class="card-title btn btn-primary">
            Producto
        </div>
        <div class="card-body">
            <span class="detalle">
                <h6 class="item col-md-4">Nombre:</h6>
                <p class="item col-md-8">{{ $product->name }}</p>
            </span>
            <span class="detalle">
                <h6 class="item col-md-4">Descripción:</h6>
                <p class="item col-md-8">{{ $product->description }}</p>
            </span>
            <span class="detalle">
                <h6 class="item col-md-4">Descripción larga: </h6>
                <p class="item col-md-8">{{ $product->long_description }}</p>
            </span>
            <span class="detalle">
                <h6 class="item col-md-4">Precio: </h6>
                <p class="item col-md-8">{{ $product->price }} Bs.</p>
            </span>
        </div>
        <span class=" text-muted">
            Código: {{ $product->id }} 
        </span>
    </div>
</div>
@endsection