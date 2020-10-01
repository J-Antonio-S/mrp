@extends('layouts.menu')

@section('title', 'Crear Movimiento Inventario')

@section('body-class', 'landing-page')

@section('styles')
    <style>

        .tarjeta {
            justify-content: center !important;
        }

    </style>
@endsection

@section('contenido-central')
<div class="main ">
    <div class="container">

    <h2>Movimiento Inventario</h2>        
        
        <div class="tarjeta card card-crud">
            <div class="form-group">
                <label for="hora">Código: </label>
                <input type="text" name="codigo" id="codigo" disabled value="MovInv{{$contador+1}}" >
            </div>
            <div class="form-group">
                <label for="hora">Fecha: </label>
                <input type="datetime-local" name="datetime" id="datetime" disabled value= {{ date('d-m-Y') }} >
            </div>


            {!! Form::open(['route' => ['inventario.store']]) !!}

            <input type="hidden" name="codigo" id="codigo" value="MovInv{{$contador+1}}" >

            @include('inventario.inventario.partials.form')

            {!! Form::close() !!}
        </div>
        

    </div>
        
</div>

@endsection