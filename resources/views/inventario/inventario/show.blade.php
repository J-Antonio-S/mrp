@extends('layouts.menu')

@section('title', ' | MRP')

@section('body-class', 'landing-page')

@section('styles')
    <style>

        


    </style>
@endsection

@section('contenido-central')
<div class="main ">
    <div class="container">

    <h2>Movimiento Inventario</h2>        
        
        <div class="tarjeta card card-crud">
            <div class="form-group">
                <label >Código: </label>
                <input disabled value={{ $inventario->codigo }} >
            </div>
            <div class="form-group">
                <label >Fecha: </label>
                <input disabled value= {{ $inventario->updated_at }} >
            </div>
            <div class="form-group">
                <label >Almacén: </label>
                <input disabled value= {{ $almacen->nombre }} >
            </div>
            <div class="form-group">
                <label >Tipo Movimiento: </label>
                <input disabled value= {{ $tipo->nombre }} >
            </div>

            <div class=" text-muted">
                Estado:
                @if($inventario->estado = 1)
                    Activo
                @else
                    Inactivo
                @endif
            </div>            
        </div>
        <div class="tarjeta card card-crud">
            <div class="form-group">
                {{Form::label('id_materia_prima','Seleccionar Materia Prima: ')}}
                <select name="id_materia_prima" id="id_materia_prima">Seleccionar Materia Prima
                    @foreach($materia_primas as $materia)
                        <option value="{{ $materia->id }}">
                            {{$materia->nombre}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad: </label>
                <input type="number" name="cantidad" id="cantidad" placeholder="cantidad de movimiento" >
            </div>
            <div class="form-group">
                {{Form::label('id_articulo','Seleccionar Articulo: ')}}
                <select name="id_articulo" id="id_articulo">Seleccionar Articulo
                    @foreach($articulos as $articulo)
                        <option value="{{ $articulo->id }}">
                            {{$articulo->nombre}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
            </div>
        </div>
        

    </div>
        
</div>

@endsection